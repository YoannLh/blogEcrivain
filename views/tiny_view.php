<!DOCTYPE html>
<html>
    <head>

        <?php include_once 'includes/head.php'; ?> 

        <script src="https://cdn.tiny.cloud/1/4naze32lz7rs9cgza9w6niva4ebbhok0s4yymmetk5731cae/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    </head>
    <body>

        <header>
            <?php include_once 'views/includes/headerIfAdmin.php'; ?>
        </header>

        <form method="post">
            <textarea name="newPost">
                Bienvenue :)
            </textarea>
              <script>
                tinymce.init({
                    selector: 'textarea'});
            </script>
        <button type="submit" name="submit">Poster</button>
        </form>
    </body>
</html>