<?php 
    if(isset($_POST['submit'])){
        // if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $name = $_POST['name'];
            $subject = "Query Received from Finanziell";
            $mailFrom = $_POST['email'];
            $message = $_POST['message'];

            $mailTo = 'info.finanziell@gmail.com';
            $headers = "From: ".$mailFrom."\r\n"."To: ".$mailTo;
            $txt = "You have received an e-mail from ".$name."\n\n".$message;
            $confirmationMsg = "We have received your query and will get back to you as soon as possible...\n\n Regards \n Finanziell";

            if(mail($mailTo, $subject, $txt, $headers)){
                mail($mailFrom,'Query Submitted to Finanziell', $confirmationMsg, 'From: '.$mailTo);
                header("Location:/");
            }else{
                header("Location:index.php?tryagain");
            }
        // }
    }
?>