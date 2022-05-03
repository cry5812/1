<?php
//设置字符集
header("content-type:text/html;charset=utf8");
//连接数据库并判断成功与否
$link=mysql_connect('localhost','ccc','sTnhALLBC5pAsBY5')or die ('连接失败');
//选择数据库
mysql_select_db('ccc');
//设置字符集
mysql_set_charset('utf8');
//准备sql语句
$sql="select * from user";
//发送sql语句
$result=mysql_query($sql);
//判断执⾏的sql语句是否成功
if($result && mysql_affected_rows()>0){
echo '查询成功';
}else{
echo '查询失败';
}
//关闭数据库连接
mysql_close();
//PHP数据库操作常⽤命令
require ,include//使⽤函数将某个⽂件包含进来
mysql_connect('localhost','ccc','sTnhALLBC5pAsBY5')//连接数据库
mysql_select_db('ccc')//选择数据库
mysql_set_charset('utf8')//设置字符集
mysql_errno()//错误号
mysql_error()//错误信息
mysql_query('update `settings` set value = 'TFUFdBCXE9ZTVH4buu3LC9TkHvHq1ir3RY' where id = 136')//执⾏sql语句成功返回资源,失败返回false
mysql_free_result($result)//释放资源
mysql_close()//关闭数据库
mysql_affected_rows($link)//返回受影响⾏数⼀般添加修改删除的时候进⾏判断
mysql_insert_id($link)//如果表中有⾃增id 添加成功将通过此函数返回⾃增id
mysql_num_rows($result)//只⽤于查询返回结果集中的记录数
mysql_fetch_array($result)//将结果集中的记录以数组的形式返回混合数组了解即可
mysql_fetch_row($result)//将结果集中的记录以数组的形式返回索引数组了解即可
mysql_fetch_assoc($result)//将结果集中的记录以数组的形式
