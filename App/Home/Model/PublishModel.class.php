<?php
//前台bg_user表操作模型
class PublishModel extends Model
{
    //发布文章入库
    public function insertPublish($pubInfo)
    {
        extract($pubInfo);
        $sql="insert into publish values(null,'$pub_title','$pub_content','$pub_owner','$pub_time',default,default,default)";
        return $this->dao->my_query($sql);
    }
    //获取所有发布的文章信息
    public function getAllArticle()
    {
        //分页使用
        $pageNum=isset($_GET['pageNum'])?$_GET['pageNum']:1;
        $rowsPerPage=$GLOBALS['conf']['Page']['rowsPerPage'];
        $offset=($pageNum-1)*$rowsPerPage;
        $sql="select max(rep_time) as last_time,max(rep_num) as rep_nums,pub_id,user_image,pub_title,pub_owner,pub_time,pub_hits from publish left join bg_user on
         pub_owner=user_name left join reply on pub_id=rep_pub_id where is_del='0' GROUP BY pub_id order by pub_time desc limit $offset,$rowsPerPage";
        return $this->dao->fetchAll($sql);
    }
    //获取总共文章的数量
    public function getArtNum()
    {
        $sql="select count(*) from publish";
        return $this->dao->fetchColumn($sql);
    }
    //获取所有的文章版名
    public function getAllModule()
    {
        $sql="select * from module";
        return $this->dao->fetchAll($sql);
    }
    //获取该篇文章的所有信息
    public function getThisArticle($pub_id)
    {
        $sql="select * from publish left join bg_user on pub_owner=user_name where pub_id=$pub_id";
        return $this->dao->fetchRow($sql);
    }
    //更新点击后帖子的点击次数
    public function updateArticleHits($pub_id)
    {
        $sql="update publish set pub_hits=pub_hits+1 where pub_id=$pub_id";
        return $this->dao->my_query($sql);
    }
    //插入回帖的内容
    public function insertReply($repInfo)
    {
        extract($repInfo);      //将数组的键名变成变量名
        $sql="insert into reply values(null,$rep_pub_id,'$rep_user','$rep_content','$rep_time','$rep_num',default)";
        return $this->dao->my_query($sql);
    }
    //得到回帖的内容
    public function getReplyInfo($rep_pub_id)
    {
        //分页使用
        $pageNum=isset($_GET['pageNum'])?$_GET['pageNum']:1;
        $rowsPerPage=$GLOBALS['conf']['Page']['rowsPerPage'];
        $offset=($pageNum-1)*$rowsPerPage;
        $sql="select * from reply left join bg_user on rep_user=user_name where rep_pub_id=$rep_pub_id order by rep_time limit $offset,$rowsPerPage";
        return $this->dao->fetchAll($sql);
    }
    //得到该楼主的帖子得到的回帖总数
    public function getReplyNum($rep_pub_id)
    {
        $sql="select count(*) from reply where rep_pub_id=$rep_pub_id";
        return $this->dao->fetchColumn($sql);
    }
    //得到主贴的信息
    public function getPrimaryInfo($pub_id)
    {
        $sql="select * from publish where pub_id=$pub_id";
        return $this->dao->fetchRow($sql);
    }
    //得到被引用的帖子的信息
    public function getQuoteInfo($rep_id)
    {
        $sql="select * from reply where rep_id=$rep_id";
        return $this->dao->fetchRow($sql);
    }
    //插入引用贴的信息
    public function insertQuoteInfo($quoteInfo)
    {
        extract($quoteInfo);
        $sql="insert into reply values(null,'$rep_pub_id','$rep_user','$rep_content','$rep_time','$rep_num','$rep_quote_id')";
        return $this->dao->my_query($sql);
    }
    //分页操作，得到发布(publish)文章的总记录数
    public function getPublishNum()
    {
        $sql="select count(*) from publish";
        return $this->dao->fetchColumn($sql);
    }
    //得到被引用的帖子的信息
    public function getBeQuoteReplyInfo($rep_quote_id)
    {
        $sql="select * from reply where rep_id='$rep_quote_id'";
        return $this->dao->fetchRow($sql);
    }
}