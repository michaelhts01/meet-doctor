<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\MasterData\TypeUser;
use App\Models\User;


class DetailUser extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'detail_user';
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $guarded = ['id'];

    public function user()
    {
       return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function type_user(){
        return $this->belongsTo(TypeUser::class, 'type_user_id', 'id');
    }
}
