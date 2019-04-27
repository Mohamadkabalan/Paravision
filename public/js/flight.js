$(document).ready(function () {
fetch_data();

function fetch_data() {

    $.ajax({       url:'/flighFetch',
        method: "GET",
        dataType: "json",
        success: function (data) {
            /*FlightsData*/
            $("#FlightsData").html(" ");
            var values = data;
            if (values != null) {
                for (i = 0; i < values.length; i++) {
                    var id = values[i]['id'];
                    var originCityId = values[i]['originCityId'];
                    var originCityName = values[i]['originCityName'];
                    var destinationCityId = values[i]['destinationCityId'];
                    var destinationCityName = values[i]['destinationCityName'];
                    var fliStartTime = values[i]['fliStartTime'];
                    var fliEndTime = values[i]['fliEndTime'];
                    var fliClass = values[i]['fliClass'];
                    var fliPrice = values[i]['fliPrice'];
                    var fliPriceCurrency = values[i]['fliPriceCurrency'];
                    var AirlineID = values[i]['AirlineID'];
                    var airlineName = values[i]['airlineName'];
$("#FlightsData").append('<div class="row">' +
    '<div class="col-sm-2"><div class="form-group"><label>Origin City</label><input class="form-control" type="text" value="'+originCityName+'"/></div></div>' +
    '<div class="col-sm-2"><div class="form-group"><label>Destination City</label><input class="form-control" type="text" value="'+destinationCityName+'"/></div></div>' +
    '<div class="col-sm-2"><div class="form-group"><label>Start Time</label><input class="form-control" type="text" value="'+fliStartTime+'"/></div></div>' +
    '<div class="col-sm-2"><div class="form-group"><label>End Time</label><input class="form-control" type="text" value="'+fliEndTime+'"/></div></div>' +
    '<div class="col-sm-1"><div class="form-group"><label>Price</label><input class="form-control" type="text" value="'+fliPrice+'"/></div></div>' +
    '<div class="col-sm-2"><div class="form-group"><label>Airline</label><input class="form-control" type="text" value="'+airlineName+'"/></div></div>' +
    '</div>');
                }
            }
        }
    });
}
$(document).on("submit","#FlightForm",function(e){
    e.preventDefault();
    var originCityLast=$("#originCityLast").val();
    var destinationCityLast=$("#destinationCityLast").val();
    var startTimeLast=$("#startTimeLast").val();
    var endTimeLast=$("#endTimeLast").val();
    var priceLast=$("#priceLast").val();
    var airlineLast=$("#airlineLast").val();
    var formData = new FormData();
    formData.append('originCityLast', originCityLast);
    formData.append('destinationCityLast', destinationCityLast);
    formData.append('startTimeLast',startTimeLast);
    formData.append('endTimeLast',endTimeLast);
    formData.append('priceLast',priceLast);
    formData.append('airlineLast',airlineLast);
    $.ajax({       url:'/flighAdd',
        type: "POST",             // Type of request to be send, called as method
        data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
        dataType: "json",
        contentType: false,       // The content type used when sending data to the server.
        cache: false,             // To unable request pages to be cached
        processData:false,        // To send DOMDocument or non processed data file it is set to false
        success: function(data)   // A function to be called if request succeeds
      {
          var values = data;
          if (values != null) {
              var status = values['status'];
              if(status==200){
                  fetch_data();
                  $("#FlightForm")[0].reset();
                  alert("data inserted");
              }else{
                  alert("data not inserted");
              }
          }
        }
    });
});
/*    $(document).on('click','.deleteComent',function(e) {
        if(confirm("Are you sure you want to delete This comment")){
            var commentID=$(this).data("id");

            $.ajax({       url:`/article/deleteComment/${commentID}`,
                method: "GET",
                dataType: "json",
                success: function (data) {
                    location.reload();
                }
            });

        }
    });*/
});