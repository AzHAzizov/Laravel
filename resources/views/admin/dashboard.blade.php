@extends('admin.layouts.app')

@section('content')

   <div class="container">


    <div class="row">

        <div class="col-sm-3">
            <div class="jumbotron">
                <p class="text-center"> <span class="label label-primary"> Категории {{$count_categories}}</span></p>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="jumbotron">
                <p class="text-center"> <span class="label label-primary"> Материалов  {{$count_articles}}</span></p>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="jumbotron">
                <p class="text-center"> <span class="label label-primary"> Посетителей 0</span></p>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="jumbotron">
                <p class="text-center"> <span class="label label-primary">Посетителей на сегодня 0  </span></p>
            </div>
        </div>


    </div>


        <div class="row">
            <div class="col-sm-6">
                <a href="{{route('admin.category.create')}}" class="btn btn-primary btn-block">Создать категорию</a>
                @foreach ($categories as $category)

                    <a href="{{route('admin.category.edit' , $category)}}" class="list-group-item">
                        <h4 class="list-group-item-heading">
                            {{$category->title}}
                        </h4>
                        <p class="list-group-item-text">
                            {{$category->articles()->count()}}
                        </p>
                    </a>

                @endforeach

            </div>

            <div class="col-sm-6">

                <a href="{{route('admin.article.create')}}" class="btn btn-danger btn-block">Создать материал</a>
                @foreach ($articles as $article)
                <a href="{{route('admin.article.edit', $article)}}" class="list-group-item">
                    <h4 class="list-group-item-heading">
                        {{$article->title}}
                    </h4>
                    <p class="list-group-item-text">
                        {{$article->categories()->pluck('title')->implode(', ')}}
                    </p>
                </a>
            @endforeach
        </div>
        </div>
   </div>

@endsection
