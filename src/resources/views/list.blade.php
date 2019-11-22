@extends('index')

@section('content')

    <div class="page-header">
        <a href=""><h2 >List users</h2></a>
    </div>
    <form method="POST" action=""">
        <div class="form-group row navbar-right col-lg-12">
            <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">

            <div class="col-sm-4">
                <input id="dupes" name="dupes" type="checkbox" @if ($dupes) checked @endif>
                <label for="dupes">Duplicates</label>
            </div>
            <div class="col-sm-4">
                <input type="text" id="terms" name="terms" class="form-control" placeholder="Terms" value="{{ $terms }}">
                <label for="terms">First name</label>
            </div>
            <div class="col-sm-4">
                <input type="text" id="limit" name="limit" class="form-control" placeholder="Limit" value="{{ $limit }}">
                <label for="limit">Limit</label>
            </div>
            <div class="col-sm-2">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </div>

    </form>
    <table class="table">
        <thead>
            <tr><th>Firstname</th>
                <th>Lastname</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr class="">
                <td>{{ $user->firstname }}</td>
                <td>{{ $user->lastname }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    @if ($paginator->lastPage() > 1)
        <ul class="pagination">
            <li class="{{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
                <a href="{{ $paginator->url(1) }}">Previous</a>
            </li>
            @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                <li class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                    <a href="{{ $paginator->url($i) }}">{{ $i }}</a>
                </li>
            @endfor
            <li class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
                <a href="{{ $paginator->url($paginator->currentPage()+1) }}" >Next</a>
            </li>
        </ul>
    @endif
@endsection
