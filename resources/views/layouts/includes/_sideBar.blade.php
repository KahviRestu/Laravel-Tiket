<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
            @if(auth()->user()->role == "user")
                <li><a href="/dashboard" class=""><i class="lnr lnr-home"></i> <span>HomePage</span></a></li>
                <li><a href="/cekTiket" class=""><i class="lnr lnr-user"></i> <span>Cek Pemesanan</span></a></li>
            @else
                <li><a href="/bis" class=""><i class="lnr lnr-rocket"></i> <span>Bis</span></a></li>
                <li><a href="/jadwal" class=""><i class="fa fa-calendar"></i> <span>Jadwal</span></a></li>
                <li><a href="/pemesanan" class=""><i class="fa fa-envelope"></i> <span>Pemesanan</span></a></li>
            @endif
            </ul>
        </nav>
    </div>
</div>