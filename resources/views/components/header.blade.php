<header>
    <div class="head_left"> 
        <a href="{{route('home')}}">
        <img src="{{asset('imgs/logo.png')}}" alt="Notte" title="Notte" />
        </a>
    </div>
    <div class="head_right">
        <x-button class="" linkto="create-account">Criar conta</x-button>
        <x-button class="btn_login" linkto="login">Login</x-button>
    </div>
</header>