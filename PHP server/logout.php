<?php
session_start();
//destroy session
if(session_destroy()){
//return to index
header('Location: login.php');
}
?>