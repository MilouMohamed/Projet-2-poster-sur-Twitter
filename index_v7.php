<?php
 /// Med site te voir https://twitteroauth.com/
require "autoload.php"; 

use Abraham\TwitterOAuth\TwitterOAuth;
 
 
 // https://twitter.com/BbBtow
//COMPTE DE TEST
$connection = new TwitterOAuth('017lSsEoTJitckPNtl06iPNXZ',
 'V6teVyePwV0g8BcQXKtBsCzj5Rg3EInpSFTQKtWnmILHpllIbq', 
 '1518298804675616768-eMCRWrrNS0n2NDevp79Eat4FRYijok',
 'ofUSohh2pDaOVazImw85K7p0yEKUcnkwOzPWbGhMuFmOj');
  
 
 // Pour posteler 
 //  $connection->post("statuses/update", ["status" => "test de twiiter v12"]); 
   
 // Pour supprimer 
   // $connection->post("statuses/destroy", ["id" => "1519706107442339842"]); 
// id statu  1519685579067248641 

$media1 = $connection->upload('media/upload', ['media' => 'M1.PNG']);
$media2 = $connection->upload('media/upload', ['media' => 'M3.PNG']);
$parameters = [
    'status' => 'Deux images M1 ET M3 ',
    'media_ids' => implode(',', [$media1->media_id_string, $media2->media_id_string])
];
$result = $connection->post('statuses/update', $parameters);
 
 echo "TEST MED";