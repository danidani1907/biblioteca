<?php
// Defina uma classe chamada aluno
class Livro{
    // criar uma propriedade privada (encapsulamento) chamada $livros;
    // Essa propriedade é um array que armazena dados e livros;
    // Cada livro é representado por um array associativo com titulo, autor e ano de publicação
private $livros = [
    ['nome' => '1984', 'autor' => 'George owell', 'ano' => 1949],
    ['nome' => 'Bettypet', 'autor' => 'Roberto', 'ano'=> 2011],
    ['nome' => 'senhor dos anéis', 'autor' => 'Tolkien', 'ano' => 1954],
    ['nome' => 'o conto de aia', 'autor' => 'margareth', 'ano' => 1985],
    ['nome' => 'o sól é para todos', 'autor' => 'harper lee', 'ano' => 1960]
];

// Define um método púnlico chamado listarAlunos.
// Esse método serve para retornar o conteúdo do array $alunos

public function listarlivros(){
    return $this->livros;
}

}
?>