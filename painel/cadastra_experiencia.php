<?php
    session_start();
    if((!isset($_SESSION['id_user']) == true) and (!isset($_SESSION['nome_user']) == true) and (!isset($_SESSION['tipo_user']) == true) and (!isset($_SESSION['email_user']) == true)){
        unset($_SESSION['id_user']);
        unset($_SESSION['nome_user']);
        unset($_SESSION['email_user']);
        unset($_SESSION['tipo_user']);
        header('Location: login.php');
    }
    include 'conecta.php';

    
    
    $id_curriculo = $_POST['id_curriculo'];
    $experiencia = $_POST['experiencia'];
    $empresa = $_POST['empresa'];
    $ocupacao = $_POST['ocupacao'];
    $inicio = $_POST['inicio'];
    $fim = $_POST['fim'];
    

    //echo "id => $id_curriculo <br>";
    //echo "habilidade => $habilidade <br>";
    

    $consulta = "INSERT INTO experiencia (id_exp,empresa,ocupacao,inicio,fim,id_curr) VALUES ('$experiencia','$empresa','$ocupacao','$inicio','$fim','$id_curriculo')";

    $conexao->query($consulta);

    ?>

    <script type="text/javascript">
        alert("Experiência cadastrada.");
        window.location.href = "index.php";
        
    </script> 
<?php

    //com os dados inseridos levar o usuário para cadastrar Habilidades, Competências, Escolaridade e Experiência Profissional



?>