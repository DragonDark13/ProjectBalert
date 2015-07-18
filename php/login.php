<?session_start();
require_once('../php/dbconnect.php');
$db = new DbConnect;
$login = trim($_POST["login"]);
$password = md5($_POST["password"]);
$query = "SELECT * FROM users WHERE login='$login'";
$result = $db->runQuery($query);
$myrow = mysqli_fetch_array($result);
if ($login==$myrow['login'] && $password == $myrow['password']  ) {
	$_SESSION['name'] = $myrow['name'];
	$_SESSION['lastname'] = $myrow['last_name'];
	$_SESSION['age'] = $myrow['age'];
	$_SESSION['city'] = $myrow['city'];
	$_SESSION['foto'] = $myrow['foto'];
  header("Location:../Profil_page/profil.php");
}
else {
	exit("Вы ввели неверный логин или пароль. Возможно вы не зареестрировались!!!");
}
?>