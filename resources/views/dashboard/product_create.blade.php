@extends('dashboard/dashlayout')

@section('dashcontent')
    <div class="container">
        <h2>إضافة منتج جديد</h2>
        <form method="post" action="{{ route('product.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="maintitle">العنوان الرئيسي</label>
                <input type="text" class="form-control" id="title" name="maintitle" required>
            </div>
            <div class="form-group">
                <label for="secondarytitle">تفاصيل العنوان الرئيسي</label>
                <input type="text" class="form-control" id="secondarytitle" name="secondarytitle" required>
            </div>
            <div class="form-group">
                <label for="descriptiontitle">الوصف الرئيسي</label>
                <textarea class="form-control" id="descriptiontitle" name="descriptiontitle" required></textarea>
            </div>
            <div class="form-group">
                <label for="productname">العنوان للمنتج</label>
                <input type="text" class="form-control" id="productname" name="productname" required>
            </div>
            <div class="form-group">
                <label for="productdescription">الوصف للمنتج</label>
                <textarea class="form-control" id="productdescription" name="productdescription" required></textarea>
            </div>
            <div class="form-group">
                <label for="image">الصورة</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-primary">حفظ</button>
        </form>
    </div>
@endsection
