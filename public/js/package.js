$(document).ready(function () {
    fetch_flights();
    function fetch_flights(){
        $.ajax({       url:'../flighFetch',
            method: "GET",
            dataType: "json",
            success: function (data) {

                $("#lastRow").html(" ");
                var values = data;
                if (values != null) {
                    var flightElement;
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
                        flightElement+='<option value="'+id+'">'+id+' '+airlineName+' '+originCityName+'-'+destinationCityName+'</option>';
                    }

                    $("#lastRow").html('<form id="FlightForm">\n' +
                        '                <div class="col-sm-3"><div class="form-group"><label>Package Name</label><input id="originCityLast" required class="form-control" type="text" /></div></div>\n' +
                        '                <div class="col-sm-4"><div class="form-group"><label>Package Description</label><input id="destinationCityLast" required class="form-control" type="text" /></div></div>\n' +
                        '                <div class="col-sm-3"><div class="form-group"><label>Package Flights</label><select multiple>'+flightElement+'</select></div></div>\n' +
                        '                <div class="col-sm-2"><div class="form-group"><label style="color:white;">P</label><br><input type="submit" value="+" /></div></div>\n' +
                        '            </form>');

                }
            }
        });
    }
});