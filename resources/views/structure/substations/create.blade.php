@extends('index')

@section('crud')
    <h1>Добавяне на Подстанция</h1>
    <br>

    {!! Form::open([
        'action'    => 'SubstationsController@store',
        'method'    => 'POST'
    ]) !!}

        <div class="list-inline">
            <div class="row">
                {{-- Back button --}}
                <a href="/substations" class="list-inline-item btn btn-secondary">Назад</a>

                {{-- Submit button --}}
                {{ Form::submit('Запази', [
                    'class' => 'list-inline-item btn btn-primary',
                ]) }}
            </div>
        </div>

        {{-- Input fields  --}}
        <div class="form-group">
            {{ Form::label('title', 'Име') }}
            {{ Form::text('name', '',[
                'class'         => 'form-control',
                'placeholder'   => 'Подстанция'
            ]) }}
        </div>
        <div class="form-group">
            {{ Form::label('title', 'Описание') }}
            {{ Form::textarea('description', '',[
                'class'         => 'form-control',
                'id'            => 'article-ckeditor',
                'placeholder'   => 'Инфо за Подстанция'
            ]) }}
        </div>

    {!! Form::close() !!}
@endsection
