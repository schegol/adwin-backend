<?
// заменить на реальные
$host = "109.95.210.183";
$user = "u24366_a0";
$password = "6T0t6H5k";
echo 'texawftsd';
$db = false;
$db = mysql_pconnect($host, $user, $password);
if (!$db)
{
   echo "Не соединяется...<br>";
}
else
{
   echo "Соединилось!<br>";
}
echo($db);
echo 'textsd';
?>