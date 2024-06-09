<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
      * {
        font-family: "Poppins", sans-seri;
      }
    </style>
  </head>
  <body
    class="flex flex-col bg-slate-300 justify-center items-center overflow-x-hidden"
  > -->
   

    <!-- ---------------------------- -->
    <div
      class="mt-20 bg-gradient-to-tr from-green-800 to-green-500 rounded-md flex shadow-xl text-white"    >
      <div class="p-2">
        <svg
          class=""
          xmlns="http://www.w3.org/2000/svg"
          width="60"
          height="60"
          fill="currentColor"
          class="bi bi-person-circle"
          viewBox="0 0 16 16"
        >
          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
          <path
            fill-rule="evenodd"
            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"
          />
        </svg>
      </div>

      <div>
        <div class="font-medium p-2">
          <p id="nama">Muhamad Farizqi Saifuullah</p>
          <div class="flex font-extrabold">
            <p>Poin :</p>
            <p id="poin" class="ml-2">7</p>
          </div>
          <div class="flex">
            <p>Kelas :</p>
            <p id="kelas" class="ml-1">Bronze</p>
          </div>
        </div>
      </div>
    </div>

    <div class="w-3/4 h-auto my-6">
      <img
        src="img/Mockup banner.png"
        alt=""
        class="rounded-3xl shadow-inner hover:shadow-2xl"
      />
    </div>
    <div
      class="bg-slate-200 shadow-2xl my-6 w-screen rounded-3xl mx-auto max-w-screen-lg"
    >
      <div class="grid grid-cols-2 gap-6 p-6">
        <!-- item -->
        <a href="tukar_poin.html">
          <div
            class="bg-gradient-to-tr from-green-500 to-green-600 rounded-xl flex text-white shadow-inner hover:shadow-2xl ring-1 hover:ring-4"
          >
            <div class="p-2">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="50"
                height="60"
                fill="currentColor"
                class="bi bi-gift"
                viewBox="0 0 16 16"
              >
                <path
                  d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A3 3 0 0 1 3 2.506zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43zM9 3h2.932l.023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0zM1 4v2h6V4zm8 0v2h6V4zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5z"
                />
              </svg>
            </div>
            <div class="flex flex-col justify-center">
              <p class="p-1 font-semibold text-base">Tukar Poin</p>
            </div>
          </div>
        </a>

        <a href="https://maps.app.goo.gl/Eq8XLavWmSYZTvci7" target="_blank">
          <div
            class="bg-gradient-to-tr from-red-800 to-red-400 rounded-xl flex text-white shadow-inner hover:shadow-2xl ring-1 hover:ring-4"
          >
            <div class="p-2">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="50"
                height="60"
                fill="currentColor"
                class="bi bi-geo-alt"
                viewBox="0 0 16 16"
              >
                <path
                  d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"
                />
                <path
                  d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"
                />
              </svg>
            </div>
            <div class="flex flex-col justify-center">
              <p class="p-1 font-semibold text-base">Lokasi Kami</p>
            </div>
          </div>
        </a>
        <a href="">
          <div
            class="bg-gradient-to-tr from-blue-500 to-sky-500 -red-500 rounded-xl flex shadow-inner text-white hover:shadow-2xl ring-1 hover:ring-4"
          >
            <div class="p-2">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="50"
                height="60"
                fill="currentColor"
                class="bi bi-book-half"
                viewBox="0 0 16 16"
              >
                <path
                  d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"
                />
              </svg>
            </div>
            <div class="flex flex-col justify-center">
              <p class="p-1 font-semibold text-base">Edukasi Sampah</p>
            </div>
          </div>
        </a>

         <a href="<?= BASEURL;?>/sampah/index  ">
          <div
            class="bg-gradient-to-tr from-orange-600 to to-yellow-600 rounded-xl flex shadow-inner text-white hover:shadow-2xl ring-1 hover:ring-4"
          >
            <div class="p-2">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="50"
                height="60"
                fill="currentColor"
                class="bi bi-coin"
                viewBox="0 0 16 16"
              >
                <path
                  d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518z"
                />
                <path
                  d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"
                />
                <path
                  d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11m0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12"
                />
              </svg>
            </div>
            <div class="flex flex-col justify-center">
              <p class="p-1 font-semibold text-base">Harga Sampah</p>
            </div>
          </div>
        </a>
      </div>
    </div>

    <!-- tombol Navbar -->
   
    <!-- -------------------------------------- -->
  <!-- </body>
</html> -->
