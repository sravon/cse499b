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
                           Review Page
                        </h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <h4 class=" text-center p-5">
                            Click button to add review :
                        </h4>
                    </div>
                    <div class="col-md-8">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addreview">
                          Add review
                        </button>
        <div class="modal fade" id="addreview" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title text-center text-success" id="exampleModalLabel">Add Review</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['save'])) {
        $insertValueReview = $rev->insertValueReview($_POST,$_FILES);
        
    }
?>  
        
                <form method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-3">
                              <label><b>Name :</b></label>
                            </div>
                            <div class="col-md-9">
                              <input type="text" name="name" class="form-control" placeholder="enter name">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                              <label><b class="text-center">Image :</b></label>
                            </div>
                            <div class="col-md-8">
                              <input type="file" name="image" class="form-control">
                            </div>
                        </div>
                        <br>
                        <textarea class="form-control" name="des" placeholder="enter short discription here"></textarea>
                        <br>
                        <br>
                         <button type="submit" class="btn btn-primary" name="save">SAVE</button>
                    </div>
                </form>
            </div>
          </div>
        </div>

                    </div>
                </div>
                <br>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <th>Serial No</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Comment</th>
                                </thead>
                                <tbody>
            <?php 
            $allRev = $rev->allReview();
            if ($allRev) {
                $i = 0;
              while ($row = mysqli_fetch_array($allRev)){
                $i++;
             ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $row['rev_name']; ?></td>
                                        <td><?php echo $row['rev_image']; ?></td>
                                        <td><?php echo $row['rev_cmt']; ?></td>
                                        <td><a class="btn btn-primary">View</a></td>
                                        <td><button class="editingbtn btn btn-warning">Edit</button></td>
                                        <td><a href="" class="text-muted btn btn-danger"><b>X</b></a></td>
                                        <td><?php echo $row['rev_id'] ?></td>
                                    </tr>
            <?php }} ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<!-- ##################### Edit modal ################### -->
<div class="modal fade" id="editbtn" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title text-center text-success">Edit Member</h3>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
        $updateValueMember = $rev->updateValueReview($_POST,$_FILES);
        
    }
?>  
        <form method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-3">
                      <input type="hidden" id="edit_id" name="rev_id">
                      <label><b>Name :</b></label>
                    </div>
                    <div class="col-md-9">
                      <input type="text" id="edit_name" name="edit_name" class="form-control" placeholder="enter name">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                      <label class="text-center" style="padding: 17px;">Image</label>
                    </div>
                    <div class="col-md-8">
                      <img src="" id="show_image" width="50" alt="university_image">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                      <label><b>Select Image :</b></label>
                    </div>
                    <div class="col-md-6">
                      <input type="file" name="edit_image" class="form-control">
                    </div>
                </div>
                <br>
                <textarea class="form-control" name="description" id="description"></textarea>
                <br>
                 <button type="submit" class="btn btn-primary" name="update">update</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>


<?php include 'inc/footer.php'; ?>
<script type="text/javascript">
    $(document).ready(function(){
        $('.editingbtn').on('click',function(){
            $('#editbtn').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children('td').map(function(){
                return $(this).text();
            }).get();
            console.log(data);
            $('#edit_id').val(data[7]);
            $('#edit_name').val(data[1]);
            $('#description').val(data[3]);
            $("#show_image").attr("src","upload/"+data[2]);
        });
    });
</script>
