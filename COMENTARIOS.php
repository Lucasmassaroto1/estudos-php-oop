<!-- _____________ARQUIVO PARA COMENTÁRIOS SOBRE PHP ORIENTAÇÃO A OBJETOS_____________ -->

<!--
    _____________MODELO 1_____________
    »
    »
    »
    () »
    () »
    () »
    () »
    () »
-->
<!--
    _____________MODELO 2_____________
    »_____________TEXTO_____________
    »
    » 
    » 
    » 
    » 
    »_____________TEXTO_____________
    »
    » 
    » 
    » 
    » 
    »_____________TEXTO_____________
    »
    » 
    » 
    » 
    » 
    »_____________TEXTO_____________
    »
    » 
    » 
    » 
    » 
-->

<!-- _____________AULA_____________ -->
    
<!--
    _____________TAGS PHP_____________
    Tag Padrão » <?php ?> Habilitada
    Tag De Impressão » < ?= ? > Habilitada
    Tag Curta » <? ?> Desabilitada
    Asp Tag » <% %> Descontinuada
-->

<!--
    _____________TIPOS DE COMENTÁRIOS_____________
    // » Comentários De Uma Linha
    # » Comentários De Uma Linha Estilo Shell
    / * * / » Comentário De Multiplas Linhas
-->

<!--
    _____________VARIÁVEIS CONSTANTE_____________
    »_____________AMBIENTE DE DESENVOLVIMENTO_____________
    BD_URL » (Endereco_bd_dev)
    BD_USUARIO » (Usuario_dev)
    BD_SENHA » (Senha_dev)
    »_____________AMBIENTE DE PRODUÇÃO_____________
    BD_URL » (Endereco_bd_prod)
    BD_USUARIO » (Usuario_prod)
    BD_SENHA » (Senha_prod)
-->

<!--
    _____________OPERADORES DE COMPARAÇÃO_____________
    == (Igual) » Verifica Se OS Valores Comparados São Iguais
    === (Idêntico) » Verifica Se OS Valores Comparados São Iguais E Do Mesmo Tipo
    != (Diferente) » Verifica Se OS Valores Comparados São Diferentes
    <> (Diferente) » Verifica Se OS Valores Comparados São Diferentes
    !== (Não Idêntico) » Verifica Se OS Valores Comparados São Diferentes E De Tipos Diferentes
    < (Menor) » Verifica Se OS Valores Da Esquerda É Menor Que O Valor Da Direita 
    > (Maior) » Verifica Se OS Valores Da Esquerda É Maior Que O Valor Da Direita
    <= (Menor Igual) » Verifica Se OS Valores Da Esquerda É Menor Ou Igual Ao Valor Da Direita
    >= (Maior Igual) » Verifica Se OS Valores Da Esquerda É Maior Ou Igual Ao Valor Da Direita
-->

<!--
    _____________OPERADORES LÓGICOS_____________
    && (E) » Verdadeiro Se Todas As Expressões Forem Verdadeiras
    || (OU) » Verdadeiro Se Pelo Menos Uma Das Expressões For Verdadeira
    ! (Negação) » Inverte O Resultado Da Expressão
    Xor (XOR) » Verdadeiro Apenas Se Uma Expressão For Verdadeiro, Mas Não Ambas
-->

<!--
    _____________OPERADORES TERNARIOS_____________
    <Condição> ? T : F » 
-->

<!--
    _____________CASTING DE TIPOS:_____________
    »_____________INT_____________
    » float
    » string
    »_____________string_____________
    » int
    » float
    » boolean
    »_____________float_____________
    » int
    » string
    »_____________boolean_____________
    » int
    » string
-->

<!--
    _____________OPERADORES ARITMÉTICOS_____________
    + (Adição) » Soma Valores
    - (Subtração) » Diferença Entre Valores
    * (Multiplicação) » Produto Dos Valores
    / (Divisão) » Quociente Dos Valores
    % (Módulo) » Resto Existente Em Uma Operação De Divisão
-->

<!--
    _____________OPERADORES ARITMÉTICOS NA ATRIBUIÇÃO DE VALORES_____________
    += (Adiciona E Atribui) » Soma Os Valores E Atruibui
    -= (Subtrai E Atribui) » Subtrai Os Valores E Atruibui
    *= (Multiplica E Atribui) » Multiplica Os Valores E Atruibui
    /= (Divisão E Atribui) » Divide Os Valores E Atruibui
    %= (Módulo E Atribui) » Resto Existente Dos Valores E Atruibui
-->

<!--
    _____________OPERADORES INCREMENTO/DECREMENTO_____________
    $x++ (Pós-Incremento) » Retorna $x E Depois Adiciona Uma Unidade
    $x-- (Pós-Decremento) » Retorna $x E Depois Diminui Uma Unidade
    ++$x (Pré-Incremento) » Adiciona Uma Unidade Antes De Retornar $x
    --$x (Pré-Decremento) » Diminui Uma Unidade Antes De Retornar $x
-->

<!--
    _____________FUNÇÕES NATIVAS PARA MANIPULAR STRINGS_____________
    strtolower($texto) » Transforma Todos Os Caracteres Da String Em Minúsculos
    strtoupper($texto) » Transforma Todos Os Caracteres Da String Em Maiúsculos
    ucfirst($texto) » Transforam O Primeiro Caracter Da String Em Maiúsculo
    strlen($texto) » Conta A Quantidade De Caracteres De Uma String
    str_replace(<procura por>, <substitui por>, $texto) » Substitui Uma Cadeia De Caracteres Por Outra Dentro De Uma String
    substr($texto, <posicao inicial>, <qtde caracteres>) » Retorna Parte De Uma String
-->

<!--
    _____________FUNÇÕES NATIVAS PARA TAREFAS MATEMÁTICAS_____________
    ceil($numero) » Arredonda O Valor Para Cima
    floor($numero) » Arredonda O Valor Para Baixo
    round($numero) » Arredonda O Valor Com Base Nas Casas Decimais
    rand() » Gera Um Inteiro Aleatorio
    sqrt($numero) » Retorna A Raiz Quadrada
-->

<!--
    _____________FUNÇÕES NATIVAS PARA MANIPULAR DATAS_____________
    date(formato) » Recupera A Data Atual
    date_default_timezone_get(timezone) » Recupera O Timezone Default Da Aplicação
    date_default_timezone_set(timezone) » Atualiza O Timezone Default Da Aplicação
    strtotime() » Transformar Datas Textuais Em Segundos
-->

<!--
    _____________FUNÇÕES NATIVAS PARA MANIPULAR ARRAYS_____________
    is_array(array) » Verifica Se O Parametro É Um Array
    array_keys(array) » Retorna Todas As Chaves De Um Array
    sort(array) » Ordena Um Array E Reajusta Seus Indices
    asort(array) » Ordena Um Array Preservando Os Indices
    count(array) » Conta A Quantidade De Elementos de Um Array
    array_merge(array) » Funde Um Ou Mais Arrays
    explode(array) » Divide Uma String Baseada Em Um Delimitador
    implode(array) » Junta Elementos De Um Array Em Uma String
-->

<!--
    _____________OO - PILAR DA ABSTRAÇÃO_____________
    »_______PARADIGMA DE ORIENTAÇÃO A OBJETOS_______
    »_____________ABSTRAÇÃO_____________
    » Entidade
    » Identidade
    » Caracteristicas
    » Ações
    »_____________ENTIDADE_____________
    » Representa Qualquer "Coisa" Do Mundo Real Ou Conceitual
    » Pode Ser Uma Pessoa, Objeto, Conceito, Etc.
    » Exemplos: Carro, Usuário, Produto
    »_____________IDENTIDADE_____________
    » Diferencia Uma Instância De Outra
    » Mesmo Que Duas Entidades Tenham Os Mesmos Dados, Elas São Diferentes
    » Exemplos: Dois Usuários Com O Mesmo Nome, Mas Com IDs Diferentes
    »_____________CARACTERISTICAS_____________
    » Também Chamada De Atributos Ou Propriedades 
    » São Os Dados Que Descrevem A Entidade
    » Exemplos: Cor, Nome, Preço, Idade
    »_____________AÇÕES_____________
    » Também Chamadas De Métodos Ou Comportamentos
    » Representa O Que A Entidade Pode Fazer
    » Exemplos: Ligar(), Comprar(), Falar(), Andar()
-->

<!--
    _____________OO - PILAR DA HERANÇA_____________
    »_______PARADIGMA DE ORIENTAÇÃO A OBJETOS_______
    »_____________HERANÇA_____________
    » Reutilizável
    » Manutenção
-->

<!--
    _____________OO - PILAR DO POLIMORFISMO_____________
    »_______PARADIGMA DE ORIENTAÇÃO A OBJETOS_______
    »_____________POLIMORFISMO_____________
    » SOBRESCRITA DE MÉTODOS
-->

<!--
    _____________OO - PILAR DO ENCAPSULAMENTO_____________
    »_______PARADIGMA DE ORIENTAÇÃO A OBJETOS_______
    »_____________ENCAPSULAMENTO_____________
    » Segurança
-->