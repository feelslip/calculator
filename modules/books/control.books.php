<?php

    include_once '../../config/config.php';
    include_once '../../config/crud.php';

    if (isset($_POST['action'])) {

        switch ($_POST['action']) {

            case "insert":
                unset($_POST['action']);
                
                if (isset($_FILES['pdf']) && $_FILES['pdf']['error'] === UPLOAD_ERR_OK) {
                    $pdfTmpPath = $_FILES['pdf']['tmp_name'];
                    $pdfName = $_FILES['pdf']['name'];
                    $pdfDestination = $basePath.'/modules/books/uploads/'.$pdfName;
                    echo $pdfDestination;
                    
                    // Move o arquivo PDF para o diretório de destino
                    if (move_uploaded_file($pdfTmpPath, $pdfDestination)) {
                        $_POST['pdf'] = $pdfDestination; // Adiciona o caminho do PDF aos dados
                    } else {
                        header("location: $baseUrl/admin.php?page=insertBook&msg=pdf_error");
                        exit;
                    }
                } else {
                    header("location: $baseUrl/admin.php?page=insertBook&msg=pdf_up_error");
                    exit;
                }

                $result = insert("database.books", $_POST);
                if ($result) {
                    header("location: $baseUrl/admin.php?page=listBooks&msg=book_add");
                } else {
                    header("location: $baseUrl/admin.php?page=listBooks&msg=book_add_error");
                }

            break;

            case "update":

                unset($_POST['action']);
            
                // Verifica se o campo 'id' está presente e é válido
                if (isset($_POST['id']) && is_numeric($_POST['id'])) {
                    $id = intval($_POST['id']);
                    unset($_POST['id']);
            
                    $result = update("database.books", $id, $_POST);
            
                    if ($result) {
                        header("location: $baseUrl/admin.php?page=listBooks&msg=book_update");
                    } else {
                        header("location: $baseUrl/admin.php?page=listBooks&msg=book_update_error");
                    }
                } else {
                    header("location: $baseUrl/admin.php?page=listBooks&msg=book_update_error");
                }
            break;
            

            case "delete":
                unset($_POST['action']);
                $result = delete("database.books", $_POST['id']);

                if ($result) {
                    header("location: $baseUrl/admin.php?page=listBooks&msg=book_delete");
                } else {
                    header("location: $baseUrl/admin.php?page=listBooks&msg=book_delete_error");
                }

            break;
        }
    } else {
        header("location: admin.php?page=login&msg=access_denied");
    }
