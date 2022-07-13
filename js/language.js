function myFunction() {
  alert('This is working')
}

// active
function toggleItem(elem) {
  for (var i = 0; i < elem.length; i++) {
    elem[i].addEventListener("click", function(e) {
      var current = this;
      for (var i = 0; i < elem.length; i++) {
        if (current != elem[i]) {
          elem[i].classList.remove('active');
        }
        else {
          current.classList.add('active')
        }
      }
      e.preventDefault();
    });
  };
}
toggleItem(document.querySelectorAll('.language-active'));

// wheel
const element = document.querySelector("#my-language");

element.addEventListener('wheel', (event) => {
event.preventDefault();

element.scrollBy({
  left: event.deltaY < 0 ? -30 : 30,
  
});
});

const scroll = document.querySelector(".language_col");
var isDown = false;
var scrollX;
var scrollLeft;

// Mouse Up Function
scroll.addEventListener("mouseup", () => {
isDown = false;
scroll.classList.remove("active");
});

// Mouse Leave Function
scroll.addEventListener("mouseleave", () => {
isDown = false;
scroll.classList.remove("active");
});

// Mouse Down Function
scroll.addEventListener("mousedown", (e) => {
e.preventDefault();
isDown = true;
scroll.classList.add("active");
scrollX = e.pageX - scroll.offsetLeft;
scrollLeft = scroll.scrollLeft;
});

// Mouse Move Function
scroll.addEventListener("mousemove", (e) => {
if (!isDown) return;
e.preventDefault();
var element = e.pageX - scroll.offsetLeft;
var scrolling = (element - scrollX) * 2;
scroll.scrollLeft = scrollLeft - scrolling;
});
