<?php

if (isset($_POST['submit'])) {

$userName = $_POST['name'];
$userEmail = $_POST['email'];
$projectBudget = $_POST['project-budget'];
$messageInput = $_POST['message-input'];

$subject = "Form Submission - Hire Us";
$mailTo = "info@daviesdigitaldesign.com";
$headers = "From: ".$userEmail;
$txt = "";

$txt .= "You have recieved an email from ".$userName. "\r\n" ;
$txt .= "Their project budget is ".$projectBudget. "\r\n";
$txt .= "Message: \r\n \r\n".$messageInput;

mail( $mailTo, $subject, $txt, $headers );
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
    <title>Hire Us | Davies Digital Design</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" 
      type="image/svg" 
      href="Images/Logo Blue.svg">
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            
        <a class="navbar-brand" href="https://daviesdigitaldesign.com/home"> <img class="logo-full__blue" src="Images/Full logo blue.svg" ></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z" style="fill: #0056ff;"/></svg>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                    
                    <li class="nav-item">
                        <a class="nav-link" href="https://daviesdigitaldesign.com/about">About</a>
                    </li>
            
                    <li class="nav-item">
                        <a class="nav-link" href="https://daviesdigitaldesign.com/portfolio">Portfolio</a>
                    </li>
            
                    <li class="nav-item">
                        <a class="nav-link" href="https://daviesdigitaldesign.com/hire-us">Hire Us</a>
                    </li>
            
                    <li class="nav-item">
                        <a class="nav-link" href="https://daviesdigitaldesign.com/home#Contact-us">Contact</a>
                    </li>

                    </ul>
            </div>
        </div>
    </div>
</nav>

    <div class="lets-work">
        <div class="wrapper">
             <div class="row">
                <div class="column-left">
                    <div class="Lets-work-title">
                        <H1>Let's Work Together.</H1>
                        <h2>Feel free to fill the form out and introduce yourself and your project.</h2>
                    </div>
                </div>

                <div class="column-right">
                <div class="form-block">
                    <form id="contactform" action="hire-us.php" method="POST">
                        
                        <label for="name" class="field-label-4">Full Name*</label>
                            <input type="text" class="hire-text-field w-input" maxlength="256" name="name" data-name="Name" placeholder="What should we call you" id="name" required="">
        
                        <label for="email" class="field-label-4">Email Address*</label>
                            <input type="email" class="hire-text-field w-input" maxlength="256" name="email" data-name="Email" placeholder="So we can contact you" id="email" required="">
        
                       <label for="project-budget" class="field-label-4">Project Budget*</label>
                          <input type="text" class="hire-text-field w-input" maxlength="256" name="project-budget" data-name="Field" placeholder="Enter an approximation if you're not decided yet" id="field" required="">
        
                        <label class="field-label-4">Brief Project Description*</label>
                            <textarea placeholder="Write away" maxlength="5000" id="message-input" name="message-input" required="" class="text-area-form w-input"></textarea>

                        <input type="submit" value="Submit" name= "submit" data-wait="Please wait..." class="submit-button w-button">  
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="wrapper">
            <div class="footer-content">
                <footer>
                    <a href="https://daviesdigitaldesign.com/home"><img class="logo__blue" src="/Images/Logo Blue.svg" alt="logo__blue"></a>
                    <ul>
                        <li> <a href="tel:+353 86 323 2181">+353 86 323 2181</a> </li>
                        <li> <a href="mailto:info@daviesdigitaldesign.com">info@daviesdigitaldesign.com</a> </li>
                    </footer>
            </div>
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js" integrity="sha384-aeOf8PUQ30Impyyio8FDxFHefK/3nHBJWjuT1u1FnJHZU+ro9q9E9cXUzfWBk0kT" crossorigin="anonymous"></script>
<script>
    var tl3= gsap.timeline({defaults:{duration: 1.2,ease: "power3.out"}});

    tl3.from(".Lets-work-title", {delay: .5, opacity: 0, x: -40, stagger: .3})
    
        
      
      
</script>

</body>
</html>
