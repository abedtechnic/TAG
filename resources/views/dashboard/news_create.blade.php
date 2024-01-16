@extends('dashboard/dashlayout')

@section('dashcontent')
    <div class="container">
        {{-- <h2>إضافة خبر جديد</h2>
        <form method="post" action="{{ route('news.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">العنوان</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="introduction">نص فوق الصوره</label>
                <input type="text" class="form-control" id="introduction" name="introduction" required>
            </div>
            <div class="form-group">
                <label for="contentone">الوصف الاول</label>
                <textarea class="form-control" id="contentone" name="contentone" required></textarea>
            </div>
            <div class="form-group">
                <label for="contenttow">الوصف الثاني</label>
                <textarea class="form-control" id="contenttow" name="contenttow" required></textarea>
            </div>
            <div class="form-group">
                <label for="image_url">الصورة</label>
                <input type="file" class="form-control-file" id="image_url" name="image_url">
            </div>
            <button type="submit" class="btn btn-primary">حفظ</button>



        </form> --}}
        <div class="row">
            <a
                class="btn btn-primary" href="{{ route('news.create') }}">Button</a>

        </div>
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Image URL</th>
                    <th>Introduction</th>
                    <th>Content Tow</th>
                    <th>Content One</th>
                </tr>
            </thead>
            <tbody>
                <!-- استخدم PHP لتكرار هذا الجزء وعرض البيانات -->
                <tr>
                    <td>قيمة العنوان</td>
                    <td>قيمة عنوان الصورة</td>
                    <td>قيمة المقدمة</td>
                    <td>قيمة المحتوى 2</td>
                    <td>قيمة المحتوى 1</td>
                    {{-- <td>{{ $show->id }}</td>
                    <td>{{ $show->title }}</td>
                    <td><img src="{{asset('images/products/' . $show->image_url)}}" alt=""></td>
                    <td>{{ $show->contentone }}</td>
                    <td>{{ $show->contentTow }}</td> --}}
                </tr>
                <!-- يمكنك تكرار الصفوف مستندًا إلى عدد السجلات في قاعدة البيانات -->
            </tbody>
        </table>
    </div>
@endsection
