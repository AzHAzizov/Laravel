@extends('admin.layouts.app')

@section('content')

    <div class="container">



        @component('admin.components.breadcrumb')
            @slot('title')          Изменение  категории    @endslot
            @slot('parent')         Главная              @endslot
            @slot('current_page')   Категории            @endslot
        @endcomponent


        <hr>


        <form action="{{route('admin.category.update', $category)}}" method="POST" class="form-horizontal"> {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">
                {{-- Create and Update Category Form --}}

                @include('admin.category.partials.form')
        </form>



    </div>

@endsection
