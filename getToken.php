<?php
  
  //initialize session
  $ch = curl_init();

  //set options
  curl_setopt($ch, CURLOPT_URL, "https://stream.watsonplatform.net/authorization/api/v1/token?url=https://stream.watsonplatform.net/speech-to-text/api");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  //set username and password
  curl_setopt($ch, CURLOPT_USERPWD, "1b05cf90-5e87-4d95-8bb9-18cbc94682d3:PhQKfzM2PO9I");

  //execute session
  $dat = curl_exec($ch);

  //close session
  curl_close($ch);
  
  //make and write to file 'token' my data $dat
  $tokf = fopen($_SERVER['DOCUMENT_ROOT']."/token","w");
  fwrite($tokf, $dat);
  fclose($tokf);

  echo $dat;
  //echo 'Updated Token';
?>
