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
            <h1 class="m-0 text-dark">List Of Skills</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">List Of Skills</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
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
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
           <!-- MULAI DARI SINI UNTUK DI MASUKAN DATA / TABLE BARU --->


            <div class="col-md-12">
              <div class="card">
                <div>

                  
            <?php 
            $sql = "SELECT * FROM skills";
            $result = mysqli_query($con, $sql);
            if(mysqli_num_rows($result) > 0){?>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body p-0">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>Skills</th>
                                  <th>Percentage</th>
                                  <th>Owner</th>
                                  <th style="width: 40px">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                  
                  <?php                             
              while($rowSkills = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                  <td><?php echo $rowSkills['label'] ?></td>
                   <td><span><?php echo $rowSkills['percentage'] ?>%</span></td>
                   <td><span><?php echo $rowSkills['user'] ?></span> </td>
                  <?php if($rowSkills['user'] == $_SESSION['users']['user']){?>
                    <td><a class="btn btn-danger btn-sm" href="submitDeleteSkills.php?id=<?php echo $rowSkills['id'];?>">Delete</a></td>
                   <?php }?>              
                </tr>
                  <?php  }?>
                          
                          </tbody>
                      </table>
                      </div>
                      <!-- /.card-body -->
                  </div>
                  <!-- /.card --><?php
            }
            ?>

                        

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