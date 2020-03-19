@extends('index')

@section('crud')
    <h1>Промяна на Подстанция</h1>
    <div class="list-inline">
            <div class="row">
                {{-- Back button --}}
                {!! Form::open([
                    'action'    => ['SubstationsController@show', $substation->id],
                    'method'    => 'GET',
                    'class'     => 'pull-right'
                ]) !!}

                    {{-- Cancel button --}}
                    {{ Form::submit('Назад', [
                        'class' => 'list-inline-item btn btn-secondary',
                    ]) }}

                {!! Form::close() !!}

    {!! Form::open([
        'action'    => ['SubstationsController@update', $substation->id],
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
            {{ Form::text('name', $substation->name,[
                'class'         => 'form-control',
                'placeholder'   => 'Подстанция'
            ]) }}
        </div>
        <div class="form-group">
            {{ Form::label('title', 'Описание') }}
            {{ Form::textarea('description', $substation->description,[
                'class'         => 'form-control',
                'id'            => 'article-ckeditor',
                'placeholder'   => 'Инфо за Подстанция'
            ]) }}
        </div>
@endsection
