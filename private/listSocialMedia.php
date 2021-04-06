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
            <h1 class="m-0 text-dark">List Social Media</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">List Social Media</li>
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
                          Gagal Menghapus Data<br>
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
 
            <div class="card">
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    
                  </div>
                </div>
              <!-- /.card-header -->

<?php 
    $sql = "SELECT * FROM socialmedia ";
    $result = mysqli_query($con, $sql);
    	if(mysqli_num_rows($result) > 0){?>
             <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Link</th>
                      <th>User</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
            <?php
            while($rowSocMed = mysqli_fetch_assoc($result)){ ?>
                <tr>
                      <td><?php echo $rowSocMed['link'] ?></td>
                      <td><?php echo $rowSocMed['user'] ?></td>
                      <?php if($rowSocMed['user'] == $_SESSION['users']['user']){?>
                        <td><a class="btn btn-danger btn-sm" href="submitDeleteSocialMedia.php?id=<?php echo $rowSocMed['id'];?>">Delete</a></td>
                                    <?php }?>
                      <?php }?>
                    </tr>
                    <?php }?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row --> <?php  ?>

               

                


              

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

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