<?php

namespace App\Http\Controllers;

use App\Contracts\Repositories\UserRepository;
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
}
