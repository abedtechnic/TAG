@extends('dashboard/dashlayout')

@section('dashcontent')
    <div class="container">
        <h2>تعديل المنتج </h2>

        <form method="post" action="{{ route('why.update', $editWhy->id) }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="title">العنوان</label>
                <input type="text" class="form-control" value="{{ $editWhy->title }}" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="description">التفاصيل</label>
                <textarea class="form-control" value="{{ $editWhy->description }}" id="description" name="description" required></textarea>
            </div>
            {{-- <div class="form-group">
                <label for="image">الصورة</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div> --}}
            <button type="submit" class="btn btn-primary">حفظ التعديلات</button>
        </form>

        <br>
{{-- <div class="row">
    <a
        class="btn btn-primary" href="{{ asset('why/show')}}">عرض البيانات</a>

</div> --}}
    </div>
@endsection
