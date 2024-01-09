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
<div style="display: block;" class="min-h-screen bg-gray-100 flex flex-col justify-center sm:py-12"id="login">
  <div class="p-10 xs:p-0 mx-auto md:w-full md:max-w-md">
    <h1 class="font-bold text-center text-2xl mb-5">Your Logo</h1>  
    <div class="bg-white shadow w-full rounded-lg divide-y divide-gray-200">

        <form id="loginForm"  action="index.php?page=login"  method="POST" class="px-5 py-7">

            <label class="font-semibold text-sm text-gray-600 pb-1 block">E-mail</label>
            <input id="email" type="text" name="email" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" placeholder="entre email"/>
            <span id="emailError"></span>

            <label class="font-semibold text-sm text-gray-600 pb-1 block">Password</label>
            <input id="password" type="text" name="password" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full"  placeholder="••••••••" />
            <span id="passwordError"></span>

            <button type="submit" onclick="loginUser()" name="send" class="transition duration-200 bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                log in
            </button>

        </form>

      <div class="py-5">
        <div class="grid grid-cols-2 gap-1">
          <div class="text-center sm:text-left whitespace-nowrap">
            <a href="index.php?page=forget_password" class="transition duration-200 mx-5 px-5 py-4 cursor-pointer font-normal text-sm rounded-lg text-gray-500 hover:bg-blue-100 focus:outline-none focus:bg-gray-200 focus:ring-2 focus:ring-gray-400 focus:ring-opacity-50 ring-inset">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 inline-block align-text-top">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                </svg>
                <span class=" text-blue-500 inline-block ml-1">Forgot Password</span>
            </a>
          </div>
          <div class="text-center sm:text-right  whitespace-nowrap">
            <button onclick="register()" class="transition duration-200 mx-5 px-5 py-4 cursor-pointer font-normal text-sm rounded-lg text-blue-500  hover:bg-blue-100 focus:outline-none focus:bg-gray-200 focus:ring-2 focus:ring-gray-400 focus:ring-opacity-50 ring-inset">
                sign up
                
            </button>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</div>




    
    <!-- component -->
<div style="display: none;" class="bg-gray-100 flex items-center justify-center h-screen" id="register">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-sm w-full">
        <div class="flex justify-center mb-6">
            <span class="inline-block bg-gray-200 rounded-full p-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4"/></svg>
            </span>
        </div>
        <h2 class="text-2xl font-semibold text-center mb-4">Create a new account</h2>
        <p class="text-gray-600 text-center mb-6">Enter your details to register.</p>
        <form action="index.php?page=register" method="POST">
            <div class="mb-4">
                <label for="fullName" class="block text-gray-700 text-sm font-semibold mb-2">Full Name *</label>
                <input type="text" name="name" id="fullName" class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500" required placeholder="enter name">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">Email Address *</label>
                <input type="email" name="email" id="email" class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500" required placeholder="entre email">
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700 text-sm font-semibold mb-2">Password *</label>
                <input type="password" name="password" id="password" class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500" required placeholder="••••••••">
                <p class="text-gray-600 text-xs mt-1">Must contain 1 uppercase letter, 1 number, min. 8 characters.</p>
            </div>
            <button type="submit" name="send" class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Register</button>
            <p class="text-gray-600 text-xs text-center mt-4">
                By clicking Register, you agree to accept Apex Financial's
                <a href="#" class="text-blue-500 hover:underline" onclick="login()">back of login</a>.
            </p>
        </form>
    </div>
</div>
<script>
      function login() {
        console.log("HELLO");
        var loginElement = document.getElementById('login');
        var registerElement = document.getElementById('register');
      
          loginElement.style.display = 'flex';
          registerElement.style.display = 'none';
        
    }
      
      
    function register() {
        console.log("HELLO");
        var loginElement = document.getElementById('login');
        var registerElement = document.getElementById('register');
      
        
          loginElement.style.display = 'none';
          registerElement.style.display = 'flex';

    }


    function loginUser() {
    // Reset error messages
    $("#EmailError, #PasswordError").text("");

    // Get form data
    var formData = $("#loginForm").serialize();

    // Ajax request
    $.ajax({
        type: "POST",
        url: "index.php?page=login",
        data: formData,
        success: function(response) {
            // Handle the response from the server
            if (response === "success") {
                alert("Registration successful!");
                // You can redirect or perform other actions upon successful registration
            } else {
                // Display error messages
                var errors = JSON.parse(response);
                if (errors.email) $("#emailError").text(errors.email);
                if (errors.password) $("#passwordError").text(errors.password);
            }
        }
    });
}

      
</script>
</body>
</html>