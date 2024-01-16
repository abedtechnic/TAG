@extends('dashboard/dashlayout')

@section('dashcontent')
    <div class="container">
        <h2>تعديل المنتج </h2>

        <form method="post" action="{{ route('contact.update', $editcontact->id) }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="title_desc">شرح العنوان</label>
                <input type="text" class="form-control" value="{{ $editcontact->title_desc }}" id="title_desc" name="title_desc" required>
            </div>
            <div class="form-group">
                <label for="company_title">company_title</label>
                <input type="text" class="form-control" value="{{ $editcontact->company_title }}" id="company_title" name="company_title" required>
            </div>
            <div class="form-group">
                <label for="company_num">company_num</label>
                <input type="text" class="form-control" value="{{ $editcontact->company_num }}" id="company_num" name="company_num" required>
            </div>
            <div class="form-group">
                <label for="company_email">company_email</label>
                <input type="text" class="form-control" value="{{ $editcontact->company_email }}" id="company_email" name="company_email" required>
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
