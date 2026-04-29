<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>História da Programação</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h4>História da programação</h4>
    <h1>Mulheres que fizeram a diferença</h1>
    <hr>
    <?php
    // aqui criar o array de mulheres
    
    ?>
    <?php
    $arrayMulheres = [
        ['Ada Lovelace','ada-lovelace.webp','Matemática britânica reconhecida como a primeira programadora da história. Ao escrever algoritmos para a Máquina Analítica de Babbage, ela percebeu que computadores poderiam processar mais do que números, prevendo a era da computação moderna ainda no século XIX.'],
        ['Dorothy Vaughan','dorothy-vaughan.png','Líder e matemática da NASA, Vaughan foi a primeira mulher negra a ser promovida a chefe de departamento na agência. Especialista em FORTRAN, ela liderou a transição para a computação digital, garantindo que sua equipe de calculadoras humanas dominasse as novas tecnologias da época.'],
        ['Grace Hopper','grace-hopper.webp','Almirante e mestre da computação, ela criou o primeiro compilador e foi fundamental para o desenvolvimento da linguagem COBOL. Conhecida por popularizar o termo "bug" após remover uma mariposa de um computador, transformou a programação em algo acessível através de termos em inglês.'],
        ['Margaret Hamilton','margareth-hamilton.webp','Cientista de computação que liderou a equipe do MIT responsável pelo software de voo da missão Apollo 11. Ela cunhou o termo "engenharia de software" e criou sistemas de detecção de erros extremamente robustos, garantindo que o homem pousasse na Lua com segurança em 1969.'],
        ['Marissa Mayer','marissa-mayer1.png','Engenheira de software e executiva, foi uma das primeiras funcionárias do Google, onde teve papel crucial no desenvolvimento do mecanismo de busca e de produtos como o Gmail. Mais tarde, tornou-se CEO do Yahoo!, destacando-se como uma das mulheres mais influentes do Vale do Silício.'],
        ]
        ?>

    <div class="galeria">
        
        <?php /*cada item é o conjunto de informações de uma mulher*/  ?>
        <div class="item">
            <img src="imagem/<?php echo $arrayMulheres[0][1]; ?>">
            <h3><?php echo $arrayMulheres[0][0]; ?><h3>
            <p><?php  echo $arrayMulheres[0][2]; ?></p>
        </div>
        <div class="item">
         <img src="imagem/<?php echo $arrayMulheres[1][1];?>">
         <h3><?php echo $arrayMulheres[1][0];?><h3>
         <p><?php echo $arrayMulheres[1][2];?><p>
        </div>
        <div class="item">
            <img src="imagem/<?php echo $arrayMulheres[2][1];?>">
            <h3><?php echo $arrayMulheres[2][0];?><h3>
            <p><?php echo $arrayMulheres[2][2];?></p>
        </div>
        <div class="item">
            <img src="imagem/<?php echo $arrayMulheres[3][1];?>">
            <h3><?php echo $arrayMulheres[3][0];?><h3>
            <p><?php echo $arrayMulheres[3][2];?><p>    
        </div>
        <div class="item">
            <img src="imagem/<?php echo $arrayMulheres[4][1];?>">
            <h3><?php echo $arrayMulheres[4][0];?><h3>
            <p><?php echo $arrayMulheres[4][2];?></p>
        </div>
    </div>

    /* aprentedo a atividade do php no html */
</body>
</html> 