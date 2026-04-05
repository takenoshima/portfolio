// ============================================
// Main JavaScript - 工務店テンプレート
// ============================================

document.addEventListener('DOMContentLoaded', () => {
  // ---- Header Scroll Effect ----
  const header = document.querySelector('.l-header');
  const fixedCta = document.querySelector('.l-fixed-cta');

  const handleScroll = () => {
    const scrollY = window.scrollY;

    // Header shadow on scroll
    if (header) {
      header.classList.toggle('is-scrolled', scrollY > 50);
    }

    // Fixed CTA visibility
    if (fixedCta) {
      fixedCta.classList.toggle('is-visible', scrollY > 400);
    }
  };

  window.addEventListener('scroll', handleScroll, { passive: true });

  // ---- Hamburger Menu ----
  const hamburger = document.querySelector('.l-header__hamburger');
  const menuModal = document.querySelector('.l-menu-modal');
  const body = document.body;

  if (hamburger && menuModal) {
    const closeMenu = () => {
      hamburger.classList.remove('is-active');
      menuModal.classList.remove('is-open');
      body.classList.remove('is-menu-open');
    };

    hamburger.addEventListener('click', () => {
      hamburger.classList.toggle('is-active');
      menuModal.classList.toggle('is-open');
      body.classList.toggle('is-menu-open');
    });

    menuModal.addEventListener('click', (e) => {
      const closeBtn = e.target.closest('.l-menu-modal__close');
      if (closeBtn) {
        e.preventDefault();
        e.stopPropagation();
        closeMenu();
      }
    });

    menuModal.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', closeMenu);
    });
  }

  // ---- Hero Slider ----
  const heroSlides = document.querySelectorAll('.p-hero__slide');
  if (heroSlides.length > 0) {
    let currentSlide = 0;
    const totalSlides = heroSlides.length;

    const showSlide = (index) => {
      heroSlides.forEach((slide, i) => {
        slide.classList.toggle('is-active', i === index);
      });
    };

    showSlide(0);

    setInterval(() => {
      currentSlide = (currentSlide + 1) % totalSlides;
      showSlide(currentSlide);
    }, 6000);
  }

  // ---- Scroll Animation ----
  const scrollElements = document.querySelectorAll('.js-scroll');

  const observerOptions = {
    root: null,
    rootMargin: '0px 0px -100px 0px',
    threshold: 0.1
  };

  const scrollObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        scrollObserver.unobserve(entry.target);
      }
    });
  }, observerOptions);

  scrollElements.forEach(el => scrollObserver.observe(el));

  // ---- FAQ Accordion ----
  const faqItems = document.querySelectorAll('.p-faq__item');

  faqItems.forEach(item => {
    const question = item.querySelector('.p-faq__question');
    if (question) {
      question.addEventListener('click', () => {
        // Close other items
        faqItems.forEach(otherItem => {
          if (otherItem !== item) {
            otherItem.classList.remove('is-open');
          }
        });
        item.classList.toggle('is-open');
      });
    }
  });

  // ---- Works Filter ----
  const filterButtons = document.querySelectorAll('.p-works__filter button');
  const workCards = document.querySelectorAll('.p-works__grid .c-card');

  filterButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      const filter = btn.dataset.filter;

      filterButtons.forEach(b => b.classList.remove('is-active'));
      btn.classList.add('is-active');

      workCards.forEach(card => {
        if (filter === 'all' || card.dataset.category === filter) {
          card.style.display = '';
          card.style.animation = 'fadeIn 0.5s ease';
        } else {
          card.style.display = 'none';
        }
      });
    });
  });

  // ---- Gallery Thumbnails ----
  const galleryThumbs = document.querySelectorAll('.thumbnails .thumb, .thumbs .thumb');
  const mainImage = document.querySelector('.main-image img');

  galleryThumbs.forEach(thumb => {
    thumb.addEventListener('click', () => {
      if (mainImage) {
        const src = thumb.querySelector('img')?.dataset.full || thumb.querySelector('img')?.src;
        mainImage.src = src;
        galleryThumbs.forEach(t => t.classList.remove('is-active'));
        thumb.classList.add('is-active');
      }
    });
  });

  // ---- Interview Slider ----
  const sliderTrack = document.querySelector('.p-home-interview__track');
  const prevBtn = document.querySelector('.p-home-interview__controls .prev');
  const nextBtn = document.querySelector('.p-home-interview__controls .next');

  if (sliderTrack && prevBtn && nextBtn) {
    let sliderIndex = 0;
    const items = sliderTrack.children;
    const itemWidth = items[0]?.offsetWidth + 24 || 400;
    const maxIndex = Math.max(0, items.length - getVisibleCount());

    function getVisibleCount() {
      if (window.innerWidth < 768) return 1;
      if (window.innerWidth < 1024) return 2;
      return 3;
    }

    function updateSlider() {
      sliderTrack.style.transform = `translateX(-${sliderIndex * itemWidth}px)`;
    }

    prevBtn.addEventListener('click', () => {
      sliderIndex = Math.max(0, sliderIndex - 1);
      updateSlider();
    });

    nextBtn.addEventListener('click', () => {
      sliderIndex = Math.min(maxIndex, sliderIndex + 1);
      updateSlider();
    });
  }

  // ---- Smooth Scroll for Anchor Links ----
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', (e) => {
      e.preventDefault();
      const target = document.querySelector(anchor.getAttribute('href'));
      if (target) {
        const headerOffset = header ? header.offsetHeight : 0;
        const offsetPosition = target.getBoundingClientRect().top + window.scrollY - headerOffset;
        window.scrollTo({
          top: offsetPosition,
          behavior: 'smooth'
        });
      }
    });
  });

  // ---- Form Validation (Basic) ----
  const forms = document.querySelectorAll('form[data-validate]');

  forms.forEach(form => {
    form.addEventListener('submit', (e) => {
      let isValid = true;
      const requiredFields = form.querySelectorAll('[required]');

      requiredFields.forEach(field => {
        const errorMsg = field.parentElement.querySelector('.error-message');
        if (errorMsg) errorMsg.remove();

        if (!field.value.trim()) {
          isValid = false;
          field.style.borderColor = '#c0392b';
          const error = document.createElement('span');
          error.className = 'error-message';
          error.style.cssText = 'color: #c0392b; font-size: 12px; margin-top: 4px; display: block;';
          error.textContent = 'この項目は必須です';
          field.parentElement.appendChild(error);
        } else {
          field.style.borderColor = '';
        }
      });

      // Email validation
      const emailField = form.querySelector('input[type="email"]');
      if (emailField && emailField.value) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(emailField.value)) {
          isValid = false;
          emailField.style.borderColor = '#c0392b';
          const error = document.createElement('span');
          error.className = 'error-message';
          error.style.cssText = 'color: #c0392b; font-size: 12px; margin-top: 4px; display: block;';
          error.textContent = '有効なメールアドレスを入力してください';
          emailField.parentElement.appendChild(error);
        }
      }

      if (!isValid) {
        e.preventDefault();
      }
    });
  });

  // ---- Counter Animation (Numbers Section) ----
  const numberItems = document.querySelectorAll('.p-home-numbers__item .number');

  const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const target = entry.target;
        const endValue = parseInt(target.dataset.count) || 0;
        const suffix = target.dataset.suffix || '';
        const duration = 2000;
        const startTime = performance.now();

        const animate = (currentTime) => {
          const elapsed = currentTime - startTime;
          const progress = Math.min(elapsed / duration, 1);
          const eased = 1 - Math.pow(1 - progress, 3);
          const currentValue = Math.floor(eased * endValue);

          target.textContent = currentValue.toLocaleString() + suffix;

          if (progress < 1) {
            requestAnimationFrame(animate);
          }
        };

        requestAnimationFrame(animate);
        counterObserver.unobserve(target);
      }
    });
  }, { threshold: 0.5 });

  numberItems.forEach(item => counterObserver.observe(item));
});

// ---- Fade In Animation Keyframes (CSS fallback) ----
const style = document.createElement('style');
style.textContent = `
  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
  }
`;
document.head.appendChild(style);
