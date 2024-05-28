// script.js

function openPopup() {
    document.getElementById('popup').style.display = 'flex';
}

function closePopup() {
    document.getElementById('popup').style.display = 'none';
    document.getElementById('apply-popup').style.display = 'none';
    document.getElementById('application-form-popup').style.display = 'none';
    document.getElementById('application-process-popup').style.display = 'none';
}

function showApplyButton() {
    document.querySelector('.apply-button').style.display = 'inline-block';
}

function openApplyPopup() {
    const positionSelect = document.getElementById('position-select');
    const selectedPosition = positionSelect.value;

    const positionTitle = document.getElementById('position-title');
    const positionDescription = document.getElementById('position-description');
    const overview = document.getElementById('overview');
    const skillsRequired = document.getElementById('skills-required');
    const whatYouWillReceive = document.getElementById('what-you-will-receive');

    switch (selectedPosition) {
        case 'barista':
            positionTitle.textContent = 'Barista';
            positionDescription.textContent = 'Join our team as a Barista. You will be responsible for preparing and serving coffee and other beverages.';
            overview.textContent = 'As a Barista, you will create delicious beverages and ensure customer satisfaction.';
            skillsRequired.innerHTML = `
                <ul>
                    <li>Coffee Making Skills: A barista needs to know how to prepare a variety of coffee drinks, including espresso, cappuccino, latte, macchiato, and more. This includes understanding different brewing methods, espresso extraction, milk frothing techniques, and proper coffee grinding.</li>
                    <li>Knowledge of Coffee: Baristas should have a good understanding of coffee beans, origins, flavors, and roasting profiles. This knowledge helps them recommend different coffee blends or single-origin beans to customers based on their preferences.</li>
                    <li>Customer Service: Excellent customer service is essential in the hospitality industry. Baristas should be friendly, approachable, and able to engage with customers, take orders accurately, and handle any customer concerns or complaints professionally.</li>
                </ul>
            `;
            whatYouWillReceive.textContent = 'You will receive competitive pay, tips, and employee discounts.';
            break;
        case 'cafe-attendant':
            positionTitle.textContent = 'Cafe Attendant';
            positionDescription.textContent = 'Join our team as a Cafe Attendant. You will assist customers and maintain the cleanliness of the cafe.';
            overview.textContent = 'As a Cafe Attendant, you will support the cafe operations and provide excellent customer service.';
            skillsRequired.textContent = 'You should be friendly, attentive, and able to handle multiple tasks at once.';
            whatYouWillReceive.textContent = 'You will receive competitive pay, tips, and employee discounts.';
            break;
        case 'cafe-server':
            positionTitle.textContent = 'Cafe Server';
            positionDescription.textContent = 'Join our team as a Cafe Server. You will take orders and serve food and beverages to customers.';
            overview.textContent = 'As a Cafe Server, you will ensure a pleasant dining experience for all guests.';
            skillsRequired.textContent = 'You should have excellent communication skills and be able to work efficiently.';
            whatYouWillReceive.textContent = 'You will receive competitive pay, tips, and employee discounts.';
            break;
        case 'cafe-worker':
            positionTitle.textContent = 'Cafe Worker';
            positionDescription.textContent = 'Join our team as a Cafe Worker. You will assist with various tasks around the cafe.';
            overview.textContent = 'As a Cafe Worker, you will support the team with various duties to ensure smooth operations.';
            skillsRequired.textContent = 'You should be versatile, hardworking, and able to work in a team.';
            whatYouWillReceive.textContent = 'You will receive competitive pay, tips, and employee discounts.';
            break;
        case 'manager':
            positionTitle.textContent = 'Manager';
            positionDescription.textContent = 'Join our team as a Manager. You will oversee the cafe operations and manage the staff.';
            overview.textContent = 'As a Manager, you will ensure the highest quality of service and manage the daily operations.';
            skillsRequired.textContent = 'You should have strong leadership skills and experience in management.';
            whatYouWillReceive.textContent = 'You will receive competitive pay, benefits, and a performance bonus.';
            break;
        default:
            positionTitle.textContent = 'Position Title';
            positionDescription.textContent = 'Description of the position.';
            overview.textContent = 'Overview of the position.';
            skillsRequired.textContent = 'Skills required for the position.';
            whatYouWillReceive.textContent = 'Benefits and compensation for the position.';
            break;
    }

    document.getElementById('popup').style.display = 'none';
    document.getElementById('apply-popup').style.display = 'flex';
}

function openApplicationForm() {
    document.getElementById('apply-popup').style.display = 'none';
    document.getElementById('application-form-popup').style.display = 'flex';
}

function openApplicationProcessPopup() {
    // Hide the application form popup
    document.getElementById('application-form-popup').style.display = 'none';
    // Show the process application form popup
    document.getElementById('application-process-popup').style.display = 'block';
}

function openApplicationProcessPopup() {
    // Get form inputs
    var firstName = document.getElementById('first-name').value.trim();
    var lastName = document.getElementById('last-name').value.trim();
    var birthdate = document.getElementById('birthdate').value.trim();
    var gender = document.getElementById('gender').value;
    var address = document.getElementById('address').value.trim();
    var city = document.getElementById('city').value.trim();
    var contactNumber = document.getElementById('contact-number').value.trim();
    var email = document.getElementById('email').value.trim();
    var positionApplying = document.getElementById('position-applying').value;
    var expectedSalary = document.getElementById('expected_salary').value.trim();
    var resume = document.getElementById('resume').value.trim();

    // Check if any field is empty
    if (
        firstName === '' ||
        lastName === '' ||
        birthdate === '' ||
        gender === '' ||
        address === '' ||
        city === '' ||
        contactNumber === '' ||
        email === '' ||
        positionApplying === '' ||
        expectedSalary === '' ||
        resume === ''
    ) {
        alert('Please fill in all fields.');
    } else {
        document.getElementById('application-form-popup').style.display = 'none';
        document.getElementById('application-process-popup').style.display = 'flex';
    }
}

