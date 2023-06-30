@extends('cms.layouts.dashboard')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

    <!-- Responsive Table -->
    <div class="card">
        <h5 class="card-header">Categories</h5>
        <div class="card-header">
            <a href="{{route('categories.create')}}" class="btn btn-outline-primary">Add New</a>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>

                        <th>Image</th>
<th>pdf</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->title }}</td>


                        <td>
                            @if ($category->image)
                            <img src="../assets/categories/{{ $category->image }}" width="150">
                            @endif
                        </td>

                        <td>
                            @if ($category->pdf)
                         <embed src="../assets/pdf/{{$category->pdf }}" type="application/pdf" width="150" height="150">
                            @endif
                        </td>

                        <td style="display:flex;">
                            <a class="btn btn-outline-dark" href="{{route('categories.edit',$category->id)}}">Edit</a>


                            <form action="{{route('categories.delete',$category->id)}}" method="post">

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