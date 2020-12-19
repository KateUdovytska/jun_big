@extends('layouts.default')

@section('content')

    <form action="{{ route('tasks.create') }}" method="post" class="form-horizontal">
        {{csrf_field()}}
        {{method_field('GET')}}
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Новая задача
                </button>
            </div>
        </div>
    </form>
    <!-- Текущие задачи -->
    @if (count($tasks) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Задачи
            </div>
            <div class="panel-body">
                <table class="table table-striped task-table">
                    <thead>
                    <tr>
                        <th>Имя</th>
                        <th>Действие</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <td class="table-text">
                                <div>{{ $task->name }}</div>
                            </td>
                            <td>
                                <form action="{{ route('tasks.delete', $task->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-btn fa-trash"></i>Удалить
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection