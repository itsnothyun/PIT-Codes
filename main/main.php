<?php
session_start();

// Handle logout request
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}

$user_fullname = $_SESSION['user_fullname'] ?? 'Signup';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Shop - About Our Beans</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css2?family=Finger+Paint&family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <nav class="custom-navbar">
            <div class="navbar-header">
                <img src="Logo_Designs.png" class="logo" alt="Logo">
            </div>
            <ul class="navbar-nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">Menu</a></li>
                <li><a href="#">Deliver</a></li>
                <li><a href="#">About</a></li>
                <li>
                    <?php if ($user_fullname === 'Signup'): ?>
                        <a href="login.php">Signup</a>
                    <?php else: ?>
                        <div class="dropdown">
                            <span class="dropbtn" onclick="toggleDropdown()"> <!-- Add onclick event -->
                                <?php echo htmlspecialchars($user_fullname); ?> &#9662;
                            </span>
                            <div class="dropdown-content" id="dropdownContent"> <!-- Add an id to the dropdown content -->
                                <a href="?logout=true">Logout</a>
                            </div>
                        </div>
                    <?php endif; ?>
                </li>
            </ul>
        </nav>
    </div>

    <div class="content-container">
        <div class="cup-mockup-container text-center">
            <img src="Cup Mockup.png" alt="Cup Mockup" class="cup-mockup">
            <div class="about_coffee">
                <h2 class="a">Syntax.sip</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tincidunt, 
                    urna sed sodales vestibulum, mauris est dictum sapien, in hendrerit nibh
                    nulla vitae orci. Maecenas ut libero a erat mollis ultrices non sed diam.</p>
                <a href="#" class="btn btn-warning mt-3" id="products-btn">Products</a>
            </div>
        </div>
    </div>

    <div class="popular-container" id="popular-section">
        <div class="popular-text">
            <h2>Popular Today</h2>
            <p>Savor every sip of our rich, aromatic coffee and every bite of our fresh, artisan bread.
                Refresh your day with our selection of invigorating drinks!</p>
            <p>Delicious Choices, Unforgettable Flavors!</p>
        </div>
        <div class="popular-menu">
            <div class="a-menu">
                <a href="your_link_here">
                    <p class="coffee-text">Syntax Kremy Latte</p>
                    <p class="price-text">190₱</p>
                    <img src="Rectangle 64.png" alt="" class="price-image">
                    <img src="Rectangle 37.png" alt="Rectangle" class="rectangle-image">
                    <img src="Coffee.png" alt="Coffee" class="coffee-image">
                </a>
            </div>
            <div class="a-menu">
                <a href="your_link_here">
                    <p class="coctail-text">Hibiscus Tea</p>
                    <p class="price-text">185₱</p>
                    <img src="Rectangle 64.png" alt="" class="price-image">
                    <img src="Rectangle 37.png" alt="Rectangle" class="rectangle-image">
                    <img src="Red Cocktail.png" alt="Red Cocktail" class="coctail-image">
                </a>
            </div>
            <div class="a-menu">
                <a href="your_link_here">
                    <p class="crossaint-text">Crossaints</p>
                    <p class="price-text">200₱</p>
                    <img src="Rectangle 64.png" alt="" class="price-image">
                    <img src="Rectangle 37.png" alt="Rectangle" class="rectangle-image">
                    <img src="Croissant.png" alt="Croissant" class="crossaint-image">
                </a>
            </div>
            <div class="a-menu">
                <a href="your_link_here">
                    <h2 class="cake-text">Strawberry</h2>
                    <p class="cake-text">Fudge Cake</p>
                    <p class="price-text">699₱</p>
                    <img src="Rectangle 64.png" alt="" class="price-image">
                    <img src="Rectangle 37.png" alt="Rectangle" class="rectangle-image">
                    <img src="Strawberry Cake.png" alt="Strawberry Cake" class="cake-image">
                </a>
            </div>
            <div class="a-menu">
                <a href="your_link_here">
                    <p class="beans-text">Beans</p>
                    <p class="price-text">299₱</p>
                    <img src="Rectangle 64.png" alt="" class="price-image">
                    <img src="Rectangle 37.png" alt="Rectangle" class="rectangle-image">
                    <img src="Coffee Bag.png" alt="Beans" class="beans-image">
                </a>
            </div>
        </div>
    </div>

    <div class="prd-btn">
    <a href="#" class="btn btn-warning mt-3">View More</a>
    </div>

    <section id="about" class="d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-6 text-center text-md-left">
                    <h2>About</h2>
                    <h1>Our Beans</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tincidunt, urna sed sodales vestibulum, mauris est dictum sapien, in hendrerit nibh nulla vitae orci. Maecenas ut libero a erat mollis ultricies non sed diam.</p>
                    <a href="#" class="btn btn-warning mt-3">Order Now</a>
                </div>
                <div class="col-md-6 text-center">
                    <img src="beans mockup.png" alt="Roasted Beans" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- New Bestsellers Section -->
    <section id="bestsellers" class="d-flex align-items-center justify-content-center position-relative">
        <div class="oval-shape"></div>
        <div class="container text-center position-relative">
            <h2>Our Bestsellers</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tincidunt, urna sed sodales vestibulum, mauris est dictum sapien, in hendrerit nibh nulla vitae orci. Maecenas ut libero a erat mollis ultricies non sed diam.</p>
            <div class="whitespace-1"></div>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img src="latte.png" class="card-img-top" alt="Iced Caffe Latte">
                        <div class="card-body">
                            <h5 class="card-title">Iced Caffe Latte</h5>
                            <p class="card-text price">190 PHP</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="capuccino.png" class="card-img-top" alt="Pumpkin Spice Latte">
                        <div class="card-body">
                            <h5 class="card-title">Pumpkin Spice Latte</h5>
                            <p class="card-text price">190 PHP</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="matcha.png" class="card-img-top" alt="Iced Matcha">
                        <div class="card-body">
                            <h5 class="card-title">Iced Matcha</h5>
                            <p class="card-text price">190 PHP</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="frappe.png" class="card-img-top" alt="Syntax Kreme Latte">
                        <div class="card-body">
                            <h5 class="card-title">Syntax Kreme Latte</h5>
                            <p class="card-text price">190 PHP</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-3">
                    <div class="card">
                        <img src="matcha frappe.png" class="card-img-top" alt="Matcha Frappuccino">
                        <div class="card-body">
                            <h5 class="card-title">Matcha Frappuccino</h5>
                            <p class="card-text price">190 PHP</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="matcha.png" class="card-img-top" alt="Iced Matcha Latte">
                        <div class="card-body">
                            <h5 class="card-title">Iced Matcha Latte</h5>
                            <p class="card-text price">190 PHP</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="matcha cake.png" class="card-img-top" alt="Matcha Cake">
                        <div class="card-body">
                            <h5 class="card-title">Matcha Cake</h5>
                            <p class="card-text price">190 PHP</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="frappe.png" class="card-img-top" alt="Syntax Kreme Latte">
                        <div class="card-body">
                            <h5 class="card-title">Syntax Kreme Latte</h5>
                            <p class="card-text price">190 PHP</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="oval-shape-bottom"></div>    
    </section>
    <div class="whitespace"></div>

    <div class="join-container">
        <div class="text-content">
            <h2>Join our Crew</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tincidunt, urna sed sodales vestibulum, mauris est dictum sapien, in hendrerit nibh nulla vitae orci.</p>
            <a href="javascript:void(0)" class="join-button" onclick="openPopup(event)">Join</a>
        </div>
        <div class="image-content">
            <img src="barista.png" alt="Join our crew">
        </div>
    </div>

    <div class="whitespace"></div>

    <div id="popup" class="popup-overlay">
        <div class="popup-content">
            <span class="exit-button" onclick="closePopup()">&times;</span>
            <img src="logo.png" alt="Icon" class="popup-icon">
            <h2>Applying for a Position?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tincidunt, urna sed sodales vestibulum, mauris est dictum sapien, in hendrerit nibh nulla vitae orci.</p>
            <select id="position-select" onchange="showApplyButton()">
                <option value="" disabled selected>Select position</option>
                <option value="barista">Barista</option>
                <option value="cafe-attendant">Cafe Attendant</option>
                <option value="cafe-server">Cafe Server</option>
                <option value="cafe-worker">Cafe Worker</option>
                <option value="manager">Manager</option>
            </select>
            <div class="button-container">
                <button class="apply-button" onclick="openApplyPopup()">Apply</button>
                <button onclick="closePopup()" class="close-button">Close</button>
            </div>
        </div>
    </div>

    <div id="apply-popup" class="popup-overlay">
        <div class="popup-content-apply">
            <span class="exit-button" onclick="closePopup()">&times;</span>
            <div class="apply-left">
                <p>TODAY</p>
                <h1 id="position-title">Position Title</h1>
                <p id="position-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tincidunt, urna sed sodales vestibulum, mauris est dictum sapien, in hendrerit nibh nulla vitae orci.</p>
                <a href="javascript:void(0)" class="join-button" onclick="openApplicationForm()">Apply</a>
            </div>
            <div class="apply-right">
                <h2>Overview</h2>
                <p id="overview">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Praesent tristique magna sit amet purus gravida.</p>
                
                <h2>Skills Required</h2>
                <p id="skills-required">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Praesent tristique magna sit amet purus gravida.</p>
                
                <h2>What you will receive</h2>
                <p id="what-you-will-receive">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Praesent tristique magna sit amet purus gravida.</p>
            </div>
        </div>
    </div>

    <div id="application-form-popup" class="popup-overlay">
        <div class="popup-content-application">
            <span class="exit-button" onclick="closePopup()">&times;</span>
            <form method="post" action="index.php" enctype="multipart/form-data">
                <div class="form-section">
                    <h2>Personal Information</h2>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" id="first_name" name="first_name" required>
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" id="last_name" name="last_name" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group half-width">
                            <label for="birthdate">Birthdate</label>
                            <input type="date" id="birthdate" name="birthdate" required>
                        </div>
                        <div class="form-group half-width">
                            <label for="gender">Gender</label>
                            <select id="gender" name="gender" required>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" id="address" name="address" required>
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" id="city" name="city" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="contact_number">Contact Number</label>
                            <input type="tel" id="contact_number" name="contact_number" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                    </div>
                </div>
    
                <div class="form-section">
                    <h2>Education</h2>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="high_school">High School</label>
                            <input type="text" id="high_school" name="high_school" required>
                        </div>
                        <div class="form-group">
                            <label for="high_school_location">Location</label>
                            <input type="text" id="high_school_location" name="high_school_location" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="college">College</label>
                            <input type="text" id="college" name="college" required>
                        </div>
                        <div class="form-group">
                            <label for="college_location">Location</label>
                            <input type="text" id="college_location" name="college_location" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="graduate_school">Graduate School</label>
                            <input type="text" id="graduate_school" name="graduate_school" required>
                        </div>
                        <div class="form-group">
                            <label for="graduate_school_location">Location</label>
                            <input type="text" id="graduate_school_location" name="graduate_school_location" required>
                        </div>
                    </div>
                </div>
    
                <div class="form-section">
                    <h2>Position</h2>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="position_applying">Position Applying</label>
                            <select id="position_applying" name="position_applying" required>
                                <option value="barista">Barista</option>
                                <option value="cafe-attendant">Cafe Attendant</option>
                                <option value="cafe-server">Cafe Server</option>
                                <option value="cafe-worker">Cafe Worker</option>
                                <option value="manager">Manager</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="expected_salary">Expected Salary</label>
                            <input type="text" id="expected_salary" name="expected_salary">
                        </div>
                        <div class="form-group">
                            <label for="resume">Resume</label>
                            <input type="file" id="resume" name="resume">
                        </div>
                    </div>
                </div>
        
                <button class="proceed-button" type="submit" onclick="openApplicationProcessPopup()">Proceed</button> 
            </form>
        </div>
    </div>
    
    <div id="application-process-popup" class="popup-overlay">
        <div class="popup-content-application process-form">
            <div class="exit-container">
                <span class="exit-button" onclick="closePopup()">&times;</span>
            </div>
            <img src="https://cdn-icons-png.flaticon.com/512/9458/9458915.png " alt="Verify Photo" class="verify-photo">
            <h2>Application in Process</h2>
            <p>Thank you for your application! We are currently processing your information and will get back to you shortly.</p>
        </div>
    </div>

    
    
    <script src="main.js"></script>
    <script src="home.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
