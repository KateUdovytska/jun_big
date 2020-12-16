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
@endsection