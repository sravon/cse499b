<?php include 'inc/header.php'; ?>
    <div id="wrapper">
        <!-- Navigation -->
        <?php include 'inc/navigation.php'; ?>

        <div id="page-wrapper">

            <div class="container-fluid">
<?php 
    if ( isset($_GET['page_id']) && !empty($_GET['page_id'])) {
        $id = $_GET['page_id'];
        $gettValuePageId = $page->gettValuePageId($id);
    }else{
        echo '<script> location.replace("index.php"); </script>';
    }

    if ($gettValuePageId) {
      $row = mysqli_fetch_array($gettValuePageId);
    }
?>
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header text-center">
                            <?php echo $row['page_title'] ?>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
<?php 
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
         $updateValueOfPage = $page->updateValueOfPage($_POST,$id);
    }
 ?>
                <h2 class="text-center bg-success"><?php if (isset($updateValueOfPage)) {
                        echo $updateValueOfPage;
                    } ?></h2>
                <div class="row">
                    <div class="col-md-12">
                        <form method="post" action=""> 
                            <div class="row">
                                <div class="col-md-1">
                                    <label class="text-dark h5">Title :</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="title" required class="form-control" value="<?php echo $row['page_title'] ?>" placeholder="name here">
                                </div>
                            </div>
                            <br>
                            <textarea name="editor1"><?php echo $row['page_content'] ?></textarea>
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="ckeditor/ckeditor.js"></script>
<script>
        CKEDITOR.replace( "editor1",{
                    height:300,
                    filebrowserUploadUrl:"upload/upload.php"
                } );
</script>

<?php include 'inc/footer.php'; ?>
   
