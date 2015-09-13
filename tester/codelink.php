<?php

	function codelink_pass($program,$dataname,$data){
		// $result = 'no executable found';

		
		// // shell_exec('mkdir $PWD/jsons');
		// // shell_exec('chmod 777 $PWD/jsons');
		
		
<<<<<<< HEAD
		// /*Create input and output files*/ 
		// $myFile=dirname(__FILE__).DIRECTORY_SEPARATOR.'$PWD\jsons\\'.$dataname.'-input.json';
		//  shell_exec('chmod 777 '.$myFile);
		//  shell_exec('mkdir '.dirname(__FILE__).DIRECTORY_SEPARATOR.'$PWD\jsons\\');
		// $filedata=json_encode($data);
		// file_put_contents($myFile, $filedata);
=======
		/*Create input and output files*/ 
		$myFile=dirname(__FILE__).DIRECTORY_SEPARATOR.'$PWD\jsons\\'.$dataname.'-input.json';
		shell_exec('chmod 777 '.$myFile);
		shell_exec('mkdir '.dirname(__FILE__).DIRECTORY_SEPARATOR.'$PWD\jsons\\');
		$filedata=json_encode($data);
		file_put_contents($myFile, $filedata);
>>>>>>> b8214aa124815e03ed8aa899850730a615c51c39

		shell_exec('python '.$program.' '.$myfile);

		// //$myFile = shell_exec('echo $PWD/jsons/').$dataname.'-input.json';
		// //$outFile = shell_exec('echo $PWD/jsons/').$dataname.'-output.json';
		// #file_put_contents($myfile, $filedata);
  //       /*Store Data in myFile */ 

		// // $fh = fopen($myFile, 'w') or die("can't open file");
		// // fwrite($fh, json_encode($data));
		// // fclose($fh);

		
		// $result = $filedata; //fread($outFile,filesize($outFile));//read data $result = dataname-output.json
		

		// return json_decode($result);//return $result
		$result = '';
		

		$loc=shell_exec("echo \$PWD");
		$loca = substr($loc, 0, -1);
		$loc = $loca."/jsons/";
		$micro = microtime()*1000000;
		$time = time(). "" .$micro;
		$inFileName = $time."-".$dataname."-input.json";
		$outFileName = $time."-".$dataname."-output.json";
		$myfile = fopen($loc.$inFileName, "w");
		fwrite($myfile,json_encode($data));
		fclose($myfile);
		//file_put_contents($inFileName, json_encode($data));

		echo "loc: ".$loc."<br>";
		echo $inFileName."<br>";
		echo $outFileName."<br>";
		//$dataname=$program;

		shell_exec('python '.$program.' '.$dataname. " ". $time . " " . $loc);
	}

	//echo 'compiled<br>';

	//codelink_pass("ls",array(1,2,3,4));

?>