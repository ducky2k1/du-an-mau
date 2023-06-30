<?php
unset($_SESSION['login']);
unset($_SESSION['email']);
echo '<script>window.location.href="./index.php"</script>';
die;