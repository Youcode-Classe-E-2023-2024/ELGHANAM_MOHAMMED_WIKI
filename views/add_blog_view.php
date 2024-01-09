<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Blog Form</title>
  <!-- Add the Tailwind CSS CDN or include your compiled CSS file here -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <!-- Include jQuery -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

</head>

<body class="bg-gray-100 p-8 ">

  <form id="data_form" action="#" method="post" class="space-y-4">
    <div class="show">
      <div class="show-container mb-8 max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
        <!-- title -->
        <h2 class="text-2xl font-semibold mb-4">Ajoute Blog</h2>

        <!-- Content Title -->
        <div>
          <label for="title" class="block text-sm font-medium text-gray-600">Content Title</label>
          <input type="text" id="title" name="title[]" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <!-- Image Blog -->
        <div>
          <label for="image" class="block text-sm font-medium text-gray-600">Image Blog URL</label>
          <input type="file" id="image" name="image[]" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <!-- Description Blog -->
        <div>
          <label for="description" class="block text-sm font-medium text-gray-600">Description Blog</label>
          <textarea id="description" name="description[]" rows="4"
            class="mt-1 p-2 w-full border rounded-md"></textarea>
        </div>

        <!-- Buttons -->
        <button type="button"
          class="ajoute-btn bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 focus:outline-none focus:ring focus:border-green-300">
          Ajoute Multi Blog
        </button>

      </div>
    </div>
  </form>

  <button type="submit" id="send"
    class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
    Send
  </button>

  <script>
    $(document).ready(function () {

      $(".ajoute-btn").click(function () {
        $(".show").append(`
        
        <div class="show-container mb-8 max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
          <!-- title -->
          <h2 class="text-2xl font-semibold mb-4">Ajoute Blog</h2>

          <!-- Content Title -->
          <div>
            <label for="title" class="block text-sm font-medium text-gray-600">Content Title</label>
            <input type="text" id="title" name="title[]" class="mt-1 p-2 w-full border rounded-md">
          </div>

          <!-- Image Blog -->
          <div>
            <label for="image" class="block text-sm font-medium text-gray-600">Image Blog URL</label>
            <input type="file" id="image" name="image[]" class="mt-1 p-2 w-full border rounded-md">
          </div>

          <!-- Description Blog -->
          <div>
            <label for="description" class="block text-sm font-medium text-gray-600">Description Blog</label>
            <textarea id="description" name="description[]" rows="4"
              class="mt-1 p-2 w-full border rounded-md"></textarea>
          </div>

          <!-- Buttons -->
          <button type="button"
            class="remove-btn bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 focus:outline-none focus:ring focus:border-green-300">
            remove
          </button>

        </div>
    
        `);
      });

      $(document).on('click', '.remove-btn', function () {
        $(this).parent().remove();
      });

      $("#send").click(function (e) { 
        e.preventDefault();
        console.log('helllllo <br>');
      });

      $("#data_form").submit(function (e) {
        e.preventDefault();
        console.log('ok');
        
        // var data_form = $("#data_form").serialize();

        // $.ajax({
        //   type: "post",
        //   url: "index.php?page=add_blog",
        //   data: data_form,

        //   success: function () {
        //     console.log('helllllo');
        //   }
        // });

      });
    });
  </script>

</body>

</html>
