<!DOCTYPE html>
<html lang="en">
<head>
  @include ('layouts.partials.meta')
    <title>Ring Me - Customer support tool</title>
    @include ('layouts.partials.styles')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
</head>
<body>
  @include ('layouts.partials.navbar')
  @yield('content')
  @include ('layouts.partials.footer')
  @include ('layouts.partials.scripts')
</body>
</html>
