<!DOCTYPE html>
<html>
<head>
    <title>Tabela de Produtos</title>
    <style>
        table {
            width: 100%;
            margin-top:50px;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: black;
            color: white;
        }
        .eletronico {
            background-color:rgb(105, 158, 81);
            color:rgb(3, 100, 3);
        }
        .limpeza {
            background-color:rgb(134, 134, 80);
            color:rgb(219, 219, 91);
        }
        .roupa {
            background-color:rgb(78, 129, 133);
            color:rgb(42, 42, 110);
        }
        .alimento {
            background-color:rgb(139, 70, 136);
            color: pink;
        }

    </style>
</head>
<body>
    <?php
    $produtos = array(
        array("Nome" => "Camiseta", "Preço" => "R$ 49,90", "Categoria" => "roupa"),
        array("Nome" => "Arroz", "Preço" => "R$ 12,50", "Categoria" => "alimento"),
        array("Nome" => "TV", "Preço" => "R$ 2.000", "Categoria" => "eletronico"),
        array("Nome" => "Detergente", "Preço" => "R$ 3,20", "Categoria" => "limpeza"),
        array("Nome" => "Notebook", "Preço" => "R$ 3.499,90", "Categoria" => "eletronico"),
        array("Nome" => "Desinfetante", "Preço" => "R$ 11,90", "Categoria" => "limpeza"),
        array("Nome" => "Bermuda", "Preço" => "R$ 39,90", "Categoria" => "roupa"),
        array("Nome" => "Café", "Preço" => "R$ 34,65", "Categoria" => "alimento"),
        
    );

    echo "<table>";
    echo "<tr>";
    echo "<th>Nome</th>";
    echo "<th>Preço</th>";
    echo "<th>Categoria</th>";
    echo "</tr>";

    foreach ($produtos as $produto) {
        $categoria = strtolower($produto["Categoria"]);
        echo "<tr class='$categoria'>";
        echo "<td>" . $produto["Nome"] . "</td>";
        echo "<td>" . $produto["Preço"] . "</td>";
        echo "<td>" . $produto["Categoria"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>
</body>
</html>
