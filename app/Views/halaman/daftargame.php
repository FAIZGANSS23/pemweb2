<!-- File: app/Views/halaman/daftargame.php -->
<div class="game-catalog">
    <div class="container">
        <h2 class="section-title neon-cyan text-center mb-5">DAFTAR GAME POPULER</h2>

        <div class="row g-4">
            <?php
            $games = [
                [
                    'name' => 'Mobile Legends',
                    'logo' => 'mlbb.png',
                    'bg' => 'mlbb-bg.jpg',
                    'discount' => '20% OFF'
                ],
                [
                    'name' => 'Free Fire',
                    'logo' => 'freefire.png',
                    'bg' => 'freefire-bg.jpg',
                    'discount' => '15% CASHBACK'
                ],
                [
                    'name' => 'Pubg Mobile',
                    'logo' => 'pubg.png',
                    'bg' => 'pubg-bg.jpg',
                    'discount' => '25% CASHBACK'
                ],
            ];

            foreach ($games as $game):
            ?>
                <div class="col-md-4 col-lg-3">
                    <div class="game-card"
                        style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('<?= base_url('assets/img/games/' . $game['bg']) ?>')">

                        <!-- Badge Diskon -->
                        <?php if ($game['discount']): ?>
                            <span class="discount-badge"><?= $game['discount'] ?></span>
                        <?php endif; ?>

                        <!-- Logo Game -->
                        <div class="game-logo-wrapper">
                            <img src="<?= base_url('assets/img/games/' . $game['logo']) ?>"
                                alt="<?= $game['name'] ?>"
                                class="game-logo">
                        </div>

                        <!-- Info Game -->
                        <div class="game-info">
                            <h3><?= $game['name'] ?></h3>
                            <div class="price">
                                <span class="original-price">Rp 100.000</span>
                                <span class="discounted-price">Rp 80.000</span>
                            </div>
                            <a href="#" class="btn-topup">TOP UP NOW</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>