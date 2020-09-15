<?php
if (isset($_POST['email']) && isset($_POST['password'])) {
    // validation
    function validateEmail($x)
    {
        if (strlen($x) == 0)
            return false;

        $pattern = "/[a-zA-Z0-9\_\.]+\@[a-zA-Z0-9]+\.[a-zA-Z]{3}/";
        if (strlen(preg_replace($pattern, "", $x)) == 0)
            return true;
        return false;
    }
    //
    $email = $_POST['email'];
    $pw = $_POST['password'];
    if (!$email || !$pw ){
        echo "invalid login";
    } else if (!validateEmail($email)) {
        echo "invalid email format";
    } else if ($email === "admin@example.org" && md5($pw) === "fc7d1bcf2447219eb208b96aa3d0a58c") {
        echo "welcome admin";
    } else {
        echo "invalid login";
    }

} else if (!isset($_POST['email']) || !isset($_POST['password'])) {
    echo "invalid login";
} else {
    $html = <<<EOD
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8">
                <title>login</title>
            </head>
            <body>
                <h1>Secure Login!</h1>
                <form method="post" action="login.php">
                    <input type="text" name="email">
                    <input type="password" name="password">
                    <input type="submit" value="login">
                </form>
            </body>
        </html>
        EOD;
    echo $html;
}
?>