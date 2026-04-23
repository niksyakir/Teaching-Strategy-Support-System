// Get elements
const profileIcon = document.getElementById('profile-icon');
const floatingMenu = document.getElementById('floating-menu');
const logoutButton = document.getElementById('logout-button');

// Toggle floating menu visibility
profileIcon.addEventListener('click', () => {
    const isMenuVisible = floatingMenu.style.display === 'block';
    floatingMenu.style.display = isMenuVisible ? 'none' : 'block';
});

// Close menu when clicking outside
document.addEventListener('click', (event) => {
    if (!event.target.closest('.profile-container')) {
        floatingMenu.style.display = 'none';
    }
});

// Logout functionality
logoutButton.addEventListener('click', () => {
    // Clear user session data (example)
    sessionStorage.clear();

    // Redirect to the login page
    window.location.href = '../log in.php';
});

