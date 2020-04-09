<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
     //主键id
     public $primaryKey='admin_id';

     //绑定表名
     protected $table='admin';
     //关闭时间戳
     // public $timestamps=false;
 
     //黑名单
     protected $guarded=[];
}
