<?
$domain = 'http://orion.sopdu.me/';
$db_name = 'orion_sopdu_me';         
$db_user = 'orion';         
$db_pass = '3H8j0Y5u';   
$db_loc = 'localhost'; 
$db = @mysql_connect($db_loc,$db_user,$db_pass);
//Проверяем, удачно ли прошло подключение
if(!$db){
    $connect_status = '<center><p style="color: red"><b>Невозможно подключиться к серверу базы данных !</b></p></center>';
    exit();
}
//Проверяем доступность нужной БД
if(!@mysql_select_db($db_name,$db)) {
    $connect_status =  '<center><p style="color: red"><b>База данных '.$db_name.' недоступна!</b></p></center>';
    exit();
}
//Вывод сообщения об удачном выполнении подключения
//Строку расположенную ниже после отладки - удалить
#$connect_status = '<center><p style="color: green"><b>Подключение к базе данных '.$db_name.' выполнено.</b></p></center>';
mysql_query("SET NAMES utf8");
?>
<?=$connect_status?>
