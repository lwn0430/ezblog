<?php
//后台bg_comment评论表操作模型
class CommentModel extends Model
{
    //获取评论信息
    public function getComment()
    {
        $sql="select * from reply left join publish on rep_pub_id=pub_id order by rep_id asc";
        return $this->dao->fetchAll($sql);
    }
}