<!DOCTYPE html>
<html lang="en">
<head>
<?php include "myphp.php"; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="Images/Favicon.png">
    <title>Template7</title>
    <link href="styles/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css"/>
</head>
<body>
      <div class="navbar">
          <img src="Images/Logo.png">
          <a href="#" class="toggle-button">
              <span class="bar"></span>
              <span class="bar"></span>
              <span class="bar"></span>
          </a>
          <div class="navbar-items">
            <ul >
                <li><a class="home" href="#">HOME</a></li>
                <li><a href="../DAW/Portofolio/portofolio.html">PORTOFOLIO</a></li>
                <li><a href="../DAW/Services/service.html">SERVICES</a></li>
                <li><a id="a-clients" href="#">CLIENTS</a></li>
                <li><a id="a-contact" href="#">CONTACT</a></li>
            </ul>
          </div>
         
      </div>
      <div class="slider-container">
          <div class="slides">
              <img src="Images/third-theme.png" id="lastClone">
              <img src="Images/main-theme.png" > 
              <img src="Images/first-theme.png">
              <img src="Images/second-theme.png">
              <img src="Images/third-theme.png">
              <img src="Images/main-theme.png" id="firstClone"> 
          </div>
          <p>design / development / photography</p>
          <h1>creativity have new level</h1>
          <button class="prevBtn">preview</button>
          <button class="getTheme">get theme</button>
          <img class="down-icon" src="Images/Down Icon.png">
      </div>
        <div class="history-container">
            <div>little history</div>
            <img src="Images/Separator.png">
            <p > Vivamus suscipit tortor eget felis porttitor voluptat. Vestibulum ac diam sit amet quam vehicula elementum sed si amet dui.
Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.Curabitur aliquet quam id dui posuere bandit.
Donec rutrum conque leo eget malesuada. Vivamus suscipit tortor eget felis porttitor voluptat.
Vivamus suscipit tortor eget felis porttitor voluptat. Cras ultricies ligula sed magna dictum porta.
Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
        </div>
        
        <div class="rectangles">
            <div class="first-rectangle"></div>
            <div class="white-rectangle"></div>
            <div class="second-rectangle">
                <div class="blue-rectangle">
                    <div>random artwork</div>
                    <p>Vivamus suscipit tortor eget felis poerttitor
voluptat. Vestibulun ac diam set amet
quam vehicula elementum sed sit amet dui.
Pellentesque in ipsum id orci.</p>
                    <img class="facebook-icon" src="Images/Facebook.png">
                    <img class="twitter-icon" src="Images/Twitter.png">
                </div>
            </div>
            <div class="white-rectangle"></div>
            <div class="third-rectangle"></div>
            <div class="white-rectangle"></div>
        </div>

       <div class="services">
           <div class="idea-rectangle">
               <img class="pen" src="Images/Icon.png">
               <img class="separator" src="Images/Separator2.png">
               <h1>idea</h1>
               <p>Vivamus suscipit tortor eget felis poerttitor
voluptat. Vestibulun ac diam set amet
quam vehicula elementum sed sit amet dui.
Pellentesque in ipsum id orci.</p>
           </div>
           <div class="work-rectangle">
            <img class="plug" src="Images/Icon2.png">
            <img class="separator" src="Images/Separator2.png">
            <h1>work</h1>
            <p>Vivamus suscipit tortor eget felis poerttitor
voluptat. Vestibulun ac diam set amet
quam vehicula elementum sed sit amet dui.
Pellentesque in ipsum id orci.</p>
           </div>
           <div class="deliver-rectangle">
            <img class="pc" src="Images/Icon3.png">
            <img class="separator" src="Images/Separator2.png">
            <h1>deliver</h1>
            <p>Vivamus suscipit tortor eget felis poerttitor
voluptat. Vestibulun ac diam set amet
quam vehicula elementum sed sit amet dui.
Pellentesque in ipsum id orci.</p>  
           </div>
       </div>

       <div class="clients">
           <div>our clients are</div>
           <img class="separator" src="Images/Separator.png">
           <p class="quote">"Vivamus suscipit tortor eget felix porttitor voluptat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
            Pellentesque in ipsu, id orci porta dapibus. Proin eget tortor risus. Curabitur aliquet quam id dui posuere blandit."</p>
            <p class="author"> Mr.Lorem Ipsum</p>
            <nav>
                <img src="Images/logo1.png">
                <img src="Images/logo2.png">
                <img src="Images/logo3.png">
                <img src="Images/logo4.png">
            </nav>        
       </div>
       <div class="contact-us">
          <div class="about">
              <div>about us</div>
              <img src="Images/Separator2.png">
              <p>Vivamus suscipit tortor eget felis porttitor  voluptat. Vestibulum
ac diam sit amet quam vehicula elementum sed sit amet dui.
Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
Curabitur aliquet quam id dui posuere blandit. Donec rutrum
conque leo eget malesuada. Vivamus suscipit tortor eget 
felis porttitor voluptat. Vivamus suscipit tortor eget felis.</p>
          </div>
          <form action="myphp.php" method="post">
            <div class="contact">
                <div>contact us</div>
                   <label class="email">email</label>
                   <input type="text" name="email-input" class="email-input" required><br>
                   <label class="message">message</label>
                   <textarea class="message-input" name="message-input" rows="4" cols="55" required></textarea><br>
                  <button id="submit" name="submit">send</button>
                  <p class="status"></p>
            </div>
        </div>    
          </form>
       <div class="footer">
           <div>@ 2015 - -Modus All Right Reserved</div>
           <nav>
            <img src="Images/Facebook.png">
            <img src="Images/Twitter.png">
            <img src="Images/Dribble.png"> 
           </nav>       
       </div>
       <script src="jquery.js" type="text/javascript"></script>
       <script src="script.js?v=<?php echo time(); ?>" type="text/javascript"></script>
   
</body>
</html>
    

  