<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.4/dist/tailwind.min.css" rel="stylesheet">
    <title>Create BOM Form</title>
</head>

<body>
    <div id="create_section" class="mt-5 border border-gray-900 p-5 rounded-lg mx-5">
        <h1 class="text-center underline text-3xl mb-3 font-bold">Create BOM Form</h1>
        <div class="flex">

            <form class="w-full border border-gray-500 p-3 rounded-md">
                <div class="">
                    <div class="flex justify-between flex-wrap">

                        <div>
                            <label for="email"
                                class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">New BOM
                                :
                            </label>
                            <input type="text"
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="">
                            <label
                                class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Item
                                Name : </label>
                            <input type="text"
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="">
                            <label
                                class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Revison
                                : </label>
                            <input type="text"
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="">
                            <label
                                class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Percentage:
                            </label>
                            <input type="text"
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="">
                            <label
                                class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Products
                                :
                            </label>
                            <input type="text"
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>


                    <div class="flex justify-between flex-wrap mt-3 ">

                        <div class="">
                            <label
                                class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Created
                                Date : </label>
                            <input type="date"
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="">
                            <label
                                class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Created
                                By :
                            </label>
                            <input type="text"
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="">
                            <label
                                class="block  mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Organization
                                Mapping : </label>
                            <input type="text"
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="">
                            <label
                                class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Warehouse
                                Location : </label>
                            <input type="text"
                                class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="">
                            <label
                                class="block w-40 mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Choose
                                Image : </label>
                            <input type="file" accept="image/*"
                            onchange="previewImage(event)"
                                class="w-40 border-none text-xs border-gray-500 bg-white text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                </div>
            </form>
            <div class="w-40 h-40 border border-gray-900 rounded-md ml-4">
                <img class="w-40 h-40" id="preview" alt="Item image">
            </div>
        </div>

        <div class="mt-6">
            <form class="w-full border p-3 border-gray-500 rounded-md">
                <div class="flex flex-wrap items-center justify-between">
                    <div class="ml-2">
                        <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Item Seq
                            :
                        </label>
                        <input type="text" name="email" id="email"
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2">
                        <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Process Seq:
                        </label>
                        <input type="text" name="email" id="email"
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2">
                        <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Item code  :
                        </label>
                        <input type="text" name="email" id="email"
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2">
                        <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">
                            Item Name :
                        </label>
                        <input type="text" name="email" id="email"
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2">
                        <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Qty :
                        </label>
                        <input type="text" name="email" id="email"
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2">
                        <label class="block mb-2 font-bold text-xs font-medium text-gray-900 dark:text-white">Percentage :
                        </label>
                        <input type="number" name="email" id="email"
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                </div>
                <div class="flex flex-wrap items-center border-gray-500 justify-between border-t mt-2">
                    <div class="ml-2 mt-2">
                        <input type="text" name="email" id="email"
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2 mt-2">
                        <input type="text" name="email" id="email"
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2 mt-2">
                        <input type="text" name="email" id="email"
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2 mt-2">
                        <input type="text" name="email" id="email"
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2 mt-2">
                        <input type="text" name="email" id="email"
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2 mt-2">
                        <input type="number" name="email" id="email"
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                </div>
                <div class="flex flex-wrap items-center border-gray-500 justify-between border-t mt-2">
                    <div class="ml-2 mt-2">
                        <input type="text" name="email" id="email"
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2 mt-2">
                        <input type="text" name="email" id="email"
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2 mt-2">
                        <input type="text" name="email" id="email"
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2 mt-2">
                        <input type="text" name="email" id="email"
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2 mt-2">
                        <input type="text" name="email" id="email"
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2 mt-2">
                        <input type="number" name="email" id="email"
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                </div>
                <div class="flex flex-wrap items-center border-gray-500 justify-between border-t mt-2">
                    <div class="ml-2 mt-2">
                        <input type="text" name="email" id="email"
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2 mt-2">
                        <input type="text" name="email" id="email"
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2 mt-2">
                        <input type="text" name="email" id="email"
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2 mt-2">
                        <input type="text" name="email" id="email"
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2 mt-2">
                        <input type="text" name="email" id="email"
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white py-3 pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="ml-2 mt-2">
                        <input type="number" name="email" id="email"
                            class="w-40 rounded-md border text-xs border-gray-500 bg-white pl-2 text-[#6B7280] h-6 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                </div>
            </form>
        </div>

        <div class="w-full mt-5 flex justify-around">
            <button type="text"
                class="w-28 text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs py-2.5 text-center me-2 mb-2 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Clear
                Form</button>
            <!-- <button type="text"
                class="w-28 text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs  py-2.5 text-center me-2 mb-2 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Save</button> -->
            <div>
                <button type="text"
                    class="w-28 text-white border border-blue-700 bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-xs py-2.5 text-center me-2 font-bold dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800 ">Submit
                    Now</button>
            </div>
        </div>
    </div>

    <script>
        function previewImage(event) {
            var input = event.target;
            var image = document.getElementById('preview');
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    image.src = e.target.result;
                }
                reader.readAsDataURL(input.files[0]);
            }

            console.log("Accept")
        }
    </script>
</body>

</html>