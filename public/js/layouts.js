  const links = document.querySelectorAll('.sidebar .nav-link');
  const activeHref = localStorage.getItem('activeLink');
  if (activeHref) {
    links.forEach(l => {
      if (l.getAttribute('href') === activeHref) {
        l.classList.add('active');
      }
    });
  }
  links.forEach(link => {
    link.addEventListener('click', function() {
      localStorage.setItem('activeLink', this.getAttribute('href'));
    });
  });