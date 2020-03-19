@extends('index')

@section('crud')
    @include('inc.messages')
    <h1>Изводи</h1>
    <br>
    {{-- Button for adding new outlet --}}
    <div class="list-inline">
        <div class="row">
            <a href="outlets/create" class="list-inline-item btn btn-primary">Добави</a>

            {{-- {!! Form::open([
                'action'    => 'outletsController@search',
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

    {{-- List of all outlets on page --}}
    @if(count($outlets)>0)
        <table class="table table-hover">
            <thead>
            <th>Име</th>
            <th>Подстанция</th>
            <th>Описание</th>
            </thead>
            <tbody>
        @foreach($outlets as $outlet)
            <tr>
            <th><a href="outlets/{{$outlet->id}}">{{$outlet->name}}</a></th>
            <td>{{ $outlet->substation->name }}</td>
            <td>{{ $outlet->description }}</td>
            </tr>
        @endforeach
            </tbody>
            <tfoot>
            <th>Име</th>
            <th>Подстанция</th>
            <th>Описание</th>
            </tfoot>
        </table>
    @else
        <h2>Няма добавени Изводи</h2>
    @endif

    {{-- Pagination buttons --}}
    {{$outlets->links()}}

@endsection
