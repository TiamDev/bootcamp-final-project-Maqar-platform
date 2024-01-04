// var counter = 2;

function addFields() {
  var container = document.getElementById("fields-container");

  var newTitleField = document.createElement("div");
  newTitleField.classList.add("form-group");
  newTitleField.innerHTML = `
    <div class="row myrow">

      <div class="col-8">
        <div class="form-group pb-3">
          <input type="text" class="form-control" name="title[]" placeholder="أدخل الخدمة الاضافية">
        </div>
      </div>
      <div class="col-4">
        <div class="form-group pb-3">
          <input type="number" class="form-control" name="price[]" placeholder="أدخل السعر">
        </div>
      </div>
    </div>
  `;
  // counter++;
  container.appendChild(newTitleField);
}
// bank
function addFields2() {
  var container = document.getElementById("fields-container2");

  var newTitleField = document.createElement("div");
  newTitleField.classList.add("form-group");
  newTitleField.innerHTML = `
    <div class="row myrow">

    <div class="col-8">
    <div class="form-group pb-3">
        <input type="text" class="form-control" name="bank[]"
            placeholder="البنك">
    </div>
</div>
<div class="col-4">
    <div class="form-group pb-3">
        <input type="number" class="form-control" name="PIN[]"
            placeholder="رقم الحساب">
    </div>
</div>
    </div>
  `;
  // counter++;
  container.appendChild(newTitleField);
}


let ul = document.querySelector('.tags-input ul');
let input = document.querySelector('.tags-input input');
let deleteAll = document.querySelector('.removeAll button');
let tags = ['مساحة مخصصة للبريك', 'انترنت فايبر'];

function showTags(){
    document.querySelectorAll('.tags-input ul li').forEach(li => li.remove());
    tags.forEach((value, key) => {
        let newTag = document.createElement('li');
        newTag.innerText = value;
        let newRemove = document.createElement('div');
        newRemove.classList.add('remove');
        newRemove.setAttribute('onclick', `removeTagItem(${key})`);
        newTag.appendChild(newRemove);
        ul.appendChild(newTag);
    })
}
function removeTagItem(key){
    delete tags[key];
    showTags();
}
showTags();
input.addEventListener('keyup', function(event){
   if(event.key === 'Enter'){
     if(!tags.includes(this.value)){
        tags.push(this.value);
        showTags();
     }
     this.value = '';
   }
})
deleteAll.addEventListener('click', function(){
    tags = [];
    showTags();
})

const checkboxes = document.querySelectorAll('.form-check-input');
const inputTexts = document.querySelectorAll('.social-link');

checkboxes.forEach((checkbox, index) => {
  checkbox.addEventListener('change', function() {
    inputTexts[index].disabled = !this.checked;
  });
});