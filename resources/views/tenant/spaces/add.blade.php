@extends('layouts.platform')
@section('content')
<main id="main" class="main">

<div class="pagetitle">
  <h1>المساحات</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item active">إضافة مساحة</li>
      <li class="breadcrumb-item "><a href="{{route('tenant.spaces')}}">المساحات</a></li>
      <li class="breadcrumb-item"><a href="{{route('tenant.dashboard')}}">الرئيسية</a></li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section  ">
  <div class="row">
    <div class="col-5">
      <div class="card px-5" dir="rtl">
        <div class="card-body">
          <div class="img-card">
            <div class="top " >
              <p> معرض الصور</p>
              {{-- <button type="button">upload</button> --}}
            </div>
            <form action="/upload" method="post" class="">
              <span class="img-inner"> <span class="img-select">اختر الصور</span></span>
              <input type="file" name="file" class="img-file" multiple>
            </form>
            <div class="img-container">
             
            </div>
          </div>
        </div>
      </div>


    </div>
    <div class="col-7">
      <div class="card px-5" dir="rtl">
        <div class="card-body">
          <h3 class="card-title">إضافة البيانات المساحة</h3>

          <!-- Multi Columns Form -->
          <form class="row g-3">
            <div class="col-md-12">
              <label for="inputName5" class="form-label">الاسم</label>
              <input type="text" class="form-control" id="inputName5">
            </div>
            <div class="col-md-12">
              <label for="inputEmail5" class="form-label">الرمز</label>
              <input type="email" class="form-control" id="inputEmail5" disabled value="1247">
            </div>
            <div class="col-md-12">
              <label for="inputState" class="form-label">النوع</label>
              <select id="inputState" class="form-select">
                <option selected>مكتب خاص</option>
                <option>مكتب مشترك</option>
                <option>غرفة اجتماعات</option>
              </select>
            </div>
            <div class="col-12">
              <label for="inputAddress5" class="form-label">عدد الافراد</label>
              <input type="text" class="form-control" id="inputAddres5s" placeholder="">
            </div>        
            <div class="col-12 booking-duration">
              <label for="inputAddress5" class="form-label">فترات حجز المساحة</label>

                  <div class="input-group mb-3" dir="ltr">
                    <span class="input-group-text" id="basic-addon1">ريال </span>

                    <input type="text" class="form-control price" disabled placeholder="سعر المساحة بالساعة  "  aria-label="Recipient's username" aria-describedby="basic-addon1" fdprocessedid="agqgdm">
                    <div class="input-group-text" id="basic-addon1">
                      <label class="form-check-label" for="gridCheck1">
                        ساعات
                      </label>
                      <input class="form-check-input ms-1" type="checkbox" id="gridCheck1">
                    </div>
                  </div>

             
                  <div class="input-group mb-3" dir="ltr">
                    <span class="input-group-text" id="basic-addon1">ريال </span>

                    <input type="text" class="form-control price" disabled placeholder="سعر المساحة باليوم  "  aria-label="Recipient's username" aria-describedby="basic-addon2" fdprocessedid="agqgdm">
                    <div class="input-group-text" id="basic-addon2">
                      <label class="form-check-label" for="gridCheck1">
                        ايام
                      </label>
                      <input class="form-check-input ms-1" type="checkbox" id="gridCheck1">
                    </div>
                  </div>
                  <div class="input-group mb-3" dir="ltr">
                    <span class="input-group-text" id="basic-addon1">ريال </span>

                    <input type="text" class="form-control price" disabled placeholder="سعر المساحة بالاسبوع  "  aria-label="Recipient's username" aria-describedby="basic-addon3" fdprocessedid="agqgdm">
                    <div class="input-group-text" id="basic-addon3">
                      <label class="form-check-label" for="gridCheck1">
                        اسابيع
                      </label>
                      <input class="form-check-input ms-1" type="checkbox" id="gridCheck1">
                    </div>
                  </div>
                  <div class="input-group mb-3" dir="ltr">
                    <span class="input-group-text" id="basic-addon1">ريال </span>
                    <input type="text" class="form-control price" disabled placeholder="سعر المساحة بالشهر  "  aria-label="Recipient's username" aria-describedby="basic-addon4" fdprocessedid="agqgdm">
                    <div class="input-group-text" id="basic-addon4">
                      <label class="form-check-label" for="gridCheck1">
                        اشهر
                      </label>
                      <input class="form-check-input ms-1" type="checkbox" id="gridCheck1">
                    </div>
                    
                  </div>
            </div>
            <div class="text-center">
              <button type="submit" class="btn-dasMain">انشاء</button>
              <a type="reset" href="{{route('tenant.spaces')}}" class="btn-dasSecond">رجوع</a>
            </div>
          </form><!-- End Multi Columns Form -->

        </div>
      </div>

</div>

</div>
</main>
<script>

let files=[];
imgButton=document.querySelector('.top button');
imgForm=document.querySelector('.img-card form');
imgContainer=document.querySelector('.img-container');
imgBrowse=document.querySelector('.img-select');
imgInner=document.querySelector('.img-inner');
imgInput=document.querySelector('.img-file');

imgBrowse.addEventListener('click',()=>imgInput.click());
imgInput.addEventListener('change',()=>{
  let file=imgInput.files;
  for(let i=0;i<file.length;i++){
    if(files.every(e=>e.name!==file[i].name)) files.push(file[i])
    
  }
  imgForm.reset();
  showImages();
})

const showImages=()=>{
  let images='';
  console.log('ddddd');
  files.forEach((e,i)=>{
    images +=` <div class="image-dw">
    <img src="${URL.createObjectURL(e)}" alt="image">
    <span onclick="delImage(${i})">&times;</span></div>`;
  })
  imgContainer.innerHTML =images;

}
const delImage= index=>{
  files.splice(index,1)
  showImages();
}



const checkboxes = document.querySelectorAll('.form-check-input');
  const inputTexts = document.querySelectorAll('.price');

  checkboxes.forEach((checkbox, index) => {
    checkbox.addEventListener('change', function() {
      inputTexts[index].disabled = !this.checked;
    });
  });
</script>
@endsection