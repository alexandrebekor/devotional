<form action="" method="get">
    <label for="abbrev">Livro:</label>
    <input type="text" name="abbrev" id="abbrev" value="<?= $abbrev ?? '' ?>">

    <label for="chapter">Capítulo:</label>
    <input type="number" name="chapter" id="chapter" min="0" value="<?= $chapter ?? '' ?>">

    <button type="submit">Procurar</button>
</form>