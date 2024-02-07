<?php
namespace App\Repositories;

use App\Models\Prefecture;
use App\Models\Address;
use App\Models\User;

class UserRepository {
    private $prefectureModel;
    private $addressModel;
    private $userModel;

    public function __construct(
        PrefectureModel $prefectureModel,
        AddressModel $addressModel,
        UserModel $userModel
    ) {
        $this->prefectureModel = $prefectureModel;
        $this->addressModel    = $addressModel;
        $this->userModel       = $addressModel;
    }

    public function bulkSave(array $userList) {

    }
}