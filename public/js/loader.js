const loader = document.querySelector('.loader-container');
function hideLoader() {
  if (loader) {
    loader.style.opacity = '0';
    loader.style.transition = 'opacity 0.3s ease-out';
    setTimeout(() => {
      loader.style.display = 'none';
    }, 300);
  }
}

// Hide when DOM is ready for a faster feel, but fallback to window.onload
document.addEventListener('DOMContentLoaded', hideLoader);
window.addEventListener('load', hideLoader);