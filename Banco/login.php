<?php
  
    //Incluindo a conexão com banco de dados   
    include_once("conexao.php");    


    $usuario = $_POST['email'];
    $senha = $_POST['senha'];
    //O campo usuário e senha preenchido entra no if para validar
    
    if (empty($nome) || empty($email) || empty($assunto) || empty($msg)):
        $array  = array('tipo' => 'alert alert-danger', 'mensagem' => 'Preencher todos os campos obrigatórios(*)!');
        echo json_encode($array);
            
    endif;
        //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
        $result_usuario = "SELECT * FROM usuario WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        
        //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        if(isset($resultado)){

         
         
         
            echo "Usuario valido";
        }   
        //Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        //redireciona o usuario para a página de login
        else{    
            echo "Usuario invalido";
        }
            
    
?>