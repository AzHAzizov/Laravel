@extends('admin.layouts.app')

@section('content')

    <div class="container">



        @component('admin.components.breadcrumb')
            @slot('title')          Изменение  новости    @endslot
            @slot('parent')         Главная              @endslot
            @slot('current_page')   Категории            @endslot
        @endcomponent


        <hr>


        <form action="{{route('admin.article.update', $article)}}" method="POST" class="form-horizontal"> {{ csrf_field() }}

            <input type="hidden" name="_method" value="PUT">
                {{-- Create and Update Category Form --}}

                @include('admin.article.partials.form')

            <input type="hidden" name="modefied_by" value="{{Auth::id()}}">
        </form>



    </div>

@endsection
