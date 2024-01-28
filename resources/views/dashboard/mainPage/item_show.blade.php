@extends('dashboard/dashlayout')

@section('dashcontent')
<div class="container">
    <br>
{{-- about table --}}

<div class="row">

    <a
        class="btn btn-primary" href="{{ route('items.create') }}">انشاء جديد</a>

</div>

<table>
    <thead>
        <tr>
            <th>number</th>
            <th>title</th>
            <th>sub_title</th>
            <th>description </th>
            <th>sub_description</th>
            <th>image_url</th>
            <th>category_id </th>
            <th>edit </th>
            <th>delete</th>

        </tr>
    </thead>
    @foreach ($data as $show)
    <tbody>
        <tr>
                    <td>{{ $show->id }}</td>
                    <td>{{ $show->title }}</td>
                    <td>{{ $show->sub_title }}</td>
                    <td>{{ $show->description }}</td>
                    <td>{{ $show->sub_description }}</td>
                    <td><img src="/public/images/mainpage/{{ $show->image_url }}" alt="image"></td>
                    <td>{{ $show->category_id }}</td>


                    <td>
                        <a href="{{ route('items.edit', $show->id) }} " class="updatebtn" >edit</a>

                    </td>


                    <td>


                        <form action="{{ route('items.destroy', $show->id) }}" method="post">
                            @csrf
                            @method('DELETE')

                            <button class="deletebtn" type="submit"
                            onclick="return confirm('هل انت متاكد من عملية الحذف ?')">
                            Delete
                        </button>
                    </form>
                    </td>
        </tr>
    </tbody>
    @endforeach
</table>
{{-- end about table --}}

</div>
@endsection
