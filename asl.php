<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asl form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'brand-primary': '#3B82F6',
                        'brand-secondary': '#10B981',
                        'brand-accent': '#6366F1'
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gradient-to-br from-gray-100 to-gray-200 min-h-screen flex items-center justify-center p-4">
    <div class="flex flex-wrap md:flex-nowrap w-full max-w-6xl space-y-6 md:space-y-0 md:space-x-6">
        <!-- Form Section -->
        <div class="bg-white shadow-2xl rounded-2xl w-full md:w-1/2 p-6 space-y-6 border border-gray-100">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-800 mb-2">Supplier Management</h2>
                <p class="text-gray-500">Select an item and add or edit its suppliers</p>
            </div>

            <div class="space-y-4">
                <!-- Item Selection -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Select Item</label>
                    <div class="relative">
                        <input
                            id="search-input"
                            type="text"
                            placeholder="Search for an item..."
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-primary focus:border-transparent transition duration-300 ease-in-out">
                        <ul
                            id="dropdown"
                            class="absolute left-0 right-0 bg-white border border-gray-300 rounded-lg mt-1 max-h-48 overflow-y-auto z-50 hidden">
                        </ul>
                        <p id="no-results-text" class="text-gray-500 text-center py-2 hidden">No items found</p>
                    </div>
                </div>

                <!-- Supplier Input -->
                <div class="relative">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Supplier Name</label>
                    <div class="flex space-x-2">
                        <input
                            type="text"
                            id="supplier-input"
                            placeholder="Enter supplier name"
                            class="flex-grow px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-primary focus:border-transparent transition duration-300 ease-in-out"
                            disabled>
                        <button
                            id="add-supplier-btn"
                            class="px-4 py-2.5 bg-brand-primary text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-brand-primary disabled:opacity-50 disabled:cursor-not-allowed"
                            disabled>
                            Add
                        </button>
                    </div>
                </div>

                <!-- Suppliers List -->
                <div id="suppliers-container" class="space-y-2 p-2 bg-gray-50 rounded-lg border border-gray-200">
                    <p id="no-suppliers-text" class="text-gray-500 text-center py-4">No suppliers added yet</p>
                </div>

                <!-- Submit Button -->
                <button
                    id="submit-btn"
                    class="w-full py-3 bg-brand-secondary text-white rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-brand-secondary disabled:opacity-50 disabled:cursor-not-allowed"
                    disabled>
                    Submit Suppliers
                </button>
            </div>
        </div>

        <!-- Existing Data Table Section -->
        <div class="bg-white shadow-2xl rounded-2xl w-full md:w-1/2 p-6 border border-gray-100">
            <div class="text-center">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Existing Items & Suppliers</h2>
            </div>
            <table class="w-full border border-gray-300 text-sm text-gray-600 rounded-lg">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="p-2 border-b border-gray-300">Item</th>
                        <th class="p-2 border-b border-gray-300">Suppliers</th>
                        <th class="p-2 border-b border-gray-300">Actions</th>
                    </tr>
                </thead>
                <tbody id="existing-data">
                    <!-- Existing rows dynamically populated -->
                </tbody>
            </table>
        </div>
    </div>




    

    <script src="js/jquery.min.js"></script>
    <script>
        let options = [
            // { value: "ITEM001", label: "(ITEM001)" },

        ];


        let existingData = [
         ];

        $.ajax({
            url: 'phpAjax/ajaxAsl.php', // Replace with the correct PHP script URL
            type: 'GET',
            data: {
                getItemsData: true
            }, // Query parameter
            success: function(response) {
                // Parse the response if needed
                const items = JSON.parse(response);

                console.log(items);
                // Example: Populate a table with the data

                let item = items.data

                item.forEach(data => {

                    options.push({
                        value: data.S_No,
                        label: data.item_code
                    })

                })




                options.forEach(item_code => {


                    $.getJSON("phpAjax/ajaxAsl.php", {
                            getSupliers: true,
                            item_code: item_code.label
                        },
                        function(data, textStatus, jqXHR) {


                            if (data.success) {
                                console.log(data);

                                let supplieris = data.data


                                console.log(supplieris);


                                // Array.from((data.data).value)


                                console.log(item_code);


                                existingData.push({
                                    item: item_code.label,
                                    suppliers: supplieris
                                });



                                populateDropdown(options);
                                renderTable();



                            }

                        }
                    ).fail(error => console.log(error))


                })



                // Append the data to a table body

            },
            error: function(error) {
                console.error('Failed to fetch items:', error);
            }
        });

        console.log(options);











        const searchInput = document.getElementById('search-input');
        const dropdown = document.getElementById('dropdown');
        const noResultsText = document.getElementById('no-results-text');
        const supplierInput = document.getElementById('supplier-input');
        const addSupplierBtn = document.getElementById('add-supplier-btn');
        const suppliersContainer = document.getElementById('suppliers-container');
        const noSuppliersText = document.getElementById('no-suppliers-text');
        const submitBtn = document.getElementById('submit-btn');
        const existingDataTable = document.getElementById('existing-data');

        let selectedItem = null;
        let suppliers = [];
        let editingSupplierIndex = null;

        // Populate dropdown
        function populateDropdown(items) {
            // console.log(items);
            dropdown.innerHTML = items.length ?
                items.map(item => `<li class="px-4 py-2 cursor-pointer hover:bg-gray-100" data-value="${item.value}">${item.label}</li>`).join('') :
                '';
            noResultsText.classList.toggle('hidden', items.length > 0);
        }

        // Search functionality
        searchInput.addEventListener('input', () => {
            const term = searchInput.value.toLowerCase();
            const filtered = options.filter(o => o.label.toLowerCase().includes(term));
            populateDropdown(filtered);
            dropdown.classList.toggle('hidden', filtered.length === 0);
        });

        dropdown.addEventListener('click', e => {
            const item = options.find(o => o.value === e.target.dataset.value);
            if (item) {
                selectedItem = item;
                searchInput.value = item.label;
                dropdown.classList.add('hidden');
                supplierInput.disabled = addSupplierBtn.disabled = false;
            }
        });

        addSupplierBtn.addEventListener('click', () => {
            const supplier = supplierInput.value.trim();
            if (supplier) {
                if (editingSupplierIndex !== null) {
                    // Edit mode
                    suppliers[editingSupplierIndex] = supplier;
                    editingSupplierIndex = null;
                } else {
                    // Add new supplier
                    suppliers.push(supplier);
                }
                renderSuppliers();
                supplierInput.value = '';
                submitBtn.disabled = false;
            }
        });

        // <button class="text-blue-500 hover:text-blue-700" onclick="editSupplier(${index})">Edit</button>
        function renderSuppliers() {
            suppliersContainer.innerHTML = suppliers.map((supplier, index) => `
                <div class="flex justify-between items-center px-4 py-2 bg-white border border-gray-300 rounded-lg">
                    <span>${supplier}</span>
                    <div class="space-x-2">
                        <button class="text-red-500 hover:text-red-700" onclick="deleteSupplier(${index})">Delete</button>
                    </div>
                </div>
            `).join('');
            noSuppliersText.classList.toggle('hidden', suppliers.length > 0);
        }

        function editSupplier(index) {
            supplierInput.value = suppliers[index];
            supplierInput.focus();
            editingSupplierIndex = index;
        }

        function deleteSupplier(index) {
            suppliers.splice(index, 1);
            renderSuppliers();
        }

        submitBtn.addEventListener('click', () => {
            if (selectedItem && suppliers.length) {
                existingData.push({
                    item: selectedItem.label,
                    suppliers
                });
                renderTable();
                selectedItemsCOde = selectedItem.label
                selectedItem = null;
                supplierInput.disabled = addSupplierBtn.disabled = true;
                searchInput.value = '';
                submitBtn.disabled = true;



                // Add item and suppliers to the database


                let data = {
                    suppliers: suppliers,
                    item_code: selectedItemsCOde,
                    addingSupliier: true,
                }
                console.log(data);

                $.ajax({
                    url: 'phpAjax/ajaxAsl.php',
                    type: 'POST',
                    data: data,
                    dataType: 'json',
                    success: function(response) {
                        console.log(response);

                        if (response.success) {
                            alert('Item and suppliers added successfully');
                            suppliers = [];
                            renderSuppliers();
                        }
                    },
                    error: function(error) {
                        console.error('Failed to save item:', error);
                    }
                });


            }
        });
        // <button class="text-blue-500 hover:text-blue-700" onclick="editRow(${index})">Edit</button>

        function renderTable() {
            existingDataTable.innerHTML = existingData.map((row, index) => `
                <tr class="hover:bg-gray-50">
                    <td class="p-2 border-b border-gray-300">${row.item}</td>
                    <td class="p-2 border-b border-gray-300">${row.suppliers.join(', ')}</td>
                    <td class="p-2 border-b border-gray-300">
                        <button class="text-red-500 hover:text-red-700" onclick="deleteRow(${index})">Delete</button>
                    </td>
                </tr>
            `).join('');
        }

        function editRow(index) {
            const row = existingData[index];
            selectedItem = options.find(o => o.label === row.item);
            suppliers = [...row.suppliers];
            searchInput.value = row.item;
            supplierInput.disabled = addSupplierBtn.disabled = false;
            renderSuppliers();
            existingData.splice(index, 1);
            renderTable();
        }

        function deleteRow(index) {
            existingData.splice(index, 1);
            renderTable();
        }





        // Function to fetch and display data
        function fetchItemsData() {
            $.ajax({
                url: 'phpAjax/ajaxAsl.php', // Replace with the correct PHP script URL
                type: 'GET',
                data: {
                    getItemsData: true
                }, // Query parameter
                success: function(response) {
                    // Parse the response if needed
                    const items = JSON.parse(response);

                    console.log(items);
                    // Example: Populate a table with the data

                    // item  = ;




                    // Append the data to a table body

                },
                error: function(error) {
                    console.error('Failed to fetch items:', error);
                }
            });
        }

        // Call the function on document ready or on an event
        $(document).ready(function() {
            fetchItemsData();
        });
    </script>

</body>

</html>