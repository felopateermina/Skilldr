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
        body: "New Updates Are Available Now!",
        icon: "../imgs/logo.png" // Optional
    });
}
