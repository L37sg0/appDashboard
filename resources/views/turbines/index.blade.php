@extends('index')

@section('crud')
    @include('inc.messages')
    <h1>Турбини</h1>
    <br>
    {{-- Button for adding new turbine --}}
    <div class="list-inline">
        <div class="row">
            <a href="turbines/create" class="list-inline-item btn btn-primary">Добави</a>

            {{-- {!! Form::open([
                'action'    => 'TurbinesController@search',
                'method'    => 'POST'
            ]) !!} --}}
                {{-- Input fields  --}}
                {{-- <div class="form-group">
                    {{ Form::label('title', 'Ветропарк') }}
                    {{ Form::text('name', '',[
                        'class'         => 'form-control',
                        'placeholder'   => 'Турбини'
                    ]) }}
                </div> --}}

                {{-- Submit button --}}
                {{-- {{ Form::submit('Търси', [
                    'class' => 'btn btn-primary',
                ]) }}

            {!! Form::close() !!} --}}
        </div>
    </div>

    {{-- List of all turbines on page --}}
    @if(count($turbines)>0)
        <table class="table table-hover">
            <thead>
            <th>Име</th>
            <th>Ветропарк</th>
            <th>Сериен Номер</th>
            <th>Производител</th>
            <th>Модел</th>
            <th>Мощност</th>
            <th>Собственик</th>
            </thead>
            <tbody>
        @foreach($turbines as $turbine)
            <tr>
            <th><a href="turbines/{{$turbine->id}}">{{$turbine->name}}</a></th>
            {{-- <p>{!! $turbine->content !!}</p> --}}
            <td>{{ $turbine->windpark($turbine->windpark_id)->name }}</td>
            <td>{{ $turbine->serial_number }}</td>
            <td>{{ $turbine->vendor }}</td>
            <td>{{ $turbine->model }}</td>
            <td>{{ $turbine->power }} MW</td>
            <td>{{ $turbine->owner }}</td>
            </tr>
        @endforeach
            </tbody>
            <tfoot>
            <th>Име</th>
            <th>Ветропарк</th>
            <th>Сериен Номер</th>
            <th>Производител</th>
            <th>Модел</th>
            <th>Мощност</th>
            <th>Собственик</th>
            </tfoot>
        </table>
    @else
        <h2>Няма добавени Турбини</h2>
    @endif

    {{-- Pagination buttons --}}
    {{$turbines->links()}}

@endsection
