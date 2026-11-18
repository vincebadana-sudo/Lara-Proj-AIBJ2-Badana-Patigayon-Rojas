const toggle = document.getElementById('theme-toggle');
const icon = document.getElementById('theme-icon');

function applyTheme(isDark) {
    document.body.classList.toggle('dark', isDark);
    icon.src = isDark ? toggle.dataset.sun : toggle.dataset.moon;
    localStorage.setItem('theme', isDark ? 'dark' : 'light');
}

applyTheme(localStorage.getItem('theme') === 'dark');

toggle.addEventListener('click', function () {
    applyTheme(!document.body.classList.contains('dark'));
});