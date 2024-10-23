import './bootstrap';
import 'bootstrap'; // Framework SCSS Bootstrap 5.3.3


let author = document.getElementById('author');
let buttonAuthor = document.getElementById('add-author-input');

buttonAuthor.addEventListener('click', function(e) {
    e.preventDefault();
    author.innerHTML += `<input type="text" class="form-control mt-1" name="author[]" maxlength="30" placeholder="Inserisci l'artista...">`
});

let writers = document.getElementById('writers');
let buttonWriters = document.getElementById('add-writers-input');

buttonWriters.addEventListener('click', function(e) {
    e.preventDefault();
    writers.innerHTML += `<input type="text" class="form-control mt-1" name="writer[]" maxlength="30" placeholder="Inserisci lo scrittore...">`
});