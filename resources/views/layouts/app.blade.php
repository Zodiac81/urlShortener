<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.headers')
</head>
<body>
    <div class="container">
        @include('partions.messages')
        @include('partions.errors')
        <div class="row">
            <div class="col-md-6">
                @yield('form')
            </div>
            <div class="col-md-6">
                @yield('table')
            </div>
        </div>
    </div>
    @section('scripts')
        @include('layouts.scripts')
    @show
</body>
</html>
