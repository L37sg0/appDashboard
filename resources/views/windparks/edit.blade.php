@extends('index')

@section('crud')
    <h1>Промяна на Ветропарк</h1>

    {!! Form::open([
        'action'    => ['WindparksController@update', $windpark->id],
        'method'    => 'POST'
    ]) !!}
        {{-- Input fields  --}}
        <div class="form-group">
            {{ Form::label('title', 'Име') }}
            {{ Form::text('name', $windpark->name,[
                'class'         => 'form-control',
                'placeholder'   => 'Ветропарк'
            ]) }}
        </div>
        <div class="form-group">
            {{ Form::label('title', 'Собственик') }}
            {{ Form::text('owner', $windpark->owner,[
                'class'         => 'form-control',
                'placeholder'   => 'Име на Фирма'
            ]) }}
        </div>
        <div class="form-group">
            {{ Form::label('title', 'Описание') }}
            {{ Form::textarea('description', $windpark->description,[
                'class'         => 'form-control',
                'id'            => 'article-ckeditor',
                'placeholder'   => 'Ветропарк с 1 турбина'
            ]) }}
        </div>

        {{-- Hidden method --}}
        {{ Form::hidden('_method', 'PUT') }}

        {{-- Submit button --}}
        {{ Form::submit('Запази', [
            'class' => 'btn btn-primary',
        ]) }}

    {!! Form::close() !!}

    {!! Form::open([
        'action'    => ['WindparksController@show', $windpark->id],
        'method'    => 'GET',
        'class'     => 'pull-right'
    ]) !!}

        {{-- {{ Form::hidden('_method', 'GET') }} --}}
        {{-- Cancel button --}}
        {{ Form::submit('Отказ', [
            'class' => 'btn btn-danger',
        ]) }}

    {!! Form::close() !!}
@endsection
