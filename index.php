<!DOCTYPE html>
<html lang="en">
    <head>
    
        <!-- Basic Page Needs
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <meta charset="utf-8">
        <title>Fire & Co</title>
        <meta name="description" content="Fire & Co is a...">
        <meta name="author" content="betadesign">
        
        <!-- Mobile Specific Metas
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- FONT
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
        
        <!-- CSS
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/skeleton.css">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/nav_styles.css">
              
        <!-- JavaScripts
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <script src="//cdn.jsdelivr.net/jquery/2.2.0/jquery.min.js"></script>        
        <script src="//cdn.jsdelivr.net/jquery.sidr/2.2.1/jquery.sidr.min.js"></script><!-- Include the Sidr JS -->
        
        <!-- Favicon
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <link rel="apple-touch-icon" sizes="57x57" href="images_favicon/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="images_favicon/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images_favicon/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="images_favicon/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images_favicon/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="images_favicon/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="images_favicon/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="images_favicon/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="images_favicon/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="images_favicon/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="images_favicon/android-chrome-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="images_favicon/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="images_favicon/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="images_favicon/manifest.json">
        <link rel="mask-icon" href="images_favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-TileImage" content="/mstile-144x144.png">
        <meta name="theme-color" content="#ffffff">

</head>

<body>
    <div class="site-wrap">  
        <!-- Primary Page Layout
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <!-- --- S I T E  L O G I N --- -->
        <div class="wrapper site-login">
            <div class="container">
                <div class="row">
                    <div class="tweleve columns">                        
                        <ul class="back-end-nav">
                            <li>
                                <a class="email_support" href="mailto:support@email.com?Subject=Hello%20again" 
                                            onmouseover="roll('email_support', 'images/ICON_mail_hov.png')"
                                            onmouseout="roll('email_support', 'images/ICON_mail.png')">
                                    <img id="email_support" src="images/ICON_mail.png" name="email_support" alt="Email Icon">
                                    <span class="link-text">Support@email.com</span>
                                </a>                            
                            </li>
                            
                            <li>
                                <a class="phone_us" href="tel:09213456789" 
                                            onmouseover="roll('phone_us', 'images/ICON_phone_hov.png')"
                                            onmouseout="roll('phone_us', 'images/ICON_phone.png')">
                                    <img id="phone_us" src="images/ICON_phone.png" name="phone_us" alt="Phone Icon">
                                    <span class="link-text">Phone: 09 213 456789</span>
                                </a>                            
                            </li>
                            
                            <li>
                                <a class="secure_login" href="#" 
                                            onmouseover="roll('secure_login', 'images/ICON_lock_hov.png')"
                                            onmouseout="roll('secure_login', 'images/ICON_lock.png')">
                                    <img id="secure_login" src="images/ICON_lock.png" name="secure_login" alt="Lock Icon">
                                    <span class="link-text">Login</span>
                                </a>                            
                            </li>
                            
                            <li>
                                <a class="sign_up" href="#" 
                                            onmouseover="roll('sign_up', 'images/ICON_people_hov.png')"
                                            onmouseout="roll('sign_up', 'images/ICON_people.png')">
                                    <img id="sign_up" src="images/ICON_people.png" name="sign_up" alt="Sign Up Icon">
                                    <span class="link-text">Sign Up</span>
                                </a>                            
                            </li>
                        </ul>
                    </div>
                </div><!--end of .row-->
            </div><!--end .container-->
        </div><!--end .wrapper-->
        
        <!-- --- H E A D E R --- -->
        <div class="wrapper header">
            <div class="container">
                <div class="row">                   
                    <div class="logo-container">
                        <a class="logo" href="index.php" 
                                    onmouseover="roll('logo', 'images/logo_hov.png')"
                                    onmouseout="roll('logo', 'images/logo.png')">
                            <img id="logo" src="images/logo.png" name="logo" alt="Main Logo">
                        </a>                        
                    </div>
                     
                    <!-- --- M A I N  S I T E  N A V I G A T I O N --- -->
                    <nav id="nav">    
                        <ul class="">
                            <li><a href="#">HOME</a></li>
                            <li><a href="#">PORTFOLIO</a></li>
                            <li><a href="#">BLOG</a></li>
                            <li><a href="#">PAGES</a></li>
                            <li><a href="#">CONTACT</a></li>
                        </ul>
                    </nav>
                    <div class="clear"></div>                   
                    
                    <!-- --- M O B I L E  N A V I G A T I O N --- -->
                    <a id="simple-menu" href="#sidr"><button class="hamburger">&#9776;</button></a>

                    <div id="sidr" class="mobile-nav">
                      <img class="mob-nav-logo" src="images/logo.png">
                      <ul>
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">PORTFOLIO</a></li>
                        <li><a href="#">BLOG</a></li>
                        <li><a href="#">PAGES</a></li>
                        <li><a href="#">CONTACT</a></li>
                      </ul>
                    </div>
                                       
                </div><!--end of .row-->
            </div><!--end .container-->
        </div><!--end .wrapper-->

        <!-- --- S L I D E R --- -->
        <div class="wrapper slider">
            <div class="container">
                <div class="row">
                    <div class="number columns">
                            <!--Slider plugin goes here, currently using staic image as placeholder-->
                    </div>
                </div><!--end of .row-->
            </div><!--end .container-->
        </div><!--end .wrapper-->
        
        <!-- --- F E A T U R E S  L I S T --- -->
        <div class="wrapper features-info">
            <div class="container">
                <div class="row">
                    <div class="four columns">
                        <img class="ipad" src="images/iPad.png">
                    </div>
                    
                    <div class="eight columns">
                        <h4>FEATURES</h4>
                        <ul class="features-list">
                            <li>
                                <div class="one column icon-container">
                                    <a class="icon_flag" href="#" 
                                                onmouseover="roll('icon_flag', 'images/ICON_flag_hov.png')"
                                                onmouseout="roll('icon_flag', 'images/ICON_flag.png')">
                                        <img id="icon_flag" src="images/ICON_flag.png" name="icon_flag" alt="Flag Icon">
                                    </a>
                                </div>
                                <div class="eleven columns info-container">
                                    <h6>HEADING ONE</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quid igitur, inquit, eos responsuros putas?</p>
                                </div>
                            </li>
                            
                            <li>
                                <div class="one column icon-container">
                                    <a class="icon_crop" href="#" 
                                                onmouseover="roll('icon_crop', 'images/ICON_crop_hov.png')"
                                                onmouseout="roll('icon_crop', 'images/ICON_crop.png')">
                                        <img id="icon_crop" src="images/ICON_crop.png" name="icon_crop" alt="Crop Icon">
                                    </a>
                                </div>
                                <div class="eleven columns info-container">
                                    <h6>HEADING TWO</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quid igitur, inquit, eos responsuros putas?</p>
                                </div>
                            </li>
                            
                            <li>
                                <div class="one column icon-container">
                                    <a class="icon_twitter" href="#" 
                                                onmouseover="roll('icon_twitter', 'images/ICON_twitter_hov.png')"
                                                onmouseout="roll('icon_twitter', 'images/ICON_twitter.png')">
                                        <img id="icon_twitter" src="images/ICON_twitter.png" name="icon_twitter" alt="Crop Icon">
                                    </a>
                                </div>
                                <div class="eleven columns info-container">
                                    <h6>HEADING THREE</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quid igitur, inquit, eos responsuros putas?</p>
                                </div>
                            </li>
                            
                            <li>
                                <div class="one column icon-container">
                                    <a class="icon_devices" href="#"
                                                onmouseover="roll('icon_devices', 'images/ICON_devices_hov.png')"
                                                onmouseout="roll('icon_devices', 'images/ICON_devices.png')">
                                        <img id="icon_devices" src="images/ICON_devices.png" name="icon_devices" alt="Devices Icon">
                                    </a>
                                </div>
                                <div class="eleven columns info-container">
                                    <h6>HEADING FOUR</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quid igitur, inquit, eos responsuros putas?</p>
                                </div>                                
                            </li>
                            
                            <!--P U R C H A S E  B U T T O N -->
                            <li><button class="buy-now">PURCHASE NOW</button></li>
                        </ul>                        
                    </div>
                </div><!--end of .row-->
            </div><!--end .container-->
        </div><!--end .wrapper-->
        
        <!-- --- F E A T U R E  O P T I O N S --- -->
        <div class="wrapper feature-boxes">
            <div class="container">
                <div class="row">
                    <!-- --- F E A T U R E  O N E --- -->
                    <div class="six columns">
                        <ul class="features-options">
                            <li>
                                <div class="one column icon-container">                                    
                                    <a class="icon_burgermenu" href="#" 
                                                onmouseover="roll('icon_burgermenu', 'images/ICON_burgermenu_hov.png')"
                                                onmouseout="roll('icon_burgermenu', 'images/ICON_burgermenu.png')">
                                        <img id="icon_burgermenu" src="images/ICON_burgermenu.png" name="icon_burgermenu" alt="Burger Menu Icon">
                                    </a>                                    
                                </div>
                                <div class="eleven columns info-container">
                                    <h3>FEATURE ONE</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quid igitur, inquit, eos responsuros putas? Facit enim ille duo seiuncta ultima bonorum, quae ut essent vera, coniungi debuerunt; Tria genera bonorum; Qua igitur re ab deo vincitur, si aeternitate non vincitur? Restincta enim sitis stabilitatem voluptatis habet, inquit, illa autem voluptas ipsius restinctionis in motu est. Duo Reges: constructio interrete.</p>
                                </div>                                
                                <div class="clear"></div>                                
                            </li>                                                                   
                        </ul>                        
                    </div>
                    <!-- --- F E A T U R E  T W O --- -->
                    <div class="six columns">
                        <ul class="features-options">                         
                            <li>
                                <div class="one column icon-container">                                    
                                    <a class="icon_download" href="#"
                                                onmouseover="roll('icon_download', 'images/ICON_download_hov.png')"
                                                onmouseout="roll('icon_download', 'images/ICON_download.png')">
                                        <img id="icon_download" src="images/ICON_download.png" name="icon_download" alt="Download Icon">
                                    </a>                                    
                                </div>
                                <div class="eleven columns info-container">
                                    <h3>FEATURE TWO</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quid igitur, inquit, eos responsuros putas? Facit enim ille duo seiuncta ultima bonorum, quae ut essent vera, coniungi debuerunt; Tria genera bonorum; Qua igitur re ab deo vincitur, si aeternitate non vincitur? Restincta enim sitis stabilitatem voluptatis habet, inquit, illa autem voluptas ipsius restinctionis in motu est. Duo Reges: constructio interrete.</p>
                                </div>                                
                                <div class="clear"></div>
                            </li>                        
                        </ul>                        
                    </div>                                
                </div><!--end of .row-->
            </div><!--end .container-->
        </div><!--end .wrapper-->
        
        <!-- --- W H A T  W E  O F F E R --- -->     
        <div class="wrapper what-we-offer">
            <div class="container">
                <div class="row section-title">
                    <h3>WHAT WE OFFER</h3>
                    <hr/>
                </div>
                
                <div class="row">
                    <ul class="what-we-offer-options">
                        <!-- --- H E A D I N G  O N E --- -->
                        <li class="four columns">
                            <div class="two columns icon-container">
                                <a class="icon_pen" href="#"
                                            onmouseover="roll('icon_pen', 'images/ICON_pen_hov.png')"
                                            onmouseout="roll('icon_pen', 'images/ICON_pen.png')">
                                    <img id="icon_pen" src="images/ICON_pen.png" name="icon_pen" alt="Pen Icon">
                                </a> 
                            </div>
                            <div class="ten columns info-container">
                                <h3>HEADING ONE</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Restincta enim sitis stabilitatem voluptatis habet. Duo Reges: constructio interrete.</p>
                            </div>                                
                            <div class="clear"></div>                    
                        </li>
                        
                        <!-- --- H E A D I N G  T W O --- -->
                        <li class="four columns">
                            <div class="two columns icon-container">
                                <a class="icon_world" href="#"
                                            onmouseover="roll('icon_world', 'images/ICON_world_hov.png')"
                                            onmouseout="roll('icon_world', 'images/ICON_world.png')">
                                    <img id="icon_world" src="images/ICON_world.png" name="icon_world" alt="World Icon">
                                </a> 
                            </div>
                            <div class="ten columns info-container">
                                <h3>HEADING TWO</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Restincta enim sitis stabilitatem voluptatis habet. Duo Reges: constructio interrete.</p>
                            </div>                                
                            <div class="clear"></div>                    
                        </li>
                        
                        <!-- --- H E A D I N G  T H R E E --- -->
                        <li class="four columns">
                            <div class="two columns icon-container">
                                <a class="icon_connect" href="#"
                                            onmouseover="roll('icon_connect', 'images/ICON_connect_hov.png')"
                                            onmouseout="roll('icon_connect', 'images/ICON_connect.png')">
                                    <img id="icon_connect" src="images/ICON_connect.png" name="icon_connect" alt="Connect Icon">
                                </a>
                            </div>
                            <div class="ten columns info-container">
                                <h3>HEADING THREE</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Restincta enim sitis stabilitatem voluptatis habet. Duo Reges: constructio interrete.</p>
                            </div>                            
                            <div class="clear"></div>                    
                        </li>
                    </ul>
                </div><!--end of .row-->      
                
                <div class="row">
                    <ul class="what-we-offer-options">
                        <!-- --- H E A D I N G  F O U R --- -->
                        <li class="four columns">
                            <div class="two columns icon-container">
                                <a class="icon_crop2" href="#"
                                            onmouseover="roll('icon_crop2', 'images/ICON_crop_hov.png')"
                                            onmouseout="roll('icon_crop2', 'images/ICON_crop.png')">
                                    <img id="icon_crop2" src="images/ICON_crop.png" name="icon_crop2" alt="Crop Icon">
                                </a>
                            </div>
                            <div class="ten columns info-container">
                                <h3>HEADING FOUR</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Restincta enim sitis stabilitatem voluptatis habet. Duo Reges: constructio interrete.</p>
                            </div>
                            <div class="clear"></div>                    
                        </li>
                        
                        <!-- --- H E A D I N G  F I F E --- -->
                        <li class="four columns">
                            <div class="two columns icon-container">
                                <a class="icon_twitter2" href="#" 
                                            onmouseover="roll('icon_twitter2', 'images/ICON_twitter_hov.png')"
                                            onmouseout="roll('icon_twitter2', 'images/ICON_twitter.png')">
                                    <img id="icon_twitter2" src="images/ICON_twitter.png" name="icon_twitter2" alt="Twitter Icon">
                                </a>
                            </div>
                            <div class="ten columns info-container">
                                <h3>HEADING FIVE</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Restincta enim sitis stabilitatem voluptatis habet. Duo Reges: constructio interrete.</p>
                            </div>                            
                            <div class="clear"></div>                    
                        </li>
                        
                        <!-- --- H E A D I N G  S I X --- -->
                        <li class="four columns">
                            <div class="two columns icon-container">
                                <a class="icon_flag2" href="#"
                                            onmouseover="roll('icon_flag2', 'images/ICON_flag_hov.png')"
                                            onmouseout="roll('icon_flag2', 'images/ICON_flag.png')">
                                    <img id="icon_flag2" src="images/ICON_flag.png" name="icon_flag2" alt="Flag Icon">
                                </a>
                            </div>
                            <div class="ten columns info-container">
                                <h3>HEADING SIX</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Restincta enim sitis stabilitatem voluptatis habet. Duo Reges: constructio interrete.</p>
                            </div>
                            
                            <div class="clear"></div>                    
                        </li>
                    </ul>
                </div><!--end of .row-->
             </div><!--end .container-->
        </div><!--end .wrapper-->
        
        <!-- --- O U R  T E A M --- -->
        <div class="wrapper our-team">
            <div class="container">
                <div class="row section-title">
                    <h3>OUR TEAM</h3>
                    <hr/>
                    
                    <ul class="staff-list">
                        <!-- --- M E M B E R  O N E --- -->
                        <li class="three columns staff-list-item">                            
                            <div class="hover01 hover02 column">
                                <div>
                                    <figure><img class="staff-photo" src="images/staff.jpg"></figure>
                                    <span>Hover</span>
                                </div>                              
                            </div>
                            <h3>NAME</h3>
                            <h4>Manager</h4>
                            <p>Lorem ipsum dolor sit, consectetur adipiscing elit. Quid igitur, inquit, eos responsuros putas? Facit enim ille duo seiuncta ultima bonorum, quae ut essent</p>
                            <span class="staff-social-link facebook_link" 
                                        onmouseover="roll('facebook_link', 'images/LINK_facebook_hov.png')"
                                        onmouseout="roll('facebook_link', 'images/LINK_facebook.png')">
                                <a href="http://www.facebook.com" target="_blank"><img id="facebook_link" src="images/LINK_facebook.png" name="facebook_link" alt="Facebook Icon"></a>
                            </span>
                            
                            <span class="staff-social-link twitter_link" 
                                        onmouseover="roll('twitter_link', 'images/LINK_twitter_hov.png')"
                                        onmouseout="roll('twitter_link', 'images/LINK_twitter.png')">
                                <a href="http://www.twitter.com" target="_blank"><img id="twitter_link" src="images/LINK_twitter.png" name="twitter_link" alt="Twitter Icon"></a>
                            </span>
                            
                            <span class="staff-social-link google_link" 
                                        onmouseover="roll('google_link', 'images/LINK_google_hov.png')"
                                        onmouseout="roll('google_link', 'images/LINK_google.png')">
                                <a href="http://www.google.com" target="_blank"><img id="google_link" src="images/LINK_google.png" name="google_link" alt="Google Icon"></a>
                            </span>
                        </li>
                        
                        <!-- --- M E M B E R  T W O --- -->
                        <li class="three columns staff-list-item">                         
                            <div class="hover01 hover02 column">
                                <div>
                                    <figure><img class="staff-photo" src="images/staff.jpg"></figure>
                                    <span>Hover</span>
                                </div>                              
                            </div>
                            <h3>NAME</h3>
                            <h4>Manager</h4>
                            <p>Lorem ipsum dolor sit, consectetur adipiscing elit. Quid igitur, inquit, eos responsuros putas? Facit enim ille duo seiuncta ultima bonorum, quae ut essent</p>
                            
                            <!-- --- M E M E B E R S  S O C I A L  L I N K S -- -->
                            <span class="staff-social-link facebook_link2" 
                                        onmouseover="roll('facebook_link2', 'images/LINK_facebook_hov.png')"
                                        onmouseout="roll('facebook_link2', 'images/LINK_facebook.png')">
                                <a href="http://www.facebook.com" target="_blank"><img id="facebook_link2" src="images/LINK_facebook.png" name="facebook_link2" alt="Facebook Icon"></a>
                            </span>
                            
                            <span class="staff-social-link twitter_link2" 
                                        onmouseover="roll('twitter_link2', 'images/LINK_twitter_hov.png')"
                                        onmouseout="roll('twitter_link2', 'images/LINK_twitter.png')">
                                <a href="http://www.twitter.com" target="_blank"><img id="twitter_link2" src="images/LINK_twitter.png" name="twitter_link2" alt="Twitter Icon"></a>
                            </span>
                            
                            <span class="staff-social-link google_link2" 
                                        onmouseover="roll('google_link2', 'images/LINK_google_hov.png')"
                                        onmouseout="roll('google_link2', 'images/LINK_google.png')">
                                <a href="http://www.google.com" target="_blank"><img id="google_link2" src="images/LINK_google.png" name="google_link2" alt="Google Icon"></a>
                            </span>
                        </li>
                        
                        <!-- --- M E M B E R  T H R E E --- -->
                        <li class="three columns staff-list-item">                            
                            <div class="hover01 hover02 column">
                                <div>
                                    <figure><img class="staff-photo" src="images/staff.jpg"></figure>
                                    <span>Hover</span>
                                </div>                              
                            </div>
                            <h3>NAME</h3>
                            <h4>Manager</h4>
                            <p>Lorem ipsum dolor sit, consectetur adipiscing elit. Quid igitur, inquit, eos responsuros putas? Facit enim ille duo seiuncta ultima bonorum, quae ut essent</p>
                            
                            <!-- --- M E M E B E R S  S O C I A L  L I N K S -- -->
                            <span class="staff-social-link facebook_link3" 
                                        onmouseover="roll('facebook_link3', 'images/LINK_facebook_hov.png')"
                                        onmouseout="roll('facebook_link3', 'images/LINK_facebook.png')">
                                <a href="http://www.facebook.com" target="_blank"><img id="facebook_link3" src="images/LINK_facebook.png" name="facebook_link3" alt="Facebook Icon"></a>
                            </span>
                            
                            <span class="staff-social-link twitter_link3" 
                                        onmouseover="roll('twitter_link3', 'images/LINK_twitter_hov.png')"
                                        onmouseout="roll('twitter_link3', 'images/LINK_twitter.png')">
                                <a href="http://www.twitter.com" target="_blank"><img id="twitter_link3" src="images/LINK_twitter.png" name="twitter_link3" alt="Twitter Icon"></a>
                            </span>
                            
                            <span class="staff-social-link google_link3" 
                                        onmouseover="roll('google_link3', 'images/LINK_google_hov.png')"
                                        onmouseout="roll('google_link3', 'images/LINK_google.png')">
                                <a href="http://www.google.com" target="_blank"><img id="google_link3" src="images/LINK_google.png" name="google_link3" alt="Google Icon"></a>
                            </span>  
                        </li>
                        
                        <!-- --- M E M B E R  F O U R --- -->
                        <li class="three columns staff-list-item">                            
                            <div class="hover01 hover02 column">
                                <div>
                                    <figure><img class="staff-photo" src="images/staff.jpg"></figure>
                                    <span>Hover</span>
                                </div>                              
                            </div>
                            <h3>NAME</h3>
                            <h4>Manager</h4>
                            <p>Lorem ipsum dolor sit, consectetur adipiscing elit. Quid igitur, inquit, eos responsuros putas? Facit enim ille duo seiuncta ultima bonorum, quae ut essent</p>
                            
                            <!-- --- M E M E B E R S  S O C I A L  L I N K S -- -->
                            <span class="staff-social-link facebook_link4" 
                                        onmouseover="roll('facebook_link4', 'images/LINK_facebook_hov.png')"
                                        onmouseout="roll('facebook_link4', 'images/LINK_facebook.png')">
                                <a href="http://www.facebook.com" target="_blank"><img id="facebook_link4" src="images/LINK_facebook.png" name="facebook_link4" alt="Facebook Icon"></a>
                            </span>
                            
                            <span class="staff-social-link twitter_link4" 
                                        onmouseover="roll('twitter_link4', 'images/LINK_twitter_hov.png')"
                                        onmouseout="roll('twitter_link4', 'images/LINK_twitter.png')">
                                <a href="http://www.twitter.com" target="_blank"><img id="twitter_link4" src="images/LINK_twitter.png" name="twitter_link4" alt="Twitter Icon"></a>
                            </span>
                            
                            <span class="staff-social-link google_link4" 
                                        onmouseover="roll('google_link4', 'images/LINK_google_hov.png')"
                                        onmouseout="roll('google_link4', 'images/LINK_google.png')">
                                <a href="http://www.google.com" target="_blank"><img id="google_link4" src="images/LINK_google.png" name="google_link4" alt="Google Icon"></a>
                            </span>   
                        </li>
                    </ul>
                </div><!--end .row-->
            </div><!--end .container-->
        </div><!--end .wrapper-->
        
        <!-- --- F O O T E R --- -->
        <div class="wrapper footer">
            <div class="container">
                <div class="row">
                    
                    <!-- --- A B O U T --- -->
                    <div class="three columns">
                        <h3>ABOUT US</h3>
                        <p>Lorem ipsum dolor sit, consectetur adipiscing elit. Quid igitur, inquit, eos responsuros putas? Facit enim ille duo seiuncta ultima bonorum, quae ut essent</p>
                        
                        <!-- --- F I R E  &  C O  S O C I A L  L I N K S -- -->
                        <span class="social-link social_facebook" 
                                    onmouseover="roll('social_facebook', 'images/SOCIAL_facebook_hov.png')"
                                    onmouseout="roll('social_facebook', 'images/SOCIAL_facebook.png')">
                            <a href="http://www.facebook.com" target="_blank"><img id="social_facebook" src="images/SOCIAL_facebook.png" name="social_facebook" alt="Facebook Logo"></a>
                        </span>
                        
                        <span class="staff-social-link social_twitter" 
                                    onmouseover="roll('social_twitter', 'images/SOCIAL_twitter_hov.png')"
                                    onmouseout="roll('social_twitter', 'images/SOCIAL_twitter.png')">
                            <a href="http://www.twitter.com" target="_blank"><img id="social_twitter" src="images/SOCIAL_twitter.png" name="social_twitter" alt="Twitter Logo"></a>
                        </span>
                        
                        <span class="staff-social-link social_google" 
                                    onmouseover="roll('social_google', 'images/SOCIAL_google_hov.png')"
                                    onmouseout="roll('social_google', 'images/SOCIAL_google.png')">
                            <a href="http://www.google.com" target="_blank"><img id="social_google" src="images/SOCIAL_google.png" name="social_google" alt="Google Logo"></a>
                        </span>
                        
                        <span class="staff-social-link social_linkedin" 
                                    onmouseover="roll('social_linkedin', 'images/SOCIAL_linkedin_hov.png')"
                                    onmouseout="roll('social_linkedin', 'images/SOCIAL_linkedin.png')">
                            <a href="http://www.google.com" target="_blank"><img id="social_linkedin" src="images/SOCIAL_linkedin.png" name="social_linkedin" alt="LinkedIn Logo"></a>
                        </span>  
                    </div>
                    
                    <!-- --- C O N T A C T --- -->
                    <div  class="three columns">
                        <h3>CONTACT</h3>
                        <ul>
                            <li>Address: 123 Bark Place</li>
                            <li>
                                <a class="email-link" href="mailto:info@fireco.nz?Subject=Hello%20again" target="_blank">Email: info@fireco.nz</a>
                            </li>
                            <li>
                                <a class="phone-link" href="tel:09213456789">Phone: 09 213 456789</a>
                            </li>
                            <li>
                                <a class="fax-link" href="fax:09213645211">Fax: 09 213 645211</a>
                                
                            </li>
                        </ul>
                    </div>
                    
                    <!-- --- F E A T U R E D / B L O G G  A R T I C L E S --- -->        
                    <div  class="three columns">
                        <h3>FEATURED</h3>
                        <ul class="blogg-links">                         
                            <li>                    
                                <div class="two columns img-box hover03">
                                    <a href="#"><span><img class="article-link" src="images/image_block.png"></span></a>
                                </div>
                                <div class="ten columns info-container">
                                    <h6>Example 1</h6>
                                    <p>June 24 2016</p>
                                </div>
                                <div class="clear"></div>  
                            </li>
                            
                            <li>
                                <div class="two columns img-box hover03">
                                    <a href="#"><span><img class="article-link" src="images/image_block.png"></span></a>
                                </div>
                                <div class="ten columns info-container">
                                    <h6>Example 2</h6>
                                    <p>June 24 2016</p>
                                </div>
                                <div class="clear"></div>  
                            </li>
                            
                            <li>
                                <div class="two columns img-box hover03">
                                    <a href="#"><span><img class="article-link" src="images/image_block.png"></span></a>
                                </div>
                                <div class="ten columns info-container">
                                    <h6>Example 3</h6>
                                    <p>June 24 2016</p>
                                </div>
                                <div class="clear"></div>  
                            </li> 
                        </ul> 
                    </div>
                    
                    <!-- --- N E W S L E T T E R --- -->
                    <div  class="three columns">
                        <h3>NEWSLETTER</h3>
                        <p>Lorem ipsum dolor sit, consectetur adipiscing elit. Quid igitur, inquit, eos responsuros putas? Facit enim ille duo seiuncta ultima bonorum, quae ut essent</p>                            
                        <form class="subscribe-form">
                            <div class="row">
                                <div class="ten columns">                                    
                                    <input class="u-full-width form-input" type="email" placeholder="Enter email to subscribe" id="exampleEmailInput">
                                </div>
                                <div class="two columns">
                                  
                                   <input class="button-primary submit-btn" type="submit" value="SIGN UP">
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!--end of .row-->
            </div><!--end .container-->
        </div><!--end .wrapper-->
        
        <!-- --- C O P Y R I G H T --- -->
        <div class="wrapper copyright">
            <div class="container">
                <div class="row">
                    <div class="tweleve columns">
                    <h3>&copy; 2016 Copyright Fire & Co</h3>
                    </div>
                </div><!--end of .row-->
            </div><!--end .container-->
        </div><!--end .wrapper-->
    
    </div><!--end .site-wrap  --> 
    <!-- End Document
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <script>
        $('#simple-menu').sidr({
            side: 'left',
            timing: 'ease-in-out',
            speed: 500,
            displace: false
          });
    </script>
    <script src="js/myscripts.js"></script>

    </body>
</html>
