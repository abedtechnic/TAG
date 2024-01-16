@extends('dashboard/dashlayout')

@section('dashcontent')
    <div class="container">
        <h2> انشاء من نحن </h2>

        <form method="post" action="{{ route('index.store', $editCounter->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">title </label>
                <input type="text" class="form-control"  value="{{ $editCounter->title }}" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="number">number</label>
                <input type="text" class="form-control"  value="{{ $editCounter->number }}" id="number" name="number" required>
            </div>
            {{-- <div class="form-group">
                <label for="image">الصورة</label>
                <input type="file" class="form-control-file" value="{{ $editslider->image }}"  id="image" name="image">
            </div> --}}
            {{-- ////////////////////////////////////////////////// --}}

            <button type="submit" class="btn btn-primary">حفظ التعديلات</button>
        </form>

        <br>
<div class="row">
    <a
        class="btn btn-primary" href="{{ asset('counter/show')}}">عرض البيانات</a>

</div>
    </div>
@endsection
