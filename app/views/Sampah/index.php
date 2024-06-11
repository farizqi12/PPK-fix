<div class="bg-white py-20">
    <div class="mx-auto max-w-2xl px-4 py-8 sm:py-16 sm:px-6 lg:max-w-7xl lg:px-8 lg:py-24">
        <h2 class="text-xl font-bold tracking-tight text-gray-900 sm:text-2xl">Info Harga Jual Sampah</h2>
        
        <div class="mt-6 grid grid-cols-2 gap-x-2 gap-y-4 sm:grid-cols-3 sm:gap-x-4 sm:gap-y-6 lg:grid-cols-4 lg:gap-x-6 lg:gap-y-10">
            <?php foreach($data['sampah'] as $smph) :
                $gambar = empty($smph['nama_file']) ? "default.jpeg" : $smph['nama_file'];
            ?>
            <div class="group relative">
                <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 h-40 sm:h-48">
                    <img src="<?=BASEURL;?>/img/sampah/<?=$gambar;?>" alt="Sampah" class="h-full w-full object-cover object-center">
                </div>
                <div class="mt-4 flex justify-between">
                    <div>
                        <h3 class="text-sm font-semibold text-gray-900">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                <?=$smph['kategori'];?>
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500"><?=$smph['nama_klasifikasi'];?></p>
                    </div>
                    <p class="text-lg font-bold text-gray-900"><?=$smph['poin'];?> poin</p>
                </div>
            </div>
            <?php endforeach; ?>
            <!-- More products... -->
        </div>
    </div>
</div>