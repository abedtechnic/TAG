@extends('dashboard/dashlayout')

@section('dashcontent')
<div class="container">
    <br>
{{-- about table --}}

<div class="row">

    <a
        class="btn btn-primary" href="{{ route('product.create') }}">انشاء جديد</a>

</div>

<table>
    <thead>
        <tr>
            <th>number</th>
            <th>product_name</th>
            <th>product_description</th>
            <th>product_categories_id</th>
            <th>image </th>
            {{-- <th>edit </th>
            <th>delete</th> --}}

        </tr>
    </thead>
    @foreach ($data as $show)
    <tbody>
        <tr>
                    <td>{{ $show->id }}</td>
                    <td>{{ $show->product_name }}</td>
                    <td>{{ $show->product_description }}</td>
                    <td>{{ $show->product_categories_id }}</td>
                    <td><img src="/public/images/product/{{ $show->image }}" alt="image"></td>



                    {{-- <td>
                        <a href="{{ route('product.edit', $show->id) }} " class="updatebtn" >edit</a>

                    </td>


                    <td>


                        <form action="{{ route('ProductCategory.destroy', $show->id) }}" method="post">
                            @csrf
                            @method('DELETE')

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
{{-- end about table --}}

</div>
@endsection
