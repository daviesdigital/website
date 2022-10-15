<?php

if (isset($_POST['submit'])) {

$userName = $_POST['name'];
$userEmail = $_POST['email'];
$userPhone = $_POST['phone-number'];
$messageInput = $_POST['message-input'];

$subject = "Form Submission - Contact Us";
$mailTo = "info@daviesdigitaldesign.com";
$headers = "From: ".$userEmail;
$txt = "";

$txt .= "You have recieved an email from ".$userName. "\r\n" ;
$txt .= "Message: \r\n \r\n".$messageInput;


mail( $mailTo, $subject, $txt, $headers );
header ( "Location: index.php#Contact-us ");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
    <title>Home | Davies Digital Design</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" 
      type="image/svg" 
      href="Images/Logo Blue.svg">
</head>
<body style="overflow-x: hidden;"> 

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
                            <a class="nav-link" href="#Contact-us">Contact</a>
                        </li>

                        </ul>
                </div>
            </div>
        </div>
</nav>

<div class="hero-section">
    <div class="wrapper">
        <div class="row">
            <div class="column">
                <div class="hero-content">
                    <h1>Welcome to Davies Digital Design.</h1>
                    <h2>We specialize in branding and web design services to furnish your company with a cohesive brand you can be proud to stand behind.</h2>
                    <div class="button-wrapper">
                        <a href="https://daviesdigitaldesign.com/hire-us">Work with us</a>
                    </div>

                    <div class="button-wrapper-alt">
                        <a href="https://daviesdigitaldesign.com/portfolio">Explore our portfolio</a>
                    </div>
                </div>
            </div>
    
            <div class="column">
                
                <div class="three-screens">
                    <img src="/Images/Web-design-top.svg" alt="" class="hero-img-top">
                    <img src="/Images/Web-design-mid.svg" alt="" class="hero-img-mid">
                    <img src="/Images/Web-design-bottom.png" alt="" class="hero-img-bottom">
                </div>

            </div>
        </div>
    </div>  
</div>   

<div class="service-preview">
            <div class="row">
                <div class="col" style="background-color: #0056ff;">
                    <div class="service-preview-left">
                        <h1>Branding Solutions.</h1>
                        <h3>From business cards to billboards, your brand has to be able to represent you and your company’s message to new and existing clients. We provide comprehensive branding solutions to furnish your company with everything you could need from a subtle touch up to completely new look. </h3>
                        <!-- <div class="service-preview-button">
                                <a href="#">
                                <p>See more</p>
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAABmJLR0QA/wD/AP+gvaeTAAACqElEQVR4nO3cu69lUxwH8N+aMfGIoBAUCiEknkEjNHQqlegkIhkVtUrn2QgSf4CplLgh4pFMQkg0REQhGoVIJB6ZxMwlZuajOLmTi2usmzh7HXt/P905xd7fc745+5yz9lqrKiIiIiIiIiIiIiIiIiIiIiIiIiICB6Y4zyQn+b/CrXgH21W1jTdx/ehci4Rb8Iu/+xm3j863OHh7jzJ2fI/rRmdcFPx6lkLgG1w5Oudi4MS/FAJf4tLRWRcBr3UUAp/gwtF5Zw/X4FhnKe/j3NGZZw934nhnKa/jnNGZZw/34ffOUo6gjc48e3gQpzpLeWl03kXAo52FwOOj8y4Cnuws5DQeGZ13EfBCZykn8cDovLOHA3i1s5TfcO/ozLOHQ3irs5TjuGt05tnD+figs5QfcMPozLOHi/FpZynf4qrRmWcPl+GrzlK+xhWjM88ersZ3naV8jktGZ5493IQfO0v5CBfsdZz2l4PeWFXPVtXdVXXRBK9jybaq6v7W2sndT54pBDdX1cdVlbH96Rypqodba3ae2D3r5PlKGVN7qFbv+xmtqgoHq2q7qg4NCBVVT7TWnq7KvKxN8edLVmvtVFUdHRZn2V5urT2z8yBf6mP985d6a+2LqrqjVj/Hjk2fbXG2qurw7jLiP7TPP4ZHcd7ozLOVoZMNYv+Di5ePzjxbVsPvn3WWkeH3dbK6QfVhZxm5QbVOcgt3c8gkh82CFzvLyDSgdcNTnWWcxuHReWcNj3WWQaaSrpf9TbZ+bnTeWbO/5QivyHKE9cE92O4sIwt21gnXypK2zYGtzjKy6HPd0DovVVkWPQUclI0DNgvePUsZ2VpjarjN3kuif5LNZ8aw2p7pPav/ISfwRj4ZG8JEG5hFREREREREREREREREREREREREzNofAUQvBCmmogcAAAAASUVORK5CYII=">
                                </a>
                        </div> -->
                    </div>
                </div>
                <div class="col" style="background-color: #000000; margin: 0;"> 
                    <div class="service-preview-right">
                        <h1>Website design.</h1>
                        <h3>
                            Whether your clients are around the corner or across the globe, a website will be one of the main ways they interact with your business. We provide ground up, bespoke websites for brand which work across all platforms ensuring that no matter where your potential clients are or how they find you, they will see the best side of your business.
                        </h3>
                       <!-- <div class="service-preview-button">
                            <a href="#">
                            <p>See more</p>
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAABmJLR0QA/wD/AP+gvaeTAAACqElEQVR4nO3cu69lUxwH8N+aMfGIoBAUCiEknkEjNHQqlegkIhkVtUrn2QgSf4CplLgh4pFMQkg0REQhGoVIJB6ZxMwlZuajOLmTi2usmzh7HXt/P905xd7fc745+5yz9lqrKiIiIiIiIiIiIiIiIiIiIiIiIiICB6Y4zyQn+b/CrXgH21W1jTdx/ehci4Rb8Iu/+xm3j863OHh7jzJ2fI/rRmdcFPx6lkLgG1w5Oudi4MS/FAJf4tLRWRcBr3UUAp/gwtF5Zw/X4FhnKe/j3NGZZw934nhnKa/jnNGZZw/34ffOUo6gjc48e3gQpzpLeWl03kXAo52FwOOj8y4Cnuws5DQeGZ13EfBCZykn8cDovLOHA3i1s5TfcO/ozLOHQ3irs5TjuGt05tnD+figs5QfcMPozLOHi/FpZynf4qrRmWcPl+GrzlK+xhWjM88ersZ3naV8jktGZ5493IQfO0v5CBfsdZz2l4PeWFXPVtXdVXXRBK9jybaq6v7W2sndT54pBDdX1cdVlbH96Rypqodba3ae2D3r5PlKGVN7qFbv+xmtqgoHq2q7qg4NCBVVT7TWnq7KvKxN8edLVmvtVFUdHRZn2V5urT2z8yBf6mP985d6a+2LqrqjVj/Hjk2fbXG2qurw7jLiP7TPP4ZHcd7ozLOVoZMNYv+Di5ePzjxbVsPvn3WWkeH3dbK6QfVhZxm5QbVOcgt3c8gkh82CFzvLyDSgdcNTnWWcxuHReWcNj3WWQaaSrpf9TbZ+bnTeWbO/5QivyHKE9cE92O4sIwt21gnXypK2zYGtzjKy6HPd0DovVVkWPQUclI0DNgvePUsZ2VpjarjN3kuif5LNZ8aw2p7pPav/ISfwRj4ZG8JEG5hFREREREREREREREREREREREREzNofAUQvBCmmogcAAAAASUVORK5CYII=">
                            </a>
                    </div> -->

                    </div>
                </div>
            </div>
</div>

<div class="Checkusout">
    <div class="wrapper">
        <div class="Checkusout-content">
            <h1>Check out our work.</h1>
            <div class="button-wrapper">
                <a href="https://daviesdigitaldesign.com/portfolio">Explore our portfolio</a>
            </div>
        </div>
    </div>
</div>

<div class="testimonials" style="position: relative; display: block;">
    <div class="wrapper" style="padding: 0;">
        <!-- <H1 style="margin-bottom: 1em;">What Our Clients Say...</H1> -->

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width: 100%;">
            <ol class="carousel-indicators" style="margin-bottom: -1em;"> 
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <h2>"We wouldn't hesitate to recommend them"</h2>
                <img src="/Images/Irish Sailing logo.png" alt="" style="max-height: 5vh; margin: 1em 0;">
                <h3>Irish Sailing</h3> 
              </div>

              <div class="carousel-item">
                <h2>"We were nothing but satisfied with their professionalism and the final designs."</h2>
                <img src="/Images/Portfolio/Alex Con Logo No Words.svg" alt="" style="max-height: 5vh; margin: 1em 0;">
                <h3>Alex Connolly Photography </h3> 
              </div>
              
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>

    </div>   
</div>


<div class="contactus">
    <a name="Contact-us"></a>
    <div class="wrapper">
        <div class="contact-title">
            <H1>Contact</H1>
            <ul>
                <li> <a href="tel:+353 86 323 2181">+353 86 061 2185</a> </li>
                <li> <a href="mailto:ibi@isabellabiletta.com ">ibi@isabellabiletta.com</a> </li>
            </ul>
        </div>

        <div class="form-block">
            <form id="contactform" action="index.php" method="POST">
                <input name="_redirect" type="hidden" id="name" value="#">
                
                <label for="name" class="field-label-4">Name*</label>
                    <input type="text" maxlength="256" name="name" data-name="Name" placeholder="What should we call you" id="name" required="">

                <label for="email" class="field-label-4">Email Address*</label>
                    <input type="email"  maxlength="256" name="email" data-name="Email" placeholder="So we can contact you" id="email" required="">

                <label for="phone" class="field-label-4">Phone Number</label>
                    <input type="tel"  maxlength="256" name="phone-number" data-name="Field" placeholder="Enter your number here" id="field">

                <label class="field-label-4">Shoot Us A Message*</label>
                    <textarea maxlength="5000" id="message-input" name="message-input" placeholder="Write away..."  required=""></textarea>
                    
                <input name="_formsubmit_id" type="text" style="display:none">
                
                <input type="submit" name="submit" value="Submit" data-wait="Please wait..." class="submit-button w-button">
            </form>
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
                </ul>
            </footer>
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js" integrity="sha384-aeOf8PUQ30Impyyio8FDxFHefK/3nHBJWjuT1u1FnJHZU+ro9q9E9cXUzfWBk0kT" crossorigin="anonymous"></script>
<script>
    var tl =  gsap.timeline({defaults:{duration: .8, ease: "power4.out", opacity: 0}});
    var tl3= gsap.timeline({defaults:{duration: 1}});

    tl.from(".hero-img-bottom", {delay: 0.5, scale: .2, transformOrigin: 'bottom'})
    .from(".hero-img-mid", { delay: 0.5,scale: .2, transformOrigin: 'center'}, "-=.9")
    .from(".hero-img-top", { delay: 0.5, scale: .2, transformOrigin: 'top'}, "-=.9" )

    tl3.from(".hero-content", {opacity: 0, x: -40, stagger: .1})
        .from(".hero-content.button-wrapper", {opacity: 0, x: -40, stagger: .2})
        .from(".hero-content.button-wrapper-alt", {opacity: 0, x: -40,}, "-=.9")
      
      
</script>

</body>
</html>
