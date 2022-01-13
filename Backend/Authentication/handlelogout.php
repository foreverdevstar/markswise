<?php
session_start();
session_destroy();
header("Location: /markswise/Frontend/index.php?logoutsuccess=true");
?>