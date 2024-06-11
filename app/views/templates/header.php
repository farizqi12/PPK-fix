<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul'];?></title>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap");

      * {
        font-family: "Poppins", sans-serif;
      }
    </style>
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
   <style type="text/tailwindcss">
    @layer utilities {
      .content-auto {
        content-visibility: auto;
      }
    }
  </style>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>

  
</head>
<body class="w-full">
  <nav class="bg-gray-800 fixed w-full top-0 z-50">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div>
            <img class="w-20 h-20" src="<?=BASEURL;?>/img/logo.png" alt="Your Company">
          </div>
          <div class="ml-1 text-white font-bold text-lg">
            Disapu
          </div>
        </div>
        <div>
          <img class="w-10 h-10" src="<?=BASEURL;?>/img/wiga.png" alt="Right Logo">
        </div>
      </div>
    </div>
  </nav>
</body>

