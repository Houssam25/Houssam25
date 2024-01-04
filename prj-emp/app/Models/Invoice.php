<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;


    protected $fillable = ['reference', 'employee_id'];

    
    public function details()
    {
        return $this->hasMany(Detail::class);
    }

    public function employees()
    {
        return $this->belongsTo(Employee::class);
    }

}
