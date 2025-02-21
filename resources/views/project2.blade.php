<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Details</title>
    <style>
        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
        }

        a{
            text-decoration:none;
    
        }
        html {
            scroll-behavior: smooth;
        }

        nav {
            background: rgba(255, 255, 255, 0.2);
            display: flex;
            justify-content: center;
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
        }

        nav a {
            margin: 0 20px;
            text-decoration: none;
            color: #ff7e5f;
            font-size: 1.2em;
            font-weight: 700;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        nav a:hover {
            color: #feb47b;
            transform: scale(1.1);
        }

        main {
            padding: 50px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .project-details {
            background: rgba(255, 255, 255, 0.1);
            margin: 20px 0;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
            max-width: 800px;
            text-align: center;
            transform: translateY(0);
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            backdrop-filter: blur(20px);
        }

        .project-details:hover {
            transform: translateY(-15px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
        }

        .project-details video {
            max-width: 100%;
            border-radius: 10px;
            margin-bottom: 20px;
            border: 2px solid #feb47b;
        }

        .project-details h1, .project-details h2 {
            margin-bottom: 20px;
            color: #feb47b;
            font-size: 2em;
            letter-spacing: 2px;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.6);
        }

        .project-details p {
            line-height: 1.8;
            color: #eee;
            font-size: 1.1em;
        }

    
        /* Animation styles */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        #logic {
        font-family: Arial, sans-serif;
        margin: 20px;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        color: #333;
        font-size: 32px;
        margin-bottom: 30px;
    }

    article {
        background-color: #fff;
        padding: 15px;
        margin: 20px 0;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    }

    h4 {
        font-size: 22px;
       
        margin-bottom: 10px;
    }

    p {
        font-size: 16px;
        color: #555;
        line-height: 1.6;
    }

    

    ul {
        list-style-type: disc;
        margin-left: 20px;
    }

    ul li {
        font-size: 16px;
    }

    .fade-in {
        animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }
    @media (max-width: 951px) {
     nav{
        display:none;
     }
    }
    </style>
</head>
<body>
    <header>
        @include('head')
    </header>
    <nav>
        <a href="#info">Information</a>
        <a href="#code">Code</a>
        <a href="#logic">Logic</a>
        <a href="#inspiration">Inspiration</a>
        <a href="#technologies">Technologies</a>
    </nav>
    <main>
        <section class="project-details fade-in" id="info">
            <h1>Kapenista Coffee Shop (User Side)</h1>
            <iframe width="560" height="315" 
                    src="https://www.youtube.com/embed/OQoxJdnaFI8" 
                    frameborder="0" 
                    allowfullscreen>
            </iframe>
            <p><strong>Description:</strong>: Customers receive an email confirmation with a receipt for their
purchase. This email serves as proof of purchase and includes details such as items
purchased, prices, and payment information.</p>
        </section>

        <section class="project-details fade-in" id="info">
            <h1>Kapenista Coffee Shop (Admin Side)</h1>
            <iframe width="560" height="315" 
                    src="https://www.youtube.com/embed/JgeN5-4nxoY" 
                    frameborder="0" 
                    allowfullscreen>
            </iframe>
            <p><strong>Description:</strong> The administrator is in charge of managing the whole web-based
online ordering, delivery, and logistics system They can access the backend of the system and have
the maximum degree of authority and privilege.</p>
        </section>

        <section class="project-details fade-in" id="code">
            <h1>Source Code</h1>
           <a href="https://github.com/Josselrempis02/kapenista-ecommerce-project.git" target="blank">https://github.com/MandahuyanJucil/fundation</a>
        </section>
        
        <section class="project-details fade-in" id="logic">
    <h1>Logic</h1>

    <article>
       <img src="img/flowchart.png" alt="">
    </article>

   
</section>

        <section class="project-details fade-in" id="inspiration">
            <h1>Inspiration</h1>
            <p>We see that the kapenista has great potential to become a successful business, so I and my groupmates decided to make them the beneficiary in our capstone project.</p>
        </section>
        <section class="project-details fade-in" id="technologies">
            <h1>Technologies</h1>
            <p>
                <strong>Programming Languages:</strong>PHP, JavaScript, SQL <br>
                <strong>Frameworks:</strong> Laravel<br>
                <strong>Databases:</strong> MySQL<br>
                <strong>Version Control:</strong>Git, GitHub<br>
                <strong>Tools & Technologies:</strong> APIs, OAuth<br>
                <strong>Other Skills:</strong> Agile Methodology, Problem Solving, Unit Testing<br>
           </p>
        </section>
    </main>
    <footer>
    @include('footer')
    </footer>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const elements = document.querySelectorAll(".fade-in");

            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("visible");
                    }
                });
            });

            elements.forEach((element) => observer.observe(element));
        });
    </script>
</body>
</html>
