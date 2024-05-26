<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Victoria Hospital</title> 
    <!-- Page Icon -->
    <link rel="shortcut icon" href="../image/icon.png" type="image/x-icon">   
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <!-- Custom Css File Link -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Header Section Starts -->
    <div class="header">
        <div class="logo"><img src="../image/logo.png" alt="Victoria Hospital Logo"></div>
        <h1> Victoria Hospital </h1>
        <nav class="navbar">
            <a href="index.html">home</a>
            <a href="facilities.html">facilities</a>
            <a href="information.html">information</a>
            <a href="doctor.html">doctors</a>
            <a href="pharmacy.html">pharmacy</a>
            <a href="location.html">location</a>
            <a href="profile.html"><i class="fas fa-user"></i></a> 
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </div>
    <!-- Header Section End -->

    <!-- Home Section starts -->
    <section class="home" id="home">
        <div class="content">
            <h3>stay safe, stay healthy</h3>
            <p> We are fully dedicated to caring for your health and assisting you on your healing journey.</p>
            <a href="register.html" class="btn">register now <span class="fas fa-chevron-right"></span> </a>
        </div>
    </section>
    <!-- Home Section End -->

    <!-- Blogs section Starts -->
    <section class="blogs" id="blogs">
        <h1 class="heading"> Newest <span> Articles </span></h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="../image/blog-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>‘Bionic pancreas’ in San Antonio</h3>
                    <div class="icon">
                        <a href="#"><i class="fas fa-calendar"></i>     1st may, 2021</a>
                    </div>
                    <p>Campos has Type 1 diabetes, meaning her pancreas doesn’t produce enough insulin to regulate her glucose levels.</p>
                    <a href="https://sanantonioreport.org/san-antonio-ilet-insulin-bionic-pancreas-test-type-1-diabetes/" 
                    class="btn">learn more <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="../image/blog-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Well-Defined Role in Global Health</h3>
                    <div class="icon">
                        <a href="#"><i class="fas fa-calendar"></i>     1st may, 2021</a>
                    </div>
                    <p>Defining a clear role for the multilateral development banks and IMF will help clarify the overall structure for financing international health priorities.</p>
                    <a href="https://www.chathamhouse.org/2023/04/ifis-need-well-defined-role-global-health" 
                    class="btn">learn more <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="../image/blog-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Global Health Funding</h3>
                    <div class="icon">
                        <a href="#"><i class="fas fa-calendar"></i>   1st may, 2021</a>
                    </div>
                    <p>The aim of this project is to understand more clearly the current issues and what might be done about it.</p>
                    <a href="https://www.chathamhouse.org/about-us/our-departments/global-health-programme/international-funding-global-health-priorities" 
                    class="btn">learn more <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Blogs section End -->

    <!-- Service section Starts  -->
    <section class="services" id="services">
        <h1 class="heading">our <span>services</span></h1>
        <div class="box-container">
            <div class="box">
                <i class="fas fa-notes-medical"></i>
                <h3>free checkups</h3>
                <a href="appointment.html" class="btn">learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <i class="fas fa-ambulance"></i>
                <h3>24/7 ambulance</h3>
                <a href="ambulance.html" class="btn">learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <i class="fas fa-user-md"></i>
                <h3>expert doctors</h3>
                <a href="doctor.html" class="btn">learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <i class="fas fa-pills"></i>
                <h3>medicines</h3>
                <a href="pharmacy.html" class="btn">learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <i class="fas fa-procedures"></i>
                <h3>bed facility</h3>
                <a href="room.html" class="btn">learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
            <div class="box">
                <i class="fas fa-heartbeat"></i>
                <h3>total care</h3>
                <a href="facilities.html" class="btn">learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
    </section>
    <!-- Service section End  -->

    <!-- Review section Starts  -->
    <section class="review" id="review">
        <h1 class="heading">client's <span>review</span></h1>
        <div class="box-container">
            <div class="box">
                <img src="../image/pic-1.png" alt="">
                <h3>Chris Evan</h3>
                <p class="text">I had an exceptional experience at this hospital. The staff was incredibly attentive and caring throughout my entire stay. From the moment I walked in, I felt welcomed and well taken care of. The facilities were clean, and the medical team was highly professional. I highly recommend this hospital to anyone in need of medical care.</p>
            </div>
            <div class="box">
                <img src="../image/pic-2.png" alt="">
                <h3>Roseanne Park</h3>
                <p class="text">Overall, my visit to this hospital was satisfactory. The medical staff were knowledgeable and efficient in their care. However, I did encounter some delays in receiving certain services. Despite this, the quality of care provided was excellent. The facilities were clean and well-maintained. I would consider returning to this hospital for any future medical needs.</p>
            </div>
            <div class="box">
                <img src="../image/pic-3.png" alt="">
                <h3>Tom Holland</h3>
                <p class="text">The medical team went above and beyond to ensure my comfort and well-being. They took the time to explain my treatment plan thoroughly and addressed all of my concerns with patience and empathy. The facilities were top-notch and impeccably clean. I would highly recommend this hospital to anyone seeking medical care.</p>
            </div>
        </div>
    </section>
    <!-- Review section End  -->

    <!-- Footer section Starts  -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>our services</h3>
                <a href="appointment.html"> <i class="fas fa-chevron-right"></i> medical checkups </a>
                <a href="ambulance.html"> <i class="fas fa-chevron-right"></i> ambulance service </a>
                <a href="doctor.html"> <i class="fas fa-chevron-right"></i> specialist doctors </a>
                <a href="pharmacy.html"> <i class="fas fa-chevron-right"></i> pharmacy medicines </a>
                <a href="facilities.html"> <i class="fas fa-chevron-right"></i> bed & room facility </a>
            </div>
            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +123-456-7859</a>
                <a href="#"> <i class="fas fa-phone"></i> +356-481-0286</a>
                <a href="#"> <i class="fas fa-envelope"></i> victoria.info.com</a>
                <a href="#"> <i class="fas fa-envelope"></i> victoria.info.@gmail.com</a>
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook</a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter</a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram</a>
            </div>
        </div>
        <div class="credit">modified by <span>team 6</span> | all right reserved</div>
    </section>
    <!-- Footer section End  -->

    <!-- back to top button  -->
    <a href="#" class="to-top">
        <i class="fas fa-chevron-up"></i>
    </a>

    <!-- custom js file link  -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>