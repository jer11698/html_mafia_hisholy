window.onscroll = function () { scrollFunction() };

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    //document.getElementById("navbar").style.padding = "30px 10px";
    document.getElementById("nav").style.background = "#000";
  } else {
    //document.getElementById("navbar").style.padding = "80px 10px";
    document.getElementById("nav").style.background = "";
  }
}