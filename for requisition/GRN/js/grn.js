console.log("hello");

function grnDataInsert() {



    var inputsData = document.getElementById("inputFormDataGrn").querySelectorAll("input")


    // console.log(inputsData);

    let inputFieldsData = {}

    inputFieldsData['grnDataInsert'] = "grnDataInsert"

    inputsData.forEach(Element => {
        var inputName = Element.name
        inputValue = Element.value

        inputFieldsData[inputName] = inputValue


    })

    // console.log(inputFieldsData);

    // console.log(inputData);

    console.log(inputFieldsData);
    $.ajax({
        url: "./ajax/ajaxGrn.php",
        method: "POST",
        dataType: 'JSON',
        data: inputFieldsData,
        success: function (data) {
            console.log(data);
            if (data.success) {
                alert("receipt success fully genrated")
            } else {
                alert("Something went wrong")
            }
        }




    })












}