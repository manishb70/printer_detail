


$("button[name='search_so']").on("click", function (event) {
  event.preventDefault();

  let sonumber = parseInt($("#sonumber").val());

  console.log(sonumber);

  let data = {
    sonumber: sonumber,
    getSoData:"getSoData"    
  }





  $.getJSON("./phpAjax/projectStatusAjax.php", data,
    function (data, textStatus, jqXHR) {
        console.log(data);
        
    }
  ).fail(error=>{
    console.log(error.responseText);
  })



});
