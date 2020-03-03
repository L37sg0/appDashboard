@extends('index')

@section('crud')
    <h1>Инфо за Ветропарк</h1>
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
    <h3>{{$windpark->name}}</h3>
    <p>{!! $windpark->owner !!}</p>
    <p>{!! $windpark->description !!}</p>
@endsection
