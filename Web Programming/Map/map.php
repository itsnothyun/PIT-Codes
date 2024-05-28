<?php
// process_booking.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process the booking form submission
    $city = $_POST['city'];
    $address = $_POST['address'];

    // Here, you would typically save the booking information to a database
    // For demonstration, we'll just return a success message

    echo json_encode([
        'status' => 'success',
        'message' => 'Booking successful!'
    ]);
}
?>
 

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Finger+Paint&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="mapstyle.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
</head>
<body>
    <div class="background">
        <div class="container">
            <div class="header">
                <h1>Where are we located?</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tincidunt, urna sed sodales vestibulum, mauris est dictum sapien, in hendrerit nibh nulla vitae orci. Maecenas ut libero a erat mollis ultricies non sed diam.</p>
                <div class="button-container">
                    <button class="google-maps-btn">
                        <img src="https://cdn-icons-png.flaticon.com/512/2875/2875433.png " alt="Google Maps Icon">
                        View in Google Maps
                    </button>
                </div>
            </div>
            <div class="content">
                <div class="inner-content">
                    <div class="form-section">
                        <h2>Delivery</h2>
                        <div class="form-group">
                            <label for="city">Choose your city</label>
                            <select id="city">
                                <option value="cdo">Cagayan De Oro City</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="address">Coffee Shop Address</label>
                            <select id="address">
                                <option value="9000">9000, 9th Street #135, Ketkai Drive, Osamis Oriental, Philippines</option>
                            </select>
                        </div>
                        <div class="location-link">
                            <a href="#">Determine your location?</a>
                        </div>
                        <div class="shop-info">
                            <p><strong>Coffee Shop Address</strong></p>
                            <p>9000, 9th Street #135, Ketkai Drive, Osamis Oriental, Philippines</p>
                            <p><strong>Store opening hours:</strong> 9:00 - 23:00</p>
                            <p><strong>Phone Number:</strong> +49495625842</p>
                        </div>
                        <button class="book-btn">Book</button>
                    </div>
                    <div class="map-section" id="map"></div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function initMap() {
            var location = {lat: 8.4821, lng: 124.6457}; // Example coordinates for Cagayan De Oro City
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 14,
                center: location
            });
            var marker = new google.maps.Marker({
                position: location,
                map: map
            });
        }
    </script>
</body>
</html>
