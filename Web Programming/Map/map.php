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
    <title>Delivery Location</title>
    <link rel="stylesheet" href="mapstyle.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY&libraries=places"></script>
</head>
<body>
    <div class="container">
        <h2>Where are we located?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tincidunt, urna sed sodales vestibulum, mauris est dictum sapien, in hendrerit nibh nulla vitae orci. Maecenas ut libero a erat mollis ultrices non sed diam.</p>
        <button onclick="openGoogleMaps()">View in Google Maps</button>

        <div class="delivery-form">
            <div class="form-section">
                <h3>Delivery</h3>
                <label for="city-select">Choose your city</label>
                <select id="city-select" onchange="updateAddressOptions()">
                    <option value="Cagayan De Oro City">Cagayan De Oro City</option>
                    <!-- Add more cities as needed -->
                </select>
                <label for="address-select">Coffee Shop Address</label>
                <select id="address-select" onchange="updateMap()">
                    <option value="">Address</option>
                    <!-- Dynamic options will be added here -->
                </select>
                <button onclick="determineLocation()">Determine your location?</button>

                <div id="shop-details">
                    <p><strong>Coffee Shop Address:</strong> <span id="shop-address">9000, 9th Street #135, Ketkai Drive, Osamis Oriental, Philippines</span></p>
                    <p><strong>Store opening hours:</strong> 9:00 - 23:00</p>
                    <p><strong>Phone Number:</strong> +9496525842</p>
                </div>
                <button onclick="bookDelivery()">Book</button>
            </div>
            <div id="map"></div>
        </div>
    </div>

    <script src="map.js"></script>
</body>
</html>