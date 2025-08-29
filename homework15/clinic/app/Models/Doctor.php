<?php

namespace App\Models;

use App\Models\Major;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Doctor extends Model
{
    /** @use HasFactory<\Database\Factories\DoctorFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'image',
        'major_id',
    ];

    public function major()
    {
        return $this->belongsTo(Major::class);
    }

    public function getImageUrl()
    {
        $image = $this->image;
        if ($image) {
            return asset('front/images/doctors/' . $image);
        }

    }
}
