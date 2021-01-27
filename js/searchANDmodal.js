
// Get the modal
var modal = document.getElementById('login');
var modal2 = document.getElementById('logout');

// When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
window.addEventListener("click", function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
});

// window.onclick = function(event) {
window.addEventListener("click", function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
});

// let load_img = document.getElementById("loading");
// let div = document.querySelector('searchResults');
// let input = document.querySelector('searchbox');
let div = document.getElementById('searchResults');
let input = document.getElementById('searchbox');

input.onkeyup = function(event){
    div.style.display = "block";
    div.innerHTML = '';
    let v = input.value;
    fetch("db/search.php?search="+v)
    .then((resp)=>resp.json())
    .then((search_array)=>{
        for(let i=0; i<search_array.length; i++)
            div.innerHTML += "<p><a href='details_single.php?id=\""+search_array[i].id+"\"'>"+search_array[i].model+"</a></p>";
    });
}
// Resetujemo searchbox i div ako se klikne bilo gde na stranicu
document.addEventListener("click", function(event) {
        input.value = '';
        div.innerHTML = '';
        div.style.display = "none";
});
