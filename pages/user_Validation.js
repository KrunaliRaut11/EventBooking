// This function will validate Name.
  function allLetterFirst()
  { 
  var uname = document.registration.firstname;
  var letters = /^[A-Za-z]+$/;
  if(uname.value.match(letters))
  {
  // Focus goes to next field i.e. Address.
  document.registration.middlename.focus();
  return true;
  }
  else
  {
  alert('Firstname must have alphabet characters only');
  uname.focus();

  return false;
  }
  }

  // This function will validate Name.
  function allLetterMiddle()
  { 
  var uname = document.registration.middlename;
  var letters = /^[A-Za-z]+$/;
  if(uname.value.match(letters))
  {
  // Focus goes to next field i.e. Address.
  document.registration.lastname.focus();
  return true;
  }
  else
  {
  alert('Middlename must have alphabet characters only');
  uname.focus();

  return false;
  }
  }

  // This function will validate Name.
  function allLetterLast()
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
  alert('Lastname must have alphabet characters only');
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
  document.registration.address.focus();
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
  var uadd = document.registration.address;
  var letters = /^[0-9a-zA-Z]+$/;
  if(uadd.value.match(letters))
  {
  // Focus goes to next field i.e. Country.
  document.registration.contact.focus();
  return true;
  }
  else
  {
  alert('User address must have alphanumeric characters only');
  uadd.focus();
  return false;
  }
  }

// This function will validate contact.
  function allnumeric()
  { 
  var uzip = document.registration.contact;
  var numbers = /^[0-9]+$/;
  if(uzip.value.match(numbers))
  {
  // Focus goes to next field i.e. email.
  document.registration.username.focus();
  return true;
  }
  else
  {
  alert('contact must have numeric characters only');
  uzip.focus();
  return false;
  }
  }

// This function will validate username.
  function alphanumericUser()
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
