<!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
<div class="bg-white">
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <h2 class="text-2xl font-bold tracking-tight text-gray-900">Info Harga jual sampah</h2>

    <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">

    <?php foreach($data['sampah'] as $smph) :
      if(empty($smph['nama_file']) || $smph['nama_file']==''){
        $gambar = "default.jpeg";
      }else{
        $gambar = $smph['nama_file'];
      }
      ?>
      <div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="<?=BASEURL;?>/img/sampah/<?=$gambar;?>" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="#">
                <span aria-hidden="true" class="absolute inset-0"></span>
                <?=$smph['kategori'];?>
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500"><?=$smph['nama_klasifikasi'];?></p>
          </div>
          <p class="text-sm font-medium text-gray-900"><?=$smph['poin'];?></p>
        </div>
      </div>
    <?php endforeach;?>

      <!-- More products... -->
    </div>
  </div>
</div>
