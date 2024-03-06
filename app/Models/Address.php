<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    public function insert(array $insert_data)
    {
        $this::create([
            'post_code'     => $insert_data['post_code'],
            'prefecture_id' => $insert_data['prefecture_id'],
            'city'          => $insert_data['city'],
            'street'        => $insert_data['street'],
            'building'      => $insert_data['building']
        ]);

        $this->save();
    }
}
