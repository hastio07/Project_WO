<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;
    protected $fillable = ['nama_depan', 'nama_belakang', 'email', 'password', 'no_handphone', 'role', 'password'];
    protected $primaryKey = 'id';
}
