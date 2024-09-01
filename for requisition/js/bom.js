console.log("hello ");

const createdBomb = () => {
  let trows = document.getElementById("poCreteTbody").querySelectorAll("tr");

  let po_number = document.getElementById("bom_id").value;

  console.log(po_number);
  let inputData = {};

  let postInputData = {};

  postInputData["bom_creation_form"] = "bom_creation_form";

  trows.forEach((element, index) => {
    let inputNameValue = {};
    let inputs = element.querySelectorAll("input");

    inputs.forEach((input) => {
      inputNameValue[input.name] = input.value;
    });

    inputData[index] = inputNameValue;
  });

  postInputData["inputsData"] = inputData;
  postInputData["bom_id"] = po_number;

  console.log(postInputData);

  $.post(
    "phpAjax/bomAjax.php",
    postInputData,
    function (data) {
      console.log(data);

      if(data.success){

        alert("Data inserted success fully")


        let inputs = document.querySelectorAll("input")

        inputs.forEach(Element =>{

            Element.disabled=true;



        })


        let button  = document.querySelectorAll("button");

        button.forEach(element =>{
            $(element).fadeOut(1000);
        })



      }

  
    },"JSON"
  ).fail(function(error) {
    console.log(error.responseText);
  })

  console.log(inputData);
};
