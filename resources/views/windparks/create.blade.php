@extends('index')

@section('crud')
    <h1>Добавяне на Ветропарк</h1>

    {!! Form::open([
        'action'    => 'WindparksController@store',
        'method'    => 'POST'
    ]) !!}
        {{-- Input fields  --}}
        <div class="form-group">
            {{ Form::label('title', 'Име') }}
            {{ Form::text('name', '',[
                'class'         => 'form-control',
                'placeholder'   => 'Ветропарк'
            ]) }}
        </div>
        <div class="form-group">
            {{ Form::label('title', 'Собственик') }}
            {{ Form::text('owner', '',[
                'class'         => 'form-control',
                'placeholder'   => 'Име на Фирма'
            ]) }}
        </div>
        <div class="form-group">
            {{ Form::label('title', 'Описание') }}
            {{ Form::textarea('description', '',[
                'class'         => 'form-control',
                'id'            => 'article-ckeditor',
                'placeholder'   => 'Ветропарк с 1 турбина'
            ]) }}
        </div>

        {{-- Submit button --}}
        {{ Form::submit('Запази', [
            'class' => 'btn btn-primary',
        ]) }}

    {!! Form::close() !!}
@endsection
