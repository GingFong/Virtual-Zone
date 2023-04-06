<?php
include_once("nav.php")
?>
<link rel="stylesheet" href="contact.css">

         <h1>Contact Us</h1>
        <img src="img/gaming.png" width="1519" height="300px">
        
        <main>
          
          <p>Fill out the form below to send us a message:</p>
          <form action="submit-form.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit">Send Message</button>
          </form>
          <div class="contact-info">
            <h3>Or reach us at:</h3>
            <br><p1><strong>Address:</strong> 123 Main St, Anytown USA</p1>
          <br>  <p1><strong>Phone:</strong> 555-555-1234</p1>
           <br> <p1><strong>Email:</strong> info@gameshop.com</p1>
          </div>
        </main>
        <!-- Footer-->
        
       
   <footer class="footer">
    <div class="containerr">
      <div class="row">
        <div class="footer-col">
          <h4>Virtual Zone</h4>

          <li><a href="informatie.html">about us</a></li>
          <li><a href="#">our services</a></li>
          <li><a href="privacybeleid.html">privacybeleid</a></li>
          <li><a href="Contact.html">Contact</a></li>

        </div>
        <div class="footer-col">
          <h4> get help</h4>

          <li><a href="FAQ.html">FAQ</a></li>
          <li><a href="#">shipping</a></li>
          <li><a href="#">returns</a></li>
          <li><a href="#">order status</a></li>
        </div>
        
        <div class="footer-col">
          <h4>follow us</h4>
          <div class="social-links">
            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/feed/"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Einde Footer-->
        
        
        </html>