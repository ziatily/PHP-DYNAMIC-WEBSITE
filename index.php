<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dynamic Website</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <header class="main">
        <nav>
            <a href="#" class="logo">
                <img src="images/logo1.png"/>
            </a>

            <ul class="menu">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div class="main-heading">
            <h1>Create Prespectives With Virtual Reality</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint provident consectetur ducimus. Blanditiis, culpa!</p>
            <a class="main-btn" href="#">Contact</a>
        </div>
    </header>

    <section class="features">
        <div class="feature-container">

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-icon1.png"/>
                </div>
                <div class="f-text">
                    <h4>Web Development</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-icon2.png"/>
                </div>
                <div class="f-text">
                    <h4>Software Development</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-icon3.png"/>
                </div>
                <div class="f-text">
                    <h4>App Development</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>
        </div>
    </section>

     <section class="about">
        <div class="about-img">
            <img src="images/about.png" >
        </div>
        <div class="about-text">
             <h2>Start Tracking Your Statictics</h2>
             <p>Lorem ipsum dolor ectetur adipisicing elit. Dolorem eaque cum quaerat architecto eius repellendus possimus. Quasi cupiditate assumenda officia mollitia ducimus placeat quae! Accusantium odio molestiae eveniet. Animi, neque?</p>
             <button class="main-btn" href="#">Read More</button>
        </div>
     </section>

     <section class="contact">
        <div class="contact-heading">
            <h1>Contact Us</h1>
            <p>Lorem ipectetur adipisicing elit. At, fugit, omnis distinctio</p>
        </div>
        <form action="userinformation.php" method="post">
            <input type="text" name="user" placeholder="Your full name"/>
            <input type="email" name="email" placeholder="Your e-mail"/>
            <textarea  name="message" placeholder="Type Your Message Here..............."></textarea>
            <button class="main-btn contact-btn" type="submit">Continue</button>
        </form>
     </section>
</body>
</html>