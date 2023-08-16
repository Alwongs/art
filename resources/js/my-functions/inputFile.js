function ready() {
    let inputFile = document.getElementById('inputFile');
    let label = inputFile.nextElementSibling;
    let labelVal = label.innerHTML;
    let saveAvatarBtn = document.getElementById('saveAvatarBtn');

    inputFile.addEventListener('change', function(e) {
        let fileName = '';
        if(this.files) {
            fileName = this.files[0].name;
        }
        if(fileName) {
            label.querySelector('span').innerHTML = fileName;
            saveAvatarBtn.classList.remove('hidden');
        } else {
            label.innerHTML = labelVal;
        }
    });
}

document.addEventListener("DOMContentLoaded", ready);