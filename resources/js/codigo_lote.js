let buttonClose = document.getElementById('btnClose')
buttonClose.addEventListener('click', () => {
    document.getElementById('popup').classList.add('hidden');
    document.getElementById('popup').classList.remove('flex');
})

let buttonOpen = document.getElementById('btnOpen')
buttonOpen.addEventListener('click', () => {
    document.getElementById('popup').classList.add('flex');
    document.getElementById('popup').classList.remove('hidden');    
})