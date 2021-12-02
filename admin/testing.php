<!DOCTYPE html>
<html>
    <head>
            <meta charset="utf-8">
            <title>CKEditor</title>
            
    </head>
    <body>
<?php
    $connect = mysqli_connect("localhost", "root", "", "test");
    if (isset($_POST['submit'])) {
        echo $_POST['editor1'];
    }
 ?>     
        <form method="post" action=""> 
            <textarea name="editor1"></textarea>
            <button name="submit">Submit</button>
        </form>
            
        <br>
        <!-- <div name="editor2" contenteditable="true">
        	ffd  reg
        </div> -->
        <script src="ckeditor/ckeditor.js"></script>
        <script>
                CKEDITOR.replace( 'editor1' );
                // CKEDITOR.inline( 'editor2' );
        </script>
    </body>
</html>