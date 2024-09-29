console.log("hello forom item");





const setSubCatNameToOption = () =>{



    let catid  = $("#maincategory").val();


    console.log(catid);




    $.ajax({

            url:"ajaxAtrubites.php",
            method:"GET",
            dataType:"JSON",
            data:{
                getSubCatName:"getSubCatName",
                catid:catid
            },
            // dataType:"JSON",
            success:function(data){
                console.log(data);
                    
                setOptionsInSub(data.subcatnames)
            }


    })





}


const setOptionsInSub = (data) =>{

    let subselect  = document.getElementById("subCateGory");
        subselect.innerText=""



    data.forEach(element => {

        var option = document.createElement("option")
            option.value = element.subCatId;
            option.innerText = element.name
                option.classList.add("cursor-pointer")

            subselect.appendChild(option)


    });




}