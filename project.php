<?php 

include('includes/head.php');

?>
    <div id="page-wrapper">
        <header style="background-color : #2d48ec;" >
            <nav  class="navbar navbar-expand-md">
              <a class="navbar-brand" href="index.php"><img src="utkarsh-logo.png" id="logo" class="img-fluid" alt="Logo"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fas fa-bars"></span>
              </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                    
                    <li class="nav-item"><a class="nav-link" href="about.php">ABOUT</a></li>
                    <li class="nav-item"><a class="nav-link" href="skills.php">MY SKILLS</a></li>
                    <li class="nav-item active"><a class="nav-link" href="project.php">PROJECTS</a></li>
                    <li class="nav-item "><a class="nav-link" href="contact.php">CONTACT ME</a></li>  
                </ul>

                </div>
            </nav>
        </header>

        <article>
           <h1 class="heading">My Works</h1>

           <div class="work-album">
                <h3 class="alert alert-light"> No Client works yet.</h3>
           </div> <br>
           <div id="contact-me">
          <h3 style="color:gray">Have a Project? Contact Me :</h3>
          <a role="button" href="contact.php" class="btn btn-info"><span class="fas fa-envelope"></span> Contact Me</a>
        </div>
        
        </article>
<?php include('includes/foot.php') ?>