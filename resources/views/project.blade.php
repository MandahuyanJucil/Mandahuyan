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
            word-wrap: break-word;
            overflow-wrap: break-word;
            white-space: normal;
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
            <h1>BYSMP Bless the Children Foundation</h1>
            <iframe width="560" height="315" 
                    src="https://www.youtube.com/embed/j4xEDQnbYx8" 
                    frameborder="0" 
                    allowfullscreen>
            </iframe>
            <p><strong>Description:</strong> Website - Decision Support Analysis System for the Qualification of Beneficiaries with Child Tracking Progress.</p>
        </section>

        <section class="project-details fade-in" id="code">
            <h1>Source Code</h1>
           <a href="https://github.com/MandahuyanJucil/fundation.git" target="blank">https://github.com/MandahuyanJucil/fundation</a>
        </section>
        
        <section class="project-details fade-in" id="logic">
    <h1>Logic</h1>

    <article>
        <h4>1. User Login Logic</h4>
        <p><strong>Input:</strong> User enters username and password.</p>
        <p>
            <strong>Process:</strong>
            <ul>
                <li>Validate the credentials with the database.</li>
                <li>If valid, create a session and log the user in.</li>
                <li>If invalid, display an error message.</li>
            </ul>
        </p>
        <p><strong>Output:</strong> User is logged in or an error is shown.</p>
    </article>

    <article>
        <h4>2. Product Search Logic</h4>
        <p><strong>Input:</strong> The user enters a keyword in the search bar.</p>
        <p>
            <strong>Process:</strong>
            <ul>
                <li>Query the database for products that match the keyword.</li>
                <li>Rank the results based on relevance to the keyword.</li>
            </ul>
        </p>
        <p><strong>Output:</strong> Display a list of matching products.</p>
    </article>

    <article>
        <h4>3. Create New</h4>
        <p><strong>Categories:</strong> accountinfo, mayashope, mayashope one-time, events, qualification form.</p>
        <p><strong>Input:</strong> User enters data.</p>
        <p>
            <strong>Process:</strong>
            <ul>
                <li>Save the entered data in the database.</li>
                <li>Retrieve the saved data from the database.</li>
            </ul>
        </p>
        <p><strong>Output:</strong> Display the list of saved data.</p>
    </article>

    <article>
        <h4>4. Create New (Chalice)</h4>
        <p><strong>Input:</strong> User enters data.</p>
        <p>
            <strong>Process:</strong>
            <ul>
                <li>Compute the score based on the entered data.</li>
                <li>Save the data in the database.</li>
                <li>Retrieve the saved data from the database.</li>
            </ul>
        </p>
        <p><strong>Output:</strong> Display the list of saved data.</p>
    </article>

    <article>
        <h4>5. Delete Data</h4>
        <p><strong>Categories:</strong> chalice, accountinfo, mayashope, mayashope one-time, events, qualification form.</p>
        <p><strong>Input:</strong> Choose the data you want to delete (click the trashcan icon beside the data).</p>
        <p>
            <strong>Process:</strong>
            <ul>
                <li>Verify the selected data to be deleted.</li>
                <li>Remove the data from the database.</li>
            </ul>
        </p>
        <p><strong>Output:</strong> The selected data has been successfully removed from the database.</p>
    </article>

    <article>
        <h4>6. Edit Data</h4>
        <p><strong>Categories:</strong> chalice, accountinfo, mayashope, mayashope one-time, events, qualification form.</p>
        <p><strong>Input:</strong> Choose the data you want to edit (click the pencil icon beside the data).</p>
        <p>
            <strong>Process:</strong>
            <ul>
                <li>Check if the edited data is valid.</li>
                <li>Update the edited data.</li>
                <li>Save the updated data in the database.</li>
            </ul>
        </p>
        <p><strong>Output:</strong> The edited data has been successfully updated.</p>
    </article>

    <article>
        <h4>7. Print Data</h4>
        <p><strong>Categories:</strong> chalice, accountinfo, mayashope, mayashope one-time, events, qualification form.</p>
        <p><strong>Input:</strong> Choose the data you want to print (click the printer icon beside the data).</p>
        <p>
            <strong>Process:</strong>
            <ul>
                <li>Process the selected data for printing.</li>
                <li>Generate and download the PDF file.</li>
            </ul>
        </p>
        <p><strong>Output:</strong> Save the printable PDF file to the device.</p>
    </article>

</section>

        <section class="project-details fade-in" id="inspiration">
            <h1>Inspiration</h1>
            <p>The BYSMP foundation provides assistance to children with disabilities and those without parents. through making a website for BYSMP. This is the way I give help to those children.</p>
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
