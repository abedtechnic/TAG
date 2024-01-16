@extends('dashboard/dashlayout')

@section('dashcontent')

    <div class="container">
        <h2> انشاء بطاقة من نحن </h2>

        <form method="post" action="{{ route('card.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="company_num">main_title</label>
                <input type="text" class="form-control"  id="main_title" name="main_title" required>
            </div>
            <div class="form-group">
                <label for="company_email">title</label>
                <input type="text" class="form-control"  id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="company_email">card_description</label>
                <input type="text" class="form-control"  id="card_description" name="card_description" required>
            </div>
             <div class="form-group">
                <label for="image">الصورة</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">حفظ التعديلات</button>
        </form>

        <br>
<div class="row">
    <a
        class="btn btn-primary" href="{{ asset('card/show')}}">عرض البيانات</a>

</div>
    </div>
@endsection
