<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AppointmentRating;

class Provider extends Model
{
    use HasFactory;
    protected $table = 'providers';

    public $primaryKey = 'id';

    public function appointmentrating() {
        return $this->hasMany(AppointmentRating::class);
    }
}
