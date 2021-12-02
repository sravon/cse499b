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
                            All Image
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
                <div class="container-fluid">
                    <div class="container">
                        
                    </div>
                </div>
                <div class="row">

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addslide">
                Click Here to Add Slide or Image
                </button>
                <!-- Modal -->
                <div class="modal fade" id="addslide" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['save'])) {
                        $insertValueImage = $forum->insertValueImage($_POST,$_FILES);
                        
                    }
                ?>
                    <form method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                  <label class="text-center" style="padding: 17px;">Image Name</label>
                                </div>
                                <div class="col-md-8">
                                  <input type="text" name="name" class="form-control" placeholder="Enter Image name here">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                  <label class="text-center" style="padding: 17px;">Image Type</label>
                                </div>
                                <div class="col-md-8">
                                    <select class="form-control" name="type">
                                        <option>Select Option</option>
                                        <option value="0">main slider</option>
                                        <option value="1">event slider</option>
                                        <option value="2">admit image</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                  <label class="text-center" style="padding: 17px;">Image</label>
                                </div>
                                <div class="col-md-8">
                                  <input type="file" name="image" class="form-control">
                                </div>
                            </div>
                            <br>
                             <button type="submit" class="btn btn-primary" name="save">SAVE</button>
                        </div>
                    </form>

                    </div>
                  </div>
                </div>
                <br>
                <br>
                    <div class="col-md-4">
                        <h4 class="text-center text-success">Slider Image</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <th>Serial No</th>
                                    <th>Image</th>
                                </thead>
                                <tbody>
<?php 
            $allforum =$forum->allImageById(0);
            if ($allforum) {
                $i = 0;
                while($row = mysqli_fetch_array($allforum)){
                    $i++;
?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><img src="upload/<?php echo $row['slide_image'] ?>" width="100"></td>
                                        <td><a href="" class="btn btn-danger">X</a></td>
                                    </tr>
    <?php }} ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h4 class="text-center text-success">Event Image</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <th>Serial No</th>
                                    <th>Image</th>
                                </thead>
                                <tbody>
<?php 
            $allforum =$forum->allImageById(1);
            if ($allforum) {
                $i = 0;
                while($row = mysqli_fetch_array($allforum)){
                    $i++;
?>
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><img src="upload/bro.jpg"></td>
                                        <td><a href="" class="btn btn-danger">X</a></td>
                                    </tr>
 <?php               };
            }
 
         ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h4 class="text-center text-success">Admit Image</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <th>Serial No</th>
                                    <th>Image</th>
                                </thead>
                                <tbody>
<?php 
            $allforum =$forum->allImageById(2);
            if ($allforum) {
                $i = 0;
                while($row = mysqli_fetch_array($allforum)){
                    $i++;
?>
                        <tr>
                            <td>1</td>
                            <td><img src="upload/bro.jpg"></td>
                            <td><a href="" class="btn btn-danger">X</a></td>
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
    <?php include 'inc/footer.php'; ?>
