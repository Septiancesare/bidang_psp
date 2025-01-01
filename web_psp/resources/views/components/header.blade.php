<header class="bg-green-600 p-2 text-white">
    <div class="header flex justify-center gap-3 ">
        <div class="logo-kabupaten">
            <img src="{{ asset('assets/Lambang_Grobogan.png') }}" alt="grobogan" class="h-12">
        </div>
        <div class="header-text h-14 text-center items-center ">
            <div class="header-title text-lg">
                <h1 class="text-bold">Bidang Penyuluhan Sarana dan Prasarana Pertanian</h1>
            </div>
            <p>Dinas Pertanian Kabupaten Grobogan</p>
        </div>
    </div>
</header>
<div class="running-text overflow-hidden whitespace-nowrap relative w-screen  bg-green-100  ">
    <p class="text-running ">Jam Operasional : Senin - Jumat pukul 08.00 - 16.00 WIB</p>
</div>
@include('components.navigation')


<style>
    .running-text {
        position: relative;
        height: 1.6em;
    }

    .text-running {
        animation: runningText 20s linear infinite;
    }

    @keyframes runningText {
        0% {
            transform: translateX(100%);
        }

        100% {
            transform: translateX(-100%);
        }
    }
</style>
