<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/index.css">
    <title>Jucil Mandahuyan | Backend Software Engineer</title>
</head>
<style>
    
body {
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 0;
    background: rgba(255, 255, 255, 0.2);
    color: #fff;
}
.profile {
    padding: 50px 20px;
    text-align: start;
    margin-bottom: 30px;
}

.main_info h3{
    font-size: 300%;
}

.main_info p{
    font-size: 300%;
}
     

/* Projects Section */
.projects {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    padding: 40px 20px;
    
}

.main_project {
    background-color: #fff;
    width: 30%;
    margin-bottom: 30px;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
}

.main_project:hover {
    transform: translateY(-10px);
}

.main_image {
    width: 100%;
    height: 200px;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
}

.main_image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Photo Slider Styles */
.photo-slider {
    position: relative;
    width: 100%;
    height: 200px;
    overflow: hidden;
}

.slider-container {
    display: flex;
    transition: transform 0.5s ease;
}

.slide {
    min-width: 100%;
    transition: opacity 1s ease-in-out;
}

.slide img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Navigation arrows */
.prev, .next {
    position: absolute;
    top: 50%;
    padding: 16px;
    color: white;
    font-size: 18px;
    font-weight: bold;
    background-color: rgba(0, 0, 0, 0.5);
    border: none;
    cursor: pointer;
    z-index: 100;
    transform: translateY(-50%);
}

.prev {
    left: 0;
}

.next {
    right: 0;
}

.prev:hover, .next:hover {
    background-color: rgba(0, 0, 0, 0.8);
}

/* Links & Buttons */
a.main_a {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007BFF;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    font-size: 1rem;
    margin: 20px 0;
    transition: background-color 0.3s ease;
}

a.main_a:hover {
    background-color: #0056b3;
}

/* Responsive Design */
@media (max-width: 768px) {
    .main_project {
        width: 45%;
    }
}

@media (max-width: 480px) {
    .main_project {
        width: 100%;
    }

    .profile .main_info h3 {
        font-size: 1.8rem;
    }

    .profile .main_info p {
        font-size: 1rem;
    }
}

/* Footer Styles */
footer {
    background-color: #333;
    color: #fff;
    padding: 20px;
    text-align: center;
}

footer p {
    font-size: 1rem;
}





.about-me {
    margin-top: 30px;
    text-align: center;
    padding: 50px 20px;
    background-color: #f4f4f4;
    border-radius: 8px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    animation: fadeIn 1.5s ease-in-out;
}

.about-me-heading {
    font-size: 30px;
    color: #333;
    margin-bottom: 20px;
    text-transform: uppercase;
    letter-spacing: 2px;
    animation: slideInFromTop 1s ease-out;
}

.about-me-info {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 30px;
    animation: fadeIn 1.5s ease-in-out;
}

.image-container {
    position: relative;
    overflow: hidden;
    border-radius: 50%;
    width: 180px;
    height: 180px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    animation: zoomIn 1s ease-out;
}

.profile-picture {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transform: scale(1.1);
    transition: transform 0.3s ease;
}

.profile-picture:hover {
    transform: scale(1);
}

.details {
    font-size: 18px;
    color: #555;
    text-align: left;
    max-width: 500px;
}

.details p {
    margin: 8px 0;
    font-weight: 500;
    line-height: 1.6;
}

/* Animation Definitions */
@keyframes fadeIn {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}

@keyframes slideInFromTop {
    0% {
        transform: translateY(-30px);
        opacity: 0;
    }
    100% {
        transform: translateY(0);
        opacity: 1;
    }
}

@keyframes zoomIn {
    0% {
        transform: scale(0.8);
    }
    100% {
        transform: scale(1);
    }
}
</style>
<body>
   <header>
       @include('head')
   </header>

   <main>
        <section class="profile">
            <div class="main_info">
                <h3>Jucil Mandahuyan</h3>
                <p>Hi, I'm Jucil Mandahuyan, Applying as an Intern Webdeveloper.</p>
            </div>
        </section>
         <!-- About Me Section with animation and design -->
         <section class="about-me">
   
            <div class="about-me-info">
                <div class="image-container">
                    <img src="img/jucil.jpg" alt="Jucil Mandahuyan" class="profile-picture">
                </div>
                <div class="details">
                    <p><strong>Full Name:</strong> Jucil S. Mandahuyan</p>
                    <p><strong>Age:</strong>24</p>
                    <p><strong>Address:</strong>Siruna Village phase 4 Mambugan Antipolo city</p>
                    <p><strong>Email:</strong> jucilmandahuyan7.com</p>
                    <p><strong>Phone:</strong> 09086534144</p>
                    <!-- <p><strong>Profession:</strong> Backend Software Engineer</p> -->
                </div>
            </div>
        </section>

        <section class="projects">
         

            <div class="main_project">
                <div class="photo-slider" id="slider2">
                    <div class="slider-container">
                        <div class="slide fade">
                            <img src="/img/login.png" alt="Project Image 1">
                        </div>
                        <div class="slide fade">
                            <img src="/img/chalice.png" alt="Project Image 2">
                        </div>
                        <div class="slide fade">
                            <img src="/img/admin.png" alt="Project Image 3">
                        </div>
                    </div>
                </div>
                <p><strong>Project 1:</strong> BYSMP BLESS THE CHILDREN FOUNDATION Website - Decision Support Analysis System for the Qualification of Beneficiaries with Child Tracking Progress.</p>
                <a class="main_a" href="project">Continue reading</a>
            </div>

            <div class="main_project">
                <div class="photo-slider" id="slider1">
                    <div class="slider-container">
                       <div class="slide fade">
                            <img src="/img/admin_staf_login.png" alt="Project Image 1">
                        </div>
                        <div class="slide fade">
                            <img src="/img/customer_register.png" alt="Project Image 2">
                        </div>
                        <div class="slide fade">
                            <img src="/img/sales.png" alt="Project Image 3">
                        </div>
                    </div>
                </div>
                <p><strong>Project 2:</strong> Developing Website for Kapenista Marketplace: Boosting Seller Opportunities and Expanding Online Growth with Integrated Inventory, Ordering, and Sales Management System.</p>
                <a class="main_a" href="/project2">Continue reading</a>
            </div>
            
            <div class="main_project">
                <div class="photo-slider" id="slider3">
                    <div class="slider-container">
                        <div class="slide fade">
                            <img src="/img/whey1.png" alt="Project Image 1">
                        </div>
                        <div class="slide fade">
                            <img src="/img/whey2.png" alt="Project Image 2">
                        </div>
                        <div class="slide fade">
                            <img src="/img/whey3.png" alt="Project Image 3">
                        </div>
                    </div>
                </div>
                <p><strong>Project 3:</strong> Whey Supplements Ecommerce website. online platform that sells whey protein and related fitness supplements. </p>
                <a class="main_a" href="/project3">Continue reading</a>
            </div>

        </section>
   </main>

   <footer>
       @include('footer')
   </footer>

   <script>
       // JavaScript for Auto Slider Functionality

       // Function to initialize and show slides for each slider
       function showSlides(sliderId) {
           let slideIndex = 0;
           let slides = document.querySelectorAll(`#${sliderId} .slide`);
           let totalSlides = slides.length;

           function displaySlides() {
               for (let i = 0; i < totalSlides; i++) {
                   slides[i].style.display = "none";  // Hide all slides
               }

               // Increment slideIndex, reset if needed
               slideIndex++;
               if (slideIndex > totalSlides) { slideIndex = 1 }

               // Show the current slide
               slides[slideIndex - 1].style.display = "block";
           }

           // Show the first slide initially
           displaySlides();

           // Auto slide every 3 seconds
           setInterval(displaySlides, 3000);
       }

       // Initialize sliders with unique IDs
       showSlides('slider1');
       showSlides('slider2');
       showSlides('slider3');
   </script>
</body>
</html>
