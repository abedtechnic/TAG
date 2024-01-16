@extends('dashboard/dashlayout')

@section('dashcontent')
    <div class="container">
        <h2> انشاء  صور الصفحه الرئيسيه </h2>

        <form method="post" action="{{ route('counter.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">title </label>
                <input type="text" class="form-control"  id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="number">number</label>
                <input type="integer" class="form-control"  id="number" name="number" required>
            </div>
            {{-- <div class="form-group">
                <label for="image">الصورة</label>
                <input type="file" class="form-control-file" id="image" name="image" required>
            </div> --}}
            <br>
            <button type="submit" class="btn btn-primary">حفظ التعديلات</button>
        </form>

        <br>
<div class="row">
    <a
        class="btn btn-primary" href="{{ asset('counter/show')}}">عرض البيانات</a>

</div>
    </div>
@endsection
