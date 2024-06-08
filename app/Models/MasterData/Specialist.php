<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Operational\Doctor;
class Specialist extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $table = 'specialist';
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $guarded = ['id'];

    public function doctor()
    {
        return $this->hasMany(Doctor::class, 'specialist_id');
    }
}
