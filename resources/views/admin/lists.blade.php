@extends('/admin.layouts.master')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>

    <h2>Lists</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th>Name Surname</th>
                <th>Description</th>
                <th>Created Time</th>
                <th>Updated Time</th>
                <th>Deleted Time</th>
            </tr>
            </thead>
            <tbody>
            @foreach($lists as $list)
                <tr>
                    <td>{{ $list->namesurname }}</td>
                    <td>{{ $list->description }}</td>
                    <td>{{ $list->created_at }}</td>
                    <td>{{ $list->updated_at }}</td>
                    <td>
                        @if($list->deleted_at != null)
                            {{ $list->deleted_at }}
                        @else
                            None
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
