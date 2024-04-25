<?php
session_start();
session_destroy();
header('Location: http://localhost/praktekweb/index.php?error=Anda Telah Logout');
?>