// After form loads focus will go to User id field.
  function firstfocus()
  {
  var uid = document.registration.firstname.focus();
  return true;
  }

// This function will validate firstName.
  function allLetterFirst()
  { 
  var uname = document.registration.firstname;
  var letters = /^[A-Za-z]+$/;
  if(uname.value.match(letters))
  {
  // Focus goes to next field i.e. Address.
  document.registration.lastname.focus();
  return true;
  }
  else
  {
  alert('firstName must have alphabet characters only');
  uname.focus();

  return false;
  }
  }

// This function will validate lastName.
  function allLetter()
  { 
  var uname = document.registration.lastname;
  var letters = /^[A-Za-z]+$/;
  if(uname.value.match(letters))
  {
  // Focus goes to next field i.e. Address.
  document.registration.email.focus();
  return true;
  }
  else
  {
  alert('Username must have alphabet characters only');
  uname.focus();

  return false;
  }
  }

 // This function will validate Email.
  function ValidateEmail()
  {
  var uemail = document.registration.email;
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if(uemail.value.match(mailformat))
  {
  document.registration.username.focus();
  return true;
  }
  else
  {
  alert("You have entered an invalid email address!");
  uemail.focus();
  return false;
  }
  }

 // This function will validate Address.
  function alphanumeric()
  { 
  var uadd = document.registration.username;
  var letters = /^[0-9a-zA-Z]+$/;
  if(uadd.value.match(letters))
  {
  // Focus goes to next field i.e. Country.
  document.registration.password.focus();
  return true;
  }
  else
  {
  alert('User address must have alphanumeric characters only');
  uadd.focus();
  return false;
  }
  }

// This function will validate Password.
  function passid_validation(mx,my)
  {
  var passid = document.registration.password;
  var passid_len = passid.value.length;
  if (passid_len == 0 ||passid_len >= my || passid_len < mx)
  {
  alert("Password should not be empty / length be between "+mx+" to "+my);
  passid.focus();
  return false;
  }
  // Focus goes to next field i.e. Name.
  document.registration.firstname.focus();
  return true;
  }
