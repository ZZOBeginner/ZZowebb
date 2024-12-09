document.addEventListener('DOMContentLoaded', () => {
    const welcomeScreen = document.querySelector('.welcome-screen');
    const formContainer = document.querySelector('.container');

    setTimeout(() => {
        welcomeScreen.style.display = 'none';
        formContainer.classList.remove('hidden');
        formContainer.style.opacity = '1';
        formContainer.style.transform = 'scale(1)';
    }, 4000);
});
