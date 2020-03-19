<?
session_start();
session_register("username");

include ("koneksi.php");
function antiinjection($data){
  $filter_sql = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter_sql;
}

	$vusername=antiinjection($_POST[username]);
	$vpass=antiinjection($_POST[password]);
	$_SESSION['username']=$vusername;
	

	//username dan password di isi maka	
	$cari=mysql_query("SELECT * FROM user where username='$vusername' AND pass= '$vpass'");
	
	$cek=mysql_num_rows($cari);
	if($cek > 0)
	{
		?>
		<script language="javascript">alert("Anda Berhasil Login Selamat Datang DiWebsite Kami!!");</script>
        <?
		echo "<meta http-equiv=Refresh content=1;url=user/home.php?hal=1>";
	} else
	{
		?>
		<script language="javascript">alert("Password atau Username Anda salah!!");</script>
        <?
		echo "<meta http-equiv=Refresh content=1;url=index.php>";
		
	}		 

?>