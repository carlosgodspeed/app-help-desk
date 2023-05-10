<?php

     session_start();
     
     //variavel que verifica se a autenticação foi realizada
     $usuario_autenticado = false;
     $usuario_id = null;
     $usuario_perfil_id = null;

     $perfis = array(1 => 'Administrativo', 2 => 'Usuário');

     //usuarios do sistema
     $usuarios_app = array(
        array('id' => 1,'email' => 'carlos@teste.com', 'senha' => '123456', 'perfil_id' => 1 ),
        array('id' => 2,'email' => 'adm@teste.com', 'senha' => '123456', 'perfil_id' => 1 ),
        array('id' => 3,'email' => 'usuarioB@teste.com', 'senha' => '123456', 'perfil_id' =>  2 ),
        array('id' => 4,'email' => 'usuarioA@teste.com', 'senha' => '123456' , 'perfil_id' => 2 ),
     );

     foreach($usuarios_app as $user) {
        if($user['email'] == $_POST['email'] && $user['senha']) {
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
        }

    }

    if($usuario_autenticado) {
        echo 'Usuário autenticado';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header('location: home.php');
    }else{
        $_SESSION['autenticado'] = 'NÃO';
        header('Location: index.php?login=erro');
    }

?>
