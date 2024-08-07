<div class="container bg-main text-white fs-4 mt-3 ps-4 py-2 border-top rounded">
    CADASTRO DE LIVROS
</div>
<div class="container col-md-12 mt-3">
    <div class="card text-start">
        <form action="modules/books/control.books.php" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="row">

                    <div class="mb-3">
                        <label for="inputPdf" class="form-label">
                            PDF do Livro
                        </label>
                        <input type="file" class="form-control" id="inputPdf" name="pdf" accept=".pdf">
                    </div>

                    <div class="mb-3">
                        <label for="inputTitulo" class="form-label">
                            Título
                        </label>
                        <input type="text" class="form-control" id="inputTitulo" name="titulo" required>
                    </div>

                    <div class="mb-3">
                        <label for="inputAutor" class="form-label">
                            Autor
                        </label>
                        <input type="text" class="form-control" id="inputAutor" name="autor" required>
                    </div>

                    <div class="mb-3">
                        <label for="inputIsbn" class="form-label">

                        ISBN
                        </label>
                        <input type="text" class="form-control" id="inputIsbn" name="isbn" required>
                    </div>

                    <div class="mb-3">
                        <label for="inputEditora" class="form-label">
                            Editora
                        </label>
                        <input type="text" class="form-control" id="inputEditora" name="editora" required>
                    </div>

                    <div class="mb-3">
                        <label for="inputCategoria" class="form-label">
                            Categoria
                        </label>
                        <select class="form-control" id="inputCategoria" name="categoria" required>
                            <option>Selecione uma categoria</option>
                            <option value="Auto-Ajuda">Auto-Ajuda</option>
                            <option value="Aventura">Aventura</option>
                            <option value="Biografia">Biografia</option>
                            <option value="Ciência">Ciência</option>
                            <option value="Contos e Crônicas">Contos e Crônicas</option>
                            <option value="Negócios e Economia">Economia e Negócios</option>
                            <option value="Educação">Educação</option>
                            <option value="Fantasia">Fantasia</option>
                            <option value="Ficção Científica">Ficção Científica</option>
                            <option value="Filosofia">Filosofia</option>
                            <option value="Histórico">Histórico</option>
                            <option value="Literatura Infantojuvenil">Literatura Infantojuvenil</option>
                            <option value="Mistério">Mistério</option>
                            <option value="Não-Ficção">Não-Ficção</option>
                            <option value="Poesia">Poesia</option>
                            <option value="Religião e Espiritualidade">Religião e Espiritualidade</option>
                            <option value="Romance">Romance</option>
                            <option value="Saúde e Bem-Estar">Saúde e Bem-Estar</option>
                            <option value="Suspense">Suspense</option>
                            <option value="Tecnologia">Tecnologia</option>

                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="inputAnoPub" class="form-label">
                            Ano de publicação
                        </label>
                        <input type="text" class="form-control" id="inputAnoPub" name="ano-publicacao" required>
                    </div>

                    <input type="hidden" value="insert" name="action">

                    <div class="col-md-12 mt-3">
                        <p class="text-center">
                            <button class="btn btn-transition">
                                <i class="fa fa-plus-square"></i> Cadastrar Livro
                            </button>
                        </p>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>