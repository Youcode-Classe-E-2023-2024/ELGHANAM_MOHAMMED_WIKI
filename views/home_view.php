<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>HOME</title>
</head>
<body>
    
<header class="z-40 py-4  bg-gray-800  ">
                <div class="flex items-center justify-between h-8 px-6 mx-auto">
                    <!-- Logo -->
                    
                        <a href="index.php?page=dashboard" class="py-2 px-4 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                           logo
                        </a>
                        
                    
                    <!-- Search Input -->
                    <div class="flex justify-center  mt-2 mr-4">
                        <div class="relative flex w-full flex-wrap items-stretch mb-3">
                            <input id="search" type="search" placeholder="Search" {{ $attributes }}
                                class="form-input px-3 py-2 placeholder-gray-400 text-gray-700 relative bg-white rounded-lg text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pr-10" />
                            <span
                                class="z-10 h-full leading-snug font-normal  text-center text-gray-400 absolute bg-transparent rounded text-base items-center justify-center w-8 right-0 pr-3 py-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 -mt-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </span>
                        </div>
                    </div>
                    <!-- user -->
                    <div class="">
                        <a href="index.php?page=dashboard" class="py-2 px-4 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                        Add Blog
                        </a>
                        <a href="index.php?page=register" class=" ml-1 py-2 px-4 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                          signup 
                        </a>
                        
                    </div>
                   

                </div>
            </header>

<!-- component -->
<div class="bg-gradient-to-bl from-blue-50 to-violet-50 flex items-center justify-center lg:h-screen">
    
      <div class="container h-5/6 mx-auto mx-auto p-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 gap-4">
          <!-- Replace this with your grid items -->
          
          
          <?php if ($result) {
   
            while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="bg-white rounded-lg border p-4">
              <img src="data:image/jpeg;base64,<?php echo base64_encode($row['blog_image']); ?>" alt="Placeholder Image" class="w-full h-48 rounded-md object-cover">
              <div class="px-1 py-4">
                <div class="font-bold text-xl mb-2"><?php echo $row['blog_name'] ?></div>
                <p class="text-gray-700 text-base">
                <?php echo $row['blog_description'] ?>
                </p>
              </div>

            </div>
  
          <?php } } ?>
  
            
          
            
          

          <!-- Add more items as needed -->
        </div>
      </div>
    </div>



    <script>
    //   $(document).ready(function () {
    //     $("#search").keyup(function (e) { 
    //             var input = $(this).val();
    //             // alert(input);
    //             if (input != "") {
    //                 $.ajax({
    //                     type: "post",
    //                     url: "index.php?page=home",
    //                     data: {
    //                         input:input
    //                     },
                        
    //                     success: function (response) {
    //                         $("#result_search").html(response);
    //                     }
    //                 });
    //             }
    //         });
    //   });
    </script>
</body>
</html>