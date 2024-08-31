
<?php
session_start();

include("./db.php");





$user=$_SESSION['username'];
$currentDateTime = date('Y-m-d H:i:s');
$sql = "INSERT INTO `for_office`.`purchase_order_header` (`createdBy`, `created_date`) VALUES ('$user', '$currentDateTime');";


$result = mysqli_query($con,$sql);


if($result){

    $po_number=mysqli_insert_id($con);



}












?>


<!DOCTYPE html>
<html lang="en">

<input type="email" id="input-email-label" class="" placeholder="you@site.com">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">
    <title>Create PO Form</title>
</head>

<body>
    <div id="create_section" class="mt-5 bg-gray-100 border border-gray-900 p-5 rounded-lg mx-5">
        <h1 class="text-center underline text-3xl mb-3 font-bold">Create PO Form</h1>
        <form class="w-full border border-gray-500 p-3 rounded-md">
            <div class="flex flex-wrap justify-between">
                <div>
                    <label for="email"
                        class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">PO
                        Number : </label>
                    <input id="po_number" type="text"
                            
                    value="<?php echo $po_number   ?>"
                    disabled
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />

                            
                </div>
                <div class="">
                    <label class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Supplier
                        Code : </label>
                    <input type="text"
                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="">
                    <label class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Supplier
                        Name : </label>
                    <input type="text"
                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="">
                    <label class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Supplier
                        Site Code : </label>
                    <input type="text"
                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="">
                    <label class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Buyer :
                    </label>
                    <input type="text"
                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="">
                    <label class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Note To
                        Supplier : </label>
                    <input type="text"
                        class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
            </div>
            <div class="flex flex-wrap items-start  xl:w-4/6 justify-between mt-3">
                <div class="">
                    <label class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Ship to :
                    </label>
                    <input type="date"
                        class="w-40 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="">
                    <label class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Bill to :
                    </label>
                    <input type="date"
                        class="w-40 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="">
                    <label class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Total :
                    </label>
                    <input type="number"
                        class="w-40 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="">
                    <label class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Finance
                        Term : </label>
                    <input type="number"
                        class="w-40 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
            </div>
        </form>

        <div class="mt-6">
            <!-- <form class="w-full border p-3 border-gray-500 rounded-md">
                <div class="flex flex-wrap items-center justify-between">
                    <div class="ml-2">
                        <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">S. No
                            :
                        </label>
                        <input type="text" name="email" id="email"
                            class="w-32 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2">
                        <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Item
                            Code:
                        </label>
                        <input type="text" name="email" id="email"
                            class="w-32 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2">
                        <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Item
                            Name :
                        </label>
                        <input type="text" name="email" id="email"
                            class="w-32 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2">
                        <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Unit Price
                            :
                        </label>
                        <input type="text" name="email" id="email"
                            class="w-32 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2">
                        <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Qty :
                        </label>
                        <input type="text" name="email" id="email"
                            class="w-32 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2">
                        <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Need By
                            Date :
                        </label>
                        <input type="date" name="email" id="email"
                            class="w-32 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2">
                        <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Qty Rec :
                        </label>
                        <input type="text" name="email" id="email"
                            class="w-32 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2">
                        <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Balance :
                        </label>
                        <input type="text" name="email" id="email"
                            class="w-32 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                </div>
                <div class="flex flex-wrap items-center border-gray-500 justify-between border-t mt-2">
                    <div class="ml-2 mt-2">
                        <input type="text" name="email" id="email"
                            class="w-32 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2 mt-2">
                        <input type="text" name="email" id="email"
                            class="w-32 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2 mt-2">
                        <input type="text" name="email" id="email"
                            class="w-32 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2 mt-2">
                        <input type="text" name="email" id="email"
                            class="w-32 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2 mt-2">
                        <input type="text" name="email" id="email"
                            class="w-32 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2 mt-2">
                        <input type="date" name="email" id="email"
                            class="w-32 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2 mt-2">
                        <input type="text" name="email" id="email"
                            class="w-32 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2 mt-2">
                        <input type="text" name="email" id="email"
                            class="w-32 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                </div>
                <div class="flex flex-wrap items-center border-gray-500 justify-between border-t mt-2">
                    <div class="ml-2 mt-2">
                        <input type="text" name="email" id="email"
                            class="w-32 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2 mt-2">
                        <input type="text" name="email" id="email"
                            class="w-32 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2 mt-2">
                        <input type="text" name="email" id="email"
                            class="w-32 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2 mt-2">
                        <input type="text" name="email" id="email"
                            class="w-32 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2 mt-2">
                        <input type="text" name="email" id="email"
                            class="w-32 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2 mt-2">
                        <input type="date" name="email" id="email"
                            class="w-32 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2 mt-2">
                        <input type="text" name="email" id="email"
                            class="w-32 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2 mt-2">
                        <input type="text" name="email" id="email"
                            class="w-32 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                </div>
                <div class="flex flex-wrap items-center border-gray-500 justify-between border-t mt-2">
                    <div class="ml-2 mt-2">
                        <input type="text" name="email" id="email"
                            class="w-32 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2 mt-2">
                        <input type="text" name="email" id="email"
                            class="w-32 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2 mt-2">
                        <input type="text" name="email" id="email"
                            class="w-32 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2 mt-2">
                        <input type="text" name="email" id="email"
                            class="w-32 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2 mt-2">
                        <input type="text" name="email" id="email"
                            class="w-32 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2 mt-2">
                        <input type="date" name="email" id="email"
                            class="w-32 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2 mt-2">
                        <input type="text" name="email" id="email"
                            class="w-32 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2 mt-2">
                        <input type="text" name="email" id="email"
                            class="w-32 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                </div>
            </form> -->


            <div class="flex flex-col">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="overflow-hidden">
                            <table class="min-w-full mx-auto divide-y divide-gray-200">
                                <thead>
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                            S.no</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                            Item Code</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                            Item name</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Unit
                                            price</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Qty
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Need
                                            by date</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Sale
                                            order no.</th>

                                    </tr>
                                </thead>
                                <tbody class="divide-y      divide-gray-200" id="poCreteTbody">
                                    <tr class="hover:bg-gray-600">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                            <input type="txt" id="input-email-label"
                                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                placeholder=1 disabled>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                            <input type="txt" id="input-email-label" name="item_code"
                                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                placeholder="item_code">
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                            <input type="txt" id="input-email-label" name="item_name"
                                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                placeholder="Item name">
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                            <input type="txt" id="input-email-label"
                                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                name="unit_Price" placeholder="Unit price">
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                            <input type="txt" id="input-email-label" name="Qty"
                                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                placeholder="Quantity">
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                            <input type="date" id="input-email-label" name="need_by_date"
                                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                placeholder="need_by_date">
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                            <input type="txt" id="input-email-label" name="saleOrderNumber"
                                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                placeholder="Enter sale order number">
                                        </td>

                                    </tr>


                                </tbody>
                            </table>

                            <a href="#_" onclick="addRowItem()"
                                class="relative inline-block px-4 py-2 font-medium group">
                                <span
                                    class="absolute inset-0 w-full h-full transition duration-200 ease-out transform translate-x-1 translate-y-1 bg-black group-hover:-translate-x-0 group-hover:-translate-y-0"></span>
                                <span
                                    class="absolute inset-0 w-full h-full bg-white border-2 border-black group-hover:bg-black"></span>
                                <span onclick="" class="relative text-black group-hover:text-white">+Add item</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="w-full mt-5 flex flex-wrap justify-around">
            <button type="text"
                class="text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs px-5 py-2.5 text-center me-2 mb-2 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Clear
                Form</button>
            <button type="text"
                class="text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs px-5 py-2.5 text-center me-2 mb-2 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Save</button>

            <button type="text" onclick="purchaseOrderDirect()"
                class="text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs px-5 py-2.5 text-center me-2 mb-2 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">
                Submit</button>
        </div>
    </div>
</body>





<script>





    const addRowItem = () => {


        let total = document.getElementById("poCreteTbody").querySelectorAll("tr").length


        total++

        let tr = document.createElement("tr")
        tr.classList.add("hover:bg-gray-600")

        tr.innerHTML = `       
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                            <input type="txt" id="input-email-label"
                                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                
                                                disabled
                                                placeholder=${total}>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                            <input type="txt" id="input-email-label" name="item_code"
                                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                placeholder="item_code">
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                            <input type="txt" id="input-email-label" name="item_name"
                                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                placeholder="Item name">
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                            <input type="txt" id="input-email-label"
                                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                name="unit_Price" placeholder="Unit price">
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                            <input type="txt" id="input-email-label" name="Qty"
                                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                placeholder="Quantity">
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                            <input type="date" id="input-email-label" name="need_by_date"
                                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                placeholder="need_by_date">
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                            <input type="txt" id="input-email-label" name="saleOrderNumber"
                                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                                placeholder="Enter sale order number">
                                        </td>

                                    

                                    `


        $("#poCreteTbody").append(tr)



    }













</script>



<script src="./js/jquery.min.js"></script>
<script src="./js/po.js"></script>




</html>