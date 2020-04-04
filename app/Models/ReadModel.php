<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReadModel extends Model
{
     //主键id
     public $primaryKey='read_id';

     //绑定表名
     protected $table='read';
     //关闭时间戳
     // public $timestamps=false;
 
     //黑名单
     protected $guarded=[];
}
