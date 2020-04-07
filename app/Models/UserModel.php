<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{
     //主键id
     public $primaryKey='users_id';

     //绑定表名
     protected $table='users';
     //关闭时间戳
     // public $timestamps=false;
 
     //黑名单
     protected $guarded=[];
}
