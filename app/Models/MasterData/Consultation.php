<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Operational\Appointment;
class Consultation extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $table = 'consultation';
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $guarded = ['id'];

    public function appointment(){
        return $this->hasMany(Appointment::class, 'consultation_id');
    }
}
