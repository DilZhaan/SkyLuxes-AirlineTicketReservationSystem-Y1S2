<!--N H D DILHARA IT23349438-->

<!DOCTYPE html>
<html lang="en">

    <head>
        
        <link rel="stylesheet" type="text/css" href="../styles/generalStyle.css">
        <link rel="stylesheet" type="text/css" href="../styles/generalStatic.css"><link rel="stylesheet" type="text/css" href="../styles/contactUs.css">
        <link rel="icon" type="image/x-icon" href="../images/Icons/favicon.png">
        <title>Sky Luxe | Contact Us</title>
    </head>
    <body>
        <?php include "../config/header.php" ?>

        <div class="bannerContainer">
            <img src="..\images\banners\contactUsBanner.png" alt="SkyLuxe Banner">
        </div>
        
        <div class="body-content">
            <div class="sideMenu">
                <div class="menuHeader">
                    <span id="title">information Menu</span>
                </div>
                
                <ul class="menuLinks">
                    <a href="services.php">
                        <li>Services</li>
                    </a>
                    <a href="AboutUS.php">
                        <li>About Us</li>
                    </a>
                    <a href="contactUs.php">
                        <li>Contact Us</li>
                    </a>
                </ul>
            </div>
            
            <div class="content-data">
                <div class="header">
                    <h1>Contact Us</h1>
                    <span>Need assistance or have questions? Feel free to reach out to our dedicated support team via phone or email, we're here to help!</span>
                </div>
                <div class="contact-otherOptions">
                <div class="content">
                        <h3>Live Chat</h3>
                        <img src="../images/Icons/ONzAq830RRCnRi4JAknaCA.png"><br>
                        <button>Chat Now</button>
                    </div>
                    <div class="content">
                        <h3>General Quaries</h3>
                        <h4>+94 79 123 4 567</h4>
                        <hr>
                        <p><span>Additional Note :</span> Sinhala speakers are available from 08:00 to 18:00 Mondays to Fridays, and from 09:00 to 17:00 on Saturdays and Sundays. English and French speakers are available 24/7.</p>
                    </div>
                </div>
                <div class="contactUs-form">
                    <h4>Contact Us</h4>
                    <form action="" method="POST">
                        <label for="Name">Your Name:</label>
                            <input type="text" name="Name" id="Name" placeholder="Your Name">
                        <label for="Name">Your Email:</label>
                            <input type="email" name="Email" id="Email" placeholder="Your Email Address">
                        <label for="Name">Your Subject:</label>
                            <input type="text" name="Subject" id="Subject" placeholder="Your Subject">
                        <label for="Name">Your Message:</label>
                            <textarea placeholder="Enter your message here" name="Message" id="Message" > </textarea>
                        <div class="submitbtn">
                            <input type="submit" name="Send" value="Send" id="Send">
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>

        <?php include "../config/footer.php" ?>
    </body>
</html>