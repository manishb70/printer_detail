$("#selectMainCat").on("change", function () {
  console.log(this.value);

  let id = this.value;

  data = {
    categoryFields: "categoryFields",
    catId: id,
  };

  $.ajax({
    url: "ajaxItemMaster.php",
    method: "GET",
    data,
    dataType: "json",
    success: function (data) {
      // document.getElementById("sub_catArea").innerText = ""
      let resData = data.data;

      if (data.success) {
        console.log(resData);

        $("#subcatselect").html("");

        $("#subcatselect").append(`
                
    
            <option selected disabled>Select</option>
            
            
            `);

        Object.keys(resData).forEach((element) => {
          $("#subcatselect").append(`
                
    
                <option value='${resData[element][0].SubcatId}'>${element}</option>
                
                
                `);
        });
      }

      // addSubCatFields(resData)
    },
    error: function (error) {
      console.log(error);
    },
  });
});

$("#subcatselect").on("change", function () {
  let sub_id = this.value;

  let data = {
    sub_id: sub_id,
    getRequireAttrs: "getRequireAttrs",
  };

  $.get(
    "./phpAjax/categoryManagentAjax.php",
    data,
    function (data, textStatus, jqXHR) {
      console.log(data);

      if (data.success) {
        console.log(data.data);

        $("#required_att_tbody").html("");
        $("#attr_table_div").slideDown(1000);

        data.data.forEach((row, index) => {
          index++;

          $("#required_att_tbody").append(`
                            

                             <tr class="hover:bg-slate-50 border-b border-slate-200">
                                <td class="p-4 py-5">
                                    <p class="block font-semibold text-sm text-slate-800">${index}</p>
                                </td>
                                <td class="p-4 py-5">
                                    <p class="block text-sm text-slate-800">${row.name}</p>
                                </td>
                                <td class="p-4 py-5">
                                    <p class="block text-sm text-slate-800">${row.type}</p>
                                </td>
                                <td class="p-4 py-5">
                                    <p class="block text-sm text-slate-800">${row.default_value}</p>
                                </td>
                                <td class="p-4 py-5">
                                    <p class="block text-sm text-slate-800">${row.placeholder}</p>
                                </td>
                                <td class="p-4 py-5">
                                    <p class="block text-sm text-slate-800">${row.dropdown}</p>
                                </td>
                                <td class="p-4 py-5">
                                    <p class="block hover:underline  cursor-pointer font-medium text-sm text-blue-800">Edit </p>
                                </td>
                                <td class="p-4 py-5">
                                    <p   data-dialog-target="dialog-md"  class="block hover:underline  cursor-pointer font-medium text-sm text-slate-800"><i data-modal-target="default-modal" data-modal-toggle="default-modal" class="fa-solid fa-xmark"></i> </p>

                                    
                                </td>

                            </tr>
                            
                            
                            
                            `);
        });
      }
    },
    "json"
  ).fail((error) => {
    console.log(error);
  });
});

$("#addAttribute").on("click", function () {
  let fields_name = $("#requiredFieldsArea").val();


  let tbody = $("#field_att_tbody")[0]
  let lenoftbody = tbody.length
    

  $("#field_att_tbody").append(`
    
    
    


     <tr class="hover:bg-slate-50 border-b border-slate-200">
                                <td class="p-4 py-5">
                                    <p class="block font-semibold text-sm text-slate-800">${lenoftbody}</p>
                                </td>
                                <td class="p-4 py-5">
                                    <p class="block text-sm text-slate-800">${fields_name}</p>
                                </td>
                                <td class="p-4 py-5">
                                    <p class="block text-sm text-slate-800">txt</p>
                                </td>
                                <td class="p-4 py-5">
                                    <p class="block text-sm text-slate-800">null</p>
                                </td>
                                <td class="p-4 py-5">
                                    <p class="block text-sm text-slate-800">${fields_name}</p>
                                </td>

                            </tr>


    
    
    
    
    
    `)
});
