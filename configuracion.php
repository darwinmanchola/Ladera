<?php 
 class  Config
	{
     public static $host = '127.0.0.1'; 
	 public static $user = 'root';         
	 public static $pass = '';					
	 public static $base = 'ladera';
     public static $home = '';
	 public static $home_lib = '';
	 public static $home_bin = '';
	 public static $url = '';
	 public static $ds = '';
	 //public static $dns='oci8://sigpro:sigpro@localhost/xe';
	}
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	
 Config::$ds = DIRECTORY_SEPARATOR;
 Config::$home = dirname(__FILE__);
 Config::$home_lib = Config::$home.Config::$ds.'lib'.Config::$ds;
 Config::$home_bin = Config::$home.Config::$ds.'bin'.Config::$ds;
 Config::$url = $pageURL;

?>