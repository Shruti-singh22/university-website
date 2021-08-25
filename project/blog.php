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
</head>
<body>
    <section class="sub-header">
        <nav>
            <a href="index.php"><img src="./images/logo.png" width="10%" alt="Logo"></a>
            <div class="nav-links" id="nav-links">
                <i class="fa fa-times" onclick="hideMenu()" aria-hidden="true"></i>
                <ul>
                    <li><a href="index.php">HOME</a> </li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="course.php">COURSE</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                    <li><a href="Contact.php">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()" aria-hidden="true"></i>
        </nav>
        <h1>Our certificate and <br>online programs for 2021  </h1>
    
    </section>
    <!--------blog page content------->
    <section class="blog-content">
        <div class="row">
            <div class="blog-left">
            <img src="images/certificate.jpg">
            <h2>our certificate and online courses for 2021</h2>
            <p>
                <br>
                Choose from 1550 online video courses with new additions published every month<br>
                Online learning is one of the imminent trends in the education sector around the globe. This mode of learning <br>
                is done through the internet. With advanced and upgraded technologies, this mode of learning has been made simpler.<br>
                 Online Education is also preferred in higher learning Institutions.
                  <br>This article will render the students about online education, its outcomes, and advantage in short and long essays on Online Education.
                Whether you work in machine learning or finance, or are pursuing a career in web development or data science,
                <br> Python is one of the most important skills you can learn. Python's simple syntax is especially suited for desktop.
                We provide children and students with essay samples on a long essay of 500 words and a short essay of 150 words <br>
                on the topic “Online education” for reference.
                Education is an integral part of people’s lives; it will either make them or break them in the prospect depending<br>
                 on their careers. Education is broadly diverse today compared to the 1950s because of progressions in teaching<br>
                  methods and other prominent inventions that implement more apparent teaching techniques.
            </p>
            <div class="comment-box">
                <h3>
                    leave a comment
                </h3>
                <form class="comment-form"action="post.php" method="POST">
                    <input type="text" placeholder="enter name"name="name">
                    <input type="email" placeholder="enter email"name="email">
                    <textarea rows="5" placeholder="your comment"name="comment"></textarea>
                    <input type="submit"name="submit"value="post comment">


                </form>
            </div>
            </div>
            <div class="blog-right">
                <h3>post categories</h3>
                <div>
                    <span>business analytics </span>
                    <span>21</span>

                </div>
                <div>
                    <span>business data science </span>
                    <span>28</span>
                    
                </div>
                <div>
                    <span>machine learning </span>
                    <span>15</span>
                    
                </div>
                <div>
                    <span>computer science</span>
                    <span>34</span>
                    
                </div>
                <div>
                    <span>autoCad </span>
                    <span>42</span>
                    
                </div>
                <div>
                    <span>journalism </span>
                    <span>22</span>
                    
                </div>
                <div>
                    <span>commerce</span>
                    <span>30</span>
                    
                </div>
                <div>
                    <span>internet of things</span>
                    <span>30</span>
                    
                </div>
                <div>
                    <span>cloud computing</span>
                    <span>10</span>
                    
                </div>
            </div>

            
        </div>

    </section>
   
   
 <!----footer---->
 <section class="footer">
     <h4>About Us</h4>
     <p>Mission, Vision, & History
At Harvard College, we have been shaping the future for nearly 400 years. 
We are committed to helping students undergo an intellectual, social, and personal transformation far beyond the traditional college experience.</p>
     <div class="icons">
         <i class="fab fa-facebook"></i>
         <i class="fab fa-instagran"></i>
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
