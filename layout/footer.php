<script src="<?=$baseUrl;?>/assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
    if(isset($dependencies)){
        //var_dump($dependencies);
        foreach($dependencies as $key=>$value){

            if($key == "mask"){
                if($value == true){
                    echo callMask();
                }
            }

            if($key == "datatablesJS"){
                if($value == true){
                   echo callDatatablesJS();
                }
            }

        }

    }

    if(isset($script)){
        echo $script;
    }

?>


<?php
    if(isset($_GET['msg'])):
        switch($_GET['msg']):
            case "access_error":
                $icon = "error";
                $title = "Erro ao acessar!";
                $text = "Usuário ou senha incorretos"; 
                break;
            case "pfd_error":
                $icon = "error";
                $title = "Ops!";
                $text = "Erro ao mover o arquivo PDF para o diretório de destino";
                break;
            case "pfd_up_error":
                $icon = "error";
                $title = "Ops!";
                $text = "Erro no upload: ".$_FILES.['pdf']['error'];
                break;
            case "book_add":
                $icon = "success";
                $title = "Livro adicionado!";
                $text = "";
                break;

            case "book_add_error":
                $icon = "error";
                $title = "Parece que houve um erro!";
                $text = "Tente novamente!";
                break;

            case "book_update":
                $icon = "success";
                $title = "Livro atualizado!";
                $text = "";
            break;

            case "book_update_error":
                $icon = "error";
                $title = "Erro ao tentar atualizar dados";
                $text = "Tente novamente!";
            break;

            case "book_delete":
                $icon = "success";
                $title = "Livro deletado!";
                $text = "";
            break;

            case "book_delete_error":
                $icon = "error";
                $title = "Erro ao tentar excluir dados";
                $text = "Tente novamente!";
            break;
            
        endswitch;

?>
    <script>
        Swal.fire({
            icon: "<?=$icon;?>",
            title: "<?=$title;?>",
            text: "<?=$text;?>",
            showConfirmButton: false,
            footer: '<a href="admin.php?page=listBooks" class="btn btn-secondary"> OK </a>'
        });
    </script>
<?php endif; ?>