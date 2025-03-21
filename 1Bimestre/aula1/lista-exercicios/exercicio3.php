<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=
    , initial-scale=1.0">
  <title>Exercicio 3</title>
</head>

<body>
  <style>
    body {
      margin: 0;
      padding: 0;
    }
    div {
      width: 100vw;
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
    table {
      border-collapse: collapse;
      border: 2px solid rgb(140 140 140);
      font-family: sans-serif;
      font-size: 0.8rem;
      letter-spacing: 1px;
      text-align: center;
    }

    caption {
      caption-side: bottom;
      padding: 10px;
      font-weight: bold;
    }

    thead {
      background-color: rgb(228 240 245);
    }

    th,
    td {
      border: 1px solid rgb(160 160 160);
      padding: 8px 10px;
    }

    td:last-of-type {
      text-align: center;
    }

    tbody>tr:nth-of-type(even) {
      background-color: rgb(237 238 242);
    }

    tfoot th {
      text-align: right;
    }

    tfoot td {
      font-weight: bold;
    }
  </style>
  <div>
    <h1>TABELA TOP</h1>
    <table>
    <caption>Tabela feita na matéria de ling programação WEB</caption>
      <thead>
        <tr>
          <?php
          $tr = array("Nome", "Habitantes", "Área", "Altitude", "Estado");
          //tr com varios th

          foreach ($tr as  $value) {
            echo "<th>$value</th>";
          }
          ?>
        </tr>

      </thead>
      <tbody>
        
          <?php
          $nomes = ["Foz do Iguaçu", "Cascavel", "Chapecó", "Blumenau", "Curitiba"];
          $habitantes = [250000, 300000, 240000, 330000, 1500000];
          $area = ["500km²", "420km²", "120km²", "200km²", "300km²"];
          $altitude = ["145m", "320m", "620m", "85m", "850m"];
          $estado = ["Paraná-PR", "Paraná-PR", "Santa Catarina-SC", "Santa Catarina-SC", "Paraná-PR"];
          $conteudos = array();
    
          for ($i = 0; $i < 5; $i++) {
            $conteudo["nome"] = $nomes[$i];
            $conteudo["habitantes"] = $habitantes[$i];
            $conteudo["area"] = $area[$i];
            $conteudo["altitude"] = $altitude[$i];
            $conteudo["estado"] = $estado[$i];

            array_push($conteudos, $conteudo);
          }


          foreach ($conteudos as  $conteudo) {
            echo "<tr>";
            echo "<td >{$conteudo["nome"]}</td>";
            echo "<td >{$conteudo["habitantes"]}</td>";
            echo "<td >{$conteudo["area"]}</td>";
            echo "<td >{$conteudo["altitude"]}</td>";
            echo "<td >{$conteudo["estado"]}</td>";
            echo "</tr>";
          }
          ?>
        
      </tbody>


    </table>

  </div>
</body>

</html>