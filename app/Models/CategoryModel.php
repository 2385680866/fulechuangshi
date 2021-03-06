<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    //主键id
    public $primaryKey='cate_id';

    //绑定表名
    protected $table='category';
    //关闭时间戳
    // public $timestamps=false;

    //黑名单
    protected $guarded=[];
}
