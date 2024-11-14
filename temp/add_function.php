<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Function Name</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-gray-100">



<?php
// Get all files in the current directory (excluding . and ..)
$files = __DIR__ ;



$cur_uri ='add_function.php';




if(basename($_SERVER['PHP_SELF'])===$cur_uri){


    echo "this is current url";
}



// echo $files;
// Print the file names
// foreach ($files as $file) {
//     echo $file . PHP_EOL."<br>";
// }
?>


<div class="container mx-auto p-6">
    <!-- Page Title -->
    <h1 class="text-3xl font-bold mb-6">Add New Function</h1>

    <!-- Add Function Form -->
    <div class="bg-white shadow-md rounded p-4">
        <form id="add-function-form" class="space-y-4">
            <div>
                <label class="block text-gray-700">Function Name</label>
                <input type="text" name="function_name" class="w-full border rounded px-3 py-2" placeholder="Enter function name (e.g., purchaseorder.php)" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Add Function</button>
        </form>
    </div>
</div>

<script>
    // Handle form submission with AJAX for adding a new function
    $('#add-function-form').on('submit', function(event) {
        event.preventDefault();  // Prevent the default form submission

        $.ajax({
            url: 'save_function.php',
            method: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                alert(response);
                $('#add-function-form')[0].reset();  // Clear the form fields
            },
            error: function() {
                alert('Error adding function');
            }
        });
    });
</script>

</body>
</html>
