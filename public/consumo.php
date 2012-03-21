
<form method="post" action="">

Watts
<input type="text" name="watts" placeholder="100" /><br/><br/>
 
Horas
<input type="text" name="horas" placeholder="24" /><br/><br/>

Dias
<input type="text" name="dias" placeholder="30" /><br/><br/>

Valor do Kw/h
<input type="text" name="kwh" placeholder="0.296" /><br/><br/>

<input type="submit" value="Calcular">


<input type="hidden" name="calc" value="true" />

</form>

<?php


if($_POST['calc'] == true){
    
    $watts = $_POST['watts'];
    $horas = $_POST['horas'];
    $dias = $_POST['dias'];
    $kwh = $_POST['kwh'];
    
    $consumo = $watts/1000*$horas*$dias;
    $custo = $consumo*$kwh;
    
    echo "Consumo: ".$consumo."Kw<br/><br/>";
    echo "Custo (R$): ".$custo."<br/><br/>";
    
}

?>