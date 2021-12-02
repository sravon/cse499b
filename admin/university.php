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
                            University Page
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
                        case 'add_course':
                            include "inc/add_course.php";
                            break;
                        case 'view_all_university':
                            include "inc/view_all_university.php";
                            break;
                        case 'edit_course':
                            include "inc/edit_course.php";
                            break;
                        default:
                            include "inc/view_all_Course.php";
                            break;
                    }
                 ?>
            </div>
        </div>
    </div>


<?php 
    if (isset($_GET['name']) && $_GET['name']=='add_course') {
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
<script type="text/javascript">
    $(document).ready(function(){
        $('.editbtn').on('click',function(){
            $('#editmodal').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children('td').map(function(){
                return $(this).text();
            }).get();
            console.log(data);
            $('#edit_id').val(data[11]);
            $('#name').val(data[1]);
            $('#edit_cnty').val(data[2]);
            $('#edit_location').val(data[3]);
            $('#established').val(data[4]);
            $('#link').val(data[7]);
            $("#show_image").attr("src","upload/"+data[6]);
            $( "#type" ).val(data[5]);
        });
    });
</script>