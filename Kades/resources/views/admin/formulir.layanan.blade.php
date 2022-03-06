<x-admin-layout>
   <h1 class="w-full text-6xl text-black pb-6">Formulir Data Posyandu</h1>


   <div class="flex flex-wrap">
      <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
         <p class="text-xl pb-6 flex items-center">
            <i class="fas fa-list mr-3"></i> Data Layanan Anak
         </p>
         <div class="leading-loose">
            <form class="p-10 bg-white rounded shadow-xl" action="/insertdata" method="POST" enctype="multipart/form-data">
               @csrf
               <div class="content">
                  <label class="block text-sm text-gray-600" for="name">Nama</label>
                  <input class="w-full text-gray-700 bg-gray-200 rounded" id="name" name="nama" type="text" required="" placeholder="Masukkan Nama Anak" aria-label="Name">
               </div>
               <div class="mt-2">
                  <ul>
                     <legend class="text-gray-600">Jenis Kelamin</legend>
                     <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="laki-laki">
                     <label class="text-gray-700" for="laki-laki">Laki-laki</label><br>
                     <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="perempuan">
                     <label class="text-gray-700" for="perempuan">Perempuan</label><br>
                  </ul>
               </div>
               <div class="mt-2">
                  <label class="block text-sm text-gray-600" for="email">Tanggal Lahir</label>
                  <input class="w-full text-gray-700 bg-gray-200 rounded" id="tanggal_lahir" name="tanggal_lahir" type="date" required="" placeholder="Masukkan Tanggal Lahir" aria-label="">
               </div>
               <div class="mt-2">
                  <label class="block text-sm text-gray-600" for="email">Anak Ke</label>
                  <input class="w-full text-gray-700 bg-gray-200 rounded" id="anakKe" name="anakKe" type="number" required="" placeholder="Masukkan Anak Ke Berapa" aria-label="Email">
               </div>
               <div class="mt-6">
                  <button class="px-4 py-1 text-white font-light tracking-wider bg-red-700 rounded" type="submit">Simpan Data</button>
               </div>
            </form>
         </div>
      </div>

      <div class="w-full lg:w-1/2 mt-6 pl-0 lg:pl-2">
         <p class="text-xl pb-6 flex items-center">
            <i class="fas fa-list mr-3"></i> Data Layanan Bumil
         </p>
         <form class="p-10 bg-white rounded shadow-xl" action="/insertdataBumil" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="content">
               <label class="block text-sm text-gray-600" for="name">Nama</label>
               <input class="w-full text-gray-700 bg-gray-200 rounded" id="nama" name="nama" type="text" required="" placeholder="Masukkan Nama Ibu" aria-label="Name">
            </div>
            <div class="mt-2">
               <label class="block text-sm text-gray-600" for="email">Tanggal Lahir</label>
               <input class="w-full text-gray-700 bg-gray-200 rounded" id="email" name="tanggal_lahir" type="date" required="" placeholder="Masukkan Tanggal Lahir" aria-label="Email">
            </div>
            <div class="mt-2">
               <label class="block text-sm text-gray-600" for="cus_email">No Telephone</label>
               <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="cus_email" name="no_telephone" type="number" required="" placeholder="Masukkan No Telephone" aria-label="Email">
            </div>

            <div class="mt-2">
               <label class=" block text-sm text-gray-600" for="cus_email">Alamat</label>
               <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="alamat" type="text" required="" placeholder="Masukkan Alamat" aria-label="Email">
            </div>

            <div class="mt-6">
               <button class="px-4 py-1 text-white font-light tracking-wider bg-red-700 rounded" type="submit">Simpan Data</button>
            </div>
         </form>
      </div>
</x-admin-layout>