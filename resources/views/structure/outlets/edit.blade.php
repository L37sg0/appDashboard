@extends('index')

@section('crud')
    <h1>Промяна на Извод {{ $outlet->name }}</h1>
    <div class="list-inline">
            <div class="row">
                {{-- Back button --}}
                {!! Form::open([
                    'action'    => ['OutletsController@show', $outlet->id],
                    'method'    => 'GET',
                    'class'     => 'pull-right'
                ]) !!}

                    {{-- Cancel button --}}
                    {{ Form::submit('Назад', [
                        'class' => 'list-inline-item btn btn-secondary',
                    ]) }}

                {!! Form::close() !!}

    {!! Form::open([
        'action'    => ['OutletsController@update', $outlet->id],
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
            {{ Form::text('name', $outlet->name,[
                'class'         => 'form-control',
                'placeholder'   => 'Извод'
            ]) }}
        </div>
        <div class="form-group">
            {{ Form::label('title', 'Подстанция') }}
            {{ Form::select('substation_id', $substations, $outlet->substation_id,[
                'class'         => 'form-control',
            ]) }}
        </div>
        <div class="form-group">
            {{ Form::label('title', 'Описание') }}
            {{ Form::textarea('description', $outlet->description,[
                'class'         => 'form-control',
                'id'            => 'article-ckeditor',
                'placeholder'   => 'Инфо за Извод'
            ]) }}
        </div>
@endsection
