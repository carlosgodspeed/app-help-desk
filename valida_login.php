<?php

     //variavel que verifica se a autenticação foi realizada
     $usuario_autenticado = false;

     //usuarios do sistema
     $usuarios_app = array(
        array('email' => 'carlosminibics@gmail.com', 'senha' => '150700ch'),
        array('email' => 'user@teste.com.br', 'senha' => '150700ch'),
     );

     /*
     echo '<pre>';
     print_r($usuarios_app);
     echo '</pre>';
     */

     foreach($usuarios_app as $user) {
        if($user['email'] == $_POST['email'] && $user['senha']) {
            $usuario_autenticado = true;
        }

    }

    if($usuario_autenticado) {
        echo 'Usuário autenticado';
    }else{
        header('Location: index.php?login=erro');
    }

    /*
     print_r($_GET);

     echo '<br/>';

     echo $_GET['email'];
     echo '<br/>';
     echo $_GET['senha'];
    */

    /*
    print_r($_POST);

    echo '<br/>';

    echo $_POST['email'];
    echo '<br/>';
    echo $_POST['senha'];
    */
?>
