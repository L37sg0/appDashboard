@extends('index')

@section('crud')
    <h1>Инфо за Подстанция {{ $substation->name }}</h1>
    <br>
    <div class="list-inline">
        <div class="row">

            <a href="/substations" class="list-inline-item btn btn-secondary">Назад</a>

            <a href="/substations/{{ $substation->id }}/edit" class="list-inline-item btn btn-success">Промяна</a>

            {!! Form::open([
                'action'    => ['SubstationsController@destroy', $substation->id],
                'method'    => 'POST',
                'class'     => 'pull-right'
            ]) !!}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Премахни', ['class'=>'list-inline-item btn btn-danger']) }}
            {!! Form::close() !!}
        </div>
    </div>
    <br><table class="table table-hover">
        <tbody>
            <tr>
                <th>Име</th>
                <td>{{ $substation->name }}</td>
            </tr>
            <tr>
                <th>Описание</th>
                <td>{{ $substation->description }}</td>
            </tr>
        </tbody>
    </table>
@endsection
