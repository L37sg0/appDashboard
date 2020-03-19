@extends('index')

@section('crud')
    @include('inc.messages')
    <h1>Подстанции</h1>
    <br>
    {{-- Button for adding new substation --}}
    <div class="list-inline">
        <div class="row">
            <a href="substations/create" class="list-inline-item btn btn-primary">Добави</a>

            {{-- {!! Form::open([
                'action'    => 'substationsController@search',
                'method'    => 'POST'
            ]) !!} --}}
                {{-- Input fields  --}}
                {{-- <div class="form-group">
                    {{ Form::label('title', 'Име') }}
                    {{ Form::text('name', '',[
                        'class'         => 'form-control',
                        'placeholder'   => 'Ветропарк'
                    ]) }}
                </div> --}}

                {{-- Submit button --}}
                {{-- {{ Form::submit('Търси', [
                    'class' => 'btn btn-primary',
                ]) }}

            {!! Form::close() !!} --}}
        </div>
    </div>

    {{-- List of all substations on page --}}
    @if(count($substations)>0)
        <table class="table table-hover">
            <thead>
            <th>Име</th>
            <th>Описание</th>
            </thead>
            <tbody>
        @foreach($substations as $substation)
            <tr>
            <th><a href="substations/{{$substation->id}}">{{$substation->name}}</a></th>
            <td>{{ $substation->description }}</td>
            </tr>
        @endforeach
            </tbody>
            <tfoot>
            <th>Име</th>
            <th>Описание</th>
            </tfoot>
        </table>
    @else
        <h2>Няма добавени Подстанции</h2>
    @endif

    {{-- Pagination buttons --}}
    {{$substations->links()}}

@endsection
