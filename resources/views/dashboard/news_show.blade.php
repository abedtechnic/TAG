@extends('dashboard/dashlayout')

@section('dashcontent')
<div class="container">
<br>
<div class="row">
    <a
        class="btn btn-primary" href="{{ route('news.create') }}">انشاء خبر جديد</a>

</div>
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>Title</th>
            <th>Image URL</th>
            {{-- <th>Introduction</th> --}}
            <th>ContentOne</th>
            <th>ContentTow</th>
            <th>update</th>
            <th>delete</th>

        </tr>
    </thead>
    @foreach ($data as $show)
    <tbody>
        <tr>

                    <td>{{ $show->id }}</td>
                    <td>{{ $show->title }}</td>
                    <td><img src="/public/images/news/{{ $show->image_url }}" alt="image"></td>
                    {{-- <td>{{ $show->introduction}}</td> --}}
                    <td>{{ $show->contentone }}</td>
                    <td>{{ $show->contenttow }}</td>
                    <td>
                        <a href="{{ route('news.edit', $show->id)}} " class="updatebtn" >edit</a>

                    </td>
                    <td>
                        {{-- <a class="dropdown-item" href="{{ route('why.edit', $show->id) }}">
                            <i class="bx bx-edit-alt me-1"></i>
                            Edit
                        </a> --}}

                        <form action="{{ route('news.destroy', $show->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="deletebtn" type="submit"
                            onclick="return confirm('هل انت متاكد من عملية الحذف ?')">
                            Delete
                        </button>
                            {{-- <button type="submit" class="deletebtn"  >delete</button> --}}
                        {{-- <a href="{{url('why.destroy' , $show->id)  }}" style="color: white; background: rgb(199, 8, 8); padding:8px">delete</a> --}}
                    </form>
                    </td>
        </tr>
    </tbody>
    @endforeach
</table>
</div>
@endsection
