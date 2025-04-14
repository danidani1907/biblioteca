<?php
//Declara uma função chamada exibirLivros que recebe o parâmetro $livros
//Esse parâmetro é esperado com um array com um array com informações dos alunos.

function exibirLivros($livros){
    // Imprime na tela um titulo h2 e abre uma lista não ordenada ul.
    echo "<h2> Lista de livros: </h2> <ul>";

    //Inicia um loop foreach, que percorre cada item do array $alunos.
    //Cada item é armazenado temporariamente na variavel $aluno
    foreach ($livros as $livro ){
        //para cada aluno, imprime um item da lista(li).
        // Exibe o nome do livro, autor e ano de lançamento nessa ordem.
        echo "<li> {$livro['nome']} de {$livro['autor']} lançado em {$livro['ano']} </li>";
    }
    echo "</ul>";
}

?>