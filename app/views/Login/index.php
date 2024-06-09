<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul'];?></title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>
   <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
  <!-- __________________________________-->
  <body class="bg-gradient-to-b from-white to-gray-400">
    <section class="min-h-screen flex items-center justify-center">
      <div
        class="bg-green-300 flex rounded-2xl shadow-lg max-w-2xl shadow-slate-600 p-5"
      >
        <!-- form -->
        <div class="sm:w-1/2 px-16">
          <h2 class="font-extrabold text-xl">Login</h2>
          <p class="text-sm my-4 font-extralight">
            Gunakan akun yang sudah di beri oleh admin
          </p>

          <form action="<?= BASEURL.'/Login/log'?>" method="post" class="flex flex-col gap-4" id="loginForm" >
            <input
              class="p-2 rounded-xl shadow-md focus:outline-none focus:ring-4 focus: ring-teal-600 text-sm"
              type="text"
              class="form-control"
              name="username"
              placeholder="Masukkan username anda" required/>
            <div class="relative">
              <input
                class="p-2 rounded-xl shadow-md focus:outline-none focus:ring-4 focus: ring-teal-600 text-sm w-full"
                type="password"
                class="form-control"
                name="password"
                placeholder="Masukkan Password" required/>
            </div>
            <!-- Input dropdown -->
            <!-- <select
              class="p-2 rounded-xl shadow-md focus:outline-none focus:ring-4 focus: ring-teal-600 text-sm w-full"
              id="loginType">
              <option value="">Masuk Sebagai</option>
              <option value="admin">Admin</option>
              <option value="user">User</option>
            </select> -->
            <!-- End of input dropdown -->
            <button
              type="submit"
              class="form-control"
              class="text-center font-bold text-slate-400 bg-slate-100 py-2 mt-6 rounded-full shadow-inner shadow-slate-700 hover:bg-sky-400 focus:bg-sky-600 hover:text-white hover:shadow-lg hover:shadow-slate-600 gr">
            Login
            </button>
          </form>

          <!-- allert eror -->
          <div id="loginError" class="hidden text-red-500 text-sm mt-2">
            Username atau password salah. Silakan coba lagi.
          </div>
          <!-- ---------------------------- -->

          <div class="mt-10 grid grid-cols-3 items-center text-gray-500">
            <hr class="border-gray-500" />
            <p class="text-center">Atau</p>
            <hr class="border-gray-500" />
          </div>

          <div
            class="mt-7 text-sm underline opacity-50 hover:text-sky-500 hover:font-semibold hover:opacity-100 group:"
          >
            <a href="https://wa.me/qr/VDEVZODYV4FOD1" target="_blank">
              <p class="group-hover:shadow-xl">Lupa kata sandi anda?</p>
            </a>
          </div>
        </div>
        <!-- image -->
        <div class="sm:block hidden w-1/2">
          <img
            src="<?=BASEURL;?>/img/logo.png"
            alt="logo login"
            class="bg-slate-200 rounded-2xl"
          />
        </div>
      </div>
    </section>


  </body>
</html>
