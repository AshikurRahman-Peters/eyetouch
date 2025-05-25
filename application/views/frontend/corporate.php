<style>
.mobile-login-toggle {
    height: auto !important;
    max-height: 1000px !important;
    transition: all 0.25s ease-in !important;
    opacity: 1 !important;
}

.mobile-nav-link {
    padding-top: 5px !important;
    padding-bottom: 5px !important;
}

.mobile-login-opener {
    top: 0;
    right: 0;
    opacity: 0;
    max-height: 0;
    transition: all 0.15s ease-out;
    overflow: hidden;
    position: fixed;
    top: 60px;
    background: #333;
    color: #FFF;
    z-index: 9999;
    width: 300px;
}

.list-hidden {
    display: none;
}

.cats {
    margin-left: 13px;
}

.cats a {
    text-decoration: none;
}

.viewall {
    font-style: italic;
}

.cat1_bold {
    font-weight: bold;
}

.cat3_name .cat-name {
    color: #888;
}

.cat1_childs,
.cat2_childs {
    max-height: 1000px;
    transition: all 0.25s ease-in;
    opacity: 1;
}

.cat_hide {
    opacity: 0;
    max-height: 0;
    transition: all 0.15s ease-out;
    overflow: hidden;
}

.cat1_name,
.cat2_name,
.cat3_name {
    display: flex;
    padding: 8px 0px;
}

.cat-name {
    width: 100%;
    font-size: 15px;
    color: #000;
    line-height: 15px;
}

.cat-plus {
    padding: 0px 14px 0px 0px;
    line-height: .7rem;
}

.cat-header {
    padding-left: 10px;
    font-weight: bold;
    margin-top: 10px;
    margin-bottom: 2px;
    font-size: 1.1rem;
}

.jas-menu:hover .sub-menu {
    opacity: 1;
    visibility: visible;
}

.campaign {
    color: black;
}

.sub-menu {
    position: absolute !important;
    min-width: 100% !important;
    left: 0 !important;
    right: 0 !important;
    margin-top: 0;
    transition: none;
    display: table;
    opacity: 0;
    visibility: hidden;
    text-align: left;
    z-index: 10;
    padding: 0;
    box-shadow: 3px 3px 6px 0 rgb(0 0 0 / 10%);
    white-space: nowrap;
    background: #fff !important;
    height: 100% !important;
    width: calc(50vw);
    top: 85px;
}

.jas-menu>li:not(:last-child) {
    border-bottom: 0 solid;
}

.sub-menu>li:nth-child(2n) {
    background: #f7f7f7;
    height: 100%;
}

.sub-menu li a {
    font-weight: 400;
    font-size: 14px;
    color: #666;
    position: relative;
    text-decoration: none;
}

.sub-menu>li>a {
    font-weight: 500;
    font-size: 15px;
    color: #000;
}

.jas-menu>li>ul>.sub-column-item {
    display: table-cell;
}

.jas-menu ul li {
    line-height: 16px;
    padding: 10px 15px;
}

.sub-menu>li {
    display: table-cell;
    padding-left: 10px;
    min-width: 120px;
}

.sub-menu li {
    padding-top: 4px !important;
    padding-bottom: 4px !important;
    list-style: none;
}

.jas-menu li {
    font-size: 14px;
    list-style: none;
    position: relative;
}

.jas-menu .sub-column-item>a {
    color: #222;
    text-transform: uppercase;
    font-weight: 500;
    padding: 6px 0;
}

.sub-column-item .sub-column {
    padding: 0;
    left: 250px;
    top: 20%;
    padding-bottom: 15px;
}

.jas-menu ul li:not(:last-child) {
    border-bottom: 0 solid;
}

.sub-column-item .sub-column>li {
    padding: 6px 0;
}

.sub-menu li {
    padding-top: 4px !important;
    padding-bottom: 4px !important;
}









.account_ul {
    text-align: left;
    background: #484848;
    list-style: none;
    position: absolute;
    z-index: 9;
    width: 150px;
    right: 23px;
    transition: .3s ease-in;
    display: none;
    padding-left: 15px;
    z-index: 999;
}

.account_ul>li:not(:last-child) {
    border-bottom: 1px solid #76daff;
}

.account-item {
    color: #FFF;
}

.account-item:hover {
    color: #FFF;
}

.fab-account {
    cursor: pointer;
}

.mobile-nav-sidebar {
    overflow-y: scroll;
    height: calc(100vh - 60px);
    padding-bottom: 100px;
}

.mobile-nav-sidebar>.dark {
    background: #666;
    color: #f1f1f1;
    line-height: 25px;
    font-weight: normal;
}

.mobile-nav-sidebar>.dark:after {
    line-height: 25px;
}

.nav-sidebar-logged-in {
    display: block;
    float: left;
    width: 100%;
    background: #666;
    color: #eee;
    padding-top: 10px;
    padding-bottom: 10px;
    overflow-y: scroll;
    /* position: absolute; */
    top: 140px;
    bottom: 0px;
}

.nav-dash-item::after {
    after\ \{\ display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-weight: normal;
    font-size: 14px;
    line-height: 1;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: "\f054";
    float: right;
    vertical-align: middle;
    line-height: 35px;
    margin-right: 12px;
    font-weight: lighter;
    font-size: small;
    color: #b5b5b5;
}

.nav-dash-item {
    color: #FFF;
    line-height: 35px;
    padding-left: 10%;
}

.nav-dash-item>a {
    color: #E8E8E8;
    font-size: .9em;
}

.nav-dash-item i {
    margin-right: 5px;
    padding: 6px;
    font-size: .8em;
    border-radius: 1em;
    background: #4d4d4d;
    border-top: 1px solid #000;
    border-left: 1px solid #222;
    width: 24px;
    height: 24px;
}

.nav-seller {
    padding-bottom: 40px;
}

.mobile-nav-sidebar span {
    background: #666;
    color: #c8c8c8;
}

.search-home-mobile {
    background: #ddd;
    position: fixed;
    top: 60px;
    width: 100%;
    margin: 0 -10px !important;
    display: none;
    line-height: unset !important;
    white-space: nowrap;
}

.mobile-search-bar {
    width: 100%;
    position: relative;
    padding-bottom: 4px;
}

.mobile-search-bar span {
    top: 95% !important;
    margin: 0 auto;
    padding: 0px 10px;
    width: 100%;
    font-size: .9em;
}

.mobile-search-bar input {
    border-radius: 5px !important;
    border: 0px !important;
}

.nav-menu-desktop {
    position: absolute;
    width: 100%;
}

.nav-menu-home-mobile {
    position: fixed;
    width: 100%;
}

body {
    margin-top: 120px;
}

.sub-menu li a:hover {
    color: #04aeef;
}

#app-promo-modal .close {
    opacity: 1;
    position: absolute;
    right: 21px;
    top: 10px;
}

#app-promo-modal .close span {
    color: #282828;
    font-weight: bold;
    font-size: 40px;
}

@media(max-width: 996px) {
    #app-promo-modal .modal-dialog {
        margin-top: 100px;
    }

    #app-promo-modal .close span {
        font-size: 30px;
    }

    #app-promo-modal .close {
        right: 18px;
    }

}

@media(max-width: 700px) {
    .mobile-login-opener {
        width: 60vw;
    }
}

.fb-share-button>span {
    height: 24px !important;
}
</style>

<style>
.wrapper-div {
    width: 100%;
    overflow-x: hidden;
}

.non-home-margin-50 {
    margin-left: 0px !important;
    margin-right: 0px !important;
}

.slick-prev::before,
.slick-next::before {
    font-size: 30px !important;
    color: #000 !important;
}

.float-left {
    float: left;
}

.cl-preview>img {
    width: 70px;
}

.commonmodal-body>p {
    margin: 0px !important;
}

.thankyoumodal-body>p {
    margin: 0px !important;
}

.info-data-bulk>p {
    margin: 0px !important;
}

.carousel-items2 {
    padding-right: 0.9375rem;
    padding-left: 0.9375rem;
    width: 90%;
    margin: 0 auto;
}

.carousel-row img {
    max-width: 100%;
}

.carousel {
    background: unset;
    /* border: 1px solid black; */
}

#print_type_carousel .slick-prev,
#print_type_carousel .slick-next {
    top: 33%;
}

.slick-next {
    right: -15px !important;
}

.how-works-number {
    background: #f3f3f3;
    border-radius: 85px;
    font-size: 85px;
    margin: auto;
    text-align: center;
}

.secret {
    margin-top: 25px !important;
    margin-bottom: 25px !important;
}

.secret-2 {
    background: #d8f8f0;
    padding: 25px 0px;
    transform: skew(-20deg, 0deg);
    color: #000;
    border-left: 10px solid #00aeef;
    border-right: 10px solid #fbb03b;
}

.secret-2>div {
    width: fit-content;
    margin: auto;
    font-size: 3.5rem;
    transform: skew(20deg, 0deg);
    line-height: 3.5rem;
}

.secret-2 span {
    width: 100%;
    display: block;
    font-size: 1.865rem;
    text-align: right;
    line-height: 1.9rem;
}

.how-its-easy {
    font-size: 85px;
    margin: auto;
    text-align: center;
}

.section {
    margin-right: 0px;
    padding: 0px 20px;
    position: relative;
    margin-top: 25px;
    text-align: left;
}

.section>div {
    display: flex;
    flex-direction: column;
    margin: 5px 0px;
}

.form-input>label {
    font-size: 14px;
    margin-bottom: 1px;
    color: #777;
}

.info-section {
    margin-top: 60px !important;
    background: #f8f8f8;
    padding: 30px;
    border-radius: 10px;
}

.info-section-header i {
    color: #000000;
    background: #fbb03b;
    border-radius: 2.2rem;
    width: 2.4rem;
    height: 2.2rem;
    text-align: center;
    vertical-align: middle;
    margin: 0 auto;
    line-height: 2.2rem;
    margin-right: 10px;
}

.info-table tr:nth-child(2n+1)>td>b::before {
    content: "\f054";
    font: normal normal normal 14px/1 FontAwesome;
    color: #fbb03b;
    margin-right: 10px;
}

.wrapper-div {
    max-width: 100%;
    overflow-x: hidden;
}

.modal-header {
    background: #F44336;
}

.flex-cat-block {
    margin: 10px;
    color: #8f8f8f;
    font-size: 13px;
    border-radius: 10px;
    overflow: hidden;
    position: relative;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;
}

.home-element:nth-child(n+4) {
    margin-top: unset !important;
}

.flex-cat-img {
    position: unset !important;
}

.flex-cat-button>button {
    background: #FFF;
    border: none;
    border-top: 10px solid #d8f8f0;
}

.flex-cat-img>.img-container {
    padding: 45px;
}









@media (max-width: 1601px) {
    .how-its-easy {
        font-size: 70px;
    }
}

@media (max-width: 1401px) {
    .how-its-easy {
        font-size: 60px;
    }
}

@media (max-width: 1200px) {
    .how-its-easy {
        font-size: 50px;
    }
}

@media (max-width: 900px) {
    .how-its-easy {
        font-size: 50px;
    }
}

@media (max-width: 991px) {
    .corp-form {
        margin-top: 30px;
    }
}

@media (max-width: 575px) {
    .info-section {
        padding: 15px;
    }

    .how-its-easy {
        font-size: 50px;
    }
}
</style>



<div class="wrapper-div">
    <div class="container">
    </div>
    <div class="container-fluid">
        <div>
            <div>
                <div class="bulk-header" style="background-image: url('img/corporate/wholesale-cover2.jpg');">
                    <h1 class="bulk-landing-h1">Good Quality and Well fitted T-shirts for your Company, Batch or
                        Business.</h1>
                    <a class="btn btn-primary bulk-landing-start" href="#contact-us-form">Order In Bulk</a>
                </div>
                <br>
                <div class="text-center home-element" style="margin: 0 auto; margin-top: 20px;">
                    <h1 class="text-center">Sustainable Custom Merchandise & Corporate Gift Solutions.</h1>
                    <p>
                        We specialize in providing sustainable, budget-friendly, and top-tier custom merchandise
                        and
                        corporate gift solutions catering to a diverse clientele, spanning from dynamic startups
                        to esteemed multinational corporations.
                        Backed by a comprehensive in-house production facility, we guarantee a seamless
                        production process and uphold unwavering standards of quality.
                    </p>
                    <!-- <button class="btn btn-primary bulk-landing-start">Order Now!</button> -->
                </div>



                <div class="row home-content secret" style="margin: 25px auto;">
                    <div class="col-lg-4 col-sm-1 secret-1"></div>
                    <div class="col-lg-4 col-sm-10 secret-2">
                        <div><span>PRODUCT LINEUP</span></div>
                    </div>
                    <div class="col-lg-4 col-sm-1 secret-3"></div>
                </div>


                <div class="home-element product-lineup">
                    <div class="row">
                        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class='flex-cat-block'>
                                <div class='flex-cat-img'>
                                    <div class="img-container"><img src='img/corporate/marchandise/101.jpg'>
                                    </div>
                                    <div class='flex-cat-button'><button>T-shirt</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class='flex-cat-block'>
                                <div class='flex-cat-img'>
                                    <div class="img-container"><img src='img/corporate/marchandise/102.jpg'>
                                    </div>
                                    <div class='flex-cat-button'><button>Polo T-shirt</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class='flex-cat-block'>
                                <div class='flex-cat-img'>
                                    <div class="img-container"><img src='img/corporate/marchandise/103.jpg'>
                                    </div>
                                    <div class='flex-cat-button'><button>Hoodie/Sweatshirt</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class='flex-cat-block'>
                                <div class='flex-cat-img'>
                                    <div class="img-container"><img src='img/corporate/marchandise/104.jpg'>
                                    </div>
                                    <div class='flex-cat-button'><button>Sports/Dyesub T-shirt</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class='flex-cat-block'>
                                <div class='flex-cat-img'>
                                    <div class="img-container"><img src='img/corporate/marchandise/105.jpg'>
                                    </div>
                                    <div class='flex-cat-button'><button>Jacket</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class='flex-cat-block'>
                                <div class='flex-cat-img'>
                                    <div class="img-container"><img src='img/corporate/marchandise/106.jpg'>
                                    </div>
                                    <div class='flex-cat-button'><button>Shirt</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class='flex-cat-block'>
                                <div class='flex-cat-img'>
                                    <div class="img-container"><img src='img/corporate/marchandise/107.jpg'>
                                    </div>
                                    <div class='flex-cat-button'><button>Cap/Hat</button></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class='flex-cat-block'>
                                <div class='flex-cat-img'>
                                    <div class="img-container"><img src='img/corporate/marchandise/108.jpg'>
                                    </div>
                                    <div class='flex-cat-button'><button>Certified Face Mask</button></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class='flex-cat-block'>
                                <div class='flex-cat-img'>
                                    <div class="img-container"><img src='img/corporate/marchandise/109.jpg'>
                                    </div>
                                    <div class='flex-cat-button'><button>Water Bottle</button></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class='flex-cat-block'>
                                <div class='flex-cat-img'>
                                    <div class="img-container"><img src='img/corporate/marchandise/110.jpg'>
                                    </div>
                                    <div class='flex-cat-button'><button>Pants</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class='flex-cat-block'>
                                <div class='flex-cat-img'>
                                    <div class="img-container"><img src='img/corporate/marchandise/111.jpg'>
                                    </div>
                                    <div class='flex-cat-button'><button>Wallet</button></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <div class='flex-cat-block'>
                                <div class='flex-cat-img'>
                                    <div class="img-container"><img src='img/corporate/marchandise/112.jpg'>
                                    </div>
                                    <div class='flex-cat-button'><button>Socks</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="row home-content secret" style="margin: 25px auto;">
                <div class="col-lg-4 col-sm-1 secret-1"></div>
                <div class="col-lg-4 col-sm-10 secret-2"><div><span>WHY CHOOSE US?</span></div></div>
                <div class="col-lg-4 col-sm-1 secret-3"></div>
            </div> -->


                <div class="row home-content" style="margin-top: 25px">
                    <div class="col-lg-1 col-md-3 col-sm-3 col-xs-3 how-its-easy">
                        <div style="color:#2b9a73"><i class="fa fa-check" aria-hidden="true"></i></div>
                    </div>
                    <div class="col-lg-3 col-md-9 col-sm-9 col-xs-9 how-it-works-container">
                        <div>
                            <h5>Quality Craftsmanship</h5>
                            <span>Our unwavering commitment to meticulous attention to detail ensures that our
                                products not only boast a visually appealing aesthetic but also stand the test
                                of time.</span>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-3 col-sm-3 col-xs-3 how-its-easy">
                        <div style="color:#00aeef"><i class="fa fa-recycle" aria-hidden="true"></i></div>
                    </div>
                    <div class="col-lg-3 col-md-9 col-sm-9 col-xs-9 how-it-works-container">
                        <div>
                            <h5>Sustainability Focus</h5>
                            <span>Through our embrace of recycled plastics and 100% organic materials, we
                                seamlessly translate eco-conscious choices into premium fabrics.</span>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-3 col-sm-3 col-xs-3 how-its-easy">
                        <div style="color:#fbb03b"><i class="fa fa-cogs" aria-hidden="true"></i></div>
                    </div>
                    <div class="col-lg-3 col-md-9 col-sm-9 col-xs-9 how-it-works-container">
                        <div>
                            <h5>Pioneering Expertise</h5>
                            <span>With over six years of expertise in the custom merchandise and apparel
                                industry, we have consistently set the benchmark for excellence.</span>
                        </div>
                    </div>
                </div>

                <div class="row home-content">
                    <div class="col-lg-1 col-md-3 col-sm-3 col-xs-3 how-its-easy">
                        <div style="color:#2b9a73"><i class="fa fa-percent" aria-hidden="true"></i></div>
                    </div>
                    <div class="col-lg-3 col-md-9 col-sm-9 col-xs-9 how-it-works-container">
                        <div>
                            <h5>Affordable Pricing</h5>
                            <span>Elevate your expectations without exceeding your budget – discover superior
                                custom merchandise that embodies high quality without a hefty price tag.</span>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-3 col-sm-3 col-xs-3 how-its-easy">
                        <div style="color:#00aeef"><i class="fa fa-globe" aria-hidden="true"></i></div>
                    </div>
                    <div class="col-lg-3 col-md-9 col-sm-9 col-xs-9 how-it-works-container">
                        <div>
                            <h5>Worldwide Shipping</h5>
                            <span>Experience seamless global accessibility with our reliable and efficient
                                worldwide shipping, ensuring your order reaches your doorstep, regardless of
                                your location.</span>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-3 col-sm-3 col-xs-3 how-its-easy">
                        <div style="color:#fbb03b"><i class="fa fa-bolt" aria-hidden="true"></i></div>
                    </div>
                    <div class="col-lg-3 col-md-9 col-sm-9 col-xs-9 how-it-works-container">
                        <div>
                            <h5>Creative Design Support</h5>
                            <span>We breathe life into your brand's narrative through creative designs that not
                                only capture attention but also resonate with diverse audiences.</span>
                        </div>
                    </div>
                </div>

                <div class="row home-content info-section" style="margin: 50px auto;">
                    <div class="col-lg-6">
                        <h1 class='txt-description'>Your One-stop<br>Merchandise Partner</h1>
                        <p>
                            <br>The traditional way of sourcing for a reliable company for customised corporate
                            merchandise can be frustrating and time-consuming.<br><br>
                            We oversee every aspect, from conceptualizing merchandise designs to worldwide
                            distribution, ensuring your brand leaves a lasting and impactful impression.<br><br>
                            <a href="#contact-us-form">Ask us</a> about how we can help with your merchandise.
                        </p>
                    </div>
                    <div class="col-lg-6 how-it-works-container">
                        <img style="width:100%" src="mesba_upload/bulk1.jpg" />
                    </div>
                </div>

                <div class="container-fluid text-center carousel home-content info-section" id="contact-us-form"
                    style="padding:0px">
                    <div class="carousel-title">
                        <div class='row'>
                            <div class='col-lg-6 col-md-12 col-sm-12 col-xs-12'>
                                <div>
                                    <h3 style="font-size: 1.8rem; line-height: 1.5rem">Share Your Needs</h3>
                                    <span>We'll Make It Happen!</span>
                                </div>
                                <form method="post">
                                    <div class='section'>
                                        <div class='col-lg-12 col-sm-12 form-input'>
                                            <label>Your Name</label>
                                            <input type='text' id='name' maxlength="199" required />
                                        </div>
                                    </div>
                                    <div class='section'>
                                        <div class='col-lg-6 col-sm-6 form-input'>
                                            <label>Phone</label>
                                            <input id="phone" type="tel" name="phone" maxlength="20" required />
                                        </div>
                                        <div class='col-lg-6 col-sm-6 form-input'>
                                            <label>Email</label>
                                            <input type='email' id='email' maxlength="199" />
                                        </div>
                                    </div>
                                    <div class='section'>
                                        <div class='col-lg-12 col-sm-12 form-input'>
                                            <label>Company/Organization</label>
                                            <input id="company" type="text" name="company" maxlength="199" required />
                                        </div>
                                    </div>
                                    <div class='section'>
                                        <div class='col-lg-12 col-sm-12 form-input'>
                                            <label>Address</label>
                                            <input id="address" type="text" name="address" maxlength="299" required />
                                        </div>
                                    </div>
                                    <div class='section'>
                                        <div class='col-lg-12 col-sm-12 form-input'>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class='section'>
                                        <div class='col-lg-12 col-sm-12 form-input'>
                                            <label>Product Type (T-shirt, Polo T-shirt, Jacket, Gift Item
                                                etc.)</label>
                                            <input type='text' name='product_type' id='product_type' maxlength="499" />
                                        </div>
                                    </div>
                                    <div class='section'>
                                        <div class='col-lg-6 col-sm-6 form-input'>
                                            <label>Estimated Delivery Date</label>
                                            <input type='text' id='delivery_time' maxlength="199" />
                                        </div>
                                        <div class='col-lg-6 col-sm-6 form-input'>
                                            <label>Approx. Quantity</label>
                                            <input type='number' id='quantity' maxlength="199" />
                                        </div>
                                    </div>

                                    <div class='section'>
                                        <div class='col-lg-12 col-sm-12 form-input'>
                                            <label>Description (Optional)</label>
                                            <textarea id='description' style="min-height: 100px"></textarea>
                                        </div>
                                    </div>
                                    <div class='section'>
                                        <div class='col-lg-12 col-sm-12 form-input'>
                                            <div class="g-recaptcha"
                                                data-sitekey="6LfTgEMUAAAAAHPl3JkDhsmjUa0GHtjApLhZ5jNs"></div>
                                        </div>
                                    </div>
                                    <div class='section'>
                                        <div class='col-lg-2 col-sm-4 form-input'>
                                            <button class="btn btn btn-primary submit-form">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class='col-lg-6 col-md-12 col-sm-12 col-xs-12 corp-form'>
                                <div>
                                    <h3 style="font-size: 1.8rem; line-height: 1.5rem">Or, we are just a call
                                        away</h3>
                                    <span>Your Solutions Await!</span>
                                </div>
                                <div class='section'>
                                    <div class='col-lg-12 col-sm-12'>
                                        let's talk and make your brand stand out!
                                        We are just one call away.<br>Or you can book a walk-in appointment with
                                        us.
                                    </div>
                                </div>
                                <div class='section'>
                                    <div class='col-lg-12 col-sm-12'>
                                        <strong>The Office</strong>
                                        <ul class="contact-list">
                                            <li>
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                Eye Touch,<br>
                                                Level 9, Rupayan Latifa Shamsuddin Square (Opposite of Sony
                                                Square)<br>
                                                Plot 3, Road 1, Section 1, Mirpur, Dhaka-1216, Bangladesh.
                                            </li>
                                            <li>
                                                <a href="https://api.whatsapp.com/send?phone=8801795695699"
                                                    target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i>
                                                    +880 1795 695 699 (Sales,
                                                    Whatsapp - Global)</a><br>
                                                <a href="tel:+8809677666888" target="_blank"><i class="fa fa-phone"
                                                        aria-hidden="true"></i> +880 96 77
                                                    666 888 (Customer Service)</a>
                                            </li>
                                            <li>
                                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                                <a href="mailto:sales@Eye Touch.com"
                                                    target="_blank">sales@Eye Touch.com</a>
                                            </li>
                                        </ul>
                                        <strong>Hours</strong>
                                        <ul class="contact-list">
                                            <li>
                                                Saturday-Thursday
                                            </li>
                                            <li>
                                                10:00 AM - 07:00 PM (GMT+6)
                                            </li>
                                        </ul>
                                        <div
                                            style="max-width:100%;list-style:none; transition: none;overflow:hidden;height:250px;">
                                            <div id="embed-map-display" style="height:100%; width:100%;max-width:100%;">
                                                <iframe style="height:100%;width:100%;border:0;" frameborder="0"
                                                    src="https://www.google.com/maps/embed/v1/place?q=Eye Touch,+Dhaka,+Bangladesh&amp;key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                                            </div>
                                            <style>
                                            #embed-map-display img {
                                                max-height: none;
                                                max-width: none !important;
                                                background: none !important;
                                            }
                                            </style>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>