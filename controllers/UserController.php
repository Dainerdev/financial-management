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

                $userController = new UserController();
                $userName = $userController->findByEmail($email);   
                
                $_SESSION["user.find"] = $userName;
                 
                header("Location: ../view/forms/users/main.php");
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
        $pass2 = @$_REQUEST["pass2"];
        $age = @$_REQUEST["age"];  

        // Id number validation
        if ($u = User::find('first', array('conditions' => 
                array('id_user = ?', $id)))) {
            
            $_SESSION["user.find"] = serialize($u);
            $msjId = "This id number is already in use.";

            header("Location: ../view/forms/users/signin.php?msjId=$msjId");
            exit;            
               
        }

        // email unique validation
        if ($u = User::find('first', array('conditions' => 
            array('email = ?', $email)))) {

            $_SESSION["user.find"] = serialize($u);
            $msjEmail = "This email is already in use. Try another email.";

            header("Location: ../view/forms/users/signin.php?msjE=$msjEmail");
            exit;
            
        }        

        // password match validation
        if ($pass != $pass2) {

            $msjPass = "Passwords do not match. Please, try again.";

            header("Location: ../view/forms/users/signin.php?msjP=$msjPass");
            exit;

        } else {
            
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

            } else { 

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

    public function findByEmail($email){

        $user = User::find_by_email($email);

        if ($user) {
            return $user->name_a; 

        } else {
            return "Usuario no encontrado";
        }
    }


}

UserController::runAction();