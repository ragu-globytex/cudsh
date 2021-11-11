<?php 
if(isset($_POST['submit'])) {
  
  $to         = "appointment.cudsh@gmail.com"; // this is your Email address
  $from       = $_POST['email']; // this is the sender's Email address
  $date_time  = explode('T', $_POST['date']);
  $subject  = "Make an Appointment";
  $patient_subject = "Appointment";
  $mail_message='Dear Sir,'. "\r\n";
  $mail_message.='Appointemnt scheduled with Consultant :'.$_POST['doctor']."\r\n";
  $mail_message.='Speciality:'.$_POST['department']."\r\n";
  $mail_message.='Patient name:'.$_POST['name']."\r\n";
  $mail_message.='Age:'.$_POST['age']."\r\n";
  $mail_message.='Gender:'.$_POST['gender']."\r\n";
  $mail_message.='Aadhar No:'.$_POST['adhar']."\r\n";
  if(count($date_time)>1) {
    $mail_message.='Date:'.$date_time[0]."\r\n";
    $mail_message.='Time:'.$date_time[1]."\r\n";
  }
  $mail_message.=$_POST['message']."\r\n";
  $mail_message.='Thanks & Regards'."\r\n";
  $mail_message.=$_POST['name']."\r\n";
  $message = "Appointment Received!"."\r\n";
  $message.= 'Thanks & Regards'."\r\n";
  $message.= 'Cuddalore Speciality Hospital';
  $headers  = "From:" . $from;
  $patient_header = "From:" . $to;
  mail($to,$subject,$mail_message,$headers);
  mail($from,$patient_subject,$message,$patient_header); // sends a copy of the message to the sender
  // echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
  header("Location: http://globytex.com/cudsh");
}
?>