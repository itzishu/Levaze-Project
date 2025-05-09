<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vlogging WEbsites</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="shortcut icon" href="https://media.istockphoto.com/id/1356364230/photo/young-japanese-man-in-working-on-desktop-computer-diverse-multi-ethnic-team-of-programmers.webp?b=1&s=612x612&w=0&k=20&c=VVis7LK9xdXBgUVrO8kqHf9MPg6Kesk31pRZSVVOM88=" type="image/x-icon">
</head>

<body>
    <a name="top"></a>
    <nav>
        <div class="nav-img">
            <h1>LEVAZE</h1>
        </div>
        <div class="nav-search">
            <input type="text" id="search-input" placeholder="Search Products" onkeyup="search()">
            <!-- <a href=""><i id="icon" class="fa-solid fa-magnifying-glass"></i></a> -->

        </div>

        <div class="nav-element">
            <h5><a href="\project1\index.php">Home</a></h5>
            <h5><a href="#contact">About</a></h5>
            <h5><a href="#contact">Contact</a></h5>
            <h5><a href="\project1\signup.html">Sign up</a></h5>
            <h5><a href="\project1\signin.html">Sign in</a></h5>
        </div>

    </nav>
    <div class="mini-nav">
        <h5><a href="">Tranding</a></h5>
        <h5><a href="\project1\new.html">New</a></h5>
        <h5><a href="\project1\old.html">Old</a></h5>
        <h5><a href="">Hot <i class="fa-solid fa-fire"></i></a></li>
            <h5><a href="">Latest</a></h5>
            <h5><a href="">Live</a></h5>
    </div>
    <!-- body -->
    <div class="containers">
        <div class="container">
            <div class="content1">
                <div id="box1">
                    <h2>the flexible platform</h2>
                    <h2>empowering website creators</h2>
                    <h2>Vlogging Websites</h2>
                </div>
                <div id="box2">
                    <p>"Where words weave worlds and thoughts take flight,</p>
                    <p> welcome to the realm of boundless insight."</p>
                </div>
            </div>
            <!-- <div class="content2" action="index.php" method="post">
              
                <div class="box">
                    <img src="https://images.pexels.com/photos/21855778/pexels-photo-21855778/free-photo-of-coffee-in-cup-on-plate.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" alt="">
                    <h2>xyz</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est laudantium quidem culpa aliquam eius eum! </p>
                    <button><a href="">click here</a></button>
               
            </div>
                <div class="box">
                    <img src="https://images.pexels.com/photos/21855778/pexels-photo-21855778/free-photo-of-coffee-in-cup-on-plate.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" alt="">
                    <h2>xyz</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est laudantium quidem culpa aliquam eius eum! </p>
                    <button><a href="">click here</a></button>
               
            </div>
                <div class="box">
                    <img src="https://images.pexels.com/photos/21855778/pexels-photo-21855778/free-photo-of-coffee-in-cup-on-plate.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load" alt="">
                    <h2>xyz</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est laudantium quidem culpa aliquam eius eum! </p>
                    <button><a href="">click here</a></button>
               
            </div>
            
        </div> -->
        <div class="content2">
            <?php
            $con=new mysqli("localhost","root","sequelmysql","signUpForm");
            $que="select * from index_page limit 3";
            $res=$con->query($que);
            while($row=$res->fetch_assoc())
            {
                ?>
               <div class="box">
                 <div class="img">
                    <img src="<?php echo $row['image_url'];?>" alt="">
                </div>
                <div class="h2">
                    <h2><?php echo $row['content_name'];?></h2>
                </div>
                <div class="desc">
                    <p><?php echo $row['content_description'];?></p>
                    <button><a href="">click here</a></button>
                </div>
                <div class="button">
            </div>
               </div>
                <?php
            }
            ?>
            </div>
        <div class="container2">
            <div class="box1 box">
                <img src="https://cdn.pixabay.com/photo/2022/06/21/08/57/male-7275449_640.jpg" alt="">
                <div class="tags">
                    <a href="">LifeStyle</a>
                    <h3>Lorem ipsum dolor sit amet.</h3>
                    <h3>Lorem dolor sit amet.</h3>
                    <h3>Lorem sit Lorem ipsum dolor sit.amet.</h3>
                    <h3>Lorem sit Lorem ipsum amet.</h3>
                </div>
            </div>
            <div class="box2 box">
                <img src="https://cdn.pixabay.com/photo/2016/11/29/09/32/concept-1868728_640.jpg" alt="">
                <div class="tags">
                    <a href="">Management</a>
                    <h3>Lorem ipsum dolor sit amet.</h3>
                    <h3>Lorem amet.</h3>
                    <h3>Lorem ipsum dolor sit amet.</h3>
                </div>
            </div>
            <div class="box3 box">
                <img src="https://cdn.pixabay.com/photo/2016/03/25/12/19/man-1278713_640.jpg" alt="">
                <div class="tags">
                    <a href="">depression</a>
                    <h3>Lorem ipsum dolor sit amet.</h3>
                    <h3>Lorem ipsum sit amet.</h3>
                    <h3>Lorem ipsum dolor.</h3>
                </div>

            </div>
        </div>
    </div>
    <!-- footer -->
    <a name="contact"></a>
    <div class="footer">
        <div class="footer-1">
            <h3>Move On 😊</h3>
            <a href="#top">Back to Top</a>
            <a href="\project1\index.html">Home</a>
            <a href="\project1\signup.html">SignUp</a>
            <a href="\project1\signin.html">SignIn</a>
            <a href="\project1\tranding.html">Tranding</a>
            <a href="\project1\new.html">New</a>
            <a href="\project1\old.html">Old</a>
            <a href="\project1\hot.html">Hot</a>
        </div>
        <div class="footer-1">
            <h3>Contact Details:</h3>
            <a href=""> 004-Shop, Ground floor,
                <a href="">Asmita Haidry,</a>
                <a href="">Mira Road East,</a>
                <a href="">Thane-401107</a>
                <a href="">+91 8104713741</a>
                <a href=""> sales.office@levaze.com</a>
        </div>
        <div class="footer-1">
            <h3>onnect with us</h3>
            <a href="https://www.instagram.com/levaze_digital?igsh=MTNpenRodHZxejE1bQ=="><i
                    class="fa-brands fa-instagram"> Instagram</i></a>
            <a href="https://www.linkedin.com/company/levaze-digital/"><i class="fa-brands fa-linkedin"></i>
                Linkedin</a>
            <a href="https://www.facebook.com/profile.php?id=100090747633771&mibextid=ZbWKwL"><i
                    class="fa-brands fa-facebook"> facebook</i></a>
            <a href=""><i class="fa-brands fa-x-twitter"></i> Twitter</a>
            <a href=""><i class="fa-brands fa-whatsapp"></i> Whatsapp</a>
        </div>

    </div>
    <div class="tag">
        <div id="copytag">
            <footer>&copy; Copyright 2024 Levaze All rights reserved.
                Designed and Developed by : Levaze Digital LLP</footer>
        </div>
    </div>
    <div class="limage">
        <!-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNmq7oDPeRFaGWsXmJ2-lDNKZ977_G3rzk0AEcgkkFWHuq4-Prfr-yf37uV5eEBAWXJnA&usqp=CAU" alt=""> -->

    </div>
    <script src="index.js"></script>
    <script src="search.js"></script>
    <div class="slider"></div>
</body>

</html>