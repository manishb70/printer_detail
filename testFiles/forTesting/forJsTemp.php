<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg ">
        <table class=" text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"">

<thead class=" text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Compnay id
                </th>
                <th scope="col" class="px-6 py-3">
                    Location
                </th>
                <th scope="col" class="px-6 py-3">
                    GST Number
                </th>
                <th scope="col" class="px-6 py-3">
                    Emails
                </th>
                <th scope="col" class="px-6 py-3">
                    bank name
                </th>
                <th scope="col" class="px-6 py-3">
                    bank account number
                </th>
                <th scope="col" class="px-6 py-3">
                    Bank ifsc number
                </th>
                <th scope="col" class="px-6 py-3">
                    Branch name
                </th>
                <th scope="col" class="px-6 py-3">
                    category
                </th>

                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
            </thead>
            <form action="#" if method="POST">
                <tbody id="sub_company_id">
                    <tr id="manish" class="bg-white border-b  dark:bg-gray-800 dark:border-gray-700">



                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">

                            <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="1">

                        </th>

                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="Location">
                        </td>


                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="GST Number">
                        </td>
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="Email">
                        </td>
                        <td class=px-6 py-4">
                            <div class="flex items-center mb-4">
                                <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="Bank name">
                            </div>
                        </td>
                        <td class=px-6 py-4">
                            <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="bank Account Number">
                        </td>
                        <td class="px-6 py-4">

                            <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="Bank IFSC Number">
                        </td>

                        <td class=px-6 py-4">
                            <div class="flex items-center mb-4">
                                <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="Branch name">
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="">
                        </td>
                        <td class="px-6 py-4">
                            <button name="update_admin_roles" onclick="beforeSubmitHandle()" style="margin: auto;
display: block;" class=" inline-flex display-block mx-auto items-center py-2.5 px-3 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="">
                                Submit</button>
                        </td>
                    </tr>
                </tbody>
            </form>
        </table>
    </div>



























    <script>
        let current_company;

        var sub_company_id  =document.getElementById("sub_company_id") ;


        const getData = async (id) => {

            sub_company_id.innerText= "";


            try {
                const response = await fetch(`function.php?find_id=${id}`);
                const data = await response.json();
                current_company = data;
                console.log("data is fetch success");




                Array.from(current_company).forEach(element => {


                    var {
                        sub_company_id,
                        company_address,
                        GST_number,
                        company_email,
                        bank_name,
                        bank_account_number,
                        bank_ifsc_code,
                        bank_branch_name,
                        category
                    } = element


                    returnRow(sub_company_id, company_address, GST_number, company_email, bank_name, bank_account_number, bank_ifsc_code, bank_branch_name, category);

                });

            } catch (error) {
                console.log("error when company data fetching");

            }




            returnRow(1, "delhi", "ABC123", "MANISH@GMAIL.COM", "BANK OF INDIA", 123412, "ABC123", "SAGARPUR", "PRINTER");


        }






        function createInput(name, value) {

            var input = document.createElement("input");
            input.type = "text";
            input.id = "small-input";
            input.name = name
            input.classList.add("block", "w-full", "p-2", "text-gray-900", "border", "border-gray-300", "rounded-lg", "bg-gray-50", "text-xs", "focus:ring-blue-500", "focus:border-blue-500", "dark:bg-gray-700", "dark:border-gray-600", "dark:placeholder-gray-400", "dark:text-white", "dark:focus:ring-blue-500", "dark:focus:border-blue-500");
            input.value = value;

            return input

        }


      


        function returnRow(company_id, location, gst_number, email, bank_name, bank_account_number, Bank_ifsc_number, Branch_name, category) {

            




            var newTr = document.createElement("tr");
            newTr.classList.add("bg-white", "border-b", "dark:bg-gray-800", "dark:border-gray-700");

            var td1 = document.createElement("td");
            td1.classList.add("px-6", "py-4");
            newTr.appendChild(td1)
            td1.appendChild(createInput("company_id", company_id))

            var td2 = document.createElement("td");
            td2.classList.add("px-6", "py-4");
            newTr.appendChild(td2)
            td2.appendChild(createInput("location", location))


            var td3 = document.createElement("td");
            td3.classList.add("px-6", "py-4");
            td3.appendChild(createInput("gst_number", gst_number))
            newTr.appendChild(td3)


            var td4 = document.createElement("td");
            td4.classList.add("px-6", "py-4");
            td4.appendChild(createInput("email", email))
            newTr.appendChild(td4)


            var td5 = document.createElement("td");
            td5.classList.add("px-6", "py-4");
            td5.appendChild(createInput("bank_name", bank_name))
            newTr.appendChild(td5)


            var td6 = document.createElement("td");
            td6.classList.add("px-6", "py-4");
            td6.appendChild(createInput("bank_account_number", bank_account_number))
            newTr.appendChild(td6)


            var td7 = document.createElement("td");
            td7.classList.add("px-6", "py-4");
            td7.appendChild(createInput("Bank_ifsc_number", Bank_ifsc_number))
            newTr.appendChild(td7)


            var td8 = document.createElement("td");
            td8.classList.add("px-6", "py-4");
            td8.appendChild(createInput("Branch_name", Branch_name))
            newTr.appendChild(td8)


            var td9 = document.createElement("td");
            td9.classList.add("px-6", "py-4");
            td9.appendChild(createInput("category", category))
            newTr.appendChild(td9)


            sub_company_id.appendChild(newTr)



        }

      
    </script>




















</body>

</html>