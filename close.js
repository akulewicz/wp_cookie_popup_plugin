const popup = document.querySelector('.cookie-popup');
const button = document.querySelector('.cookie-popup__button');
if(!document.cookie.split(';').some((item) => item.trim().startsWith('read='))) {
    popup.style.display = 'block';
    button.addEventListener('click', () => {
    const expires = new Date(+new Date() + (7*24*60*60*1000)).toUTCString();
    document.cookie = 'read=true; expires=' + expires;
    popup.style.display = 'none';
})
}