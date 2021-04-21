@extends('layouts.master')
@section('content')
    <div class="my-3 p-3 bg-white rounded box-shadow">
    <h6 class="border-bottom border-gray pb-2 mb-0">
        My To-Do List
        &nbsp;&nbsp;&nbsp;
        <a href="{{ route('additem') }}" type="button" class="btn btn-sm btn-success">+ Add New</a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="{{ route('home') }}" type="button" class="btn btn-sm btn-primary">Show All</a>
        &nbsp;&nbsp;&nbsp;
        <a href="{{ route('creating_asc') }}" type="button" class="btn btn-sm btn-warning">Order By Creating ↑</a>
        <a href="{{ route('creating_desc') }}" type="button" class="btn btn-sm btn-warning">Order By Creating ↓</a>
        &nbsp;&nbsp;&nbsp;
        <a href="{{ route('updating_asc') }}" type="button" class="btn btn-sm btn-warning">Order By Updating ↑</a>
        <a href="{{ route('updating_desc') }}" type="button" class="btn btn-sm btn-warning">Order By Updating ↓</a>
    </h6>
    @foreach($items as $item)
        <div class="media text-muted pt-2">
            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <div class="row">
                        <div class="col-10"><strong>{{ $item->description }}</strong></div>
                        <div class="col-1 text-right"><form ACTION="{{ route('edititem') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" id="inputID" name="inputID" value="{{ $item->id }}">
                                <input type="submit" class="btn btn-sm btn-success" value="Edit">
                            </form></div>
                        <div class="col-1 text-left"><form ACTION="{{ route('deleteitem') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" id="inputID" name="inputID" value="{{ $item->id }}">
                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                            </form></div>
                    </div>
                <span class="text-gray-dark">Oluşturma Tarihi : {{ $item->created_at }}@if($item->updated_at != null)   -   Düzenlenme Tarihi : {{ $item->updated_at }}@endif</span>
            </div>
        </div>
    @endforeach
    <small class="d-block text-left mt-3">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
               {{ $items->links() }}
            </ul>
        </nav>
    </small>
</div>
    @endsection
