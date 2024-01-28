@extends('dashboard/dashlayout')

@section('dashcontent')
    <div class="container">


        <h2>إضافة منتج جديد</h2>


<br>

        <form method="post" action="{{ route('product.store') }}" enctype="multipart/form-data">
            @csrf



            <div class="select-category">
                <select  name="categorie_id">
                    <option selected>اختار الصنف</option>
                    @foreach ($category as $cate)
                        <option value="{{ $cate->id }}" required><a class="paste-button">{{ $cate->product_title }}</a>
                        </option>
                    @endforeach
                </select>
            </div>



            <div class="form-group">
                <label for="product_name">العنوان للمنتج</label>
                <input type="text" class="form-control" id="product_name" name="product_name" required>
            </div>
            <div class="form-group">
                <label for="product_description">الوصف للمنتج</label>
                <textarea class="form-control" id="product_description" name="product_description" required></textarea>
            </div>
            <div class="form-group">
                <label for="image">الصورة</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">حفظ</button>
        </form>
        <br>
        <div class="row">
            <a
                class="btn btn-primary" href="{{ asset('ProductCategory/show')}}">عرض البيانات</a>

        </div>

        <br>
    </div>
@endsection
