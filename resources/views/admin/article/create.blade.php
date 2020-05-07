@extends('admin.layouts.app')

@section('content')

    <div class="container">



        @component('admin.components.breadcrumb')
            @slot('title')          Спсиок  новостей    @endslot
            @slot('parent')         Главная              @endslot
            @slot('current_page')   Новости            @endslot
        @endcomponent


        <hr>


        <form action="{{route('admin.article.store')}}" method="POST" class="form-horizontal"> {{ csrf_field() }}

                {{-- Create and Update Category Form --}}

                @include('admin.article.partials.form')


        <input type="hidden" name="created_by" value="{{Auth::id()}}">
        </form>



    </div>

@endsection
