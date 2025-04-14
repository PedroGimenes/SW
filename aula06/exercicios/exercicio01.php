<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
        }
        th {
            color: orange;
            background-color:rgb(122, 32, 122);
            
        }
        th, td {
            
            text-align: center;
        }

        tr:nth-child(even) {
            background-color:rgb(141, 37, 37);
        }
        tr:nth-child(odd) {
            background-color:rgb(81, 54, 179);
        }
    </style>
</head>
<body>
    <h2>Tabela de 8 linhas e 4 colunas</h2>
    <table>
        <thead>
            <tr>
                <th>Coluna 1</th>
                <th>Coluna 2</th>
                <th>Coluna 3</th>
                <th>Coluna 4</th>
            </tr>
        </thead>
    <tbody>
        <?php
        for ($i = 1; $i <= 8; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 4; $j++) {
                echo "<td>Linha $i</td>";
            }
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>