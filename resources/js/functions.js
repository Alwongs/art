const note = document.querySelector('.notification');

if (note) note.addEventListener('click', closeNote);

function closeNote() {

    note.classList.add('hidden');
    
}