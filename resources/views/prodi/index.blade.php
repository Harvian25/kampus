@extends('layout.app')
@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card bg-dark p-4 mb-4 text-light">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    Informatika
                </div>
                <ol="list-group list-group-numbered">
                    @foreach ($informatika_find as $item)
                        <li class="list-group-item">
                            {{ $item->nama}}
                        </li>
                    @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
