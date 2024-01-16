@extends('dashboard/dashlayout')

@section('dashcontent')
<div class="container">
    <br>
<div class="row">

    <a
        class="btn btn-primary" href="{{ route('why.create') }}">انشاء جديد</a>

</div>
<table>
    <thead>
        <tr>
            <th>number</th>
            <th>title</th>
            <th>description</th>
            <th>update </th>
            <th>delete </th>

        </tr>
    </thead>
    @foreach ($data as $show)
    <tbody>
        <tr>
                    <td>{{ $show->id }}</td>
                    <td>{{ $show->title }}</td>
                    <td>{{ $show->description }}</td>

                    <td>
                        <a href="{{ route('why.edit', $show->id) }} " class="updatebtn" >edit</a>

                    </td>
                    <td>


                        <form action="{{ route('why.destroy', $show->id) }}" method="post">
                            @method('DELETE')
                            @csrf
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
</div>
@endsection
