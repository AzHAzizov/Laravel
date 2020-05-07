

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach
        </ul>
    </div>
@endif

<label for="">Имя пользователя</label>
<input type="text" class="form-control" name="name" placeholder="Имя пользователя" value="@if(old('name')){{old('name')}} @else{{$user->name or ""}} @endif"  required>


<label for=""> Эл. почта пользователя</label>
<input type="email" class="form-control" name="email" placeholder="Почта пользователя" value=" @if(old('email')){{old('email')}} @else{{$user->email or ""}} @endif" required>


<label for="">Пароль пользователя</label>
<input type="password" class="form-control" name="password" placeholder="Пароль пользователя"    >



<label for="">Подтверждение пароля</label>
<input type="password" class="form-control" name="password_confirmation" placeholder="Пароль пользователя" >





<hr />

<input class="btn btn-primary" type="submit" value="Сохранить">
