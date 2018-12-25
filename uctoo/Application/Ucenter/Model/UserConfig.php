<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15-4-9
 * Time: 下午3:56
 * @author 郑钟良<zzl@ourstu.com>
 */

namespace app\ucenter\model;

use think\Model;

class UserConfig extends Model
{
    public function addData($data = array())
    {
        $res = $this->save($data);
        return $res;
    }

    public function findData($map = array())
    {
        $res = $this->where($map)->find();
        return $res;
    }

    public function saveValue($map = array(), $value = '')
    {
        if ($this->findData($map)) {
            $res = $this->where($map)->setField('value', $value);
        } else {
            $map['value'] = $value;
            $res = $this->where($map)->addData($map);
        }

        return $res;
    }
} 