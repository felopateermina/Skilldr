document.addEventListener('DOMContentLoaded', () => {
    // Automatically request permission and show a notification
    if (Notification.permission === "granted") {
        showNotification();
    } else if (Notification.permission !== "denied") {
        Notification.requestPermission().then(permission => {
            if (permission === "granted") {
                showNotification();
            }
        });
    }
});

function showNotification() {
    new Notification("Available Updates", {
        body: "See The Updates In This Pages Now!",
        icon: "../imgs/logo.png" // Optional
    });
}
