<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include Tailwind CSS from CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Edit User Information</title>
</head>
<body>
    <div class="bg-gray-100 flex items-center justify-center h-screen" id="editUser">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-sm w-full">
            <div class="flex justify-center mb-6">
                <span class="inline-block bg-gray-200 rounded-full p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4"/>
                    </svg>
                </span>
            </div>
            <h2 class="text-2xl font-semibold text-center mb-4">Edit User Information</h2>
           
            <form action="index.php?page=edit" method="POST">
                <div class="mb-4">
                    <label for="fullName" class="block text-gray-700 text-sm font-semibold mb-2">Full Name *</label>
                    <input type="text" name="name" id="fullName" class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500" required placeholder="Enter name" value="<?php echo $row['name']; ?>">
                </div>
                <div class="mb-4">
                    <!-- Use a different name attribute for user_id -->
                    <label for="userId" class="block text-gray-700 text-sm font-semibold mb-2">User ID *</label>
                    <input type="text" name="user_id" id="userId" class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500" required placeholder="Enter user ID" value="<?php echo $row['user_id']; ?>">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">Email Address *</label>
                    <input type="email" name="email" id="email" class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500" required placeholder="Enter email" value="<?php echo $row['email']; ?>">
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-gray-700 text-sm font-semibold mb-2">Password *</label>
                    <input type="password" name="password" id="password" class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500" required placeholder="••••••••" value="<?php echo $row['password']; ?>">
                    <p class="text-gray-600 text-xs mt-1">Must contain 1 uppercase letter, 1 number, min. 8 characters.</p>
                </div>
                <input type="submit" name="send" class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50" value="EDIT">
            </form>
        </div>
    </div>
</body>
</html>
