
console.log("hello from item master");


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


const addRequireField = (data) => {



    //pass the array for the loop





    let mainBox = document.getElementById("attrArea")

    // mainBox.display="flex"


    let mainData = Array.from(data)

    mainData.forEach(element => {

        mainData.forEach(element => {

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


            div.appendChild(lable)
            div.appendChild(input)

            mainBox.appendChild(div);



        });
        div.appendChild(lable)
        div.appendChild(input)

        mainBox.appendChild(div);



    });




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

    Object.keys(data).forEach(element => {



        let h1 = document.createElement("h1");
        h1.classList.add("font-bold")
        h1.textContent = element


        let attr = document.createElement("div");
        attr.classList.add("mb-4", "mt-4", "border-2-black-600", "md:flex-wrap", "flex", "flex-wrap")

        mainBox.appendChild(h1)

        // run with attr base

        data[element].forEach(element => {

            // console.log(element.name);


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

            div.appendChild(lable)
            div.appendChild(input)

            attr.appendChild(div)
        })

        mainBox.appendChild(attr)


    })





}


