<?php

    function validate(){

        global $basePath;
        global $baseUrl;
        global $dependencies;
        global $script;

        if(isset($_GET['page']) == false){
            return false;
        }

        switch($_GET['page']){

// Login
            case "login":
                include_once $basePath.'/layout/pgLogin.php';
            break;    

            case "home":
                include_once $basePath.'/layout/home.php';
            break;    
            
// Lista de Livros
            case "listBooks":
                // Verificar se há dados no banco
                $content = file_get_contents($basePath.'/modules/books/database.books.txt');

                if ($content == true) {
                    include_once $basePath.'/config/crud.php';
                    $books = read("$basePath/modules/books/database.books");
                    $dependencies = ["datatablesJS" => true];
                    include_once $basePath.'/modules/books/listBooks.php';
                } else {
                    echo "<div class='display-5 m-5 text-center'>Você ainda não tem nenhum livro cadastrado.</div>";
                }
            break;    
// Cadastrar Livro
            case "insertBook":
                $dependencies = ["mask"=>true];

                $script = '
                    <script type="text/javascript">
                        $(document).ready(function(){
                            $(\'#inputIsbn\').mask(\'000–00–000–0000–0\');
                            $(\'#inputAnoPub\').mask(\'0000\');
                        });
                    </script>
                ';
                include_once $basePath.'/modules/books/insertBook.php';
            break;
// Atualizar Livro
            case "updateBook":
                $content = file_get_contents($basePath.'/modules/books/database.books.txt');
                
                if ($content == true) {
                    include_once $basePath.'/config/crud.php';
                    $books = read("$basePath/modules/books/database.books");
                    $dependencies = ["mask"=>true];
                    include_once $basePath.'/modules/books/updateBook.php';
                    $script = '
                        <script type="text/javascript">
                            $(document).ready(function(){
                                $(\'#inputIsbn\').mask(\'000–00–000–0000–0\');
                                $(\'#inputAnoPub\').mask(\'0000\');
                            });
                        </script>
                    ';
                } else {
                    echo "<div class='display-5 m-5 text-center'>Você ainda não tem nenhum livro cadastrado.</div>";
                }
            break;

        }

    }





?>