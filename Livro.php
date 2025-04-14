<?php
class Biblioteca {
    private $livros = [
        ['nome' => '1984', 'autor' => 'George Orwell', 'ano' => 1949],
        ['nome' => 'Bettypet', 'autor' => 'Roberto', 'ano' => 2011],
        ['nome' => 'Senhor dos Anéis', 'autor' => 'J.R.R. Tolkien', 'ano' => 1954],
        ['nome' => 'O Conto da Aia', 'autor' => 'Margaret Atwood', 'ano' => 1985],
        ['nome' => 'O Sol é para Todos', 'autor' => 'Harper Lee', 'ano' => 1960]
    ];

    public function listarLivros() {
        return $this->livros;
    }
}

$biblioteca = new Biblioteca();
$livros = $biblioteca->listarLivros();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Livros da Biblioteca</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:#e5c5f1;
            padding: 30px;
        }
        h2 {
            text-align: center;
            color: #FF8DA1;
        }
        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            box-shadow: 0 2px 10px rgba(186, 0, 0, 0.1);
            background-color: white;
        }
        th, td {
            padding: 12px 18px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #333;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>

    <h2>Lista de Livros</h2>

    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Ano</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($livros as $livro): ?>
                <tr>
                    <td><?= htmlspecialchars($livro['nome']) ?></td>
                    <td><?= htmlspecialchars($livro['autor']) ?></td>
                    <td><?= htmlspecialchars($livro['ano']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>