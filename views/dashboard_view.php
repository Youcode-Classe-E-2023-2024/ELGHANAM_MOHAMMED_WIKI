<?php
// if ($_SESSION['role'] != "admin") {
//     header('location: index.php?pagr=home');
// }

?>

<!-- All Page -->
<div class="flex h-screen bg-gray-800 " :class="{ 'overflow-hidden': isSideMenuOpen }">

    <!-- Left menu -->
    <aside class=" flex-shrink-0 hidden w-60 pl-2 overflow-y-auto bg-gray-800 md:block">
        <div>
            <div class="text-white">
                <div class="flex p-2  bg-gray-800">
                    <div class="flex py-3 px-2 items-center">
                        <p class="text-2xl text-green-500 font-semibold">SA</p class="ml-2 font-semibold italic">
                        DASHBOARD</p>
                    </div>
                </div>
                
                <div class="flex  bg-gray-900 my-2 rounded-xl hover:bg-gray-700">

                    <button type="button" id="Popup_Category" class="font-bold text-base w-full text-gray-400 p-2 text-center ">Create Ctegory</button>

                </div>

                <div class="flex  bg-gray-900 my-2 rounded-xl hover:bg-gray-700">

                    <button type="submit" id="popup_tags" class="font-bold text-base w-full text-gray-400 p-2 text-center ">Create Tags</button>

                </div>

            </div>
        </div>
    </aside>

    <div class="flex flex-col flex-1 w-full overflow-y-auto">

        <!-- nav bar -->
        <header class=" w-full h-20 py-4 bg-gray-800 ">
            <div class="flex items-center justify-end h-8 px-6 mx-auto">
                
                
                <!-- log out -->
                <a href="index.php?page=logout"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center gap-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    log out
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </header>

        <!-- pop up category -->
        <div id="popupContainer_category" class="fixed top-0 left-0 w-full h-full bg-gray-800 bg-opacity-50 pt-14 hidden">
            <div  class="container mx-auto mt-8 p-4 bg-gray-200 shadow-lg max-w-md rounded-md">
                <h2 class="text-2xl font-bold mb-4 text-center">Create Category</h2>
                <form id="CreateCategoryForm">
                    <div class="mb-4">
                        <label for="category_name" class="block text-gray-700 text-sm font-bold mb-2">Name Category</label>
                        <input type="text" id="category_name" name="category_name" placeholder="Enter category name"
                            class="w-full px-3 py-2 border rounded-md text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <span id="category_error" class="text-red-600"></span>
                    </div>
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Create Category
                    </button>
                </form>
            </div>
        </div>

        <!-- pop up tags -->
        <div id="popupContainer_tags" class="fixed top-0 left-0 w-full h-full bg-gray-800 bg-opacity-50 pt-14 hidden">
            <div  class="container mx-auto mt-8 p-4 bg-gray-200 shadow-lg max-w-md rounded-md">
                <h2 class="text-2xl font-bold mb-4 text-center">Create tag</h2>
                <form id="CreateTagsForm">
                    <div class="mb-4">
                        <label for="tag_name" class="block text-gray-700 text-sm font-bold mb-2">Name Tag</label>
                        <input type="text" id="tag_name" name="tag_name" placeholder="Enter tag name"
                            class="w-full px-3 py-2 border rounded-md text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <span id="tags_error" class="text-red-600"></span>
                    </div>
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Create Tag
                    </button>
                </form>
            </div>
        </div>

        <!-- pop up edit category -->
        <div id="popupContainer_edit_category" class="fixed top-0 left-0 w-full h-full bg-gray-800 bg-opacity-50 pt-14 hidden">
            <div  class="container mx-auto mt-8 p-4 bg-gray-200 shadow-lg max-w-md rounded-md">
                <h2 class="text-2xl font-bold mb-4 text-center">Edit Category</h2>
                <form id="EditCategoryForm">
                    <div class="mb-4">
                        <label for="edit_name" class="block text-gray-700 text-sm font-bold mb-2">Name Category</label>
                        <input type="text" id="edit_name" name="edit_category_name" placeholder="Enter category name"
                            class="w-full px-3 py-2 border rounded-md text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <span id="edit_category_error" class="text-red-600"></span>
                    </div>
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Edit Category
                    </button>
                </form>
            </div>
        </div>

        <!-- pop up edit tags -->
        <div id="popupContainer_edit_tags" class="fixed top-0 left-0 w-full h-full bg-gray-800 bg-opacity-50 pt-14 hidden">
            <div  class="container mx-auto mt-8 p-4 bg-gray-200 shadow-lg max-w-md rounded-md">
                <h2 class="text-2xl font-bold mb-4 text-center">Edit tag</h2>
                <form id="EditTagsForm">
                    <div class="mb-4">
                        <label for="edittag_name" class="block text-gray-700 text-sm font-bold mb-2">Name Tag</label>
                        <input type="text" id="edit_tag_name" name="edit_tag_name" placeholder="Enter tag name"
                            class="w-full px-3 py-2 border rounded-md text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <span id="edit_tags_error" class="text-red-600"></span>
                    </div>
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Create Tag
                    </button>
                </form>
            </div>
        </div>


        <!-- content -->
        <main class="">
            <div class="grid mb-4 pb-10 px-8 mx-4 rounded-3xl bg-gray-100 border-4 border-green-500">

                <div class="grid grid-cols-12 gap-6">
                    <div class="grid grid-cols-12 col-span-12 gap-6 xxl:col-span-9">

                        <!-- metrise -->
                        <div class="col-span-12 mt-8 -z-50 ">
                            <div class="flex items-center h-10 intro-y">
                                <h2 class="mr-5 text-lg font-medium truncate">Dashboard</h2>
                            </div>
                            <div class="grid grid-cols-12 gap-6 mt-5 ">
                                <a class="  shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
                                    href="#">
                                    <div class="p-5 ">
                                        <div class="flex justify-between">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-blue-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                            </svg>
                                            <div
                                                class="bg-green-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                                                <span class="flex items-center">30%</span>
                                            </div>
                                        </div>
                                        <div class="ml-2 w-full flex-1">
                                            <div>
                                                <div class="mt-3 text-3xl font-bold leading-8"><?php echo $result5 ?></div>

                                                <div class="mt-1 text-base text-gray-600">Item Sales</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a class="   shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
                                    href="#">
                                    <div class="p-5">
                                        <div class="flex justify-between">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-pink-600"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                                            </svg>
                                            <div
                                                class="bg-yellow-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                                                <span class="flex items-center">30%</span>
                                            </div>
                                        </div>
                                        <div class="ml-2 w-full flex-1">
                                            <div>
                                                <div class="mt-3 text-3xl font-bold leading-8"><?php echo $result6 ?></div>

                                                <div class="mt-1 text-base text-gray-600">Item Sales</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class=" shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
                                    href="#">
                                    <div class="p-5">
                                        <div class="flex justify-between">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-green-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                                            </svg>
                                            <div
                                                class="bg-blue-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                                                <span class="flex items-center">30%</span>
                                            </div>
                                        </div>
                                        <div class="ml-2 w-full flex-1">
                                            <div>
                                                <div class="mt-3 text-3xl font-bold leading-8"><?php echo $result7 ?></div>

                                                <div class="mt-1 text-base text-gray-600">Item Sales</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                
                            </div>
                        </div>

                        <!-- table category -->
                        <div class="col-span-12 mt-5">
                            <div class="grid gap-2 grid-cols-1 lg:grid-cols-1">
                                <div class="bg-white p-4 shadow-lg rounded-lg">
                                    <h1 class="font-bold text-base">Table category</h1>
                                    <div class="mt-4">
                                        <div class="flex flex-col">
                                            <div class="-my-2 overflow-x-auto">
                                                <div class="py-2 align-middle inline-block min-w-full">
                                                    <div
                                                        class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white">
                                                        <table class="min-w-full divide-y divide-gray-200">
                                                            <thead>
                                                                <tr>
                                                                    <th
                                                                        class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                        <div class="flex cursor-pointer">
                                                                            <span class="mr-2">Category ID</span>
                                                                        </div>
                                                                    </th>
                                                                    <th
                                                                        class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                        <div class="flex cursor-pointer">
                                                                            <span class="mr-2">Name</span>
                                                                        </div>
                                                                    </th>
                                                                    <th
                                                                        class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                        <div class="flex cursor-pointer">
                                                                            <span class="mr-2">Create At</span>
                                                                        </div>
                                                                    </th>
                                                                    <th
                                                                        class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                        <div class="flex cursor-pointer">
                                                                            <span class="mr-2">Edit At</span>
                                                                        </div>
                                                                    </th>
                                                                    <th
                                                                        class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                        <div class="flex cursor-pointer">
                                                                            <span class="mr-2">ACTION</span>
                                                                        </div>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="bg-white divide-y divide-gray-200">
                                                                <?php foreach ($result1 as $row) { ?>
                                                                    <tr>
                                                                        <td
                                                                            class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                            <p><?php echo $row['id']; ?></p>
                                                                            
                                                                        </td>
                                                                        <td
                                                                            class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                            <p><?php echo $row['name']; ?></p>
                                                                        </td>
                                                                        <td
                                                                            class="px-6 py-4 whitespace-no-wrap text-sm leading-5">                                                                                                                                                           
                                                                                <p><?php echo $row['create_at']; ?></p>                                                                            
                                                                        </td>
                                                                        <td
                                                                            class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                            <p>
                                                                                <?php if (empty($row['edit_at'])) {
                                                                                    echo "NULL";
                                                                                }else {
                                                                                   echo $row['edit_at'];
                                                                                }  ?>
                                                                            </p>
                                                                        </td>
                                                                        <td
                                                                            class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                            <div class="flex space-x-4">
                                                                                
                                                                                <a id="popup_edit_category"
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
                                                                                <a href="index.php?page=dashboard&id=<?= $row['id']; ?>&table=categories"
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
                                                                        </td>
                                                                    </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- table tags -->
                        <div class="col-span-12 mt-5">
                            <div class="grid gap-2 grid-cols-1 lg:grid-cols-1">
                                <div class="bg-white p-4 shadow-lg rounded-lg">
                                    <h1 class="font-bold text-base">Table tags</h1>
                                    <div class="mt-4">
                                        <div class="flex flex-col">
                                            <div class="-my-2 overflow-x-auto">
                                                <div class="py-2 align-middle inline-block min-w-full">
                                                    <div
                                                        class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white">
                                                        <table class="min-w-full divide-y divide-gray-200">
                                                            <thead>
                                                                <tr>
                                                                    <th
                                                                        class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                        <div class="flex cursor-pointer">
                                                                            <span class="mr-2">Tag ID</span>
                                                                        </div>
                                                                    </th>
                                                                    <th
                                                                        class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                        <div class="flex cursor-pointer">
                                                                            <span class="mr-2">Name</span>
                                                                        </div>
                                                                    </th>
                                                                    <th
                                                                        class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                        <div class="flex cursor-pointer">
                                                                            <span class="mr-2">ACTION</span>
                                                                        </div>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="display_tag" class="bg-white divide-y divide-gray-200">
                                                                <?php foreach ($result2 as $row) { ?>
                                                                    <tr>
                                                                        <td
                                                                            class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                            <p><?php echo $row['id']; ?></p>
                                                                            
                                                                        </td>
                                                                        <td
                                                                            class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                            <p><?php echo $row['name']; ?></p>
                                                                        </td>
                                                                        <td
                                                                            class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                            <div class="flex space-x-4">
                                                                                <a id="popup_edit_tags"
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
                                                                                <a href="index.php?page=dashboard&id=<?= $row['id']; ?>&table=tags"
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
                                                                        </td>
                                                                    </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- table users -->
                        <div class="col-span-12 mt-5">
                            <div class="grid gap-2 grid-cols-1 lg:grid-cols-1">
                                <div class="bg-white p-4 shadow-lg rounded-lg">
                                    <h1 class="font-bold text-base">Table users</h1>
                                    <div class="mt-4">
                                        <div class="flex flex-col">
                                            <div class="-my-2 overflow-x-auto">
                                                <div class="py-2 align-middle inline-block min-w-full">
                                                    <div
                                                        class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white">
                                                        <table class="min-w-full divide-y divide-gray-200">
                                                            <thead>
                                                                <tr>
                                                                    <th
                                                                        class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                        <div class="flex cursor-pointer">
                                                                            <span class="mr-2">Name</span>
                                                                        </div>
                                                                    </th>
                                                                    <th
                                                                        class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                        <div class="flex cursor-pointer">
                                                                            <span class="mr-2">Email</span>
                                                                        </div>
                                                                    </th>
                                                                    <th
                                                                        class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                        <div class="flex cursor-pointer">
                                                                            <span class="mr-2">Role</span>
                                                                        </div>
                                                                    </th>
                                                                    <th
                                                                        class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                        <div class="flex cursor-pointer">
                                                                            <span class="mr-2">ACTION</span>
                                                                        </div>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="bg-white divide-y divide-gray-200">
                                                                <?php foreach ($result3 as $row) { ?>
                                                                    <tr>
                                                                        <td
                                                                            class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                            <p><?php echo $row['first_name']; ?></p>
                                                                            
                                                                        </td>
                                                                        <td
                                                                            class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                            <p><?php echo $row['email']; ?></p>
                                                                        </td>
                                                                        <td
                                                                            class="px-6 py-4 whitespace-no-wrap text-sm leading-5">                                                                   
                                                                            <p><?php echo $row['role']; ?></p>                                                                           
                                                                        </td>
                                                                        <td
                                                                            class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                            <div class="flex space-x-4">
                                                                                <a href="index.php?page=dashboard&id=<?= $row['id']; ?>&table=users"
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
                                                                        </td>
                                                                    </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- table wiki -->
                        <div class="col-span-12 mt-5">
                            <div class="grid gap-2 grid-cols-1 lg:grid-cols-1">
                                <div class="bg-white p-4 shadow-lg rounded-lg">
                                    <h1 class="font-bold text-base">Table wiki</h1>
                                    <div class="mt-4">
                                        <div class="flex flex-col">
                                            <div class="-my-2 overflow-x-auto">
                                                <div class="py-2 align-middle inline-block min-w-full">
                                                    <div
                                                        class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white">
                                                        <table class="min-w-full divide-y divide-gray-200">
                                                            <thead>
                                                                <tr>
                                                                    <th
                                                                        class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                        <div class="flex cursor-pointer">
                                                                            <span class="mr-2">Title</span>
                                                                        </div>
                                                                    </th>
                                                                    <th
                                                                        class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                        <div class="flex cursor-pointer">
                                                                            <span class="mr-2">Content</span>
                                                                        </div>
                                                                    </th>
                                                                    <th
                                                                        class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                        <div class="flex cursor-pointer">
                                                                            <span class="mr-2">Create At</span>
                                                                        </div>
                                                                    </th>
                                                                    <th
                                                                        class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                        <div class="flex cursor-pointer">
                                                                            <span class="mr-2">Edit At</span>
                                                                        </div>
                                                                    </th>
                                                                    <th
                                                                        class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                        <div class="flex cursor-pointer">
                                                                            <span class="mr-2">ACTION</span>
                                                                        </div>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="bg-white divide-y divide-gray-200">
                                                                <?php foreach ($result4 as $row) { ?>
                                                                    <tr>
                                                                        <td
                                                                            class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                            <p><?php echo $row['title']; ?></p>                                                                        
                                                                        </td>
                                                                        <td
                                                                            class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                            <p><?php echo $row['content']; ?></p>
                                                                        </td>
                                                                        <td
                                                                            class="px-6 py-4 whitespace-no-wrap text-sm leading-5">                                                                          
                                                                                <p><?php echo $row['create_at']; ?></p>
                                                                        </td>
                                                                        <td
                                                                            class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                            <p><?php echo $row['edit_at']; ?></p>
                                                                        </td>
                                                                        <td
                                                                            class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                            <div class="flex space-x-4">
                                                                                <a href="index.php?page=dashboard&id=<?= $row['id']; ?>&table=articles"
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
                                                                        </td>
                                                                    </tr>
                                                                <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>

           
        </main>
    </div>
</div>


<script>

    // setInterval(function() {
    //         $(document).ready(function(){
            
    //             $.ajax({
    //                 "type":"GET",
    //                 "url":"index.php?page=dashboard",
    //                 success:function(data){
    //                     $("#display_tag").html(data);
    //                 }
    //             });
            
    //     });
    // },1);

    
    $(document).ready(function () {
        
        // Open pop-up category
        $("#Popup_Category").click(function () {
              $("#popupContainer_category").show();
          });
        
          $("#popupContainer_category").click(function (event) {
          if (event.target === this) {
              $(this).hide();
          }
        });


        // Open pop-up tags
        $("#popup_tags").click(function () {
            $("#popupContainer_tags").show();
        });
        $("#popupContainer_tags").click(function (event) {
            if (event.target === this) {
              $(this).hide();
            }
        });

        // Open pop-up edit category
        $("#popup_edit_category").click(function () {
            $("#popupContainer_edit_category").show();
        });
        $("#popupContainer_edit_category").click(function (event) {
            if (event.target === this) {
              $(this).hide();
            }
        });

        //  Open pop-up edit tag
        $("#popup_edit_tags").click(function () {
            $("#popupContainer_edit_tags").show();
        });
        $("#popupContainer_edit_tags").click(function (event) {
            if (event.target === this) {
              $(this).hide();
            }
        });

    

    // validation form create category
    $("#CreateCategoryForm").submit(function (e) { 
        e.preventDefault();
        var data_category = {
          'category_name': $("#category_name").val(),
        }
        
        $.ajax({
          type: "POST",
          url: "index.php?page=dashboard",
          data: data_category,
          dataType: "json",
          success: function (response) {
            $("#category_error").text('');
            if (response.category_error) {
                $("#category_error").text(response.category_error);
            }
            if (response.true === "true") {
                $("#category_name").val('');
            }
            
           
          }
        });
    });




    // validation form create tag
    $("#CreateTagsForm").submit(function (e) { 
      e.preventDefault();
      var data_tag = {
        'tag_name': $("#tag_name").val(),
      }
      
      $.ajax({
        type: "POST",
        url: "index.php?page=dashboard",
        data: data_tag,
        dataType: "json",
        success: function (response) {  
              
            $("#tags_error").text('');    
            if (response.tags_error) {
              $("#tags_error").text(response.tags_error);
            }  

            if (response.true === "true") {
                $("#tag_name").val('');
            } 

        }
      });
    });

    // validation form edit category
    $("#EditCategoryForm").submit(function (e) { 
        e.preventDefault();
        var data_edit_category = {
          'category_name': $("#edit_category_name").val(),
        }
        
        $.ajax({
          type: "POST",
          url: "index.php?page=dashboard",
          data: data_edit_category,
          dataType: "json",
          success: function (response) {
            $("#edit_category_error").text('');
            if (response.category_error) {
                $("#edit_category_error").text(response.category_error);
            }
            if (response.true === "true") {
                $("#category_name").val('');
            }
            
           
          }
        });
    });
});

</script>