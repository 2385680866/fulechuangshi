<?php

namespace App\Tools;


class Common 
{
    public static function getTree($cateInfo,$parend_id=0,$level=0)
    {
        
        static $list = [];
        foreach ($cateInfo as $key => $value) {
            if( $value['parend_id'] == $parend_id )
            {
                $value['level'] = $level;
                $list[]=$value;
                unset($cateInfo[$key]);
                getTree( $cateInfo, $value['cate_id'],$level+1);
            }
        }
        return $list;
    }
    public function getTree1($cateInfo,$pid=0)
    {
        $array = [];
        foreach ($cateInfo as $key => $value) {
            if( $value['parend_id'] == $pid )
            {
                dd($value);
                $array[$key] = $value;
                $array[$key]['son'] = $this->getTree1( $cateInfo, $value['cate_id']);
            }
        }
        dd($array);
        return $array;
    }
}
