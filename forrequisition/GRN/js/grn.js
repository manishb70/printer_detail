let selectedRow = 0;

function grnDataInsert() {
  var inputsData = document
    .getElementById("inputFormDataGrn")
    .querySelectorAll("input");

  // console.log(inputsData);

  let inputFieldsData = {};

  inputFieldsData["grnDataInsert"] = "grnDataInsert";

  inputsData.forEach((Element) => {
    var inputName = Element.name;
    inputValue = Element.value;

    inputFieldsData[inputName] = inputValue;
  });

  // console.log(inputFieldsData);

  // console.log(inputData);

  console.log(inputFieldsData);
  $.ajax({
    url: "./ajax/ajaxGrn.php",
    method: "POST",
    dataType: "JSON",
    data: inputFieldsData,
    success: function (data) {
      console.log(data);
      if (data.success) {
        alert("receipt success fully genrated");
      } else {
        alert("Something went wrong");
      }
    },
  });
}

function searchPoInGrnFor() {
  let po_number = $("#po_number").val();

  data = {
    getDataForGrnPo: "getDataForGrnPo",
    po_number: po_number,
  };

  $.getJSON("ajax/ajaxGrn.php", data, function (data) {
    console.log(data);

    if (data.success) {
      alert("Data Successfully fetch");

      let tbody = $("#poGrnBody");
      tbody.innerHTML = "";
      tbody.innerText = "";

      $(tbody).text("");

      let rowData = data.data;

      $("#po_vendor_name").val(rowData[0].supplier_name);
      $("#shipTo").val(rowData[0].shipTo);
      $("#bill_to").val(rowData[0].bill_to_location);

      console.log(rowData);

      rowData.forEach((row, index) => {
        console.log(row);
        console.log(row.status);

        index++;
        let tr = document.createElement("tr");
        tr.classList.add("hover:bg-gray-600");
        tr.setAttribute("con-id", index);

        tr.innerHTML = ` 

                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                        <input id="default-checkbox" type="checkbox" value=""
                                                            onchange="setLineTableToLine(event)"
                                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                        <input type="txt" id="input-email-label"
                                                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                            placeholder=1 value="${index}" disabled>
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                        <input type="txt" id="input-email-label" name="item_code"
                                                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                            placeholder="item_code" value="${row.item_code}">
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                        <input type="txt" id="input-email-label" name="item_name"
                                                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                            placeholder="Item name"
                                                            value="${row.item_shortdiscription}">
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                        <input type="number" id="input-email-label"
                                                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                            name="unit_Price" onchange="setTotal(event)"
                                                            placeholder="Unit price" value="${row.unit_price}">
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                        <input type="number" id="input-email-label" name="Qty"
                                                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:
                                                inter-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                            onchange="setTotal(event)" placeholder="Quantity"
                                                            value="${row.balance}">
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                        <input type="number" id="input-email-label" name="total_price"
                                                            disabled
                                                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                            placeholder="Total">
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                        <input type="txt" id="input-email-label" name="need_by_date"
                                                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                            placeholder="need_by_date" value="inProcess">
                                                    </td>



                                                    


                                                `;




        $(tbody).append(tr);
      });
    } else if (!data.success) {
      alert("Data not found ");

      $(tbody).text("Data not found  please try again");
    } else {
      alert("somethin went wronf");
    }
  }).fail((error) => {
    console.log(error.responseText);
  });
}

const setLineTableToLine = (event) => {
  if (event.target.checked == 1) {
    let childTableId = $($(event.target).closest("tr")).attr("con-id");
    console.log(childTableId);

    $(`#${selectedRow}`).hide();

    selectedRow = childTableId;
  }
};

function reciveTable() {
  $(`#${selectedRow}`).show();
}
