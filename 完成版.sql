# 1,创建数据库
create database bbs;

# 2,选择默认的数据库
use bbs;

# 3,创建用户表
create table bg_user(
	user_id int unsigned primary key auto_increment comment '主键ID',
	user_name varchar(20) not null unique key comment '用户名',
	user_pass char(32) not null comment '用户密码',
  user_image varchar(50) not null default 'default.jpg'
);

# 4,创建帖子表
create table publish(
	pub_id int unsigned primary key auto_increment comment '主键ID',
	pub_title varchar(50) not null comment '帖子标题',
	pub_content text not null comment '帖子内容',
	pub_owner varchar(20) not null comment '发帖者(楼主)',
	pub_time int unsigned not null comment '发帖的时间戳',
	pub_hits int unsigned not null default 0 comment '帖子浏览次数',
  pub_module_id int unsigned not null default 1,
  is_del enum('0','1') not null default '0' comment '是否删除'
);

# 5,创建回帖表
create table reply(
	rep_id int unsigned primary key auto_increment comment '主键ID',
	rep_pub_id int unsigned not null comment '外键,指向楼主帖子的id号',
	rep_user varchar(20) not null comment '回复者的名字',
	rep_content text not null comment '回复的内容',
	rep_time int unsigned not null comment '回帖的时间戳',
  rep_num int unsigned not null default 0,
  rep_quote_id int unsigned not null default 0
);

# 6，创建帖子分类表
create table module(
    module_id int(11) not null auto_increment,
    module_name varchar(250) not null,
    primary key(module_id)  
)

# 创建后台管理员表
create table bg_admin(
    admin_id tinyint unsigned primary key auto_increment,
    admin_name varchar(20) not null unique key,
    admin_pass char(32) not null,
    login_ip varchar(30) not null,
    login_nums int unsigned not null default 0,
    login_time int unsigned not null
);
--插入体验数据
insert into bg_admin values
    	(null, '刘文浓', md5('04301314'),'127.0.0.1',default,unix_timestamp()),
      (null, '王欣怡', md5('04301314'),'127.0.0.1',default,unix_timestamp());


--插入两条记录
insert into module values (1,'PHP技术'),
                          (2,'网络技术');
