var script = document.createElement('script');
script.src = 'https://code.jquery.com/jquery-3.4.1.min.js';
script.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(script);


function insertScouter(event) {
  event.preventDefault();
  // console.log(event);
  const companyName = event.target[0].value;
  const dateOfReg = event.target[1].value;
  const countryOfOrigin = event.target[2].value;
  const emailId = event.target[3].value;
  const password = event.target[4].value;
  const confirmPassword = event.target[5].value;
  // console.log(companyName);
  // console.log(dateOfReg);
  // console.log(countryOfOrigin);
  // console.log(emailId);
  // console.log(password);
  // console.log(confirmPassword);
  if (
    companyName == "" ||
    dateOfReg == "" ||
    countryOfOrigin == "" ||
    emailId == "" ||
    password == "" ||
    confirmPassword == ""
  ) {
    alert("Please Fill All The Field");
  } else if (!validateEmail(emailId)) {
    alert("Enter Correct Mail");
  } else if (password.length < 8 || password.length > 16) {
    alert("Password Must Be In Between 8 to 16 characters");
  } else if (password != confirmPassword) {
    alert("Password and Confirm Password Must Be Same");
  } else {
    $("#loading").show();
    $.ajax({
      type: "POST",
      url: "insertScouter.php",
      data: {
        companyName: companyName,
        dateOfReg: dateOfReg,
        countryOfOrigin: countryOfOrigin,
        emailId: emailId,
        password: password,
      },
      success: function (data) {
          $("#message").html(data);
          $('#myForm').trigger("reset");
          $("#loading").hide();
      }
    });
  }
}
function validateEmail(email) {
  const re =
    /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(String(email).toLowerCase());
}

function loginScouter(event){
  event.preventDefault();
  const email = event.target[0].value;
  const password = event.target[1].value;

  if(email == '' || password == ''){
    alert('All Field Must Be Filled');
  }else if (!validateEmail(email)) {
    alert("Enter Correct Mail");
  }else{
    $("#loading").show();
    $.ajax({
      type: 'POST',
      url: 'loginScouter.php',
      data: {
        email: email,
        password: password
      },
      success: function(data){
        if(data == 1){
          window.location.href = 'index.php';
        }else{
          $("#message").html(data);
          $("#loading").hide();
        }
      }
    });
  }
}

function regDisplayer(event){
  event.preventDefault();
  // console.log(event);
  const companyName = event.target[0].value;
  const dateOfReg = event.target[1].value;
  const techName = event.target[2].value;
  const countryOfOrigin = event.target[3].value;
  const emailId = event.target[4].value;
  const password = event.target[5].value;
  const confirmPassword = event.target[6].value;

  if (
    companyName == "" ||
    dateOfReg == "" ||
    countryOfOrigin == "" ||
    emailId == "" ||
    password == "" ||
    confirmPassword == "" ||
    techName == ""
  ) {
    alert("Please Fill All The Field");
  } else if (!validateEmail(emailId)) {
    alert("Enter Correct Mail");
  } else if (password.length < 8 || password.length > 16) {
    alert("Password Must Be In Between 8 to 16 characters");
  } else if (password != confirmPassword) {
    alert("Password and Confirm Password Must Be Same");
  } else {
    $("#loading").show();
    $.ajax({
      type: "POST",
      url: "insertDisplayer.php",
      data: {
        companyName: companyName,
        dateOfReg: dateOfReg,
        countryOfOrigin: countryOfOrigin,
        emailId: emailId,
        password: password,
        techName: techName
      },
      success: function (data) {
          $("#message").html(data);
          $('#myForm').trigger("reset");
          $("#loading").hide();
      }
    });
  }
}
function loginDisplayer(event){
  event.preventDefault();
  const email = event.target[0].value;
  const password = event.target[1].value;

  if(email == '' || password == ''){
    alert('All Field Must Be Filled');
  }else if (!validateEmail(email)) {
    alert("Enter Correct Mail");
  }else{
    $("#loading").show();
    $.ajax({
      type: 'POST',
      url: 'loginDisplayer.php',
      data: {
        email: email,
        password: password
      },
      success: function(data){
        if(data == 1){
          window.location.href = 'index.php';
        }else{
          $("#message").html(data);
          $("#loading").hide();
        }
      }
    });
  }
}
function forgetDisplayerPassword(event){
  // console.log(event);
  const email = event.path[4][0].value;
  if(email == ''){
    alert('Enter E-mail');
  }else if(!validateEmail(email)){
    alert('Enter Correct E-mail');
  }else{
    $("#loading").show();
    $.ajax({
      type: 'POST',
      url: 'forgetPass.php',
      data: {
        email: email
      },
      success: function(data){
        $("#message").html(data);
        $('#myForm').trigger("reset");
        $("#loading").hide();
      }
    });
  }
}
function resetDisplayer(event){
  event.preventDefault();
  const pass = event.target[0].value;
  const cpass = event.target[1].value;
  const code = event.target[2].value;

  if(code == ""){
    alert('wrong url');
  }else if(pass == "" || cpass == ""){
    alert('Fill all fields');
  }else if (pass.length < 8 || pass.length > 16) {
    alert("Password Must Be In Between 8 to 16 characters");
  } else if(pass != cpass){
    alert('Password and Confirm Password Must Be Same');
  }else{
    $("#loading").show();
    $.ajax({
      type: 'POST',
      url: 'resetPassword.php',
      data: {
        password: pass,
        code: code
      },
      success: function(data){
        if(data == 1){
          $("#message").html("Password Update Successfully <a href='login.php'>Click Here To Login</a>");
          $('#myForm').trigger("reset");

        }else{
          $("#message").html(data);
          $("#loading").hide();
        }
      }
    });
  }
}

function forgetScouterPassword(event){
  console.log(event);
  const email = event.path[4][0].value;
  if(email == ''){
    alert('Enter E-mail');
  }else if(!validateEmail(email)){
    alert('Enter Correct E-mail');
  }else{
    $("#loading").show();
    $.ajax({
      type: 'POST',
      url: 'forgetPass.php',
      data: {
        email: email
      },
      success: function(data){
        $("#message").html(data);
        $('#myForm').trigger("reset");
        $("#loading").hide();
      }
    });
  }
}

function resetScouter(event){
  event.preventDefault();
  const pass = event.target[0].value;
  const cpass = event.target[1].value;
  const code = event.target[2].value;
  if(code == ""){
    alert('wrong url');
  }else if(pass == "" || cpass == ""){
    alert('Fill all fields');
  }else if (pass.length < 8 || pass.length > 16) {
    alert("Password Must Be In Between 8 to 16 characters");
  } else if(pass != cpass){
    alert('Password and Confirm Password Must Be Same');
  }else{
    $("#loading").show();
    $.ajax({
      type: 'POST',
      url: 'resetPassword.php',
      data: {
        password: pass,
        code: code
      },
      success: function(data){
        if(data == 1){
          $("#message").html("Password Update Successfully <a href='login.php'>Click Here To Login</a>");
          $('#myForm').trigger("reset");
        }else{
          $("#message").html(data);
        }
        $("#loading").hide();
      }
    });
  }
}