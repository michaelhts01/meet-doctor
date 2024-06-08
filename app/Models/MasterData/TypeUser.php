<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\ManagementAccess\DetailUser;

class TypeUser extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $table = 'type_user';
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $guarded = ['id'];

    public function detail_user()
    {
       return $this->hasMany(DetailUser::class, 'type_user_id');
    }
}
