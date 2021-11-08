



<li class="nav-item">
    <a href="{{ route('products.index') }}"
       class="nav-link {{ Request::is('products*') ? 'active' : '' }}">
        <p>Products</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('orders.index') }}"
       class="nav-link {{ Request::is('orders*') ? 'active' : '' }}">
        <p>Orders</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('salesDetails.index') }}"
       class="nav-link {{ Request::is('salesDetails*') ? 'active' : '' }}">
        <p>Sales  Details</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('logs.index') }}"
       class="nav-link {{ Request::is('logs*') ? 'active' : '' }}">
        <p>Logs</p>
    </a>
</li>


