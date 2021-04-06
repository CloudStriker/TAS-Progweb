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
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard Page</li>
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
            <?php
                $con = createConnection();
                $sql = "SELECT * FROM biodata WHERE user = '".$_SESSION['users']['user']."' ";
                $row = null;
                $result = mysqli_query($con, $sql);
                if(mysqli_num_rows($result)){
                    $row = mysqli_fetch_assoc($result);
                }
            ?>


              <form action="submitFormBiodata.php" method="post" enctype="multipart/form-data">
                <div class="card-body">

                  <div class="form-group">
                  <label>About</label>
                  <textarea class="textarea" placeholder="Place some text here" name="about"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo ($row!=null)?$row['about']:""  ;?> </textarea>
                  </div>

                  <div class="form-group">
                  <label>Profile</label>
                  <textarea class="textarea" placeholder="Place some text here" name="profile"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo ($row!=null)?$row['profile']:""  ;?> </textarea>
                  </div>

                  <div class="form-group">
                  
                  <label>Fullname</label>
                    <input type="text" class="form-control" value="<?php echo ($row!=null)?$row['fullname']:""  ;?>" name="fullname">
                  </div>
                  
                  <div class="form-group d-flex justify-content-center" >
                  <label>Tahun</label>
                    <input type="number" class="form-control" value="<?php echo ($row!=null)?$row['tahun']:""  ;?>" name="tahun">
                    <label>Bulan</label>
                    <input type="number" class="form-control" value="<?php echo ($row!=null)?$row['bulan']:""  ;?>" name="bulan">
                    <label>Tanggal</label>
                    <input type="number" class="form-control" value="<?php echo ($row!=null)?$row['tanggal']:""  ;?>" name="tanggal">
                  </div>

                  <div class="form-group">
                
                  </div>

                  <div class="form-group">
                 
                  </div>
                
                  <div class="form-group">
                  <label>Job</label>
                  <textarea class="textarea" placeholder="Place some text here" name="job"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo ($row!=null)?$row['job']:""  ;?></textarea>
                  </div>
                  
                  <div class="form-group">
                  <label>Website</label>
                  <input type="text" class="form-control" value="<?php echo ($row!=null)?$row['website']:""  ;?>" name="website">
                  </div>

                  <div class="form-group">
                  <label>Email</label>
                    <input type="email" class="form-control" value="<?php echo ($row!=null)?$row['email']:""  ;?>" name="email">
                  </div>

                  <div class="form-group">
                  <label>Phone Number</label>
                    <input type="number" class="form-control" value="<?php echo ($row!=null)?$row['phone']:""  ;?>" name="phone">
                  </div>

                  <div class="form-group">
                  <label>Address</label>
                  <textarea class="textarea" placeholder="Address" name="address"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo ($row!=null)?$row['address']:""  ;?></textarea>
                  </div>

                  <div class="form-group">
                    <label for="uploadImages">Upload Images</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="uploadImages" name="uploadImages">
                        <label class="custom-file-label" for="uploadImages" >Choose file</label>
                  </div>
                  </div>

                  <div class="form-group">
                    <label for="uploadCV">Upload CV</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="uploadCV" name="uploadCV">
                        <label class="custom-file-label" for="uploadCV">Choose file</label>
                    
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
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->





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