<?php

    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $message = $_POST['message'];

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
