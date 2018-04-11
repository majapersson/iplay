export default (function () {

  function scroll() {
    const dots = document.querySelectorAll('.dot');
    const boxTop = window.scrollY + 300;
    const boxBottom = window.scrollY + 500;

    dots.forEach(dot => {
      const Y = dot.getBoundingClientRect().y;
      console.log(boxBottom);
      console.log(window.scrollY);
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
