<x-admin-layout>
    <h1 class="w-full text-6xl text-black pb-6">Hasil Alam Cempaga Garden</h1>


    <div class="flex flex-wrap">
        <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
            <p class="text-xl pb-6 flex items-center">
                <i class="fas fa-list mr-3"></i> Data Pembelian
            </p>
            <div class="leading-loose">
                <form class="p-10 bg-white rounded shadow-xl" action="/insertdata" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="content">
                        <label class="block text-sm text-gray-600" for="name">Nama</label>
                        <input class="w-full text-gray-700 bg-gray-200 rounded" id="name" name="nama" type="text" required="" placeholder="Masukkan Nama Pembeli" aria-label="Name">
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
                        <label class="block text-sm text-gray-600" for="email">Tanggal Pembeli</label>
                        <input class="w-full text-gray-700 bg-gray-200 rounded" id="tanggal_lahir" name="tanggal_lahir" type="date" required="" placeholder="Masukkan Tanggal Pembeli" aria-label="">
                    </div>
                    <div class="mt-2">
                        <label class="block text-sm text-gray-600" for="email">Stok</label>
                        <input class="w-full text-gray-700 bg-gray-200 rounded" id="anakKe" name="anakKe" type="number" required="" placeholder="Masukkan Stok" aria-label="Email">
                    </div>
                    <div class="mt-6">
                        <button class="px-4 py-1 text-white font-light tracking-wider bg-red-700 rounded" type="submit">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="w-full lg:w-1/2 mt-6 pl-0 lg:pl-2">
            <p class="text-xl pb-6 flex items-center">
                <i class="fas fa-list mr-3"></i> Data Penjualan
            </p>
            <form class="p-10 bg-white rounded shadow-xl" action="/insertdataBumil" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="content">
                    <label class="block text-sm text-gray-600" for="name">ID</label>
                    <input class="w-full text-gray-700 bg-gray-200 rounded" id="nama" name="nama" type="text" required="" placeholder="Masukkan ID" aria-label="Name">
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="email">Tanggal Penjualan</label>
                    <input class="w-full text-gray-700 bg-gray-200 rounded" id="email" name="tanggal_lahir" type="date" required="" placeholder="Masukkan Tanggal Penjualan" aria-label="Email">
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="cus_email">No Telephone</label>
                    <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="cus_email" name="no_telephone" type="number" required="" placeholder="Masukkan No Telephone" aria-label="Email">
                </div>

                <div class="mt-2">
                    <label class=" block text-sm text-gray-600" for="cus_email">Kategori</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="alamat" type="text" required="" placeholder="Masukkan Kategori" aria-label="Email">
                </div>

                <div class="mt-6">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-red-700 rounded" type="submit">Simpan Data</button>
                </div>
            </form>
        </div>
        <div class="w-full lg:w-1/2 mt-6 pl-0 lg:pl-2">
            <p class="text-xl pb-6 flex items-center">
                <i class="fas fa-list mr-3"></i> Data Layanan Anak
            </p>
            <form class="p-10 bg-white rounded shadow-xl" action="/insertdataBumil" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="content">
                    <label class="block text-sm text-gray-600" for="name">Nama</label>
                    <input class="w-full text-gray-700 bg-gray-200 rounded" id="nama" name="nama" type="text" required="" placeholder="Masukkan Nama Anak" aria-label="Name">
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="email">Tanggal Layanan</label>
                    <input class="w-full text-gray-700 bg-gray-200 rounded" id="email" name="tanggal_lahir" type="date" required="" placeholder="Masukkan Tanggal Layanan Anak" aria-label="Email">
                    <div class="mt-2">
                        <label class=" block text-sm text-gray-600" for="cus_email">Berat Badan</label>
                        <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="alamat" type="text" required="" placeholder="Masukkan Berat Badan Anak" aria-label="Email">
                    </div>
                    <div class="mt-2">
                        <label class=" block text-sm text-gray-600" for="cus_email">Tinggi Badan</label>
                        <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="alamat" type="text" required="" placeholder="Masukkan Tinggi Badan Anak" aria-label="Email">
                    </div>
                </div>
                <div class="mt-2">
                    <label class=" block text-sm text-gray-600" for="cus_email">Jenis Obat</label>
                    <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="alamat" type="text" required="" placeholder="Masukkan Jenis Obat" aria-label="Email">
                </div>

                <div class="mt-6">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-red-700 rounded" type="submit">Simpan Data</button>
                </div>
            </form>
        </div>
        <div class="w-full lg:w-1/2 mt-6 pl-0 lg:pl-2">
            <p class="text-xl pb-6 flex items-center">
                <i class="fas fa-list mr-3"></i> Data Layanan Bumil
            </p>
            <form class="p-10 bg-white rounded shadow-xl" action="/insertdataBumil" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="content">
                    <label class="block text-sm text-gray-600" for="name">Nama</label>
                    <input class="w-full text-gray-700 bg-gray-200 rounded" id="nama" name="nama" type="text" required="" placeholder="Masukkan Nama Bumil" aria-label="Name">
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="cus_email">NIK</label>
                    <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="cus_email" name="no_telephone" type="number" required="" placeholder="Masukkan NIK " aria-label="Email">
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="email">Tanggal Layanan</label>
                    <input class="w-full text-gray-700 bg-gray-200 rounded" id="email" name="tanggal_lahir" type="date" required="" placeholder="Masukkan Tanggal Layanan Bumil" aria-label="Email">
                    <div class="mt-2">
                        <label class=" block text-sm text-gray-600" for="cus_email">Berat Badan</label>
                        <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="alamat" type="text" required="" placeholder="Masukkan Berat Badan Bumil" aria-label="Email">
                    </div>
                    <div class="mt-2">
                        <label class=" block text-sm text-gray-600" for="cus_email">Jenis Obat</label>
                        <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="alamat" type="text" required="" placeholder="Masukkan Jenis Obat" aria-label="Email">
                    </div>

                    <div class="mt-6">
                        <button class="px-4 py-1 text-white font-light tracking-wider bg-red-700 rounded" type="submit">Simpan Data</button>
                    </div>
            </form>
        </div>
</x-admin-layout>