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

    public function participation_day()
    {
        return $this->belongsTo(ParticipationDay::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function vidas()
    {
        $vidas = 3;
        $score = Score::where('participation_id', $this->id)->count();
        $vidas = $vidas - $score;
        return $vidas;
    }
}
