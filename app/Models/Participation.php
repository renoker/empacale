<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'participation_day_id',
        'codigo_lote',        
        'product_id'
    ];

    public function participation_day(){
        return $this->belongsTo(ParticipationDay::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function photos(){
        return $this->hasMany(Photo::class);
    }

    public function unchecked_photos()
    {
        return $this->hasMany(Photo::class)->where('photo_status_id', 1);
    }
    
    public function approved_photos()
    {
        return $this->hasMany(Photo::class)->where('photo_status_id', 2);
    }

    public function denied_photos()
    {
        return $this->hasMany(Photo::class)->where('photo_status_id', 3);
    }

    public function last_photo()
    {
        return $this->hasOne(Photo::class)->orderBy('created_at', 'DESC');
    }
}
