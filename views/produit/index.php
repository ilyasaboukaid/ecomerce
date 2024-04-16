<?php // views/home.php    ?>
<?php $this->layout('layout/parent', ['title' => 'Home']) ?>


<section id="prodetails" class="section-p1">
    <div class="single-pro-image">
        <img src="/phpCrud/web/assets/img/products/f1.jpg" width="100%" id="MainImg" alt="">

        <div class="small-img-group">
            <div class="small-img-col">
                <img src="/phpCrud/web/assets/img/products/f1.jpg" width="100%" class="small-img" alt="">
            </div>

            <div class="small-img-col">
                <img src="/phpCrud/web/assets/img/products/f2.jpg" width="100%" class="small-img" alt="">
            </div>

            <div class="small-img-col">
                <img src="/phpCrud/web/assets/img/products/f3.jpg" width="100%" class="small-img" alt="">
            </div>

            <div class="small-img-col">
                <img src="/phpCrud/web/assets/img/products/f4.jpg" width="100%" class="small-img" alt="">
            </div>
        </div>


    </div>
    <div class="single-pro-details">
        <h6><?= $produit->mark; ?></h6>
        <h4><?= $produit->nom; ?></h4>
        <h2><?= $produit->prix; ?></h2>
        <select>
            <option>Select Size</option>
            <option>XL</option>
            <option>XXL</option>
            <option>Small</option>
            <option>Large</option>
        </select>
        <input type="number" value="1">
        <form method="post" action="acheter">
            <input type="hidden" name="productName" value="<?= $produit->nom; ?>">
            <input type="hidden" name="productPrice" value="<?= $produit->prix; ?>">
            <input type="hidden" name="productDescription" value="<?= $produit->mark; ?>">
            <input type="hidden" name="productId" value="<?= $produit->id; ?>">
            <button type="submit" class="normal">Acheter</button>
        </form>

        <h4>Products Details </h4>
        <span><?= $produit->description; ?></span>
    </div>
</section>

<section id="products1" class="section-p1">
    <h2>Featured Products</h2>
    <p>Summer Colection New Morden Design</p>
    <div class="pro-container">
        <div class="pro">
            <img src="/phpCrud/web/assets/img/products/n1.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-shrit</h5>
                <div class="star">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                <h4>₹500</h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i> </a>
        </div>
        <div class="pro">
            <img src="/phpCrud/web/assets/img/products/n2.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-shrit</h5>
                <div class="star">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                <h4>₹800</h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i> </a>
        </div>
        <div class="pro">
            <img src="/phpCrud/web/assets/img/products/n3.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-shrit</h5>
                <div class="star">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                <h4>₹800</h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i> </a>
        </div>
        <div class="pro">
            <img src="/phpCrud/web/assets/img/products/n4.jpg" alt="">
            <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-shrit</h5>
                <div class="star">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                <h4>₹800</h4>
            </div>
            <a href="#"><i class="fa fa-shopping-cart cart" aria-hidden="true"></i> </a>
        </div>

    </div>
</section>

<section id="newletter" class="section-p1 section-m1">
    <div class="newtext">
        <h4>Sign Up For newletters</h4>
        <p>Get E-mail update about our latest shop and <span>special offers.</span></p>
    </div>
    <div class="form">
        <input type="text" placeholder="Your email address">
        <button class="normal">Sign Up</button>
    </div>
</section>