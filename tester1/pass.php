<?php

//run executable
//this program writes the data to an input file in json format
//and calls the executable with the location of this file
//the executable will perform its job and output to a json output file
//the php will will then return the result as a php data structure

//program name as string, data is actual $POST

	echo (shell_exec('echo $PWD/jsons'));
	function pass($program,$data){
		$result = 'no executable found';

		// get $timestamp
		shell_exec('mkdir $PWD/jsons');
		shell_exec('chmod 777 $PWD/jsons');
		$timestamp = time();
		$myFile = shell_exec('echo $PWD/jsons').$timestamp.'-'.$program.'-input.json';
		$outFile = shell_exec('echo $PWD/jsons').$timestamp.'-'.$program.'-output.json';

		//write data using to time_stamp.json json_encode($data);
		//$myFile = "testFile.txt";
		$fh = fopen($myFile, 'w') or die("can't open file");
		
		fwrite($fh, json_encode($data));
		fclose($fh);

		//call exectutable using $program, time_stamp.json

		shell_exec($program.' '.$myfile);

		//read data $result = time_stamp-output.json
		$result = fread($outFile,filesize($outFile));
		//return $result
		return json_decode($result);
	}

?>