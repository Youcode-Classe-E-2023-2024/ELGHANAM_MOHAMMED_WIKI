<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOR GET Page</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded shadow-md w-96 ">
        <h2 class="text-2xl font-semibold mb-6 text-center">Add Email</h2>

        <form action="index.php?page=forget_password" method="post">

            <!-- Email Input -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full p-2 border rounded-md" placeholder="example@example.com" required>
            </div>

            <!-- Login Button -->
            <input type="submit" name="send" value="send" class="w-full bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600">
        
        </form>
    </div>

</body>
</html>
