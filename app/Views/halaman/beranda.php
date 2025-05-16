<!-- Hero Section (Fullscreen dengan Background Video) -->
<section class="hero-section">
    <div class="hero-video">
        <video autoplay muted loop>
            <source src="<?= base_url('assets/video/game-hero-bg.mp4') ?>" type="video/mp4">
        </video>
        <div class="hero-overlay"></div>
    </div>

    <div class="hero-content">
        <h1 class="hero-title" data-aos="fade-down">
            TOP UP <span class="text-gradient">GAME</span> MUDAH & CEPAT
        </h1>
        <p class="hero-subtitle" data-aos="fade-down" data-aos-delay="200">
            Diamond, V-Bucks, Genesis Crystal - Langsung masuk dalam 1 menit!
        </p>
        <div class="hero-cta" data-aos="fade-up" data-aos-delay="400">
            <a href="/daftar-game" class="btn btn-primary btn-lg">
                TOP UP SEKARANG <i class="fas fa-arrow-right ms-2"></i>
            </a>
            <a href="#how-to" class="btn btn-outline-light btn-lg ms-3">
                CARA TOP UP
            </a>
        </div>
    </div>

    <div class="hero-scroll-down">
        <i class="fas fa-chevron-down"></i>
    </div>
</section>

<!-- Game Spotlight (Slider) -->
<section class="game-spotlight py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5" data-aos="fade-up">
            GAME <span class="text-gradient">POPULER</span>
        </h2>

        <div class="spotlight-slider">
            <?php
            $spotlight_games = [
                [
                    'name' => 'Mobile Legends',
                    'logo' => 'mlbb.png',
                    'bg' => 'mlbb-bg.jpg',
                    'discount' => '20% OFF'
                ],
                [
                    'name' => 'Valorant',
                    'logo' => 'valorant.png',
                    'bg' => 'valorant-bg.jpg',
                    'discount' => '1000+ VP'
                ]
            ];

            foreach ($spotlight_games as $game):
            ?>
                <div class="spotlight-item">
                    <div class="game-card"
                        style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('<?= base_url('assets/img/games/' . $game['bg']) ?>')">
                        <div class="discount-badge"><?= $game['discount'] ?></div>
                        <img src="<?= base_url('assets/img/games/' . $game['logo']) ?>"
                            alt="<?= $game['name'] ?>"
                            class="game-logo">
                        <div class="game-info">
                            <h3><?= $game['name'] ?></h3>
                            <a href="#" class="btn btn-sm btn-gradient">BELI SEKARANG</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Fitur Unggulan -->
<section class="features-section py-5 bg-dark">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>PROSES INSTAN</h3>
                    <p>Hanya 1 menit setelah pembayaran</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>100% AMAN</h3>
                    <p>Garansi akun tidak terkena ban</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>SUPPORT 24/7</h3>
                    <p>CS siap membantu kapan saja</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section py-5 bg-gradient">
    <div class="container text-center">
        <h2 class="mb-4">Siap Top Up Game Favoritmu?</h2>
        <a href="/daftar-game" class="btn btn-light btn-lg px-5">
            LIHAT DAFTAR GAME <i class="fas fa-arrow-right ms-2"></i>
        </a>
    </div>
</section>