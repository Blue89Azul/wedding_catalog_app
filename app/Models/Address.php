<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    public function insert(array $insert_data)
    {
        $this->post_code     = $insert_data['post_code'];
        $this->prefecture_id = $insert_data['prefecture_id'];
        $this->city          = $insert_data['city'];
        $this->street        = $insert_data['street'];
        $this->building      = $insert_data['building'];

        $this->save();
    }
}
