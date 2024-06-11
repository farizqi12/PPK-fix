<div
    class="flex flex-col bg-gray-300 justify-center items-center min-h-screen overflow-x-hidden"
  >
     <!-- Profile Content -->
    <div class="flex-grow mt-20 p-4 w-full max-w-md">
      <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <div class="p-6">
          <h2 class="text-2xl font-bold mb-4">Profile Pengguna</h2>
          <div class="mb-4">
            <p class="text-lg">
              Nama: <span id="user-name" class="font-semibold">John Doe</span>
            </p>
            <p class="text-lg">
              Alamat:
              <span id="user-address" class="font-semibold"
                >Jl. Kebon Jeruk No. 27, Jakarta</span
              >
            </p>
            <p>Level : <span id="level" name="level" class="font-bold">User</span></p>
            <p class="text-lg">
              Poin Anda: <span id="user-points" class="font-semibold">5</span>
            </p>
          </div>
          <a
            href="<?= BASEURL;?>/Login/index"
            class="block w-full bg-red-500 text-white text-center py-2 rounded-md hover:bg-red-600"
            >Log Out</a
          >
        </div>
      </div>
    </div>
</div>
