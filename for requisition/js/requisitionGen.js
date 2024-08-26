function getShortDiscriptionAndSetTOInputField() {


    let item_code = $("#item_name").val();


    let spinner = `<div role="status">
    <svg aria-hidden="true" id="spinner_1" class="inline w-10 h-10 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
    </svg>
    <span class="sr-only">Loading...</span>
</div>`




    $.get("ajax.php", {
        itemcode: item_code,
        getShortDiscriptionWithItemCode: "getShortDiscription"
    }, function (data) {

        // console.log(data);
        console.log(data.sDiscription);

        $("#shortDisDiv").show();
        $("#shortDiscription").val(data.sDiscription)




    }, "JSON")






}




console.log("HEllo from js ");


const setLineRowDataForIssuerForPoGenrate = (event) => {



    // recordId = element.getAttribute('data-id');

    const userconfirm = confirm("Are you sure, you want to create purchase order ?")


    if (userconfirm) {


        let recordId = event.target.getAttribute("record-id")





        console.log(recordId);



        let data = {
            getLineItemFromRequisitionWithRecordId: "getLineItemFromRequisitionWithRecordId",
            recordId: recordId
        }

        $.get("phpAjax/requisitionAjax.php", data, function (response) {
            console.log(response);
            console.log(response.data);

            document.getElementById("project_id_Tbody").innerHTML = ""

            let genratedPoIdIs = parseInt(response.genratedPoId)

            $("#purchase_order_id").text(genratedPoIdIs)


            $("#purchase_order_id").attr("po-id", genratedPoIdIs);
            response.data.forEach(element => {
                // console.log(element);

                // Create a new table row element
                let tr = document.createElement('tr');

                // console.log(element.po_status);


                if (element.po_status == "GEN") {

                    tr.style.filter = "brightness(0.5)"
                    tr.style.filter = "opacity(0.5)";

                }


                tr.className = "border-b border-blue-gray-200";

                // Construct table cells as a string and set the inner HTML of the row
                tr.innerHTML = `
                <td class="py-3 px-4">
                    <div class="flex items-center mb-4">
                        <input id="default-checkbox" type="checkbox" name="checkbox" ${(element.po_status == "GEN") ? "disabled" : ""} rowId=${element.S_no} value=""
                            class="w-4 h-4 cursor-pointer text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"

                            onclick = "addItemsToPurchaseOrder(event)"
                            >
                    </div>
                </td>
                <td class="py-3 px-4">

                 <input
                            
                 name ="item_code"
                 class="peer h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                        placeholder="Come from Inventory" value=${element.item_name} / >
                
                </td>
                <td class="py-3 px-4">    <input
                            
                name ="short_discription"
                class="peer h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                        placeholder="Come from Inventory" value=${element.shortDiscription} / ></td>
                <td class="py-3 px-4">
                    <input
                                
                    name ="item_quantity"
                    class="peer h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                        placeholder="Come from Inventory" value=${element.quantity} /></td>
                <td class="py-3 px-4">
                    <input
                                
                    name ="stockinHand"
                    class="peer h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                        placeholder="Come from Inventory" />
                </td>
                <td class="py-3 px-4">  <input
                            
                name = "quantity_for_po"
                class="peer h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                        placeholder="Enter by issuer" /></td>
                <td class="py-3 px-4">    <input
                            
                name = "unit_price"
                class="peer h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                        placeholder="Come from Inventory" value=${element.price} /</td>
                <td class="py-3 px-4">    <input
                            
                name = "total_price"
                class="peer h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                        placeholder="Come from Inventory" value=${element.total_price} / ></td>
                <td class="py-3 px-4"> 





                <select name="vendor" class="peer h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"> 

                        <option value="101">ABC</option>
                        <option value="102">AAA</option>


                
                </select>


                    
                
         
                        
                        
                        </td>
                <td class="py-3 px-4">    <input
                            
                name ="Vendor_site"
                class="peer h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                        placeholder="Come from Inventory" value="vendor_site" / ></td>
                <td class="py-3 px-4">    <input
                            
                name = "project_id"
                class="peer h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                        placeholder="Come from Inventory" value=${element.project_id} / ></td>
                <td class="py-3 px-4">
                    <input type="date"
                                
                    name ="data_hand_over"
                    class="peer h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                        value="${element.date_hand_hover}" />
                        
                </td>
                <td class="py-3 px-4">
                    <input
                                
                    name ="ship_address"
                    class="peer h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                        placeholder="Ship address" />
                </td>
                <td class="py-3 px-4">
                    <input
                                
                    name = "bill_address"
                    class="peer h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                        placeholder="Bill address" />
                </td>
                   <td class="py-3 px-4">   <input
                                
                   disabled
                    name = "po_number"
                    class="peer h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                        placeholder="Bill address" 
                        value="${(element.po_status == "GEN") ? element.po_number : ""}"
                        /></td>
                <td class="py-3 px-4">Incomplete</td>
            `;

                // Append the row to the table body
                document.getElementById("project_id_Tbody").appendChild(tr);
            });
        }, "JSON");


    }else{
        $("#purchseorderclosebtn").click()
    }

}




// let currentVendore = 

// let checkedData = []


function addItemsToPurchaseOrder(event) {
    // let checkedData = {};

    // console.log();

    let status = event.target.checked

    const tr = event.target.closest("tr");

    // if(tr.querySelector("select"))



    // let rowId = event.target.getAttribute("rowid")

    if (status) {

        // console.log(rowId);

        // console.log(event.target.checked);

        tr.style.filter = "brightness(0.5)"

        // const inputs = tr.querySelectorAll("input");
        // const select = tr.querySelectorAll("select");
        // // const vendor = tr.querySelector("select").value;

        // // console.log(vendor);




        // let inputData = {}


        // inputs.forEach(input => {

        //     inputData[input.name] = input.value;



        // });

        // console.log(select);
        // select.forEach(input => {

        //     inputData[input.name] = input.value;



        // });


        // checkedData[rowId] = inputData





        // inputData["createPurchaseOrder"] = "createPurchaseOrder";


        // console.log(checkedData);

        // $.ajax({
        //     url: "phpAjax/requisitionAjax.php",
        //     method: "POST",
        //     data: inputData,
        //     dataType: "JSON",
        //     success: function (response) {

        //         console.log(response);

        //     }
        // });




        // let filteredDataByVendor = {}

        // let totalVendors = ["none"]



        // Object.keys(checkedData).forEach(element => {

        //     let currentVendor = checkedData[element].vendor


        //     totalVendors.push(currentVendor);



        // })


        // Object.keys(checkedData).forEach(element => {



        // })

        // console.log(totalVendors);





    } else {
        tr.style.filter = "none"



        // delete checkedData.rowId
    }




}




function addReqiuisitionItemsToPurchaseLine(event) {
    // Find the closest <tbody> to the event target

    let selectTedRows = []
    let checkedData = {}
    let checkedRow = {};

    const tbody = document.getElementById("project_id_Tbody")


    const rowItems = tbody.querySelectorAll("tr");


    // console.log(rowItems);




    // rowItems.forEach(element =>{
    //     console.log(element);
    // })


    rowItems.forEach((row, index) => {

        //    const checkbox = row.querySelector("input['type=checkbox]'")

        //     console.log(checkbox);



        const checkbox = row.querySelector("input[type='checkbox']");

        const sno = checkbox.getAttribute("rowid")

        // console.log(checkbox);



        //get checked data

        if (checkbox.checked) {

            selectTedRows[index] = row;



            let inputNameAndValue = {}
            const inputs = row.querySelectorAll("input")
            const select = row.querySelectorAll("select")

            inputs.forEach(input => {



                inputNameAndValue[input.name] = input.value
            })
            select.forEach(input => {
                inputNameAndValue[input.name] = input.value
            })






            checkedRow[sno] = inputNameAndValue


            // console.log(checkedRow);

            checkedData["checkedrow"] = checkedRow
        }
        // console.log(inputs);
    });

    console.log(checkedData);



    let checkedRowItem = checkedData.checkedrow


    checkedData["addItemsToLineLable"] = "addItemsToLineLable";
    checkedData["po_number"] = $("#purchase_order_id").attr("po-id");

    let vendor_are_same = true



    console.log(checkedRowItem);
    Object.keys(checkedRowItem).forEach(element => {
        console.log(checkedRowItem[element].vendor);

        let currentVendor = checkedRowItem[element].vendor

        Object.keys(checkedRowItem).forEach(element => {


            if (currentVendor != checkedRowItem[element].vendor) {

                vendor_are_same = false;


            }


        })



    })

    console.log(vendor_are_same);


    if (vendor_are_same) {

        $.ajax({

            url: "phpAjax/requisitionAjax.php",
            method: "POST",
            data: checkedData,
            dataType: "JSON",
            success: function (response) {



                console.log(response);

                if (response.success) {
                    alert(`Purchase Order success fully created for  ${Object.keys(checkedRow).length} items`)

                    console.log(Object.keys(checkedRow).length);

                    selectTedRows.forEach(element => {

                        element.style.filter = "opacity(0.5)";

                    })

                    let checkInput = tbody.querySelectorAll("input[type='checkbox']")

                    checkInput.forEach(check => {
                        check.disabled = true

                    })
                }

            }, error: function (error) {
                console.log(error);

            }
        });


    } else {
        alert("please select same vendor")
    }



}
