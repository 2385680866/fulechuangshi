<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LinkModel extends Model
{
    //主键id
    public $primaryKey='link_id';

    //绑定表名
    protected $table='link';
    //关闭时间戳
    // public $timestamps=false;

    //黑名单
    protected $guarded=[];
}
