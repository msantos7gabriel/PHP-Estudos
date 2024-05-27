<div>
    <p>Seu Imc Está na faixa da: </p> <b>
        <?php

        $altura = 1.80;
        $peso = 80;
        $imc = round($peso / pow($altura, 2), 2);
        $faixa = "";

        if ($imc < 18.5) {
            $faixa = "Magreza";
        } elseif ($imc >= 18.5 &&  $imc <= 24.9) {
            $faixa = "Normal";
        } elseif ($imc >= 25 &&  $imc <= 30) {
            $faixa = "Sobrepeso";
        } else {
            $faixa = "Obesidade";
        }
        echo " " . $faixa;
        ?>
    </b>
</div>