<?php

    require_once("globals.php");
    require_once("db.php");
    require_once("models/User.php");
    require_once("models/Message.php");
    require_once("dao/UserDAO.php");

    $message = new Message($BASE_URL);

    $userDao = new UserDAO($conn, $BASE_URL);

    // Verifica o tipo de formulário
    $type = filter_input(INPUT_POST, "type");

    if($type === "register"){
        $name = filter_input(INPUT_POST, "name");
        $lastname = filter_input(INPUT_POST, "lastname");
        $email = filter_input(INPUT_POST, "email");
        $password = filter_input(INPUT_POST, "password");
        $confirmpassword = filter_input(INPUT_POST, "confirmpassword");

        // Verificação de dados mínimos
        if($name && $lastname && $email && $password){
            
            // verificar se a senha são iguais
            if($password === $confirmpassword){

                // verificar se o e-mail já está cadastrado no sistema
                if($userDao->findByEmail($email) === false){
                    // Caso de sucesso posso cadastrar o usuário

                    $user = new User();

                    // Criação de token e senha
                    $userToken = $user->generateToken();
                    $finalPassword = $user->generateToken($password);

                    $user->name = $name;
                    $user->lastname = $lastname;
                    $user->email = $email;
                    $user->password = $finalPassword;
                    $user->token = $userToken;

                    $auth = true;

                    $userDao->create($user, $auth);

                }else{
                    // Envia a mensagem de error
                    $message->setMessage("Esse e-mail já está cadastrado", "error", "back");
                }
                
            }else{
                $message->setMessage("As senhas conte erro não são iguais", "error", "back");
            }
            
        }else{
            // Enviar uma msg de erro, de dados não preenchidos
           $message->setMessage("Preencher todos os campso !", "error", "back");
            
        }

    }else if($type === "login"){
        $email = filter_input(INPUT_POST, "email");
        $password = filter_input(INPUT_POST, "password");
    }else{
        echo "Error: chame o suporte técnico: ";
    }
    