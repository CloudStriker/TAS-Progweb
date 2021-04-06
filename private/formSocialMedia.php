<?php
    include_once("common/head.php");
    include_once("common/header.php");
?>




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Social Media</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form Social Media</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>




    <?php
                        if(isset($_GET['msg']) && $_GET['msg'] == 0){
                    ?>
                      <div class="alert alert-danger alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                          Gagal Menghapus Data<br> <?php echo $_SESSION['msg'] ?>
                      </div>
                    <?php
                        }else if(isset($_GET['msg']) && $_GET['msg'] == 1){
                    ?>
                      <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Alert!</h5>
                        Berhasil Menghapus Data
                      </div>
                    <?php
                        }  
                    ?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="submitFormSocialMedia.php">
                <div class="card-body ">
                  <div class="form-group" style="width:50%;">
                    <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label >Icon</label>
                        <select class="custom-select" name="icon">
                          <option value="fa fa-instagram">Instagram</option>
                          <option value="fa fa-twitter">Twitter</option>
                          <option value="fa fa-facebook">Facebook</option>
                          <option value="fa fa-youtube">Youtube</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group" style="width:50%;">
                    <label for="percentage">Link</label>
                    <input type="text" class="form-control" id="link" placeholder="link" name="link">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->


            
<?php
    include_once("common/footer.php");
    include_once("common/foot.php");
?>