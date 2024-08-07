<div class="container bg-main text-white fs-4 mt-3 ps-4 py-2 border-top rounded">
    LIVROS
</div>
<div class="container">
    <hr>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped table-bordered border" id="myTable">
                <thead>
                    <th> Título </th>
                    <th> Autor(a) </th>
                    <th> ISBN </th>
                    <th> Editora </th>
                    <th> Categoria </th>
                    <th> Lançamento </th>
                    <th> Download </th>
                    <th> Ações </th>
                </thead>

                <tbody>

                    <?php foreach ($books as $key => $book) : ?>
                        <tr>
                            <td><?= htmlspecialchars($book[0]); ?></td>
                            <td><?= htmlspecialchars($book[1]); ?></td>
                            <td><?= htmlspecialchars($book[2]); ?></td>
                            <td><?= htmlspecialchars($book[3]); ?></td>
                            <td><?= htmlspecialchars($book[4]); ?></td>
                            <td><?= htmlspecialchars($book[5]); ?></td>
                            <td>
                                <?php if (!empty($book[6])) : ?>
                                    <?php $fileName = strrchr($book[6], '/');?>
                                    
                                    <a href="<?= htmlspecialchars($baseUrl.'/modules/books/uploads'.$fileName); ?>" class="btn btn-danger btn-sm" title="Baixar PDF" target="_blank">
                                        <i class="fa fa-file-pdf"></i> PDF
                                    </a>
                                <?php else : ?>
                                    <span>PDF não disponível</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="admin.php?page=updateBook&id=<?=$key;?>" class="btn btn-transition btn-sm m-1" title="Editar Livro">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <button class="btn btn-danger btn-sm m-1" title="Excluir Livro" data-bs-toggle="modal" data-bs-target="#delete-<?=$key;?>">
                                    <i class="fa fa-trash"></i>
                                </button>

                            </td>
                                
                            <!-- Modal de Exclusão -->
                            <div class="modal fade" id="delete-<?=$key;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <form action="modules/books/control.books.php" method="POST">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir Livro?! </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>

                                            <div class="modal-body">
                                                Tem certeza que deseja excluir 
                                                <strong> <?= $book[0]; ?> </strong> ? <br>
                                                Essa operação não pode ser desfeita.
                                                    
                                                <input type="hidden" name="action" value="delete">
                                                <input type="hidden" name="id" value="<?=$key;?>">

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa fa-ban"></i> Não, cancelar! </button>
                                                <button type="submit" class="btn btn-success">
                                                    <i class="fa fa-thumbs-up"></i> Sim, continuar!  
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
