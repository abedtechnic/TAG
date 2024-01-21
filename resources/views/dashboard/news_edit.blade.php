@extends('dashboard/dashlayout')

@section('dashcontent')
    <div class="container">
        <h2>إضافة خبر جديد</h2>
        <form method="post" action="{{ route('news.store', $editnews->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">العنوان</label>
                <input type="text" class="form-control" value="{{ $editnews ->title }}" id="title" name="title" required>
            </div>
            {{-- <div class="form-group">
                <label for="introduction">نص فوق الصوره</label>
                <input type="text" class="form-control"  value="{{ $editnews ->introduction }}" id="introduction" name="introduction" required>
            </div> --}}
            <div class="form-group">
                <label for="contentone">الوصف الاول</label>
                <textarea class="form-control" value="{{ $editnews ->contentone }}" id="contentone" name="contentone" required></textarea>
            </div>
            <div class="form-group">
                <label for="contenttow">الوصف الثاني</label>
                <textarea class="form-control" value="{{ $editnews ->contenttow }}" id="contenttow" name="contenttow" required></textarea>
            </div>
            <div class="form-group">
                <label for="image_url">الصورة</label>
                <input type="file" class="form-control-file" value="{{ $editnews ->image_url }}" id="image_url" name="image_url">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">حفظ</button>
          </form>
          <br>
          <div class="row">
            <a  class="btn btn-primary" href="{{ asset('news/show')}}">عرض البيانات</a>

        </div>
    </div>
@endsection
