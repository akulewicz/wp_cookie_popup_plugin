const gcscPopup = document.querySelector('.cookie-popup');
const gcscButton = document.querySelector('.cookie-popup__button');
if(!document.cookie.split(';').some((item) => item.trim().startsWith('read='))) {
    gcscPopup.style.display = 'block';
    gcscButton.addEventListener('click', () => {
    const expires = new Date(+new Date() + (7*24*60*60*1000)).toUTCString();
    document.cookie = 'gcs_cookie_read=true; expires=' + expires;
    gcscPopup.style.display = 'none';
})
}