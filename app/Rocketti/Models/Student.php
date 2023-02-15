<?php

namespace App\Rocketti\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "students";

    protected $fillable = [
        'name','email','celular','cpf','rg','date_birth','cep','address','number','neighborhood','city','state'
    ];
}