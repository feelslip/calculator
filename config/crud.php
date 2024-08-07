<?php
    
    /**
     * Biblioteca CRUD para arquivos
     *
     * Descrição: Este script faz algo incrível e útil.
     * Autor: Seu Nome
     * Versão: 1.0
     * Data de Criação: 13 de março de 2024
     *
     * Uso:
     * 1. Execute o script via linha de comando ou servidor web.
     * 2. Forneça os parâmetros necessários (se houver).
     * 3. Observe os resultados mágicos acontecerem!
     * 
     * Notas:
     * - Certifique-se de ter o PHP instalado.
     * - Este script é apenas um exemplo e não faz nada real.
    */

    /**
     * Insere dados em um arquivo.
     *
     * Esta função insere os dados fornecidos em um arquivo especificado.
     *
     * @param string $file O caminho completo para o arquivo onde os dados serão inseridos.
     * @param array $data Um array associativo contendo os dados a serem inseridos. 
     * @return bool Retorna true se a inserção for bem-sucedida.
     * 
     */


    function insert(string $file, array $data) :bool {
        
        $archive = fopen($file.".txt", "a+");

        $string = implode(" - ", $data);
        
        if(fwrite($archive, $string."\n") == false){
            return false;
        }

        fclose($archive);

        return true;
    }

    function read(string $file) :array{

        $allData = file($file.".txt");

        if($allData){
            $data = [];    
            foreach($allData as $row){
                $line = explode(" - ", $row);
                $data[] = $line;
            }

            return $data;
        }else{
            return [];
        }
    }


    function delete(string $file, int $key) :bool {
        $filePath = $file . ".txt";
        
        if (!file_exists($filePath)) {
            return false;
        }
    
        $allData = file($filePath);
    
        if (isset($allData[$key])) {
            unset($allData[$key]);
        } else {
            return false;
        }
    
        // Recria o arquivo com os dados restantes
        $archive = fopen($filePath, "w"); // Use "w" para sobrescrever o arquivo existente
    
        if (!$archive) {
            return false;
        }
    
        foreach ($allData as $line) {
            fwrite($archive, $line);
        }
    
        fclose($archive);
    
        return true;
    }
    

    function update(string $file, int $key, array $newData): bool {
        $filePath = $file . ".txt";
    
        // Verifica se o arquivo existe
        if (!file_exists($filePath)) {
            return false;
        }
    
        // Lê todos os dados do arquivo
        $allData = file($filePath);
    
        // Verifica se o índice fornecido é válido
        if (isset($allData[$key])) {
            // Extrai o caminho do PDF do dado atual
            $currentData = explode(" - ", trim($allData[$key]));
            $pdfPath = $currentData[6] ?? '';
    
            // Atualiza o registro no índice especificado com novos dados
            $newData[6] = $pdfPath; // Mantém o caminho do PDF
            $allData[$key] = implode(" - ", $newData) . "\n";
    
            // Recria o arquivo com os dados atualizados
            $archive = fopen($filePath, "w"); // Use "w" para sobrescrever o arquivo existente
    
            if (!$archive) {
                return false;
            }
    
            foreach ($allData as $line) {
                fwrite($archive, $line);
            }
    
            fclose($archive);
    
            return true;
        }
    
        return false;
    }
    
    


?>
