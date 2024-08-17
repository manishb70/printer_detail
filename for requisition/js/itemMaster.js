
console.log("hello from item master");

let attrArray = []

const setRequireFieldsFromCategory = () => {


    // document.getElementById("attrArea").innerText = "";
    // document.getElementById("attrArea").style.display="flex";


    let id = document.getElementById("catId").value;

    data = {
        categoryFields: "categoryFields",
        catId: id
    }

    $.ajax({

        url: "ajaxItemMaster.php",
        method: "GET",
        data,
        dataType: "json",
        success: function (data) {
            document.getElementById("sub_catArea").innerText = ""
            let resData = data.data

            addSubCatFields(resData)


        }, error: function (error) {
            console.log(('error; ' + eval(error)))
        }


    })





}





let remquireFieldsObject = {};
const addRequireField = (data) => {



    //pass the array for the loop





    let mainBox = document.getElementById("attrArea")

    // mainBox.display="flex"


    let mainData = Array.from(data)



    mainData.forEach(element => {

        // console.log(element);


        console.log(element);

        var div = document.createElement("div")
        div.classList.add("mb-4", "md:mr-2", "max-w-1", "md:mb-0")

        var lable = document.createElement("lable")
        lable.classList.add("block", "mb-2", "text-sm", "name", "font-bold", "text-gray-700", "dark:text-white")
        lable.innerText = element.name;


        var input = document.createElement("input")
        input.name = element.name
        input.classList.add("w-full", "px-3", "py-2", "text-sm", "leading-tight", "text-gray-700", "dark:text-white", "border", "rounded", "shadow", "appearance-none", "focus:outline-none", "focus:shadow-outline");
        input.setAttribute("catId", element.catId)
        input.placeholder = element.name

        // input.setAttribute("attribut-id",)

        div.appendChild(lable)
        div.appendChild(input)

        mainBox.appendChild(div);



    });
    div.appendChild(lable)
    div.appendChild(input)

    mainBox.appendChild(div);







    div.appendChild(lable)
    div.appendChild(input)

    mainBox.appendChild(div);






}


const hideData = (event) => {
    event.preventDefault();

    let mainBox = document.getElementById("attrArea")


    mainBox.style.display = "none"



}


//object passs
const addSubCatFields = (data) => {




    let mainBox = document.getElementById("sub_catArea")



    // run with sub category base




    Object.keys(data).forEach((element, index) => {



        let h1 = document.createElement("h1");
        h1.classList.add("font-bold", "cursor-auto")
        h1.textContent = element
        let btn = document.createElement("a")
        btn.innerText = "+";
        btn.style.cursor = "pointer"
        btn.style.cursor = 'pointer'


        let tempId = `attr${index}`
        attrArray.push(tempId)
        btn.setAttribute("attr-id", tempId)


        // console.log(tempId);

        btn.onclick = function (event) {

            shoeOrHideattr(event)
        }


        var fileInput = document.createElement("input")
        fileInput.type = "file";
        fileInput.name = "itemImage";








        let attr = document.createElement("div");
        attr.classList.add("mb-4", "hidden", "mt-4", "transition-all", "border-2-black-600", "md:flex-wrap", "flex", "flex-wrap")
        attr.id = `attr${index}`


        attr.appendChild(fileInput)


        mainBox.appendChild(h1)
        mainBox.appendChild(btn)

        // run with attr base

        data[element].forEach(element => {

            // console.log(element.name);

            // console.log(element.attr_id);


            var div = document.createElement("div")
            div.classList.add("mb-4", "md:mr-2", "max-w-1", "md:mb-0")


            var lable = document.createElement("lable")
            lable.classList.add("block", "mb-2", "text-sm", "name", "font-bold", "text-gray-700", "dark:text-white")
            lable.innerText = element.name;


            var input = document.createElement("input")
            input.name = element.name
            input.classList.add("w-full", "px-3", "py-2", "text-sm", "leading-tight", "text-gray-700", "dark:text-white", "border", "rounded", "shadow", "appearance-none", "focus:outline-none", "focus:shadow-outline");
            input.placeholder = element.name
            input.setAttribute("attr-id", element.attr_id)
            input.setAttribute("subCat-id", element.SubcatId)




            if (element.dropdown == "yes") {


                input = document.createElement("select");
                input.name = element.name;
                input.classList.add("w-full", "px-3", "py-2", "text-sm", "leading-tight", "text-gray-700", "dark:text-white", "border", "rounded", "shadow", "appearance-none", "focus:outline-none", "focus:shadow-outline");
                input.setAttribute("attr-id", element.attr_id)
                input.setAttribute("subCat-id", element.SubcatId)
                input.id = element.name
                input.value = element.name
                input.required = true





                $.ajax({

                    url: "ajaxItemMaster.php",
                    method: "GET",
                    dataType: "json",
                    data: {
                        getOptionAttr: "getOptionAttr",
                        attr_id: element.attr_id
                    },
                    success: function (data) {


                        console.log(data.data);

                        data.data.forEach(element => {


                            var option = document.createElement("option")

                            option.innerText = element.description;
                            option.value = element.description;

                            // console.log(element.description);

                            input.appendChild(option)


                        })



                    }, error: function (error) {
                        console.log('error; ' + eval(error))
                    }



                })




            }



            div.appendChild(lable)
            div.appendChild(input)

            attr.appendChild(div)
            // attr.classList.add()
        })

        mainBox.appendChild(attr)


    })





}


let selectedSubCat = 0;

const shoeOrHideattr = (event) => {


    // console.log(events);

    event.target.innerText = "-"

    let id = event.target.getAttribute("attr-id")

    // console.log(id);


    let openTheAttr = attrArray.filter(element => {

        if (element !== id) {
            return true
        }
    })

    // console.log(openTheAttr);

    // target.closest("div")

    // console.log(target.closest("div"));


    selectedSubCat = id

    div = document.getElementById(id)

    // div.style.display="block"

    if (div.classList.contains("hidden")) {

        // div.classList.add("blvo ")
        // div.style.display="block"

        div.classList.remove("hidden")

        // console.log("D");
    } else {
        div.classList.add("hidden")

        event.target.innerText = "+"

    }


    openTheAttr.forEach(element => {

        document.getElementById(element).classList.add("hidden")


    })






}








let currentItemStatus = "Save";




if (document.getElementById("itemSubmit")) {
    document.getElementById("itemSubmit").addEventListener("click", () => {

        console.log(currentItemStatus);
        currentItemStatus = "SUBMIT";
    })


    document.getElementById("itemSave").addEventListener("click", () => {

        currentItemStatus = "SAVE";
        console.log(currentItemStatus);
    })

}




const submitItemInfoToDb = async () => {


    let inputs = document.getElementById(selectedSubCat).querySelectorAll("input")
    let select = document.getElementById(selectedSubCat).querySelectorAll("select")



    let itemFilePath = "";


    let fileItem = document.getElementById(selectedSubCat).querySelector('[name="itemImage"]');

    if (fileItem && fileItem.files.length > 0) {
        var formData = new FormData();
        formData.append('itemImage', fileItem.files[0]);

        // Assuming there are other fields in the form to append to formData

        await $.ajax({
            url: 'ajaxItemMaster.php',
            type: 'POST',
            data: formData,
            dataType: "JSON",
            contentType: false, // Prevent jQuery from setting Content-Type header
            processData: false, // Prevent jQuery from converting the data into a query string
            success: function (response) {

                console.log("File path is :" + response.filePath);
                console.log(response);

                itemFilePath = response.filePath;
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.error('Error:', textStatus, errorThrown);
            }
        });
    } else {
        console.log("No file selected or file input not found.");
    }



    let withName = {}
    let itemCodeGen = "";

    let itemDataInfo = {}
    itemDataInfo["itemMasterSave"] = "itemMasterSave"


    itemDataInfo["manCatId"] = document.getElementById("catId").value


    let attInfo = {};

    let fields_is_noteValid = false;


    let maxLenWord = 0;
    inputs.forEach((element, index) => {


        let attrName = element.getAttribute("name");
        let attributeValue = element.value

        // console.log(element);

        if (attributeValue.trim() == "") {
            fields_is_noteValid = true;
        }
        itemCodeGen += attributeValue.substring(0, 4)
        attInfo[attrName] = attributeValue

        itemDataInfo["SubCatid"] = element.getAttribute("subCat-id")
        if (index > 0 & index < 6) {
            maxLenWord++;
            itemCodeGen += "-"
        }

    })

    if (fields_is_noteValid) {
        alert("please fill all the valu")

        inputs.forEach(element => {


            let attributeValue = element.value

            if (attributeValue.trim() == "") {

                element.style.borderColor = "RED";
            }

        })

    } else {



        itemDataInfo["filePath"] = itemFilePath;

        select.forEach(element => {


            let attrName = element.getAttribute("name");
            let attributeValue = element.value



            attInfo[attrName] = attributeValue

        })





        itemDataInfo["itemCodeGenrated"] = itemCodeGen.toUpperCase();


        itemDataInfo["currentItemStatus"] = currentItemStatus;
        itemDataInfo["attrData"] = attInfo;




        // console.log(itemDataInfo);


        await $.ajax({

            url: "ajaxItemMaster.php",
            method: "GET",
            dataType: "JSON",
            data: itemDataInfo,

            success: function (data) {

                console.log(data);

                console.log(data.success);

                if (data.success) {

                    alert("data saved")

                    document.getElementById("recordId").innerText = `Rcord Id : ${data.recordId} .`
                    document.getElementById("recordId").style.display = "block"
                    document.getElementById("Item_code").innerText = `Item Code : ${data.ItemCode} .`
                    document.getElementById("Item_code").style.display = "block"
                }

                // if (data[success]) {

                //     alert("data saved")

                //     document.getElementById("recordId").innerText = `Rcord Id : ${data.recordId} .`
                //     document.getElementById("recordId").style.display = "block"
                //     document.getElementById("Item_code").innerText = `Item Code : ${data.ItemCode} .`
                //     document.getElementById("Item_code").style.display = "block"
                // }
                if (currentItemStatus == "SUBMIT") {
                    location.reload();
                }

            }


        })







    }


}









const sendElectricDataToItemMaster = (event) => {

    //    console.log(event.target)\

    btn = event.target
    let data = btn.closest("tr").querySelectorAll("input")
    let select = btn.closest("tr").querySelector("td")



    var formdata = new FormData();



    // if (select.value == "submitToItemMaster") {


        let fieldsData = {};

        data.forEach(element => {

            let itemName = element.td.innerText;
            let value = element.innerText;

            fieldsData[itemName] = value;

        })




                console.log(Object.keys(fieldsData));




        fieldsData["submitDataTOItemMaster"] = "submitDataTOItemMaster";





        $.ajax({

            url: "ajaxItemMaster.php",
            method: "POST",
            // dataType: 'JSON',
            contentType: false,       // Important to send as multipart/form-data
            processData: false,
            data: fieldsData,
            success: function (data) {

                console.log(data)

                alert("data success fully insert")


            },
            error: function (error) {
                console.log(error);
            }




        })
        console.log(fieldsData);

    // } else {
        // alert("plase change status to submit")
    // }


}




const setDataToItemManager = async () => {


    let selectedSubCatId = document.getElementById("ManagerRuleCatId").value

    // electrinicd id 



    // sub cat = 1 id name is bulb




    await $.ajax({
        url: "ajaxItemMaster.php",
        method: "GET",
        dataType: "JSON",
        data: {
            getColumnInfo: "getColumnInfo",
            selectedSubCatId: selectedSubCatId
        },
        success: function (data) {
            // console.log(data.tbody_data);

            setTableFormSubCat(data.tbody_data)

        }
    })


}





const setTableFormSubCat = (data) => {
    document.getElementById("dataBodyTd").innerText = "";

    let teadRow = document.getElementById("data_headTh");
    teadRow.innerText = "";


    Object.keys(data[0]).forEach(element => {
        let th = document.createElement("th")
        th.classList.add("px-5", "py-2")
        th.setAttribute("scope", "col")
        th.innerText = element
        teadRow.appendChild(th)

    })
    let th = document.createElement("th")
    th.classList.add("px-5", "py-2")
    th.setAttribute("scope", "col")
    th.innerText = "image"
    teadRow.appendChild(th)



    data.forEach(element => {

        let tbody = document.getElementById("dataBodyTd")



        var tr = document.createElement("tr")

        var btn = document.createElement("button")
        btn.innerText = "Submit Updates"
        btn.name = "sendToItemToItemMaster"
        btn.classList.add("inline-flex", "mr-2", "items-center", "py-2.5", "px-5", "ms-2", "text-sm", "font-medium", "text-white", "bg-blue-700", "rounded-lg", "border", "border-blue-700", "hover:bg-blue-800", "focus:ring-4", "focus:outline-none", "focus:ring-blue-300,", "dark:bg-blue-600", "dark:hover:bg-blue-700", "dark:focus:ring-blue-800")
        btn.setAttribute("data-item-code", element['item_code'])
        btn.onclick=function(event){
            sendElectricDataToItemMaster(event)
        }



        // 
        // <button name="update_reqsuisition" onclick="sendElectricDataToItemMaster(event)"

        // data-item-code="<?php echo $row["item_code"];  ?>"
        // class=" inline-flex mr-2  items-center py-2.5 px-5 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="getDataOfEditIssuer(event)">
        // Update</button>


        Object.keys(element).forEach(mainData => {

            var td = document.createElement("td")
            td.classList.add("px-5", "py-2")
            td.innerText = element[mainData]
            // console.log(element[mainData]);


            tr.appendChild(td)

        })


        var image = document.createElement("img")
        image.src = "./images/" + element['imagePath'];
        image.alt = "Dynamic Image";

        var td = document.createElement("td")
        td.classList.add("px-5", "py-2")
        td.appendChild(image)


        tr.appendChild(td)

        tr.appendChild(btn)

        document.getElementById("dataBodyTd").appendChild(tr);


    })








}