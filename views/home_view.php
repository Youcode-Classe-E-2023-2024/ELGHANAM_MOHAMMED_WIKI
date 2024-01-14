
    
              <header class="z-40 py-4  bg-gray-800  ">
                <div class="flex items-center justify-between h-8 px-6 mx-auto">
                    <!-- Logo -->
                    
                        <!-- <img src="IMAGE/logo.png" width="100" class=" z-30" alt=""> -->
                        
                    
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
                        <a id="openPopup" class="py-2 px-4 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                        Add Blog
                        </a>
                        <a href="index.php?page=login" class=" ml-1 py-2 px-4 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                          signup 
                        </a>
                        
                    </div>
                   

                </div>
              </header>

            <!-- category -->
            <div class="w-screen h-auto bg-gray-900 md:flex md:flex-col  md:justify-center md:items-center gap-2 p-3">
              <h1 class="text-white font-bold border border-cyan-800 opacity-25 rounded-xl px-4 py-1 ">CATEGORY</h1>
              <div class="w-screen h-auto md:flex grid grid-cols-3 md:justify-center md:items-center gap-2 p-3">
              <?php  foreach ($result3 as $row3):
                               ?>
                  <a hfer="#" class="w-24 border-2 border-gray-800 h-12 rounded-xl text-white flex justify-center font-bold py-1 items-center"><?= $row3['name'];  ?></a>
                  <?php endforeach; ?>
              </div>
            </div>
            
            <!-- tags -->
            <div class="md:flex md:flex-col md:justify-center md:items-center p-4  bg-gray-900">
                <h1 class="text-white font-bold border border-cyan-800 opacity-25 rounded-xl px-4 py-1">TAGS</h1>
                <div class="md:flex md:justify-center md:items-center p-4 grid grid-cols-3">
                <?php  foreach ($result4 as $row4):
                             ?>
                    <a href="#"
                        class="border-2 border-gray-800 hover:bg-gray-700 px-2 py-1 rounded text-sm text-white mx-1 my-2">
                        <?= $row4['name'];  ?>
                    </a>
                <?php endforeach; ?>   
                </div>
            </div>


            <!-- ajoute wiki pop up -->
            <div id="popupContainer" class="fixed top-0 left-0 w-full h-full bg-gray-800 bg-opacity-50 pt-2 hidden">

                <div  class="container mx-auto mt-8 p-4 bg-gray-200 shadow-lg max-w-md rounded-md">

                    <h2 class="text-2xl font-bold mb-4 text-center">Add Blog</h2>
                    <form id="blogForm">

                        <div class="mb-4">
                            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
                            <input type="text" id="title" name="title" placeholder="Enter blog title"
                                class="w-full px-3 py-2 border rounded-md text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <span id="title_error" class="text-red-600"></span>
                        </div>

                        <div class="mb-4">
                            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                            <textarea id="description" name="description" rows="4" placeholder="Enter blog description"
                                class="w-full px-3 py-2 border rounded-md text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                                <span id="description_error" class="text-red-600"></span>
                        </div>


                        <!-- select category -->
                        <div class="mb-4">
                        <label for="category" class="block text-gray-800 text-sm font-bold mb-2">Category:</label>
                        <select id="category" name="category" class="w-full p-2 border rounded " autocomplete="off">
                          <option value="" disabled selected>Select category...</option>
                            <?php  foreach ($result as $row):
                             ?>
                            <option value="<?= $row['id']; ?>"><?= $row['name'];  ?></option>
                            <?php endforeach; ?>
                        </select>
                        <span id="select_category_error" class="text-red-600"></span>
                        </div>


                        <!-- select tag -->
                        <div class="w-full mb-4 flex flex-col">
                        <label for="select-role" class="block text-gray-800 text-sm font-bold mb-2">Tag:</label>
                          <div class="relative flex w-full">
                            <select id="select-role"  name="roles" multiple placeholder="Select roles..." autocomplete="off" class="block w-full rounded-sm cursor-pointer focus:outline-none" multiple>
                            <?php  foreach ($result1 as $row1): 
                            ?>
                              <option value="<?= $row1['id']; ?>"><?= $row1['name'];  ?></option>
                            <?php endforeach; ?>
                            </select>
                          </div>
                          <span id="select_tag_error" class="text-red-600"></span>
                        </div>
        

                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Add Blog
                        </button>

                    </form>

                </div>
            </div>









            <!-- display wiki -->
            <section class="text-gray-400 bg-gray-900 body-font">
                <div class="container px-5 py-24 mx-auto ">
                  <div class="flex flex-wrap -m-4 ">
                    <?php  foreach ($result2 as $row2):
                               ?>
                      <div class="p-4 md:w-1/3 ">
                        <div class="h-full border-2 border-gray-800 rounded-lg overflow-hidden">

                          <div class="p-6">

                            <h1 class="title-font text-lg font-medium text-white mb-3"><?= $row2['title'];  ?></h1>
                            <p class="leading-relaxed mb-3 h-1/4 overflow-hidden"><?= $row2['content'];  ?></p>
                            <div class="flex justify-between items-center flex-wrap ">

                              <a href="#" class="text-indigo-400 inline-flex items-center md:mb-2 lg:mb-0 hover:underline underline-offset-2">read More
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                  <path d="M5 12h14"></path>
                                  <path d="M12 5l7 7-7 7"></path>
                                </svg>
                              </a>

                              <div class="flex space-x-4 ">
                                  <a id="#"
                                      class="text-blue-500 hover:text-blue-600">
                                      <svg xmlns="http://www.w3.org/2000/svg"
                                          class="w-5 h-5 mr-1" fill="none"
                                          viewBox="0 0 24 24"
                                          stroke="currentColor">
                                          <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                      </svg>
                                      <p>Edit</p>
                                  </a>
                                  <a href="index.php?page=home&id=<?= $row2['id']; ?>&table=tags"
                                      class="text-red-500 hover:text-red-600">
                                      <svg xmlns="http://www.w3.org/2000/svg"
                                          class="w-5 h-5 mr-1 ml-3"
                                          fill="none" viewBox="0 0 24 24"
                                          stroke="currentColor">
                                          <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                      </svg>
                                      <p>Delete</p>
                                  </a>
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>
                    <?php endforeach; ?>
                        
                  </div>
                </div>
            </section>


            

       

    <script>
      $(document).ready(function () {
        
        // Open pop-up
        $("#openPopup").click(function () {
            console.log('hel');
              $("#popupContainer").show();
          });
        
          $("#popupContainer").click(function (event) {
          if (event.target === this) {
              $(this).hide();
          }
          });

        });


        $("#blogForm").submit(function (e) { 
          e.preventDefault();

          // validation form ajout wiki

          var form_data_ajout = {
            'title': $("#title").val(),
            'description': $("#description").val(),
            'category': $("#category").val(),
            'select_role': $("#select-role").val()
          }
          console.log("ddd");
          $.ajax({
            type: "POST",
            url: "index.php?page=home",
            data: form_data_ajout,
            dataType: "json",
            success: function (response) {
               console.log("vvvvv");
              $("#title_error").text('');
              $("#description_error").text('');
              $("#select_category_error").text('');
              $("#select_tag_error").text('');

              if (response.title_error) {
                  $("#title_error").text(response.title_error);
              }
              if (response.description_error) {
                  $("#description_error").text(response.description_error);
              }
              if (response.select_category_error) {
                  $("#select_category_error").text(response.select_category_error);
              }
              if (response.select_tag_error) {
                  $("#select_tag_error").text(response.select_tag_error);
              }

            }
          });
        });

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

<script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>
            <script>
              new TomSelect('#select-role', {
                maxItems: 3,
              });
            </script>
