<?php include 'inc/header.php'; ?>
    <div id="wrapper">
        <!-- Navigation -->
        <?php include 'inc/navigation.php'; ?>

        <div id="page-wrapper">

            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header text-center p-5 bg-success">
                            Country Page
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
                <?php 
                    if (isset($_GET['source'])) {
                       $source = $_GET['source'];
                    }else{
                        $source = '';
                    }
                    switch ($source) {
                        case 'add_country':
                            include "inc/add_country.php";
                            break;
                        case 'edit_country':
                            include "inc/edit_country.php";
                            break;
                        default:
                            include "inc/view_all_country.php";
                            break;
                    }
                 ?>
            </div>
        </div>
    </div>
<?php 
    if (isset($_GET['source'])) {
        echo '<script src="ckeditor/ckeditor.js"></script>
<script>
        CKEDITOR.replace( "editor1",{
                    height:300,
                    filebrowserUploadUrl:"upload/upload.php"
                } );
</script>';
    }
 ?>

    <?php include 'inc/footer.php'; ?>
