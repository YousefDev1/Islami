const btn  = document.getElementById('change-mode');
const body = document.body;
let theme  = localStorage.getItem('theme');

if(theme == 'dark') enableDarkMode();
if(theme == 'light') disableDarkMode();

btn.addEventListener('click', function(){
    const theme = localStorage.getItem('theme');
    if(theme == 'dark')
    {
        disableDarkMode()
    }
    else
    {
        enableDarkMode()
    }

    
});
function enableDarkMode(){
    body.classList.add('light-mode');
    btn.innerHTML = '<span><i class="pro-moon-o"></i></span>';
    localStorage.setItem('theme', 'dark');
}

function disableDarkMode(){
    body.classList.remove('light-mode');
    btn.innerHTML = '<span><i class="pro-sun-o"></i></span>';
    localStorage.setItem('theme', 'light');
}
