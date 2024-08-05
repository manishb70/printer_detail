
// console.log($.ajax);


console.log("hello gyus");





let currentRow;

const getDataOfEdit = (event) => {


    let row = event.target;
    id = row.getAttribute("dataid");

    $closeTr = $(row.closest("tr"));
    currentRow = $closeTr
    let item_Name = ($closeTr.find("#item_name")[0]).value;
    let status = ($closeTr.find("#status")[0]).value;
    let userRemarks = ($closeTr.find("#user_remarks")[0]).value;
    $("#EditItemName").val(item_Name)
    // $("#status").val(item_Name)  
    $("#editRemark").val(userRemarks)
    $("#updateButton").attr("dataEditId", id)



}



const getDataOfEditIssuer = (event) => {


    let row = event.target;
    id = row.getAttribute("dataid");

    $closeTr = $(row.closest("tr"));
    currentRow = $closeTr
    let item_Name = ($closeTr.find("#item_name")[0]).value;
    let status = ($closeTr.find("#status")[0]).value;
    let handoverDate = ($closeTr.find("#date_hand_hover")[0]).value;
    let handoverBy = ($closeTr.find("#handover_over_by")[0]).value;
    let price = ($closeTr.find("#price")[0]).value;
    let userRemarks = ($closeTr.find("#user_remarks")[0]).value;
    let requisition_type = ($closeTr.find("#requisition_type")[0]).value;
    
    $("#EditItemName").val(item_Name)
    $("#stausList").val(status)  
    $("#editRemark").val(userRemarks)
    $("#updateButton").attr("dataEditId", id)
    $("#handOverByDate").val(handoverDate)
    $("#handOverBy").val(handoverBy)
    $("#requisitionType").val(requisition_type)
    $("#totalPrice").val(price)   



}























const updateDataUser = (event) => {


    event.preventDefault();

    id = event.target.getAttribute("dataEditId");

    // let newStatus = $("#stausList").value;
    let newRemark = document.getElementById("editRemark").value;
    let newStatus = document.getElementById("stausList").value;

    let data = {
        update_reqsuisition: "update_reqsuisition",
        user_id: id,
        remarks: newRemark,
        status: newStatus
    }

    console.log(newStatus);
    console.log(newRemark);




    $.ajax({

        url: "./ajaxData.php",
        method: "POST",
        data: data,
        dataType: "json",
        success: function (data) {

            console.log(data);
            // currentRow.fadeOut(1000)
            window.location.reload();
        }





    })






}






const updateFromIssuer = (event)=>{

    event.preventDefault();


    id = event.target.getAttribute("dataeditid");

    // let newStatus = $("#stausList").value;


    let handOverDate = document.getElementById("handOverByDate").value;
    let handOverBy = document.getElementById("handOverBy").value;
    let Price = document.getElementById("totalPrice").value;
    let status = document.getElementById("stausList").value;
    let reqiusitionType = document.getElementById("requisitionType").value;
    let finalRemarks = document.getElementById("editRemark").value;


    console.log(id);
    console.log(handOverDate);
    console.log(handOverBy);
    console.log(Price);
    console.log(status);
    console.log(reqiusitionType);
    console.log(finalRemarks);

    console.log("success from before ajaxa");



    let data = {
        updatereqsuisitionFromStoreIssuer: "update_reqsuisition",
        user_id: id,
        handOverDate:handOverDate,
        Price:Price,
        reqiusitionType:reqiusitionType,
        handOverBy:handOverBy,
        finalRemarks: finalRemarks,
        status: status
    }

    // console.log(newStatus);
    // console.log(newRemark);




    $.ajax({

        url: "./ajaxData.php",
        method: "POST",
        data: data,
        // dataType: "json",
        success: function (data) {

            console.log(data);
                
            
            // currentRow.fadeOut(1000)
      

            // window.location.reload();
      
        }





    })



}















const updateRequisition = (event) => {
        console.log("hwllo");

        let row = event.target;
        id = row.getAttribute("dataid");
        $closeTr = $(row.closest("tr"));
        let status = ($closeTr.find("#status")[0]).value;

        let remarks = ($closeTr.find("#user_remarks")[0]).value;


        console.log(itemName);

        $.ajax({

            method: "GET",
            url: "./ajaxData.php",
            data: {
                update_reqsuisition: "",
                name: row.name,
                id: id
            },
            dataType: "json",

            success: function (data) {

                // console.log(data);

                // console.log($closeTr);

                // $closeTr.fadeOut(100);

            }



        })





        //     console.log(id);
    }
