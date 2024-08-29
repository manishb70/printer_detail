<!DOCTYPE htmltext <html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>GRN Form</title>
</head>

<body>
    <div class="w-3/4 m-auto background-{#FF8A8A}">
        <h1 class="text-center underline text-3xl font-medium m-2">GRN Form</h1>
        <div class="w-2/6 mt-5 flex justify-between">
            <button type="text" onclick="view_section()"
                class="text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs px-5 py-2.5 text-center me-2 mb-2 font-medium dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">View
                GRN</button>
            <button onclick="create_section()" type="text"
                class="text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs px-5 py-2.5 text-center me-2 mb-2 font-medium dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Create
                GRN</button>
        </div>

        <div id="create_section" class="mt-5 border border-gray-900 p-5 rounded-lg">
            <h1 class="text-center underline text-3xl mb-3 font-medium">Create GRN Form</h1>
            <form class="w-full border border-gray-300 p-3 rounded-md">
                <div class="flex flex-wrap">
                    <div>
                        <label for="email"
                            class="block w-40 mb-2 font-medium text-xs font-medium text-gray-900 dark:text-white">PO
                            Number : </label>
                        <input type="text" name="email" id="email"
                            class="w-40 rounded-md border text-xs border-[#e0e0e0] bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-20">
                        <label for="password"
                            class="block  w-40 mb-2 font-medium text-xs font-medium text-gray-900 dark:text-white">Enter
                            Gate Number : </label>
                        <input type="text" name="email" id="email"
                            class="w-40 rounded-md border text-xs border-[#e0e0e0] bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <button type="text"
                        class="text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs px-5 py-2.5 text-center me-2 mb-2 font-medium dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Search
                        GRN</button>
                </div>
            </form>
            <div class=" mt-5">
                <form class="w-full border p-3 border-gray-300 rounded-md">
                    <div class="flex flex-wrap">
                        <div>
                            <label for="email"
                                class="block w-40 mb-2 font-medium text-xs font-medium text-gray-900 dark:text-white">Vendor
                                Name :
                            </label>
                            <input type="text" name="email" id="email"
                                class="w-40 rounded-md border text-xs border-[#e0e0e0] bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="ml-20">
                            <label for="password"
                                class="block  w-40 mb-2 font-medium text-xs font-medium text-gray-900 dark:text-white">Ship
                                to :
                            </label>
                            <input type="text" name="email" id="email"
                                class="w-40 rounded-md border text-xs border-[#e0e0e0] bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="ml-20">
                            <label for="password"
                                class="block  w-40 mb-2 font-medium text-xs font-medium text-gray-900 dark:text-white">Bill
                                to :
                            </label>
                            <input type="text" name="email" id="email"
                                class="w-40 rounded-md border text-xs border-[#e0e0e0] bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                </form>
            </div>
            <div class=" mt-5">
                <form class="w-full border p-3 border-gray-300 rounded-md">
                    <div class="flex">
                        <div>
                            <label for="email"
                                class="block w-40 mb-2 font-medium text-xs font-medium text-gray-900 dark:text-white">Gate
                                Number :
                            </label>
                            <input type="text" name="email" id="email"
                                class="w-40 rounded-md border text-xs border-[#e0e0e0] bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                </form>
            </div>
            <div class=" mt-5 mb-5">
                <form class="w-full border p-3 border-gray-300 rounded-md">
                    <div class="flex flex-wrap items-center">
                        <div>
                            <input id="link-checkbox" type="checkbox" value=""
                                class="w-3 h-4 text-blue-600 bg-gray-100 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:border-gray-600">
                        </div>
                        <div class="ml-2">
                            <label class="block mb-2 font-medium text-xs font-medium text-gray-900 dark:text-white">S. No
                                :
                            </label>
                            <input type="text" name="email" id="email"
                                class="w-20 rounded-md border text-xs border-[#e0e0e0] bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="ml-2">
                            <label class="block mb-2 font-medium text-xs font-medium text-gray-900 dark:text-white">Item
                                Code:
                            </label>
                            <input type="text" name="email" id="email"
                                class="w-28 rounded-md border text-xs border-[#e0e0e0] bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="ml-2">
                            <label class="block mb-2 font-medium text-xs font-medium text-gray-900 dark:text-white">Item
                                Desc :
                            </label>
                            <input type="text" name="email" id="email"
                                class="w-40 rounded-md border text-xs border-[#e0e0e0] bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="ml-2">
                            <label class="block mb-2 font-medium text-xs font-medium text-gray-900 dark:text-white">Qty :
                            </label>
                            <input type="text" name="email" id="email"
                                class="w-24 rounded-md border text-xs border-[#e0e0e0] bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="ml-2">
                            <label class="block mb-2 font-medium text-xs font-medium text-gray-900 dark:text-white">Qty
                                Recv:
                            </label>
                            <input type="text" name="email" id="email"
                                class="w-24 rounded-md border text-xs border-[#e0e0e0] bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="ml-2">
                            <label class="block mb-2 font-medium text-xs font-medium text-gray-900 dark:text-white">SI
                                Unit :
                            </label>
                            <input type="text" name="email" id="email"
                                class="w-20 rounded-md border text-xs border-[#e0e0e0] bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="ml-2">
                            <label class="block mb-2 font-medium text-xs font-medium text-gray-900 dark:text-white">Sub
                                Inveory:
                            </label>
                            <input type="text" name="email" id="email"
                                class="w-24 rounded-md border text-xs border-[#e0e0e0] bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <!-- <div class="ml-2">
                            <label
                                class="block mb-2 font-medium text-xs font-medium text-gray-900 dark:text-white">Status:
                            </label>
                            <input type="text" name="email" id="email"
                            class="w-20 rounded-md border text-xs border-[#e0e0e0] bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div> -->
                        <div id="recieved_div"></div>
                        <div id="accept_div"></div>
                        <div id="reject_div"></div>
                    </div>
                </form>
            </div>

            <div class="w-full mt-5 flex justify-around">
                <button onclick="received()" type="text"
                    class="text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs px-5 py-2.5 text-center me-2 mb-2 font-medium dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Recieved</button>
                <div>
                    <button type="text" onclick="accept()"
                        class="text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs px-5 py-2.5 text-center me-2 font-medium dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Accept</button>
                    <button type="text" onclick="reject()"
                        class="text-white border ml-4 border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs px-5 py-2.5 text-center me-2 font-medium dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Reject</button>
                </div>
                <button type="text"
                    class="text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs px-5 py-2.5 text-center me-2 mb-2 font-medium dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 x">
                    Delivered</button>
            </div>
        </div>
        <div id="view_section" class="mt-5 border border-gray-900 p-5 hidden rounded-lg">
            <h1 class="text-center underline text-3xl mb-3 font-medium">Search GRN Form</h1>
            <form class="w-full border border-gray-300 p-3 rounded-md">
                <div class="flex flex-wrap">
                    <div>
                        <label for="email"
                            class="block w-40 mb-2 font-medium text-xs font-medium text-gray-900 dark:text-white">PO
                            Number : </label>
                        <input type="text" name="email" id="email"
                            class="w-40 rounded-md border text-xs border-[#e0e0e0] bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-20">
                        <label for="password"
                            class="block  w-40 mb-2 font-medium text-xs font-medium text-gray-900 dark:text-white">Enter
                            Gate Number : </label>
                        <input type="text" name="email" id="email"
                            class="w-40 rounded-md border text-xs border-[#e0e0e0] bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                </div>
            </form>
            <div class=" mt-5">
                <form class="w-full border p-3 border-gray-300 rounded-md">
                    <div class="flex flex-wrap">
                        <div>
                            <label for="email"
                                class="block w-40 mb-2 font-medium text-xs font-medium text-gray-900 dark:text-white">Vendor
                                Name :
                            </label>
                            <input type="text" name="email" id="email"
                                class="w-40 rounded-md border text-xs border-[#e0e0e0] bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="ml-20">
                            <label for="password"
                                class="block  w-40 mb-2 font-medium text-xs font-medium text-gray-900 dark:text-white">Ship
                                to :
                            </label>
                            <input type="text" name="email" id="email"
                                class="w-40 rounded-md border text-xs border-[#e0e0e0] bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="ml-20">
                            <label for="password"
                                class="block  w-40 mb-2 font-medium text-xs font-medium text-gray-900 dark:text-white">Bill
                                to :
                            </label>
                            <input type="text" name="email" id="email"
                                class="w-40 rounded-md border text-xs border-[#e0e0e0] bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                </form>
            </div>
            <div class=" mt-5">
                <form class="w-full border p-3 border-gray-300 rounded-md">
                    <div class="flex">
                        <div>
                            <label for="email"
                                class="block w-40 mb-2 font-medium text-xs font-medium text-gray-900 dark:text-white">Gate
                                Number :
                            </label>
                            <input type="text" name="email" id="email"
                                class="w-40 rounded-md border text-xs border-[#e0e0e0] bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                </form>
            </div>
            <div class=" mt-5 mb-5">
                <form class="w-full border p-3 border-gray-300 rounded-md">
                    <div class="flex flex-wrap items-center">
                        <div>
                            <input id="link-checkbox" type="checkbox" value=""
                                class="w-3 h-4 text-blue-600 bg-gray-100 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:border-gray-600">
                        </div>
                        <div class="ml-2">
                            <label class="block mb-2 font-medium text-xs font-medium text-gray-900 dark:text-white">S. No
                                :
                            </label>
                            <input type="text" name="email" id="email"
                                class="w-20 rounded-md border text-xs border-[#e0e0e0] bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="ml-2">
                            <label class="block mb-2 font-medium text-xs font-medium text-gray-900 dark:text-white">Item
                                Code:
                            </label>
                            <input type="text" name="email" id="email"
                                class="w-28 rounded-md border text-xs border-[#e0e0e0] bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="ml-2">
                            <label class="block mb-2 font-medium text-xs font-medium text-gray-900 dark:text-white">Item
                                Desc :
                            </label>
                            <input type="text" name="email" id="email"
                                class="w-40 rounded-md border text-xs border-[#e0e0e0] bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="ml-2">
                            <label class="block mb-2 font-medium text-xs font-medium text-gray-900 dark:text-white">Qty :
                            </label>
                            <input type="text" name="email" id="email"
                                class="w-24 rounded-md border text-xs border-[#e0e0e0] bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="ml-2">
                            <label class="block mb-2 font-medium text-xs font-medium text-gray-900 dark:text-white">Qty
                                Recv:
                            </label>
                            <input type="text" name="email" id="email"
                                class="w-24 rounded-md border text-xs border-[#e0e0e0] bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="ml-2">
                            <label class="block mb-2 font-medium text-xs font-medium text-gray-900 dark:text-white">SI
                                Unit :
                            </label>
                            <input type="text" name="email" id="email"
                                class="w-20 rounded-md border text-xs border-[#e0e0e0] bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="ml-2">
                            <label class="block mb-2 font-medium text-xs font-medium text-gray-900 dark:text-white">Sub
                                Inveory:
                            </label>
                            <input type="text" name="email" id="email"
                                class="w-24 rounded-md border text-xs border-[#e0e0e0] bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <!-- <div class="ml-2">
                            <label
                                class="block mb-2 font-medium text-xs font-medium text-gray-900 dark:text-white">Status:
                            </label>
                            <input type="text" name="email" id="email"
                            class="w-20 rounded-md border text-xs border-[#e0e0e0] bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div> -->
                        <div id="recieved_div"></div>
                        <div id="accept_div"></div>
                        <div id="reject_div"></div>
                    </div>
                </form>
            </div>

            <div class="w-full mt-5 flex justify-around">
                <!-- <button onclick="received()" type="text"

                    class="text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs px-5 py-2.5 text-center me-2 mb-2 font-medium dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Recieved</button>
                <div>
                    <button type="text" onclick="accept()"
                        class="text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs px-5 py-2.5 text-center me-2 font-medium dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Accept</button>
                    <button type="text" onclick="reject()"
                        class="text-white border ml-4 border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs px-5 py-2.5 text-center me-2 font-medium dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Reject</button>
                </div>
                <button type="text"
                    class="text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs px-5 py-2.5 text-center me-2 mb-2 font-medium dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 x">
                    Delivered</button> -->
                <button type="text"
                    class="text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs px-5 py-2.5 text-center me-2 mb-2 font-medium dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 x">
                    Search Now</button>
            </div>
        </div>
        <!-- <div id="correction_section" class="mt-5 border border-gray-900 p-5 rounded-lg">
            <h1 class="text-center underline text-3xl mb-3 font-medium">Correction GRN Form</h1>
            <form class="w-full border border-gray-300 p-3 rounded-md">
                <div class="flex flex-wrap">
                    <div>
                        <label for="email"
                            class="block w-40 mb-2 font-medium text-xs font-medium text-gray-900 dark:text-white">PO
                            Number : </label>
                        <input type="text" name="email" id="email"
                            class="w-40 rounded-md border text-xs border-[#e0e0e0] bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-20">
                        <label for="password"
                            class="block  w-40 mb-2 font-medium text-xs font-medium text-gray-900 dark:text-white">Enter
                            Gate Number : </label>
                        <input type="text" name="email" id="email"
                            class="w-40 rounded-md border text-xs border-[#e0e0e0] bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                </div>
            </form>
            <div class=" mt-5">
                <form class="w-full border p-3 border-gray-300 rounded-md">
                    <div class="flex flex-wrap">
                        <div>
                            <label for="email"
                                class="block w-40 mb-2 font-medium text-xs font-medium text-gray-900 dark:text-white">Vendor
                                Name :
                            </label>
                            <input type="text" name="email" id="email"
                                class="w-40 rounded-md border text-xs border-[#e0e0e0] bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="ml-20">
                            <label for="password"
                                class="block  w-40 mb-2 font-medium text-xs font-medium text-gray-900 dark:text-white">Ship
                                to :
                            </label>
                            <input type="text" name="email" id="email"
                                class="w-40 rounded-md border text-xs border-[#e0e0e0] bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="ml-20">
                            <label for="password"
                                class="block  w-40 mb-2 font-medium text-xs font-medium text-gray-900 dark:text-white">Bill
                                to :
                            </label>
                            <input type="text" name="email" id="email"
                                class="w-40 rounded-md border text-xs border-[#e0e0e0] bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                </form>
            </div>
            <div class=" mt-5">
                <form class="w-full border p-3 border-gray-300 rounded-md">
                    <div class="flex">
                        <div>
                            <label for="email"
                                class="block w-40 mb-2 font-medium text-xs font-medium text-gray-900 dark:text-white">Gate
                                Number :
                            </label>
                            <input type="text" name="email" id="email"
                                class="w-40 rounded-md border text-xs border-[#e0e0e0] bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                </form>
            </div>
            <div class=" mt-5 mb-5">
                <form class="w-full border p-3 border-gray-300 rounded-md">
                    <div class="flex flex-wrap mx-auto justify-center">
                        <div>
                            <input id="link-checkbox" type="checkbox" value=""
                                class="w-3 h-4 text-blue-600 bg-gray-100 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:border-gray-600">
                        </div>
                        <div class="ml-2">
                            <label class="block mb-2 font-medium text-xs font-medium text-gray-900 dark:text-white">S. No
                                :
                            </label>
                            <input type="text" name="email" id="email"
                                class="w-20 rounded-md border text-xs border-[#e0e0e0] bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="ml-2">
                            <label class="block mb-2 font-medium text-xs font-medium text-gray-900 dark:text-white">Item
                                Code:
                            </label>
                            <input type="text" name="email" id="email"
                                class="w-28 rounded-md border text-xs border-[#e0e0e0] bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="ml-2">
                            <label class="block mb-2 font-medium text-xs font-medium text-gray-900 dark:text-white">Item
                                Desc :
                            </label>
                            <input type="text" name="email" id="email"
                                class="w-40 rounded-md border text-xs border-[#e0e0e0] bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="ml-2">
                            <label class="block mb-2 font-medium text-xs font-medium text-gray-900 dark:text-white">Qty :
                            </label>
                            <input type="text" name="email" id="email"
                                class="w-24 rounded-md border text-xs border-[#e0e0e0] bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="ml-2">
                            <label class="block mb-2 font-medium text-xs font-medium text-gray-900 dark:text-white">Qty
                                Recv:
                            </label>
                            <input type="text" name="email" id="email"
                                class="w-24 rounded-md border text-xs border-[#e0e0e0] bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="ml-2">
                            <label class="block mb-2 font-medium text-xs font-medium text-gray-900 dark:text-white">SI
                                Unit :
                            </label>
                            <input type="text" name="email" id="email"
                                class="w-20 rounded-md border text-xs border-[#e0e0e0] bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="ml-2">
                            <label class="block mb-2 font-medium text-xs font-medium text-gray-900 dark:text-white">Sub
                                Inveory:
                            </label>
                            <input type="text" name="email" id="email"
                                class="w-24 rounded-md border text-xs border-[#e0e0e0] bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div id="recieved_div"></div>
                        <div id="accept_div"></div>
                        <div id="reject_div"></div>
                    </div>
                </form>
            </div>

            <div class="w-full mt-5 flex justify-around">
                <button type="text"
                    class="text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs px-5 py-2.5 text-center me-2 mb-2 font-medium dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 x">
                    Correct Now</button>
            </div>
        </div> -->
    </div>
    </div>

    <script src="./js/script.js"></script>
</body>

</html>