@extends('layout')

@section('content')
    <div class="container">
        <h2>إضافة منتج جديد</h2>
        <form method="post" action="{{ route('why.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">العنوان</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="description">الوصف</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>
            {{-- <div class="form-group">
                <label for="image">الصورة</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div> --}}
            <button type="
            submit" class="btn btn-primary">حفظ</button>
        </form>
    </div>
@endsection
