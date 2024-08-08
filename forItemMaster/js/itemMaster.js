










console.log("hello from utem master");













const setRequireFieldsFromCategory = () => {

   
    document.getElementById("attrArea").innerText="";
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


            let resData = data.data

            console.log(resData);
            addRequireField(resData);

        }



    })









}


const addRequireField = (data) => {


    let mainBox = document.getElementById("attrArea")

    mainBox.display="flex"



    // <div class="mb-4 md:mr-2 max-w-1 md:mb-0">
    //     <label class="block mb-2 text-sm name font-bold  text-gray-700 dark:text-white" for="firstName">
    //     <?php echo $row["name"];  ?>
    //     </label>
    //     <input name="<?php echo $row["name"];  ?>" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 dark:text-white border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="firstName" placeholder="<?php echo $row["name"];  ?>" type="number"  />
    // </div>

    let mainData = Array.from(data)

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


    var div = document.createElement("div")
    div.classList.add("mb-4", "md:mr-2", "max-w-1", "md:mb-0","fit-content")
    div.style.maxWidth="fit-content"

    var lable = document.createElement("lable")
    lable.classList.add("block", "mb-2", "text-sm", "name", "font-bold", "text-gray-700", "dark:text-white")
    lable.innerText = "newField";


    var input = document.createElement("input")
    input.name = "New field"
    input.classList.add("w-full", "px-3", "py-2", "text-sm", "leading-tight", "text-gray-700", "dark:text-white", "border", "rounded", "shadow", "appearance-none", "focus:outline-none", "focus:shadow-outline");
    input.placeholder = "newfield"


    div.appendChild(lable)
    div.appendChild(input)

    mainBox.appendChild(div);




}














const hideData =(event) =>{
    event.preventDefault();

    let mainBox = document.getElementById("attrArea")



            mainBox.style.display="none"










}