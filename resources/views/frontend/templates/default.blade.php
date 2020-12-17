<!DOCTYPE html>
<html lang="en">
    <!-- head -->
    @include ('frontend.templates.partials.head')

<body>
    <!-- navbar -->
    @include ('frontend.templates.partials.navigation')

    <!-- content -->
    <div class="container">
        @yield('content')  
    </div>
        
    <!-- scripts -->
    @include ('frontend.templates.partials.scripts')

    <!-- toast / alert -->
    @include ('frontend.templates.partials.toast')
</body>
</html>