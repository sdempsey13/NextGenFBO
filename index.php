<?php

    $error = ""; $successMessage = "";

    if ($_POST) {
        
        if (!$_POST["email"]) {
            
            $error .= "An email address is required.<br>";
            
        }
        
        if (!$_POST["name"]) {
            
            $error .= "The name field is required.<br>";
            
        }
        
        if (!$_POST["message"]) {
            
            $error .= "The message is required.<br>";
            
        }
        
        if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
            
            $error .= "The email address is invalid.<br>";
            
        }
        
        if ($error != "") {
            
            $error = '<div class="alert alert-danger" role="alert"><p>There were error(s) in your form:</p>' . $error . '</div>';
            
        } else {
            
            $emailTo = "lkirsch@nexgenaero.com";
            
            $subject = "New Email from nexgenaero Contact Form";
            
            $content = $_POST['message'];
            
            $headers = "From: ".$_POST['email'];
            
            if (mail($emailTo, $subject, $content, $headers)) {
                
                $successMessage = '<div class="alert alert-success" role="alert">Your message was sent, we\'ll get back to you ASAP!</div>';
                
                
            } else {
                
                $error = '<div class="alert alert-danger" role="alert"><p><strong>Your message couldn\'t be sent - please try again later</div>';
                
                
            }
            
        }
        
        
        
    }

?>

<!DOCTYPE>
<html lang="en">
    <head>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/Grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,300italic" >
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Serif:100,200,300,400,300italic" >
        <link rel="shortcut icon" href="resources/img/NextgGen-Logo-Final-web-mini.png" type="image/x-icon"/>
        <title>NextGen Avitaion Brokers</title>
    

        
    </head>
    
    <body>
        
        <section class="section-preheader">
            <div class="row">
                <ul class="contactlist">
                    <li><ion-icon name="mail"></ion-icon>lkirsch@nexgenaero.com</a></li> | 
                    <li><ion-icon name="call"></ion-icon>(516) 318-5991</a></li>
                </ul>
            </div>
        
        </section>
        
        <header id="header">
            <nav>
                <div class="row">
                    <a href="#header"><img src="resources/img/NextgGen-Logo-Final-web-brokers.png" alt="NextGen Logo" class="logo"></a>
                    <a href="#header"><img src="resources/img/NextgGen-Logo-Final-web-mini.png" alt="NextGen Logo" class="logoMini"></a>
                    <ul class="main-nav">
                        <li><a href="#team">About Us</a></li>
                        <li><a href="#upcoming-events">Upcoming Events</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li class="stickyPhone"><ion-icon name="call"></ion-icon>(516) 318-5991</li>
                    </ul>
                </div>
            </nav>
            <div class="hero-text-box">
                <h1>NextGen Business Brokers</h1>
                <h5>Preparing your Business for a Smooth Landing<br><br>
                Optimizing Shareholder Value</h5><br>
                <p class="long-copy">
                        NextGen Business Brokers Operates In:
                     </p>
                     
                     <ul class="international">
                        <li><ion-icon name="airplane"></ion-icon>United States</li>
                        <li><ion-icon name="airplane"></ion-icon>Canada</li>
                        <li><ion-icon name="airplane"></ion-icon>Europe</li>
                     </ul>
                <a class="btn btn-full js--scroll-to-sales" href="#">Read More</a>
              
            </div>
        
        
        </header>
        
        <section class="section-sales js--section-sales" id="sales">            
            <div class="row">
                <h2>WE GUIDE YOUR BUSINESS FROM SALE PREPARATION TO COMPLETION</h2>
                <p class="long-copy"> 
                  Our team of industry veterans will help optimize your business to prepare it for sale and then manage the entire sales process.  We will seek the maximum price and the best conditions of sale. We will advocate for the owners, employees, customers, community and airport authority. We will not let you down!!
                </p>
            </div>
        
            <div class="row js--wp-1 explanations">
                <div class="col span-1-of-2 box">
                    <ion-icon name="search"></ion-icon>
                    <h3>Assessment</h3>
                    <p>Once you contact us, we  begin to gather as much information as possible about your business from you and from public sources. <br><br>Then, we’ll arrange a confidential visit where we will tour your facility, meet your principles and discuss our findings and approach. From there, we will tailor a Plan and a Strategy for your review and direction.<br><br>We take no actions nor discuss your interests with anyone without your specific instructions. <br><br><em>You remain in the driver’s seat at all times.</em>
                    </p>
                </div>
                <div class="col span-1-of-2 box">
                    <ion-icon name="today"></ion-icon>
                    <h3>Preparation</h3>
                    <p>Most companies are not ready for sale at the moment the owner decides to sell. That’s why we bring in experts to assess ways to strengthen your business as an on-going concern. In preparation for your sale, we will: <br><br>
                    <ul class="preparation">
                    <li><ion-icon name="checkmark-circle-outline"></ion-icon><p class="indent">Review Minimum Standards, leases and contracts, and conduct regulatory reviews including Federal Aviation Regulations and environmental compliance</p></li><br>
                    <li><ion-icon name="checkmark-circle-outline"></ion-icon><p class="indent">Evaluate your safety and operations, accounting, and operational processes software</p></li><br>
                    <li><ion-icon name="checkmark-circle-outline"></ion-icon><p class="indent">Work with your company counsel to ensure legal and regulatory compliance</p></li>
                    </ul>
                    </p>
                </div>
            </div>
        </section>
        
        <section class="section-industries">
            <div class="row">
                <h2>Two Industries &mdash; One Team</h2>
                <p class="long-copy">
                    We represent companies located at General Aviation and Commercial Aviation Airports in the following fields:
                </p>
                <div class = "row">
                    <div class="col span-1-of-3">
                        <div class="companyTypeHolder">
                            <img src="resources/img/fbos.jpg" alt="FBOs" class="companyTypes">
                            <h3>FBOs</h3>
                        </div>
                        <div class="companyTypeHolder">
                            <img src="resources/img/fueling.jpg" alt="FBOs" class="companyTypes">
                            <h3>Into-Plane Fuelers</h3>
                        </div>
                        <div class="companyTypeHolder">
                            <img src="resources/img/snow.jpg" alt="FBOs" class="companyTypes">
                            <h3>De-Icing and Snow Clearing</h3>
                        </div>
                    </div>
                    <div class="col span-1-of-3">
                        <div class="companyTypeHolder">
                            <img src="resources/img/charter.jpg" alt="FBOs" class="companyTypes">
                            <h3>Part 135 Charter</h3>
                        </div>
                        <div class="companyTypeHolder">
                            <img src="resources/img/security.jpg" alt="FBOs" class="companyTypes">
                            <h3>Security</h3>
                        </div>
                        <div class="companyTypeHolder">
                            <img src="resources/img/catering.jpg" alt="FBOs" class="companyTypes">
                            <h3>Caterers</h3>
                        </div>
                    </div>
                    <div class="col span-1-of-3">
                        <div class="companyTypeHolder">
                            <img src="resources/img/maintenance.jpg" alt="FBOs" class="companyTypes">
                            <h3>Part 145 Maintenance</h3>
                        </div>
                        <div class="companyTypeHolder">
                            <img src="resources/img/terminal.jpg" alt="FBOs" class="companyTypes">
                            <h3>Terminal Services</h3>
                        </div>
                        <div class="companyTypeHolder">
                            <img src="resources/img/cargo.jpg" alt="FBOs" class="companyTypes">
                            <h3>Ground, Cargo and Passenger Handlers</h3>
                        </div>
                    </div>
                   
                </div>
            </div>
        </section>
                    
        
        
        <section class="section-team" id="team">
        
            <div class="row">
                <h2>Our Team</h2>
                <p class="long-copy">
                We are industry veterans who have all been involved in business acquisitions including operational due diligence, the creation of synergies, financial analysis, drafting and negotiation of acquisition agreements &amp; closing documents, and contact with airport authorities.<br><br>
                <em class="em">Most importantly, we have relationships with all industry buyers and the personalities and abilities to get the job done right!</em>
                </p>
            </div>
            
            <div class="row short-row">    
                <img src="resources/img/leonard_kirsch.jpg" alt="Leonard Kirsch" class="teamPortraits">
                <h3>Leonard Kirsch &mdash; Director General &amp; CEO</h3>
                <p>Leonard D. Kirsch has practiced aviation and international law for nearly forty years. He has been active in both the FBO and ground handling industries and their trade associations, and has represented large FBO chains and international handlers, as well as family owned and single airport FBOs and handling companies. </p>
                <a class="btn btn-ghost btn-bio" href="bios/leonard_kirsch.html">Read Full Bio</a>
            </div>
            
            <div class="row short-row">
                <img src="resources/img/gary_ogden.jpg" alt="Gary Douglas Ogden" class="teamPortraits">
                <h3>Gary Douglas Ogden &mdash; Managing Partner</h3>
                <p>Gary Ogden has more than thirty-five years in the aviation, transportation, construction, and consulting industries. Gary has held leadership positions with GTA dnata, Sunwing Airlines and Servisair.</p>
                <a class="btn btn-ghost btn-bio" href="bios/gary_odgen.html">Read Full Bio</a>
            </div>
              
            <div class="row short-row">        
                <img src="resources/img/gilles_korstange.jpg" alt="Gilles Korstange" class="teamPortraits">
                <h3>Gilles Korstange &mdash; Managing Partner, Europe</h3>
                <p>Gilles Korstange is based in Belgium. Gilles has held executive positions in airline catering and ground handling industry, including Martinair Food, Aviapartner Catering and Aviapartner Handling, directed Menzies Aviation activities in Amsterdam and until 2014served as Menzies’ Director Business Development Western-Europe</p>
                <a class="btn btn-ghost btn-bio" href="bios/gilles_korstange.html">Read Full Bio</a>
            </div>
             
            <div class="row short-row">
                <img src="resources/img/david_finch.jpg" alt="David Finch" class="teamPortraits">
                <h3>David Finch</h3>
                <p>David Finch was Senior Vice President, Business Development, at Servisair, a commercial airport ground handling company acquired by Swissport where he was responsible for sales, marketing, contract negotiations, pricing and contract administration.  From 1995 to 2007 he was a Vice Chairman of the IATA Ground Handling Council (IGHC).</p>
                <a class="btn btn-ghost btn-bio" href="bios/david_finch.html">Read Full Bio</a>
            </div>

            <div class="row short-row">
                <img src="resources/img/glen_gross.jpg" alt="Glen Gross" class="teamPortraits">
                <h3>Glen Gross</h3>
                <p>Glen Gross recently retired from Atlantic Aviation as Vice President of Operations, Eastern Region, Previously, he spent fifteen years as a manager and executive in an international ground handling company, managing and directing operations at LGA, JFK and EWR, including into-plane fueling, ground handling, cargo warehousing and de-icing operations.</p>
                <a class="btn btn-ghost btn-bio" href="bios/glen_gross.html">Read Full Bio</a>
            </div>

            <div class="row short-row">
                <img src="resources/img/millie_becker.jpg" alt="Millie Hernandez-Becker" class="teamPortraits">
                <h3>Millie Hernandez-Becker</h3>
                <p>Millie Hernandez-Becker has experience in airport operations, FBO development, private jet charter, strategic planning, airport infrastructure, and general aviation. Her unique talents include business development, marketing and strategic planning, airport infrastructure and an extensive network. </p>
                <a class="btn btn-ghost btn-bio" href="bios/millie_becker.html">Read Full Bio</a>
            </div>

            <div class="row short-row">
                <img src="resources/img/mark_willey.jpg" alt="Mark Willey" class="teamPortraits">
                <h3>Mark Willey &mdash; Joining Soon</h3>
                <p>Mark Willey was CEO of Napa Jet Center whose sale he directed in 2018.  He was active in his Group 20, called FBO20. In 2016, Mark was honored to receive the NATA Distinguished Service Award. </p>
                <a class="btn btn-ghost btn-bio" href="bios/mark_willey.html">Read Full Bio</a>
            </div>

            <div class="row upcoming-events" id="upcoming-events">
                <h2>Upcoming Events</h2>
                <div class="event-content">
                    <img src="resources/img/NBAA2018-large-promo.jpg" alt="NBAA BUSINESS AVIATION CONVENTION & EXHIBITION (NBAA-BACE)" class="eventBanner">
                    <h3>NBAA Business Aviation Convention</h3>
                    <p>Come and see us at the NBAA Convention in Orlando, FL from October 16 - 18 as we join over 25,000 industry professionals for the most important three days of business aviation. </p><br><br>
                    <a class="btn btn-full" href="#contact">Contact us to set up a meeting at the show.</a>
                    <!-- add to class="btn btn-full js--scroll-to-sales" if broken -->
                </div>
            
            </div>
            
        </section>
            
        
        <!--<section class="section-counter">
            
            <div class="row">
                <div class="col span-1-of-3">
                    <ion-icon name="calendar"></ion-icon>
                    <h4>30</h4>
                    <p>Years Each of Industry Experience</p>
                </div>
                
                <div class="col span-1-of-3">
                    <ion-icon name="airplane"></ion-icon>
                    <h4>12</h4>
                    <p>Aviation Companies Sold</p>
                </div>
                
                <div class="col span-1-of-3">
                    <ion-icon name="trending-up"></ion-icon>
                    <h4>49</h4>
                    <p>NCAA Conferences Attended</p>
                </div>
            
            </div>
            
        </section>-->
            
        <section class="section-stats">
            <div class ="row">
                <h2>The NextGen Difference</h2>
            </div>
            <div class ="row">
                <p>We strive to obtain the best conditions of sale based upon what is most important to our clients.<br><br>  

                We work with our client’s counsel to limit representations and warranties, indemnities, as well as the duration and geographical limitations of non-competition covenants.<br><br>    

                We evaluate whether an earn-out works for both parties.<br><br>    

                If requested, we will seek to protect existing employees, and explore a continuing role for some or all of the owners.<br><br>    

                We work to ensure confidentiality so that your employee's, customers and airport authorities do not learn about your possible sale until you are ready to disclose, and we help normalize and improve any estranged relationships.<br><br>  

                We help you focus on your day to day business needs during the sale process.
                </p>  

            </div>
        
        
        
        </section>
            
        <section class="section-compensation js--section-compensation" id="compensation">
            
            <div class="row">
                <div class="col span-1-of-2 compensation">
                    <h2>Our Compensation</h2>
                <div>
                    <ul>
                        <li>While we assess the possible sale price of your business at no cost, if requested to help prepare you for sale by auditing and recommending changes in operations, management, accounting, etc., we charge either a set fee, or an hourly or daily rate.<br><br>
                        When we broker your sale, we charge a fair and reasonable commission based on the price paid for your business.<br><br>
                        Reimbursement for our expenses are at our direct cost.<br><br>
                        WE FOCUS ON DOING RIGHT BY YOU!!
                        </li>
                    </ul>
                </div>
                </div>
            
                <div class="col span-1-of-2">
                    
                    
                    <div class="compPicture">
                        <div>
                            
                        </div>
                        
                    </div>
                
          
            </div>  
        </div>
        </section>
        
        <section class="section-contact js--section-contact" id="contact">
            <div class="row">
                    <h2>Contact US</h2>
                    <p class="long-copy">
                        If you are considering selling your business now, or in the future, let our industry veterans work for you.  We will confidentially contact you immediately upon hearing from you.
                    </p>
            </div>
            <div class="row">
                <form method="post" class="contact-form">
                    <label for="name"><p>Name</p></label>
                    <input type="text" name="name" id="name" placeholder="Your Name" required>
                    <br>
                    <label for="email"><p>Email</p></label>
                    <input type="email" name="email" id="email" placeholder="Your Email" required>
                    <label for="message">Drop Us A Line</label>
                    <textarea name="message" placeholder="Your Message"></textarea> 
                    <input type="submit" name ="submit" value="Send" class="btn btn-full">
                </form>
            </div>
        </section>
            
        <footer>
            <div class="row">
                <p>&copy; 2018 NextGen Aviation Brokers, Inc.</p>
            </div>    
            <div class="row">
                <ul class="footerList">
                    <li>FBO Sales |</li>
                    <li>Ground Handling Sales |</li>
                    <li>New York, New York |</li>
                    <li>(516) 318-5991 |</li>
                    <li>lkirsch@nexgenaero.com</li>
                </ul>
            
            </div>
            
        </footer>
            
            
    
    <!-- jQuery from Google -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Ion Icons -->
    <script src="https://unpkg.com/ionicons@4.2.0/dist/ionicons.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>
    <script src="resources/js/script.js"></script>
</body>
    
</html>


<!--





-->


