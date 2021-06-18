function validateForm()
{
  var name= document.forms["orderInfo"]["name"].value;
  var phone= document.forms["orderInfo"]["phone"].value;
  var email= document.forms["orderInfo"]["email"].value;
  var movie= document.forms["orderInfo"]["movie"].value;
  var row= document.forms["orderInfo"]["row"].value;
  var seat= document.forms["orderInfo"]["seat"].value;
  var dateorder= document.forms["orderInfo"]["dateorder"].value;
  var timeShow= document.forms["orderInfo"]["timeShow"].value;
  var ticPrice= document.forms["orderInfo"]["ticPrice"].value;

  if (name== "") {
    alert("Please Enter your Name!!!");
    return false;
  }

  if (!isNaN(name)) {
    alert("Name Cannot be Only Numbers!!!");
    return false;
  }

  if (email== "") {
    alert("Please Enter your Email!!!");
    return false;
  }

  if (movie== "selectmovie") {
    alert("Please Select a Movie!!!");
    return false;
  }

  if (phone.length!=11) {
    alert("Enter a Correct Phone Number!!!");
    return false;
  }
  
  if (row== "selectrow") {
    alert("Please Select a Row!!!");
    return false;
  }

  if (seat== "selectseat") {
    alert("Please Select a Seat!!!");
    return false;
  }

  if (dateorder== "") {
    alert("Please Enter the Date!!!");
    return false;
  }

  if (timeShow== "selecttimeShow") {
    alert("Please Select a Time Slot!!!");
    return false;
  }

  if (ticPrice== "selectticPrice") {
    alert("Please Select a Seat Quality!!!");
    return false;
  }

}



  