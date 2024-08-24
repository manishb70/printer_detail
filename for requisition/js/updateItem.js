const updateFieldDataSet = async (data) => {


    var selected_id = document.getElementById("itecode_id").value

    let fieldInputs;
    let itemData;


    await $.ajax({
        url: "ajaxItemMaster.php",
        method: "GET",
        dataType: "JSON",
        data: {
            getItemWithItemCodeForUpdate: "getItemWithItemCodeForUpdate",
            selected_item_code: selected_id


        }, success: function (data) {
            // console.log(element);

            console.log("request success");
            // console.log(data);

            fieldInputs = data.inputFields
            itemData = data.tbody_data

            document.getElementById("rowItem").innerText = ""
            data.inputFields.forEach(element => {









                var div = document.createElement("div")
                div.classList.add("mb-4", "ml-2", "mr-2")



                var lable = document.createElement("lable")
                lable.classList.add("block", "mb-2", "text-sm", "font-bold", "text-gray-700", "dark:text-white")
                lable.innerText = element.name

                div.appendChild(lable)

                var input = document.createElement("input")
                input.classList.add("w-full", "px-3", "py-2", "mb-3", "text-sm", "leading-tight", "text-gray-700", "dark:text-white", "border", "rounded", "shadow", "appearance-none", "focus:outline-none", "focus:shadow-outline")
                input.name = element.name
                input.value = element.name

                if (element.dropdown == "yes") {

                    input = document.createElement("select");
                    input.name = element.name;
                    input.classList.add("w-full", "px-3", "py-2", "text-sm", "leading-tight", "text-gray-700", "dark:text-white", "border", "rounded", "shadow", "appearance-none", "focus:outline-none", "focus:shadow-outline");
                    input.setAttribute("attr-id", element.attr_id)
                    input.setAttribute("subCat-id", element.SubcatId)
                    input.style.minWidth = "10rem"
                    input.id = element.name
                    input.value = element.name
                    input.classList.add("cursor-pointer")
                    input.required = true
                    input.style.cursor = "pointer"



                    var option = document.createElement("option")
                    option.innerText = "select"
                    option.hidden = "true"
                    input.appendChild(option)

                    $.ajax({

                        url: "ajaxItemMaster.php",
                        method: "GET",
                        dataType: "json",
                        data: {
                            getOptionAttr: "getOptionAttr",
                            attr_id: element.attr_id
                        },
                        success: function (data) {


                            // console.log(data.data);

                            data.data.forEach(element => {


                                var option = document.createElement("option")

                                function capitalizeFirstLetter(string) {
                                    return string.charAt(0).toUpperCase() + string.slice(1);
                                }


                                // option.innerText = element.description;
                                option.innerText = capitalizeFirstLetter(element.description);
                                option.value = capitalizeFirstLetter(element.description);

                                // console.log(element.description);

                                input.appendChild(option)


                            })



                        }, error: function (error) {
                            console.log('error; ' + eval(error))
                        }



                    })



                }


                div.appendChild(input)


                document.getElementById("rowItem").appendChild(div)





            });
        }
    })




    let inputs = document.getElementById("rowItem").querySelectorAll("input")


    // console.log(itemData);



    // inputs.forEach(attr => {
    //     console.log(attr.name);



    // })




    // console.log(fieldInputs);


    // //  console.log(itemData);

    fieldInputs.forEach(element => {


        // console.log();

        var inputName = element.name



        console.log(inputName);

        // console.log(itemData[0].item_code);

        // console.log("Successs");




    })

    console.log(itemData);





}

