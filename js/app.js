$(document).ready(function(){
  $.ajax({
    url: "http://127.0.0.1:93/data.php",
    method: "GET",
    success: function(data) {
      console.log(data);
      var nbr = [];
      var job = [];

      for(var i in data) {
		job.push(data[i].nbr);
        nbr.push(data[i].jobcode);
  
      }

      var chartdata = {
        labels: nbr,
        datasets : [
          {
            label: 'Nombre de candidats',
            backgroundColor: '#008B8B',
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: '#20B2AA',
            hoverBorderColor: '#20B2AA',
            data: job
          }
        ]
      };
	  
	        var piedata = {
        labels: nbr,
        datasets : [
          {
            label: 'Nombre de candidats',
            backgroundColor: '#006400',
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: '#B8860B',
            hoverBorderColor: '#B8860B',
            data: job
          }
        ]
      };

      var ctx = $("#mycanvas");
	  
	  var cty = $("#piecanvas");
	   
	   var pieGraph = new Chart(cty, {
        type: 'pie',
        data: piedata
      });
	  

      var barGraph = new Chart(ctx, {
        type: 'bar',
        data: chartdata
      });
    },
    error: function(data) {
      console.log(data);
    }
  });
});