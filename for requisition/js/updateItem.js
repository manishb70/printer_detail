const updateFieldDataSet = (data) => {


    var selected_id = document.getElementById("itecode_id").value


    $.ajax({
        url: "ajaxItemMaster.php",
        method: "GET",
        dataType: "JSON",
        data: {
            getItemWithItemCodeForUpdate: "getItemWithItemCodeForUpdate",
            selected_item_code: selected_id


        }, success: function (data) {

            console.log("request success");
            console.log(data);


            data.tbody_data.forEach(element => {

                Object.keys(element).forEach(mainData => {




                    var div = document.createElement("div")
                    div.classList.add("mb-4" ,"ml-2" , "mr-2")



                    var lable = document.createElement("lable")
                    lable.classList.add("block", "mb-2", "text-sm", "font-bold", "text-gray-700", "dark:text-white")
                    lable.innerText = mainData

                    div.appendChild(lable)

                    var input = document.createElement("input")
                    input.classList.add("w-full", "px-3", "py-2", "mb-3", "text-sm", "leading-tight", "text-gray-700", "dark:text-white", "border", "rounded", "shadow", "appearance-none", "focus:outline-none", "focus:shadow-outline")
                    input.name = mainData
                    input.value = element[mainData]
                    div.appendChild(input)


                    document.getElementById("rowItem").appendChild(div)

                })



            });
        }
    })











}