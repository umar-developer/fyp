{/* <link rel="stylesheet" href="css/bootstrap.min.css"> */}

$(document).ready(function(){
  $('#submitWeather').click(function(){
  var city = $("#city").val();
  if(city !=''){

    $.ajax({
      url: 'http://api.openweathermap.org/data/2.5/weather?q=' + city + "&units=metric" +
      "&APPID=084ace18e267fcf69f06bcd71b7d1c2a",
      type: "GET",
      dataType: "JSON",
      success: function(data){
        // var widget = show(data);
        console.log(data);
      //  $("#show").html(widget);
       $("#city").val();
         var xy = populateData(data);
         $('#showData').html(xy);
    }
    });
  }
  else{
    $("#error").html('Field cannot be empty');
  }
});
});


// function show(data){

//  return "<h3><strong>WeaTher</strong>: "+ data.weather[0].main +"</h3>" +
// "<h3><strong>Description</strong>: "+ data.weather[0].description +"</h3>" +
// "<h3><strong>Temperature</strong>: "+ data.main.temp +"</h3>" +
// "<h3><strong>Pressure</strong>: "+ data.main.pressure +"</h3>" +
// "<h3><strong>Humidity</strong>: "+ data.main.humidity +"</h3>" +
// "<h3><strong>Minimum Temperature</strong>: "+ data.main.temp_min +"</h3>" +
// "<h3><strong>Maximum Temperature</strong>: "+ data.main.temp_max +"</h3>" +
// "<h3><strong>wind Speed</strong>: "+ data.wind.speed +"</h3>" +
// "<h3><strong>Wind degree</strong>: "+ data.wind.deg +"</h3>";

// }

function populateData(data){


  return  `<tr>
      <td>${data.weather[0].main}</td>
      <td>${data.weather[0].description}</td>
      <td>${data.main.temp}</td>
      <td>${data.main.pressure}</td>
      <td>${data.main.humidity}</td>
      <td>${data.main.temp_min}</td>
      <td>${data.main.temp_max}</td>
      <td>${data.wind.speed}</td>
      <td>${data.wind.deg}</td>
  </tr>`;
}