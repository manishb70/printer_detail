

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>


    <h1>hello </h1>




    <button name="manish">Click to see magic</button>

    <div id="boy"></div>




    <a id="roleTable" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit user roles</a>


    <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                    Edit user
                                </h3>
                                <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>



                            <div>
                                <div class="relative overflow-x-auto shadow-md sm:rounded-lg ">
                                    <table class=" text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"">

                                        <thead class=" text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                User id
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Role
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Permission
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Start date
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                End date
                                            </th>

                                            <th scope="col" class="px-6 py-3">
                                                <span class="sr-only">Edit</span>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody id="tableRowData">



                                            <form action="#" method="POST">

                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        <input type="text" id="roleUserId" disabled name="admin_id" value="2">

                                                    </th>

                                                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        Users view
                                                    </td>
                                                    <td class=px-6 py-4">
                                                        <div class="flex items-center mb-4">
                                                            <input id="default-checkbox" type="checkbox" name="user_viewOnly" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                        </div>
                                                    </td>
                                                    <td class=px-6 py-4">
                                                        <input type="date" name="user_view_start_date" value="2000-01-01">
                                                    </td>
                                                    <td class="px-6 py-4">

                                                        <input type="date" name="user_view_end_date" value="2000-01-01">
                                                    </td>


                                                </tr>
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">

                                                    </th>

                                                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        User edit
                                                    </td>
                                                    <td class=px-6 py-4">
                                                        <div class="flex items-center mb-4">
                                                            <input id="default-checkbox" type="checkbox" name="user_write" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                        </div>
                                                    </td>
                                                    <td class=px-6 py-4">
                                                        <input type="date" name="user_write_start_date" value="2000-01-01">
                                                    </td>
                                                    <td class="px-6 py-4">

                                                        <input type="date" name="user_write_end_date" value="2000-01-01">
                                                    </td>


                                                    <td class="px-6 py-4 text-right">
                                                        <!-- <a onclick ="enableItem(event,rowId' . $row["user_id"] . ')" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> -->
                                                        <button id=rowId' name="update_data" class="hidden inline-flex mr-2 ml-20 items-center py-2.5 px-3 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="">
                                                            Update</button>
                                                    </td>
                                                </tr>
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">

                                                    </th>

                                                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        Admin view
                                                    </td>
                                                    <td class=px-6 py-4">
                                                        <div class="flex items-center mb-4">
                                                            <input id="default-checkbox" type="checkbox" name="admin_viewOnly" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                        </div>
                                                    </td>
                                                    <td class=px-6 py-4">
                                                        <input type="date" name="admin_view_start_date" value="2000-01-01">
                                                    </td>
                                                    <td class="px-6 py-4">

                                                        <input type="date" name="admin_view_end_date" value="2000-01-01">
                                                    </td>


                                                    <td class="px-6 py-4 text-right">
                                                        <!-- <a onclick ="enableItem(event,rowId' . $row["user_id"] . ')" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> -->
                                                        <button id=rowId' name="update_data" class="hidden inline-flex mr-2 ml-20 items-center py-2.5 px-3 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="">
                                                            Update</button>
                                                    </td>
                                                </tr>
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">

                                                    </th>

                                                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        Admin write
                                                    </td>
                                                    <td class=px-6 py-4">
                                                        <div class="flex items-center mb-4">
                                                            <input id="default-checkbox" type="checkbox" value="" name="admin_write" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                        </div>
                                                    </td>
                                                    <td class=px-6 py-4">
                                                        <input type="date" name="admin_write_start_date" value="2000-01-01">
                                                    </td>
                                                    <td class="px-6 py-4">

                                                        <input type="date" name="admin_write_end_date" value="2000-01-01">
                                                    </td>


                                                    <td class="px-6 py-4 text-right">
                                                        <!-- <a onclick ="enableItem(event,rowId' . $row["user_id"] . ')" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> -->
                                                        <button id=rowId' onclick=name="update_data" class="hidden inline-flex mr-2 ml-20 items-center py-2.5 px-3 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="">
                                                            Update</button>
                                                    </td>
                                                </tr>



                                        </tbody>
                                                </table>
                                            <button name="update_admin_roles" onclick="beforeSubmitHandle()" style="margin: auto;
                                        display: block;" class=" inline-flex display-block mx-auto items-center py-2.5 px-3 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="">
                                        Submit</button>
                                    </form>
                                </div>


                            </div>

                        </div>
                    </div>
            </div>











</body>

<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
<script src="../js/jquery-3.7.1.min.js"></script>


<script>

let subdata;
let admin_roles;
$(document).ready(function() {

        $("button").click(function(e) {


            console.log("you clicked on button");

            $.ajax({
                method:"GET",
                url: "./function.php",
                data: {
                    name: "manish",
                    find_id: 12
                
                },
                dataType:"json",
                success: function(data) {
                    
                    subdata =data
                    console.log(data);
                    // document.getElementById("boy").innerText = data;
                },
                error:function(error){
                    console.log(error.status);

                }
                


            })


        })


        $("#roleTable").click(function(){

            $.ajax({
                url:"./getDataByid.php",
                method:"GET",
                data:{
                    find_id:1
                },
                dataType:"json",
                success:function(data){
                   admin_roles =data;
                    // console.log(data);
                    setAdminRoleData(data);
                    
                }


            })






        })
        

    })


const setAdminRoleData = (data) =>{
    
    let dt = [1,2,4,4,];

    Object.keys(data).forEach((element ,index) => {

            console.log(index);

        });


    
}



</script>









</html>