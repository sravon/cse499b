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
                            Examination Page
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
                        case 'add_examination_menu':
                            include "inc/add_exam.php";
                            break;
                        case 'edit_examination_menu':
                            include "inc/edit_exam.php";
                            break;
                        default:
                            include "inc/view_all_exam.php";
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
