<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>4k website tester</title>
    <style>
        iframe:focus {
            outline: none;
        }
        iframe{
            position: absolute;
            top:0px;
            left:0px;
        }
    </style>
</head>
<body>

<?php 
$data = array(
	'4k' => array('4096', '2160'),
	'qhd' => array('2560', '1290')
);
$default = '4k';
	if($_GET['res'] == 'qhd'){
		$default = 'qhd';
	}


?>
    <!-- CHANGE THE SRC TO THE PAGE YOU WANT TO DISPLAY -->
    <iframe src="http://localhost/dimon/codee/" width="<?php echo $data[$default][0];?>px" height="<?php echo $data[$default][1];?>px" frameborder="0"></iframe>
</body>
</html>
