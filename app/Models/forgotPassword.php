<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class forgotPassword extends Model
{
    protected $table = 'forgot-password';
    protected $primaryKey = 'fpid';
}
