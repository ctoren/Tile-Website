<?php 
if(isset($_POST['submit'])){
    $to = "c.toren@me.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $compname = $_POST['compname'];
    $phone = $_POST['phone'];
    $subject = "Form submission";
    $message = $name . " " . $email . " " . $compname . " ". $phone . " " . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); }// sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    header("Location: https://www.mttileandmarbleinc.com");
    exit;
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    
?>

