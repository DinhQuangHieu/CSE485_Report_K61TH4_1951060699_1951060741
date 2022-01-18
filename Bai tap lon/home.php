<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/linkedin_web.css">

    <title>Linkedin</title>
</head>
<body>
    <!-- Navigation Bar -->
    <nav id="top-nav">
        <a href="#" class="nav-links" id="nav-logo">Linkedln</a>
        <div id="nav-left-btns">
            <a href="signup.html" class="nav-links" id="join-btn" >
                Join now
            </a>
            <a href="login.php" class="nav-links" id="signin-btn">
                Sign in
            </a>
        </div>
    </nav>

    <!-- First: Landing Page -->
    <section id="landingpage">

        <!-- Welcome Text -->
        <div id="welcome-text">
            <p>Welcome to your professional community</p>
        </div>

        <!-- Signing Form -->
        <form id="signing-form">
            <input type="text" name="name" id="name" placeholder="Enter your Name">
            <input type="password" name="password" id="password" placeholder="Password">
            <a href="#" id="signing-form-forgot">Forgot Password?</a>
            <a href="#" id="signing-form-signing">Sign in</a>
            <p>-------------------or------------------</p>
            <a href="#" id="signing-form-google">Sign in with Google</a>
        </form>

        <img id="hero" src="Images/linkedin_hero.svg" alt="linkedin nigga">
    
    </section>

    <!--Second: Categories (grey part)  -->
    <section id="categories">
        <div id="categories-container">
            <!-- Left Text -->
            <div id="categories-left">Find the right job or internship for you</div>
            
            <!-- Suggested Searches -->
            <div id="categories-right">
                <p>SUGGESTED SEARCHES</p>
                <div id="categories-searches-container">
                    <a href="#" class="fields">Engineering</a>
                    <a href="#" class="fields">Business Development</a>
                    <a href="#" class="fields">Finance</a>
                    <a href="#" class="fields">Administrative Assistant</a>
                    <a href="#" class="fields">Retail Associate</a>
                    <a href="#" class="fields">Customer Service</a>
                    <a href="#" class="fields">Operations</a>
                    <a href="#" class="fields">Information Technology</a>
                    <a href="#" class="fields">Marketing</a>
                    <a href="#" class="fields">Human Resources</a>
                </div>
            </div>
        </div>

    </section>

    <!-- Third: Post a job -->
    <section id="postjob">
        <div id="postjob-container">
            <div id="postjob-text">Post your job for millions of people to see</div>
            <div id="postjob-btn-container"><a href="#">Post a job</a></div>
        </div>
    </section>

    <!-- Fourth: Carousel -->
    <section id="carousel">
        <div id="carousel-content">
            <nav id="carousel-nav">
                <a href="#">< Previous</a><a href="#">Next ></a>
            </nav>
            <div id="carousel-div">
                <div id="carousel-text">
                    <h3>Let the right people know you’re open to work</h3>
                    <p>With the Open To Work feature, you can privately tell recruiters or publicly share with the LinkedIn community that you are looking for new job opportunities</p>
                </div>
                <div id="carousel-img">
                    <img src="Images/Ảnh 1.png" alt="demo img">
                </div>
            </div>
        </div>
    </section>

    <!-- Fifth: Learning Skills -->
    <section id="learning">
        <div id="learning-container">
            <div class="learning-content">

                <div class="learning-img">
                    <img src="Images/learning_left.png" alt="learning-left">
                </div>

                <div class="new">
                    <div class="learning-text">
                        <p>Connect with people who can help</p>
                    </div>
                    
                    <div id="learning-link-left">
                        <a href="#">Find people you know</a>
                    </div>
                </div>
            
            </div>
            <div class="learning-content">

                <div class="learning-img">
                    <img src="Images/learning_right.png" alt="learning-right">
                </div>

                <div class="new">
                    <div class="learning-text">
                        <p id="right-p">Learn the skills you need to succeed</p>
                    </div>
                    
                    <div id="learning-link-right">
                        <!-- <label for="learning-topics">Choose a topic to learn about</label> -->
                        <select name="topics" id="learning-topics">
                            <option value="default">Choose a topic to learn about</option>
                            <option value="C++">C++</option>
                            <option value="java">Java</option>
                            <option value="html">HTML</option>
                            <option value="react">React</option>
                            <option value="python">Python</option>
                        </select>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Sixth: YouTube link -->
    <section id="youtube">
        <div id="youtube-container">
            <div id="yt-left">
                <!-- <iframe width="550" height="350" src="https://www.youtube.com/embed/tgbNymZ7vqY?playlist=tgbNymZ7vqY&loop=1" frameborder="0" ></iframe> -->
                <iframe width="560" height="375" src="https://www.youtube.com/embed/IlYUUN8rL_Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div id="yt-right">
                <h3>In it to chase my dream</h3>
                <p>Check out Gayatri's story of finding a new job on LinkedIn</p>
            </div>
        </div>
    </section>

    <!-- Seventh: Join -->
    <section id="join">
        <div id="join-container">
            <p>Join your colleagues, classmates, and friends on LinkedIn.</p>
            <button id="joinbtn">Get Started</button>
        </div>
        <img src="Images/background_join.png" alt="">
    </section>

    <!-- Eight: Links -->
    <section id="links">
        <div id="links-container">
            <!-- Logo -->
            <div id="logo-div">
                <p>Linkedln</p>
            </div>

            <div id="links-blocks">

                <!-- General -->
                <div id="general">
                    <p>General</p>
                    <a class="linked" href="#">Sign up</a><a href="#">Help Center</a><a href="#">About</a><a href="#">Press</a><a href="#">Blog</a><a href="#">Careers</a><a href="#">Development</a>
                </div>

                <!-- Browse Linkedln -->
                <div id="browse">
                    <p>Browse LinkedIn</p>
                    <a href="#">Learning</a><a href="#">Jobs</a><a href="#">Salary</a><a href="#">Mobile</a><a href="#">Services</a>
                </div>

                <!-- Business Solutions -->
                <div id="business">
                    <p>Business Solutions</p>
                    <a href="#">Talent</a><a href="#">Marketing</a><a href="#">Sales</a><a href="#">Learning</a>
                </div>

                <!-- Directories -->
                <div id="directories">
                    <p>Directories</p>
                    <a href="#">Members</a><a href="#">Jobs</a><a href="#">Companies</a><a href="#">Salaries</a><a href="#">Featured</a><a href="#">Learning</a><a href="#">Posts</a><a href="#">Articles</a><a href="#">Schools</a><a href="#">News</a><a href="#">News Letters</a><a href="#">Services</a><a href="#">Interview Prep</a><a href="#">Products</a>
                </div>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div id="footer-container">
            <p class="foot" style="color: black;">LinkedIn &copy; 2021</p>
            <a href="#" class="foot">About</a>
            <a href="#" class="foot">Accessibility</a>
            <a href="#" class="foot">User Agreement</a>
            <a href="#" class="foot">Privacy Policy</a>
            <a href="#" class="foot">Cookie Policy</a>
            <a href="#" class="foot">Copywright Policy</a>
            <a href="#" class="foot">Brand Policy</a>
            <a href="#" class="foot">Guest Control</a>
            <a href="#" class="foot">Community Guiderlines</a>
            <a href="#" class="foot">Language</a>
        </div>
    </footer>


</body>
</html> 