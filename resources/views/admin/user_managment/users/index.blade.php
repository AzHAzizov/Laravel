@extends('admin.layouts.app')

@section('content')
        <div class="container">
            @component('admin.components.breadcrumb')
        @slot('title')          Спсиок  Пользователей    @endslot
        @slot('parent')         Главная              @endslot
        @slot('current_page')   Пользователи            @endslot
    @endcomponent


    <hr>

    <a href="{{route('admin.user_managment.user.create')}}" class="btn btn-primary pull-right">
        <i class="fa fa-plus-square-o"> Создать пользователя </i>
    </a>

    <table class="table table-striped mt-5">
        <thead>
            <th>Имя пользователя</th>
            <th>Почта пользователя</th>
            <th class="text-right">Действе</th>
        </thead>

        <tbody>
            @forelse ($users as $user)
             <tr>
                <td> {{$user->name}}</td>
                <td> {{$user->email}}</td>
                <td class="text-right">
                <form action="{{route('admin.user_managment.user.destroy', $user)}}" method="post" onsubmit="if(confirm('Удалить данного пользователя ?')){return true}else{return false}">
                    {{method_field('DELETE')}}{{ csrf_field() }}


                    <a href="{{route('admin.user_managment.user.edit',$user)}}">
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
                    {{$users->links()}}
                </td>
            </tr>
        </tfoot>
    </table>
        </div>
@endsection
