<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chess Board</title>
  <style>
    * {
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .container{
      width: 100%;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .content{
      max-width: 400px;
      margin: 0 auto;
      text-align: center;
      padding: 2rem;
      border-radius: 1rem;
      box-shadow: 0 1px 16px rgba(0, 0, 0, 0.15);
    }
    h1{
      margin-bottom: 1rem;
    }

    table {
      width: 270px;
      height: 270px;
      border: 1px solid black;
      margin: 0 auto;
      border-spacing: 0;
    }

    td, .branco, .preto {
      height: 30px;
      width: 30px;
      border: 1px solid black;
    }

    .preto {
      background-color: black;
    }

    .branco {
      background-color: white;
    }
  </style>
</head>

<body>

  <main class="container">
    <div class="content">
      <h1>Chess Board PHP</h1>
      <table>
        <tbody>
          <?php
          //inicializo o laço para criar a linha
              for ($i = 0; $i < 8; $i++) {

                //checo se o número iterável é par ou ímpar
                //sinalizando a variável $par como true ou false
                $i % 2 == 0 ? $par = true : $par = false;

                //imprimo uma linha da tabela
                echo "<tr>";
      
                //inicio outro loop para criar a coluna
                //nota-se que o valor de $j será comparado se for <4
                //pois dentro da lógica serão printados 2 <td>
                //4 iterações * 2 prints = 8 células <td>
                for ($j = 0; $j < 4; $j++) {

                  //checo se o número da linha é ímpar
                  if (!$par) {
                    //caso seja ímpar eu imprimo na tela tal ordem
                    echo "<td class='branco'></td>";
                    echo "<td class='preto'></td>";
                  } else {
                    //do contrário é essa a ordem a ser seguida
                    echo "<td class='preto'></td>";
                    echo "<td class='branco'></td>";
                  }
                }
                
                //fecho a linha da tabela
                echo "</tr>";
              }
          ?>
        </tbody>
      </table>
    </div>
  </main>
</body>

</html>