<?php
namespace App\Repositories;

use App\Models\Prefecture;
use App\Models\Address;
use App\Models\User;

class UserRepository {
    private Prefecture $prefecture;
    private Address $address;
    private User $user;

    public function __construct(Prefecture $prefecture, Address $address, User $user) 
    {
        $this->prefecture = $prefecture;
        $this->address    = $address;
        $this->user       = $user;
    }

    public function insert(array $userInfo): void
    {
        $this->address->insert($userInfo);
        $this->prefecture->insert($userInfo);
        $this->user->insert($userInfo);
    }
}