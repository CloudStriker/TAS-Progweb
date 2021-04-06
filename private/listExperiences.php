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
            <h1 class="m-0 text-dark">List of Experiences</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">List of Experiences</li>
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
                          Gagal Menghapus Data<br><?php echo $_SESSION['msg'] ?>
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



          <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">

                </div>
              </div>
              <!-- /.card-header -->

<?php 
    $sql = "SELECT * FROM experiences ";
    $result = mysqli_query($con, $sql);
    	if(mysqli_num_rows($result) > 0){?>
             <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Label</th>
                      <th>Start Year</th>
                      <th>End Year</th>
                      <th>Title</th>
                      <th>Info</th>
                      <th>Owner</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
            <?php
            while($rowExp = mysqli_fetch_assoc($result)){ ?>
                <tr>
                      <td><?php echo $rowExp['label'] ?></td>
                      <td><?php echo $rowExp['start'] ?></td>
                      <td><?php echo $rowExp['end'] ?></td>
                      <td><span class="tag tag-success"><?php echo $rowExp['title'] ?></span></td>
                      <td><?php echo $rowExp['info'] ?></td>
                       <td><?php echo $rowExp['user'] ?></td>
                      <?php if($rowExp['user'] == $_SESSION['users']['user']){?>

                                    <td><a  class="btn btn-danger btn-sm" href="submitDeleteExperiences.php?id=<?php echo $rowExp['id'];?>">Delete</a></td>
                                    <?php }?>
                    </tr>
                    <?php }
?>
   </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row --> <?php } ?>

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