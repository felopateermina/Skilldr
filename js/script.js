// Notification to use in the future {{start}}
let permission = Notification.permission;
function showNotification() {
  let title = "Fero Store";
  let icon = "imgs/375173109_122094076388038338_5881839480838389606_n.jpg";
  let body = `Thanks For Signing In 💖 . Now you Can visit the Site With Account . Account Created With Name "${inputforusername.value}"`;

  let notification = new Notification(title, { body, icon });

  notification.onclick = () => {
    notification.close();
    window.parent.focus();
  };
}
// Notification to use in the future {{start}}


function typeWriter(text, i, speed, elementId) {
  if (i < text.length) {
    document.getElementById(elementId).innerHTML += text.charAt(i);
    i++;
    setTimeout(function () {
      typeWriter(text, i, speed, elementId);
    }, speed);
  }
}

window.onload = function () {
  var textToType = `You can watch courses with the best teachers with very high quality!`;
  var speed = 10; // Adjust the speed (milliseconds) to control the typing speed
  var elementId = "tittt"; // Set the id of your h4 element
  typeWriter(textToType, 0, speed, elementId);
};