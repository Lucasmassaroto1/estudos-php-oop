<?php 
    namespace A;
        class Client implements CadastroInterface{
            public $nome = 'Lucas';
            public function __construct(){
                echo'<pre>';
                    print_r(get_class_methods($this));
                echo'</pre>';
            }
            public function __get($atribute){
                return $this->$atribute;
            }
            public function salvar(){
                echo 'Salvar';
            }
            public function remover(){
                echo 'Remover';
            }
        }
        interface CadastroInterface{
            public function salvar();
        }
?>