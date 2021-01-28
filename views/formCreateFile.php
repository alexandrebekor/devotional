<form action="./" method="post">
    <label for="date_devotional">Data:</label>
    <input type="date" name="date_devotional" id="date_devotional">
    <button type="submit">Criar</button>
</form>

<?php
    $dateDevotional = filter_input(INPUT_POST, "date_devotional", FILTER_SANITIZE_SPECIAL_CHARS);
    
    var_dump(PATH_POSTS);

    if ($dateDevotional) {
        $file = $dateDevotional . ".md";

        //$files = scandir(PATH_POSTS);
        
        //var_dump($files);
        /*
        if(in_array($file, $files)) {
            echo "<p>Arquivo já existe!</p>";
        } else {
            $path = $postsPath . $file;
            $path = fopen($path, "w");
            fclose($path);
            echo "<p>Arquivo Criado</p>";
        }
        */
    }
?>