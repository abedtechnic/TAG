@extends('dashboard/dashlayout')

@section('dashcontent')
    <div class="container">
        <h2> اضافه قسم </h2>

<form action="{{ route('category.store') }}" method="post">
    @csrf

    {{-- <label for="category_id">اضافه القسم:</label>
    <select class="form-select" required name="name">
        <option selected>Select</option>
        @foreach ($categories1 as $brand)
            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
        @endforeach
    </select> --}}

    <label for="name">القسم:</label>
    <input type="text" name="name" id="name" required>


    <button type="submit">إضافة</button>
</form>
@endsection
