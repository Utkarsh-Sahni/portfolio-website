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
                    <li class="nav-item active"><a class="nav-link" href="skills.php">MY SKILLS</a></li>
                    <li class="nav-item"><a class="nav-link" href="project.php">PROJECTS</a></li>
                    <li class="nav-item "><a class="nav-link" href="contact.php">CONTACT ME</a></li>  
                </ul>

                </div>
            </nav>
        </header>

        <article>
            <h1 class="heading">My Skills</h1>
            <div class="skill">
              <h3>Web Designing</h3>
              <p>PhotoShop 2020  &nbsp;&nbsp;&nbsp;(Beginner Level)</p>
              
              <h3>Front-end Development</h3>
              <p>
              HTML , HTML5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Intermidiate Level)<br>
              CSS  , CSS3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Intermidiate Level)<br>
              JS(JavaScript)&nbsp;&nbsp;&nbsp;&nbsp;(Intermidiate Level)<br>
              BootStrap &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (Intermidiate Level)<br>
              jQuery, jQueryUI&nbsp; (Intermidiate Level)<br>
              </p>
              
              <h3>Back-end Development</h3>
              <p>
              JavaScript   &nbsp;(Intermidiate Level)<br>
              PHP &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Beginner Level)<br>
              MySQL  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Beginner Level)
              </p>
            </div>
            <div class="skill-photo">
              <div class="design">          
                <img class="img-fluid" src="images/Skills/PS-logo.png">
              </div><br>
              <div class="front-end">
                <img class="frontend img-fluid" src="images/Skills/frontend-logo.png">
              </div>
              <br> <br>
              <div class="back-end">
                <img class="img-fluid" src="images/Skills/PHP-logo.png">
                <img class="img-fluid" src="images/Skills/MySQL-logo.png">
              </div>
            </div>
            <div class="clear-both">&nbsp;</div>
        </article>


        



<?php include('includes/foot.php') ?>