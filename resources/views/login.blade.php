<!doctype html>
<html>

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="/css/output.css" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
</head>

<body>


     <!-- <section class="mx-auto">
    <div class="w-[200px] mx-auto mt-32 h-[300px] bg-white drop-shadow border">

    </div>
  </section> -->
     <form action="/proses_login" method="post">
          @csrf
          <section class="mt-[120px]">
               <div class="w-[364px] bg-white rounded-md shadow-xl mx-auto px-10 py-5">
                    <div class="flex flex-col">
                         <!-- header login -->
                         <div class="flex items-center justify-between max-w-screen-md mx-auto w-20 h-20">
                              <img src="/asset/pipi.png">
                         </div>
                         <span class="mt-2 text-3xl font-inter mx-auto">Login</span>
                         <!-- end -->
                         <!-- input login -->
                         <span class="text-sm mt-5 mb-1"></span>
                         <input type="text" id="username" name="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 place" placeholder="Username" required />
                         <span class="text-sm mt-4 mb-1"></span>
                         <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="Password" required />
                         <!-- button -->
                         <button type="submit" class="mt-7 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                              Login
                         </button>

                         <span class="mt-3 text-center text-sm">Belum punya akun?
                              <a href="/register" class="underline text-sky-500">Register</a></span>
                         <!-- end -->
                    </div>
               </div>
          </section>
     </form>
     <!-- end frm -->


</body>

</html>