let buttonClose = document.getElementById('btnClose')
buttonClose.addEventListener('click', () => {
    document.getElementById('popup').classList.add('hidden');
    document.getElementById('popup').classList.remove('active');
})

let buttonOpen = document.getElementById('btnOpen')
buttonOpen.addEventListener('click', () => {
    document.getElementById('popup').classList.add('active');
    document.getElementById('popup').classList.remove('hidden');    
})