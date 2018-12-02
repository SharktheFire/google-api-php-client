<?php

include_once __DIR__ . '/../vendor/autoload.php';

$client = new \Google_Client();


$tuan = $client->getAccessToken();
$token_data = $client->verifyIdToken($tuan->id_token);

if ($token_data) {
    $data = $token_data->getAttributes();
    return $data['payload']['sub']; // user ID
}

return "NOOB";


// $backupCode = "\06903373";

// $accessToken = $client->authenticate($backupCode);

// function getUserFromToken()
// {
//     $backupCode = "\0081 3272";
//     $ticket = $client->verifyIdToken($backupCode);
//     if ($ticket) {
//         $data = $ticket->getAttributes();
//         return $data['payload']['sub']; // user ID
//     }
//     return false;
// }


// getUserFromToken();

// $client->fetchAccessTokenWithAuthCode($accessToken);
// // $client->setClientId($this->ci->config->item('client_id', 'google'));
// // $client->setClientSecret($this->ci->config->item('client_secret', 'google'));
// // $client->setRedirectUri($this->ci->config->item('callback_uri', 'google'));
// // $client->addScope('https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/plus.login');
// // $client->createAuthUrl();

// $oauth2 = new \Google_Service_Oauth2($client);


// $userInfo = $oauth2->userinfo->get();
// print_r($userInfo);

?>
