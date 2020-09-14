<?php  

public function cron_read_txt()
{
	$finalOutput = array();

	//Quebra o arquivo em linhas
	$lines = explode("\n", file_get_contents('./uploads/produto.txt'));

	// Percorre as linhas e gera matriz multidimensional, com linhas e colunas quebras pela ,
	foreach($lines as $line){
		$row = explode(",", $line);
		if($row != null) array_push($finalOutput,$row);
	}		
	
	// Percorre a matriz final organizada em linhas e colunas
	foreach($finalOutput as $txt) {
				
		echo '<pre>';
		print_r($check);
		echo '</pre>';
		
		echo $txt[0] . "<br>";
		echo $txt[1] . "<br>";
		echo $txt[2] . "<br>";
		echo $txt[3] . "<br>";
		echo $txt[4] . "<br>";
		echo $txt[5] . "<br>";
		echo $txt[6] . "<br>";
		echo $txt[7] . "<br>";
		echo $txt[8] . "<br>";
		echo $txt[9] . "<br>";
		echo $txt[10] . "<br>";
		echo $txt[11] . "<br>";
		echo $txt[12] . "<br>";
		echo $txt[13] . "<br>";
		echo $txt[14] . "<br>";
		echo $txt[15] . "<br>";
		echo $txt[16] . "<br>";
		echo $txt[17] . "<br>";
		echo $txt[18] . "<br>";
		echo $txt[19] . "<br>";
		echo $txt[20] . "<br>";
		echo $txt[21] . "<br>";
		echo $txt[22] . "<br>";
		echo $txt[23] . "<br>";
			
	}
}

?>