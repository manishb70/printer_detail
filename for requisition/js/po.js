const getfulldataofponumber = (event) => {
  const po_number = $(event.target).attr("po-id");

  const data = {
    po_id: po_number,
    getLineDataByPoNumber: "getLineDataByPoNumber",
  };

  $.get(
    "./phpAJax/ajaxPurchaseOrder.php",
    data,
    function (data) {
      console.log(data);

      if (data.success) {

        $("#purchaseOrderLineDetails").html("")

        data.data.forEach((element,index) => {
          console.log(element);

          let tr = document.createElement("tr");

          tr.innerHTML = ` 
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                                ${index}
                                                            </td>
                                                            <td
                                                                class="px-6 font-medium py-4 whitespace-nowrap text-sm text-gray-800">
                                                                ${element.po_number}
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                               
                                                                ${element.item_code}
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                               
                                                                ${element.item_shortdiscription}
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                            ${element.unit_price}
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                                ${element.quantity}

                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                            ${element.total_price}
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                            ${element.need_by_date}
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                                ${element.quantity_recevied}
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                                ${element.balance}
                                                            </td>

                                                    `;
          $("#purchaseOrderLineDetails").append(tr);
        });
      }
    },
    "JSON"
  );
};
