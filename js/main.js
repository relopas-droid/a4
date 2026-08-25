/* SavoryCookLab - Main Interactive JavaScript */
document.addEventListener('DOMContentLoaded', () => {
  // Mobile menu toggle
  const mobileToggle = document.querySelector('.mobile-toggle');
  const navLinks = document.querySelector('.nav-links');

  if (mobileToggle && navLinks) {
    mobileToggle.addEventListener('click', () => {
      navLinks.classList.toggle('active');
      mobileToggle.setAttribute('aria-expanded', navLinks.classList.contains('active'));
    });
  }

  // Sticky Navbar shadow on scroll
  const navbar = document.querySelector('.navbar');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      navbar?.classList.add('scrolled');
    } else {
      navbar?.classList.remove('scrolled');
    }
  });

  // Animated metric counters
  const counters = document.querySelectorAll('.metric-number');
  if (counters.length > 0) {
    const observerOptions = { threshold: 0.5 };
    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const target = +entry.target.getAttribute('data-target');
          let count = 0;
          const speed = target / 50;
          const updateCount = () => {
            count += speed;
            if (count < target) {
              entry.target.innerText = Math.ceil(count);
              setTimeout(updateCount, 25);
            } else {
              entry.target.innerText = target;
            }
          };
          updateCount();
          obs.unobserve(entry.target);
        }
      });
    }, observerOptions);

    counters.forEach(counter => observer.observe(counter));
  }

  // Interactive Umami Reduction & Searing Technique Explorer
  const cookButtons = document.querySelectorAll('.cook-btn');
  const cookDisplay = document.getElementById('cook-detail');

  if (cookButtons.length > 0 && cookDisplay) {
    cookButtons.forEach(btn => {
      btn.addEventListener('click', function() {
        cookButtons.forEach(b => b.classList.remove('active-cook'));
        this.classList.add('active-cook');
        const cookName = this.getAttribute('data-cook');
        const description = this.getAttribute('data-desc');
        const score = this.getAttribute('data-score');

        cookDisplay.innerHTML = `
          <div class="cook-card" style="border-left: 4px solid var(--accent-copper); margin-top: 1.5rem;">
            <h3 style="color: var(--accent-copper); font-size: 1.5rem; margin-bottom: 0.5rem;">${cookName} Culinary Specification</h3>
            <p style="color: var(--text-secondary); margin-bottom: 1rem;">${description}</p>
            <strong style="color: var(--accent-sage); font-size: 0.95rem;">Empirical Umami & Reduction Benchmark: ${score}</strong>
          </div>
        `;
      });
    });
  }

  // Savory Flavor Matcher & Cooking Diagnostic Quiz
  const cookQuizButtons = document.querySelectorAll('.cook-quiz-btn');
  const cookQuizResult = document.getElementById('cook-quiz-result');

  if (cookQuizButtons.length > 0 && cookQuizResult) {
    cookQuizButtons.forEach(btn => {
      btn.addEventListener('click', function() {
        cookQuizButtons.forEach(b => b.style.opacity = '0.7');
        this.style.opacity = '1';
        const recommendation = this.getAttribute('data-rec');
        cookQuizResult.innerHTML = `
          <div class="cook-card" style="background: var(--bg-secondary); margin-top: 1rem; border-color: var(--accent-copper);">
            <h4 style="color: var(--accent-copper); margin-bottom: 0.5rem;">Your Curated Savory Culinary Recommendation</h4>
            <p style="color: var(--text-primary); font-weight: 600;">${recommendation}</p>
          </div>
        `;
      });
    });
  }
});
