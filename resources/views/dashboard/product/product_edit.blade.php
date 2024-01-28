@extends('dashboard/dashlayout')

@section('dashcontent')
    <div class="container">
        <h2>إضافة خبر جديد</h2>
        <form method="post" action="{{ route('product.store', $editproduct->id) }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="product_name">العنوان</label>
                <input type="text" class="form-control" value="{{ $editproduct ->product_name }}" id="product_name" name="product_name" required>
            </div>

            <div class="form-group">
                <label for="product_description">الوصف الاول</label>
                <textarea class="form-control" value="{{ $editproduct ->product_description }}" id="product_description" name="product_description" required></textarea>
            </div>
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
                <label for="image">الصورة</label>
                <input type="file" class="form-control-file" value="{{ $editproduct ->image }}" id="image" name="image">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">حفظ</button>
          </form>
          <br>
          <div class="row">
            <a  class="btn btn-primary" href="{{ asset('ProductCategory/show')}}">عرض البيانات</a>

        </div>
    </div>
@endsection
