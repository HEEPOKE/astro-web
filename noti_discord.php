<?php
  $webhook_url = 'https://discord.com/api/webhooks/1096039523605041192/rgP3USmbVpNJMqLwbnuvgV_1sVoRyQuF80i2Q1fA6qtx-ALsUWXd_QcX1HsJH9FQzqhh';


  $message = array('content' => 'AI KAK BASUKE STUPID!!!!!');

  $curl = curl_init($webhook_url);
  curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
  curl_setopt($curl, CURLOPT_POST, 1);
  curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($message));
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  curl_exec($curl);
  curl_close($curl);
?>
