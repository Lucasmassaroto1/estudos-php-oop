<?php 
    //print_r($_POST);

    class Mensagem{
        private $para = null;
        private $assunto = null;
        private $mensagem = null;

        public function __get($atribute){
            return $this->$atribute;
        }
        public function __set($atribute, $value){
            $this->$atribute = $value;
        }
        public function mensagemValida(){
            if(empty($this->para) || empty($this->assunto) || empty($this->mensagem)){
                return false;
            }
            return true;
        }
    }

    $mensagem = new Mensagem();
    $mensagem->__set('para', $_POST['para']);
    $mensagem->__set('assunto', $_POST['assunto']);
    $mensagem->__set('mensagem', $_POST['mensagem']);

    //print_r($mensagem);

    if($mensagem->mensagemValida()){
        echo 'Mensagem valida';
    }else{
        echo 'Mensagem invalida';
    }
?>