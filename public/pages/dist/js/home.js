function openPopup(userType) {
    document.getElementById(`${userType}Popup`).style.display = 'block';
    document.getElementById(`${userType}Overlay`).style.display = 'block';
    document.body.style.overflow = 'hidden'; // Prevent scrolling
}

function closePopup(userType) {
    document.getElementById(`${userType}Popup`).style.display = 'none';
    document.getElementById(`${userType}Overlay`).style.display = 'none';
    document.body.style.overflow = 'auto'; // Allow scrolling
}