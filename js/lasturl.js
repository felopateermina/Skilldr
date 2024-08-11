// storeAndRedirect.js

// Function to store the current URL in localStorage
function storeCurrentUrl() {
    const currentUrl = window.location.href;
    localStorage.setItem('lastVisitedUrl', currentUrl);
}

// Function to redirect to the last visited URL
function redirectToLastVisitedUrl() {
    const lastVisitedUrl = localStorage.getItem('lastVisitedUrl');
    if (lastVisitedUrl) {
        window.location.href = lastVisitedUrl;
    }
}

// Set up event listeners for the buttons
document.addEventListener('DOMContentLoaded', () => {
    // Assuming you have a button with id 'storeButton'
    const storeButton = document.getElementById('storeButton');
    if (storeButton) {
        storeButton.addEventListener('click', storeCurrentUrl);
    }

    // Assuming you have a button with id 'redirectButton'
    const redirectButton = document.getElementById('redirectButton');
    if (redirectButton) {
        redirectButton.addEventListener('click', redirectToLastVisitedUrl);
    }
});
