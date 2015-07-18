<?
require_once('dbconnect.php');
$db = new DbConnect;

$login = $_POST["login"];
$name = $_POST["name"];
$lastname = $_POST["soname"];
$age = $_POST["age"];
$email = $_POST["email"];
$password = $_POST["password"];
$password1 = $_POST["password1"];
$city = $_POST["city"];

//print_r($_FILES);
$dir1 = 'C:\OpenServer\domains\balert\user_images';
$dir = $_FILES["foto"]["name"];
$avatar = $_FILES["foto"]["name"];
$move = move_uploaded_file($_FILES["foto"]["tmp_name"],"$dir1/$avatar");
if (!$move) {
	echo "<br>Файл не загрузился";
}

if ($password != $password1) {
	exit("Пароли несовпадают!!!");
}
$password = md5($password);
$query = "INSERT INTO users(login,name,last_name,age,city,email,password,foto) 
		VALUES ('$login','$name','$lastname',$age,'$city','$email','$password','$dir')";
$result = $db->runQuery($query);
if ($result) {
	echo "Поздравляем, Вы успешно зареестрировались. Теперь войдите в свой профиль!!";
}