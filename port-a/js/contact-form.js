function initContactForm() {
  const form = document.getElementById('contactForm');
  const submitBtn = document.getElementById('submitBtn');
  const formStatus = document.getElementById('formStatus');
  if (!form || !submitBtn || !formStatus) return;

  form.addEventListener('submit', (e) => {
    e.preventDefault();
    submitBtn.textContent = 'Sending...';
    submitBtn.disabled = true;

    // Simulate submission (replace with your form handler)
    setTimeout(() => {
      formStatus.className = 'form-status success';
      formStatus.textContent = "✓ Message sent! I'll get back to you soon.";
      form.reset();
      submitBtn.innerHTML = 'Send Message <svg width="14" height="14" class="icon" aria-hidden="true"><use href="images/icons.svg#send"/></svg>';
      submitBtn.disabled = false;
    }, 1400);
  });
}
