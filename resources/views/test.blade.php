@component('kevin')
    @slot('title')
        Forbidden
    @endslot
    @slot('slot')
        yay
    @endslot
@endcomponent
<html>
<head>
<title>

</title>
</head>
<body>
@foreach ($kevin as $test)
<h1>{{$test->username}}</h1><br>
@endforeach

</body>
</html>

