<?php
    if (isset($_POST['filmef'])){
    	setcookie('filmef',$_POST['filmef']);
    }

    if (isset($_COOKIE['filmef'])){
    	echo "Você já votou. Não pode votar novamente.";
    }else{
    	include 'enquete.html';
    }

?>
