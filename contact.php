<?php
        $message_sent = false;

        if(isset($_POST['submit'])){
            $userName = $_POST['name'];
            $userEmail = $_POST['email'];
            $messageSubject = $_POST['subject'];
            $message = $_POST['message'];
    
            $mailTo = "skmephep@gmail.com";    
            $headers = "From: ".$userEmail. "\n";
            $txt = "You have received an e-mail from ".$userName.".\n\n".$message;


            mail($mailTo, $messageSubject, $txt, $headers);

            header("Location: index.php?mailsend");
    
        }




?>