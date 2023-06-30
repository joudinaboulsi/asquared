@extends('cms.layouts.dashboard')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

    <!-- Responsive Table -->
    <div class="card">
        <h5 class="card-header">Portfolio</h5>
        <div class="card-header">
            <a href="{{route('portfolio.create')}}" class="btn btn-outline-primary">Add New</a>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>

                        <th>Image</th>

                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($portfolio as $p)
                    <tr>
                        <td>{{ $p->title }}</td>


                        <td>
                            @if ($p->image)
                            <img src="../assets/portfolio/{{ $p->image }}" width="150">
                            @endif
                        </td>

                        <td style="display:flex;">
                            <a class="btn btn-outline-dark" href="{{route('portfolio.edit',$p->id)}}">Edit</a>


                            <form action="{{route('portfolio.delete',$p->id)}}" method="post">

                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-outline-danger"
                                    style=" margin:0 5px">Delete</button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Responsive Table -->
</div>
@endsection