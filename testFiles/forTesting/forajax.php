<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>









  <button onclick="getData(7)">
    click to get data
  </button>








</body>

<script>


      let current_company;  

      const getData =(id)=>{

      fetch(`function.php?find_id=${id} `)
        .then(response => response.json())
        .then(data => {
          // console.log(data);
          current_company =data;
        })    
    }
  //  console.log(response);   
 
</script>


</html>