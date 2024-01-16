@extends('dashboard/dashlayout')

@section('dashcontent')
<div class="container">
    <br>

<table>
    <thead>
        <tr>
            <th>number</th>
            <th>title_desc</th>
            <th>company_title</th>
            <th>company_num </th>
            <th>company_email </th>
            <th>Action</th>

        </tr>
    </thead>
    @foreach ($data as $show)
    <tbody>
        <tr>
                    <td>{{ $show->id }}</td>
                    <td>{{ $show->title_desc }}</td>
                    <td>{{ $show->company_title }}</td>
                    <td>{{ $show->company_num }}</td>
                    <td>{{ $show->company_email }}</td>

                    <td>
                        <a href="{{ route('contact.edit', $show->id) }} " class="updatebtn" >edit</a>

                    </td>


                    {{-- <td>


                        <form action="{{ route('why.destroy', $show->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="deletebtn" type="submit"
                            onclick="return confirm('هل انت متاكد من عملية الحذف ?')">
                            Delete
                        </button>
                    </form>
                    </td> --}}
        </tr>
    </tbody>
    @endforeach
</table>
</div>
@endsection
