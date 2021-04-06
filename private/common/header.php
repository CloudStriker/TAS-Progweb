</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

 <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
      <table>
        <td>
          <span>
         <h4>Hallo, <?php echo $_SESSION['users']['user'] ?> </h4>
        </span>
          </td>
          <td>
          <button type="button" class="btn btn-block btn-danger btn-sm"><a  href="submitLogout.php" style="color:white">Logout</button>
        </td>
      </table>
  </ul>



  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>

          <?php
            if($_SESSION['users']['role'] == "administrator"){?>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Title Home Page
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="formHomeTitle.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form Homepage</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive Page</p>
                </a>
              </li> -->
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Biodata
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="formBiodata.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form Biodata</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Skills
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="listSkills.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List of Skills</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="formSkills.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form Skills</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Experiences
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="listExperiences.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List of Experiences</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="formExperiences.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form Experiences</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Education
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="listEducation.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List of Education</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="formEducation.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form Education</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Gallery
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="listGalleries.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List of Photos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="formGalleries.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form Gallery</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Contact
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="listContact.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List of Contact</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Social Media
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="listSocialMedia.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List of Social Media</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="formSocialMedia.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Form Social Media</p>
                </a>
              </li>
            </ul>
          </li>

            <?php }else  
              if($_SESSION['users']['role'] == "Content Manager"){ ?>


             
     
               <li class="nav-item has-treeview">
                 <a href="#" class="nav-link active">
                   <i class="nav-icon fas fa-tachometer-alt"></i>
                   <p>
                     Biodata
                     <i class="right fas fa-angle-left"></i>
                   </p>
                 </a>
                 <ul class="nav nav-treeview">
                   <li class="nav-item">
                     <a href="formBiodata.php" class="nav-link">
                       <i class="far fa-circle nav-icon"></i>
                       <p>Form Biodata</p>
                     </a>
                   </li>
                 </ul>
               </li>
     
               <li class="nav-item has-treeview">
                 <a href="#" class="nav-link active">
                   <i class="nav-icon fas fa-tachometer-alt"></i>
                   <p>
                     Skills
                     <i class="right fas fa-angle-left"></i>
                   </p>
                 </a>
                 <ul class="nav nav-treeview">
                   <li class="nav-item">
                     <a href="listSkills.php" class="nav-link">
                       <i class="far fa-circle nav-icon"></i>
                       <p>List of Skills</p>
                     </a>
                   </li>
                   <li class="nav-item">
                     <a href="formSkills.php" class="nav-link">
                       <i class="far fa-circle nav-icon"></i>
                       <p>Form Skills</p>
                     </a>
                   </li>
                 </ul>
               </li>
     
               <li class="nav-item has-treeview">
                 <a href="#" class="nav-link active">
                   <i class="nav-icon fas fa-tachometer-alt"></i>
                   <p>
                     Experiences
                     <i class="right fas fa-angle-left"></i>
                   </p>
                 </a>
                 <ul class="nav nav-treeview">
                   <li class="nav-item">
                     <a href="listExperiences.php" class="nav-link">
                       <i class="far fa-circle nav-icon"></i>
                       <p>List of Experiences</p>
                     </a>
                   </li>
                   <li class="nav-item">
                     <a href="formExperiences.php" class="nav-link">
                       <i class="far fa-circle nav-icon"></i>
                       <p>Form Experiences</p>
                     </a>
                   </li>
                 </ul>
               </li>
     
               <li class="nav-item has-treeview">
                 <a href="#" class="nav-link active">
                   <i class="nav-icon fas fa-tachometer-alt"></i>
                   <p>
                     Education
                     <i class="right fas fa-angle-left"></i>
                   </p>
                 </a>
                 <ul class="nav nav-treeview">
                   <li class="nav-item">
                     <a href="listEducation.php" class="nav-link">
                       <i class="far fa-circle nav-icon"></i>
                       <p>List of Education</p>
                     </a>
                   </li>
                   <li class="nav-item">
                     <a href="formEducation.php" class="nav-link">
                       <i class="far fa-circle nav-icon"></i>
                       <p>Form Education</p>
                     </a>
                   </li>
                 </ul>
               </li>
     
               <li class="nav-item has-treeview">
                 <a href="#" class="nav-link active">
                   <i class="nav-icon fas fa-tachometer-alt"></i>
                   <p>
                     Gallery
                     <i class="right fas fa-angle-left"></i>
                   </p>
                 </a>
                 <ul class="nav nav-treeview">
                   <li class="nav-item">
                     <a href="listGalleries.php" class="nav-link">
                       <i class="far fa-circle nav-icon"></i>
                       <p>List of Photos</p>
                     </a>
                   </li>
                   <li class="nav-item">
                     <a href="formGalleries.php" class="nav-link">
                       <i class="far fa-circle nav-icon"></i>
                       <p>Form Gallery</p>
                     </a>
                   </li>
                 </ul>
               </li>
     

     
               <li class="nav-item has-treeview">
                 <a href="#" class="nav-link active">
                   <i class="nav-icon fas fa-tachometer-alt"></i>
                   <p>
                     Social Media
                     <i class="right fas fa-angle-left"></i>
                   </p>
                 </a>
                 <ul class="nav nav-treeview">
                   <li class="nav-item">
                     <a href="listSocialMedia.php" class="nav-link">
                       <i class="far fa-circle nav-icon"></i>
                       <p>List of Social Media</p>
                     </a>
                   </li>
                   <li class="nav-item">
                     <a href="formSocialMedia.php" class="nav-link">
                       <i class="far fa-circle nav-icon"></i>
                       <p>Form Social Media</p>
                     </a>
                   </li>
                 </ul>
               </li>

            <?php } ?>
          

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>