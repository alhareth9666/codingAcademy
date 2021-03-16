<?php
function length($data)
{
	if(!empty($data)){
	$data=trim($data);
	if(strlen($data)<=9){
		$num=str_split($data,2);
		if($num['0']=='77'||$num['0']=='73'||$num['0']=='71'||$num['0']=='70')
			return "OK";
		else return "invalid phone number";
	}
	}
	else return "invalid phone number";
}
function letters($data)
{
	if (empty($data)) 
	{
		return "Name is required";
	} 
	else 
	{
		$name =trim($data);
		if (!preg_match("/^[a-zA-Z]*$/",$name)) 
		{
			return "Only letters allowed";
		}
	}
	 
}
function password($data)
{
		if (empty($data)) 
	{
		return "password is required";
	} 
	else 
	{
		$pass =trim($data);
		if (!preg_match("/^[a-zA-Z0-9]*$/",$pass)) 
		{
			return "Only letters and numbers allowed";
		}
	}	
}
function email($data)
{
		if (empty($data)) 
	{
		return "email is required";
	} 
	else 
	{
		$mail =trim($data);
		if (!preg_match("/^[a-zA-Z0-9@.]*$/",$mail)) 
		{
			return "you entered invalied email";
		}
	}	
}
function numbers($data)
{
		if (empty($data)) 
	{
		return false;
	} 
	else 
	{
		$id =trim($data);
		if (!preg_match("/^[0-9]*$/",$id)) 
		{
			return false;
		}
		else return true;
	}	
}
?>