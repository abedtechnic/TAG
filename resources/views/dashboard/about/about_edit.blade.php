@extends('dashboard/dashlayout')

@section('dashcontent')
    <div class="container">
        <h2> انشاء من نحن </h2>

        <form method="post" action="{{ route('about.store', $editabout->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="main_title">main_title </label>
                <input type="text" class="form-control"  value="{{ $editabout->main_title }}" id="main_title" name="main_title" required>
            </div>
            <div class="form-group">
                <label for="description">description</label>
                <input type="text" class="form-control"  value="{{ $editabout->description }}" id="description" name="description" required>
            </div>
            <div class="form-group">
                <label for="image">الصورة</label>
                <input type="file" class="form-control-file" value="{{ $editabout->image }}"  id="image" name="image">
            </div>
            {{-- ////////////////////////////////////////////////// --}}
            {{-- <div class="form-group">
                <label for="company_num">main_title</label>
                <input type="text" class="form-control" value="{{ $editabout->title_desc }}"  id="main_title" name="main_title" required>
            </div>
            <div class="form-group">
                <label for="company_email">title</label>
                <input type="text" class="form-control"  value="{{ $editabout->title_desc }}" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="company_email">card_description</label>
                <input type="text" class="form-control"  value="{{ $editabout->title_desc }}"  id="card_description" name="card_description" required>
            </div>
             <div class="form-group">
                <label for="card_image">الصورة</label>
                <input type="file" class="form-control-file" value="{{ $editabout->title_desc }}" id="card_image" name="card_image">
            </div> --}}
            <button type="submit" class="btn btn-primary">حفظ التعديلات</button>
        </form>

        <br>
<div class="row">
    <a
        class="btn btn-primary" href="{{ asset('about/show')}}">عرض البيانات</a>

</div>
    </div>
@endsection
