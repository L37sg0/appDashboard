@extends('index')

@section('crud')
    <h1>Инфо за Извод {{ $outlet->name }}</h1>
    <br>
    <div class="list-inline">
        <div class="row">

            <a href="/outlets" class="list-inline-item btn btn-secondary">Назад</a>

            <a href="/outlets/{{ $outlet->id }}/edit" class="list-inline-item btn btn-success">Промяна</a>

            {!! Form::open([
                'action'    => ['OutletsController@destroy', $outlet->id],
                'method'    => 'POST',
                'class'     => 'pull-right'
            ]) !!}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Премахни', ['class'=>'list-inline-item btn btn-danger']) }}
            {!! Form::close() !!}
        </div>
    </div>
    <br>
    <table class="table table-hover">
        <tbody>
            <tr>
                <th>Име</th>
                <td>{{ $outlet->name }}</td>
            </tr>
            <tr>
                <th>Подстанция</th>
                <td>{{ $outlet->substation->name }}</td>
                <th>Описание</th>
                <td>{{ $outlet->description }}</td>
            </tr>
        </tbody>
    </table>
@endsection
