// Fade-in effect on load
window.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.fade-in').forEach(el => {
    el.style.opacity = 0;
    el.style.transition = 'opacity 1.5s ease-in-out';
    setTimeout(() => (el.style.opacity = 1), 100);
  });
});