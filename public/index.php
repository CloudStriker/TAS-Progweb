<?php 
	include_once('common/connection.php');
	$con = createConnection();
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Team ∞</title>
	<meta name="description" content="It's All About Dream That Will Come True">  
	<meta name="author" content="Dave, Philip, Mic">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">  
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/vendor.css">     

   <!-- script
   ================================================== -->   
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="favicon.png">

</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <header>
   <?php 
	$sql = "SELECT * FROM website";
	$result = mysqli_query($con, $sql);
	$rowWeb = mysqli_fetch_assoc($result);
   ?>  	
   	<div class="row">

   		<div class="top-bar">
   			<a class="menu-toggle" href="#"><span>Menu</span></a>

	   		<div class="logo">
		         <a href="index.php"><?php echo $rowWeb['title'] ?></a>
		      </div>		      

		   	<nav id="main-nav-wrap">
					<ul class="main-navigation">
						<li class="current"><a class="smoothscroll"  href="#intro" title="">Home</a></li>
						<li><a class="smoothscroll"  href="#about" title="">About</a></li>
						<li><a class="smoothscroll"  href="#resume" title="">Resume</a></li>
						<li><a class="smoothscroll"  href="#portfolio" title="">Portfolio</a></li>					
						<li><a class="smoothscroll"  href="#contact" title="">Contact</a></li>			
					</ul>
				</nav>    		
   		</div> <!-- /top-bar --> 
   		
   	</div> <!-- /row --> 		
   </header> <!-- /header -->

	<!-- intro section
   ================================================== -->
   <section id="intro">   

   	<div class="intro-overlay"></div>	

   	<div class="intro-content">
   		<div class="row">

			

   			<div class="col-twelve">

	   			<h5><?php echo $rowWeb['sapaan'] ?></h5>
	   			<h1><?php echo $rowWeb['title'] ?></h1>

	   			<p class="intro-position">
				   <?php 
						$sql = "SELECT * FROM biodata";
						$result = mysqli_query($con, $sql);
						while($rowBiodata = mysqli_fetch_assoc($result)){
								?>
									<span><?php echo $rowBiodata['fullname'] ?></span>
								<?php
							}
						?>
	   			</p>

	   			<a class="button stroke smoothscroll" href="#about" title="">More About Us</a>

	   		</div>  
   			
   		</div>   		 		
   	</div> <!-- /intro-content --> 

   	<ul class="intro-social">        
	   <?php 
			$sql = "SELECT * FROM socialmedia";
			$result = mysqli_query($con, $sql);
			while($rowSoc = mysqli_fetch_assoc($result)){
		?>
			 <li><a href="<?php echo $rowSoc['link'] ?>"><i class="<?php echo $rowSoc['icon'] ?>"></i></a></li>
		<?php
			}
		?>
        
      </ul> <!-- /intro-social -->      	

   </section> <!-- /intro -->


   <!-- about section
   ================================================== -->
   <section id="about">  
   	<?php	
		$sql = "SELECT * FROM biodata WHERE user ='david'" ;
		$result = mysqli_query($con, $sql);
		$rowBio1 = mysqli_fetch_assoc($result);
   	?>
   
   	<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>About</h5>
   			<h1>Let us introduce ourself</h1>

	




	
   			<div class="intro-info">
				<h2><?php echo $rowBio1['fullname'] ?></h2>

				   <img src="<?php echo $rowBio1['photo']  ?>" alt="Profile Picture">

   				<p class="lead"><?php echo $rowBio1['about'] ?></p>
   			</div>   			

   		</div>   		
   	</div> <!-- /section-intro -->

   	<div class="row about-content">

   		<div class="col-six tab-full">

   			<h3>Profile</h3>
   			<p class="drop-cap"><?php echo $rowBio1['profile'] ?></p>

   			<ul class="info-list">
   				<li>
   					<strong>Fullname:</strong>
   					<span><?php echo $rowBio1['fullname'] ?></span>
   				</li>
   				<li>
   					<strong>Birth Date:</strong>
					   <span><?php echo $rowBio1['tahun'] ?> - <?php echo $rowBio1['bulan'] ?> - <?php echo $rowBio1['tanggal']?></span>
   				</li>
   				<li>
   					<strong>Job:</strong>
   					<span><?php echo $rowBio1['job'] ?></span>
   				</li>
   				<li>
   					<strong>Website:</strong>
   					<span>-</span>
   				</li>
   				<li>
   					<strong>Email:</strong>
   					<span><?php echo $rowBio1['email'] ?></span>
   				</li>

   			</ul> <!-- /info-list -->

   		</div>

   		<div class="col-six tab-full">

   			<h3>Skills</h3>
   			<p><?php echo $rowWeb['skillsInfo'] ?></p>

				<ul class="skill-bars">
				<?php 
					$sql = "SELECT * FROM skills WHERE user = 'david'";
					$result = mysqli_query($con, $sql);
					if(mysqli_num_rows($result) > 0){
						while($rowSkills1 = mysqli_fetch_assoc($result)){
							?>
							<li>
								<div class="progress percent<?php echo $rowSkills1['percentage'] ?>"><span><?php echo $rowSkills1['percentage'] ?>%</span></div>
								<strong><?php echo $rowSkills1['label'] ?></strong>
							</li>
							<?php
						}
					}
					?>
				</ul> <!-- /skill-bars -->		

   		</div>

   	</div>

   	<div class="row button-section">
   		<div class="col-twelve">
   			<!-- <a href="#contact" title="Hire Me" class="button stroke smoothscroll">Hire Me</a> -->
   			<a href="#" title="Download CV" class="button button-primary">Download CV</a>
   		</div>   		
	   </div>
	   <hr>

	<div class="row section-intro">
	<?php	
		$sql = "SELECT * FROM biodata WHERE user ='michael'" ;
		$result = mysqli_query($con, $sql);
		$rowBio2 = mysqli_fetch_assoc($result);
   	?>
		<div class="col-twelve">
			<div class="intro-info">
				<h2><?php echo $rowBio2['fullname'] ?></h2>
				<img src="<?php echo $rowBio2['photo'] ?>" alt="Profile Picture">
				<p class="lead"><?php echo $rowBio2['about'] ?></p>
			</div>   			
		</div>   		
	</div> <!-- /section-intro -->

	<div class="row about-content">

		<div class="col-six tab-full">

			<h3>Profile</h3>
			<p class="drop-cap"><?php echo $rowBio2['profile'] ?></p>

			<ul class="info-list">
				<li>
					<strong>Fullname:</strong>
					<span><?php echo $rowBio2['fullname'] ?></span>
				</li>
				<li>
					<strong>Birth Date:</strong>
					<span><?php echo $rowBio2['tahun'] ?> - <?php echo $rowBio2['bulan'] ?> - <?php echo $rowBio2['tanggal']?></span>
				</li>
				<li>
					<strong>Job:</strong>
					<span><?php echo $rowBio2['job'] ?></span>
				</li>
				<li>
					<strong>Website:</strong>
					<span><?php echo $rowBio2['website'] ?></span>
				</li>
				<li>
					<strong>Email:</strong>
					<span><?php echo $rowBio2['email'] ?></span>
				</li>


			</ul> <!-- /info-list -->

		</div>

		<div class="col-six tab-full">

			<h3>Skills</h3>
			<p><?php echo $rowWeb['skillsInfo'] ?></p>

			 <ul class="skill-bars">
			 <?php 
					$sql = "SELECT * FROM skills WHERE user = 'michael'";
					$result = mysqli_query($con, $sql);
					if(mysqli_num_rows($result) > 0){
						while($rowSkills2 = mysqli_fetch_assoc($result)){
							?>
							<li>
								<div class="progress percent<?php echo $rowSkills2['percentage'] ?>"><span><?php echo $rowSkills2['percentage'] ?>%</span></div>
								<strong><?php echo $rowSkills2['label'] ?></strong>
							</li>
							<?php
						}
					}
					?>
			 </ul> <!-- /skill-bars -->		

		</div>

	</div>

	<div class="row button-section">
		<div class="col-twelve">
			<!-- <a href="#contact" title="Hire Me" class="button stroke smoothscroll">Hire Me</a> -->
			<a href="#" title="Download CV" class="button button-primary">Download CV</a>
		</div>   		
	</div>
<hr>

	<div class="row section-intro">
	<?php	
		$sql = "SELECT * FROM biodata WHERE user ='philip'" ;
		$result = mysqli_query($con, $sql);
		$rowBio3 = mysqli_fetch_assoc($result);
   	?>
		<div class="col-twelve">
			<div class="intro-info">
				<h2><?php echo $rowBio3['fullname'] ?></h2>
				<img src="<?php echo $rowBio3['photo'] ?>" alt="Profile Picture">
				<p class="lead"><?php echo $rowBio3['about'] ?></p>
			</div>   			
		</div>   		
	</div> <!-- /section-intro -->

	<div class="row about-content">

		<div class="col-six tab-full">

			<h3>Profile</h3>
			<p class="drop-cap"><?php echo $rowBio3['profile'] ?></p>

			<ul class="info-list">
				<li>
					<strong>Fullname:</strong>
					<span><?php echo $rowBio3['fullname'] ?></span>
				</li>
				<li>
					<strong>Birth Date:</strong>
					<span><?php echo $rowBio3['tahun'] ?> - <?php echo $rowBio3['bulan'] ?> - <?php echo $rowBio3['tanggal']?></span>
				</li>
				<li>
					<strong>Job:</strong>
					<span><?php echo $rowBio3['job'] ?></span>
				</li>
				<li>
					<strong>Website:</strong>
					<span><?php echo $rowBio3['website'] ?></span>
				</li>
				<li>
					<strong>Email:</strong>
					<span><?php echo $rowBio3['email'] ?></span>
				</li>

			</ul> <!-- /info-list -->

		</div>

		<div class="col-six tab-full">

			<h3>Skills</h3>
			<p><?php echo $rowWeb['skillsInfo'] ?></p>

			 <ul class="skill-bars">
			 <?php 
					$sql = "SELECT * FROM skills WHERE user = 'philip'";
					$result = mysqli_query($con, $sql);
					if(mysqli_num_rows($result) > 0){
						while($rowSkills3 = mysqli_fetch_assoc($result)){
							?>
							<li>
								<div class="progress percent<?php echo $rowSkills3['percentage'] ?>"><span><?php echo $rowSkills3['percentage'] ?>%</span></div>
								<strong><?php echo $rowSkills3['label'] ?></strong>
							</li>
							<?php
						}
					}
					?>
			 </ul> <!-- /skill-bars -->		

		</div>

	</div>

	<div class="row button-section">
		<div class="col-twelve">
			<!-- <a href="#contact" title="Hire Me" class="button stroke smoothscroll">Hire Me</a> -->
			<a href="#" title="Download CV" class="button button-primary">Download CV</a>
		</div>   		
	</div>

</section> <!-- /process-->    

   <!-- resume Section
   ================================================== -->
	<section id="resume" class="grey-section">

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Resume</h5>
   			<h1>More of our credentials.</h1>

   			<p class="lead"><?php echo $rowWeb['resumeInfo'] ?></p>

   		</div>   		
   	</div> <!-- /section-intro--> 

   	<div class="row resume-timeline">
		<h2 style="text-align:center"><?php echo $rowBio1['fullname'] ?></h2>
   		<div class="col-twelve resume-header">
			
   			<h2>Work Experience</h2>

   		</div> <!-- /resume-header -->

   		<div class="col-twelve">

   			<div class="timeline-wrap">
			  
			  <?php 
					$sql = "SELECT * FROM experiences WHERE user = 'david'";
					$result = mysqli_query($con, $sql);
					if(mysqli_num_rows($result) > 0){
						while($rowEx1 = mysqli_fetch_assoc($result)){
							?>
							<div class="timeline-block">

							<div class="timeline-ico">
								<i class="fa fa-briefcase"></i>
							</div>

							<div class="timeline-header">
								<h3><?php echo $rowEx1['label'] ?></h3>
								<p><?php echo $rowEx1['start'] ?> - <?php echo ($rowEx1['end'] == 0)? 'Sekarang':$rowEx1['end'] ?></p>
							</div>

							<div class="timeline-content">
								<h4><?php echo $rowEx1['title'] ?></h4>
								<p><?php echo $rowEx1['info'] ?></p>
							</div>

							</div> <!-- /timeline-block -->
							<?php
						}
					}
					?>

   			</div> <!-- /timeline-wrap -->   			

   		</div> <!-- /col-twelve -->
   		
   	</div> <!-- /resume-timeline -->
   	
   	<div class="row resume-timeline">

   		<div class="col-twelve resume-header">

   			<h2>Education</h2>

   		</div> <!-- /resume-header -->

   		<div class="col-twelve">

   			<div class="timeline-wrap">

			   <?php 
					$sql = "SELECT * FROM education WHERE user = 'david'";
					$result = mysqli_query($con, $sql);
					if(mysqli_num_rows($result) > 0){
						while($rowEdu1 = mysqli_fetch_assoc($result)){
							?>
							<div class="timeline-block">

							<div class="timeline-ico">
								<i class="fa fa-graduation-cap"></i>
							</div>

							<div class="timeline-header">
								<h3><?php echo $rowEdu1['label'] ?></h3>
								<p><?php echo $rowEdu1['start'] ?> - <?php echo ($rowEdu1['end'] == 0)? 'Sekarang':$rowEdu1['end'] ?></p>
							</div>

							<div class="timeline-content">
								<h4><?php echo $rowEdu1['title'] ?></h4>
								<p><?php echo $rowEdu1['info'] ?></p>
							</div>

							</div> <!-- /timeline-block -->
							<?php
						}
					}
					?>

   			</div> <!-- /timeline-wrap -->   			

   		</div> <!-- /col-twelve -->
   		
   	</div> <!-- /resume-timeline -->
<hr>
	   <div class="row resume-timeline">
		<h2 style="text-align:center"><?php echo $rowBio2['fullname'] ?></h2>
		<div class="col-twelve resume-header">

			<h2>Work Experience</h2>

		</div> <!-- /resume-header -->

		<div class="col-twelve">

			<div class="timeline-wrap">

			<?php 
					$sql = "SELECT * FROM experiences WHERE user = 'michael'";
					$result = mysqli_query($con, $sql);
					if(mysqli_num_rows($result) > 0){
						while($rowEx2 = mysqli_fetch_assoc($result)){
							?>
							<div class="timeline-block">

							<div class="timeline-ico">
								<i class="fa fa-briefcase"></i>
							</div>

							<div class="timeline-header">
								<h3><?php echo $rowEx2['label'] ?></h3>
								<p><?php echo $rowEx2['start'] ?> - <?php echo ($rowEx2['end'] == 0)? 'Sekarang':$rowEx2['end'] ?></p>
							</div>

							<div class="timeline-content">
								<h4><?php echo $rowEx2['title'] ?></h4>
								<p><?php echo $rowEx2['info'] ?></p>
							</div>

							</div> <!-- /timeline-block -->
							<?php
						}
					}
					?>

			</div> <!-- /timeline-wrap -->   			

		</div> <!-- /col-twelve -->
		
	</div> <!-- /resume-timeline -->
	
	<div class="row resume-timeline">

		<div class="col-twelve resume-header">

			<h2>Education</h2>

		</div> <!-- /resume-header -->

		<div class="col-twelve">

			<div class="timeline-wrap">

			<?php 
					$sql = "SELECT * FROM education WHERE user = 'michael'";
					$result = mysqli_query($con, $sql);
					if(mysqli_num_rows($result) > 0){
						while($rowEdu2 = mysqli_fetch_assoc($result)){
							?>
							<div class="timeline-block">

							<div class="timeline-ico">
								<i class="fa fa-graduation-cap"></i>
							</div>

							<div class="timeline-header">
								<h3><?php echo $rowEdu2['label'] ?></h3>
								<p><?php echo $rowEdu2['start'] ?> - <?php echo ($rowEdu2['end'] == 0)? 'Sekarang':$rowEdu2['end'] ?></p>
							</div>

							<div class="timeline-content">
								<h4><?php echo $rowEdu2['title'] ?></h4>
								<p><?php echo $rowEdu2['info'] ?></p>
							</div>

							</div> <!-- /timeline-block -->
							<?php
						}
					}
					?>

			</div> <!-- /timeline-wrap -->   			

		</div> <!-- /col-twelve -->
		
	</div> <!-- /resume-timeline -->
<hr>
	<div class="row resume-timeline">
		<h2 style="text-align:center"><?php echo $rowBio3['fullname'] ?></h2>
		<div class="col-twelve resume-header">

			<h2>Work Experience</h2>

		</div> <!-- /resume-header -->

		<div class="col-twelve">

			<div class="timeline-wrap">

			<?php 
					$sql = "SELECT * FROM experiences WHERE user = 'philip'";
					$result = mysqli_query($con, $sql);
					if(mysqli_num_rows($result) > 0){
						while($rowEx3 = mysqli_fetch_assoc($result)){
							?>
							<div class="timeline-block">

							<div class="timeline-ico">
								<i class="fa fa-briefcase"></i>
							</div>

							<div class="timeline-header">
								<h3><?php echo $rowEx3['label'] ?></h3>
								<p><?php echo $rowEx3['start'] ?> - <?php echo ($rowEx3['end'] == 0)? 'Sekarang':$rowEx3['end'] ?></p>
							</div>

							<div class="timeline-content">
								<h4><?php echo $rowEx3['title'] ?></h4>
								<p><?php echo $rowEx3['info'] ?></p>
							</div>

							</div> <!-- /timeline-block -->
							<?php
						}
					}
					?>

			</div> <!-- /timeline-wrap -->   			

		</div> <!-- /col-twelve -->
		
	</div> <!-- /resume-timeline -->
	
	<div class="row resume-timeline">

		<div class="col-twelve resume-header">

			<h2>Education</h2>

		</div> <!-- /resume-header -->

		<div class="col-twelve">

			<div class="timeline-wrap">

			<?php 
					$sql = "SELECT * FROM education WHERE user = 'david'";
					$result = mysqli_query($con, $sql);
					if(mysqli_num_rows($result) > 0){
						while($rowEdu3 = mysqli_fetch_assoc($result)){
							?>
							<div class="timeline-block">

							<div class="timeline-ico">
								<i class="fa fa-graduation-cap"></i>
							</div>

							<div class="timeline-header">
								<h3><?php echo $rowEdu3['label'] ?></h3>
								<p><?php echo $rowEdu3['start'] ?> - <?php echo ($rowEdu3['end'] == 0)? 'Sekarang':$rowEdu3['end'] ?></p>
							</div>

							<div class="timeline-content">
								<h4><?php echo $rowEdu3['title'] ?></h4>
								<p><?php echo $rowEdu3['info'] ?></p>
							</div>

							</div> <!-- /timeline-block -->
							<?php
						}
					}
					?>

			</div> <!-- /timeline-wrap -->   			

		</div> <!-- /col-twelve -->
		
	</div> <!-- /resume-timeline -->

	</section> <!-- /features -->


	<!-- Portfolio Section
   ================================================== -->
	<section id="portfolio">

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Galleries</h5>
   			<h1>Check Out Some of Our Works.</h1>

   			<p class="lead"><?php echo $rowWeb['galleriesInfo'] ?></p>

   		</div>   		
   	</div> <!-- /section-intro--> 

   	<div class="row portfolio-content">

   		<div class="col-twelve">

   			<!-- portfolio-wrapper -->
	         <div id="folio-wrapper" class="block-1-2 block-mob-full stack">

			 <?php 
					$sql = "SELECT * FROM galleries ";
					$result = mysqli_query($con, $sql);
					if(mysqli_num_rows($result) > 0){
						while($rowGal = mysqli_fetch_assoc($result)){
							?>
							<div class="bgrid folio-item">
								<div class="item-wrap">
									<img src="<?php echo $rowGal['src'] ?>" alt="<?php echo $rowGal['label'] ?>">
									<a href="#<?php echo $rowGal['label'] ?>" class="overlay">	                  	           
										<div class="folio-item-table">
											<div class="folio-item-cell">
													<h3 class="folio-title"><?php echo $rowGal['label'] ?></h3>	     					    
														<span class="folio-types">
														<?php echo $rowGal['labelInfo'] ?>
													</span>
												</div>	                      	
										</div>                    
									</a>
								</div>	               
									</div> <!-- /folio-item -->
							<?php
						}
					}
					?>
				
	         
	            <!-- modal popups - begin
				============================================================= -->

				<?php 
					$sql = "SELECT * FROM galleries ";
					$result = mysqli_query($con, $sql);
					if(mysqli_num_rows($result) > 0){
						while($rowGal = mysqli_fetch_assoc($result)){
							?>
							<div id="<?php echo $rowGal['label'] ?>" class="popup-modal slider mfp-hide">	

								<div class="media">
									<img src="<?php echo $rowGal['src'] ?>" alt="<?php echo $rowGal['label'] ?>" />
								</div>      	

								<div class="description-box">
								<h4><?php echo $rowGal['label'] ?></h4>		      
								<p><?php echo $rowGal['info'] ?></p>

								<div class="categories"><?php echo $rowGal['labelInfo'] ?></div>			               
								</div>

								<div class="link-box">
								<a href="<?php echo $rowGal['link'] ?>">Details</a>
								<a href="#" class="popup-modal-dismiss">Close</a>
								</div>		      

								</div> <!-- /modal-01 -->
							<?php
						}
					}
					?>

				<?php 
					$sql = "SELECT * FROM galleriespopup ";
					$result = mysqli_query($con, $sql);
					if(mysqli_num_rows($result) > 0){
						while($rowPop = mysqli_fetch_assoc($result)){
							?>
							<div id="<?php echo $rowPop['label'] ?>" class="popup-modal slider mfp-hide">	

							<div class="media">
								<img src="<?php echo $rowPop['src'] ?>" alt="" />
							</div>      	

							<div class="description-box">
							<h4><?php echo $rowPop['label'] ?></h4>		      
							<p><?php echo $rowPop['info'] ?></p>

							<div class="categories"><?php echo $rowPop['categories'] ?></div>			               
							</div>

							<div class="link-box">
							<a href="<?php echo $rowPop['link'] ?>">Details</a>
							<a href="#" class="popup-modal-dismiss">Close</a>
							</div>		      

							</div> <!-- /modal-01 -->
							<?php
						}
					}
					?>

				   <!-- modal popups - end
	            ============================================================= -->

	         </div> <!-- /portfolio-wrapper --> 

   		</div>  <!-- /twelve -->   

   	</div> <!-- /portfolio-content --> 
		
	</section> <!-- /portfolio --> 

   <!-- contact
   ================================================== -->
	<section id="contact">

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Contact</h5>
   			<h1>Ingin mengontak kami?</h1>

   			<p class="lead"><?php echo $rowWeb['contactInfo'] ?></p>

   		</div> 
   	</div> <!-- /section-intro -->

   	<div class="row contact-form">


	   <?php 
        if(isset($_GET['msg']) == 1 ){
            echo '<script language="javascript">';
            echo 'alert("username atau password salah")';
            echo '</script>';
        }
    ?>

            <!-- form -->
            <form name="contactForm" id="contactForm" method="post" action="inc/sendEmail.php">
      			<fieldset>

                  <div class="form-field">
 						   <input name="contactName" type="text" id="contactName" placeholder="Name" value="" minlength="2" required="">
                  </div>
                  <div class="form-field">
	      			   <input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required="">
	               </div>
                  <div class="form-field">
	     				   <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="">
	               </div>                       
                  <div class="form-field">
	                 	<textarea name="contactMessage" id="contactMessage" placeholder="message" rows="10" cols="50" required=""></textarea>
	               </div>                      
                 <div class="form-field">
                     <button class="submitform">Submit</button>
                     <div id="submit-loader">
                        <div class="text-loader">Sending...</div>                             
       				      <div class="s-loader">
								  	<div class="bounce1"></div>
								  	<div class="bounce2"></div>
								  	<div class="bounce3"></div>
								</div>
							</div>
                  </div>

      			</fieldset>
      		</form> <!-- Form End -->

            <!-- contact-warning -->
            <div id="message-warning">         
				   	
            </div>            
            <!-- contact-success -->
      		<div id="message-success">
              <i class="fa fa-check"></i>Your message was sent, thank you!<br>   	
      		</div>

         </div> <!-- /col-twelve -->
   		
   	</div> <!-- /contact-form -->

   	<div class="row contact-info">

   		<div class="col-four tab-full">

   			<div class="icon">
   				<i class="icon-pin"></i>
   			</div>

   			<h5>Where to find us</h5>

   			<p>
			<?php echo $rowBio1['address'] ?> <br>
			<?php echo $rowBio2['address'] ?> <br>
			<?php echo $rowBio3['address'] ?>
	        </p>

   		</div>

   		<div class="col-four tab-full collapse">

   			<div class="icon">
   				<i class="icon-mail"></i>
   			</div>

   			<h5>Email Us At</h5>

   			<p>
			   <?php echo $rowBio1['email'] ?> <br>
			   <?php echo $rowBio2['email'] ?> <br>
			   <?php echo $rowBio3['email'] ?> <br>
			</p>

   		</div>

   		<div class="col-four tab-full">

   			<div class="icon">
   				<i class="icon-phone"></i>
   			</div>

   			<h5>Call Us At</h5>

   			<p>
				David: <?php echo $rowBio1['phone']?> <br>
				Michael: <?php echo $rowBio2['phone']?> <br>
				Philip: <?php echo $rowBio3['phone']?> <br>
			   </p>

   		</div>
   		
   	</div> <!-- /contact-info -->
		
	</section> <!-- /contact -->


   <!-- footer
   ================================================== -->

   <footer>
     	<div class="row">

     		<div class="col-six tab-full pull-right social">

     			<ul class="footer-social">        
				<?php
					$sql = "SELECT * FROM socialmedia";
					$result = mysqli_query($con, $sql);
					while($rowSoc = mysqli_fetch_assoc($result)){
				?>
			 		<li><a href="<?php echo $rowSoc['link'] ?>"><i class="<?php echo $rowSoc['icon'] ?>"></i></a></li>
				<?php
					}
				?>
			   </ul> 
	      		
	      </div>

      	<div class="col-six tab-full">
	      	<div class="copyright">
		        	<span><?php echo $rowWeb['copyright'] ?></span> 
		        	<span><?php echo $rowWeb['byy'] ?></a></span>	         	
		         </div>		                  
	      	</div>

	      	<div id="go-top">
		         <a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-long-arrow-up"></i></a>
		      </div>

      	</div> <!-- /row -->     	
   </footer>  

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>

</body>

</html>