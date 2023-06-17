<?php

namespace webfool\User\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class UserInfoModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password'
    ];
}
