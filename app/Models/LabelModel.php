<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LabelModel extends Model
{
    //主键id
    public $primaryKey='label_id';

    //绑定表名
    protected $table='label';
    //关闭时间戳
    // public $timestamps=false;

    //黑名单
    protected $guarded=[];
}
