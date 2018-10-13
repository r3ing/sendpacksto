@if(Auth::check() && Auth::user()->type == 'admin')
    <!-- NAVIGATION -->
    <nav id="navigation">
        <!-- container -->
        <div class="container">
            <!-- responsive-nav -->
            <div id="responsive-nav">
                <!-- NAV -->
                <ul class="main-nav nav navbar-nav">
                    <li class="active"><a href="">Home</a></li>
                    <li class="{{ request()->is('admin/category') ? 'active' : '' }}"><a href="{{ route('category.index') }}">Categories</a></li>
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
