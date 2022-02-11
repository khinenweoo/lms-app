@auth()
    @include('layouts.navbars.frontnavs.auth')
@endauth
    
@guest()
    @include('layouts.navbars.frontnavs.guest')
@endguest