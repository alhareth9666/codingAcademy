<?php
define("HOST_NAME","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASENAME","tech");

$conn=mysqliDb(HOST_NAME,USERNAME,PASSWORD,DATABASENAME);
if(!$conn)
{
	die("could not connect to database check out database's info ");
}


?>