@extends('cms.layouts.dashboard')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Edit</h5>
                <div class="card-body">
                    <form action="{{route('clients.update',$client->id)}}" method="POST" enctype="multipart/form-data">

                        @csrf
                        @method('post')
                        <div class="mb-3 mt-3">
                            <label for="defaultFormControlInput" class="form-label">Title</label>
                            <input type="text" class="form-control" id="defaultFormControlInput" name="title"
                                aria-describedby="defaultFormControlHelp" value="{{$client->title}}" />

                        </div>
                        <div class="mb-3 mt-3">
                           @if ($client->image)
                            <img src="../assets/clients/{{ $client->image }}" width="150">
                            @endif
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="defaultFormControlInput" class="form-label">Image</label>
                            <input type="file" class="form-control" id="file" name="image" />

                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection