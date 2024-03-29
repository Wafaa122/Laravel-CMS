@extends("layouts._admin")

@section("title", "تعديل صورة ")

@section("content")
<form class="w-50" method="POST" enctype="multipart/form-data"  action="{{ route('photo.update', $items->id) }}">
@csrf
@method("put")
<!-- POST, PUT, Patch and Delete methods must have @csrf token in Laravel Web -->

  <div class="form-group">
    <label for="fle_photo">صورة</label>
    <input type="file" name="fle_photo" class="form-control" />
    @if($items->file)
        <img src='{{ asset("storage/images/" . $items->file) }}' class="mt-2 w-50 img-fluid img-thumbnail" />
    @endif
    </div>
    <div class="form-group ">
    <label for="photo_categories_id">نوع التصنيف</label>
    <select class="form-control" id="photo_categories_id" name="photo_categories_id">
        <option value="">اختر نوع الصورة</option>
        @foreach($categories as $photocategory)
           
            <option {{ $items->photo_categories_id==$photocategory->id?"selected":"" }} value="{{ $photocategory->id }}">{{ $photocategory->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
  <label for="tag">وسم الصورة</label>
  <input autofocus value="{{ $items->tag }}"type="text" class="form-control" id="tag" name="tag" >
</div>

  
<div class="form-group">
  <div class="custom-control custom-checkbox">
    <input type="hidden" name="published" value="0" />
    <input  {{ $items->published?"checked":"" }} type="checkbox" value="1" name="published" class="custom-control-input" id="customCheck1">
    <label class="custom-control-label" for="customCheck1">نشر الصورة</label>
  </div>
</div>
 
  <button type="submit" class="btn btn-primary">حفظ التغيرات</button>
  <a class="btn btn-dark" href="{{ route('photo.index') }}">الغاء الأمر</a>
</form>
@endsection
