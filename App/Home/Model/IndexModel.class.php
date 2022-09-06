<?php
//前台bg_user表操作模型
class IndexModel extends Model
{
    //得到用户数据
    public function get_info($user_is)
    {
        $sql="select * from bg_user where user_is='$user_id'";
        return $this->dao->fetchRow($sql);
    }

}