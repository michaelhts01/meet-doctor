<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use App\Models\MasterData\Consultation;
class Appointment extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $table = 'appointment';
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $guarded = ['id'];

    public function transaction(){
        return $this->hasOne(Transaction::class, 'appointment_id');
    }
    public function doctor(){
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function consultation(){
        return $this->belongsTo(Consultation::class, 'consultation_id');    }
}
