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
                    <li><a href="#">Home</a></li>
                    <!--
                    <li class="{{ request()->is('admin/category') ? 'active' : '' }}">
                        <a href="{{ route('category.index') }}">Categories</a></li>
                    -->
                    <li @if(strstr($url, 'admin/category')) class="active" @endif>
                        <a href="{{ route('category.index') }}">Categories</a>
                    </li>


                    <li><a href="#">Products</a></li>
                </ul>
                <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </nav>
    <!-- /NAVIGATION -->
@endif
