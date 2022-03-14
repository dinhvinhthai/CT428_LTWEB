function showBio() {
    document.getElementById("bio").style.display = "block";
    document.getElementById("intro").style.display = "none";
    document.getElementById("books").style.display = "none";
    document.getElementById("ct428").style.display = "none";
  }
  function showIntro() {
    document.getElementById("bio").style.display = "none";
    document.getElementById("intro").style.display = "block";
    document.getElementById("books").style.display = "none";
    document.getElementById("ct428").style.display = "none";
  }
  function showBooks() {
    document.getElementById("bio").style.display = "none";
    document.getElementById("intro").style.display = "none";
    document.getElementById("books").style.display = "block";
    document.getElementById("ct428").style.display = "none";
  }
  function showCT428() {
    document.getElementById("bio").style.display = "none";
    document.getElementById("intro").style.display = "none";
    document.getElementById("books").style.display = "none";
    document.getElementById("ct428").style.display = "block";
  }