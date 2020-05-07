@extends('admin.layouts.app')

@section('content')
        <div class="container">
            @component('admin.components.breadcrumb')
        @slot('title')          Спсиок  Новостей    @endslot
        @slot('parent')         Главная              @endslot
        @slot('current_page')   Категории            @endslot
    @endcomponent


    <hr>

    <a href="{{route('admin.article.create')}}" class="btn btn-primary pull-right">
        <i class="fa fa-plus-square-o"> Создать новость </i>
    </a>

    <table class="table table-striped mt-5">
        <thead>
            <th>Наеминование</th>
            <th>Нубликация</th>
            <th class="text-right">Действе</th>
        </thead>

        <tbody>
            @forelse ($articles as $article)
             <tr>
                <td> {{$article->title}}</td>
                <td> {{$article->published}}</td>
                <td class="text-right">
                <form action="{{route('admin.article.destroy', $article)}}" method="post" onsubmit="if(confirm('Удалить данный материал ?')){return true}else{return false}">
                    <input type="hidden" name="_method" value="DELETE">{{ csrf_field() }}


                    <a href="{{route('admin.article.edit',$article)}}">
                        <i class="far fa-edit"></i><a>
                    <button class="btn mr-1" style="submit"><i class="fas fa-trash-alt"></i></button>
                </form>

                </td>
             </tr>
            @empty
                <tr colspan="3" class="text-center">
                    <td >
                        <h2>
                            Данные отсутсвует
                        </h2>
                    </td>
                </tr>
            @endforelse
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3">
                    {{$articles->links()}}
                </td>
            </tr>
        </tfoot>
    </table>
        </div>
@endsection
