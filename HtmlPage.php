<?php
ini_set('display_errors', true);
error_reporting(E_ERROR | E_PARSE | E_NOTICE | E_WARNING);

$base='ontime/';
include_once($base."OnTimetmp.php");
$Demo=new OnTime();
$Screen = $Demo->ShwCntIn('screen',"page");

?>

<!DOCTYPE html>
<html>
	<head>
		<title id='Description'><?php echo $Screen['head']; ?></title>
		<link rel="shortcut icon" href="<?php echo $Screen['icon']; ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1 minimum-scale=1" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="description" content="<?php echo $Screen['description']; ?>" />
		<meta name="keywords" content="<?php echo $Screen['keyword']; ?>" />
		<meta name="author" content="<?php echo $Screen['author']; ?>" />	
	</head>
<body>

<?php


$Demo->ot_show($tmp);


include_once('Classcommon.php');
$license = new CCLicense(3,2,1);
echo '<br>'.$license->logo . '</br>'; 

echo $license->url; 

?>

</body>
	
</html> 
			
			