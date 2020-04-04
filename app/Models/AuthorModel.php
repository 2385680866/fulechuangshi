<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AuthorModel extends Model
{
    //主键id
    public $primaryKey='author_id';

    //绑定表名
    protected $table='author';
    //关闭时间戳
    // public $timestamps=false;

    //黑名单
    protected $guarded=[];
}
