import './bootstrap';
import 'bootstrap'; // Framework SCSS Bootstrap 5.3.3


let author = document.getElementById('author');
let buttonAuthor = document.getElementById('add-author-input');
let authorNumber = 1; 

buttonAuthor.addEventListener('click', function(e) {
    e.preventDefault();
    authorNumber ++; 
    author.innerHTML += `<input type="text" class="form-control mt-1" name="author[]" maxlength="30" placeholder="Artista n° ${authorNumber}">`
});

let writers = document.getElementById('writers');
let buttonWriters = document.getElementById('add-writers-input');
let writersNumber = 1; 

buttonWriters.addEventListener('click', function(e) {
    e.preventDefault();
    writersNumber ++; 
    writers.innerHTML += `<input type="text" class="form-control mt-1" name="writer[]" maxlength="30" placeholder="Scrittore n° ${writersNumber}">`
});