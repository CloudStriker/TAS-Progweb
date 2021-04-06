<?php 
    include_once("common/head.php");
?>
 <!-- summernote -->
 <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.css">
<?php
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
 
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">



          <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Responsive Hover Table</h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    
                  </div>
                </div>
              </div>
              <!-- /.card-header -->

<?php 
    $sql = "SELECT * FROM contact ";
    $result = mysqli_query($con, $sql);
    	if(mysqli_num_rows($result) > 0){?>
             <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Subject</th>
                      <th>Message</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
            <?php
            while($rowExp = mysqli_fetch_assoc($result)){ ?>
                <tr>
                      <td><?php echo $rowExp['contactName'] ?></td>
                      <td><?php echo $rowExp['contactEmail'] ?></td>
                      <td><?php echo $rowExp['contactSubject'] ?></td>
                      <td><?php echo $rowExp['contactMessage'] ?></td>
                      <td><a href="submitDeleteContact.php?id=<?php echo $rowExp['id'];?>"><button>Delete</button></a></td>
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
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

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
?>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
<?php
    include_once("common/foot.php");
?>