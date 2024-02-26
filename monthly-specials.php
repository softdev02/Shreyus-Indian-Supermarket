
<?php
include './src/fetch-monthly-specials.php';
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
    <title>Shreyus Indian Supermarket - Monthly Specials</title>
    <meta name="keywords" content="Shreyus Indian Supermarket,Malayali grocery Store, Fiji grocery store, Telegu Grocery Store, Tamil Grocery Store, Kerala Grocery Store,Indian grocery store,Indian store,Vegeterian geocery store,Indian super market,Indian market store, Indian grocery store folsom, Indian grocery store east bidwell,Kerala grocery store,North indian grocery store.">
    <meta name="description" content="Discover the Essence of India at Shreyas Indian Grocery Store in Falcon, US! Indulge in the rich flavors of India with our extensive collection of spices, lentils, teas, snacks, and more. From premium Basmati rice to aromatic masalas, we offer authentic ingredients to elevate your culinary experience. Experience, convenience, quality, and affordability all under one roof. Shop now and bring home the taste of India with Shreyas!">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1">
    <meta property="og:type" content="website">
    <meta property="og:image" content="./assets/logo/og_image.jpeg">
    <meta property="og:title" content="Shreyus Indian Supermarket - Monthly Specials">
    <meta property="og:description" content="Discover the Essence of India at Shreyas Indian Grocery Store in Falcon, US! Indulge in the rich flavors of India with our extensive collection of spices, lentils, teas, snacks, and more. From premium Basmati rice to aromatic masalas, we offer authentic ingredients to elevate your culinary experience. Experience, convenience, quality, and affordability all under one roof. Shop now and bring home the taste of India with Shreyas!">
    <meta property="og:url" content="https://www.shreyus.com/seasonal-deals">
    <meta property="og:site" content="Shreyus Indian Supermarket">
    <meta property="og:site_name" content="Shreyus Indian Supermarket">
    <link rel="stylesheet" href="./output.css">
    <link rel="stylesheet" href="./assets/vendor/@flaticon/flaticon-uicons/css/all/all.css">
</head>
<body class="scroll-smooth !overflow-x-hidden bg-slate-50">
  <?php include 'header.php'; ?>
    <main>
    <section class="hero-gallery py-40 relative bg-center bg-cover 2xl:-top-18 overflow-hidden " style="background-image: url('./assets/images/DJI_0005 2.JPG');">
        <div class="max-w-full w-full mx-auto">
        <div class="absolute top-0 left-0 w-full h-full bg-opacity-40 bg-black flex justify-center items-center">
                  <div class="max-w-[110rem] w-full mx-auto px-4 lg:px-6">
                    <div class="flex justify-center items-center ">
                     
                    </div>
                 
                  </div>
                </div>
        </div>
    </section>
     <section class="bg-slate-50 py-10">
       <div class="max-w-[110rem] w-full mx-auto px-4 lg:px-6">
       <div class=" grid grid-cols-1 mb-14">
           <div class="flex justify-between"> 
              <h1 class="text-2xl font-bold">Monthly Specials</h1>
           </div>
        <div>
       
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mt-5">
           
 
            <?php foreach($galleries as $gallery): ?>

                <div class="border bg-white p-2 rounded-xl">
              
              <div class="flex items-center justify-center">
                <img loading="lazy" class="h-full w-full object-cover rounded-xl border" src="./src/<?php echo $gallery['image']; ?>" />
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
                        <label for="Tattoopic" class="block mb-2 text-sm font-medium text-gray-900 ">Tattoo Image</label>
                        <input type="file"  name="image" id="Tattoopic" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg outline-none block w-full p-2.5" required>
                    </div>
                    <div>
                        <label for="Tattooname" class="block mb-2 text-sm font-medium text-gray-900 ">Tattoo Name</label>
                        <input type="text" name="name" id="Tattooname"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg outline-none block w-full p-2.5" required>
                    </div>
                 
                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Save</button>
                  
                </form>
            </div>
        </div>
    </div>
</div> 
    </main>
    <?php include 'footer.php'; ?>
</body>
    <script src="./assets/js/menu.js"></script>
    <script src="./assets/js/modal.js"></script>
</html>