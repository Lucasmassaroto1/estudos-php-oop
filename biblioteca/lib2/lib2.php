<?php 
    namespace B;
        class Client implements CadastroInterface{
            public $nome = 'massaroto';
            public function __construct(){
                echo'<pre>';
                    print_r(get_class_methods($this));
                echo'</pre>';
            }
            public function __get($atribute){
                return $this->$atribute;
            }
            public function remover(){
                echo 'Remover';
            }
            public function salvar(){
                echo 'Salvar';
            }
        }
        interface CadastroInterface{
            public function remover();
        }

?>