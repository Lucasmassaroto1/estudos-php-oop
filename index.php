<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP E Orientação A Objetos</title>
</head>
<body>
    <!-- _____________AULA 1 INTRODUÇÃO A ORIENTAÇÃO A OBJETOS - CONSIDERAÇÕES PRELIMIARES_____________ -->
    <!-- Concluido -->
    <!-- _____________AULA 2 INTRODUÇÃO A ORIENTAÇÃO A OBJETOS_____________ -->
    <!-- Concluido -->
    <!-- _____________AULA 3 OO - PILAR DA ABSTRAÇÃO_____________ -->
    <!-- <?php 
        //modelo
        /* class Funcionario{
            //Atributo
            public $nome = 'Lucas';
            public $telefone = '44 99019-3487';
            public $numFilhos = 1;

            //Método
            function resumirCadFunc(){
                return "$this->nome possui $this->numFilhos filho(s)";
            }
            function modificarNumFilhos($numFilhos){
                // Afetar um atributo do objeto
                $this->numFilhos = $numFilhos;
            }
        }
        $y = new Funcionario();
        echo $y->resumirCadFunc();
        echo'<br>';
        $y->modificarNumFilhos(3);
        echo $y->resumirCadFunc();
        echo'<hr>';
        $x = new Funcionario();
        echo $x->resumirCadFunc();
        echo'<br>';
        $x->modificarNumFilhos(2);
        echo $x->resumirCadFunc(); */
    ?> -->
    <!-- _____________AULA 4 GETTERS E SETTERS____________ -->
    <!-- <?php 
        /* class Funcionario{
            //Atributo
            public $nome = null;
            public $numFilhos = null;
            public $telefone = null;

            //Getters && Setters
            function setNome($nome){
                $this->nome = $nome;
            }
            function setNumFilhos($numFilhos){
                $this->numFilhos = $numFilhos;
            }

            function getNome(){
                return $this->nome;
            }
            function getNumFilhos(){
                return $this->numFilhos;
            }

            //Método
            function resumirCadFunc(){
                return "$this->nome possui $this->numFilhos filho(s)";
            }
            function modificarNumFilhos($numFilhos){
                // Afetar um atributo do objeto
                $this->numFilhos = $numFilhos;
            }
        }
        $y = new Funcionario();
        $y->setNome('Lucas');
        $y->setNumFilhos(2);
        //echo $y->resumirCadFunc();
        echo $y->getNome(). ' possui '. $y->getNumFilhos(). ' filho(s)';
        echo'<br>';
        $x = new Funcionario();
        $x->setNome('Massaroto');
        $x->setNumFilhos(0);
        //echo $y->resumirCadFunc();
        echo $x->getNome(). ' possui '. $x->getNumFilhos(). ' filho(s)'; */
    ?> -->
    <!-- _____________AULA 5 GETTERS E SETTERS MÁGICOS (OVERLOADING DE ATRIBUTOS E MÉTODOS)____________ -->
    <!-- <?php 
        /* class Funcionario{
            //Atributo
            public $nome = null;
            public $numFilhos = null;
            public $telefone = null;
            public $cargo = null;
            public $salario = null;

            //Getters && Setters (Overloading / Sobrecarga)
            function __set($atributo, $valor){
                $this->$atributo = $valor;
            }
            function __get($atributo){
                return $this->$atributo;
            }

            //Método
            function resumirCadFunc(){
                return "$this->nome possui $this->numFilhos filho(s)";
            }
            function modificarNumFilhos($numFilhos){
                // Afetar um atributo do objeto
                $this->numFilhos = $numFilhos;
            }
        }
        $y = new Funcionario();
        $y->__set('nome', 'Lucas');
        $y->__set('numFilhos', 2);
        $y->__set('telefone', 44990402300);
        $y->__set('cargo', 'Mecanico');
        $y->__set('salario', 200);
        //echo $y->resumirCadFunc();
        echo $y->__get('nome'). ' possui: '. $y->__get('numFilhos'). ' filho(s), Seu numero de telefone é: '.$y->telefone.', Seu Cargo é: '. $y->cargo.', seu salario é: '.$y->__get('salario');
        echo'<br>';
        $x = new Funcionario();
        $x->__set('nome', 'Massaroto');
        $x->__set('numFilhos', 0);
        $x->__set('telefone', 44990402506);
        $x->__set('cargo', 'Desenvolvedor fullStack');
        $x->__set('salario', 400);
        echo $x->__get('nome'). ' possui: '. $x->__get('numFilhos'). ' filho(s), Seu numero de telefone é: '.$x->telefone.', Seu Cargo é: '. $x->cargo.', seu salario é: '.$x->__get('salario'); */
    ?> -->
    <!-- _____________AULA 6 CHAMANDO MÉTODOS INTERNAMENMTE____________ -->
    <!-- <?php 
        /* class Funcionario{
            //Atributo
            public $nome = null;
            public $numFilhos = null;
            public $telefone = null;
            public $cargo = null;
            public $salario = null;

            //Getters && Setters (Overloading / Sobrecarga)
            function __set($atributo, $valor){
                $this->$atributo = $valor;
            }
            function __get($atributo){
                return $this->$atributo;
            }

            //Método
            function resumirCadFunc(){
                return $this->__get('nome'). ' possui: '. $this->__get('numFilhos'). ' filho(s), Seu numero de telefone é: '.$this->telefone.', Seu Cargo é: '. $this->cargo.', seu salario é: '.$this->__get('salario');
            }
            function modificarNumFilhos($numFilhos){
                // Afetar um atributo do objeto
                $this->numFilhos = $numFilhos;
            }
        }
        $y = new Funcionario();
        $y->__set('nome', 'Lucas');
        $y->__set('numFilhos', 2);
        $y->__set('telefone', 44990402300);
        $y->__set('cargo', 'Mecanico');
        $y->__set('salario', 200);
        echo $y->resumirCadFunc();
        echo'<br>';
        $x = new Funcionario();
        $x->__set('nome', 'Massaroto');
        $x->__set('numFilhos', 0);
        $x->__set('telefone', 44990402506);
        $x->__set('cargo', 'Desenvolvedor fullStack');
        $x->__set('salario', 400);
        echo $x->resumirCadFunc(); */
    ?> -->
    <!-- _____________AULA 7 MÉTODOS CONSTRUTOR E DESTRUTOR (CONSTRUCT E DESTRUCT)____________ -->
    <!-- <?php 
        /* class Pessoa{
            public $nome = null;

            function __construct($nome){
                echo 'Objeto iniciado';
                $this->nome = $nome;
            }
            function __destruct(){
                echo 'Objeto removido';
            }
            function __get($atributo){
                return $this->$atributo;
            }
            function correr(){
                return $this->__get('nome').' está correndo';
            }
        }
        $pessoa = new Pessoa('Lucas');
        echo '<br> Nome: '.$pessoa->__get('nome');
        echo '<br>'. $pessoa->correr();
        echo '<br>';
        //unset($pessoa); // proposital */
    ?> -->
    <!-- _____________AULA 8 OO - PILAR DA HERANÇA____________ -->
    <!-- <?php 
        /* class Carro extends Veiculo{
            public $teto_solar = true;

            function __construct($placa, $cor){
                $this->placa = $placa;
                $this->cor = $cor;
            }
            function abrirTetoSolar(){
                echo 'Abrindo teto solar';
            }
            function alterarPosicaoVolante(){
                echo 'Volante Virado';
            }
        }

        class Moto extends Veiculo{
            public $contraPesoGuidao = true;

            function __construct($placa, $cor){
                $this->placa = $placa;
                $this->cor = $cor;
            }
            function empinar(){
                echo 'Empinar';
            }
        }

        class Veiculo{
            public $placa = null;
            public $cor = null;
            
            function acelerar(){
                echo 'Acelerar';
            }
            function freiar(){
                echo 'Freiar';
            }
        }

        $carro = new Carro('ABC1234', 'Branco');
        $moto = new Moto('DFF1122', 'Preto');

        echo '<pre>';
            print_r($carro);
            echo '<br>';
            print_r($moto);
        echo '</pre>';
        echo '<hr>';

        $carro->abrirTetoSolar();
        echo '<br>';
        $carro->acelerar();
        echo '<br>';
        $carro->freiar();
        echo '<hr>';
        $moto->empinar();
        echo '<br>';
        $moto->acelerar();
        echo '<br>';
        $moto->freiar(); */
    ?> -->
    <!-- _____________AULA 9 OO - PILAR DO POLIMORFISMO____________ -->
    <!-- <?php 
        /* class Carro extends Veiculo{
            public $teto_solar = true;

            function __construct($placa, $cor){
                $this->placa = $placa;
                $this->cor = $cor;
            }
            function abrirTetoSolar(){
                echo 'Abrindo teto solar';
            }
            function alterarPosicaoVolante(){
                echo 'Volante Virado';
            }
        }

        class Moto extends Veiculo{
            public $contraPesoGuidao = true;

            function __construct($placa, $cor){
                $this->placa = $placa;
                $this->cor = $cor;
            }
            function trocarMarcha(){
                echo'Desengatar embreagem com a mão e engatar marcha com o pé';
            }
        }

        class Caminhao extends Veiculo{

        }

        class Veiculo{
            public $placa = null;
            public $cor = null;
            
            function acelerar(){
                echo 'Acelerar';
            }
            function freiar(){
                echo 'Freiar';
            }
            function trocarMarcha(){
                echo'Desengatar embreagem com o pé e engatar marcha com a mão';
            }
        }

        $carro = new Carro('ABC1234', 'Branco');
        $moto = new Moto('DFF1122', 'Preto');
        $caminhao = new Caminhao();

        $carro->trocarMarcha();
        echo'<br>';
        $moto->trocarMarcha();
        echo'<br>';
        $caminhao->trocarMarcha(); */
    ?> -->
    <!-- _____________AULA 10 OO - PILAR DO ENCAPSULAMENTO PARTE 1____________ -->
    <!-- <?php 
        /* class Pai{
            private $nome = 'Lucas';
            protected $sobrenome = 'Massaroto';
            public $humor = 'Feliz';

            public function __get($atributo){
                return $this->$atributo;
            }
            public function __set($atributo, $value){
                $this->$atributo = $value;
            }

            private function executarMania(){
                echo 'Assobiar';
            }
            protected function responder(){
                echo 'resonder';
            }
            public function executarAcao(){
                $x = rand(1, 10);
                if($x >= 1 && $x <= 8){
                    $this->executarMania();
                }else{
                    $this->responder();
                }
            }
        }
        $pai = new Pai();
        //echo $pai->humor;
        echo $pai->executarAcao(); */
    ?> -->
    <!-- _____________AULA 11 OO - PILAR DO ENCAPSULAMENTO PARTE 2____________ -->
    <!-- <?php 
        /* class Pai{
            private $nome = 'Lucas';
            protected $sobrenome = 'Massaroto';
            public $humor = 'Feliz';

            public function __get($atributo){
                return $this->$atributo;
            }
            public function __set($atributo, $value){
                $this->$atributo = $value;
            }

            private function executarMania(){
                echo 'Assobiar';
            }
            protected function responder(){
                echo 'resonder';
            }
            public function executarAcao(){
                $x = rand(1, 10);
                if($x >= 1 && $x <= 8){
                    $this->executarMania();
                }else{
                    $this->responder();
                }
            }
        }
        class Filho extends Pai{
            public function __construct(){
                echo '<pre>';
                    print_r(get_class_methods($this));
                echo '</pre>';
            }
            private function executarMania(){
                echo 'Assobiar';
            }
            protected function responder(){
                echo 'ola';
            }
            public function x(){
                $this->executarMania();
            }
        }

        $pai = new Pai();
        //echo $pai->humor;
        echo $pai->executarAcao();

        $filho = new Filho();
        echo '<pre>';
        print_r($filho);
        echo '</pre>';

        $filho->executarAcao();
        echo '<br>';
        $filho->x(); */
    ?> -->
    <!-- _____________AULA 12 ATRIBUTOS E MÉTODOS ESTÁTICOS____________ -->
    <!-- <?php 
        /* class Exemplo{
            public static $atribute1 = 'Atributo estatico';
            public $atribute2 = 'Atributo normal';

            public static function metod1(){
                echo 'sou um metodo estatico';
            }
            public function metod2(){
                echo 'sou um metodo normal';
            }
        }

        // $x = new Exemplo();
        echo Exemplo::$atribute1;
        echo '<br>';
        Exemplo::metod1();
        echo Exemplo::metod1();
        // $x->atribute2; */
    ?> -->
    <!-- _____________AULA 12 + 1 INTERFACES____________ -->
    <!-- <?php 
        /* interface EquipamentosEletronicosInterface{
            public function ligar();
            public function desligar();
        }
        class Geladeira implements EquipamentosEletronicosInterface{
            public function abrirPorta(){
                echo'Abrindo porta';
            }
            public function ligar(){
                echo 'Ligando';
            }
            public function desligar(){
                echo 'Desligando';
            }
        }
        class Tv implements EquipamentosEletronicosInterface{
            public function trocarCanal(){
                echo'Trocando Canal';
            }
            public function ligar(){
                echo 'Ligando';
            }
            public function desligar(){
                echo 'Desligando';
            }
        }
        $geladeira = new Geladeira();
        $tv = new Tv();


        interface MamiferoInterface{
            public function respirar();
        }
        interface TerrestreInterface{
            public function andar();
        }
        interface AquaticoInterface{
            public function nadar();
        }
        class Humano implements MamiferoInterface, TerrestreInterface{
            public function respirar(){
                echo 'Respirando';
            }
            public function andar(){
                echo 'Andando';
            }
            public function conversar(){
                echo 'Conversando';
            }
        }
        class Baleia implements MamiferoInterface, AquaticoInterface{
            public function respirar(){
                echo 'Respirando';
            }
            public function nadar(){
                echo 'Nadando';
            }
            public function esguichar(){
                echo 'Esguichando';
            }
        }


        interface AnimalInterface{
            public function comer();
        }
        interface AveInterface extends AnimalInterface{
            public function voar();
        }
        class Papagaio implements AveInterface{
            public function voar(){
                echo 'Voando';
            }
            public function comer(){
                echo 'Comendo';
            }
        } */
    ?> -->
    <!-- _____________AULA 14 NAMESPACES PARTE 1 - UTILIZANDO NAMESPACES PARA CLASSES E INTERFACES____________ -->
    <!-- <?php 
        /* namespace A;
        class Client implements \B\CadastroInterface{
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
        namespace B;
        class Client implements \A\CadastroInterface{
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

        $c = new \B\Client();
        print_r($c);
        echo $c->__get('nome'); */
    ?> -->
    <!-- _____________AULA 15 NAMESPACES PARTE 2 - IMPORTANDO E APELIDANDO NAMESPACES (USE E ALIASING)____________ -->
    <!-- <?php 
        /* require './biblioteca/lib1/lib1.php';
        require './biblioteca/lib2/lib2.php';

        use A\Client as C1;
        use B\Client as C2;

        $c = new C1();
        print_r($c);
        echo $c->__get('nome'); */
    ?> -->
    <!-- _____________AULA 16 TRATAMENTO DE ERROS - TRY, CATCH, FINALLY E THROW____________ -->
    <!-- <?php 
        /* try{
            // Uma lógica
            echo '<h3> === Try === </h3>';
            
            $sql = 'Select * from clientes';
            //mysql_query($sql); // Força um erro para teste

            if(!file_exists('require_arquivo_a.php')){
                throw new Exception('O arquivo em questão deveria estar disponivel as '.date('d/m/Y H:i:s').' mas não estava. Vamos seguir mesmo assim');
            }
            
        } catch(Error $e){
            echo '<h3> === Catch Error === </h3>';
            echo '<p style="color: red;">'.$e.'</p>';
            // Armazena o erro no banco de dados

        } catch(Exception $e){
            echo '<h3> === Catch Exception === </h3>';
            echo '<p style="color: red;">'.$e.'</p>';
            // Armazena o erro no banco de dados
        } finally{
            echo '<h3> === Finally === </h3>';
        } */
    ?> -->
    <!-- _____________AULA 17 TRATAMENTO DE ERROS - EXCEÇÕES CUSTOMIZADAS____________ -->
    <!-- <?php 
        /* class MinhaExceptionCustomizada extends Exception{
            private $erro = '';
            public function __construct($erro){
                $this->erro = $erro;
            }
            public function exibirMensagemErroCustomizada(){
                echo '<div style="border: solid 1px black; padding: 15px; background-color: red; color: white;">';
                echo $this->erro;
                echo '</div>';
            }
        }
        try{
            throw new MinhaExceptionCustomizada('Este é um Erro forçado');
            //Error (PHP)
            //Exception (programadores)
            //Customizadas (programadores)

        } catch (MinhaExceptionCustomizada $e){
            $e->exibirMensagemErroCustomizada();
        } */
    ?> -->
    <!-- _____________AULA 18 APP SEND MAIL - INTRODUÇÃO____________ -->
    <!-- Concluido -->
    <!-- _____________AULA 19 APP SEND MAIL - INICIANDO PROJETO____________ -->
    <!-- Concluido -->
    <!-- _____________AULA 20 APP SEND MAIL - ENVIANDO DADOS DO FRONT-END PARA O BACK-END VIA MÉTODO POST____________ -->
    <!-- Concluido -->
    <!-- _____________AULA 21 APP SEND MAIL - CRAINDO E INSTANCIANDO A CLASSE MENSAGEM____________ -->
    
    <!-- _____________AULA 22 APP SEND MAIL - ADICIONANDO A BIBLIOTECA PHPMAILER AO PROJETO____________ -->
    
    <!-- _____________AULA 23 APP SEND MAIL - CONFIGURANDO O PHPMAILER E ENVIANDO E-MAILS____________ -->
    
    <!-- _____________AULA 23 + 1 IMPORTANTE - AJUSTANDO AS CONFIGURAÇÕES DE ACESSO AO SMTP DO GMAIL____________ -->
    
    <!-- _____________AULA 25 APP SEND MAIL - ENVIANDO EMAILS COM BASE NOS PARÂMETROS DO FRONT-END____________ -->
    
    <!-- _____________AULA 26 APP SEND MAIL - MELHORANDO O FEEDBACK VISUAL____________ -->
    
    <!-- _____________AULA 27 APP SEND MAIL - DE OLHO NA SEGURANÇA DO BACK-END____________ -->
    
</body>
</html>