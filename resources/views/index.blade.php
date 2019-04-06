<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show
@section('test')
<b>oi</b>
@show
        <div class="container">
            @yield('content')
        </div>
	<p>@yield('cuk')</p>

    </body>
</html>

<div class="index index-danger">
    {{ $slot }}
</div>
