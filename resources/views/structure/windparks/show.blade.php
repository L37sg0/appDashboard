@extends('index')

@section('crud')
    <h1>Инфо за Ветропарк {{ $windpark->name }}</h1>
    <br>
    <div class="list-inline">
        <div class="row">

            <a href="/windparks" class="list-inline-item btn btn-secondary">Назад</a>

            <a href="/windparks/{{ $windpark->id }}/edit" class="list-inline-item btn btn-success">Промяна</a>

            {!! Form::open([
                'action'    => ['WindparksController@destroy', $windpark->id],
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
                <td>{{ $windpark->name }}</td>
            </tr>
            <tr>
                <th>Собственик</th>
                <td>{{ $windpark->owner }}</td>
                <th>Описание</th>
                <td>{{ $windpark->description }}</td>
            </tr>
        </tbody>
    </table>
@endsection
