<?php 
    include_once("common/head.php");
    include_once("common/header.php");
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Form Education</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Form Education</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
           <!-- MULAI DARI SINI UNTUK DI MASUKAN DATA / TABLE BARU --->


           <?php
                        if(isset($_GET['msg']) && $_GET['msg'] == 0){
                    ?>
                      <div class="alert alert-danger alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                          Gagal Menmasukan Data<br> <?php echo $_SESSION['msg'] ?>
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

            <!-- general form elements -->
            <div class="card card-primary">
              <!-- form start -->
            <?php
                $con = createConnection();
                $sql = "SELECT * FROM experiences WHERE user = '".$_SESSION['users']['user']."' ";
                $row = null;
                $result = mysqli_query($con, $sql);
                if(mysqli_num_rows($result)){
                    $row = mysqli_fetch_assoc($result);
                }
            ?>


              <form action="submitFormEducation.php" method="post">
                <div class="card-body">

                  <div class="form-group">
                  <label>Label</label>
                  <input type="text" class="form-control" name="label" placeholder="Label"> 
                   </div>

                  <div class="form-group">
                  <label>Start Year</label>
                     <input type="number" class="form-control" placeholder="Start Year" name="startYear">
                  </div>

                  <div class="form-group">
                  <label>End Year (0 = Present)</label>
                     <input type="number" class="form-control" placeholder="End Year" name="endYear">
                  </div>
                  
                  <label>Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title">
                  </div>
                
                  <div class="form-group">
                  <label>Info</label>
                  <textarea class="textarea" placeholder="Place some text here" name="info"
                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

              </div>
              <!-- /.card-body -->
            </div>




       <!-- BERHENTI DISINI -->
       </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php
    include_once("common/footer.php");
    include_once("common/foot.php");
?>