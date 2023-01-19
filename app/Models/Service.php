<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AppointmentRating;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';

    public $primaryKey = 'id';

    public function appointmentrating() {
        return $this->hasMany(AppointmentRating::class);
    }
}
