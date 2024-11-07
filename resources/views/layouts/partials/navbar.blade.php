<nav class="navbar fixed-top" style="background-color: #89BFDD; min-height: 70px;">
    <div class="container-fluid">
        <div class="d-flex align-items-center">
            <!-- Logo -->
            <a class="navbar-brand ms-md-3" href="/home">
                <img src="{{ asset('asset/photo/logoipg.png') }}" alt="ipg.jpeg" width="60" height="70"> <!-- Reduce logo height -->
            </a>
            <!-- Text beside Logo -->
            <p class="h4 text-dark mb-0 ms-3">IPGKI-edu Gather</p>
        </div>
        <div class="d-flex align-items-center">
            <!-- Home Icon and Text -->
            <a href="/profile" class="text-dark me-3 d-flex align-items-center text-decoration-none" title="Home">
                <i class="bi bi-house-door me-2"></i> <!-- Home icon -->
                <span>Home</span>
            </a>

            <!-- Logout Icon and Text -->
            <form action="{{ route('logout') }}" method="post" style="display: inline;">
                @csrf
                <button type="submit" class="text-dark btn btn-link p-0 d-flex align-items-center text-decoration-none" style="margin-right:20px;" title="Logout">
                    <i class="bi bi-box-arrow-right me-2"></i> <!-- Logout icon -->
                    <span>Logout</span>
                </button>
            </form>
        </div>
    </div>
</nav>
