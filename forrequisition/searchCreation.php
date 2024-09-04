<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <title>Search Customer Form</title>
</head>

<body>

    <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar"
        type="button"
        class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
            </path>
        </svg>
    </button>

    <aside id="default-sidebar"
        class="fixed top-0 left-0 z-40 w-60 h-screen transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-100 dark:bg-gray-800">
            <h1 class="text-xl font-bold border-b border-gray-900 text-center py-3">Customer Details</h1>
            <ul class="space-y-2 font-medium mt-3">
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700 group">
                        <span class="ms-3" onclick="organization()">Organization Details</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700 group">
                        <span class="ms-3" onclick="address()">Address Details</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700 group">
                        <span class="ms-3" onclick="bank()">Banking Details</span>
                    </a>
                </li>

            </ul>
        </div>
    </aside>

    <div class="p-4 sm:ml-64">
        <h1 class="text-3xl font-bold text-center border-b border-gray-600 pb-4 mb-4">Search Customer Form</h1>
        <div class="p-4 border-2 border-gray-400 border-dashed rounded-lg dark:border-gray-700"
            id="organization_deatils">
            <h1 class="text-xl font-medium border-b border-gray-700 text-center pb-3">Organization Details</h1>
            <div id="oraganigation_duplicate">
                <div class="border-b border-gray-900 my-3 pb-3">
                    <div class="flex flex-wrap gap-x-20">
                        <div>
                            <label for=""
                                class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Customer
                                Code :
                            </label>
                            <input type="text" placeholder="Enter Customer name"
                                class="w-60 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-7 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            
                        </div>
                        <div>
                            <label for=""
                                class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Customer
                                Name :
                            </label>
                            <input type="text" placeholder="Enter Customer name"
                                class="w-60 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-7 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                <button type="button"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-xs rounded-lg text-sm px-8 py-1 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Search</button>
                        </div>


                    </div>
                </div>
                <div class="flex flex-wrap gap-x-20 mt-5">
                    <div>
                        <label for=""
                            class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Oraganigation
                            Name :
                        </label>
                        <input type="text" placeholder="Enter oraganigation name"
                            class="w-60 rounded-md border text-xs mb-4 border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-7 outline-none focus:border-[#6A64F1] focus:shadow-md" />

                    </div>


                    <div>
                        <label for="countries"
                            class="block mb-2 text-xs font-medium text-gray-900 dark:text-white">Oraganigation Type :
                        </label>
                        <input type="text" placeholder="Enter GST number"
                        class="w-60 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-7 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>

                    <div>
                        <label for=""
                            class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">GST Number :
                        </label>
                        <input type="text" placeholder="Enter GST number"
                            class="w-60 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-7 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                </div>

                <div class="flex flex-wrap gap-x-20">
                    <div>
                        <label for=""
                            class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Customer
                            Type :
                        </label>
                        <input type="text" placeholder="Enter Customer type"
                            class="w-60 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-7 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>

                    
                    <div>
                        <label for=""
                            class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Sub Customer
                            Type :
                        </label>
                        <input type="text" placeholder="Enter sub Customer type"
                            class="w-60 rounded-md border text-xs mb-4 border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-7 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div>
                        <label for=""
                            class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Customer
                            Status
                            :
                        </label>
                        <input type="text" placeholder="Enter Customer status"
                            class="w-60 rounded-md border text-xs mb-4 border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-7 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                </div>
                
                <div class="flex flex-wrap gap-x-20">
                    <div>
                        <label for=""
                            class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Starting
                            Date :
                        </label>
                        <input type="date"
                            class="w-60 rounded-md border text-xs mb-4 border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-7 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div>
                        <label for=""
                            class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Ending
                            Date :
                        </label>
                        <input type="date"
                            class="w-60 rounded-md border text-xs mb-4 border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-7 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div>
                        <label for=""
                            class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Contact
                            Person
                            Name :
                        </label>
                        <input type="text" placeholder="Enter person name"
                            class="w-60 rounded-md border text-xs mb-4 border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-7 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                </div>
                
                <div class="flex flex-wrap gap-x-20">

                    <div>
                        <label for=""
                            class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Contact
                            Person
                            :
                        </label>
                        <input type="text" placeholder="Enter person "
                            class="w-60 rounded-md border text-xs mb-4 border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-7 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>

                    <div>
                        <label for=""
                            class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Contact
                            Person
                            Number :
                        </label>
                        <input type="text" placeholder="Enter person number"
                            class="w-60 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-7 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>




                </div>

            </div>
        </div>


        <!-----------------------------------Address Details----------------------------------------->

        <div class="p-4 border-2 border-gray-400 border-dashed rounded-lg dark:border-gray-700" id="address_deatils"
            style="display: none;">
            <h1 class="text-xl font-medium border-b border-gray-700 text-center pb-3">Address Details</h1>
            <div id="address_duplicate">
                <div class="flex flex-wrap gap-x-20 mt-5">
                    <div>
                        <label for=""
                            class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Site
                            Code :
                        </label>
                        <input type="text" placeholder="Enter person name"
                            class="w-60 rounded-md border text-xs mb-4 border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-7 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>

                    <div>
                        <label for=""
                            class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Site
                            Name :
                        </label>
                        <input type="text" placeholder="Enter person "
                            class="w-60 rounded-md border text-xs mb-4 border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-7 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>

                    <div>
                        <label for=""
                            class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Site
                            Description
                            :
                        </label>
                        <input type="text" placeholder="Enter person number"
                            class="w-60 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-7 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>

                </div>

                <div class="flex flex-wrap gap-x-20">
                    <div>
                        <label for=""
                            class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Address Line
                            1 :
                        </label>
                        <input type="text" placeholder="Enter address line 1"
                            class="w-60 rounded-md border text-xs mb-4 border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-7 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>

                    <div>
                        <label for="countries"
                            class="block mb-2 text-xs font-medium text-gray-900 dark:text-white">Address
                            Line 2 : </label>
                        <input type="text" placeholder="Enter address line 2"
                            class="w-60 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-7 outline-none focus:border-[#6A64F1] focus:shadow-md" />

                    </div>

                    <div>
                        <label for=""
                            class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Postal Code
                            :
                        </label>
                        <input type="text" placeholder="Enter postal code"
                            class="w-60 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-7 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>


                </div>
                <div class="flex flex-wrap gap-x-20">
                    <div>
                        <label for=""
                            class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">City :
                        </label>
                        <input type="text" placeholder="Enter city name"
                            class="w-60 rounded-md border text-xs mb-4 border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-7 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>

                    <div>
                        <label for=""
                            class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">State
                            :
                        </label>
                        <input type="text" placeholder="Enter state name"
                            class="w-60 rounded-md border text-xs mb-4 border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-7 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>

                    <div>
                        <label for="" class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">
                            Country :
                        </label>
                        <input type="text" placeholder="Enter country name"
                            class="w-60 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-7 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                </div>

                <div class="flex flex-wrap gap-x-20">
                    <div>
                        <label for=""
                            class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Contact
                            Person
                            Name :
                        </label>
                        <input type="text" placeholder="Enter person name"
                            class="w-60 rounded-md border text-xs mb-4 border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-7 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>

                    <div>
                        <label for=""
                            class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Contact
                            Person
                            :
                        </label>
                        <input type="text" placeholder="Enter person "
                            class="w-60 rounded-md border text-xs mb-4 border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-7 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>

                    <div>
                        <label for=""
                            class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Contact
                            Person
                            Number :
                        </label>
                        <input type="text" placeholder="Enter person number"
                            class="w-60 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-7 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>




                </div>
            </div>
            <!-- <div class="text-center">
                <button type="button" onclick="address_duplicate()"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add</button>
            </div> -->
        </div>



        <!--------------------------------Bank Details--------------------------------------------->

        <div class="p-4 border-2 border-gray-400 border-dashed rounded-lg dark:border-gray-700" id="bank_deatils"
            style="display: none;">
            <h1 class="text-xl font-medium border-b border-gray-700 text-center pb-3">Banking Details</h1>
            <div id="banking_duplicate">

                <div class="mt-2 border-b border-gray-900">
                    <label for="" class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Site
                        Code :
                    </label>
                    <input type="text" placeholder="Enter site code"
                        class="w-60 rounded-md border text-xs mb-3 border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-7 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>


                <div class="flex flex-wrap gap-x-20 mt-3">
                    <div>
                        <label for=""
                            class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Branch Name
                            :
                        </label>
                        <input type="text" placeholder="Enter branch name"
                            class="w-60 rounded-md border text-xs mb-4 border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-7 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>

                    <div>
                        <label for="countries"
                            class="block mb-2 text-xs font-medium text-gray-900 dark:text-white">Branch
                            Number : </label>
                        <input type="text" placeholder="Enter brach number"
                            class="w-60 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-7 outline-none focus:border-[#6A64F1] focus:shadow-md" />

                    </div>

                    <div>
                        <label for=""
                            class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Branch Type
                            :
                        </label>
                        <input type="text" placeholder="Enter brach type"
                            class="w-60 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-7 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>


                </div>
                <div class="flex flex-wrap gap-x-20">
                    <div>
                        <label for=""
                            class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Bank
                            Name :
                        </label>
                        <input type="text" placeholder="Enter bank name"
                            class="w-60 rounded-md border text-xs mb-4 border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-7 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>

                    <div>
                        <label for=""
                            class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Bank
                            Number
                            :
                        </label>
                        <input type="text" placeholder="Enter bank number"
                            class="w-60 rounded-md border text-xs mb-4 border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-7 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>

                    <div>
                        <label for="" class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">
                            Bank Type :
                        </label>
                        <input type="text" placeholder="Enter bank type"
                            class="w-60 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-7 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                </div>
                <div class="flex flex-wrap gap-x-20">
                    <div>
                        <label for=""
                            class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Account Name
                            :
                        </label>
                        <input type="text" placeholder="Enter account name"
                            class="w-60 rounded-md border text-xs mb-4 border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-7 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>

                    <div>
                        <label for=""
                            class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Account
                            Number
                            :
                        </label>
                        <input type="text" placeholder="Enter account number"
                            class="w-60 rounded-md border text-xs mb-4 border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-7 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>

                    <div>
                        <label for="" class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">
                            Account Type :
                        </label>
                        <input type="text" placeholder="Enter account type"
                            class="w-60 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-7 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                </div>
                <div class="flex flex-wrap gap-x-20">
                    <div>
                        <a href="#bank_deatils" target="iframe_a">
                            <label for=""
                                class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">IFSC
                                Code :
                            </label>
                        </a>
                        <input type="text" placeholder="Enter IFSC code"
                            class="w-60 rounded-md border text-xs mb-4 border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-7 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                </div>

            </div>



            <!-- <div class="text-center">
                <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Submit
                    Now</button>
            </div> -->
        </div>
    </div>


    <script src="./javascript/script.js"></script>
</body>

</html>