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
                    <li class="nav-item"><a class="nav-link" href="project.php">PROJECTS</a></li>
                    <li class="nav-item active"><a class="nav-link" href="contact.php">CONTACT ME</a></li>  
                </ul>

                </div>
            </nav>
        </header>

        <article>
          <h1 class="heading">Contact Me</h1>
          <div id="contact-para">
            <p>What is your request? Please Send a brief or detailed Description of your Project and I will get in touch with you
            as soon as possible. Wait for 1-2 days.</p>
          </div>
          <form class="contact-form">
            <div class="row">
            <div class="form-group col">
              <label for="firstname">First Name</label>
              <input type="text" class="form-control" id="firstname" aria-describedby="firstName" placeholder="e.g. John">
            </div>
            <div class="form-group col">
              <label for="lastname">Last Name</label>
              <input type="text" class="form-control" id="lastname" aria-describedby="lastName" placeholder="e.g. Snow">
            </div>
            </div>
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" class="form-control" id="email" aria-describedby="emailAddress" placeholder="email@address.com">
            </div>
            <fieldset>
              Message is about?
              <div class="form-check">
                <input type="radio"  id="newproject" aria-describedby="HaveNewProject">
                <label for="newproject">Have a new project</label>
              </div>
              <div class="form-check">
                <input type="radio"  id="previousproject" aria-describedby="problemWithPreviousProject">
                <label for="previousproject">Have a Problem With previous Work.</label>
              </div>
            </fieldset>

            <div class="form group">
              <label for="message">Write a Message</label>
              <textarea type="text" class="form-control" id="message" rows="5" placeholder="Details here..."></textarea>
            </div><br>
            <div class="button">
              <button type="submit" class="btn btn-primary"><span class="fas fa-paper-plane"></span> Send Message</button>
            </div>

          </form>
            
        </article>


        



<?php include('includes/foot.php') ?>