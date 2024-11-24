<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miscellaneous Issue Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 p-4 min-h-screen">

    <div class="max-w-7xl mx-auto bg-white rounded-lg shadow-md p-6">
        <h1 class="text-2xl font-bold text-center mb-8 underline">Miscellaneous Issue Form</h1>

        <form id="miscForm" class="space-y-6">
            <!-- Header Form Section -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="space-y-2">
                    <label for="poNumber" class="block text-sm font-medium text-gray-700">PO Number:</label>
                    <input type="text" id="poNumber" name="poNumber"
                        class="w-full p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div class="space-y-2">
                    <label for="vendorCode" class="block text-sm font-medium text-gray-700">Vendor Code:</label>
                    <input type="text" id="vendorCode" name="vendorCode"
                        class="w-full p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div class="space-y-2">
                    <label for="vendorName" class="block text-sm font-medium text-gray-700">Vendor Name:</label>
                    <input type="text" id="vendorName" name="vendorName"
                        class="w-full p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
            </div>

            <!-- Table Section -->
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">S. No</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Vendor Code</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Vendor Name</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Item Code</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Item Short Desc</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Qty</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Unit price</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">total price</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody" class="bg-white divide-y divide-gray-200">
                        <!-- Rows will be added here dynamically -->
                    </tbody>
                </table>
            </div>

            <!-- Button Section -->
            <div class="flex justify-between items-center pt-4">
                <button type="button" id="addRowBtn"
                    class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors">
                    Add New row +
                </button>
                <button type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors">
                    Submit Now
                </button>
            </div>
        </form>
    </div>

    <script>
       document.addEventListener('DOMContentLoaded', function () {
    const tableBody = document.getElementById('tableBody');
    const addRowBtn = document.getElementById('addRowBtn');
    const form = document.getElementById('miscForm');
    const totalQtyField = document.getElementById('totalQty'); // Add a field for total quantity
    let rowCount = 0;

    // Function to calculate total quantity
    function calculateTotalQty() {
        const qtyInputs = document.querySelectorAll("input[name^='qty_']");
        let totalQty = 0;
        qtyInputs.forEach(input => {
            const value = parseFloat(input.value) || 0; // Convert input value to number, default to 0
            totalQty += value;
        });
        totalQtyField.value = totalQty.toFixed(2); // Update the total quantity field
    }

    // Function to create a new row
    function createNewRow() {
        rowCount++;
        const row = document.createElement('tr');
        row.id = `row_${rowCount}`;
        row.className = 'hover:bg-gray-50';

        const fields = ['serialNo', 'vendorCode', 'vendorName', 'itemCode',
            'itemShortDesc', 'qty', 'slInvetory', 'subInvetory'
        ];

        fields.forEach(field => {
            const td = document.createElement('td');
            td.className = 'px-6 py-4 whitespace-nowrap';
            const input = document.createElement('input');
            input.type = 'text';
            input.name = `${field}_${rowCount}`;
            input.id = `${field}_${rowCount}`;
            input.className = 'w-full p-1 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm';
            if (field === 'serialNo') {
                input.value = rowCount;
                input.readOnly = true;
            } else if (field === 'qty') {
                input.type = 'number';
                input.min = '0';
                input.oninput = calculateTotalQty; // Attach the calculate function to the qty input
            }
            td.appendChild(input);
            row.appendChild(td);
        });

        // Add delete button
        const deleteCell = document.createElement('td');
        deleteCell.className = 'px-6 py-4 whitespace-nowrap';
        const deleteButton = document.createElement('button');
        deleteButton.type = 'button';
        deleteButton.className = 'text-red-600 hover:text-red-800 focus:outline-none';
        deleteButton.innerHTML = '🗑️';
        deleteButton.onclick = () => {
            if (tableBody.children.length > 1) {
                row.remove();
                calculateTotalQty(); // Recalculate total quantity after deletion
            } else {
                alert('Cannot delete the last row');
            }
        };
        deleteCell.appendChild(deleteButton);
        row.appendChild(deleteCell);

        tableBody.appendChild(row);
    }

    // Add initial row
    createNewRow();

    // Add row button click handler
    addRowBtn.addEventListener('click', createNewRow);

    // Form submit handler
    form.addEventListener('submit', function (e) {
        e.preventDefault();

        // Collect form data
        const formData = {
            poNumber: document.getElementById('poNumber').value,
            vendorCode: document.getElementById('vendorCode').value,
            vendorName: document.getElementById('vendorName').value,
            totalQty: totalQtyField.value,
            rows: []
        };

        // Collect rows data
        const rows = tableBody.getElementsByTagName('tr');
        Array.from(rows).forEach((row, index) => {
            const rowNum = index + 1;
            const rowData = {
                serialNo: document.getElementById(`serialNo_${rowNum}`).value,
                vendorCode: document.getElementById(`vendorCode_${rowNum}`).value,
                vendorName: document.getElementById(`vendorName_${rowNum}`).value,
                itemCode: document.getElementById(`itemCode_${rowNum}`).value,
                itemShortDesc: document.getElementById(`itemShortDesc_${rowNum}`).value,
                qty: document.getElementById(`qty_${rowNum}`).value,
                slInvetory: document.getElementById(`slInvetory_${rowNum}`).value,
                subInvetory: document.getElementById(`subInvetory_${rowNum}`).value
            };
            formData.rows.push(rowData);
        });

        // Log the form data (replace with your submission logic)
        console.log('Form Data:', formData);
        alert('Form submitted! Check console for data.');
    });
});

    </script>

    <script>
          function updateTotal(inputElement) {
    const row = inputElement.closest("tr");
    const qty = row.querySelector(".qty-input").value || 0;
    const unitPrice = row.querySelector(".unit-price-input").value || 0;
    const totalPrice = row.querySelector(".total-price-input");

    // Calculate the total price
    totalPrice.value = (parseFloat(qty) * parseFloat(unitPrice)).toFixed(2);
  }
    </script>

    
</body>

</html>