<?php
	///////////////////////////////////////////////////
	//         DataLog Interface Config File         //
	//                 by oliverw92                  //
	///////////////////////////////////////////////////
	//     Edit the config array below with your     //
	//     details. Make sure all strings are        //
	//     escaped. If you can't work this out,      //
	//     ask in the thread on bukkit.org.          //
	///////////////////////////////////////////////////
	$config = array(
					//Enter your MySQL database information
					//Do not change 'dbTable'
					"dbHost"  => "localhost",
					"dbDbase" => "minecraft",
					"dbUser"  => "root",
					"dbPass"  => "",
					"dbTable" => "datalog",
					
					//Set this to the password you want people to have to use to access the interface
					//Leave blank for no password
					"password" => ""
					);
	
	$con = mysql_connect($config["dbHost"], $config["dbUser"], $config["dbPass"]);
	if (!$con)
		die("Could not connect to MySQL Database!");
	if (!mysql_select_db($config["dbDbase"], $con))
		die(mysql_error());
		
	mysql_query("SET NAMES UTF8");
		
?>