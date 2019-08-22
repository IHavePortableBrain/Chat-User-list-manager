<?php
if(isset($_POST['msg']) && trim($_POST['msg']) !== '')
{
  session_start();
  $msg=$_POST['msg'];
  $username=$_SESSION['session_username'];
  $dateTimeJSON= json_encode(new DateTime(), JSON_HEX_QUOT|JSON_HEX_TAG|JSON_HEX_AMP|JSON_HEX_APOS|JSON_PRETTY_PRINT);
  require_once "connection.php";
  $res=mysqli_query($link,"INSERT INTO `messages` (`username`,`message`,`dateTime`) VALUES ('$username','$msg','$dateTimeJSON') ");
}
?>
