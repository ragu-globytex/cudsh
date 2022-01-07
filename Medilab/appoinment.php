<?php 
if(isset($_POST['submit'])){
    var_dump("expression");die();
    $to = "appointment.cudsh@gmail.com"; // this is your Email address
    $name = $_POST['name'];
    $email = $_POST['email']; // this is the sender's Email address
    $phone = $_POST['phone']; // this is the sender's Email address
    $date = $_POST['date']; // this is the sender's Email address
    $department = $_POST['department']; // this is the sender's Email address
    $doctor = $_POST['doctor']; // this is the sender's Email address
    $subject = "Appoinment";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to; 
    mail($to,$name,$email,$phone,$date,$department,$doctor,$subject,$message,$headers);
    mail($from,$name,$email,$phone,$date,$department,$doctor,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>