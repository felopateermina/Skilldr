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

let login = document.getElementById("login");
let signinform = document.getElementById("sign-in");
let inputforemail = document.getElementById("email");
let inputforpsw = document.getElementById("psw");
let linputforemail = document.getElementById("lemail");
let linputforpsw = document.getElementById("lpsw");
let inputforusername = document.getElementById("name");
let signinbutton = document.getElementById("sub");
let strpsw = document.getElementById("strpsw");
let chrpsw = document.getElementById("chrpsw");
let emsh = document.getElementById("emsh");
let trmpv = document.getElementById("trmpv");
let accountinf = document.getElementById("accountinf");
let avatar = document.getElementById("avatar");
let tutu = document.getElementById("tutu");

inputforemail.onkeyup = () => {
  emsh.style.color = "yellowgreen";
  if (inputforemail.value == "") {
    emsh.style.color = "white";
  }
  trmpv.style.color = "yellowgreen";
};
inputforpsw.onkeyup = () => {
  if (inputforpsw.value.length >= 9) {
    strpsw.style.color = "yellowgreen";
  }
  if (inputforpsw.value == "" || inputforpsw.value.length <= 9) {
    strpsw.style.color = "white";
  }
  if (inputforpsw.value.length > 6 && inputforpsw.value.length < 20) {
    chrpsw.style.color = "yellowgreen";
  }
  trmpv.style.color = "yellowgreen";
};

signinbutton.onclick = function () {
  localStorage.setItem("email", inputforemail.value);
  localStorage.setItem("password", inputforpsw.value);
  localStorage.setItem("username", inputforusername.value);
  if (
    inputforemail.value !== "" &&
    inputforpsw.value !== "" &&
    inputforusername.value !== "" &&
    inputforpsw.value.length >= 6
  ) {
    alert("Account Created !!");
    showNotification();
  }
};
login.onclick = () => {
  signinform.style.display = "block";
  accountinf.style.display = "none";
  tutu.style.display = "none";
};


let h4acc = document.getElementById("h4acc");
h4acc.innerHTML = localStorage.getItem("username");

let closepage = document.getElementById("closepage");
closepage.onclick = () => {
  signinform.style.display = "none";
  tutu.style.display = "block";
};

function alertwhendownload() {
  let title = document.getElementById("title");
  let textgameforalert = document.getElementById("textgameforalert");
  let alert = document.getElementById("alert");
  alert.style.display = "block";
  setTimeout(() => {
    alert.style.display = "none";
  }, 9000);
  alert.innerHTML = `The Phone Number Copied`;
  if (navigator.onLine == false) {
    window.close();
  }
}

let nameinuser = document.getElementById("nameinuser");
let emailinuser = document.getElementById("emailinuser");

nameinuser.innerHTML = localStorage.getItem("username");
emailinuser.innerHTML = localStorage.getItem("email");

let login2 = document.getElementById("login2");
login2.onclick = () => {
  signinform.style.display = "block";
  accountinf.style.display = "none";
  tutu.style.display = "none";
};
let login3 = document.getElementById("login3");
login3.onclick = () => {
  localStorage.clear();
  location.reload();
};
let login4 = document.getElementById("login4");
login4.onclick = () => {
  signinform.style.display = "block";
  accountinf.style.display = "none";
  tutu.style.display = "none";
};
avatar.onclick = () => {
  accountinf.style.display = "block";
  signinform.style.display = "none";
  tutu.style.display = "none";
};
let avatar2 = document.getElementById("avatar2");

let closepageacc = document.getElementById("closepageacc");

closepageacc.onclick = () => {
  accountinf.style.display = "none";
  tutu.style.display = "block";
};

// copnum
function myFunction() {
  var copyText = document.getElementById("myInput");

  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices

  navigator.clipboard.writeText(copyText.value);

  alert("The Phone Number Copied : " + copyText.value);
}
// copnum

// copnum
function myFunction2() {
  var copyText = document.getElementById("myInput2");

  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices

  if (copyText.value == "") {
    alert("Write Your Message First !");
  } else {
    navigator.clipboard.writeText(copyText.value);

    alert("Now Your Message Copied . You Will Go To Mail Me");
  }
}
// copnum

let cardg1 = document.getElementById("cardg1");
let cardg2 = document.getElementById("cardg2");
let cardg3 = document.getElementById("cardg3");
//
let bt1 = document.getElementById("bt1");
let bt2 = document.getElementById("bt2");
let bt3 = document.getElementById("bt3");

// Simulating delay for demonstration purposes
setTimeout(function () {
  // Hide the loading screen
  var loadingScreen = document.getElementById("loading-screen");
  loadingScreen.style.display = "none";
}, 5000); // Change the delay duration as per your requirement

// var scrollToTopButton = document.getElementById("scroll-to-top");

// // Show the button when the user scrolls down 20px from the top of the document
// window.onscroll = function () {
//   if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
//     scrollToTopButton.style.display = "block";
//   } else {
//     scrollToTopButton.style.display = "none";
//   }
// };

// // Scroll to the top of the document when the button is clicked
// scrollToTopButton.addEventListener("click", function () {
//   document.body.scrollTop = 0; // For Safari
//   document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
// });

// let search  = document.getElementById("search");

// search.onkeyup = () => {
//   searchResults.style.display = "block";
//   if (search.value == ""){
//     searchResults.style.display = "none";
//   }
// }

function search_animal() {
  let h333 = document.getElementById("h333");
  let input = document.getElementById("search").value;
  input = input.toLowerCase();
  let x = document.getElementsByClassName("game");
  let searchresultfor = document.getElementById("searchresultfor");

  for (i = 0; i < x.length; i++) {
    if (!x[i].innerHTML.toLowerCase().includes(input)) {
      x[i].style.display = "none";
    } else {
      x[i].style.cssText = `
        display: flex;
  padding: 20px;
  flex: 50%;
        `;
    }
  }
}
let opensearchresults = document.getElementById("opensearchresults");
let searchResults = document.getElementById("searchResults");
// let fedf = document.getElementById("fedf");

// opensearchresults.onclick = () => {
//   searchResults.style.display = "block";
//   fedf.style.display = "block";
// }
// opensearchresults.ondblclick = () => {
//   searchResults.style.display = "none";
//   fedf.style.display = "none";

// }

let whenSignIn = document.getElementById("utut1");
let whenDontSignIn = document.getElementById("utut2");

if(!localStorage.getItem("username") == ""){

  whenSignIn.style.display="block";
  whenDontSignIn.style.display = "none";
}else{
  whenSignIn.style.display="none";
  whenDontSignIn.style.display = "block";
}

let opt = document.getElementById("opt");

if (!localStorage.getItem("username") == "" && !localStorage.getItem("email") == ""){
  login.style.display = "none";
}else{
  h4acc.innerHTML = "Guest"
  h4acc.style.color = "grey";
  login.style.display = "block";
}
