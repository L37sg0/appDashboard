@extends('index')

@section('crud')
    <h1>Добавяне на Турбина</h1>
    <br>

    {!! Form::open([
        'action'    => 'TurbinesController@store',
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
                'placeholder'   => 'Турбина'
            ]) }}
        </div>
        <div class="form-group">
            {{ Form::label('title', 'Ветропарк') }}
            {{ Form::select('windpark_id', $windparks, '1',[
                'class'         => 'form-control',
            ]) }}
        </div>
        <div class="form-group">
            {{ Form::label('title', 'Сериен Номер') }}
            {{ Form::text('serial_number', '',[
                'class'         => 'form-control',
                'placeholder'   => '--'
            ]) }}
        </div>
        <div class="form-group">
            {{ Form::label('title', 'Производител') }}
            {{ Form::text('vendor', '',[
                'class'         => 'form-control',
                'placeholder'   => '--'
            ]) }}
        </div>
        <div class="form-group">
            {{ Form::label('title', 'Модел') }}
            {{ Form::text('model', '',[
                'class'         => 'form-control',
                'placeholder'   => '--'
            ]) }}
        </div>
        <div class="form-group">
            {{ Form::label('title', 'Мощност') }}
            {{ Form::text('power', '',[
                'class'         => 'form-control',
                'placeholder'   => '--'
            ]) }}
        </div>
        <div class="form-group">
            {{ Form::label('title', 'Собственик') }}
            {{ Form::text('owner', '',[
                'class'         => 'form-control',
                'placeholder'   => '--'
            ]) }}
        </div>
        <div class="form-group">
            {{ Form::label('title', 'Кутия Производител') }}
            {{ Form::text('gearbox_vendor', '--',[
                'class'         => 'form-control',
                'placeholder'   => '--'
            ]) }}
        </div>
        <div class="form-group">
            {{ Form::label('title', 'Кутия Номер') }}
            {{ Form::text('gearbox_number', '--',[
                'class'         => 'form-control',
                'placeholder'   => '--'
            ]) }}
        </div>
        <div class="form-group">
            {{ Form::label('title', 'Хидравлика Производител') }}
            {{ Form::text('hydraulics_vendor', '--',[
                'class'         => 'form-control',
                'placeholder'   => '--'
            ]) }}
        </div>
        <div class="form-group">
            {{ Form::label('title', 'Хидравлика Номер') }}
            {{ Form::text('hydraulics_number', '--',[
                'class'         => 'form-control',
                'placeholder'   => '--'
            ]) }}
        </div>
        <div class="form-group">
            {{ Form::label('title', 'Трансформатор Производител') }}
            {{ Form::text('transformer_vendor', '--',[
                'class'         => 'form-control',
                'placeholder'   => '--'
            ]) }}
        </div>
        <div class="form-group">
            {{ Form::label('title', 'Трансформатор Номер') }}
            {{ Form::text('transformer_number', '--',[
                'class'         => 'form-control',
                'placeholder'   => '--'
            ]) }}
        </div>

    {!! Form::close() !!}
@endsection
