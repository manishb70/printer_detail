console.log("Hello world!");

$("button[name='getSodata-btn']").click(function (e) {
  let id = $("input[name='sonumber']").val();

  e.preventDefault();

  let data = {
    getSOData: "getSOData",
    sonumber: id,
  };

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

$("button[name='on-hand']").click(function (e) {
  e.preventDefault();

  let inputData = {
    move_order_type: $("input[name='move_order_type']").val(),
    transaction_type: $("input[name='transaction_type']").val(),
    source_sub_invetory: $("input[name='source_sub_invetory']").val(),
    so_search_number: $("input[name='so_search_number']").val(),
    location: $("input[name='location']").val(),
    destination_sub_inventory: $(
      "input[name='destination_sub_inventory']"
    ).val(),
    date_required_sub_inventory: $(
      "input[name='date_required_sub_inventory']"
    ).val(),
    description: $("input[name='description']").val(),
  };

  let data = {
    creatingMoveOrderHeader: "creatingMoveOrderHeader",
    inputData: inputData,
  };

  console.log(data);

  $.post(
    "./phpAjax/moveOrderAjax.php",
    data,
    function (data, textStatus, jqXHR) {
      console.log(data);


      if (data.success) {
        alert("Data created successfully ");
      } else {
        alert(data.message);
      } 
    },
    "json"
  ).fail(error => {
                

    console.log(error.responseText);

  }




  )

  console.log("CLicked on button");
});
