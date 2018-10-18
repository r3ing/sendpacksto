@if(Auth::check() && Auth::user()->type == 'admin')
    <!-- NAVIGATION -->
    <nav id="navigation">
        <!-- container -->
        <div class="container">
            <!-- responsive-nav -->
            <div id="responsive-nav">
                <!-- NAV -->
                @php
                    $url = request()->path();
                @endphp
                <ul class="main-nav nav navbar-nav">
                    <!--
                        <li class="{{ request()->is('admin/category') ? 'active' : '' }}">
                        <a href="{{ route('category.index') }}">Categories</a></li>
                    -->
                    <li @if(strstr($url, 'admin/dashboard')) class="active" @endif>
                        <a href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li @if(strstr($url, 'admin/category')) class="active" @endif>
                        <a href="{{ route('category.index') }}">Categor&iacute;as</a>
                    </li>
                    <li @if(strstr($url, 'admin/product')) class="active" @endif>
                        <a href="{{ route('product.index') }}">Productos</a>
                    </li>
                </ul>
                <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </nav>
    <!-- /NAVIGATION -->
@endif
