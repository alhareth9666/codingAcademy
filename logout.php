<?php if (session_start() != null) session_destroy();
include_once("includes/functions.php");

header("location:index.php");

?>