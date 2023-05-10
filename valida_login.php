<?php

     session_start();
     
     //variavel que verifica se a autenticação foi realizada
     $usuario_autenticado = false;
     $usuario_id = null;

     //usuarios do sistema
     $usuarios_app = array(
        array('id' => 1,'email' => 'carlos@teste.com', 'senha' => '123456'),
        array('id' => 2,'email' => 'adm@teste.comS', 'senha' => '123456'),
        array('id' => 3,'email' => 'usuarioB@teste.com', 'senha' => '123456'),
        array('id' => 4,'email' => 'usuarioA@teste.com', 'senha' => '123456'),
     );

     /*
     echo '<pre>';
     print_r($usuarios_app);
     echo '</pre>';
     */

     foreach($usuarios_app as $user) {
        if($user['email'] == $_POST['email'] && $user['senha']) {
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
        }

    }

    if($usuario_autenticado) {
        echo 'Usuário autenticado';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        header('location: home.php');
    }else{
        $_SESSION['autenticado'] = 'NÃO';
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
