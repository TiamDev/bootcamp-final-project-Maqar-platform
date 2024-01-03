// sign page and cotact us

const inputs = document.querySelectorAll(".input-field");
const toggle_btn = document.querySelectorAll(".toggle");
const main = document.querySelector("main");
const bullets = document.querySelectorAll(".bullets span");
const images = document.querySelectorAll(".image");

inputs.forEach((inp) => {
  inp.addEventListener("focus", () => {
    inp.classList.add("active");
  });
  inp.addEventListener("blur", () => {
    if (inp.value != "") return;
    inp.classList.remove("active");
  });
});

toggle_btn.forEach((btn) => {
  btn.addEventListener("click", () => {
    main.classList.toggle("sign-up-mode");
  });
});

function moveSlider() {
  let index = this.dataset.value;

  let currentImage = document.querySelector(`.img-${index}`);
  images.forEach((img) => img.classList.remove("show"));
  currentImage.classList.add("show");

  const textSlider = document.querySelector(".text-group");
  textSlider.style.transform = `translateY(${-(index - 1) * 2.2}rem)`;

  bullets.forEach((bull) => bull.classList.remove("active"));
  this.classList.add("active");
}

bullets.forEach((bullet) => {
  bullet.addEventListener("click", moveSlider);
});



// احتفاظ بمتغير لتعقب الصورة الحالية
let currentImageIndex = 0;

// تحديد دالة لتحريك الصورة
function moveImage() {
  // إخفاء الصورة الحالية
  images[currentImageIndex].classList.remove("show");

  // زيادة مؤشر الصورة الحالية
  currentImageIndex++;

  // التحقق من الحد الأقصى للمؤشر
  if (currentImageIndex >= images.length) {
    currentImageIndex = 0;
  }

  // عرض الصورة الجديدة
  images[currentImageIndex].classList.add("show");
  // تحديث النقاط الدالة
  updateBullets();
}

// تحديث النقاط الدالة
function updateBullets() {
  bullets.forEach((bull, index) => {
    // إزالة النقطة النشطة من النقاط الدالة
    bull.classList.remove("active");

    // إضافة النقطة النشطة للصورة الحالية
    if (index === currentImageIndex) {
      bull.classList.add("active");
    }
  });
}

// تحريك الصورة كل 5 ثوانٍ
setInterval(moveImage, 10000);