<?php

namespace App\Http\Controllers;

use App\Contracts\Repositories\UserRepository;
use App\Http\Requests\User\CreateRequest;
use App\Http\Requests\User\UpdateRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /** @var UserRepository  */
    protected $user;

    /**
     * UserController constructor.
     * @param UserRepository $user
     */
    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        if (\request()->ajax()){
            return $this->user->dataTableList();
        }
        return view('admin.users.list');
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(CreateRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['password'] = bcrypt($validatedData['password']);
        $this->user->create($validatedData);
        toast('User has been created!','success');
        return redirect()->route('users.list');
    }

    public function show($modelId)
    {
        $user = $this->user->find($modelId);
        return view('admin.users.view', compact('user'));
    }

    public function edit($modelId)
    {
        $user = $this->user->find($modelId);
        return view('admin.users.edit', compact('user'));
    }

    public function update($modelId, UpdateRequest $request)
    {
        $validatedData = $request->validated();
        if ($validatedData['password']){
            $validatedData['password'] = bcrypt($validatedData['password']);
        }else{
            unset($validatedData['password']);
        }
        $this->user->update($modelId, $validatedData);
        toast('User has been updated!','success');
        return redirect()->route('users.list');
    }
}
