<div class="footer-nav-area" id="footerNav">
    <div class="suha-footer-nav">
        <ul class="h-100 d-flex align-items-center justify-content-between ps-0 d-flex rtl-flex-d-row-r">
            <li>
                <a href="{{ route('index') }}">
                    <i class="fa-solid fa-house"></i> Home
                </a>
            </li>
            <li>
                <a href="{{ route('live-table') }}">
                    <i class="fa-solid fa-clock"></i> Live Table
                </a>
            </li>
            <li>
                <a href="{{ route('bookings') }}">
                    <i class="fa-solid fa-ticket"></i> Booking 
                </a>
            </li>
            <li>
                @auth
                <a href="{{ route('profil') }}">
                    <i class="fa-solid fa-user"></i> Profil
                </a>
                
                @else

                <a href="{{ route('login') }}">
                    <i class="fa-solid fa-user"></i> Login
                </a>
                @endauth    
            </li>
        </ul>
    </div>
</div>