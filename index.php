     <?php 
     
     include('includes/head.php'); 

     ?>
    <div id="page-wrapper">
       <div id="background">
        <header>
            <nav class="navbar navbar-expand-md">
              <a class="navbar-brand" href="index.php"><img src="utkarsh-logo.png" id="logo" class="img-fluid" alt="Logo"></a>
              <a class="navbar-toggler" type="a" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fas fa-bars"></span>
              </a>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="about.php">ABOUT</a></li>
                    <li class="nav-item"><a class="nav-link" href="skills.php">MY SKILLS</a></li>
                    <li class="nav-item"><a class="nav-link" href="project.php">PROJECTS</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">CONTACT ME</a></li>
                  </ul>

                </div>
            </nav>
        </header>
        <main>
            <div class="container-fluid" id="content">
             
             <h1>Hey, I am Utkarsh.</h1>

             <h3>A Web Designer and a Front-end Web Developer.<br>I create custom responsive websites.</h3><br>
        
             <h2>This is my Portfolio.</h2>
            
            </div>  <!--closing of content div-->

            <div id="illustration">
            
                <img class="img-fluid" src="images/hero-image.png" alt="Web Designer and Developer Illustraion">
            
            </div> <!--closing of illustration-->
             
        </main>
        <div id="contact-me">
          <h3>Have a Project? Contact Me :</h3>
          <a role="button" href="contact.php" class="btn btn-info"><span class="fas fa-envelope"></span> Contact Me</a>
        </div>
       </div>  <!--background div closing-->
        
     <hr>
        <section>

            <h1 id="heading">Featured Projects</h1>

            <div id="projectCarousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active" id="first">
                  <div id="bg-1"></div>
                  <a href=""><img id="img-1" class="img-thumbnail img-fluid" src="images/carousel/proj-1.png"  alt="..."></a>
                    <div  class="container-fluid content">
                    <h2>Hipstrify.io</h2>
                    <h5>A Startup Site for Everyone.</h5><br>

                    <a role="button" href="" class="btn btn-success"><span class="fas fa-eye"></span> View Project</a>&nbsp;
                    <a role="button" href="" class="btn btn-info"><span class="fas fa-info-circle"></span> More Info </a>
                
                  </div>
                </div>
                <div class="carousel-item" id="second">
                  <div id="bg-2"></div>
                  <a href=""><img id="img-2"  class="img-thumbnail img-fluid" src="images/carousel/proj-2.png" alt="..."></a>
                  <div  class="container-fluid content">
                    <h2>Dr. Norman Borlaug</h2>
                    <h5>A Tribute page in his honour.</h5><br>

                    <a role="button" href="" class="btn btn-success"><span class="fas fa-eye"></span> View Project</a>&nbsp;
                    <a role="button" href="" class="btn btn-info"><span class="fas fa-info-circle"></span> More Info </a>
                
                  </div>
                </div>
                <div class="carousel-item" id="third">
                  <div id="bg-3"></div>
                  <a><img id="img-3"  class="img-thumbnail img-fluid" src="images/carousel/proj-3.png"  alt="..."></a>
                  <div  class="container-fluid content">
                    <h2>JavaScript Documentation</h2>
                    <h5>An Encyclopedia for Javascript.</h5><br>

                    <a role="button" href="" class="btn btn-success"><span class="fas fa-eye"></span> View Project</a>&nbsp;
                    <a role="button" href="" class="btn btn-info"><span class="fas fa-info-circle"></span> More Info </a>
                
                  </div>
                </div>
                <a class="carousel-control-prev" href="#projectCarousel" role="a" data-slide="prev">
                  <span class="fas fa-chevron-left fa-lg" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#projectCarousel" role="a" data-slide="next">
                  <span class="fas fa-chevron-right fa-lg" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </section>
        <br><br>

        <hr>

<?php include('includes/foot.php'); ?>