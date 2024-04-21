<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - POO</title>
</head>

<body>

    <?php
    class caneta
    {
        public $modelo;
        public $cor;
        private $ponta;
        protected $carga;
        protected $tampada;

        public function rabiscar()
        {
            if ($this->tampada == true) {
                echo "<p>ERROR! não posso rabiscar!</p>";
            } else {
                echo "<p>estou rabiscando...</p>";
            }
        }
        public function tampar()
        {
            $this->tampada = true;
        }
        public function destampar()
        {
            $this->tampada = false;
        }
    }
    ?>
</body>

</html>