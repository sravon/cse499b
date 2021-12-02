<?php include 'inc/header.php'; ?>
    <div id="wrapper">
        <!-- Navigation -->
        <?php include 'inc/navigation.php'; ?>

        <div id="page-wrapper">
<?php 
    if ( isset($_GET['name']) && $_GET['name']=='country' && !empty($_GET['id'])) {
        $id = $_GET['id'];
        $gettValueContryId = $cntry->gettValueContryId($id);
    }elseif ( isset($_GET['name']) && $_GET['name']=='exam' && !empty($_GET['id'])) {
        $id = $_GET['id'];
        $gettValueContryId = $exam->gettValueexamId($id);
    }else{
        echo '<script> location.replace("country.php"); </script>';
    }
 
    if ($gettValueContryId) {
      $row = mysqli_fetch_array($gettValueContryId);
    }
?>
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header text-center p-5 bg-success">
                            <?php echo $row['title']; ?>
                        </h1>
                    </div>
                    <div class="container container-fluid">
                        <div>
                            <?php echo htmlspecialchars_decode($row['content']); ?>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </div>
    </div>
    <?php include 'inc/footer.php'; ?>
