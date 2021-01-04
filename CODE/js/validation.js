
function validate()
{
  // var user = document.getElementById('user').value;
  var ruser = document.getElementById('ruser').value;
  // var userRGEX = /^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/;
  var ruserRGEX = /^^[A-Z].*$/;
  // var user = userRGEX.test(user);
  var ruser = ruserRGEX.test(ruser);
  // if(user == false)
  // {
  // alert('Please enter a valid phone number');
  // return false;
  // }

  if(ruser == false)
  {
  alert('Username must start with uppercase letter!');
  return false;
  }

    return true;
  }
}
