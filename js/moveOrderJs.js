console.log("Hello world!");

$("button[name='getSodata-btn']").click(function (e) {
  let id = $("input[name='sonumber']").val();

  e.preventDefault();

  let data = {
    getSOData: "getSOData",
    sonumber: id,
  }



  

  $.getJSON(
    "./phpAjax/projectStatusAjax.php",
    data,
    function (data, textStatus, jqXHR) {
      console.log(data);
    }
  ).fail((error) => {
    console.log(error.responseText);
  });
});
