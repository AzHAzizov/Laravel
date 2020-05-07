@extends('admin.layouts.app')

@section('content')

    <div class="container">



        @component('admin.components.breadcrumb')
            @slot('title')          Создаие пользователя    @endslot
            @slot('parent')         Главная              @endslot
            @slot('current_page')   Пользователи            @endslot
        @endcomponent


        <hr>


        <form action="{{route('admin.user_managment.user.store')}}" method="POST" class="form-horizontal"> {{ csrf_field() }}

                {{-- Create and Update Category Form --}}

                @include('admin.user_managment.users.partials.form')


        
        </form>



    </div>

@endsection
