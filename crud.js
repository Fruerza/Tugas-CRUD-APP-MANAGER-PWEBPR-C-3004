document.querySelector('.create').addEventListener('click', function() {
document.querySelector('.popup').style.display = 'block';
});
    
document.querySelector('.btn-cancel').addEventListener('click', function() {
document.querySelector('.popup').style.display = 'none';
});

const menuBar = document.querySelector("#content nav .bx.bx-menu");
const sidebar = document.getElementById("sidebar");

menuBar.addEventListener("click", function () {
    sidebar.classList.toggle("hide");
})

let gambar = document.getElementById('gambar').value;



  