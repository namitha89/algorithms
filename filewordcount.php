<?php
$finalout = array(); 
$fp = fopen('myfile.txt', 'r');
while (!feof($fp))
{
    $line=fgets($fp);
    $output = wordscount($line);
    foreach(array_keys($output) as $key) {
    	if(array_key_exists($key, $finalout)) {
    		$finalout[$key] = $finalout[$key] + $output[$key]; // add key value to final array 

    	}
    	else {
    		$finalout[$key] = $output[$key];
    	}
    }

    

}
//var_dump($finalout);

function wordscount($input){

	$countwords = array();
	$outputarray = explode(' ', $input);
	foreach($outputarray as $out) {
		if(array_key_exists($out, $outputarray)){
			$countwords[$out] = $countwords[$out] +1;	
		}else {
			$countwords[$out] = 1;
		}
		
	}

	return $countwords;

	//var_dump($outputarray);

 
}
	
//wordscount('this is word and word is count')




//fclose($fp);
$data='https://d25tv1xepz39hi.cloudfront.net/2017-11-27/files/blob.';
$data = base64_decode($data);

echo $im = imagecreatefromstring($data);
if ($im !== false) {
    header('Content-Type: image/png');
    imagepng($im);
    imagedestroy($im);

}
else {
    echo 'An error occurred.';
}

?>

