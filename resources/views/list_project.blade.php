<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects Showcase</title>
    <style>
        a{text-decoration:none;}
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        header, footer {
            background: #222;
            color: white;
            text-align: center;
            padding: 15px 0;
        }
        #projects {
            text-align: center;
            padding: 50px 20px;
        }
        #projects h2 {
            font-size: 2em;
            margin-bottom: 20px;
        }
        .project-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .project {
            background: white;
            width: 320px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }
        .project:hover {
            transform: translateY(-5px);
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
        }
        .project img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .project h3 {
            margin: 15px 0 10px;
        }
        .project p {
            font-size: 0.9em;
            color: #666;
        }
    </style>
</head>
<body>
   <header>
       @include('head')
   </header>
   
   <main>
       <section id="projects">
           <h2>Projects</h2>
           <div class="project-container">
            <a href="/project">
               <div class="project">
                   <img src="img/login.png" alt="Project 1">
                   <h3>BYSMP BLESS THE CHILDREN FOUNDATION</h3>
                   <p> Website - Decision Support Analysis System for the Qualification of Beneficiaries with Child Tracking Progress.</p>
               </div>
            </a>

            <a href="project2">
               <div class="project">
                   <img src="img/admin_staf_login.png" alt="Project 2">
                   <h3>Kapenista </h3>
                   <p>Developing Website for Kapenista Marketplace: Boosting Seller Opportunities and Expanding Online Growth with Integrated Inventory, Ordering, and Sales Management System.</p>
               </div>
            </a>
            <a href="project3">
               <div class="project">
                   <img src="/img/whey1.png" alt="Project 3">
                   <h3>Whey Suppliment</h3>
                   <p>Whey Supplements Ecommerce website. online platform that sells whey protein and related fitness supplements.</p>
               </div>
            </a>
           </div>
       </section>
   </main>
   
   <footer>
       @include('footer')
   </footer>
</body>
</html>
