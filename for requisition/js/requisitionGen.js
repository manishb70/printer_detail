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
        response.data.forEach(element => {
            console.log(element);

            // Create a new table row element
            let tr = document.createElement('tr');
            tr.className = "border-b border-blue-gray-200";

            // Construct table cells as a string and set the inner HTML of the row
            tr.innerHTML = `
                <td class="py-3 px-4">
                    <div class="flex items-center mb-4">
                        <input id="default-checkbox" type="checkbox"  rowId=${element.S_no} value=""
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





                <select name="vandor" class="peer h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"> 

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
                                
                    name = "po_number"
                    class="peer h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                        placeholder="Bill address" 
                        value="${genratedPoIdIs}"
                        /></td>
                <td class="py-3 px-4">Incomplete</td>
            `;

            // Append the row to the table body
            document.getElementById("project_id_Tbody").appendChild(tr);
        });
    }, "JSON");




}



let checkedData = {};



function addItemsToPurchaseOrder(event) {

    console.log();

    let status = event.target.checked

    const tr = event.target.closest("tr");

    let rowId = event.target.getAttribute("rowid")

    if (status) {

        console.log(rowId);

        console.log(event.target.isChecked);

        tr.style.filter = "brightness(0.5)"

        const inputs = tr.querySelectorAll("input");
        const select = tr.querySelectorAll("select");




        let inputData = {}


        inputs.forEach(input => {

            inputData[input.name] = input.value;



        });

        // console.log(select);
        select.forEach(input => {

            inputData[input.name] = input.value;



        });


        checkedData[rowId] = inputData





        // inputData["createPurchaseOrder"] = "createPurchaseOrder";


        console.log(checkedData);

        // $.ajax({
        //     url: "phpAjax/requisitionAjax.php",
        //     method: "POST",
        //     data: inputData,
        //     // dataType: "JSON",
        //     success: function (response) {

        //         console.log(response);

        //     }
        // });




        let filteredDataByVendor = {}

        let totalVendors = ["none"]



        Object.keys(checkedData).forEach(element => {

            let currentVendor = checkedData[element].vendor


            totalVendors.push(currentVendor);



        })


        // Object.keys(checkedData).forEach(element => {



        // })

        console.log(totalVendors);





    } else {
        tr.style.filter = "none"



        delete checkedData.rowId
    }



}
