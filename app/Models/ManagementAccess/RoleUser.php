<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;


class RoleUser extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $table = 'role_user';
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $guarded = ['id'];

    public function role(){
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
