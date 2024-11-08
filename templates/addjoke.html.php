<form action="" method="post">
    <label for='joketext'>Type your joke here;</label>
    <textarea name="joketext" rows="3" cols="40"></textarea>
    <select name="authors">
        <option value="">select an author</option>
        <?php foreach($author as $author):?>
            <option value="<?=htmlspecialchars($author['id'], ENT_QUOTES,'UTF-8'); ?>">
            <?=htmlspecialchars($author['name'], ENT_QUOTES, 'UTF-8'); ?>
        </option>
        <?php endforeach;?>
    </select>

    <select name="categories">
        <option value="">select a category</option>
        <?php foreach($categories as $categories):?>
            <option value="<?=htmlspecialchars($categories['id'], ENT_QUOTES,'UTF-8'); ?>">
            <?=htmlspecialchars($categories['categoryName'], ENT_QUOTES, 'UTF-8'); ?>
        </option>
        <?php endforeach;?>
    </select>
    <input type="submit" name="submit" value="Add">
</form>
1231456