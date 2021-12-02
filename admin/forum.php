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
                            FORUM
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
                <?php 
                    if (isset($_GET['name'])) {
                       $name = $_GET['name'];
                    }else{
                        $name = '';
                    }
                    switch ($name) {
                        case 'add_new_question_answer':
                            include "inc/add_new_question_answer.php";
                            break;
                        case 'edit_question_answer':
                            include "inc/edit_question.php";
                            break;
                        default:
                            include "inc/view_all_elements.php";
                            break;
                    }
                 ?>
            </div>
        </div>
    </div>
<?php 
    if (isset($_GET['name'])) {
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
