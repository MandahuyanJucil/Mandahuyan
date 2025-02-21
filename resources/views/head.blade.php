<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dark/Light Mode Toggle</title>
    <style>
        /* Keyframe Animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        

           
        /* Tooltip Styles */
        .date-tooltip {
            display: none;
            position: absolute;
            background-color: #000;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            font-size: 14px;
            font-weight: normal;
            z-index: 10;
        }

        /* Light Mode */
        body.light-mode {
            background-image: linear-gradient(to bottom, #a2aec1, #a7c0ca, #b6d0cf, #cedfd4, #e8ecde);
            color: #000;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        footer.light-mode {
            background-image: linear-gradient(to bottom, #a2aec1, #a7c0ca, #b6d0cf, #cedfd4, #e8ecde);
            color: #000;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .light-mode header {
            background-image: linear-gradient(to bottom, #a2aec1, #a7c0ca, #b6d0cf, #cedfd4, #e8ecde);
            color: #fff;
            animation: fadeIn 1s ease;
        }

        .light-mode .a {
            background-color: #d9ad5c;
            color: #000;
            animation: fadeIn 1.4s ease;
        }

        .light-mode .main_project {
            background-image: linear-gradient(to bottom, #a2aec1, #a7c0ca, #b6d0cf, #cedfd4, #e8ecde);
            color: #000;
            animation: fadeIn 1.4s ease;
        }

        .light-mode .container {
            background-image: linear-gradient(to bottom, #a2aec1, #a7c0ca, #b6d0cf, #cedfd4, #e8ecde);

        }

        .light-mode .text{
            color: #000;
            background-color:
        }
        
        .light-mode .list{
            font-weight:bolder ;
            background-image: linear-gradient(to bottom, #a2aec1, #a7c0ca, #b6d0cf, #cedfd4, #e8ecde);
            color:#000;  
        }

        .profile-pic {
            display: block;
            margin: 0 auto 1rem;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid #555;
            transition: transform 0.3s ease;
            opacity: 0;
            animation: fadeInUp 1.5s forwards;
        }

        .light-mode article{
            background-image: linear-gradient(to bottom, #a2aec1, #a7c0ca, #b6d0cf, #cedfd4, #e8ecde);
            color: #000;
            animation: fadeIn 1.4s ease;
        }
       
        .light-mode #logic{
            background-image: linear-gradient(to bottom, #a2aec1, #a7c0ca, #b6d0cf, #cedfd4, #e8ecde);
            color: #000;
            animation: fadeIn 1.4s ease;
        }

        .light-mode .project-details h1{
            color: #000;
            animation: fadeIn 1.4s ease;
        }
        .light-mode .footer_div a{
            color: #000;
            text-decoration: none;
            transition: transform 0.3s ease, color 0.3s ease, letter-spacing 0.3s ease;
        }

        .light-mode .Call_to_Action p {
            margin: 0;
            color: #000;
        }

        .light-mode .project-details p {
            color: #000;
            animation: fadeIn 1.4s ease;
        }
       
        .light-mode nav a{
            color: #000;
            animation: fadeIn 1.4s ease;
        }
        

        .light-mode nav {
            background-image: linear-gradient(to bottom, #a2aec1, #a7c0ca, #b6d0cf, #cedfd4, #e8ecde);
            color: #000;
            animation: fadeIn 1.4s ease;
        }

        .light-mode #footer{
            background-image: linear-gradient(to bottom, #a2aec1, #a7c0ca, #b6d0cf, #cedfd4, #e8ecde);
            color: #000;
            animation: fadeIn 1.4s ease;
        }

        .light-mode .Contact_Information {
       
            color: #000;
            animation: fadeIn 1.4s ease;
        }

        .light-mode .about-me{
            background-image: linear-gradient(to bottom, #a2aec1, #a7c0ca, #b6d0cf, #cedfd4, #e8ecde);
            color: #000;
            animation: fadeIn 1.4s ease;
        }

        .light-mode .about-me-heading{
          color: #000;
        }

        .light-mode .details{
            color: #000;
        }

         .light-mode .project{
            background-image: linear-gradient(to bottom, #a2aec1, #a7c0ca, #b6d0cf, #cedfd4, #e8ecde);
            color: #000;
            animation: fadeIn 1.4s ease;
        }
        



       
        /* Dark Mode */
        body.dark-mode {
            background-image: linear-gradient(to bottom, #362a2c, #6b5052, #a57a7a, #e3a7a1);
            color: #fff;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .dark-mode .details{
            color: #fff;
        }

        .dark-mode .about-me-heading{
          color:#fff;
        }
       
        .dark-mode .about-me{
            background-image: linear-gradient(to bottom, #362a2c, #6b5052, #a57a7a, #e3a7a1);
            color: #fff;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
      

        .dark-mode header {
            background-image: linear-gradient(to bottom, #362a2c, #6b5052, #a57a7a, #e3a7a1);
            color: #fff;
            animation: fadeIn 1s ease;
        }

        .dark-mode .a {
            background-color: #a68c44;
            color: #fff;
            animation: fadeIn 1.4s ease;
        }

        .dark-mode .main_project{
            background-image: linear-gradient(to bottom, #362a2c, #6b5052, #a57a7a, #e3a7a1);
            color: #fff;
            animation: fadeIn 1.4s ease;
        }

        .dark-mode .container {
            background-image: linear-gradient(to bottom, #362a2c, #6b5052, #a57a7a, #e3a7a1);

        }

        .dark-mode .text{
            color:#fff;
        }
        
        .dark-mode .list{
            font-weight:bolder ;
            background-image: linear-gradient(to bottom, #362a2c, #6b5052, #a57a7a, #e3a7a1);
            color:#fff;  
        }

        .dark-mode .profile-pic {
            display: block;
            margin: 0 auto 1rem;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid #fff;
            transition: transform 0.3s ease;
            opacity: 0;
            animation: fadeInUp 1.5s forwards;
        }

        .dark-mode .footer_div a{
            color: #fff;
            animation: fadeIn 1.4s ease;
        }

        .dark-mode .Call_to_Action p {
            margin: 0;
            color: #fff;
        }

        .dark-mode article{
            background-color: #555;
            color: #fff;
            animation: fadeIn 1.4s ease;
        }

        .dark-mode #logic{
            background-image: linear-gradient(to bottom, #362a2c, #6b5052, #a57a7a, #e3a7a1);
            color: #fff;
            animation: fadeIn 1.4s ease;
        }
       
        .dark-mode nav{
            background-image: linear-gradient(to bottom, #362a2c, #6b5052, #a57a7a, #e3a7a1);
            color: #fff;
            animation: fadeIn 1.4s ease;
        }
            
     
        .dark-mode .Contact_Information{
            background-image: linear-gradient(to , #6b5052, #a57a7a, #e3a7a1);
            color: #fff;
            animation: fadeIn 1.4s ease;
        }

        .dark-mode .project-details h1{
            color: #fff;
            animation: fadeIn 1.4s ease;
        }

        .dark-mode nav a{
            color: #fff;
            animation: fadeIn 1.4s ease;
        }

        .dark-mode .project-details p {
            color: #fff;
            animation: fadeIn 1.4s ease;
        }
        .dark-mode .project{
            background-image: linear-gradient(to bottom, #362a2c, #6b5052, #a57a7a, #e3a7a1);
            color: #fff;
            animation: fadeIn 1.4s ease;
        }
        
      

    
        .light-mode footer {
            background-image: linear-gradient(to bottom, #a2aec1, #a7c0ca, #b6d0cf, #cedfd4, #e8ecde);
            color: #000;
            animation: fadeIn 1.4s ease;
        }
        
            .dark-mode footer{
            background-image: linear-gradient(to bottom, #362a2c, #6b5052, #a57a7a, #e3a7a1);
            color: #fff;
            animation: fadeIn 1.4s ease;
        }
        

        /* Toggle Button Styles */
        .toggle-btn {
            cursor: pointer;
            padding: 5px 10px;
            border-radius: 5px;
            border: none;
            background-color: #555;
            color: #fff;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }

        .toggle-btn:hover {
            background-color: #777;
        }

        /* Navigation Links */
        .navigation-links a {
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 15px;
            font-weight: bold;
            border: 1px solid #000;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .navigation-links a:hover {
            background-color: #c4dbc9;
            transform: scale(1.1);
        }

        /* Ensure mobile responsiveness */
@media screen and (max-width: 768px) {
    header {
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding: 20px;
    }

    .navigation-links {
        flex-direction: column;
        gap: 10px;
        text-align: center;
    }

    .navigation-links a {
        display: block;
        width: 100%;
        padding: 10px;
        font-size: 16px;
        text-align: center;
    }

    .toggle-btn {
        width: 100%;
        font-size: 16px;
        padding: 10px;
    }

    .profile-pic {
        width: 100px;
        height: 100px;
    }

    /* Adjust text and container sizing */
    body {
        font-size: 14px;
    }

    .container, .main_project, .project {
        padding: 10px;
        margin: 10px;
    }
    .date-section{
        display:none;
    }
}

    </style>
</head>
<body class="light-mode">

<header 
    style="font-family: Arial, sans-serif; display: flex; justify-content: space-between; align-items: center; padding: 50px 40px; animation: fadeIn 1s ease;">
    
    <!-- Settings Icon (SVG) -->
   
    <button id="toggleMode" class="toggle-btn">Switch to Dark Mode</button>
    <!-- Navigation Links -->
    <div class="navigation-links" style="display: flex; gap: 15px;">
        <a href="/" style="animation: fadeIn 1.4s ease;" class="a">Home</a>
        <a href="/about" style="animation: fadeIn 1.6s ease;" class="a">About</a>
        <a href="/list_project" style="animation: fadeIn 1.8s ease;" class="a">Project</a>
    </div>

    <div id="dateSection" class="date-section">

    </div>


   

</header>

<script>
    // Function to show current date and time
    function showDateTime() {
        const dateSection = document.getElementById('dateSection');
        const now = new Date();
        const dateTimeString = now.toLocaleString(); // Get current date and time
        dateSection.textContent = dateTimeString; // Display the date and time
    }

    // Function to toggle between dark and light mode
    function toggleMode() {
        const body = document.body;
        const toggleBtn = document.getElementById('toggleMode');
        
        // Toggle class on body for dark/light mode
        if (body.classList.contains('light-mode')) {
            body.classList.remove('light-mode');
            body.classList.add('dark-mode');
            toggleBtn.textContent = 'Switch to Light Mode';
            localStorage.setItem('mode', 'dark');
        } else {
            body.classList.remove('dark-mode');
            body.classList.add('light-mode');
            toggleBtn.textContent = 'Switch to Dark Mode';
            localStorage.setItem('mode', 'light');
        }
    }

    // Event listener for toggle button
    document.getElementById('toggleMode').addEventListener('click', toggleMode);

    // Load mode preference from localStorage
    window.onload = function() {
        const savedMode = localStorage.getItem('mode');
        if (savedMode === 'dark') {
            document.body.classList.add('dark-mode');
            document.body.classList.remove('light-mode');
            document.getElementById('toggleMode').textContent = 'Switch to Light Mode';
        } else {
            document.body.classList.add('light-mode');
            document.body.classList.remove('dark-mode');
            document.getElementById('toggleMode').textContent = 'Switch to Dark Mode';
        }

        // Show current date and time
        showDateTime();
    }
</script>

</body>
</html>
