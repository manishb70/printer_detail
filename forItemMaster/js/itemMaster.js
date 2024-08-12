
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

            // console.log(resData);

            addSubCatFields(resData)
            // addRequireField(resData);


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
        h1.classList.add("font-bold")
        h1.textContent = element
        let btn = document.createElement("a")
        btn.innerText = "+";


        let tempId = `attr${index}`
        attrArray.push(tempId)
        btn.setAttribute("attr-id", tempId)


        // console.log(tempId);

        btn.onclick = function (event) {

            shoeOrHideattr(event)
        }



        let attr = document.createElement("div");
        attr.classList.add("mb-4", "hidden", "mt-4", "transition-all", "border-2-black-600", "md:flex-wrap", "flex", "flex-wrap")
        attr.id = `attr${index}`



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








let currentItemStatus = "";



document.getElementById("itemSubmit").addEventListener("click", () => {

    console.log(currentItemStatus);
    currentItemStatus = "SUBMIT";
})


document.getElementById("itemSave").addEventListener("click", () => {

    currentItemStatus = "SAVE";
    console.log(currentItemStatus);
})






const submitItemInfoToDb = () => {


    let inputs = document.getElementById(selectedSubCat).querySelectorAll("input")
    let select = document.getElementById(selectedSubCat).querySelectorAll("select")


    // console.log(inputs);

    let itemDataInfo = {}

    let withName = {}


    let itemCodeGen = "";

    itemDataInfo["itemMasterSave"] = "itemMasterSave"


    itemDataInfo["manCatId"] = document.getElementById("catId").value


    let attInfo = {};

    inputs.forEach(element => {


        let attrName = element.getAttribute("name");
        let attributeValue = element.value



        itemCodeGen += attributeValue.substring(0, 2)
        itemCodeGen += "-"
        attInfo[attrName] = attributeValue

        itemDataInfo["SubCatid"] = element.getAttribute("subCat-id")

    })



    select.forEach(element => {


        let attrName = element.getAttribute("name");
        let attributeValue = element.value

        attInfo[attrName] = attributeValue

    })





    itemDataInfo["itemCodeGenrated"] = itemCodeGen.toUpperCase();


    itemDataInfo["currentItemStatus"] = currentItemStatus;
    itemDataInfo["attrData"] = attInfo;



    
    // console.log(itemDataInfo);


    $.ajax({

        url: "ajaxItemMaster.php",
        method: "GET",
        dataType: "json",
        data: itemDataInfo,
        success: function (data) {

            console.log(data);



            if(data.success){

                document.getElementById("recordId").innerText= `Rcord Id : ${data.recordId} .`
                document.getElementById("recordId").style.display="block"
                document.getElementById("Item_code").innerText= `Item Code : ${data.ItemCode} .`
                document.getElementById("Item_code").style.display="block"
            }





        }


    })










}











