@extends('dashboard/dashlayout')

@section('dashcontent')
<div class="container">
    <br>
{{-- about table --}}

<div class="row">

    <a
        class="btn btn-primary" href="{{ route('about.create') }}">انشاء جديد</a>

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
                        <a href="{{ route('about.edit', $show->id) }} " class="updatebtn" >edit</a>

                    </td>


                    <td>


                        <form action="{{ route('about.destroy', $show->id) }}" method="post">
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

{{-- card table --}}
{{-- <table>
    <thead>
        <tr>
            <th>number</th>
            <th>main_title</th>
            <th>title</th>
            <th>card_description </th>
            <th>card_image </th>
            <th>edit</th>
            <th>delete</th>

        </tr>
    </thead>
    @foreach ($data as $show)
    <tbody>
        <tr>
                    <td>{{ $show->id }}</td>
                    <td>{{ $show->main_title }}</td>
                    <td>{{ $show->title }}</td>
                    <td>{{ $show->card_description }}</td>
                    <td>{{ $show->card_image }}</td>

                    <td>
                        <a href="{{ route('contact.edit', $show->id) }} " class="updatebtn" >edit</a>

                    </td>


                    <td>


                        <form action="{{ route('card.destroy', $show->id) }}" method="post">
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
</table>--}}
{{-- end card table --}}
</div>
@endsection
