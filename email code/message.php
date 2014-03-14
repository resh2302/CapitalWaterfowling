<?php
require_once 'Mail.php';

$to = $_POST['to'];
$from = $_POST['from'];
$subject  = $_POST['subject'];
$body = $_POST['message'];
$url = $_POST['url'];
$body .= "<a href='" . $url . "'>Link</a>";
$is_body_html = true;

echo send_email($to, $from, $subject, $body, $is_body_html);

function send_email($to, $from, $subject, $body, $is_body_html = false) {
   

    $smtp = array();
    // **** You must change the following to match your
    // **** SMTP server and account information.
//    $smtp['host'] = 'ssl://smtp.gmail.com';
//    $smtp['port'] = 465;
//    $smtp['auth'] = true;
//    $smtp['username'] = 'example@gmail.com';
//    $smtp['password'] = 'supersecret';
    
    $smtp['host'] = 'capitalwaterfowlingc.netfirms.com';
    $smtp['port'] = 587;
    $smtp['auth'] = true;
    $smtp['username'] = 'dustin@capitalwaterfowling.com';
    $smtp['password'] = 'Password1';

//    $mailer = Mail::factory('smtp', array ('host' =>  $smtp['host'], 'auth' => true));
    
    $mailer = Mail::factory('smtp',$smtp);

    // Add the email address to the list of all recipients
    $recipients = array();
    $recipients[] = $to;

    // Set the headers
    $headers = array();
    $headers['From'] = $from;
    $headers['To']  = $to;
    $headers['Subject'] = $subject;
    if ($is_body_html) {
        $headers['Content-type']  = 'text/html';
    }

    // Send the email

    $result = $mailer->send($recipients, $headers, $body);
    // Check the result and throw an error if one exists
    return $result;
}


?>