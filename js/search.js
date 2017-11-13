$(document).ready(function(){

  //Get stock info when search button is clicked
  $("#searchButton").click(function(event){

    //Prevent search form from submitting
    event.preventDefault();

    //Lose focus from search button
    $("#searchButton").blur();

    //API Key
    var apiKey = "PXDKU7CG8NXJCO95";

    //Get stock symbol from user input
    var symbol = $("#symbol").val().trim();

    //Time factor (1min, 5min, 15min, 30min, 60min)
    var timeFactor = 60;

    //Number of results
    var numResults = 7;

    //Perform API call to alphavantage to get daily stock info
    $.ajax({
      type: "GET",
      url: "https://www.alphavantage.co/query",
      data: {"function":"TIME_SERIES_INTRADAY","symbol":symbol,"interval":timeFactor + "min","apikey":apiKey,"outputsize":"full"},
      success: function(response){

        //Time series
        var timeSeries = response["Time Series (" + timeFactor + "min)"];

        //Initial minute
        var minuteFactor = timeFactor;

        //Array of close prices
        var closePrices = [];

        //Iterate through time series
        var count = 0;
        for (var minute in timeSeries){

          //If count == numResults, break
          if (count == numResults){
            break;
          }

          //Get info for each minute
          var open = timeSeries[minute]["1. open"];
          var high = timeSeries[minute]["2. high"];
          var low = timeSeries[minute]["3. low"];
          var close = timeSeries[minute]["4. close"];
          var volume = timeSeries[minute]["5. volume"];

          //Display info
          console.log("Minute: " + minute + ", Open: " + open + ", High: " + high + ", Low: " + low + ", Close: " + close + ", Volume: " + volume);

          //Increment minute factor
          minuteFactor = minuteFactor + timeFactor;

          //Add close price to array
          closePrices.push(close);

          //Increment count
          count++;
        }

        //Reverse close prices array
        var closePricesReversed = [];
        for (var i = closePrices.length-1; i >= 0; i--){
          closePricesReversed.push(closePrices[i]);
        }

        //Display price chart
        new Chart(document.getElementById("line-chart"), {
          type: 'line',
          data: {
            labels: ["10am", "11am", "12pm", "1pm", "2pm", "3pm", "4pm"],
            datasets: [{
                data: closePricesReversed,
                borderColor: "#00CD00",
                fill: false,
                fontColor: "#fff"
              }]
          },
          options: {
            elements: {
              point: {
                radius: 4
              }
            },
            showAllTooltips: true,
            legend: {
              display: false
            },
            title: {
              display: true,
              text: 'Day'
            }, /*
            scales: {
              xAxes: [{
                display: false
              }]
            }, */
            tooltips: {
              custom: function(tooltip){
                if (!tooltip) return;
                //tooltip.displayColors = false;
              },
              callbacks: {
                title: function(){ return; },
                label: function(tooltipItem){
                  return " $" + tooltipItem.yLabel.toFixed(2);
                }
              }
            }
          }
        });

      }, error: function (response){
        console.log("Fail");
        console.log(response);
      }
    });

  });

  //Trigger search when page is loaded
  $("#searchButton").click();

});
