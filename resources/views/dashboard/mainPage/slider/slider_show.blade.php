@extends('dashboard/dashlayout')

@section('dashcontent')
<div class="container">
    <br>
{{-- about table --}}

<div class="row">

    <a
        class="btn btn-primary" href="{{ route('slider.create') }}">انشاء جديد</a>

</div>

<table>
    <thead>
        <tr>
            <th>number</th>
            <th>main_title</th>
            <th>description</th>
            <th>image </th>
            <th>edit </th>
            <th>delete</th>

        </tr>
    </thead>
    @foreach ($data as $show)
    <tbody>
        <tr>
                    <td>{{ $show->id }}</td>
                    <td>{{ $show->main_title }}</td>
                    <td>{{ $show->description }}</td>
                    <td>{{ $show->image }}</td>


                    <td>
                        <a href="{{ route('slider.edit', $show->id) }} " class="updatebtn" >edit</a>

                    </td>


                    <td>


                        <form action="{{ route('slider.destroy', $show->id) }}" method="post">
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
