@extends('layouts.master')
@section('content')
    <div class="my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-bottom border-gray pb-2 mb-0">
            My To-Do List
        </h6>
        <br/>
        @if($item == null)
            <form action="{{ route('additem_action') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-label-group">
                    <input type="text" id="inputDescription" name="inputDescription" class="form-control" placeholder="Write Your Task!" required autofocus>
                </div>
                <small class="d-block text-left mt-3">
                    <strong>
                        <input type="submit" class="btn btn-sm btn-success" value="Save">
                    </strong>
                </small>
            </form>
        @else
            <form action="{{ route('edititem_action') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-label-group">
                    <input type="hidden" id="inputID" name="inputID" value="{{ $item->id }}">
                    <input type="text" id="inputDescription" name="inputDescription" class="form-control" value="{{ $item->description }}" required autofocus>
                </div>
                <small class="d-block text-left mt-3">
                    <strong>
                        <input type="submit" class="btn btn-sm btn-success" value="Save">
                    </strong>
                </small>
            </form>
        @endif
    </div>
@endsection
