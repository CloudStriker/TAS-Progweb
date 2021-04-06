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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->

          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Home & Title</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            <?php 
                $con = createConnection();
                $sql = "SELECT * FROM website";
                $row = null;
                $result = mysqli_query($con, $sql);
                if(mysqli_num_rows($result)){
                    $row = mysqli_fetch_assoc($result);
                }
            ?>


              <form action="submitFormHomeTitle.php" method="post">
                <div class="card-body">

                  <div class="form-group">
                  <label>Greetings</label>
                    <input type="text" class="form-control" value="<?php echo ($row!=null)?$row['sapaan']:""  ;?>" name="sapaan">
                  </div>

                  <div class="form-group">
                  <label>Title</label>
                    <input type="text" class="form-control" value="<?php echo ($row!=null)?$row['title']:""  ;?>" name="title">
                  </div>
                  <div class="form-group">
                  <label>Skill Info</label>
                  <textarea class="textarea" placeholder="Place some text here" name="skillsInfo"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo ($row!=null)?$row['skillsInfo']:""  ;?> </textarea>
                  </div>
                  
                  <div class="form-group">
                  <label>Resume Info</label>
                  <textarea class="textarea" placeholder="Place some text here" name="resumeInfo"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo ($row!=null)?$row['resumeInfo']:""  ;?></textarea>
                  </div>

                  <div class="form-group">
                  <label>Galleries Info</label>
                  <textarea class="textarea" placeholder="Place some text here" name="galleriesInfo"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo ($row!=null)?$row['galleriesInfo']:""  ;?></textarea>
                  </div>
                  
                  <div class="form-group">
                  <label>Contact Info</label>
                  <textarea class="textarea" placeholder="Place some text here" name="contactInfo"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo ($row!=null)?$row['contactInfo']:""  ;?></textarea>
                  </div>

                  <div class="form-group">
                  <label>Copyright</label>
                    <input type="text" class="form-control" value="<?php echo ($row!=null)?$row['copyright']:""  ;?>" name="copyright">
                  </div>

                  <div class="form-group">
                  <label>Design By</label>
                    <input type="text" class="form-control" value="<?php echo ($row!=null)?$row['byy']:""  ;?>" name="byy">
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