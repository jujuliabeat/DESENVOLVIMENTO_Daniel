<?php
    
    // Serviço para Login

    require_once(__DIR__."/../model/Usuario.php");

    class LoginService {

        public function validarDados($usuario, $senha) {
            $erros = array();

            // Validar se o campo usuário foi preenchido 

            if ( ! $usuario) {

                array_push($erros, "Informe o usuário!");

            }

            // Validar se o campo senha foi preenchido 

            if ( ! $senha) {

                array_push($erros, "Informe a senha!");

            }
            
            
                 return $erros;

        }

            public function salvarUsuarioSessao(Usuario $usuario) {

                session_start();

                $_SESSION['USU_ID'] = $usuario->getId();
                $_SESSION['USU_NOME'] = $usuario->getNome();
            }

            // Retorna  o nome do usuário logado no sistema 

            public function getNomeUsuarioSessao() {
                session_start();

                if(isset($_SESSION['USU_NOME']))

                    return $_SESSION['USU_NOME'];

                return null;

            } 
        }
?>