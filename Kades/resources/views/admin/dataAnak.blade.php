<x-admin-layout>
    <h1 class="w-full text-6xl text-black pb-6">Formulir Data Posyandu</h1>

    <div class="flex flex-wrap">
        <div class="w-full lg:w-2/3 my-6 pr-0 lg:pr-2">
            <p class="text-xl pb-6 flex items-center">
                <i class="fas fa-list mr-3"></i> Update Data Anak
            </p>
            <div class="leading-loose">
                <form class="p-10 bg-white rounded shadow-xl" action="/updateData/{{$data->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="content">
                        <label class="block text-sm text-gray-600" for="name">Nama</label>
                        <input class="w-full text-gray-700 bg-gray-200 rounded" id="name" name="nama" type="text" required="" placeholder="Masukkan Nama Anak" aria-label="Name" value="{{$data->nama}}">
                    </div>
                    <div class="mt-2">
                        <ul>
                            <legend class="text-gray-600">Jenis Kelamin</legend>
                            <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="laki-laki" {{$data->jenis_kelamin == 'laki-laki'? 'checked' : ''}}>
                            <label class="text-gray-700" for="laki-laki">Laki-laki</label><br>
                            <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="perempuan" {{$data->jenis_kelamin == 'perempuan'? 'checked' : ''}}>
                            <label class="text-gray-700" for="perempuan">Perempuan</label><br>
                        </ul>
                    </div>
                    <div class="mt-2">
                        <label class="block text-sm text-gray-600">Tanggal Lahir</label>
                        <input class=" from-control w-full text-gray-700" id="date" name="tanggal_lahir" type="date" value="{{ \Carbon\Carbon::parse($data->tanggal_lahir)->format('Y-m-d'); }}">
                    </div>
                    <div class="mt-2">
                        <label class="block text-sm text-gray-600" for="email">Anak Ke</label>
                        <input class="w-full text-gray-700 bg-gray-200 rounded" value="{{$data->anakKe}}" id="anakKe" name="anakKe" type="number" required="" placeholder="Masukkan Anak Ke Berapa" aria-label="Email">
                    </div>
                    <div class="mt-6">
                        <button class="px-4 py-1 text-white font-light tracking-wider bg-red-700 rounded" type="submit">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
</x-admin-layout>