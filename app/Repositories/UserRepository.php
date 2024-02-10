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

    // Transaction
    public function insert(array $userInfo): void
    {
        $prefectureId = $prefecture->getIdByName($userInfo['prefecture']);
        $userInfo['prefecture_id'] = $prefectureId;

        $address->insert($userInfo);
        
    }
}