
@extends('dashboard/dashlayout')

@section('dashcontent')
    <div class="container">
        <h2> اضافه قسم </h2>

<form action="{{ route('items.store') }}" method="post"  enctype="multipart/form-data">
    @csrf


    {{-- <label for="category_id">القسم:</label>
    <select name="category_id" id="category_id">
        @foreach($categories1 as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select> --}}
    <label for="category_id">اضافه القسم:</label>
    <select class="form-select" required name="name">
        <option selected>Select</option>
        @foreach ($categories1 as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>

    <label for="title">أدخل رقم القسم:</label>
    <input type="text" name="category_id" id="title" required>

    <label for="title">العنوان:</label>
    <input type="text" name="title" id="title" >

    <label for="sub_title">العنوان الفرعي:</label>
    <input type="text" name="sub_title" id="sub_title" >

    <label for="description">الوصف:</label>
    <textarea name="description" id="description" ></textarea>

    <label for="sub_description">الوصف الفرعي:</label>
    <textarea name="sub_description" id="sub_description" ></textarea>

    <div class="form-group">
        <label for="image_url">الصورة</label>
        <input type="file" class="form-control-file" id="image_url" name="image_url" required>
    </div>
<br>
    <button type="submit" class="btn btn-primary">إضافة</button>
</form>

@endsection
