<nav class="sticky top-0  z-10 bg-slate-50 nav-blur shadow-lg">
    <div class="flex nav items-center justify-center h-10">
        <ul class="flex justify-center border-b-2  border-transparent  gap-6 tracking-wider">
            <a href="{{ route('welcome') }}">
                <li class="nav-item p-2 hover:text-green-500 hover:bg-slate-100">Beranda</li>
            </a>
            <a href="{{ route('profile') }}">
                <li class="nav-item p-2 hover:text-green-500 hover:bg-slate-100">Profile</li>
            </a>
            <a href="{{ route('program') }}">
                <li class="nav-item p-2 hover:text-green-500 hover:bg-slate-100">Program</li>
            </a>
            <a href="#">
                <li class="nav-item p-2 hover:text-green-500 hover:bg-slate-100">Informasi</li>
            </a>
            <a href="#">
                <li class="nav-item p-2 hover:text-green-500 hover:bg-slate-100">Kontak</li>
            </a>
        </ul>
    </div>
</nav>

<style>
    .nav-blur {
        position: sticky;
        top: 0;
        z-index: 10;
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(5px);
        transition: background-color 0.3s ease, backdrop-filter 0.3s ease;
    }

    .nav-blur.scrolled {
        backdrop-filter: blur(10px);
        background: rgba(255, 255, 255, 0.9);
    }

    /* Animasi border bottom dari tengah */
    @keyframes borderFromCenter {
        from {
            width: 0;
            left: 50%;
        }

        to {
            width: 100%;
            left: 0;
        }
    }

    .nav-item {
        position: relative;
    }

    .nav-item::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 0;
        height: 3px;
        background-color: #22c55e;
        transition: width 0.3s ease;
    }

    .nav-item:hover::after {
        animation: borderFromCenter 0.3s forwards;
    }
</style>
