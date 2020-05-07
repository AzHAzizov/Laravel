@extends('admin.layouts.app')

@section('content')
        <div class="container">
            @component('admin.components.breadcrumb')
        @slot('title')          Спсиок  каиегории    @endslot
        @slot('parent')         Главная              @endslot
        @slot('current_page')   Категории            @endslot
    @endcomponent


    <hr>

    <a href="{{route('admin.category.create')}}" class="btn btn-primary pull-right">
        <i class="fa fa-plus-square-o"> Создать категорию</i>
    </a>

    <table class="table table-striped mt-5">
        <thead>
            <th>Наеминование</th>
            <th>Нубликация</th>
            <th class="text-right">Действе</th>
        </thead>

        <tbody>
            @forelse ($categories as $category)
             <tr>
                <td> {{$category->title}}</td>
                <td> {{$category->published}}</td>
                <td class="text-right">
                <form action="{{route('admin.category.destroy', $category)}}" method="post" onsubmit="if(confirm('Удалить данную категорию ?')){return true}else{return false}">
                    <input type="hidden" name="_method" value="DELETE">{{ csrf_field() }}


                    <a href="{{route('admin.category.edit',$category)}}">
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
                    {{$categories->links()}}
                </td>
            </tr>
        </tfoot>
    </table>
        </div>
@endsection
