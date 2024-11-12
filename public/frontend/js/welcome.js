window.onload = function() {
    const element = document.getElementById('welcome');
    element.style.display = 'block';

    // Set timeout to hide the element after 2 seconds
    setTimeout(() => {
        element.style.display = 'none';
    }, 10000); // 2000 milliseconds = 2 seconds
};