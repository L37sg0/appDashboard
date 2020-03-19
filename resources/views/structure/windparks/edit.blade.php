@extends('index')

@section('crud')
    <h1>Промяна на Ветропарк</h1>
    <div class="list-inline">
            <div class="row">
                {{-- Back button --}}
                {!! Form::open([
                    'action'    => ['WindparksController@show', $windpark->id],
                    'method'    => 'GET',
                    'class'     => 'pull-right'
                ]) !!}

                    {{-- Cancel button --}}
                    {{ Form::submit('Назад', [
                        'class' => 'list-inline-item btn btn-secondary',
                    ]) }}

                {!! Form::close() !!}

    {!! Form::open([
        'action'    => ['WindparksController@update', $windpark->id],
        'method'    => 'POST'
    ]) !!}
                {{-- Hidden method --}}
                {{ Form::hidden('_method', 'PUT') }}

                {{-- Submit button --}}
                {{ Form::submit('Запази', [
                    'class' => 'list-inline-item btn btn-primary',
                ]) }}
            </div>
        </div>
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
@endsection
