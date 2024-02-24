<?php
require 'libs/PHPMailer-master/src/PHPMailer.php';
require 'libs/PHPMailer-master/src/SMTP.php';
require 'libs/PHPMailer-master/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$data = json_decode(file_get_contents("php://input"), true);

if (empty($data['name'])) {
    echo "Please enter your name";
} else if (empty($data['email'])) {
    echo "Please enter your email";
} else if (empty($data['country'])) {
    echo "Please enter your email";
} else if (empty($data['contact'])) {
    echo "Please enter your contact number";
} else if (empty($data['date_range0'])) {
    echo "Please set arrival date";
} else if (empty($data['date_range1'])) {
    echo "Please set departure date";
} else if (empty($data['date_start'])) {
    echo "Please set hopping date to tour start";
} else if (empty($data['members'])) {
    echo "Please enter number of member with you";
} else if (empty($data['message'])) {
    echo "Please enter your other needs";
} else {
    $hotel = "No Need";
    $vehicle = "Not Need";

    if ($data['vehicle']) {
        $vehicle = "Need";
    }

    if ($data['hotel']) {
        $hotel = "Need";
    }

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'mail.travelzoomlanka.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'info@travelzoomlanka.com';
        $mail->Password   = 'travelZOOM@24';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        $mail->setFrom('info@travelzoomlanka.com', 'TravelZoomLanka');
        $mail->addAddress('info@travelzoomlanka.com');

        $mail->isHTML(true);
        $mail->Subject = "New Tailer made Tour Form Submission";

        $mail->Body = "<html>
                        <head>
                        <style>
                            body {font-family: Arial, sans-serif; color: #333;}
                            .container {background-color: #f9f9f9; padding: 20px; border-radius: 10px; border: 1px solid #ddd;}
                            h1 {color: #007bff;}
                            p {margin: 10px 0;}
                            .label {font-weight: bold;}
                        </style>
                        </head>
                        <body>
                        <div class='container'>
                            <h1>Tailer made Tour Form Submission</h1>
                            <p><span class='label'>Full Name:</span> {$data['name']}</p>
                            <p><span class='label'>Email Address:</span> {$data['email']}</p>
                            <p><span class='label'>Phone Number:</span> {$data['contact']}</p>
                            <p><span class='label'>Your Country:</span> {$data['country']}</p>
                            <p><span class='label'>Number of Members:</span> {$data['members']}</p>

                            <p><span class='label'>Arraival Date:</span> {$data['date_range0']}</p>
                            <p><span class='label'>Departure Date:</span> {$data['date_range1']}</p>
                            <p><span class='label'>Tour Start Date:</span> {$data['date_start']}</p>

                            <p><span class='label'>Is Need vehicle:</span> {$vehicle}</p>
                            <p><span class='label'>Is Need Hotel:</span> {$hotel}</p>
                           
                            <p><span class='label'>Message:</span> {$data['message']}</p>
                        </div>
                        </body>
                        </html>
                        ";

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
