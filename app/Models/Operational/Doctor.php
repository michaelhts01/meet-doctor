<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\MasterData\Specialist;

class Doctor extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $table = 'doctor';
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $guarded = ['id'];

    public function appointment(){
        return $this->hasMany(Appointment::class, 'doctor_id');
    }
    public function specialist(){
        return $this->belongsTo(Specialist::class, 'specialist_id');
    }
}
