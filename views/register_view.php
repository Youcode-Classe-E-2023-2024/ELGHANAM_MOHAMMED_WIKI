<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>REGISTER</title>
</head>
<body>




    
    <!-- component -->
<div  class="bg-gray-100 flex items-center justify-center h-screen" id="register">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-sm w-full">
        <div class="flex justify-center mb-6">
            <span class="inline-block bg-gray-200 rounded-full p-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4"/></svg>
            </span>
        </div>
        <h2 class="text-2xl font-semibold text-center mb-4">Create a new account</h2>
        <p class="text-gray-600 text-center mb-6">Enter your details to register.</p>
        <form id="form_data" >
            <div class="mb-4">
                <label for="fullName" class="block text-gray-700 text-sm font-semibold mb-2">Full Name *</label>
                <input type="text" name="name" id="first_name" class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500" placeholder="enter name">
                <span id="error_name" class="text-red-600"></span>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">Email Address *</label>
                <input type="email" name="email" id="email_r" class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500" placeholder="entre email">
                <span id="error_email" class="text-red-600"></span>
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700 text-sm font-semibold mb-2">Password *</label>
                <input type="password" name="password" id="password_r" class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500"  placeholder="••••••••">
                <span id="error_pass" class="text-red-600"></span>
                <p class="text-gray-600 text-xs mt-1">Must contain 1 uppercase letter, 1 number, min. 8 characters.</p>
            </div>
            <button type="submit" name="send" value="send" class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Register</button>
            <p class="text-gray-600 text-xs text-center mt-4">
                By clicking Register, you agree to accept Apex Financial's
                <a href="index.php?page=login" class="text-blue-500 hover:underline" >back of login</a>.
            </p>
        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

    $(document).ready(function () {
        $("#form_data").submit(function (e) {
            e.preventDefault();

            // validation register
            var formData = {
                'first_name': $("#first_name").val(),
                'email_r': $("#email_r").val(),
                'password_r': $("#password_r").val()
            };

            
            $.ajax({
                type: "POST",
                url: "index.php?page=register",
                data: formData,
                dataType: "json", 
                success: function (response) {
                    
                    $("#error_name").text('');
                    $("#error_email").text('');
                    $("#error_pass").text('');

                    
                    if (response.error_name) {
                        $("#error_name").text(response.error_name);
                    }
                    if (response.error_email) {
                        $("#error_email").text(response.error_email);
                    }
                    if (response.error_password) {
                        $("#error_pass").text(response.error_password);
                    }
                },
                error: function (error) {
                    console.log(error);
                }
            });
        });


    });




      
</script>
</body>
</html>