<?php

declare(strict_types=1);

// function isInputEmpty(string $first_name, string $last_name, string $user_email, string $user_pwd, string $user_pesel, string $user_phone)
// {
//     if (empty($first_name) || empty($last_name) || empty($user_email) || empty($user_pwd) || empty($user_pesel) || empty($user_phone)) {
//         return true;
//     } else {
//         return false;
//     }
// };


// function isEmailInvalid(string $user_email)
// {
//     if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
//         return true;
//     } else {
//         return false;
//     }
// };

// function isEmailRegistered(object $pdo, string $user_email)
// {
//     if (getUserEmail($pdo, $user_email)) {
//         return true;
//     } else {
//         return false;
//     };
// };

function createUser(object $mysqli, string $first_name, string $last_name, string $user_email, string $user_pwd, string $user_pesel, string $user_phone)
{
    setUser( $mysqli,  $first_name,  $last_name,  $user_email,  $user_pwd,  $user_pesel,  $user_phone);
};
