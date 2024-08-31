$(document).ready(function () {
  function loadPie(divId, title, data_pie) {

    google.charts.load("current", { packages: ["corechart"] });


    function dataChart() {
      var data = google.visualization.arrayToDataTable(data_pie);

      //   console.log(data);

      var options = {
        title: title,
        pieHole: 0.4,
        is3D: true,
        pieSliceTextStyle: {
          color: "white",
        },
        
      };

      var chart = new google.visualization.PieChart(
        document.getElementById(divId)
      );
      chart.draw(data, options);
    }

    google.charts.setOnLoadCallback(dataChart);

    function drawChart1() {
      var data = google.visualization.arrayToDataTable([
        ["Task", "Hours per Day"],
        ["Work", 51],
        ["Eat", 2],
        ["Commute", 2],
        ["Watch TV", 2],
        ["Sleep", 7],
      ]);

      var options = {
        title: "My Daily Activities",
        // is3D: true,
      };

      var chart = new google.visualization.PieChart(
        document.getElementById("piechart2")
      );
      chart.draw(data, options);
    }

    google.charts.setOnLoadCallback(drawChart1);
  }




  function setDataOfPie(data,title,divId) {
    
    let arrForPie = [["name", "value"]];

    Object.keys(data).forEach((Element) => {
      let arr = [Element, data[Element]];
      arrForPie.push(arr);
    });

    loadPie(divId, title, arrForPie);
  }


  $.get(
    "./phpAjax/dashboardAjax.php",
    {
        pieChartData: "pieChartData",
      },
    async function (data) {
      console.log(data);

      let purchase_order = data.purchaseOrder.Indexes;
      let itemrequest = data.itemrequest.Indexes  
      let requisition_table = data.requisition_table.Indexes  


      //   console.log(purchase_order);



     await setDataOfPie(requisition_table,"PR Requests","pr_requests")
await      setDataOfPie(purchase_order,"Purchase Order","purchase_order")
     await setDataOfPie(itemrequest,"Item Request","item_requests")
        

    },
    "json"
  );
});
