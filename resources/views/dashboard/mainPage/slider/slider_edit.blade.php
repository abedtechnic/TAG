@extends('dashboard/dashlayout')

@section('dashcontent')
    <div class="container">
        <h2> انشاء من نحن </h2>

        <form method="post" action="{{ route('index.store', $editslider->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="main_title">main_title </label>
                <input type="text" class="form-control"  value="{{ $editslider->main_title }}" id="main_title" name="main_title" required>
            </div>
            <div class="form-group">
                <label for="description">description</label>
                <input type="text" class="form-control"  value="{{ $editslider->description }}" id="description" name="description" required>
            </div>
            <div class="form-group">
                <label for="image">الصورة</label>
                <input type="file" class="form-control-file" value="{{ $editslider->image }}"  id="image" name="image">
            </div>
            {{-- ////////////////////////////////////////////////// --}}

            <button type="submit" class="btn btn-primary">حفظ التعديلات</button>
        </form>

        <br>
<div class="row">
    <a
        class="btn btn-primary" href="{{ asset('index/show')}}">عرض البيانات</a>

</div>
    </div>
@endsection
