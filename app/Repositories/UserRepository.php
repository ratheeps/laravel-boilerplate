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
}
