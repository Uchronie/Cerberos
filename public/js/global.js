document.addEventListener('DOMContentLoaded', () => {
  const navbar = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
  if (navbar.length > 0) {
    navbar.forEach( el => {
      el.addEventListener('click', () => {
        const target = el.dataset.target;
        const $target = document.getElementById(target);
        el.classList.toggle('is-active');
        $target.classList.toggle('is-active');
      });
    });
  }
});
