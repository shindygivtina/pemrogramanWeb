<x-admin-layout>
    <h1 class="text-3xl text-black pb-6">DESA CEMPAGA</h1>

    <div class="w-full mt-6" x-data="{ openTab: 1 }">
        <div>
            <ul class="flex border-b">
                <li class="-mb-px mr-1" @click="openTab = 1">
                    <a :class="openTab === 1 ? 'border-l border-t border-r rounded-t text-blue-700 font-semibold' : 'text-blue-500 hover:text-blue-800'" class="bg-white inline-block py-2 px-4 font-semibold" href="#">Sejarah</a>
                </li>
                <li class="mr-1" @click="openTab = 2">
                    <a :class="openTab === 2 ? 'border-l border-t border-r rounded-t text-blue-700 font-semibold' : 'text-blue-500 hover:text-blue-800'" class="bg-white inline-block py-2 px-4 font-semibold" href="#">Pengertian</a>
                </li>
                <li class="mr-1" @click="openTab = 3">
                    <a :class="openTab === 3 ? 'border-l border-t border-r rounded-t text-blue-700 font-semibold' : 'text-blue-500 hover:text-blue-800'" class="bg-white inline-block py-2 px-4 font-semibold" href="#">Manfaat</a>
                </li>
            </ul>
        </div>
        <div class="bg-white p-6">
            <div id="" class="" x-show="openTab === 1">
                <p> Desa Cempaga merupakan desa tua atau Desa Bali Aga yang berlokasi di Kecamatan Banjar, Kabupaten Buleleng, dimana di Kecamatan Banjar terdapat 5 Desa Bali Aga yang di kenal dengan istilah SCTPB (Sidatapa, Cempaga, Tigawasa, Pedawa dan Banyuseri). Desa Cempaga terdiri dari 2 Dusun yaitu Dusun Corot dan Dusun Desa. Seperti halnya Desa Bali Aga lainnya, desa ini memiliki hasil alam yang melimpah, udara yang sejuk, dikarenakan keberdaan desa cempaga berada didataran tinggi. </p>
            </div>
            <div id="" class="" x-show="openTab === 2">
                <p>Pengertian Posyandu adalah Pos Pelayanan Keluarga Berencana - Kesehatan Terpadu yang memiliki kegiatan kesehatan dasar yang diselenggarakan dari, oleh dan untuk masyarakat yang dibantu oleh petugas kesehatan. Posyandu merupakan salah satu upaya kesehatan bersumberdaya masyarakat. kegiatan kesehatan dasar yang diselenggarakan oleh dan untuk masyarakat yang dibantu oleh petugas kesehatan. Posyandu adalah pusat kegiatan masyarakat dalam upaya pelayanan kesehatan dan keluarga berencana. Posyandu adalah jenis pelayanan kepada anak berupa penimbangan untuk memantau pertumbuhan anak. Posyandu adalah jenis pelayanan kepada anak berupa penimbangan untuk memantau pertumbuhan anak. </p>
            </div>
            <div id="" class="" x-show="openTab === 3">
                <p>Manfaat Posyandu ialah memberikan layanan kesehatan ibu dan anak, KB, imunisasi, gizi, dan penanggulangan diare.
                    1.) Penimbangan Balita: Penimbangan balita dilakukan tiap bulan di posyandu. Penimbangan secara rutin di posyandu untuk pemantauan pertumbuhan dan mendeteksi sedini mungkin penyimpangan pertumbuhan balita. Dari penimbangan yang kemudian dicatat di KMS, dari data tersebut dapat diketahui status pertumbuhan balita, apabila penyelenggaraan posyandu baik maka upaya untuk pemenuhan dasar pertumbuhan anak akan baik pula.
                    2.) Imunisasi 
                    Di posyandu balita akan mendapatkan layanan imunisasi. 
                    Macam imunisasi yang diberikan di posyandu adalah 
                    - BCG untuk mencegah penyakit TBC.
                    - DPT untuk mencegah penyakit difteri, pertusis (batuk rejan), tetanus.
                    - Polio untuk mencegah penyakit kelumpuhan.
                    - Hepatitis B untuk mencegah penyakit hepatitis B (penyakit kuning).
                    3.) Peningkatan Gizi 
                    Dengan adanya posyandu yang sasaran utamanya bayi dan balita, sangat tepat untuk meningkatkan gizi balita. Peningkatan gizi balita di posyandu yang dilakukan oleh kader berupa memberikan penyuluhan tentang ASI, status gizi balita, MPASI, Imunisasi, Vitamin A, stimulasi tumbuh kembang anak, diare pada balita. </p>

            </div>
        </div>
    </div>
</x-admin-layout>