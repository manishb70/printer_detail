const updateFieldDataSet = (data) =>{


        var selected_id  = document.getElementById("itecode_id").value


        $.ajax({
            url:"ajaxItemMaster.php",
            method:"get",
            data:{  
                updateFieldDataSet:"updateFieldDataSet",
                selected_id:selected_id

                
            },success:function(data){
                console.log(data);
            }
        })


            array.forEach(element => {
                        
                var div = document.createElement("div")
                div.classList.add("mb-4 mt-4" ,"md:flex bg-blue-300" , "md:justify-between")



                var lable = document.createElement("lable")
                lable.classList.add("block mb-2 text-sm" ,"font-bold", "text-gray-700" ,"dark:text-white")
                lable.innerText = "example"

                div.appendChild(lable)

                var input = document.createElement("input")
                input.classList.add("w-full","px-3" ,"py-2", "mb-3", "text-sm" ,"leading-tight" ,"text-gray-700" ,"dark:text-white" ,"border" ,"rounded", "shadow", "appearance-none", "focus:outline-none", "focus:shadow-outline")
                input.name = "example",
                input.value = "exaple"
                div.appendChild(input)


                document.getElementById("rowItem").appendChild(div)



                
                
            });








}