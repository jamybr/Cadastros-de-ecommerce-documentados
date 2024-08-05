<?php
include('controller/conexao.php');
 
$marca = $_POST['descricao'];
 
echo "<h3>Descricão: $marca </h3?";
 
$cad_marca = "INSERT INTO marca(DESCRICAO) VALUES ('$marca')";
 
if(mysqli_query($mysqli, $cad_marca)){
    echo "<h1> marca cadastrada com sucesso!</h1><br>";
}else{
    echo "Erro: ". $cad_marca . "<br" . mysqli_error($mysqli);
}
mysqli_close($mysqli);
 
?>
 