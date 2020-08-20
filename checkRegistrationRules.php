<?php
function checkRegistrationRules($input)
{
    $result = array();
    $count = 0;
    foreach ($input as $i) {
        $user = $i[0];
        $pass = $i[1];
        if ($user == "quera" || $user == "Quera" || $user == "admin" || $user == "Admin") {
            continue;
        } else {
            if (strlen($user) < 4 || strlen($pass) < 6 || ctype_digit($pass)) {
                continue;
            } else {
                $result[$count] = $user;
            }
        }
        $count++;
    }
    return ($result);
}

?>
