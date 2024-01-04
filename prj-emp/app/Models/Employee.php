<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom'
    ];

    protected $hidden = [

 

    ];

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
