<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;
    protected $table='participants';
    public $timestamps = true;
    protected $fillable=[
        'nom',
        'prenom',
        'numero',
        'email'
       
    ];
}
