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
<div  class="min-h-screen bg-gray-100 flex flex-col justify-center sm:py-12"id="login">
  <div class="p-10 xs:p-0 mx-auto md:w-full md:max-w-md">
    <h1 class="font-bold text-center text-2xl mb-5">Your Logo</h1>  
    <div class="bg-white shadow w-full rounded-lg divide-y divide-gray-200">

        <form id="loginForm" class="px-5 py-7">
            <div class="mb-5 flex flex-col">
                <label class="font-semibold text-sm text-gray-600 pb-1 block">E-mail</label>
                <input id="email" type="text" name="email" class="border rounded-lg px-3 py-2 mt-1  text-sm w-full" placeholder="entre email"/>
                <span id="emailError" class="text-red-500 "></span>
            </div>

           <div class="mb-5 flex flex-col">
                <label class="font-semibold text-sm text-gray-600 pb-1 block">Password</label>
                <input id="password" type="text" name="password" class="border rounded-lg px-3 py-2 mt-1  text-sm w-full"  placeholder="••••••••" />
                <span id="passwordError" class="text-red-500 "></span>
            </div>
            <button type="submit" name="send" class="transition duration-200 bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                log in
            </button>

        </form>

        <div class="py-5 flex justify-end">
            <div class="flex justify-end">
              <div class="text-center sm:text-right  whitespace-nowrap">
                <a href="index.php?page=register" class="transition duration-200 mx-5 px-5 py-4 cursor-pointer font-normal text-sm rounded-lg text-blue-500  hover:bg-blue-100 focus:outline-none focus:bg-gray-200 focus:ring-2 focus:ring-gray-400 focus:ring-opacity-50 ring-inset">
                    sign up
                    
                </a>
              </div>
            </div>
        </div>
    </div>
    
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>


$(document).ready(function () {   
$("#loginForm").submit(function (event) {
            event.preventDefault();
            // validation login
            var loginForm = {
                'email': $("#email").val(),
                'password': $("#password").val()
            };
            
            console.log("hemm");
            $.ajax({        
                type: "POST",
                url: "index.php?page=login",
                data: loginForm,
                dataType: "json",
                success: function (data) {
                //    console.log(data);

                   $("#emailError").text('');
                   $("#passwordError").text('');
                   if (data.emailError) {
                       $("#emailError").text(data.emailError);
                   }
                   if (data.passwordError) {
                       $("#passwordError").text(data.passwordError);
                   }
                   
                } 
                //     error: function (error) {
                //         console.log("login error:",error);
                //     }
            });

        });
    });
</script>

</body>
</html>