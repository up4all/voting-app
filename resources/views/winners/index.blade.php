@extends('app')

@section('content')
    <div class="row">
        <h1 class="highlighted">All Winners</h1>

        <p>These are all winners in the database. (Only visible for administrators.)</p>
    </div>
    <table>
        <thead>
            <tr>
                <td>Name, edit winner</td>
                <td>Category</td>
                <td>Rank</td>
                <td>&nbsp;</td>
            </tr>
        </thead>
        @forelse($winners as $winner)
            <tr>
                <td>{{ $winner->id }}</td>
                <td>{{ $winner->category }} </td>
                <td>{{ $winner->rank }}
                <td><a href="{{ route('winners.edit', [$winner->name]) }}">edit</a></td>
            </tr>
        @empty
            <div class="empty">No winners... yet!</div>
        @endforelse
    </table>
@stop