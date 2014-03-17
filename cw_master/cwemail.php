<?php
require_once 'Mail.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email  = $_POST['email'];
$msg =  $_POST['msg'];
$is_body_html = true;
$to = 'dustin@capitalwaterfowling.com';

echo send_email($fname, $lname, $email, $msg, $is_body_html);

function send_email($fname, $lname, $email, $msg, $is_body_html = false) {
   

    $smtp = array();
    
    $smtp['host'] = 'capitalwaterfowlingc.netfirms.com';
    $smtp['port'] = 587;
    $smtp['auth'] = true;
    $smtp['username'] = 'dustin@capitalwaterfowling.com';
    $smtp['password'] = 'Password1';
    
    $mailer = Mail::factory('smtp',$smtp);

    // Add the email address to the list of all recipients
    $recipients = array();
    $recipients[] = $to;

    // Set the headers
    $headers = array();
    // $headers['fname'] = $fname;
    // $headers['lname']  = $lname;
    $headers['From'] = $email;
    $headers['To'] = $to;
    $headers['Subject'] = 'Contact us - Capital Waterfowling';
    if ($is_body_html) {
        $headers['Content-type']  = 'text/html';
    }

    // Send the email

    $body = "Name : ".$fname." ".$lname."<br/>".$msg;

    $result = $mailer->send($recipients, $headers, $body);
    // Check the result and throw an error if one exists
    return $result;
}


?>