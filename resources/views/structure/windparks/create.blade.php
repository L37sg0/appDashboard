@extends('index')

@section('crud')
    <h1>Добавяне на Ветропарк</h1>
    <br>

    {!! Form::open([
        'action'    => 'WindparksController@store',
        'method'    => 'POST'
    ]) !!}

        <div class="list-inline">
            <div class="row">
                {{-- Back button --}}
                <a href="/windparks" class="list-inline-item btn btn-secondary">Назад</a>

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

    {!! Form::close() !!}
@endsection
