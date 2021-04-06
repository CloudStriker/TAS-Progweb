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
            <h1 class="m-0 text-dark">Gallery</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Gallery</li>
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
            <div class="card card-primary">
              
              <div class="card-body">
                <div>
                  
                  <div class="mb-2">
                  </div>
                </div>
                <div>
                  <div class="filter-container p-0 row">
                
                
                
                  <?php 
            $sql = "SELECT * FROM galleries ";
            $result = mysqli_query($con, $sql);
            $sql2 = "SELECT photo FROM biodata";
            $result2 = mysqli_query($con, $sql2);
            if(mysqli_num_rows($result) > 0 || mysqli_num_rows($result2) > 0 ){
                while($rowGal = mysqli_fetch_assoc($result)){ ?>
                    <div class="filtr-item col-sm-2">
                      <a href="<?php echo $rowGal['link'] ?>" data-toggle="lightbox"">
                        <img src="<?php echo $rowGal['src'] ?>" class="img-fluid mb-2" alt="w<?php echo $rowGal['label'] ?>"/>
                      </a>
                    </div>
                <?php }}
               while($rowGal2 = mysqli_fetch_assoc($result2)){ ?>
                <div class="filtr-item col-sm-2">
                      <a href="<?php echo $rowGal2['photo'] ?>" data-toggle="lightbox"">
                        <img src="<?php echo $rowGal2['photo'] ?>" class="img-fluid mb-2" alt="w<?php echo $rowGal2['photo'] ?>"/>
                      </a>
                    </div>
                     <?php } ?>

                     
                    </div>
                  </div>
                </div>
</div>

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



          <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">

                </div>
              </div>
              <!-- /.card-header -->

<?php 
    $sql = "SELECT * FROM galleries ";
    $result = mysqli_query($con, $sql);
    	if(mysqli_num_rows($result) > 0){?>
             <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Pic</th>
                      <th>Label</th>
                      <th>Label Info</th>
                      <th>info</th>
                      <th>Link</th>
                      <th>Owner</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
            <?php
            while($rowGal = mysqli_fetch_assoc($result)){ ?>
                <tr>
                <td><span class="tag tag-success"><img src="<?php echo $rowGal['src'] ?>" style="width:50px;heigh:50px"></span></td>      
                      <td><?php echo $rowGal['label'] ?></td>
                      <td><?php echo $rowGal['labelInfo'] ?></td>
                      <td><?php echo $rowGal['info'] ?></td>
                      <td><?php echo $rowGal['link'] ?></td>
                       <td><?php echo $rowGal['user'] ?></td>
                      <?php if($rowGal['user'] == $_SESSION['users']['user']){?>
                                    <td><a  class="btn btn-danger btn-sm" href="submitDeleteGalleries.php?id=<?php echo $rowGal['id'];?>">Delete</a></td>
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