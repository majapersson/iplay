export default (function () {

  function scroll() {
    const dots = document.querySelectorAll('.dot');
    const boxTop = window.innerHeight / 2 - 100;
    const boxBottom = window.innerHeight / 2 + 100;

    dots.forEach(dot => {
      const Y = dot.getBoundingClientRect().y;
      if (Y > boxTop && Y < boxBottom)
      {
        dot.classList.add('currentDot');
      }
      if (Y < boxTop || Y > boxBottom)
      {
        dot.classList.remove('currentDot');
      }
    });
  }

  if (window.location.pathname === '/milestones/') {
    window.addEventListener('scroll', scroll);
  }
})();
