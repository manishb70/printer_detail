$("button[name='search_so']").on("click", function (event) {
  event.preventDefault();

  let sonumber = parseInt($("#sonumber").val());

  console.log(sonumber);

  let data = {
    sonumber: sonumber,
    getSoData: "getSoData",
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

function checkInputValue(maxAllowedValue, event) {
  let input = event.target;
  let inputValue = input.value;
  const value = parseInt(inputValue, 10); // Use radix 10 for parsing

  maxAllowedValue++;
  if (!isNaN(value) && value >= maxAllowedValue) {
    maxAllowedValue--;
    input.classList.add("input-exceeds");
    alert("CANT BE GREATER THEN " + maxAllowedValue);
    input.value = maxAllowedValue;
  } else {
    input.classList.remove("input-exceeds");
  }
}

function issueItems() {
  let currentTr = event.target.closest("tr");



  let so_line_id = parseInt(currentTr.getAttribute("data-line-id"));
  let qty = parseInt(currentTr.querySelector('input[name="need_qty"]').value);
  let avaliable_qty_area_th  =currentTr.querySelector("th[name='avaliable_qty_area']")
  let need_qty_area  =currentTr.querySelector("th[name='need_qty_area']")


  console.log(avaliable_qty_area_th);

  let data = {
    issueItems: "issueItems",
    so_line_id: so_line_id,
    qty:qty

  };




  $.post(
    "./phpAjax/mainProjectStatusAjax.php",
    data,
    function (data, textStatus, jqXHR) {
      console.log(data);

        if(data.success) {

          alert("items successfully issued from store !! ")

          avaliable_qty_area_th.textContent =parseInt(avaliable_qty_area_th.textContent)-parseInt(qty)
          need_qty_area.textContent =parseInt(need_qty_area.textContent)-parseInt(qty)



      }

    },"json"
    ).fail((error) => {
    console.log(error.responseText);
  });



  console.log(currentTr);



  
}
