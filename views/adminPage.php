<!--
Names: Brandon Burgess & Jack Zeng
File Name: reservationData.html
Date: 2/11/2023
Description: adoption page where users will be able to look through animals to adopt and click on them
to see more info about the pet
-->

<?php
// adding htmlentities to make sure <script> alert('ATTACK!')</script> won't work.
$uname = htmlentities($_POST['uname'], ENT_QUOTES, "UTF-8");
$pWord = htmlentities($_POST['psw'], ENT_QUOTES, "UTF-8");
$userName = "admin";
$passWord = "admin";

// hash the password, which can't be decryped.
$hash = password_hash($password,PASSWORD_DEFAULT);
// $uname = $_POST['uname'];
// $pWord = $_POST['psw'];
?>


<include href="views/header.html"></include>



        <body>



        </body>
<include href="views/footer.html"></include>