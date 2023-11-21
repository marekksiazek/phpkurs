<?php


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $user_email = $_POST["user_email"];
    $user_pwd = $_POST["user_pwd"];
    $user_pesel = $_POST["user_pesel"];
    $user_phone = $_POST["user_phone"];

    try {

        require_once 'dbh.inc.php';
        require_once 'register_model.inc.php';
        require_once 'register_contr.inc.php';

        // ERROR HANDLERS
        // $errors = [];

        // if (isInputEmpty($first_name, $last_name, $user_email, $user_pwd, $user_pesel, $user_phone)) {
        //     $errors["emptyInput"] = "Uzupełnij wszystkie pola!";
        // }

        // if (isEmailInvalid($user_email)) {
        //     $errors["invalidEmail"] = "Niepoprawny adres email!";
        // }

        // if (isEmailRegistered($mysqli, $user_email)) {
        //     $errors["registeredEmail"] = "Podany adres email już istnieje!";
        // }

        require_once 'config_session.inc.php';

        // if ($errors) {
        //     $_SESSION["errors_register"] = $errors;
        //     header("Location: ../register.php");
        //     die();
        // }

        createUser( $mysqli,  $first_name,  $last_name,  $user_email,  $user_pwd,  $user_pesel,  $user_phone);

        header("Location: ../index.php");

        $mysqli = null;
        $stmt = null;

        die();

    } catch (Exception $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../register.php");
    die();
}
