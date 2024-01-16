@extends('dashboard/dashlayout')

@section('dashcontent')
<div class="container">
    <br>
{{-- about table --}}

<div class="row">

    <a
        class="btn btn-primary" href="{{ route('counter.create') }}">انشاء جديد</a>

</div>

<table>
    <thead>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>number</th>
            <th>edit </th>
            <th>delete</th>

        </tr>
    </thead>
    @foreach ($data as $show)
    <tbody>
        <tr>
                    <td>{{ $show->id }}</td>
                    <td>{{ $show->title }}</td>
                    <td>{{ $show->number }}</td>



                    <td>
                        <a href="{{ route('counter.edit', $show->id) }} " class="updatebtn" >edit</a>

                    </td>


                    <td>


                        <form action="{{ route('counter.destroy', $show->id) }}" method="post">
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
