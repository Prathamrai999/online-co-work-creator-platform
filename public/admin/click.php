<?php 

$file = 'click.txt'; // path to text file that stores counts
$fh = fopen($file, 'r+');
$id = $_REQUEST['id']; // posted from page
$lines = '';
while(!feof($fh)){
	$line = explode('||', fgets($fh));
	$item = trim($line[0]);
	$num = trim($line[1]);
	if(!empty($item)){
		if($item == $id){
			$num++; // increment count by 1
			echo $num;
			}
		$lines .= "$item||$num\r\n";
		}
	} 
file_put_contents($file, $lines);
fclose($fh);

?>	