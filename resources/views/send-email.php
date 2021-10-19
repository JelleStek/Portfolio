<?php

    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $message = $_POST['message'];

        $sendToEmail = "jelle@nwave.nl";

        $mailSendMessage = $email . "\n" . $tel . "\n\n" . $subject . "\n\n\n" . $message;

        mail($sendToEmail, $subject, $mailSendMessage);
    }
?>

<script>
    window.location.replace('/')
</script>
