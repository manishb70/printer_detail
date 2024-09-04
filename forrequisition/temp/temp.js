

        



console.log("hello ");



const submitRowToAddAndAjax = (event) => {


    let newProjectId = document.getElementById("newProjectId").value
    let NewItenName = document.getElementById("NewItenName").value
    let newitemQuantity = document.getElementById("newitemQuantity").value
    let newItemNeedDate = document.getElementById("newItemNeedDate").value
    let newItemUserRemarks = document.getElementById("newItemUserRemarks").value


    console.log(newProjectId);
    console.log(NewItenName);
    console.log(newitemQuantity);
    console.log(newItemNeedDate);
    console.log(newItemUserRemarks);

    let sno = 1;







    addRowToGenrate(1, newProjectId, NewItenName, newitemQuantity, newItemUserRemarks, newItemNeedDate)

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





