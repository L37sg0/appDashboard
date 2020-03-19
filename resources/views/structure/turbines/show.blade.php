@extends('index')

@section('crud')
    <h1>Инфо за Турбина {{ $turbine->name }}</h1>
    <br>
    <div class="list-inline">
        <div class="row">

            <a href="/turbines" class="list-inline-item btn btn-secondary">Назад</a>

            <a href="/turbines/{{ $turbine->id }}/edit" class="list-inline-item btn btn-success">Промяна</a>

            {!! Form::open([
                'action'    => ['TurbinesController@destroy', $turbine->id],
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
            <td>{{ $turbine->name }}</td>
        </tr>
        <tr>
            <th>Ветропарк</th>
            <td>{{ $turbine->windpark->name }}</td>
            <th>Сериен Номер</th>
            <td>{{ $turbine->serial_number }}</td>
        </tr>
        <tr>
            <th>Производител</th>
            <td>{{ $turbine->vendor }}</td>
            <th>Модел</th>
            <td>{{ $turbine->model }}</td>
        </tr>
        <tr>
            <th>Мощност</th>
            <td>{{ $turbine->power }} MW</td>
            <th>Собственик</th>
            <td>{{ $turbine->owner }}</td>
        </tr>
        <tr>
            <th>Кутия- Производител</th>
            <td>{{ $turbine->gearbox_vendor }}</td>
            <th>Кутия- Номер</th>
            <td>{{ $turbine->gearbox_vendor }}</td>
        </tr>
        <tr>
            <th>Хидравлика- Производител</th>
            <td>{{ $turbine->hydraulics_vendor }}</td>
            <th>Хидравлика- Номер</th>
            <td>{{ $turbine->hydraulics_vendor }}</td>
        </tr>
        <tr>
            <th>Трансформатор- Производител</th>
            <td>{{ $turbine->gearbox_vendor }}</td>
            <th>Трансформатор- Номер</th>
            <td>{{ $turbine->gearbox_vendor }}</td>
        </tr>
        </tbody>
    </table>
@endsection
