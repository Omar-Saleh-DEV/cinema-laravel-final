<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = ['seats'];

    public function cinema()
    {
        return $this->belongsTo(Cinema::class);
    }
    public function session()
    {
      return $this->hasMany(Session::class);
    }

}
