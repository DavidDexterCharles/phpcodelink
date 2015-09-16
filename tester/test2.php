<?php
  include 'codelink.php';
  $program='test.py';

  $dataname='forminfo';
  $data=array(1,2,3,4);

  $dataname2='puredata';
  $data2='2+1';

 echo codelink_pass($program,$dataname,$data);
 echo codelink_pass($program,$dataname2,$data2);
?>