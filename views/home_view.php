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
                    <div class=" hidden md:flex">
                        <a href="index.php?page=" class="py-2 px-4 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                        Add Blog
                        </a>
                        <a href="index.php?page=register" class=" ml-1 py-2 px-4 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                          signup 
                        </a>
                        
                    </div>
                   

                </div>
            </header>

            <!-- category -->
            <div class="w-screen h-auto bg-gray-900 md:flex md:flex-col  md:justify-center md:items-center gap-2 p-3">
            <h1 class="text-white font-bold border border-cyan-800 opacity-25 rounded-xl px-4 py-1 ">CATEGORY</h1>
            <div class="w-screen h-auto md:flex grid grid-cols-3 md:justify-evenly md:items-center gap-2 p-3">
                <a hfer="#" class="w-20 border border-red-500 h-20 rounded-xl bg-red-200 flex justify-center items-center">voiture</a>
                <a hfer="#" class="w-20 border border-red-500 h-20 rounded-xl bg-red-200 flex justify-center items-center">homes  </a>
                <a hfer="#" class="w-20 border border-red-500 h-20 rounded-xl bg-red-200 flex justify-center items-center">voiture</a>
                <a hfer="#" class="w-20 border border-red-500 h-20 rounded-xl bg-red-200 flex justify-center items-center">homes  </a>
            </div>
            </div>
            
            <!-- tags -->
            <div class="md:flex md:flex-col md:justify-center md:items-center p-4  bg-gray-900">
                <h1 class="text-white font-bold border border-cyan-800 opacity-25 rounded-xl px-4 py-1">TAGS</h1>
                <div class="md:flex md:justify-center md:items-center p-4 grid grid-cols-3">
                    <a href="#"
                        class="bg-green-400 hover:shadow hover:bg-danger transition duration-150 px-2 py-1 rounded text-sm text-white mx-1 my-2">
                        laravel
                    </a>
                    <a href="#"
                        class="bg-green-400 hover:shadow hover:bg-danger transition duration-150 px-2 py-1 rounded text-sm text-white mx-1 my-2">
                        livewire
                    </a>
                    <a href="#"
                        class="bg-green-400 hover:shadow hover:bg-danger transition duration-150 px-2 py-1 rounded text-sm text-white mx-1 my-2">
                        component
                    </a>
                    <a href="#"
                        class="bg-green-400 hover:shadow hover:bg-danger transition duration-150 px-2 py-1 rounded text-sm text-white mx-1 my-2">
                        snippet
                    </a>
                    <a href="#"
                        class="bg-green-400 hover:shadow hover:bg-danger transition duration-150 px-2 py-1 rounded text-sm text-white mx-1 my-2">
                        tailwind
                    </a>
                </div>
            </div>

            <section class="text-gray-400 bg-gray-900 body-font">
                <div class="container px-5 py-24 mx-auto">
                  <div class="flex flex-wrap -m-4">
                    <div class="p-4 md:w-1/3">
                      <div class="h-full border-2 border-gray-800 rounded-lg overflow-hidden">

                        <div class="p-6">

                          <h1 class="title-font text-lg font-medium text-white mb-3">The Catalyzer</h1>
                          <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                          <div class="flex items-center flex-wrap ">
                            <a href="#" class="text-indigo-400 inline-flex items-center md:mb-2 lg:mb-0 hover:underline underline-offset-2">Learn More
                              <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                              </svg>
                            </a>

                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="p-4 md:w-1/3">
                      <div class="h-full border-2 border-gray-800 rounded-lg overflow-hidden">

                        <div class="p-6">

                          <h1 class="title-font text-lg font-medium text-white mb-3">The 400 Blows</h1>
                          <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                          <div class="flex items-center flex-wrap">
                            <a href="#" class="text-indigo-400 inline-flex items-center md:mb-2 lg:mb-0 hover:underline underline-offset-2">Learn More
                              <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                              </svg>
                            </a>

                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="p-4 md:w-1/3">
                      <div class="h-full border-2 border-gray-800 rounded-lg overflow-hidden">

                        <div class="p-6">

                          <h1 class="title-font text-lg font-medium text-white mb-3">Shooting Stars</h1>
                          <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                          <div class="flex items-center flex-wrap ">
                            <a  href=""# class="text-indigo-400 inline-flex items-center md:mb-2 lg:mb-0 hover:underline underline-offset-2">Learn More
                              <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                              </svg>
                            </a>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </section>



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