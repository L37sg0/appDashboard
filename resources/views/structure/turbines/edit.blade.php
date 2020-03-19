@extends('index')

@section('crud')
    <h1>Промяна на Турбина</h1>
    <div class="list-inline">
            <div class="row">
                {{-- Back button --}}
                {!! Form::open([
                    'action'    => ['TurbinesController@show', $turbine->id],
                    'method'    => 'GET',
                    'class'     => 'pull-right'
                ]) !!}

                    {{-- Cancel button --}}
                    {{ Form::submit('Назад', [
                        'class' => 'list-inline-item btn btn-secondary',
                    ]) }}

                {!! Form::close() !!}

    {!! Form::open([
        'action'    => ['TurbinesController@update', $turbine->id],
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
            {{ Form::text('name', $turbine->name,[
                'class'         => 'form-control',
                'placeholder'   => 'Турбина'
            ]) }}
        </div>
        <div class="form-group">
            {{ Form::label('title', 'Ветропарк') }}
            {{ Form::select('windpark_id', $windparks, $turbine->windpark_id,[
                'class'         => 'form-control',
            ]) }}
        </div>
        <div class="form-group">
            {{ Form::label('title', 'Сериен Номер') }}
            {{ Form::text('serial_number', $turbine->serial_number,[
                'class'         => 'form-control',
                'placeholder'   => '--'
            ]) }}
        </div>
        <div class="form-group">
            {{ Form::label('title', 'Производител') }}
            {{ Form::text('vendor', $turbine->vendor,[
                'class'         => 'form-control',
                'placeholder'   => '--'
            ]) }}
        </div>
        <div class="form-group">
            {{ Form::label('title', 'Модел') }}
            {{ Form::text('model', $turbine->model,[
                'class'         => 'form-control',
                'placeholder'   => '--'
            ]) }}
        </div>
        <div class="form-group">
            {{ Form::label('title', 'Мощност') }}
            {{ Form::text('power', $turbine->power,[
                'class'         => 'form-control',
                'placeholder'   => '--'
            ]) }}
        </div>
        <div class="form-group">
            {{ Form::label('title', 'Собственик') }}
            {{ Form::text('owner', $turbine->owner,[
                'class'         => 'form-control',
                'placeholder'   => '--'
            ]) }}
        </div>
        <div class="form-group">
            {{ Form::label('title', 'Кутия Производител') }}
            {{ Form::text('gearbox_vendor', $turbine->gearbox_vendor,[
                'class'         => 'form-control',
                'placeholder'   => '--'
            ]) }}
        </div>
        <div class="form-group">
            {{ Form::label('title', 'Кутия Номер') }}
            {{ Form::text('gearbox_number', $turbine->gearbox_number,[
                'class'         => 'form-control',
                'placeholder'   => '--'
            ]) }}
        </div>
        <div class="form-group">
            {{ Form::label('title', 'Хидравлика Производител') }}
            {{ Form::text('hydraulics_vendor', $turbine->hydraulics_vendor,[
                'class'         => 'form-control',
                'placeholder'   => '--'
            ]) }}
        </div>
        <div class="form-group">
            {{ Form::label('title', 'Хидравлика Номер') }}
            {{ Form::text('hydraulics_number', $turbine->hydraulics_number,[
                'class'         => 'form-control',
                'placeholder'   => '--'
            ]) }}
        </div>
        <div class="form-group">
            {{ Form::label('title', 'Трансформатор Производител') }}
            {{ Form::text('transformer_vendor', $turbine->transformer_vendor,[
                'class'         => 'form-control',
                'placeholder'   => '--'
            ]) }}
        </div>
        <div class="form-group">
            {{ Form::label('title', 'Трансформатор Номер') }}
            {{ Form::text('transformer_number', $turbine->transformer_number,[
                'class'         => 'form-control',
                'placeholder'   => '--'
            ]) }}
        </div>
@endsection
