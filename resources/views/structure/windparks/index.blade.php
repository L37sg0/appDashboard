@extends('index')

@section('crud')
    @include('inc.messages')
    <h1>Ветропаркове</h1>
    <br>
    {{-- Button for adding new windpark --}}
    <div class="list-inline">
        <div class="row">
            <a href="windparks/create" class="list-inline-item btn btn-primary">Добави</a>

            {{-- {!! Form::open([
                'action'    => 'WindparksController@search',
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

    {{-- List of all windparks on page --}}
    @if(count($windparks)>0)
        <table class="table table-hover">
            <thead>
            <th>Име</th>
            <th>Собственик</th>
            <th>Описание</th>
            </thead>
            <tbody>
        @foreach($windparks as $windpark)
            <tr>
            <th><a href="windparks/{{$windpark->id}}">{{$windpark->name}}</a></th>
            {{-- <p>{!! $windpark->content !!}</p> --}}
            <td>{{ $windpark->owner }}</td>
            <td>{{ $windpark->description }}</td>
            </tr>
        @endforeach
            </tbody>
            <tfoot>
            <th>Име</th>
            <th>Собственик</th>
            <th>Описание</th>
            </tfoot>
        </table>
    @else
        <h2>Няма добавени ветропаркове</h2>
    @endif

    {{-- Pagination buttons --}}
    {{$windparks->links()}}

@endsection
