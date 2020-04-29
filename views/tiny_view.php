<!DOCTYPE html>
<html>
    <head>

        <?php include_once 'includes/head.php'; ?> 

        <script src="https://cdn.tiny.cloud/1/4naze32lz7rs9cgza9w6niva4ebbhok0s4yymmetk5731cae/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    </head>
    <body>
        <textarea>
            Welcome to TinyMCE!
        </textarea>
          <script>
            tinymce.init({
                selector: 'textarea'});
        </script>
        <form method="post"><button type="submit" name="button">Poster</button></form>
    </body>
</html>