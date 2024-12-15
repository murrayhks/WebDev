<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
   $nome = $_POST['nome'];
   $email = $_POST['email'];

    if (empty($nome) || empty($email)) 
    {
        echo "OS CAMPOS TEM QUE SER PREENCHIDOS OBRIGATORIAMENTE!<br>";
    } 
    elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false)
    {
        echo "E-MAIL INVALIDO<br>";
    }
    else
    {
        echo "NOME: " . htmlspecialchars($nome) . "<br>";
        echo "E-MAIL: " . htmlspecialchars($email);
        header("Location: obrigado.php");
        exit(); 
    }
}