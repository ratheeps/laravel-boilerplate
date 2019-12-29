<?php


namespace App\Repositories;

use App\Contracts\Repositories\UserRepository as UserRepositoryInterface;
use App\User;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function __construct(User $user)
    {
        $this->setModel($user);
    }

    /**
     * @return mixed
     * @throws \Exception
     */
    public function dataTableList()
    {
        return datatables()->of($this->model->query())
            ->addColumn('action', function ($row) {
                $btn = '<a href="' . route('users.show', $row->id) . '" class="edit btn btn-primary btn-sm mr-1">View</a>';
                $btn .= '<a href="' . route('users.edit', $row->id) . '" class="edit btn btn-info btn-sm mr-1">Edit</a>';
                $btn .= '<a href="javascript:void(0)" data-id="' . $row->id . '" class="edit btn btn-danger btn-sm delete-btn">Delete</a>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->toJson();
    }
}
