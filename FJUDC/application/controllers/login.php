<?php session_start();
class Login extends CI_Controller {

	public function index()
	{
		echo 'Hello World!';
		$account = $_POST["account"];
		$pwd = $_POST["pwd"];
		echo '接收到的內容為: '.$account.$pwd;

		$link = mysql_connect("127.0.0.1", "root", "400402515");
		mysql_query("SET NAMES 'UTF8'");
		mysql_select_db("doggyclub",$link)  or die("mysql_select_db() 資料庫無法連結！"); 
		if ($link) {
			echo 'fuck';
		}
		$result = mysql_query("SELECT * FROM people", $link);
		while ($row = mysql_fetch_array($result)) {
			$a = $row["people_account"];
			$b = $row["people_pwd"];
			$c = $row["people_name"];
			$d = $row["people_level"];
			echo '帳號='.$a."\n<br>";
			echo '密碼='.$b."\n<br>";
			echo '姓名='.$c."\n<br>";
			}
		if ($pwd!=$b) {
			header("location:http://localhost/fjudc/dc_homepage.php?login=error");
		}
		if ($account==$a&&$pwd==$b) {
			$_SESSION['account']=$a;
			$_SESSION['name']=$c;
			$_SESSION['level']=$d;
			echo $_SESSION['account'];
			echo $_SESSION['name'];
			echo $_SESSION['level'];
			header("location:http://localhost/fjudc/dc_homepage.php");
		}
	}
	public function logout(){
		session_destroy();
		header("location:http://localhost/fjudc/dc_homepage.php");
	}
}
?>