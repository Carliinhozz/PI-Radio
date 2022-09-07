<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instrument extends Model
{
    use HasFactory;
    public function model()
    {
        return $this->belongsTo(InstModel::class, 'mod_id', 'id');    
    }
    protected $fillable = [
       'description',
       'mod_id',
    ];

}
