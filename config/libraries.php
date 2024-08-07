<?php



    /**
     * Chama a biblioteca do DataTables.
     *
     * Esta função chama todos os componentes do datables, incluindo os JS .
     *
     * @return string Retorna uma string contendo os dados dos arquivos do dataTable.
     * 
     */
    function callDatatablesJS():string {
        
        global $baseUrl;

        return '
        <script src="'.$baseUrl.'/assets/dist/js/jquery.min.js"></script>
        <script src="'.$baseUrl.'/assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="'.$baseUrl.'/assets/dist/js/dataTables.min.js"></script>
        <script src="'.$baseUrl.'/assets/dist/js/dataTables.bootstrap5.js"></script>
        <script src="'.$baseUrl.'/assets/dist/js/dataTables.responsive.js"></script>
        <script src="'.$baseUrl.'/assets/dist/js/responsive.bootstrap5.js"></script>
        <script src="'.$baseUrl.'/assets/dist/js/dataTables.buttons.js"></script>
        <script src="'.$baseUrl.'/assets/dist/js/buttons.bootstrap5.js"></script>
        <script src="'.$baseUrl.'/assets/dist/js/jszip.min.js"></script>
        <script src="'.$baseUrl.'/assets/dist/js/pdfmake.min.js"></script>
        <script src="'.$baseUrl.'/assets/dist/js/vfs_fonts.js"></script>
        <script src="'.$baseUrl.'/assets/dist/js/buttons.html5.min.js"></script>
        <script src="'.$baseUrl.'/assets/dist/js/buttons.print.min.js"></script>
        <script src="'.$baseUrl.'/assets/dist/js/buttons.colVis.min.js"></script>
        <script type="text/javascript">
            let table = new DataTable(\'#myTable\', {
                responsive: true,
                layout: {
                    topStart: {
                        buttons: [\'copy\', \'excel\',\'colvis\']
                    }
                },
                stateSave: true,
                language: {
                    url: "https://cdn.datatables.net/plug-ins/1.11.3/i18n/pt_br.json"
                }
            });
        </script>';
    }
        
    function callDatatablesCSS():string{

        global $baseUrl;

        return '
            <link rel="stylesheet" href="'.$baseUrl.'/assets/dist/css/dataTables.bootstrap5.css">
            <link rel="stylesheet" href="'.$baseUrl.'/assets/dist/css/responsive.bootstrap5.css">
            <link rel="stylesheet" href="'.$baseUrl.'/assets/dist/css/buttons.bootstrap5.css">
        ';
    }

    function callMask():string{
        global $baseUrl;
        
        return '
            <script src="'.$baseUrl.'/assets/dist/js/jquery.min.js"></script>
            <script src="'.$baseUrl.'/assets/dist/js/jquery.mask.min.js"></script>
        ';        
    }

    function googleRecaptcha():string{
        return '<script src="https://www.google.com/recaptcha/api.js" async defer></script>';
    }

?>