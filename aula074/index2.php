<?php
    class Matematica {
        public static function adicionar ($a, $b) {
            return $a + $b;
        }

        public function executar_operacao(){
            $resultado = self::adicionar(10, 20);
            return $this->metodo_interno($resultado);
        }

        private function metodo_interno($valor) {
            return $valor * 2;
        }
    }

    echo Matematica::adicionar(100, 200);
    echo '<br>';
    $matematica = new Matematica();
    echo $matematica->executar_operacao();
?>