<header class="bg-blue-600 text-white">
    <div class="container mx-auto p-4 flex justify-between items-center">
        <a href="{{ route('dashboard') }}" class="text-2xl font-bold">SIMS</a>
        <nav class="space-x-6 hidden lg:flex">
            <a href="{{ route('dashboard') }}" class="hover:text-gray-300">Dashboard</a>
            <a href="{{ route('santri.index') }}" class="hover:text-gray-300">Santri</a>
            <a href="{{ route('pembayaran.index') }}" class="hover:text-gray-300">Pembayaran</a>
            <a href="{{ route('absensi.index') }}" class="hover:text-gray-300">Absensi</a>
            <a href="{{ route('uang_saku.index') }}" class="hover:text-gray-300">Uang Saku</a>
            
        </nav>
    </div>
</header>

