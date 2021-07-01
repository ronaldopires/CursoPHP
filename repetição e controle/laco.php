<?php

//Laço for
echo "<select>";

for($i = 0; $i <= 1000; $i+=5){
    if($i > 200 && $i < 800) continue;
    if($i === 900) break;
    echo '<option value="'.$i.'">'.$i.'</option>';
}
echo "</select>";

echo "<select>";
for ($i=date('Y'); $i >= date('Y')-120; $i--) { 
    echo '<option value="'.$i.'">'.$i.'</option>';
}
echo "</select><br><br>";

$meses = array("Janeiro","Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
//Foreach
foreach ($meses as $index => $mes) {
    echo "O indice é: " .$index. "<br>";
    echo "O mês é: " .$mes. "<br><br>";
}

?>
<form>
    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" name="OK">

</form>

<?php
    if(isset($_GET)){
        foreach ($_GET as $key => $value) {
            echo "Nome do campo: " .$key. "<br>";
            echo "Valor do campo: " .$value. "<br>"; 
        }
    }

//while
$status = true;

while ($status) {
    $numero = rand(1,10);
    if($numero == 3) {
        echo "Três!!";
        $status = false;
    }
    echo $numero . " ";

}

//do while
$total = 100;
$desconto = 0.9;

do {
    $total *= $desconto;
}while($total > 100);
echo "<br><br>";
echo $total;
