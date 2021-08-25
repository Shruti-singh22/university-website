 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
<link rel="icon" href="./images/logo.png">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <link href="style.css" rel="stylesheet">
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <section class="sub-headerr">
        <nav>
            <a href="./index.php"><img src="./images/logo.png" width="10%" alt="Logo"></a>
            <div class="nav-links" id="nav-links">
                <i class="fa fa-times" onclick="hideMenu()" aria-hidden="true"></i>
                <ul>
                    <li><a href="./index.php">HOME</a> </li>
                    <li><a href="./about.php">ABOUT</a></li>
                    <li><a href="./course.php">COURSE</a></li>
                    <li><a href="./blog.php">BLOG</a></li>
                    <li><a href="./Contact.php">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()" aria-hidden="true"></i>
        </nav>
        <h1>Contact us</h1>
    
    </section>
   <!-------contact us------->
   <section class="location">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2947.3822475406296!2d-71.11884878458211!3d42.377002879185696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e377427d7f0199%3A0x5937c65cee2427f0!2sHarvard%20University!5e0!3m2!1sen!2sin!4v1624553021656!5m2!1sen!2sin" 
    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
   </section>
   <section class="contact-us">
   <div class="row">
       
    <div class= "contact-col">
       <div>
        <i class="fa fa-home"></i>
        <span>
            <h5>
            117 Washington Street, Boston: Crosby, Nichols, Lee and Co.
            </h5>
            <p>California</p>
        </span>
    </div>
    <div>
        <i class="fa fa-phone"></i>
        <span>
            <h5>
                9608978890
            </h5>
            <p>monday to saturday 10 am to 6pm</p>
        </span>
    </div>
    <div>
        <i class="fa fa-envelope"></i>
        <span>
            <h5>
                infor@harvard@gmail.com
            </h5>
            <p>email us your queries</p>
        </span>
    </div>

    
    </div>
    
    <div class= "contact-col">
       <!---- <form action ="">
            <input type="text" placeholder="Enter your name" required>
            <input type="email" placeholder="Enter email" required>
            <input type="text" placeholder="Enter your subject" required>
            <textarea rows="8" placeholder="message" required></textarea>
            <button type="submit">Send message</button>

        </form>---->
        <form id="frmContactus" method="POST">
                <input type="text" placeholder="Enter your Name" name="name" id="name" required>
                <input type="email" name="email" placeholder="Enter your Email id" id="email" required>
                <input type="number" name="mobile" placeholder="Enter your phone" id="mobile" required>
                <textarea rows="8" name="comment" placeholder="Comment" id="comment" ></textarea>
                <button type="submit" name="submit" id="submit">SUBMIT</button>
                <span style="color:green;" id="msg"></span>

            </form>
           <script> jQuery('#frmContactus').on('submit',function(e){
        jQuery('#msg').html('');
        jQuery('#submit').html('Please wait');
        jQuery('#submit').attr('disabled',true);
        jQuery.ajax({
            url:'submit.php',
            type:'post',
            data:jQuery('#frmContactus').serialize(),
            success:function(result){
                jQuery('#msg').html(result);
                jQuery('#submit').html('Submit');
                jQuery('#submit').attr('disabled',false);
                jQuery('#frmContactus')[0].reset();
            }
        });
        e.preventDefault();
      });
      </script>




    </div>
</div>

   </section>
   
   
 <!----footer---->
 <section class="footer">
     <h4>About Us</h4>
     <p></p>Mission, Vision, & History
At Harvard College, we have been shaping the future for nearly 400 years. 
We are committed to helping students undergo an intellectual, social, and personal transformation far beyond the traditional college experience.
     <div class="icons">
         <i class="fab fa-facebook"></i>
         <i class="fab fa-instagram"></i>
         <i class="fab fa-twitter"></i>
         <i class="fab fa-linkedin"></i>

     </div>
 </section>



    <!----javascript for toggle menu---->
    <script>
        var navLinks= document.getElementById("navLinks");
        function showMenu(){
            navLinks.style.right="0";
        }
        function hideMenu(){
            navLinks.style.right="-200px";
        }
    </script>
</body>
</html>
