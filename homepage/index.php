<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>صحتك تبدأ من نفسيتك</title>

  <!-- خط عربي -->
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700&display=swap" rel="stylesheet">
  <!-- أيقونات Font Awesome (استخدم هذا الرابط بدون integrity لتفادي مشكلة عدم التحميل) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="../therapist/total.css">
</head>

<body>

<header class="main-header">
  <div class="header-right">

    <div class="brand">
      <a href="../homepage/index.php">
        <img src="img/Frame 392 (1).png" alt="شعار ذات" class="brand-icon">
      </a>
    </div>
  </div>

  <div class="header-left">
    <?php if (isset($_SESSION['user_id'])): ?>
      <span class="nav-link">مرحباً <?= htmlspecialchars($_SESSION['user_name'] ?? '') ?></span>
      <a href="../auth/handlers/logout.php" class="nav-link">تسجيل الخروج</a>
    <?php else: ?>
      <a href="../auth/login/index.php" class="nav-link active-login">تسجيل الدخول</a>
      <a href="../auth/signup/index.php" class="nav-link active-login btn btn-primary">إنشاء حساب</a>
    <?php endif; ?>
  </div>
</header>


  <section id="hero" class="hero">
    <div class="container hero-grid">

      <!-- يمين: النص -->
      <div class="hero-right">
        <h1 class="hero-title">
          صحتك <br>
          <span>تبدأ</span> من نفسيتك
        </h1>

        <p class="hero-subtitle">
          نحن هنا لنصنع الفرق، بخدمة أولويتنا سعادتك
        </p>

        <div class="hero-actions">
          <a href="#mood" class="btn-hero-main-cta">ابدأ الآن</a>
          <a href="#services" class="btn-hero-secondary-cta">احجز جلسة الآن</a>
        </div>

        <div class="hero-stats">
          <div class="stat-item">
            <div class="stat-number">500+</div>
            <div class="stat-label"> مريض</div>
          </div>
          <div class="stat-item">
            <div class="stat-number">50+</div>
            <div class="stat-label">أخصائي</div>
          </div>
          <div class="stat-item">
            <div class="stat-number">98+</div>
            <div class="stat-label">رضا العملاء</div>
          </div>
        </div>
      </div>

      <!-- يسار: الصورة -->
      <div class="hero-left">
        <div class="hero-media">
          <img src="./img/جلسةاستشارة.png" alt="جلسةاستشارة">

          <div class="hero-media-badge">
            <div class="badge-icon">
              <!-- استبدل bi-heart-fill بـ Font Awesome -->
              <i class="fa-solid fa-heart"></i>
            </div>

            <div class="badge-text">
              <div class="badge-label">جلسات ناجحة</div>
              <div class="badge-value">2000+</div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>

  <!-- ===== FEATURES ===== -->
  <section id="features" class="section">
    <div class="container">
      <div class="section-head center">
        <h1 class="section-title">
          ليه <span>منّا؟</span> وليه منصتنا مختلفة
        </h1>
        <p class="section-subtitle">
          نقدم لك تجربة استثنائية في الاستشارات النفسية
        </p>
      </div>

      <div class="features-grid">

        <div class="feature-card">
          <div class="feature-icon blue">
           
            <i class="fa-solid fa-shield-halved"></i>
          </div>
          <h3 class="feature-title"> خصوصية تامة</h3>
          <p class="feature-text">سرية معلوماتك بأعلى معايير الحماية والأمان</p>
        </div>

        <div class="feature-card">
          <div class="feature-icon teal">
            <i class="fa-solid fa-user-group"></i>
          </div>
          <h3 class="feature-title"> أخصائيون معتمدون</h3>
          <p class="feature-text"> نخبة من الأخصائيين المؤهلين والمعتمدين </p>
        </div>

        <div class="feature-card">
          <div class="feature-icon purple">
           <i class=" fa-solid fa-comment"></i>
          </div>
          <h3 class="feature-title">  جلسات مرنة</h3>
          <p class="feature-text"> احجز جلستك عبر الإنترنت في أي وقت يناسبك</p>
        </div>

        <div class="feature-card">
          <div class="feature-icon green">
       <i class="fa-solid fa-wave-square"></i>
          </div>
          <h3 class="feature-title"> دعم مستمر</h3>
          <p class="feature-text">متابعة مستمرة ودعم على مدار الساعة</p>
        </div>

      </div>
    </div>
  </section>
<!-- ===== MOOD CARD ===== -->
<section id="mood" class="section mood-section">
  <div class="container">
    <div class="mood-card">
      <div class="mood-top">
        <h2 class="mood-title">
          كيف <span>شعورك</span> 
          اليوم؟
        </h2>
        <p class="mood-subtitle">
            عبّر عن مزاجك وابدأ رحلتك نحو صحة نفسية أفضل
        </p>
      </div>
      
      <div class="mood-emoji-wrap">
        <div class="mood-emoji-circle">
          <span class="mood-emoji" id="moodEmoji">😐</span>
        </div>

        <div class="mood-current">
          <div class="mood-text" id="moodText">عادي</div>
          <div class="mood-small"> اسحب الشريط للتعبير عن شعورك</div>
        </div>
      </div>
      <div class="mood-choices" aria-hidden="true">
        <span class="mood-choice" data-value="1">😢</span>
        <span class="mood-choice" data-value="2">😞</span>
        <span class="mood-choice active" data-value="3">😐</span>
        <span class="mood-choice" data-value="4">😊</span>
        <span class="mood-choice" data-value="5">😄</span>
      </div>

      
      <div class="mood-slider">
        <div class="mood-gradient-bar"></div>
        <div class="mood-thumb-dot" id="moodThumb"></div>

        <input type="range" id="moodRange" min="1" max="5" value="3" />
      </div>

      <div class="mood-scale-labels" aria-hidden="true">
        <span>سيّئ جدًا</span>
        <span>سيّئ</span>
        <span>عادي</span>
        <span>جيد</span>
        <span>ممتاز</span>
      </div>

      <div class="mood-advice" id="moodAdvice">
        <div class="mood-advice-heart">♡</div>
        <div  class="mood-advice-title"> رسالة لك</div>
        <div class="mood-advice-text">
          شعورك مفهوم تماماً. لا تتردد في طلب المساعدة، نحن هنا لدعمك في كل خطوة.
        </div>
      </div>

      <!-- زر -->
      <div class="mood-footer">
        <button class="mood-btn" type="button">
          اعرض التمارين المناسبة
        </button>
      </div>

    </div>
  </div>
</section>

<!-- ===== ARTICLE / EXERCISE ===== -->
<section class="section">
  <div class="container article-grid">
    <div class="article-media">
      <img src="https://images.pexels.com/photos/3822621/pexels-photo-3822621.jpeg?auto=compress&cs=tinysrgb&w=900" alt="">
    </div>
    <div class="article-text">
      <h2 class="section-title">تمارين بسيطة، تأثيرها كبير</h2>
      <p class="section-subtitle">
        خصص 10 دقائق من يومك لتمارين التنفس والتأمل. نوفر لك جلسات صوتية تساعدك
        على تهدئة القلق، وتحسين النوم، وزيادة التركيز.
      </p>
      <ul class="article-list">
        <li><i class="bi bi-check-circle-fill"></i> تمارين صوتية موجهة باللغة العربية.</li>
        <li><i class="bi bi-check-circle-fill"></i> إمكانية المتابعة مع أخصائي بعد التمرين.</li>
        <li><i class="bi bi-check-circle-fill"></i> سجل تقدّم يومي لمتابعة تحسن مزاجك.</li>
      </ul>
      <button class="btn btn-outline">جرّب جلسة مجانية</button>
    </div>
  </div>
</section>

<!-- ===== STEPS ===== -->
<section class="section no-top">
  <div class="container">
    <div class="section-head center">
      <h2 class="section-title">كيف نبدأ معك؟</h2>
    </div>
    <div class="steps-grid">
      <div class="step-card">
        <div class="step-number">1</div>
        <h3 class="step-title">قيّم حالتك</h3>
        <p class="feature-text">جاوب على أسئلة بسيطة عن نومك ومزاجك ويومك.</p>
      </div>
      <div class="step-card">
        <div class="step-number">2</div>
        <h3 class="step-title">اختر المختص</h3>
        <p class="feature-text">نرشح لك أخصائيين يناسبون احتياجك وتفضيلاتك.</p>
      </div>
      <div class="step-card">
        <div class="step-number">3</div>
        <h3 class="step-title">ابدأ الخطة</h3>
        <p class="feature-text">جلسات منتظمة وتمارين بين الجلسات مع متابعة.</p>
      </div>
    </div>
  </div>
</section>

<!-- ===== SERVICES ===== -->
<section id="services" class="section">
  <div class="container">
    <div class="section-head between">
      <div>
        <h2 class="section-title">خدماتنا المتنوعة</h2>
        <p class="section-subtitle">كل ما تحتاجه في مكان واحد لدعم صحتك النفسية.</p>
      </div>
      <button class="btn btn-outline small">استعراض جميع الخدمات</button>
    </div>

    <div class="services-grid">
      <div class="service-card">
        <div class="service-media"></div>
        <div class="service-body">
          <span class="badge-soft">استشارة فردية</span>
          <h3 class="service-title">جلسات أونلاين مع أخصائي</h3>
          <p class="service-text">
            جلسات فيديو أو صوتية بمرونة في المواعيد وأسعار تناسب الجميع.
          </p>
          <a href="#" class="service-link">احجز جلستك</a>
        </div>
      </div>

      <div class="service-card">
        <div class="service-media second"></div>
        <div class="service-body">
          <span class="badge-soft">برامج جماعية</span>
          <h3 class="service-title">مجموعات دعم ومشاركة</h3>
          <p class="service-text">
            شارك تجربتك مع آخرين يمرّون بما تمرّ به في بيئة آمنة.
          </p>
          <a href="#" class="service-link">انضم لأقرب مجموعة</a>
        </div>
      </div>

      <div class="service-card">
        <div class="service-media third"></div>
        <div class="service-body">
          <span class="badge-soft">محتوى تعليمي</span>
          <h3 class="service-title">كورسات وتمارين ذاتية</h3>
          <p class="service-text">
            دروس قصيرة وتمارين عملية لتعلّم مهارات إدارة التوتر.
          </p>
          <a href="#" class="service-link">تصفّح المكتبة</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== STORIES ===== -->
<section id="stories" class="section no-top">
  <div class="container">
    <div class="section-head between">
      <div>
        <h2 class="section-title">قصص من مستخدمينا</h2>
        <p class="section-subtitle">تجارب حقيقية لأشخاص قرروا الاعتناء بصحتهم النفسية.</p>
      </div>
      <div class="rating">
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-fill"></i>
        <i class="bi bi-star-half"></i>
        <span>4.8 / 5 من 3,200 تقييم</span>
      </div>
    </div>

    <div class="stories-grid">
      <article class="story-card">
        <p class="story-text">
          "بعد 3 أشهر من المتابعة حسّيت لأول مرة أن عندي أدوات أتعامل فيها مع القلق 