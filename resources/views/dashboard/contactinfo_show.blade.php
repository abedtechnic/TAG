@extends('dashboard/dashlayout')

@section('dashcontent')
<div class="container">
    <br>

<table>
    <thead>
        <tr>
            <th>number</th>
            <th>name</th>
            <th>email</th>
            <th>number </th>
            <th>message </th>
            <th>Action</th>

        </tr>
    </thead>
    @foreach ($data as $show)
    <tbody>
        <tr>
                    <td>{{ $show->id }}</td>
                    <td>{{ $show->name }}</td>
                    <td>{{ $show->email }}</td>
                    <td>{{ $show->number }}</td>
                    <td>{{ $show->Message }}</td>



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
