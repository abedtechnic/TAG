@extends('dashboard/dashlayout')

@section('dashcontent')
    <div class="container">
        <h2> انشاء  صور الصفحه الرئيسيه </h2>

        <form method="post" action="{{ route('slider.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="main_title">main_title </label>
                <input type="text" class="form-control"  id="main_title" name="main_title" required>
            </div>
            <div class="form-group">
                <label for="description">description</label>
                <input type="text" class="form-control"  id="description" name="description" required>
            </div>
            <div class="form-group">
                <label for="image">الصورة</label>
                <input type="file" class="form-control-file" id="image" name="image" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">حفظ التعديلات</button>
        </form>

        <br>
<div class="row">
    <a
        class="btn btn-primary" href="{{ asset('index/show')}}">عرض البيانات</a>

</div>
    </div>
@endsection
