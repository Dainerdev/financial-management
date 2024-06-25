<?php

session_start();
require_once $_SERVER["DOCUMENT_ROOT"] . 'waysy/models/entities/User.php';
require_once $_SERVER["DOCUMENT_ROOT"] . 'waysy/models/entities/Goal.php';
require_once $_SERVER["DOCUMENT_ROOT"] . 'waysy/models/entities/Category.php';

class UserController {

    public static function runAction(){

        $action = $_REQUEST["action"];

        switch ($action) {
            case 'Log In':
                
                UserController::login();
                break;

            case 'Sign In':
                
                UserController::signin();
                break;
            
            default:
                header("Location: ../view/error.php?msj=Action denied");
                exit;
        }

    }

    public static function login() {

        $email = @$_REQUEST["email"];
        $pass = @$_REQUEST["pass"];

        try {
            
            $u = User::find('first', array('conditions' => 
            array('email = ? AND password = ?', $email, $pass)));

            if ($u) {

                $_SESSION["user.find"] = serialize($u);                 
                header("Location: ../view/index.php");
                exit;
                
                $_SESSION["user.find"] = null;
                header("Location: ../view/index.php");
                exit;

            } else {

                $_SESSION["user.find"] = null;
                header("Location: ../view/alerts/credentials.php");
                exit;
            }

        } catch (PDOException $error) {

            $msj = "Database error: " . $error->getMessage();

            $_SESSION["user.find"] = null;
            header("Location: ../view/alerts/cantLogin.php?msj=$msj");
            exit;

        }catch (Exception $error) {
            
            $msj = "An unexpected error has occurred: " . $error->getMessage();

            $_SESSION["user.find"] = null;
            header("Location: ../view/alerts/cantLogin.php?msj=$msj");
            exit;
        }
    }

    public static function signin() {
        
        $id = @$_REQUEST["id"];
        $type = @$_REQUEST["type"];
        $namea = @$_REQUEST["namea"];
        $nameb = @$_REQUEST["nameb"];
        $lastname = @$_REQUEST["lname"];
        $email = @$_REQUEST["email"];
        $pass = @$_REQUEST["pass"];
        $age = @$_REQUEST["age"];

        $u = new User();

        $u-> id = $id;
        $u-> type_id = $type;
        $u-> name_a = $namea;
        $u-> name_b = $nameb;
        $u-> last_name = $lastname;
        $u-> email = $email;
        $u-> password = $pass;
        $u-> age = $age;


        if (empty($u)) {
            $msj = "Please, fill in all fields.";

            header("Location: ../view/forms/users/signin.php?msj=$msj");
            exit;

        }else { 

            try {
                
                $u-> save();
                $msj = "Succesfully registered.";   
                
                header("Location: ../view/alerts/registered.php?msj=$msj");
                exit;

            } catch (Exception $error) {
                if (strstr($error-> getMessage(), "Duplicate")) {
                    
                    $msj = "This account already exists.";

                }else {

                    $msj = "An error has occurred.";
                }                
            }

            header("Location: ../view/forms/users/signin.php");
            exit;

        }
    }
}

UserController::runAction();