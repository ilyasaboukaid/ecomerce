<?php // views/home.php ?>
<?php $this->layout('layout/parent', ['title' => 'Home']) ?>

    <section id="hero">
        <h4>Trade-in-offer</h4>
        <h2>Super value deals</h2>
        <h1>On all products</h1>
        <p>Save more with coupons & up to 70% off!</p>
        <button><a href="shop.html">Shop Now</a></button>
    </section>

    <section id="feature" class="section-p1">

        <div class="fe-box">
            <img src="/phpCrud/web/assets/img/features/f1.png" alt="">
            <h6>Free shipping</h6>
        </div>

        <div class="fe-box">
            <img src="/phpCrud/web/assets/img/features/f2.png" alt="">
            <h6>Save Time</h6>
        </div>

        <div class="fe-box">
            <img src="/phpCrud/web/assets/img/features/f3.png" alt="">
            <h6>Save Money</h6>
        </div>

        <div class="fe-box">
            <img src="/phpCrud/web/assets/img/features/f4.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="/phpCrud/web/assets/img/features/f5.png" alt="">
            <h6>Happy Sell</h6>
        </div>

        <div class="fe-box">
            <img src="/phpCrud/web/assets/img/features/f6.png" alt="">
            <h6>F24/7 Support</h6>
        </div>

    </section>

    <section id="products1" class="section-p1">
    <h2>Featured Products</h2>
    <p>Summer Collection New Modern Design</p>
    <div class="pro-container">
        <?php foreach ($products as $product): ?>
            <div class="pro">
                <img src="web/assets/img/features/f1.png" alt="<?= $product->nom; ?>">
                <div class="des">
                    <span><?= $product->mark; ?></span>
                    <h5><?= $product->description; ?></h5>
                    <div class="star">
                        <?php for ($i = 0; $i < $product->stars; $i++): ?>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        <?php endfor; ?>
                    </div>
                    <h4><?= $product->prix; ?></h4>
                </div>
                <a href="#"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i></a>
            </div>
        <?php endforeach; ?>
    </div>
</section>
