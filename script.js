const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-links');

hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('nav-active');
    hamburger.classList.toggle('toggle');
});

// Get the elements
const lookAroundBtn = document.getElementById('lookAroundBtn');
const popup = document.getElementById('registrationPopup');
const closePopup = document.getElementById('closePopup');

// Open the popup when "LOOK AROUND" is clicked
lookAroundBtn.addEventListener('click', function (e) {
    e.preventDefault(); // Prevent the default anchor behavior
    popup.style.display = 'flex'; // Display the popup
});

// Close the popup when the close button is clicked
closePopup.addEventListener('click', function () {
    popup.style.display = 'none'; // Hide the popup
});

// Close the popup if the user clicks outside the popup content
window.addEventListener('click', function (e) {
    if (e.target === popup) {
        popup.style.display = 'none'; // Hide the popup
    }
});
