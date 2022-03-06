<x-admin-layout>
    <main class="w-full flex-grow p-6">
        <h1 class="text-3xl text-black pb-6">Output Data Tabel Ibu Hamil </h1>
        @if ($cek = Session::get('Sukses'))
        <div class="px-4 py-1 text-white font-light tracking-wider bg-green-500 rounded alert-block">
            {{$cek}}
        </div>
        @endif
        <div class="w-full mt-6">
            <p class="text-xl pb-3 flex items-center">
                <i class="fas fa-list mr-3"></i> Tabel Bumil
            </p>
            <div class="bg-white overflow-auto">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-800 text-white">
                        <div class="bg-white overflow-auto">
                            <table class="min-w-full bg-white">
                                <thead class="bg-red-600 text-black">
                                    <tr>
                                        <th class="text-left py-3 px-4 text-white font-light uppercase font-semibold text-sm">No</th>
                                        <th class="text-left py-3 px-4 text-white font-light uppercase font-semibold text-sm">Nama</th>
                                        <th class="text-left py-3 px-4 text-white font-light uppercase font-semibold text-sm">Tanggal Lahir</th>
                                        <th class="text-left py-3 px-4 text-white font-light uppercase font-semibold text-sm">Nomor Telephone</th>
                                        <th class="text-left py-3 px-4 text-white font-light uppercase font-semibold text-sm">Alamat</td>
                                        <th class="text-left py-3 px-4 text-white font-light uppercase font-semibold text-sm"> Action</th>
                                    </tr>
                                </thead>

                                <tbody class="text-gray-700">
                                    @foreach ($data as $J)
                                    <tr>
                                        <td scope="row" class="text-left py-3 px-4 uppercase font-semibold text-sm">{{$loop->iteration}}</td>
                                        <td class="text-left py-3 px-4 uppercase font-semibold text-sm">{{$J->nama}}</td>
                                        <td class="text-left py-3 px-4 uppercase font-semibold text-sm">{{$J->tanggal_lahir->format('d-m-Y')}}</td>
                                        <td class="text-left py-3 px-4 uppercase font-semibold text-sm">{{$J->no_telephone}}</td>
                                        <td class="text-left py-3 px-4 uppercase font-semibold text-sm">{{$J->alamat}}</td>
                                        <td>
                                            <a href="/tampilanDataBumil/{{$J->id}}" class="px-4 py-1 text-white font-light tracking-wider bg-yellow-500 rounded" type="">Edit</a>
                                            <a href="/deleteDataBumil/{{$J->id}}" class="px-4 py-1 text-white font-light tracking-wider bg-red-500 rounded" type="">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

            </div>


            <!-- AlpineJS -->
            <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
            <!-- Font Awesome -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    </main>
</x-admin-layout>