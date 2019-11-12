<?php
$name = $_POST{'name'};
$email = $_POST{'email'};
$message = $_POST['message'];

$email_message = "

Name: ".$name."<br/>
Email: ".$email."<br/>
Message: ".$message."<br/>

";

$params = array(
    'content' => $email_message,
    'toEmail' => 'farzin.jabbary@gmail.com',
    'subject' => 'New Message'
);

$url = 'http://3.130.85.82/testmail.php' . '?' . http_build_query($params);

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
// curl_setopt($curl, CURLOPT_HTTPHEADER, $options);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
$curlResponse = curl_exec($curl);
header("location: ../index.html ");
?>


