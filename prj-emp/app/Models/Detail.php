<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'prenom', 'invoice_id'];

    
    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}
 