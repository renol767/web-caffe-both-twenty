<?php

$curl = curl_init();

$title = $_POST['judul'];
$isi = $_POST['isi'];
$auth_key = "key=AAAApdX1WSE:APA91bFs8mtSzFErbDTKemiqu13oViuPxk_Etb8sMMrx3XcXo5j51mBIzpsaEk95Eih6BTjL1GCPJH8cqNRvxfK7f0SaEyKXNNpZJT9M4VbQVWSm5GmNMwkRG4AbaeQwmyILrEru2VSr";
$registration_ids = 
  "deZOnnM3SwCUOfmWQ5fd3m:APA91bHCzXUovDrr7ja9Hyi3ZAD54WFWwtE8_T5LeP-Gzh1oVMdr8D3DHpDxqmMYlr9oOgS4FAhEw233AtCr6T0z1GeZJ4ACDF_r7hBSjCmjJHFZ9iDbPlKKXHkpdcH3-9X1rbryGUCB"
;
$fields = array(
  'to' => $registration_ids,
  'notification' => array(
    'title' => $title,
    'isi' => $isi
  )
);
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://fcm.googleapis.com/fcm/send',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Authorization: '. $auth_key
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

/// Redirect
