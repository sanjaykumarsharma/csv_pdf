<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    @include('layouts.head')
<body>

<div id="app">
    @include('layouts.header')


    <div class="container-fluid p-4">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                @include('partials.errors')
                @include('partials.success')
            </div>
        </div>

        @yield('content')
    </div>


</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/myjs.js') }}"></script>

{{--  <script>
$(document).ready(function () {

    window.setTimeout(function() {
        $(".alert-success").fadeTo(1500, 0).slideUp(500, function(){
            $(this).remove();
        });
    }, 5000);

});
</script>  --}}

</body>
</html>
