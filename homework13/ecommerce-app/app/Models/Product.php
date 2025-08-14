<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;



    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'user_id',
        'code',
        'title',
        'description',
        'price',
        'image',
    ];


    // user relation {One product HAS One user}
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
