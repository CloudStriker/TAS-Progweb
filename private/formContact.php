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
                      <th>nama</th>
                      <th>pesan</th>
                      <th>End Year</th>
                      <th>Title</th>
                      <th>Info</th>
                      <th>Action</th>
                      <th>Owner</th>
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
                                    <td><span><a class="btn btn-danger btn-sm" action="submtiDeleteSkills.php" method="post">Delete</a></span>
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