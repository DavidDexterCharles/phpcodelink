<?php

	function codelink_pass($program,$dataname,$data){
		$result = 'no executable found';

		
		// shell_exec('mkdir $PWD/jsons');
		// shell_exec('chmod 777 $PWD/jsons');
		
		
		/*Create input and output files*/ 
		$myFile=dirname(__FILE__).DIRECTORY_SEPARATOR.'$PWD\jsons\\'.$dataname.'-input.json';
		shell_exec('chmod 777 '.$myFile);
		shell_exec('mkdir '.dirname(__FILE__).DIRECTORY_SEPARATOR.'$PWD\jsons\\');
		$filedata=json_encode($data);
		file_put_contents($myFile, $filedata);

		shell_exec('python '.$program.' '.$myfile);

		//$myFile = shell_exec('echo $PWD/jsons/').$dataname.'-input.json';
		//$outFile = shell_exec('echo $PWD/jsons/').$dataname.'-output.json';
		#file_put_contents($myfile, $filedata);
        /*Store Datat in myFile */ 

		// $fh = fopen($myFile, 'w') or die("can't open file");
		// fwrite($fh, json_encode($data));
		// fclose($fh);

		
		$result = $filedata; //fread($outFile,filesize($outFile));//read data $result = dataname-output.json
		

		return json_decode($result);//return $result
	}

?>