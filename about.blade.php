<x-layout>
<x-slot:title>{{ $title }}</x-slot:title>

    <div>
        <h2 class="text-2xl font-semibold text-white mb-6">
            Nama: {{ $nama }} <br>
        alamat: {{ $alamat }}
    </h2>
    <img src="img/why.jpg" alt="org ganteng" class="w-24 md:w-48 lg:w-64 h-auto">
    </div>

</x-layout>
