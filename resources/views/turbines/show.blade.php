@extends('index')

@section('crud')
    <h1>Инфо за Турбина</h1>
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
    <h3>{{$turbine->name}}</h3>
    <p>{{ $turbine->windpark($turbine->windpark_id)->name }}</p>
    <p>{{ $turbine->serial_number }}</p>
    <p>{{ $turbine->vendor }}</p>
    <p>{{ $turbine->model }}</p>
    <p>{{ $turbine->power }}</p>
    <p>{{ $turbine->owner }}</p>
    <p>{{ $turbine->gearbox_vendor }}</p>
    <p>{{ $turbine->gearbox_number }}</p>
    <p>{{ $turbine->hydraulics_vendor }}</p>
    <p>{{ $turbine->hydraulics_number }}</p>
    <p>{{ $turbine->transformer_vendor }}</p>
    <p>{{ $turbine->transformer_number }}</p>
@endsection
