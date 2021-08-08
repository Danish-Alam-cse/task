<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require_once '../PHPMailer/src/PHPMailer.php';
require_once '../PHPMailer/src/SMTP.php';
require_once '../PHPMailer/src/Exception.php';
class Connect
{
    public $conn;
    function __construct()
    {
        $con = mysqli_connect('localhost', 'root', '', 'gbi_db');
        $this->conn = $con;
    }
    function insert($query)
    {
        if (mysqli_query($this->conn, $query)) {
            return true;
        } else {
            return false;
        }
    }
    function fetchOne($query)
    {
        $res = mysqli_query($this->conn, $query);
        return $res;
    }
    function update($query){
        if (mysqli_query($this->conn, $query)) {
            return true;
        } else {
            return false;
        }
    }
    function sendVerificationMail($to, $body)
    {
        $emailFrom = 'syedarsalanarshad808@gmail.com';
        $emailFromName = 'Global Business Inroads';
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
        $mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
        $mail->Port = 587; // TLS only
        $mail->SMTPSecure = 'tls'; // ssl is depracated
        $mail->SMTPAuth = true;
        $mail->Username = 'syedarsalanarshad808@gmail.com';
        $mail->Password = 'Arshu@Arsalan';
        $mail->setFrom($emailFrom, $emailFromName);
        $mail->addAddress($to);
        $mail->Subject = 'Verification Mail From Global Business Inroads';
        $mail->msgHTML($body); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
        $mail->AltBody = 'HTML messaging not supported';
        // $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file

        if (!$mail->send()) {
            return false;
        }else{
            return true;
        }
    }
}
