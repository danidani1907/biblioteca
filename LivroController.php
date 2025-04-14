<?php
    //Incluir o arquivo 'aluno.php' que contem a classe Livro.
    //Incluir o alunosView.php, que contem a função exibirLivros().
    require_once 'livro.php';
    require_once 'livrosView.php';

    // Declaração da classe livroController.
    // Essa classe é responsável pela comunicação entre o livro.php (Model) e o livrosView(View)
    class livroController{
        //Criar uma propriedadeprivada chamada $model
        //|Ela será usada para armazenaruma instancia da classe aluno.
        private $model;

        //Criar um método constructor da classe, ele é chamado automaticamente quando um objeto é criado.
        public function __construct()
        {
            //criar uma nova instancia da classe livro, e armazenar na propriedade $model
            $this->model= new Livro();
        }

        //Método público chamado listar.
        // Serve para buscar a lista de livros e passar para o view.
        public function listar(){
            //chama o método listarLivros() do modelo e armazena na variável $alunos.
            $livros = $this->model->listarLivros();
            // chama a função exibir livros e envia a lista para mostrar no navegador.
            exibirLivros($livros);
        }
    }

    //execução do codigo
    //aqui fora da classe é criado um objeto do tipo livroController();
    $controler = new livroController();
    // Após criar o Objeto, é chamado o método  listar();
    $controler->listar();


?>