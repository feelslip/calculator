<?php

    // Verifica se o parâmetro 'id' está presente na URL
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = intval($_GET['id']);
    } else {
        // Redireciona ou exibe uma mensagem de erro se o 'id' não estiver presente ou não for válido
        header('Location: admin.php?page=listBooks');
        exit();
    }

?>

<div class="container bg-main text-white fs-4 mt-3 ps-4 py-2 border-top rounded">
    ATUALIZAR LIVRO
</div>
<div class="container col-md-12 mt-3">
    <div class="card text-start">
        <form action="modules/books/control.books.php" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="row">

                    <div class="mb-3">
                        <label for="inputTitulo" class="form-label">
                            Título
                        </label>
                        <input type="text" class="form-control" id="inputTitulo" name="titulo" value="<?= htmlspecialchars($books[$id][0]); ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="inputAutor" class="form-label">
                            Autor
                        </label>
                        <input type="text" class="form-control" id="inputAutor" name="autor" value="<?= htmlspecialchars($books[$id][1]); ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="inputIsbn" class="form-label">
                            ISBN
                        </label>
                        <input type="text" class="form-control" id="inputIsbn" name="isbn" value="<?= htmlspecialchars($books[$id][2]); ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="inputEditora" class="form-label">
                            Editora
                        </label>
                        <input type="text" class="form-control" id="inputEditora" name="editora" value="<?= htmlspecialchars($books[$id][3]); ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="inputCategoria" class="form-label">
                            Categoria
                        </label>
                        <select class="form-control" id="inputCategoria" name="categoria" required>
                            <option value="">
                                Selecione uma categoria
                            </option>
                            <?php
                            $categories = ["Auto-Ajuda", "Aventura", "Biografia", "Ciência", "Contos e Crônicas", "Economia e Negócios", "Educação", "Fantasia", "Ficção Científica", "Filosofia", "Histórico", "Literatura Infantojuvenil", "Mistério", "Não-Ficção", "Poesia", "Religião e Espiritualidade", "Romance", "Saúde e Bem-Estar", "Suspense", "Tecnologia"];
                            foreach ($categories as $category) {
                                $selected = $books[$id][4] === $category ? 'selected' : '';
                                echo "<option value=\"$category\" $selected>$category</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="inputAnoPub" class="form-label">
                            Ano de publicação
                        </label>
                        <input type="text" class="form-control" id="inputAnoPub" name="ano-publicacao" value="<?= htmlspecialchars($books[$id][5]); ?>" required>
                    </div>
                    
                    <input type="hidden" name="id" value="<?= htmlspecialchars($id); ?>">
                    <input type="hidden" value="update" name="action">

                    <div class="col-md-12 mt-3">
                        <p class="text-center">
                            <button class="btn btn-transition">
                                <i class="fa fa-save"></i> 
                                Atualizar Livro
                            </button>
                        </p>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
