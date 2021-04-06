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
            <h1 class="m-0 text-dark">List of Education</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">List Of Education</li>
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



          <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    
                  </div>
                </div>
              <!-- /.card-header -->

<?php 
    $sql = "SELECT * FROM education ";
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
            while($rowEdu = mysqli_fetch_assoc($result)){ ?>
                <tr>
                      <td><?php echo $rowEdu['label'] ?></td>
                      <td><?php echo $rowEdu['start'] ?></td>
                      <td><?php echo $rowEdu['end'] ?></td>
                      <td><span class="tag tag-success"><?php echo $rowEdu['title'] ?></span></td>
                      <td><?php echo $rowEdu['info'] ?></td>
                       <td><?php echo $rowEdu['user'] ?></td>
                      <?php if($rowEdu['user'] == $_SESSION['users']['user']){?>
                        <td><a class="btn btn-danger btn-sm" href="submitDeleteEducation.php?id=<?php echo $rowEdu['id'];?>">Delete</a></td>
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