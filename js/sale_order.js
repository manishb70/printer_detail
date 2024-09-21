$("#saleOrderSavebtn").on("click", function () {
  console.log("clicked on save button");

  let inputs = document.querySelectorAll("input");

  let inputsData = {};

  inputs.forEach((input, index) => {
    let name = input.name;
    let value = input.value;

    inputsData[name] = value;
  });

  let data = {};

  let itemsArray = [];
  const itemssDataCreate = (item_type, tbody_id) => {
    let tbody = $(`#${tbody_id}`)[0];
    
    let trows = tbody.querySelectorAll("tr");
    
    trows.forEach((row) => {
      console.log(row);
      let itemssData = {};
      let qty = row.querySelector("input[name='qty']").value;

      itemssData["item_id"] = $(row).attr("item-id");
      itemssData["quantuty"] = qty;
      itemssData["item_type"] = item_type;



      itemsArray.push(itemssData)
    });





    
    console.log();
  };
  






  itemssDataCreate("finish_good", "finish_good_items_body");
  itemssDataCreate("row_item", "row_items_body");


  
  data["userInputData"] = inputsData;
  data["createdSaleOrder"] = "createdSaleOrder";
  data["inItems"]=itemsArray;
  
  console.log("data", data);
  $.post(
    "./phpAjax/saleOrderAjax.php",
    data,
    function (data) {
      if (data.success) {
        alert("Success");
      }
      console.log(data);
    },
    "json"
  ).fail((error) => {
    console.log(error);
  });

  // console.log(inputsData);
});

const setBomItemInSearch = (bom_data) => {
  let tbody = $("#serchItemBox")[0];

  tbody.innerHTML = "";
  bom_data.forEach((Element, index) => {
    index++;
    let tr = document.createElement("tr");

    tr.innerHTML = `
    <tr class="hover:bg-slate-50">
    <td class="p-4">
    <p class="text-sm font-bold">
    ${index}
    </p>
                                                </td>
                                                <td class="p-4">
                                                <p class="text-sm">
                                                ${Element.item_code}
                                                </p>
                                                </td>
                                                <td class="p-4">
                                                <p class="text-sm">
                                                    ${Element.item_name}
                                               </p>
                                               </td>
                                                    <td class="p-4">
                                                    <p class="text-sm">
                                                    ${Element.price}
                                                    </p>
                                                    </td>
                                                                                                      
                                                    <td class="p-4">
                                                    <a  head-id='${Element.header_id}' onclick='setIdToBomTable(event)'  class="text-sm cursor-pointer font-semibold ">
                                                    Add
                                                    </a>
                                                    </td>
                                                    </tr>
                                                    
                                                    
                                                    
                                                    `;

    $(tbody).append(tr);
  });
};

$("#search_input_item").on("input", function () {
  let searchQuery = $("#search_input_item").val();

  setItemsForAddInItems(searchQuery);
});

const setItemsForAddInItems = (searchQuery) => {
  let data = {
    getIBomItem: "getIBomItem",
    searchQuery: searchQuery,
  };

  $.get(
    "./phpAjax/saleOrderAjax.php",
    data,
    function (data) {
      console.log(data);

      if (data.success) {
        let bom_data = data.bom_data;

        setBomItemInSearch(bom_data);
      }
    },
    "json"
  ).fail((error) => {
    console.log(error);
  });
};

const setIdToBomTable = (event) => {
  let id = $(event.target).attr("head-id");

  setBomDataToTable(id);

  let tr = event.target.closest("tr");

  $(event.target).fadeOut();
};

const setBomDataToTable = (id) => {
  let tbody = $("#finish_good_items_body")[0];
  $(tbody.closest("table")).fadeIn(1000);

  let data = {
    getIBomItemOnlyData: "getIBomItemOnlyData",
    search_id: id,
  };

  $.get(
    "./phpAjax/saleOrderAjax.php",
    data,
    function (data) {
      // console.log(data);

      if (data.success) {
        let bom_data = data.bom_data[0];

        let length = tbody.querySelectorAll("tr").length;
        length++;

        console.log(bom_data);

        console.log(bom_data.item_code);

        let tr = document.createElement("tr");
        tr.setAttribute("item-id", bom_data.header_id);
        tr.innerHTML = `

               

                                            <td class="p-4 border-b border-slate-200 py-5">
                                                <p class="block font-semibold text-sm text-slate-800">${length}</p>
                                            </td>

                                            <td class="p-4 border-b border-slate-200 py-5">
                                                <p class="text-sm text-slate-500">${bom_data.item_name}</p>
                                            </td>
                                            <td class="p-4 border-b border-slate-200 py-5">
                                                <p class="text-sm text-slate-500">${bom_data.item_code}</p>
                                            </td>
                                            <td class="p-4 border-b border-slate-200 py-5">

                                                <p class="text-sm text-slate-500">${bom_data.price}</p>
                                            </td>
                                            <td class="p-4 border-b border-slate-200 py-5">
                                                <input type="number" name="qty"
                                                    class="w-28 rounded-md border text-xs border-gray-500 bg-white py-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                    style="border-color: #C8A1E0;" />
                                            </td>
                                            <td class="p-4 border-b border-slate-200 py-5">

                                                <p class="text-sm text-slate-500">200</p>
                                            </td>
                                            <td class="p-4 border-b border-slate-200 py-5">
                                                <img src="https://demos.creative-tim.com/corporate-ui-dashboard-pro/assets/img/kam-idris-_HqHX3LBN18-unsplash.jpg" alt="Product 1" class="w-16 h-16 object-cover rounded" />
                                            </td>



                                            <td class="p-4 border-b border-slate-200 py-5">
                                                <button onclick='selfRemoveRowFromTable(event)' type="button" class="text-slate-500 hover:text-slate-700">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
                                            </td>

                                            <td class="p-4 border-b border-slate-200 py-5">
                                                <button data-modal-target="extralarge-modal" data-modal-toggle="extralarge-modal"
                                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-1.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                                    type="button">
                                                    Bom
                                                </button>
                                            </td>
                                        



              
              `;

        $(tbody).append(tr);
      }
    },
    "json"
  ).fail((error) => {
    console.log(error);
  });
};

const selfRemoveRowFromTable = (event) => {
  let tr = event.target.closest("tr");

  $(tr).remove();
  1000;
};

//this is for row items

const setItemsForAddInItemsRow = (searchQuery) => {
  let data = {
    getRowItem: "getRowItem",
    searchQuery: searchQuery,
  };

  $.get(
    "./phpAjax/saleOrderAjax.php",
    data,
    function (data) {
      console.log(data);

      if (data.success) {
        let item_master_data = data.bom_data;

        console.log(item_master_data);

        let tbody = $("#serchItemBoxRow")[0];

        tbody.innerHTML = "";
        item_master_data.forEach((Element, index) => {
          index++;
          let tr = document.createElement("tr");

          tr.innerHTML = `
                  <tr class="hover:bg-slate-50">
                  <td class="p-4">
                  <p class="text-sm font-bold">
                  ${index}
                  </p>
                                                              </td>
                                                              <td class="p-4">
                                                              <p class="text-sm">
                                                              ${Element.item_code}
                                                              </p>
                                                              </td>
                                                              <td class="p-4">
                                                              <p class="text-sm">
                                                                  ${Element.Short_Description}
                                                             </p>
                                                             </td>
                                                                  <td class="p-4">
                                                                  <p class="text-sm">
                                                                  ${Element.Price}
                                                                  </p>
                                                                  </td>
                                                                                                                    
                                                                  <td class="p-4">
                                                                  <a  head-id='${Element.S_No}' onclick='setIdToBomTableRow(event)'  class="text-sm cursor-pointer font-semibold ">
                                                                  Add
                                                                  </a>
                                                                  </td>
                                                                  </tr>
                                                                  
                                                                  
                                                                  
                                                                  `;

          $(tbody).append(tr);
        });
      }
    },
    "json"
  ).fail((error) => {
    console.log(error);
  });
};

$("#search_input_item_row").on("input", function () {
  let searchQuery = $("#search_input_item_row").val();

  setItemsForAddInItemsRow(searchQuery);
});

const setBomDataToTableRow = (id) => {
  let tbody = $("#row_items_body")[0];

  $(tbody.closest("table")).fadeIn(1000);

  let data = {
    getIBomItemOnlyDataRow: "getIBomItemOnlyDataRow",
    search_id: id,
  };

  $.get(
    "./phpAjax/saleOrderAjax.php",
    data,
    function (data) {
      // console.log(data);

      if (data.success) {
        let bom_data = data.bom_data[0];

        let length = tbody.querySelectorAll("tr").length;
        length++;

        console.log(bom_data);

        console.log(bom_data.item_code);

        let tr = document.createElement("tr");
        tr.setAttribute("item-id", bom_data.S_No)

        tr.innerHTML = `

               

                                            <td class="p-4 border-b border-slate-200 py-5">
                                                <p class="block font-semibold text-sm text-slate-800">${length}</p>
                                            </td>

                                            <td class="p-4 border-b border-slate-200 py-5">
                                                <p class="text-sm text-slate-500">${bom_data.Short_Description}</p>
                                            </td>
                                            <td class="p-4 border-b border-slate-200 py-5">
                                                <p class="text-sm text-slate-500">${bom_data.item_code}</p>
                                            </td>
                                            <td class="p-4 border-b border-slate-200 py-5">

                                                <p class="text-sm text-slate-500">${bom_data.Price}</p>
                                            </td>
                                            <td class="p-4 border-b border-slate-200 py-5">
                                                <input type="number" name="qty"
                                                    class="w-28 rounded-md border text-xs border-gray-500 bg-white py-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md"
                                                    style="border-color: #C8A1E0;" />
                                            </td>
                                            <td class="p-4 border-b border-slate-200 py-5">

                                                <p class="text-sm text-slate-500">200</p>
                                            </td>
                                            <td class="p-4 border-b border-slate-200 py-5">
                                                <img src="https://demos.creative-tim.com/corporate-ui-dashboard-pro/assets/img/kam-idris-_HqHX3LBN18-unsplash.jpg" alt="Product 1" class="w-16 h-16 object-cover rounded" />
                                            </td>



                                            <td class="p-4 border-b border-slate-200 py-5">
                                                <button onclick='selfRemoveRowFromTable(event)' type="button" class="text-slate-500 hover:text-slate-700">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
                                            </td>




              
              `;

        $(tbody).append(tr);
      }
    },
    "json"
  ).fail((error) => {
    console.log(error);
  });
};

const setIdToBomTableRow = (event) => {
  let id = $(event.target).attr("head-id");

  setBomDataToTableRow(id);

  let tr = event.target.closest("tr");

  $(event.target).fadeOut();
};
