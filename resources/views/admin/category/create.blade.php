@extends('admin.layouts.app')

@section('content')

    <div class="container">



        @component('admin.components.breadcrumb')
            @slot('title')          Спсиок  категории    @endslot
            @slot('parent')         Главная              @endslot
            @slot('current_page')   Категории            @endslot
        @endcomponent


        <hr>


        <form action="{{route('admin.category.store')}}" method="POST" class="form-horizontal"> {{ csrf_field() }}

                {{-- Create and Update Category Form --}}

                @include('admin.category.partials.form')
        </form>



    </div>

@endsection
