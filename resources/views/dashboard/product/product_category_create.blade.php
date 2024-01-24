@extends('dashboard/dashlayout')

@section('dashcontent')
    <div class="container">
        <h2> اضافه قسم </h2>

<form action="{{ route('ProductCategory.store') }}" method="post">
    @csrf

    {{-- <label for="category_id">اضافه القسم:</label>
    <select class="form-select" required name="name">
        <option selected>Select</option>
        @foreach ($categories1 as $brand)
            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
        @endforeach
    </select> --}}

    <label for="product_title">القسم الجديد:</label>
    <input type="text" name="product_title" id="product_title" required>

  

    <button type="submit">إضافة</button>
</form>
@endsection
