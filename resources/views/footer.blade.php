
<style>
   #footer {
    color: #fff;
    font-family: Arial, sans-serif;
    padding: 20px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
}

.about_section {
    text-align: center;
    margin-bottom: 20px;
}

.Contact_Information {
    display: flex;
    justify-content: space-around;
    width: 100%;
}

.footer_div {
    margin: 10px;
}

.footer_div h1 {
    font-size: 18px;
    margin: 5px 0;
}

.footer_div a {
  
    text-decoration: none;
    transition: transform 0.3s ease, color 0.3s ease, letter-spacing 0.3s ease;
}

.footer_div a:hover {
    color: #a68c44;
    transform: scale(1.1); /* Slightly enlarges the link */
    letter-spacing: 1px;   /* Adds spacing between letters */
}

.Call_to_Action {
    text-align: center;
    font-size: 18px;
    font-weight: bold;
    padding: 10px;
    color: #222;
    width: 100%;
}

.Call_to_Action p {
    margin: 0;
   
}

/* Responsive design */
@media (max-width: 768px) {
    .Contact_Information {
        flex-direction: column;
        align-items: center;
    }
}


</style>

<div id="footer">
    

     <div class="Call_to_Action">
               <p>Let's build something great together! Reach out anytime!</p>
     </div>

     <div class="Contact_Information">
          <div class="footer_div">
               <h1><a href="mailto:someone@example.com">Gmail</a></h1>
          </div>

          <div class="footer_div">
               <h1><a href="https://github.com/username">GitHub Profile</a></h1>
          </div>

          <div class="footer_div">
               <h1><a href="https://facebook.com/yourprofile">Facebook</a></h1>
          </div>  

          <div class="footer_div">
               <h1><a href="https://maps.google.com/?q=your+location">Location</a></h1>
          </div>  

          <div class="footer_div">
               <h1><a href="tel:+1234567890">Phone number</a></h1>
          </div>  
     </div>

</div>
