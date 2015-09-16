<?php
  include 'codelink.php';
  $program='test.py';

  $dataname='forminfo';
  $data=array(1,2,3,4,5,6,7,8,9,12);

  $dataname2='puredata';
  $data2=4;

 echo codelink_pass($program,$dataname,$data);
  echo '<br><br>';
 echo codelink_pass($program,$dataname2,$data2);

?>