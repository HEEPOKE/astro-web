<?php
  $webhook_url = 'https://discord.com/api/webhooks/1095956977198317588/bw08WWE7NX_IDBHmLQj9B96iDtLi2QSGSczDsABkYxqOD6oAbv5Seb9ehivrimPEDuMz';

<<<<<<< HEAD
  $message = array('content' => 'AI KAK BASUKE!!!!!');
=======
  $message = array('content' => 'AI KAK BASYKE!!!!!');
>>>>>>> acdc4d2 (message)

  $curl = curl_init($webhook_url);
  curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
  curl_setopt($curl, CURLOPT_POST, 1);
  curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($message));
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  curl_exec($curl);
  curl_close($curl);
?>
