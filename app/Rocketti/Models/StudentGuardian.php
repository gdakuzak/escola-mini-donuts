<?php

namespace App\Rocketti\Models;

use Illuminate\Database\Eloquent\Model;

class StudentGuardian extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "student_guardian";

    protected $fillable = [
        'student_id','name','email','celular','cpf','rg','date_birth','cep','address','number','neighborhood','city','state'
    ];
}