function initTypewriter() {
  const typedEl = document.getElementById('typed-text');
  if (!typedEl) return;

  
  const roles = [
    // Your title
    'Frontend Developer',
    'UI/UX Designer',
    'Full-Stack Engineer',
    'Creative Coder',
  ];

  let roleIndex = 0;
  let charIndex = 0;
  let isDeleting = false;

  const type = () => {
    const current = roles[roleIndex];
    if (isDeleting) {
      typedEl.textContent = current.substring(0, charIndex - 1);
      charIndex--;
    } else {
      typedEl.textContent = current.substring(0, charIndex + 1);
      charIndex++;
    }

    let delay = isDeleting ? 60 : 100;
    if (!isDeleting && charIndex === current.length) {
      delay = 2000;
      isDeleting = true;
    } else if (isDeleting && charIndex === 0) {
      isDeleting = false;
      roleIndex = (roleIndex + 1) % roles.length;
      delay = 400;
    }
    setTimeout(type, delay);
  };

  setTimeout(type, 1200);
}
