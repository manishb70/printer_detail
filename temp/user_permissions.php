
<?php


include '../dbconnection/db.php';

$db = $con;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Permissions</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-gray-100">

<div class="container mx-auto p-6">
    <!-- Page Title -->
    <h1 class="text-3xl font-bold mb-4">Manage User Permissions</h1>

    <!-- Permissions Table -->
    <div class="bg-white shadow-md rounded p-4 mb-6">
        <h2 class="text-xl font-semibold mb-4">Permissions Overview</h2>
        <table class="table-auto w-full">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2">User ID</th>
                    <th class="px-4 py-2">Function Name</th>
                    <th class="px-4 py-2">Is Allowed</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody id="permissions-table">
                <!-- PHP will populate this section -->
                <?php
                    // Connect to the database
                    $result = $con->query("SELECT fc.id, fc.user_id, fu.function_name, fc.is_allowed 
                                          FROM Functions_checker fc 
                                          JOIN Functions_urls fu ON fc.function_id = fu.id");
                    while ($row = $result->fetch_assoc()):
                ?>
                    <tr class="border-t">
                        <td class="px-4 py-2"><?= $row['user_id'] ?></td>
                        <td class="px-4 py-2"><?= $row['function_name'] ?></td>
                        <td class="px-4 py-2"><?= $row['is_allowed'] ? 'Allowed' : 'Denied' ?></td>
                        <td class="px-4 py-2">
                            <button onclick="togglePermission(<?= $row['id'] ?>, <?= !$row['is_allowed'] ?>)" class="bg-blue-500 text-white px-2 py-1 rounded">
                                <?= $row['is_allowed'] ? 'Revoke' : 'Grant' ?>
                            </button>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <!-- Permission Assignment Form -->
    <div class="bg-white shadow-md rounded p-4">
        <h2 class="text-xl font-semibold mb-4">Assign Permission</h2>
        <form id="assign-permission-form" class="space-y-4">
            <div>
                <label class="block text-gray-700">User ID</label>
                <input type="number" name="user_id" class="w-full border rounded px-3 py-2" required>
            </div>
            <div>
                <label class="block text-gray-700">Function</label>
                <select name="function_id" class="w-full border rounded px-3 py-2" required>
                    <?php
                        $functions = $db->query("SELECT id, function_name FROM Functions_urls");
                        while ($function = $functions->fetch_assoc()):
                    ?>
                        <option value="<?= $function['id'] ?>"><?= $function['function_name'] ?></option>
                    <?php endwhile; ?>
                </select>
            </div>
            <div>
                <label class="block text-gray-700">Is Allowed</label>
                <select name="is_allowed" class="w-full border rounded px-3 py-2">
                    <option value="1">Allowed</option>
                    <option value="0">Denied</option>
                </select>
            </div>
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Assign Permission</button>
        </form>
    </div>
</div>

<script>
    // Handle form submission with AJAX for assigning new permission
    $('#assign-permission-form').on('submit', function(event) {
        event.preventDefault();  // Prevent the default form submission

        $.ajax({
            url: 'assign_permission.php',
            method: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                alert('Permission assigned successfully');
                location.reload();  // Reload the page to refresh the permissions table
            },
            error: function() {
                alert('Error assigning permission');
            }
        });
    });

    // AJAX function to toggle permission status
    function togglePermission(permissionId, isAllowed) {
        $.ajax({
            url: 'update_permission.php',
            method: 'POST',
            data: { permission_id: permissionId, is_allowed: isAllowed },
            success: function(response) {
                alert('Permission updated successfully');
                location.reload();  // Reload the page to refresh the permissions table
            },
            error: function() {
                alert('Error updating permission');
            }
        });
    }
</script>

</body>
</html>
