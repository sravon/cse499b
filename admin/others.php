<?php include 'inc/header.php'; ?>
    <div id="wrapper">
        <!-- Navigation -->
        <?php include 'inc/navigation.php'; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Blank Page
                            <small>Subheading</small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead >
                                    <th class="text-center">Title</th>
                                    <th class="text-center">Content</th>
                                </thead>
                                <tbody>
        <?php 
            $othersInfo =$forum->othersInfo();
            if ($othersInfo) {
                while($row = mysqli_fetch_array($othersInfo)){
        ?>
                            <tr>
                                <td><?php echo $row['other_title']; ?></td>
                                <td><?php echo $fm->textShorten($row['other_content'],50); ?></td>
                                <td style="display: none"><?php echo $row['other_content']; ?></td>
                                <td style="display: none"><?php echo $row['other_id']; ?></td>
                                <td><button class="btn btn-primary editbtn" >edit</button></td>
                            </tr>
        <?php    }}
 
         ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- ##################### Edit modal ################### -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title text-center text-success">edit Course</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
        $UpdateValueUniversity = $forum->updateValueOfOthers($_POST);
        
    }
?>  
        <form method="post">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-3">
                      <label class="text-center" style="padding: 10px;">Name</label>
                    </div>
                    <div class="col-md-9">
                        <input type="hidden" id="others_id" name="id">
                      <input type="text" id="name" name="name" class="form-control" placeholder="enter name here">
                    </div>
                </div>
                <br>
                <textarea class="form-control" id="textArea" name="textArea"></textarea>
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
        $('.editbtn').on('click',function(){
            $('#editmodal').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children('td').map(function(){
                return $(this).text();
            }).get();
            console.log(data);
            $('#name').val(data[0]);
            $('#others_id').val(data[3]);
            $('#textArea').val(data[2]);
        });
    });
</script>
