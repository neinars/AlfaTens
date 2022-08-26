<li class="nav-item">
    <a class="nav-link {{ request()->is('customer/home*') ? 'active' : '' }}" aria-current="page"
        href="{{ route('customer.home') }}">Home</a>
</li>
<li class="nav-item">
    {{-- <a class="nav-link{{ request()->is('customer/carts*') ? 'active' : '' }}" aria-current="page"
        href="{{ route('customer.home') }}">Carts <span class="badge text-bg-secondary">{{ $jumlah }}</span> </a> --}}
    <a href="#">Tedst</a>
</li>

<li class="nav-item">
    <a class="nav-link" href="#">Histories</a>
</li>
