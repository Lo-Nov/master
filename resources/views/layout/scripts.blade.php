<div class="container-fluid fooooter">
    <div class="row landing-footer display-none animated"> <img src="{{ asset('img/revenue sure icons/nai_outline.svg') }}" class="col-12">
        <p class="copyright">&copy; 2019 Powered by NBK  All Rights Reserved.
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                <i class="ti-power-off"></i> <span>Logout</span>                             </a>
        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        </p>


    </div>
</div>
<!--	scripts-->
<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.bundle.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/home.js') }}"></script>
</body>
</html>
