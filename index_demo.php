<?php
//session_start();
//
//if(isset($_POST['g-recaptcha-response'])){
//    $captcha = $_POST['g-recaptcha-response'];
//    $secretKey = 'secret_Key';
//
//    $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' .$secretKey. '&response=' .$captcha;
//    $response = file_get_contents($url);
//    $responseKeys = json_decode($response, true);
//
//    if ($responseKeys['success'] == 'true') {
//        $_SESSION['id']             = $_POST['id'];
//        $_SESSION['password']       = $_POST['password'];
//        $_SESSION['captcha_res']    = $responseKeys['success'];
//
//        header('Location: submit_reCAPTCHA_demo.php');
//    } else {
//        var_export('please check captcha');
//        session_destroy();
//    }
//}
?>

<html>
    <head>
        <title>login page</title>
        <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

        <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script>-->
    </head>
    <body>
        <form method="post" action="submit_reCAPTCHA_demo.php">
<!--        <form method="post">-->
            <table>
                <tr><td><input type="text" name="id" id="id" placeholder="id"></td></tr>
                <tr><td><input type="text" name="password" id="password" placeholder="password"></td></tr>

                <!-- <tr><td><div class="g-recaptcha" data-sitekey="website_Key"></div></td></tr>-->

                <tr><td><input type="submit" value="submit"></td></tr>
            </table>
        </form>

    </body>
</html>