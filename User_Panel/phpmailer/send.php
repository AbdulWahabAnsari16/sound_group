<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

include 'conn.php';

if(isset($_POST["send"])){
   

    function generateRandomString($length = 6) {
        // $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
    
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
    
        return $randomString;
    }
    $code = generateRandomString();
    $un = $_POST['uname'];
    $em = $_POST['email'];
    $pass = $_POST['pass'];
    $passHash = password_hash($pass,PASSWORD_DEFAULT);
    $sql = "INSERT INTO `user`(`u_name`, `u_email`, `u_password`, `u_v_code`) VALUES ('$un','$em','$passHash','$code')";
    mysqli_query($conn,$sql);
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'abdulwahabb11023@gmail.com'; // Your email address
    $mail->Password = 'eyopcgoiaasvmztd'; // Your gmail app password
    $mail->SMTPSecure = 'ssl'; // Encryption (ssl or tls)
    $mail->Port = 465; // for ssl
    // $mail->Port = 587; // for tls

    //Recipients
    $mail->setFrom('abdulwahabb11023@gmail.com', 'Sound_Group');
    $mail->addAddress($_POST["email"]);
    
    // Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = "Verification Code";
    // $mail->Body = $_POST["message"];
    $mail->Body = 'Your Verification Code is -> ' . $code;

    $mail->send();
    echo '
    <script>
    alert("Email Sent Successfully");
    document.location.href = "verify.php"
    </script>
    ';


}

?>