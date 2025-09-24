<?php
    class Conta{
        public $Nome;
        public $Cpf;
        private $Saldo;

        public function Sacar ($valor){
            if($valor>$this->Saldo){
                return "Saldo insuficiente";

            } else {$this->Saldo = $this->Saldo - $valor;
                $texto = "Operação realizada com sucesso. Seu saldo atual é de R$" .$this->Saldo;
                return $texto;
            }
        }
            


        public function Depositar ($valor){
            $this->Saldo = $this->Saldo + $valor;
            $texto = "Operação realizada com sucesso. Seu saldo atual é de R$" .$this->Saldo;
            return $texto;
        }
        

        public function ConsultarSaldo(){
            echo "Nome:" . $this->Nome . "<br>";
            echo "CPF:" . $this->Cpf . "<br>";
            echo "Saldo:" . $this->Saldo . "<br>";
        }

    }





?>