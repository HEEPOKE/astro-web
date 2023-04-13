<?php
  $webhook_url = 'https://discord.com/api/webhooks/1095956990120972328/6vfXl1NeW9VCk0MPK4wI0KzDcFI5rwGYqYULKw-jQN6XouqnCd7z6yalKmUJA5193FGz';

  $message = array('content' => 'ไอ้กากบาส!');

  $curl = curl_init($webhook_url);
  curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
  curl_setopt($curl, CURLOPT_POST, 1);
  curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($message));
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  curl_exec($curl);
  curl_close($curl);
?>