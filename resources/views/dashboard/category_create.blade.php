@extends('dashboard/dashlayout')

@section('dashcontent')
    <div class="container">
        <h2> اضافه قسم </h2>

<form action="{{ route('category.store') }}" method="post">
    @csrf

    <label for="category_id">القسم:</label>
    <select name="category_id" id="category_id">
        {{-- @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach --}}
    </select>

    <label for="name">القسم:</label>
    <input type="text" name="name" id="name" required>


    <button type="submit">إضافة</button>
</form>
@endsection
