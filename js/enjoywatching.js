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
    new Notification("Enjoy Watching", {
        body: "This Is A Free Course For You, Enjoy It!",
        icon: "../imgs/logo.png" // Optional
    });
}
