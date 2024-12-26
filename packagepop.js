document.addEventListener("DOMContentLoaded", function () {
    const packageBtn = document.getElementById("packageBtn");
    const popup = document.getElementById("popup");
    const closeBtn = document.getElementById("close");
  
    packageBtn.addEventListener("click", function () {
      popup.style.display = "block";
    });
  
    closeBtn.addEventListener("click", function () {
      popup.style.display = "none";
    });
  });


  document.addEventListener("DOMContentLoaded", function () {
    const bookBtn = document.getElementById("bookBtn");
    const popupbook = document.getElementById("popupbook");
    const closeBtnBook = document.getElementById("close-book-btn");
  
    bookBtn.addEventListener("click", function () {
      popupbook.style.display = "block";
    });
  
    closeBtnBook.addEventListener("click", function () {
      popupbook.style.display = "none";
    });
  });
  