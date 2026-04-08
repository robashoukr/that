document.addEventListener('DOMContentLoaded', () => {
  const moodRange    = document.getElementById('moodRange');
  const moodText     = document.getElementById('moodText');
  const moodEmoji    = document.getElementById('moodEmoji');
  const moodProgress = document.getElementById('moodProgress');

  const moods = {
    1: { text: 'سيّئ جدًا', emoji: '😢' },
    2: { text: 'سيّئ',      emoji: '😕' },
    3: { text: 'عادي',      emoji: '🙂' },
    4: { text: 'جيد',       emoji: '😊' },
    5: { text: 'ممتاز',     emoji: '🤩' }
  };

  function updateMoodUI(value) {
    const mood = moods[value];
    if (!mood) return;
    moodText.textContent  = mood.text;
    moodEmoji.textContent = mood.emoji;
    moodProgress.style.width = (value * 20) + '%';
  }

  if (moodRange) {
    updateMoodUI(moodRange.value);
    moodRange.addEventListener('input', e => {
      updateMoodUI(e.target.value);
    });
  }

  // سنة الفوتر
  const yearEl = document.getElementById('year');
  if (yearEl) {
    yearEl.textContent = new Date().getFullYear();
  }

  // سكرول ناعم داخل الصفحة
  document.querySelectorAll('a[href^="#"]').forEach(link => {
    link.addEventListener('click', e => {
      const id = link.getAttribute('href').slice(1);
      const target = document.getElementById(id);
      if (target) {
        e.preventDefault();
        window.scrollTo({
          top: target.offsetTop - 80,
          behavior: 'smooth'
        });
      }
    });
  });
});