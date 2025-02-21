<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <style>
  

        .container {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            max-width: 900px;
            margin: 2rem auto;
            padding: 2rem;
            background: white;
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeIn 1s forwards;
            
        }

        .container:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .profile-pic {
            display: block;
            margin: 0 auto 1rem;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid #3B82F6;
            transition: transform 0.3s ease;
            opacity: 0;
            animation: fadeInUp 1.5s forwards;
        }

        .profile-pic:hover {
            transform: scale(1.05);
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h1, h2 {
            font-size: 2rem;
            color: #1F2937;
            margin-bottom: 1rem;
            opacity: 0;
            animation: fadeInUp 1.5s forwards;
        }

        h2 {
            font-size: 1.75rem;
            margin-top: 1.5rem;
        }

        p {
            line-height: 1.8;
            color: #4B5563;
            opacity: 0;
            animation: fadeInUp 2s forwards;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        li {
            background: #3B82F6;
            color: white;
            padding: 0.75rem;
            margin: 0.5rem 0;
            border-radius: 8px;
            font-size: 1.1rem;
            text-align: center;
            transition: transform 0.3s ease;
            opacity: 0;
            animation: fadeInUp 2s forwards;
            word-wrap: break-word;
            overflow-wrap: break-word;
            white-space: normal;
        }

        li:hover {
            transform: scale(1.05);
        }

        a {
            color: #3B82F6;
            text-decoration: none;
        }

        
    </style>
</head>
<body>
    <header>
        @include('head')
    </header>
        
        <main>
                <div class="container">
                <img src="img/jucil.jpg" alt="picture" class="profile-pic">
                <h2 class="text">Your Name</h2>
                <p  class="text">Hello! I'm Jucil S. Mandahuyan, and I am passionate about Programing/Coding. I enjoy Creating Website. Welcome to my personal space where I share a little about myself!</p>

                <h2  class="text">Education</h2>
                <ul  class="text">
                    <li class="list">Elementary School: Josefina Elementary School</li>
                    <li class="list">High School: Maambugan National HighSchool</li>
                    <li class="list">College: Eulogio "Amang" Rodriguez Institute of Science and Technology</li>
                </ul>

                <h2  class="text">Interests</h2>
                <ul  class="text">
                    <li  class="list">Making Website</li>
                    <li  class="list">Playing Logic games</li>
                    <li  class="list">Watching movie</li>
                </ul>

                <h2  class="text">Skills</h2>
                <ul  class="text">
                    <li  class="list">WEBDEVELOPMENT(HTML,CSS,JavaScrip,PHP,Laravel,Blade,React,SQL)</li>
                    <li  class="list">COMPUTER LITERATE</li>
                    <li  class="list">SQL DATABASE MANAGEMENT</li>
                    <li  class="list">KEEN TO DETAILS</li>
                    <li  class="list">WILLING TO LEARN</li>
                    <li  class="list">FLEXIBLE CAN WORK EFFECTIVELY UNDER PRESSURE</li>
                    <li  class="list">CREATIVITY</li>
                    <li  class="list">CRITICAL THINKING</li>

                </ul>

                <h2  class="text">Contact Me</h2>
                <p  class="text">If you'd like to get in touch, feel free to email me at <a href="mandahuyan.j.bsit@gmail.com"><strong>mandahuyan.j.bsit@gmail.com</strong></a></p>
            </div>

        </main>
        
    <footer>
        @include('footer')
    </footer>
</body>
</html>
        