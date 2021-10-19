<?php

    if(isset($_GET['submit'])) {
        $name = $_GET['name'];
        $subject = $_GET['subject'];
        $email = $_GET['email'];
        $tel = $_GET['tel'];
        $message = $_GET['message'];

        $sendToEmail = "jelle@nwave.nl";

        $mailSendMessage = $email . "\n" . $tel . "\n\n" . $subject . "\n\n\n" . $message;
        $headers = "Mail verstuurd door:" . $email;

        mail($sendToEmail, $subject, $mailSendMessage, $headers);
    }
?>

<script>
    setTimeout( () => {
        window.location.replace('/');
    }, 500);
</script>
