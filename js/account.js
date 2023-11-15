let name_id = document.getElementById("name");
name_id.innerHTML = localStorage.getItem("username");
let email = document.getElementById("email");
email.innerHTML = localStorage.getItem("email");

// function of Forget Password ?

let ForgetPasswordButton = document.getElementById("frgtpsw");
let RenameButton = document.getElementById("rename");
let shwpswemail = document.getElementById("shwpswemail");
let check = document.getElementById("check");

check.onclick = () => {
  if (shwpswemail.value == localStorage.getItem("email")) {
    let pswsh = document.getElementById("pswsh");
    pswsh.innerHTML = `$ Password ==> ${localStorage.getItem("password")}`
    pswsh.style.color = "green";
  }else{
    pswsh.innerHTML = "WRONG EMAIL !";
    pswsh.style.color = "red";
  }
};

let changePswButton = document.getElementById("cpsw");
let changePswInput = document.getElementById("c-psw");

changePswInput.onkeyup = ()=>{
  changePswButton.style.display = "block";
  if (changePswInput.value == ""){
    changePswButton.style.display = "none";
  }
}

changePswButton.onclick = () => {
  localStorage.setItem("password", changePswInput.value);
  alert("Password changed");
  location.reload();
}
