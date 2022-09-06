<?php
//后台bg_article表操作模型
class ArticleModel extends Model
{
    //获取所有发布的文章信息    √
    public function getAllArticle()
    {
        //分页使用
        $pageNum=isset($_GET['pageNum'])?$_GET['pageNum']:1;
        $rowsPerPage=$GLOBALS['conf']['Page']['rowsPerPage'];
        $offset=($pageNum-1)*$rowsPerPage;
        $sql="select publish.*,module.module_name from publish left join module on pub_module_id=module_id where is_del='0' order by pub_time desc limit $offset,$rowsPerPage";
        return $this->dao->fetchAll($sql);
    }
    //根据id号删除文章
    public function delArtById($pub_id)
    {
        $sql="update publish set is_del='1' where pub_id=$pub_id";
        return $this->dao->my_query($sql);
    }
    //根据id号批量删除文章
    public function delAllArt($pub_ids)
    {
        $sql="update publish set is_del='1' where pub_id in($pub_ids)";
        return $this->dao->my_query($sql);
    }
    //获取所有已经逻辑删除了的文章信息
    public function getDelArt()
    {
        $sql="select publish.*,module.module_name from publish left join module on pub_module_id=module_id where is_del='1' order by pub_time desc";
        return $this->dao->fetchAll($sql);
    }
    //根据id号还原文章
    public function recoverArtById($art_id)
    {
        $sql="update publish set is_del='0' where pub_id=$art_id";
        return $this->dao->my_query($sql);
    }
    //根据id号彻底删除文章
    public function realDelArtById($art_id)
    {
        $sql="delete from publish where pub_id=$art_id";
        return $this->dao->my_query($sql);
    }
    //根据id号批量彻底删除文章
    public function realDelAllArt($art_ids)
    {
        $sql="delete from publish where pub_id in($art_ids)";
        return $this->dao->my_query($sql);
    }
    //获取文章的总记录数 √
    public function getRowCount()
    {
        $sql="select count(*) from publish where is_del='0'";
        return $this->dao->fetchColumn($sql);
    }
}