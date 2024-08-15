
// console.log($.ajax);


console.log("hello gyhihious");
console.log("hello from scripts");




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






const updateFromIssuer = (event) => {

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
        handOverDate: handOverDate,
        Price: Price,
        reqiusitionType: reqiusitionType,
        handOverBy: handOverBy,
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

            console.log("FEF");
            window.location.reload();
            window.location.reload();

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










const submitRowToAddAndAjax = (event) => {




    let newProjectId = document.getElementById("newProjectId").value
    let NewItenName = document.getElementById("NewItenName").value
    let newItemId = document.getElementById("NewItenName").getAttribute("itemId")
    let newitemQuantity = document.getElementById("newitemQuantity").value
    let newItemNeedDate = document.getElementById("newItemNeedDate").value
    let newItemUserRemarks = document.getElementById("newItemUserRemarks").value
    let departMentname = document.getElementById("departmentName").value
    let departMentId = document.getElementById("departmentName").getAttribute("companyid")


    console.log(newProjectId);
    console.log(NewItenName);
    console.log(newitemQuantity);
    console.log(newItemNeedDate);
    console.log(newItemUserRemarks);

    let data = {
        newRequisitionInsert: "newRequisitionInsert",
        recordId: 1,
        newProjectId: newProjectId,
        NewItenName: NewItenName,
        newitemQuantity: newitemQuantity,
        newItemNeedDate: newItemNeedDate,
        newItemUserRemarks: newItemUserRemarks,
        departMentId: departMentId,
        departMentname: departMentname,
        newItemId: newItemId


    }


    let sno = 1;


    $.ajax({


        method: "POST",
        url: "./ajaxData.php",
        data: data,
        dataType: "json",
        success: function (data) {


            console.log(data);

            if (data.success) {


                s_no =document.getElementById("rowItem").childElementCount;
                

                addRowToGenrate(s_no+1, newProjectId, NewItenName, newitemQuantity, newItemUserRemarks, newItemNeedDate);

                // $("#clos_hover").click();

            }
            document.getElementById("clos_hover").click();
        }

    })

    document.getElementById("clos_hover").click()






}


const addRowToGenrate = (sno, project_id, item_name, quantity, user_remarks, needByDate) => {





    var rowDiv1 = document.createElement("div");
    rowDiv1.classList.add("mb-4", "mt-4", "md:flex", "bg-blue-300", "md:justify-between")



    function createInput() {

        let data = ["s.no", "project id", "item-name", "quantity", "user remark", "need by date"]
        let type = ["txt", "txt", "txt", "number", "txt", "date"]
        let name = ["s.no", "project_id", "item_name", "quantity", "user_remark", "need_by_date"]
        let values = [sno, project_id, item_name, quantity, user_remarks, needByDate]

        data.forEach((element, index) => {



            var div = document.createElement("div");
            div.classList.add("mb-4", "ml-2");

            var lable = document.createElement("lable");
            lable.classList.add("block", "mb-2", "text-sm", "name", "font-bold", "text-gray-700", "dark:text-white")
            lable.innerText = element
            lable.setAttribute("for", name[index])

            var input = document.createElement("input");
            input.classList.add("w-full", "px-3", "py-2", "text-sm", "leading-tight", "text-gray-700", "dark:text-white", "border", "rounded", "shadow", "appearance-none", "focus:outline-none", "focus:shadow-outline")
            input.name = name[index];
            input.value = values[index]
            input.type = type[index];

            div.appendChild(lable)
            div.appendChild(input)

            rowDiv1.appendChild(div)

        });


    }

    createInput()







    // div.appendChild(lable)


    // rowItem.appendChild(div)
    document.getElementById("rowItem").appendChild(rowDiv1)

    console.log(rowDiv1);


}





const setRolesToSelectedUser = (event) => {


    userIsSelected = (event.target.getAttribute("userId"));
    
    // document.getElementById("roleUserId").value=jidji;
    document.getElementById("roleUserId").value=userIsSelected;


    $.ajax({


        method: "GET",
        url: "./ajaxData.php",
        data: {
            getUserAdminRoles:"getUserAdminRoles",
            userIsSelectedId:userIsSelected
        },
        dataType: "json",
        success: function (data) {

            userRoles = data.data


                    console.log(userRoles);


                    let userView =  parseInt(userRoles.user_viewOnly);
                    let user_write =  parseInt(userRoles.user_write);
                    let admin_viewOnly =  parseInt(userRoles.admin_viewOnly);
                    let store_genrate = parseInt( userRoles.store_genrate);
                    let store_isseuer =  parseInt(userRoles.store_isseuer);
                    let store_manager = parseInt( userRoles.store_manager);
                    let admin_write  =  parseInt(userRoles.admin_write );

                    console.log(userView);

                    console.log(userRoles);


                    if(userView){
                        document.getElementById("user_viewOnly").checked=true
                    }else{
                        document.getElementById("user_viewOnly").checked=false
                    } 
                    
                    if(user_write){
                        document.getElementById("user_write").checked=true
                    }else{
                        document.getElementById("user_write").checked=false
                    } 
                    
                    if(admin_viewOnly){
                        document.getElementById("adminView").checked=true
                    }else{
                        document.getElementById("adminView").checked=false
                    } 



                    if(admin_write){
                        document.getElementById("adminWrite").checked=true
                    }else{
                        document.getElementById("adminWrite").checked=false
                    } 
                    
                    

                    if(store_genrate){
                        document.getElementById("genrateStoreRequest").checked=true
                    }else{
                        document.getElementById("genrateStoreRequest").checked=false
                    } 

                    if(store_isseuer){
                        document.getElementById("store_isseuer").checked=true
                    }else{
                        document.getElementById("store_isseuer").checked=false
                    } 

                    if(store_manager){
                        document.getElementById("store_manager").checked=true
                    }else{
                        document.getElementById("store_manager").checked=false
                    } 










                    // if(parseInt(userRoles.user_write)){


                    //     console.log("they can userWrite");
                    // }else{

                    //     console.log("need permission");
                    // }


        }


    })







    // console.log(userIsSelected)  ;






}














