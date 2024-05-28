function bookDelivery() {
    const city = document.getElementById('city-select').value;
    const address = document.getElementById('address-select').value;

    if (city && address) {
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'process_booking.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                const response = JSON.parse(xhr.responseText);
                if (response.status === 'success') {
                    alert(response.message);
                } else {
                    alert('Booking failed!');
                }
            }
        };
        xhr.send(`city=${encodeURIComponent(city)}&address=${encodeURIComponent(address)}`);
    } else {
        alert('Please select a city and address.');
    }
}
