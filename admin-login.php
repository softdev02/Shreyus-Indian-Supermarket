
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow,noarchive" />
    <title>Admin Login - Shreyus Indian Supermarket</title>
    <link rel="stylesheet" href="./output.css">
    <link rel="stylesheet" href="./assets/vendor/@flaticon/flaticon-uicons/css/all/all.css">
</head>
<body class="scroll-smooth !overflow-x-hidden">
   <?php include 'header.php'; ?>
    <main>
    <section class="bg-slate-50">
    <div class="max-w-[25rem] w-full mx-auto px-4 lg:px-6">
        <div class="h-dvh flex items-center justify-center">
            <div class="shadow rounded-xl p-5 py-10 bg-white grow border">
            <form action="./src/login_process.php" method="post">
               <div class="mb-5 text-center">
                <h1 class="font-bold text-2xl">Admin Login</h1>
                <?php if (isset($_GET['error'])&&base64_decode($_GET['error'])=='invalid username or passowrd') { ?>

                   <p class="error text-red-500 mt-2">Invalid username or password</p>

                  <?php } ?>
              </div>
              <div class="mb-3">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Username</label>
                <input type="text" name="Username" id="email" class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="Enter your username"  required>
               
              </div>
              <div class="mb-3">
                <label for="Password" class="block mb-2 text-sm font-medium text-gray-900 ">Password</label>
                <input type="password" name="Password" id="Password" class="bg-gray-50 outline-none border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="Enter your password"   required>
               
              </div>
            
              <div class="text-center">
                <button class="py-2 px-4 bg-primary rounded-xl text-white w-full" type="submit">Sign in</button>
              </div>
           </form>
           </div>
        </div>
    </div>
   </section>

    </main>
    <?php include 'footer.php'; ?> 
</body>
<script src="./assets/js/menu.js"></script>

</html>