@extends('layout')

@section('title')Вход@endsection

@section('main_content')
    <form class="form-signin">
        <h1 class="h3 mb-3 font-weight-normal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Пожалуйста войдите</font></font></h1>
        <label for="inputEmail" class="sr-only"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Адрес электронной почты</font></font></label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Адрес электронной почты" required="" autofocus="">
        <label for="inputPassword" class="sr-only"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">пароль</font></font></label>
        <input type="password" id="inputPassword" class="form-control" placeholder="пароль" required="">
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Запомнить меня
                    </font></font></label>
        </div>
        <a href="/signup">Вы не зарегистрированы?</a>
        <button class="btn btn-lg btn-primary btn-block" type="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">войти в систему</font></font></button>
        <p class="mt-5 mb-3 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">© Квартиры Магнитогорск</font></font></p>
    </form>
@endsection
