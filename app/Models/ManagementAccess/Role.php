<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $table = 'role';
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $guarded = ['id'];

    public function permission_role(){
        return $this->hasMany(PermissionRole::class, 'role_id');
    }

    public function role_user(){
        return $this->hasMany(RoleUser::class, 'role_id');
    }
}
