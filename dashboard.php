
<?php
session_start();
if (!isset($_SESSION['Username'])) {
    header("Location: index.php");
    exit();
}
include './src/fetchgallery.php';
$items_per_page = 8;
$total_items = $totalRecords;
$total_pages = ceil($total_items / $items_per_page);
$current_page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$offset = ($current_page - 1) * $items_per_page;
$paginated_galleries = array_slice($galleries, $offset, $items_per_page);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./assets/logo/favicon.png">
    <meta name="robots" content="noindex,nofollow,noarchive" />
    <title>Shreyus Indian Supermarket - Admin Dashboard</title>
    <link rel="stylesheet" href="./output.css">
    <link rel="stylesheet" href="./assets/vendor/@flaticon/flaticon-uicons/css/all/all.css">
</head>
<body class="scroll-smooth !overflow-x-hidden bg-slate-50">
  <?php include 'adminheader.php'; ?>
    <main>
     <section class="bg-slate-50 py-10">
       <div class="max-w-[110rem] w-full mx-auto px-4 lg:px-6">
       <div class=" grid grid-cols-1 mb-14">
           <div class="flex justify-between"> 
              <h1 class="text-2xl font-bold">All Gallery</h1>
             <button type="button" class="py-2 px-6 bg-blue-950 text-white rounded-xl" onclick="openModal()" >Add</button>
           </div>
        <div>
       
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mt-5">
           
 
            <?php foreach($galleries as $gallery): ?>

            <div class="border bg-white p-5 rounded-xl">
                <div class="flex justify-end mb-2">
                    <button onclick="deletegallery(<?php echo $gallery['id']; ?>)"><i class="fi fi-sr-trash text-red-500"></i></button>
                </div>
                <div class="flex items-center justify-center mb-3">
                  <img loading="lazy" class="h-[250px] w-fit object-cover rounded-xl" src="./src/<?php echo $gallery['image']; ?>" />
                </div>
                <div class="text-center">
                   <h1 class="font-semibold text-xl"><?php echo $gallery['name']?></h1>
                </div>
             </div>
            <?php endforeach; ?>
            <?php include 'pagination.php'; ?>
    
        </div>
        
       </div>
     </section>
     <div id="authentication-modal"  class="hidden flex overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
     <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h3 class="text-xl font-semibold text-gray-900">
                    Create new gallery post
                </h3>
                <button onclick="closeModal()" type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="authentication-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <form class="space-y-4" action="./src/gallery_upload.php"  method="post" enctype="multipart/form-data">
                    <div>
                        <label for="Tattoopic" class="block mb-2 text-sm font-medium text-gray-900 ">Image</label>
                        <input type="file"  name="image" id="Tattoopic" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg outline-none block w-full p-2.5" required>
                    </div>
                    <div>
                        <label for="Tattooname" class="block mb-2 text-sm font-medium text-gray-900 ">Name</label>
                        <input type="text" name="name" id="Tattooname"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg outline-none block w-full p-2.5" required>
                    </div>
                 
                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Save</button>
                  
                </form>
            </div>
        </div>
    </div>
</div> 
    </main>

</body>
    <script src="./assets/js/menu.js"></script>
    <script src="./assets/js/modal.js"></script>
    <script src="./assets/js/delete.js"></script>
</html>