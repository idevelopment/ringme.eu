<nav class="navbar navbar-default navbar-fixed-top" style="height:60px;">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <i class="fa fa-phone fa-lg"></i> Ring Me
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/services') }}">Services</a></li>
                <li><a href="{{ url('/download') }}">Download</a></li>
                <li><a href="{{ url('/demo') }}">Demo</a></li>
                <li><a href="{{ url('/support') }}">Support</a></li>
                <li><a href="{{ url('/forum') }}">Forum</a></li>
                <li><a href="{{ url('/contact')}}">Contact</a></li>
                <li><a href="{{ url('/portal')}}">Portal</a></li>
            </ul>
        </div>
    </div>
</nav>
