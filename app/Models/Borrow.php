<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    use HasFactory;
    public function userId()
    {
        return $this->belongsTo(User::class, 'usr_id', 'id');    
    }    
    public function instrumentId()
    {
        return $this->belongsTo(Instrument::class, 'ins_id', 'id');    
    }    
}
