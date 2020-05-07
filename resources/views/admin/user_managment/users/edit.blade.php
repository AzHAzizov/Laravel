@extends('admin.layouts.app')

@section('content')

    <div class="container">



        @component('admin.components.breadcrumb')
            @slot('title')          Изменение  данных пользователя    @endslot
            @slot('parent')         Главная              @endslot
            @slot('current_page')   Пользователи            @endslot
        @endcomponent


        <hr>


        <form action="{{route('admin.user_managment.user.update', $user)}}" method="POST" class="form-horizontal"> {{ csrf_field() }}
            {{method_field('PUT')}}
            <input type="hidden" name="_method" value="PUT">
                {{-- Create and Update Category Form --}}

                @include('admin.user_managment.users.partials.form')


        </form>



    </div>

@endsection
