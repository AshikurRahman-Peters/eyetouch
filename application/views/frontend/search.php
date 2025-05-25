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


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/instantsearch.css@7.1.1/themes/algolia-min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/css/tees.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<!--  <style media="screen">-->
<!--    body {-->
<!--      opacity: 0;-->
<!--    }-->
<!--  </style>-->


<script>
var cat_tree = {
    "Mens": 0,
    "Mens > Half Sleeve T-shirt": 1,
    "Mens > Half Sleeve T-shirt > Blank": 2,
    "Mens > Half Sleeve T-shirt > Cut & Stitch": 3,
    "Mens > Half Sleeve T-shirt > Cut & Stitch (Designer Edition)": 4,
    "Mens > Half Sleeve T-shirt > Printed": 5,
    "Mens > Half Sleeve T-shirt > Raglan": 6,
    "Mens > Half Sleeve T-shirt > Raglan (Designer Edition)": 7,
    "Mens > Half Sleeve T-shirt > Sports": 8,
    "Mens > Full Sleeve T-shirt": 9,
    "Mens > Full Sleeve T-shirt > Blank": 10,
    "Mens > Full Sleeve T-shirt > Cut & Stitch": 11,
    "Mens > Full Sleeve T-shirt > Cut & Stitch (Designer Edition)": 12,
    "Mens > Full Sleeve T-shirt > Printed": 13,
    "Mens > Full Sleeve T-shirt > Raglan": 14,
    "Mens > Full Sleeve T-shirt > Raglan (Designer Edition)": 15,
    "Mens > Full Sleeve T-shirt > Sports": 16,
    "Mens > Maggie": 17,
    "Mens > Shirt": 18,
    "Mens > Shirt > Casual Shirt": 19,
    "Mens > Shirt > Formal Shirt": 20,
    "Mens > Polo T-shirt": 21,
    "Mens > Polo T-shirt > Classic": 22,
    "Mens > Polo T-shirt > Cut & Stitch": 23,
    "Mens > Polo T-shirt > Printed": 24,
    "Mens > Hoodie": 25,
    "Mens > Jacket": 26,
    "Mens > Joggers": 27,
    "Mens > Sweatshirt": 28,
    "Mens > Comfy Trouser": 29,
    "Mens > Sports Trouser": 30,
    "Mens > Shorts": 31,
    "Mens > Shorts > Chino Shorts": 32,
    "Mens > Shorts > Gabardine Shorts": 33,
    "Mens > Shorts > Sports Shorts": 34,
    "Mens > Underwear": 35,
    "Mens > Underwear > Boxer Brief": 36,
    "Mens > Underwear > Boxer Shorts": 37,
    "Mens > Underwear > Trunk": 38,
    "Mens > Underwear > Woven Shorts": 39,
    "Mens > Socks": 40,
    "Mens > Socks > Classic": 41,
    "Mens > Socks > Sports": 42,
    "Mens > Socks > Urban": 43,
    "Mens > Panjabi": 44,
    "Mens > Tupi": 45,
    "Mens > Jeans": 46,
    "Mens > Pajama": 47,
    "Mens > Accesorries": 48,
    "Mens > Accesorries > Belt": 49,
    "Mens > Accesorries > Wallet": 50,
    "Mens > Chino Pants": 51,
    "Womens": 52,
    "Womens > T-Shirt": 53,
    "Womens > Comfy Trouser": 54,
    "Womens > Kurti Tunic And Tops": 55,
    "Womens > Pajamas": 56,
    "Womens > Pants": 57,
    "Kids": 58,
    "Kids > Polo T-shirt": 59,
    "Kids > Half Sleeve T-shirt": 60,
    "Kids > Half Sleeve T-shirt > Blank": 61,
    "Kids > Half Sleeve T-shirt > Printed": 62,
    "Kids > Maggie": 63,
    "Kids > Full Sleeve T-shirt": 64,
    "Kids > Shorts": 65,
    "Kids > Trouser": 66,
    "Face Mask": 67,
    "Face Mask > Professional 7 Layer Mask": 68,
    "Face Mask > Sports Edition": 69,
    "Face Mask > Womens Designer Edition": 70,
    "Face Mask > Womens Embroidery Edition": 71,
    "Face Mask > Kids Mask": 72,
    "Face Mask > Professional 7 Layer Mask (Combo)": 73,
    "Sports": 74,
    "Sports > Sports T-shirt": 75,
    "Sports > Football Jersey": 76,
    "New Arrival": 77,
    "Top Selling": 78,
    "Merchandise": 79,
    "Merchandise > Aurthohin": 80,
    "Merchandise > Grameenphone": 81,
    "Merchandise > ATC": 82,
    "Free Delivery": 83,
    "Winter Exclusive": 84,
    "Winter Exclusive > Full Sleeve T-shirt": 85,
    "Winter Exclusive > Hoodie": 86,
    "Winter Exclusive > Jacket": 87,
    "Winter Exclusive > Joggers": 88
};
</script>

<!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
<script>
! function(f, b, e, v, n, t, s) {
    if (f.fbq) return;
    n = f.fbq = function() {
        n.callMethod ?
            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
    };
    if (!f._fbq) f._fbq = n;
    n.push = n;
    n.loaded = !0;
    n.version = '2.0';
    n.queue = [];
    t = b.createElement(e);
    t.async = !0;
    t.src = v;
    s = b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t, s)
}(window, document, 'script',
    'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '556248491424491');
fbq('track', 'PageView');

/*(function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1492147,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
*/
</script>



<noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=556248491424491&ev=PageView&noscript=1" /></noscript>
<style type="text/css" id="notify-bootstrap">
.notifyjs-bootstrap-base {
    font-weight: bold;
    padding: 8px 15px 8px 14px;
    text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
    background-color: #fcf8e3;
    border: 1px solid #fbeed5;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    white-space: nowrap;
    padding-left: 25px;
    background-repeat: no-repeat;
    background-position: 3px 7px;
}

.notifyjs-bootstrap-error {
    color: #B94A48;
    background-color: #F2DEDE;
    border-color: #EED3D7;
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAtRJREFUeNqkVc1u00AQHq+dOD+0poIQfkIjalW0SEGqRMuRnHos3DjwAH0ArlyQeANOOSMeAA5VjyBxKBQhgSpVUKKQNGloFdw4cWw2jtfMOna6JOUArDTazXi/b3dm55socPqQhFka++aHBsI8GsopRJERNFlY88FCEk9Yiwf8RhgRyaHFQpPHCDmZG5oX2ui2yilkcTT1AcDsbYC1NMAyOi7zTX2Agx7A9luAl88BauiiQ/cJaZQfIpAlngDcvZZMrl8vFPK5+XktrWlx3/ehZ5r9+t6e+WVnp1pxnNIjgBe4/6dAysQc8dsmHwPcW9C0h3fW1hans1ltwJhy0GxK7XZbUlMp5Ww2eyan6+ft/f2FAqXGK4CvQk5HueFz7D6GOZtIrK+srupdx1GRBBqNBtzc2AiMr7nPplRdKhb1q6q6zjFhrklEFOUutoQ50xcX86ZlqaZpQrfbBdu2R6/G19zX6XSgh6RX5ubyHCM8nqSID6ICrGiZjGYYxojEsiw4PDwMSL5VKsC8Yf4VRYFzMzMaxwjlJSlCyAQ9l0CW44PBADzXhe7xMdi9HtTrdYjFYkDQL0cn4Xdq2/EAE+InCnvADTf2eah4Sx9vExQjkqXT6aAERICMewd/UAp/IeYANM2joxt+q5VI+ieq2i0Wg3l6DNzHwTERPgo1ko7XBXj3vdlsT2F+UuhIhYkp7u7CarkcrFOCtR3H5JiwbAIeImjT/YQKKBtGjRFCU5IUgFRe7fF4cCNVIPMYo3VKqxwjyNAXNepuopyqnld602qVsfRpEkkz+GFL1wPj6ySXBpJtWVa5xlhpcyhBNwpZHmtX8AGgfIExo0ZpzkWVTBGiXCSEaHh62/PoR0p/vHaczxXGnj4bSo+G78lELU80h1uogBwWLf5YlsPmgDEd4M236xjm+8nm4IuE/9u+/PH2JXZfbwz4zw1WbO+SQPpXfwG/BBgAhCNZiSb/pOQAAAAASUVORK5CYII=);
}

.notifyjs-bootstrap-success {
    color: #468847;
    background-color: #DFF0D8;
    border-color: #D6E9C6;
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAutJREFUeNq0lctPE0Ecx38zu/RFS1EryqtgJFA08YCiMZIAQQ4eRG8eDGdPJiYeTIwHTfwPiAcvXIwXLwoXPaDxkWgQ6islKlJLSQWLUraPLTv7Gme32zoF9KSTfLO7v53vZ3d/M7/fIth+IO6INt2jjoA7bjHCJoAlzCRw59YwHYjBnfMPqAKWQYKjGkfCJqAF0xwZjipQtA3MxeSG87VhOOYegVrUCy7UZM9S6TLIdAamySTclZdYhFhRHloGYg7mgZv1Zzztvgud7V1tbQ2twYA34LJmF4p5dXF1KTufnE+SxeJtuCZNsLDCQU0+RyKTF27Unw101l8e6hns3u0PBalORVVVkcaEKBJDgV3+cGM4tKKmI+ohlIGnygKX00rSBfszz/n2uXv81wd6+rt1orsZCHRdr1Imk2F2Kob3hutSxW8thsd8AXNaln9D7CTfA6O+0UgkMuwVvEFFUbbAcrkcTA8+AtOk8E6KiQiDmMFSDqZItAzEVQviRkdDdaFgPp8HSZKAEAL5Qh7Sq2lIJBJwv2scUqkUnKoZgNhcDKhKg5aH+1IkcouCAdFGAQsuWZYhOjwFHQ96oagWgRoUov1T9kRBEODAwxM2QtEUl+Wp+Ln9VRo6BcMw4ErHRYjH4/B26AlQoQQTRdHWwcd9AH57+UAXddvDD37DmrBBV34WfqiXPl61g+vr6xA9zsGeM9gOdsNXkgpEtTwVvwOklXLKm6+/p5ezwk4B+j6droBs2CsGa/gNs6RIxazl4Tc25mpTgw/apPR1LYlNRFAzgsOxkyXYLIM1V8NMwyAkJSctD1eGVKiq5wWjSPdjmeTkiKvVW4f2YPHWl3GAVq6ymcyCTgovM3FzyRiDe2TaKcEKsLpJvNHjZgPNqEtyi6mZIm4SRFyLMUsONSSdkPeFtY1n0mczoY3BHTLhwPRy9/lzcziCw9ACI+yql0VLzcGAZbYSM5CCSZg1/9oc/nn7+i8N9p/8An4JMADxhH+xHfuiKwAAAABJRU5ErkJggg==);
}

.notifyjs-bootstrap-info {
    color: #3A87AD;
    background-color: #D9EDF7;
    border-color: #BCE8F1;
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QYFAhkSsdes/QAAA8dJREFUOMvVlGtMW2UYx//POaWHXg6lLaW0ypAtw1UCgbniNOLcVOLmAjHZolOYlxmTGXVZdAnRfXQm+7SoU4mXaOaiZsEpC9FkiQs6Z6bdCnNYruM6KNBw6YWewzl9z+sHImEWv+vz7XmT95f/+3/+7wP814v+efDOV3/SoX3lHAA+6ODeUFfMfjOWMADgdk+eEKz0pF7aQdMAcOKLLjrcVMVX3xdWN29/GhYP7SvnP0cWfS8caSkfHZsPE9Fgnt02JNutQ0QYHB2dDz9/pKX8QjjuO9xUxd/66HdxTeCHZ3rojQObGQBcuNjfplkD3b19Y/6MrimSaKgSMmpGU5WevmE/swa6Oy73tQHA0Rdr2Mmv/6A1n9w9suQ7097Z9lM4FlTgTDrzZTu4StXVfpiI48rVcUDM5cmEksrFnHxfpTtU/3BFQzCQF/2bYVoNbH7zmItbSoMj40JSzmMyX5qDvriA7QdrIIpA+3cdsMpu0nXI8cV0MtKXCPZev+gCEM1S2NHPvWfP/hL+7FSr3+0p5RBEyhEN5JCKYr8XnASMT0xBNyzQGQeI8fjsGD39RMPk7se2bd5ZtTyoFYXftF6y37gx7NeUtJJOTFlAHDZLDuILU3j3+H5oOrD3yWbIztugaAzgnBKJuBLpGfQrS8wO4FZgV+c1IxaLgWVU0tMLEETCos4xMzEIv9cJXQcyagIwigDGwJgOAtHAwAhisQUjy0ORGERiELgG4iakkzo4MYAxcM5hAMi1WWG1yYCJIcMUaBkVRLdGeSU2995TLWzcUAzONJ7J6FBVBYIggMzmFbvdBV44Corg8vjhzC+EJEl8U1kJtgYrhCzgc/vvTwXKSib1paRFVRVORDAJAsw5FuTaJEhWM2SHB3mOAlhkNxwuLzeJsGwqWzf5TFNdKgtY5qHp6ZFf67Y/sAVadCaVY5YACDDb3Oi4NIjLnWMw2QthCBIsVhsUTU9tvXsjeq9+X1d75/KEs4LNOfcdf/+HthMnvwxOD0wmHaXr7ZItn2wuH2SnBzbZAbPJwpPx+VQuzcm7dgRCB57a1uBzUDRL4bfnI0RE0eaXd9W89mpjqHZnUI5Hh2l2dkZZUhOqpi2qSmpOmZ64Tuu9qlz/SEXo6MEHa3wOip46F1n7633eekV8ds8Wxjn37Wl63VVa+ej5oeEZ/82ZBETJjpJ1Rbij2D3Z/1trXUvLsblCK0XfOx0SX2kMsn9dX+d+7Kf6h8o4AIykuffjT8L20LU+w4AZd5VvEPY+XpWqLV327HR7DzXuDnD8r+ovkBehJ8i+y8YAAAAASUVORK5CYII=);
}

.notifyjs-bootstrap-warn {
    color: #C09853;
    background-color: #FCF8E3;
    border-color: #FBEED5;
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAMAAAC6V+0/AAABJlBMVEXr6eb/2oD/wi7/xjr/0mP/ykf/tQD/vBj/3o7/uQ//vyL/twebhgD/4pzX1K3z8e349vK6tHCilCWbiQymn0jGworr6dXQza3HxcKkn1vWvV/5uRfk4dXZ1bD18+/52YebiAmyr5S9mhCzrWq5t6ufjRH54aLs0oS+qD751XqPhAybhwXsujG3sm+Zk0PTwG6Shg+PhhObhwOPgQL4zV2nlyrf27uLfgCPhRHu7OmLgAafkyiWkD3l49ibiAfTs0C+lgCniwD4sgDJxqOilzDWowWFfAH08uebig6qpFHBvH/aw26FfQTQzsvy8OyEfz20r3jAvaKbhgG9q0nc2LbZxXanoUu/u5WSggCtp1anpJKdmFz/zlX/1nGJiYmuq5Dx7+sAAADoPUZSAAAAAXRSTlMAQObYZgAAAAFiS0dEAIgFHUgAAAAJcEhZcwAACxMAAAsTAQCanBgAAAAHdElNRQfdBgUBGhh4aah5AAAAlklEQVQY02NgoBIIE8EUcwn1FkIXM1Tj5dDUQhPU502Mi7XXQxGz5uVIjGOJUUUW81HnYEyMi2HVcUOICQZzMMYmxrEyMylJwgUt5BljWRLjmJm4pI1hYp5SQLGYxDgmLnZOVxuooClIDKgXKMbN5ggV1ACLJcaBxNgcoiGCBiZwdWxOETBDrTyEFey0jYJ4eHjMGWgEAIpRFRCUt08qAAAAAElFTkSuQmCC);
}
</style>
<style>
@-webkit-keyframes swal2-show {
    0% {
        -webkit-transform: scale(.7);
        transform: scale(.7)
    }

    45% {
        -webkit-transform: scale(1.05);
        transform: scale(1.05)
    }

    80% {
        -webkit-transform: scale(.95);
        transform: scale(.95)
    }

    100% {
        -webkit-transform: scale(1);
        transform: scale(1)
    }
}

@keyframes swal2-show {
    0% {
        -webkit-transform: scale(.7);
        transform: scale(.7)
    }

    45% {
        -webkit-transform: scale(1.05);
        transform: scale(1.05)
    }

    80% {
        -webkit-transform: scale(.95);
        transform: scale(.95)
    }

    100% {
        -webkit-transform: scale(1);
        transform: scale(1)
    }
}

@-webkit-keyframes swal2-hide {
    0% {
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 1
    }

    100% {
        -webkit-transform: scale(.5);
        transform: scale(.5);
        opacity: 0
    }
}

@keyframes swal2-hide {
    0% {
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 1
    }

    100% {
        -webkit-transform: scale(.5);
        transform: scale(.5);
        opacity: 0
    }
}

@-webkit-keyframes swal2-animate-success-line-tip {
    0% {
        top: 1.1875em;
        left: .0625em;
        width: 0
    }

    54% {
        top: 1.0625em;
        left: .125em;
        width: 0
    }

    70% {
        top: 2.1875em;
        left: -.375em;
        width: 3.125em
    }

    84% {
        top: 3em;
        left: 1.3125em;
        width: 1.0625em
    }

    100% {
        top: 2.8125em;
        left: .875em;
        width: 1.5625em
    }
}

@keyframes swal2-animate-success-line-tip {
    0% {
        top: 1.1875em;
        left: .0625em;
        width: 0
    }

    54% {
        top: 1.0625em;
        left: .125em;
        width: 0
    }

    70% {
        top: 2.1875em;
        left: -.375em;
        width: 3.125em
    }

    84% {
        top: 3em;
        left: 1.3125em;
        width: 1.0625em
    }

    100% {
        top: 2.8125em;
        left: .875em;
        width: 1.5625em
    }
}

@-webkit-keyframes swal2-animate-success-line-long {
    0% {
        top: 3.375em;
        right: 2.875em;
        width: 0
    }

    65% {
        top: 3.375em;
        right: 2.875em;
        width: 0
    }

    84% {
        top: 2.1875em;
        right: 0;
        width: 3.4375em
    }

    100% {
        top: 2.375em;
        right: .5em;
        width: 2.9375em
    }
}

@keyframes swal2-animate-success-line-long {
    0% {
        top: 3.375em;
        right: 2.875em;
        width: 0
    }

    65% {
        top: 3.375em;
        right: 2.875em;
        width: 0
    }

    84% {
        top: 2.1875em;
        right: 0;
        width: 3.4375em
    }

    100% {
        top: 2.375em;
        right: .5em;
        width: 2.9375em
    }
}

@-webkit-keyframes swal2-rotate-success-circular-line {
    0% {
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg)
    }

    5% {
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg)
    }

    12% {
        -webkit-transform: rotate(-405deg);
        transform: rotate(-405deg)
    }

    100% {
        -webkit-transform: rotate(-405deg);
        transform: rotate(-405deg)
    }
}

@keyframes swal2-rotate-success-circular-line {
    0% {
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg)
    }

    5% {
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg)
    }

    12% {
        -webkit-transform: rotate(-405deg);
        transform: rotate(-405deg)
    }

    100% {
        -webkit-transform: rotate(-405deg);
        transform: rotate(-405deg)
    }
}

@-webkit-keyframes swal2-animate-error-x-mark {
    0% {
        margin-top: 1.625em;
        -webkit-transform: scale(.4);
        transform: scale(.4);
        opacity: 0
    }

    50% {
        margin-top: 1.625em;
        -webkit-transform: scale(.4);
        transform: scale(.4);
        opacity: 0
    }

    80% {
        margin-top: -.375em;
        -webkit-transform: scale(1.15);
        transform: scale(1.15)
    }

    100% {
        margin-top: 0;
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 1
    }
}

@keyframes swal2-animate-error-x-mark {
    0% {
        margin-top: 1.625em;
        -webkit-transform: scale(.4);
        transform: scale(.4);
        opacity: 0
    }

    50% {
        margin-top: 1.625em;
        -webkit-transform: scale(.4);
        transform: scale(.4);
        opacity: 0
    }

    80% {
        margin-top: -.375em;
        -webkit-transform: scale(1.15);
        transform: scale(1.15)
    }

    100% {
        margin-top: 0;
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 1
    }
}

@-webkit-keyframes swal2-animate-error-icon {
    0% {
        -webkit-transform: rotateX(100deg);
        transform: rotateX(100deg);
        opacity: 0
    }

    100% {
        -webkit-transform: rotateX(0);
        transform: rotateX(0);
        opacity: 1
    }
}

@keyframes swal2-animate-error-icon {
    0% {
        -webkit-transform: rotateX(100deg);
        transform: rotateX(100deg);
        opacity: 0
    }

    100% {
        -webkit-transform: rotateX(0);
        transform: rotateX(0);
        opacity: 1
    }
}

body.swal2-toast-shown .swal2-container {
    position: fixed;
    background-color: transparent
}

body.swal2-toast-shown .swal2-container.swal2-shown {
    background-color: transparent
}

body.swal2-toast-shown .swal2-container.swal2-top {
    top: 0;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%)
}

body.swal2-toast-shown .swal2-container.swal2-top-end,
body.swal2-toast-shown .swal2-container.swal2-top-right {
    top: 0;
    right: 0;
    bottom: auto;
    left: auto
}

body.swal2-toast-shown .swal2-container.swal2-top-left,
body.swal2-toast-shown .swal2-container.swal2-top-start {
    top: 0;
    right: auto;
    bottom: auto;
    left: 0
}

body.swal2-toast-shown .swal2-container.swal2-center-left,
body.swal2-toast-shown .swal2-container.swal2-center-start {
    top: 50%;
    right: auto;
    bottom: auto;
    left: 0;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%)
}

body.swal2-toast-shown .swal2-container.swal2-center {
    top: 50%;
    right: auto;
    bottom: auto;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%)
}

body.swal2-toast-shown .swal2-container.swal2-center-end,
body.swal2-toast-shown .swal2-container.swal2-center-right {
    top: 50%;
    right: 0;
    bottom: auto;
    left: auto;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%)
}

body.swal2-toast-shown .swal2-container.swal2-bottom-left,
body.swal2-toast-shown .swal2-container.swal2-bottom-start {
    top: auto;
    right: auto;
    bottom: 0;
    left: 0
}

body.swal2-toast-shown .swal2-container.swal2-bottom {
    top: auto;
    right: auto;
    bottom: 0;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%)
}

body.swal2-toast-shown .swal2-container.swal2-bottom-end,
body.swal2-toast-shown .swal2-container.swal2-bottom-right {
    top: auto;
    right: 0;
    bottom: 0;
    left: auto
}

body.swal2-toast-column .swal2-toast {
    flex-direction: column;
    align-items: stretch
}

body.swal2-toast-column .swal2-toast .swal2-actions {
    flex: 1;
    align-self: stretch;
    height: 2.2em;
    margin-top: .3125em
}

body.swal2-toast-column .swal2-toast .swal2-loading {
    justify-content: center
}

body.swal2-toast-column .swal2-toast .swal2-input {
    height: 2em;
    margin: .3125em auto;
    font-size: 1em
}

body.swal2-toast-column .swal2-toast .swal2-validation-message {
    font-size: 1em
}

.swal2-popup.swal2-toast {
    flex-direction: row;
    align-items: center;
    width: auto;
    padding: .625em;
    box-shadow: 0 0 .625em #d9d9d9;
    overflow-y: hidden
}

.swal2-popup.swal2-toast .swal2-header {
    flex-direction: row
}

.swal2-popup.swal2-toast .swal2-title {
    flex-grow: 1;
    justify-content: flex-start;
    margin: 0 .6em;
    font-size: 1em
}

.swal2-popup.swal2-toast .swal2-footer {
    margin: .5em 0 0;
    padding: .5em 0 0;
    font-size: .8em
}

.swal2-popup.swal2-toast .swal2-close {
    position: initial;
    width: .8em;
    height: .8em;
    line-height: .8
}

.swal2-popup.swal2-toast .swal2-content {
    justify-content: flex-start;
    font-size: 1em
}

.swal2-popup.swal2-toast .swal2-icon {
    width: 2em;
    min-width: 2em;
    height: 2em;
    margin: 0
}

.swal2-popup.swal2-toast .swal2-icon-text {
    font-size: 2em;
    font-weight: 700;
    line-height: 1em
}

.swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring {
    width: 2em;
    height: 2em
}

.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line] {
    top: .875em;
    width: 1.375em
}

.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
    left: .3125em
}

.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
    right: .3125em
}

.swal2-popup.swal2-toast .swal2-actions {
    height: auto;
    margin: 0 .3125em
}

.swal2-popup.swal2-toast .swal2-styled {
    margin: 0 .3125em;
    padding: .3125em .625em;
    font-size: 1em
}

.swal2-popup.swal2-toast .swal2-styled:focus {
    box-shadow: 0 0 0 .0625em #fff, 0 0 0 .125em rgba(50, 100, 150, .4)
}

.swal2-popup.swal2-toast .swal2-success {
    border-color: #a5dc86
}

.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line] {
    position: absolute;
    width: 2em;
    height: 2.8125em;
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
    border-radius: 50%
}

.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left] {
    top: -.25em;
    left: -.9375em;
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg);
    -webkit-transform-origin: 2em 2em;
    transform-origin: 2em 2em;
    border-radius: 4em 0 0 4em
}

.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right] {
    top: -.25em;
    left: .9375em;
    -webkit-transform-origin: 0 2em;
    transform-origin: 0 2em;
    border-radius: 0 4em 4em 0
}

.swal2-popup.swal2-toast .swal2-success .swal2-success-ring {
    width: 2em;
    height: 2em
}

.swal2-popup.swal2-toast .swal2-success .swal2-success-fix {
    top: 0;
    left: .4375em;
    width: .4375em;
    height: 2.6875em
}

.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line] {
    height: .3125em
}

.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip] {
    top: 1.125em;
    left: .1875em;
    width: .75em
}

.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long] {
    top: .9375em;
    right: .1875em;
    width: 1.375em
}

.swal2-popup.swal2-toast.swal2-show {
    -webkit-animation: showSweetToast .5s;
    animation: showSweetToast .5s
}

.swal2-popup.swal2-toast.swal2-hide {
    -webkit-animation: hideSweetToast .2s forwards;
    animation: hideSweetToast .2s forwards
}

.swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-tip {
    -webkit-animation: animate-toast-success-tip .75s;
    animation: animate-toast-success-tip .75s
}

.swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-long {
    -webkit-animation: animate-toast-success-long .75s;
    animation: animate-toast-success-long .75s
}

@-webkit-keyframes showSweetToast {
    0% {
        -webkit-transform: translateY(-.625em) rotateZ(2deg);
        transform: translateY(-.625em) rotateZ(2deg);
        opacity: 0
    }

    33% {
        -webkit-transform: translateY(0) rotateZ(-2deg);
        transform: translateY(0) rotateZ(-2deg);
        opacity: .5
    }

    66% {
        -webkit-transform: translateY(.3125em) rotateZ(2deg);
        transform: translateY(.3125em) rotateZ(2deg);
        opacity: .7
    }

    100% {
        -webkit-transform: translateY(0) rotateZ(0);
        transform: translateY(0) rotateZ(0);
        opacity: 1
    }
}

@keyframes showSweetToast {
    0% {
        -webkit-transform: translateY(-.625em) rotateZ(2deg);
        transform: translateY(-.625em) rotateZ(2deg);
        opacity: 0
    }

    33% {
        -webkit-transform: translateY(0) rotateZ(-2deg);
        transform: translateY(0) rotateZ(-2deg);
        opacity: .5
    }

    66% {
        -webkit-transform: translateY(.3125em) rotateZ(2deg);
        transform: translateY(.3125em) rotateZ(2deg);
        opacity: .7
    }

    100% {
        -webkit-transform: translateY(0) rotateZ(0);
        transform: translateY(0) rotateZ(0);
        opacity: 1
    }
}

@-webkit-keyframes hideSweetToast {
    0% {
        opacity: 1
    }

    33% {
        opacity: .5
    }

    100% {
        -webkit-transform: rotateZ(1deg);
        transform: rotateZ(1deg);
        opacity: 0
    }
}

@keyframes hideSweetToast {
    0% {
        opacity: 1
    }

    33% {
        opacity: .5
    }

    100% {
        -webkit-transform: rotateZ(1deg);
        transform: rotateZ(1deg);
        opacity: 0
    }
}

@-webkit-keyframes animate-toast-success-tip {
    0% {
        top: .5625em;
        left: .0625em;
        width: 0
    }

    54% {
        top: .125em;
        left: .125em;
        width: 0
    }

    70% {
        top: .625em;
        left: -.25em;
        width: 1.625em
    }

    84% {
        top: 1.0625em;
        left: .75em;
        width: .5em
    }

    100% {
        top: 1.125em;
        left: .1875em;
        width: .75em
    }
}

@keyframes animate-toast-success-tip {
    0% {
        top: .5625em;
        left: .0625em;
        width: 0
    }

    54% {
        top: .125em;
        left: .125em;
        width: 0
    }

    70% {
        top: .625em;
        left: -.25em;
        width: 1.625em
    }

    84% {
        top: 1.0625em;
        left: .75em;
        width: .5em
    }

    100% {
        top: 1.125em;
        left: .1875em;
        width: .75em
    }
}

@-webkit-keyframes animate-toast-success-long {
    0% {
        top: 1.625em;
        right: 1.375em;
        width: 0
    }

    65% {
        top: 1.25em;
        right: .9375em;
        width: 0
    }

    84% {
        top: .9375em;
        right: 0;
        width: 1.125em
    }

    100% {
        top: .9375em;
        right: .1875em;
        width: 1.375em
    }
}

@keyframes animate-toast-success-long {
    0% {
        top: 1.625em;
        right: 1.375em;
        width: 0
    }

    65% {
        top: 1.25em;
        right: .9375em;
        width: 0
    }

    84% {
        top: .9375em;
        right: 0;
        width: 1.125em
    }

    100% {
        top: .9375em;
        right: .1875em;
        width: 1.375em
    }
}

body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
    overflow-y: hidden
}

body.swal2-height-auto {
    height: auto !important
}

body.swal2-no-backdrop .swal2-shown {
    top: auto;
    right: auto;
    bottom: auto;
    left: auto;
    background-color: transparent
}

body.swal2-no-backdrop .swal2-shown>.swal2-modal {
    box-shadow: 0 0 10px rgba(0, 0, 0, .4)
}

body.swal2-no-backdrop .swal2-shown.swal2-top {
    top: 0;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%)
}

body.swal2-no-backdrop .swal2-shown.swal2-top-left,
body.swal2-no-backdrop .swal2-shown.swal2-top-start {
    top: 0;
    left: 0
}

body.swal2-no-backdrop .swal2-shown.swal2-top-end,
body.swal2-no-backdrop .swal2-shown.swal2-top-right {
    top: 0;
    right: 0
}

body.swal2-no-backdrop .swal2-shown.swal2-center {
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%)
}

body.swal2-no-backdrop .swal2-shown.swal2-center-left,
body.swal2-no-backdrop .swal2-shown.swal2-center-start {
    top: 50%;
    left: 0;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%)
}

body.swal2-no-backdrop .swal2-shown.swal2-center-end,
body.swal2-no-backdrop .swal2-shown.swal2-center-right {
    top: 50%;
    right: 0;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%)
}

body.swal2-no-backdrop .swal2-shown.swal2-bottom {
    bottom: 0;
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%)
}

body.swal2-no-backdrop .swal2-shown.swal2-bottom-left,
body.swal2-no-backdrop .swal2-shown.swal2-bottom-start {
    bottom: 0;
    left: 0
}

body.swal2-no-backdrop .swal2-shown.swal2-bottom-end,
body.swal2-no-backdrop .swal2-shown.swal2-bottom-right {
    right: 0;
    bottom: 0
}

.swal2-container {
    display: flex;
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    padding: 10px;
    background-color: transparent;
    z-index: 1060;
    overflow-x: hidden;
    -webkit-overflow-scrolling: touch
}

.swal2-container.swal2-top {
    align-items: flex-start
}

.swal2-container.swal2-top-left,
.swal2-container.swal2-top-start {
    align-items: flex-start;
    justify-content: flex-start
}

.swal2-container.swal2-top-end,
.swal2-container.swal2-top-right {
    align-items: flex-start;
    justify-content: flex-end
}

.swal2-container.swal2-center {
    align-items: center
}

.swal2-container.swal2-center-left,
.swal2-container.swal2-center-start {
    align-items: center;
    justify-content: flex-start
}

.swal2-container.swal2-center-end,
.swal2-container.swal2-center-right {
    align-items: center;
    justify-content: flex-end
}

.swal2-container.swal2-bottom {
    align-items: flex-end
}

.swal2-container.swal2-bottom-left,
.swal2-container.swal2-bottom-start {
    align-items: flex-end;
    justify-content: flex-start
}

.swal2-container.swal2-bottom-end,
.swal2-container.swal2-bottom-right {
    align-items: flex-end;
    justify-content: flex-end
}

.swal2-container.swal2-grow-fullscreen>.swal2-modal {
    display: flex !important;
    flex: 1;
    align-self: stretch;
    justify-content: center
}

.swal2-container.swal2-grow-row>.swal2-modal {
    display: flex !important;
    flex: 1;
    align-content: center;
    justify-content: center
}

.swal2-container.swal2-grow-column {
    flex: 1;
    flex-direction: column
}

.swal2-container.swal2-grow-column.swal2-bottom,
.swal2-container.swal2-grow-column.swal2-center,
.swal2-container.swal2-grow-column.swal2-top {
    align-items: center
}

.swal2-container.swal2-grow-column.swal2-bottom-left,
.swal2-container.swal2-grow-column.swal2-bottom-start,
.swal2-container.swal2-grow-column.swal2-center-left,
.swal2-container.swal2-grow-column.swal2-center-start,
.swal2-container.swal2-grow-column.swal2-top-left,
.swal2-container.swal2-grow-column.swal2-top-start {
    align-items: flex-start
}

.swal2-container.swal2-grow-column.swal2-bottom-end,
.swal2-container.swal2-grow-column.swal2-bottom-right,
.swal2-container.swal2-grow-column.swal2-center-end,
.swal2-container.swal2-grow-column.swal2-center-right,
.swal2-container.swal2-grow-column.swal2-top-end,
.swal2-container.swal2-grow-column.swal2-top-right {
    align-items: flex-end
}

.swal2-container.swal2-grow-column>.swal2-modal {
    display: flex !important;
    flex: 1;
    align-content: center;
    justify-content: center
}

.swal2-container:not(.swal2-top):not(.swal2-top-start):not(.swal2-top-end):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-start):not(.swal2-center-end):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-start):not(.swal2-bottom-end):not(.swal2-bottom-left):not(.swal2-bottom-right):not(.swal2-grow-fullscreen)>.swal2-modal {
    margin: auto
}

@media all and (-ms-high-contrast:none),
(-ms-high-contrast:active) {
    .swal2-container .swal2-modal {
        margin: 0 !important
    }
}

.swal2-container.swal2-fade {
    transition: background-color .1s
}

.swal2-container.swal2-shown {
    background-color: rgba(0, 0, 0, .4)
}

.swal2-popup {
    display: none;
    position: relative;
    flex-direction: column;
    justify-content: center;
    width: 32em;
    max-width: 100%;
    padding: 1.25em;
    border-radius: .3125em;
    background: #fff;
    font-family: inherit;
    font-size: 1rem;
    box-sizing: border-box
}

.swal2-popup:focus {
    outline: 0
}

.swal2-popup.swal2-loading {
    overflow-y: hidden
}

.swal2-popup .swal2-header {
    display: flex;
    flex-direction: column;
    align-items: center
}

.swal2-popup .swal2-title {
    display: block;
    position: relative;
    max-width: 100%;
    margin: 0 0 .4em;
    padding: 0;
    color: #595959;
    font-size: 1.875em;
    font-weight: 600;
    text-align: center;
    text-transform: none;
    word-wrap: break-word
}

.swal2-popup .swal2-actions {
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    margin: 1.25em auto 0;
    z-index: 1
}

.swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled[disabled] {
    opacity: .4
}

.swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:hover {
    background-image: linear-gradient(rgba(0, 0, 0, .1), rgba(0, 0, 0, .1))
}

.swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:active {
    background-image: linear-gradient(rgba(0, 0, 0, .2), rgba(0, 0, 0, .2))
}

.swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-confirm {
    width: 2.5em;
    height: 2.5em;
    margin: .46875em;
    padding: 0;
    border: .25em solid transparent;
    border-radius: 100%;
    border-color: transparent;
    background-color: transparent !important;
    color: transparent;
    cursor: default;
    box-sizing: border-box;
    -webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
    animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none
}

.swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-cancel {
    margin-right: 30px;
    margin-left: 30px
}

.swal2-popup .swal2-actions.swal2-loading :not(.swal2-styled).swal2-confirm::after {
    display: inline-block;
    width: 15px;
    height: 15px;
    margin-left: 5px;
    border: 3px solid #999;
    border-radius: 50%;
    border-right-color: transparent;
    box-shadow: 1px 1px 1px #fff;
    content: '';
    -webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
    animation: swal2-rotate-loading 1.5s linear 0s infinite normal
}

.swal2-popup .swal2-styled {
    margin: .3125em;
    padding: .625em 2em;
    font-weight: 500;
    box-shadow: none
}

.swal2-popup .swal2-styled:not([disabled]) {
    cursor: pointer
}

.swal2-popup .swal2-styled.swal2-confirm {
    border: 0;
    border-radius: .25em;
    background: initial;
    background-color: #3085d6;
    color: #fff;
    font-size: 1.0625em
}

.swal2-popup .swal2-styled.swal2-cancel {
    border: 0;
    border-radius: .25em;
    background: initial;
    background-color: #aaa;
    color: #fff;
    font-size: 1.0625em
}

.swal2-popup .swal2-styled:focus {
    outline: 0;
    box-shadow: 0 0 0 2px #fff, 0 0 0 4px rgba(50, 100, 150, .4)
}

.swal2-popup .swal2-styled::-moz-focus-inner {
    border: 0
}

.swal2-popup .swal2-footer {
    justify-content: center;
    margin: 1.25em 0 0;
    padding: 1em 0 0;
    border-top: 1px solid #eee;
    color: #545454;
    font-size: 1em
}

.swal2-popup .swal2-image {
    max-width: 100%;
    margin: 1.25em auto
}

.swal2-popup .swal2-close {
    position: absolute;
    top: 0;
    right: 0;
    justify-content: center;
    width: 1.2em;
    height: 1.2em;
    padding: 0;
    transition: color .1s ease-out;
    border: none;
    border-radius: 0;
    background: 0 0;
    color: #ccc;
    font-family: serif;
    font-size: 2.5em;
    line-height: 1.2;
    cursor: pointer;
    overflow: hidden
}

.swal2-popup .swal2-close:hover {
    -webkit-transform: none;
    transform: none;
    color: #f27474
}

.swal2-popup>.swal2-checkbox,
.swal2-popup>.swal2-file,
.swal2-popup>.swal2-input,
.swal2-popup>.swal2-radio,
.swal2-popup>.swal2-select,
.swal2-popup>.swal2-textarea {
    display: none
}

.swal2-popup .swal2-content {
    justify-content: center;
    margin: 0;
    padding: 0;
    color: #545454;
    font-size: 1.125em;
    font-weight: 300;
    line-height: normal;
    z-index: 1;
    word-wrap: break-word
}

.swal2-popup #swal2-content {
    text-align: center
}

.swal2-popup .swal2-checkbox,
.swal2-popup .swal2-file,
.swal2-popup .swal2-input,
.swal2-popup .swal2-radio,
.swal2-popup .swal2-select,
.swal2-popup .swal2-textarea {
    margin: 1em auto
}

.swal2-popup .swal2-file,
.swal2-popup .swal2-input,
.swal2-popup .swal2-textarea {
    width: 100%;
    transition: border-color .3s, box-shadow .3s;
    border: 1px solid #d9d9d9;
    border-radius: .1875em;
    font-size: 1.125em;
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .06);
    box-sizing: border-box
}

.swal2-popup .swal2-file.swal2-inputerror,
.swal2-popup .swal2-input.swal2-inputerror,
.swal2-popup .swal2-textarea.swal2-inputerror {
    border-color: #f27474 !important;
    box-shadow: 0 0 2px #f27474 !important
}

.swal2-popup .swal2-file:focus,
.swal2-popup .swal2-input:focus,
.swal2-popup .swal2-textarea:focus {
    border: 1px solid #b4dbed;
    outline: 0;
    box-shadow: 0 0 3px #c4e6f5
}

.swal2-popup .swal2-file::-webkit-input-placeholder,
.swal2-popup .swal2-input::-webkit-input-placeholder,
.swal2-popup .swal2-textarea::-webkit-input-placeholder {
    color: #ccc
}

.swal2-popup .swal2-file:-ms-input-placeholder,
.swal2-popup .swal2-input:-ms-input-placeholder,
.swal2-popup .swal2-textarea:-ms-input-placeholder {
    color: #ccc
}

.swal2-popup .swal2-file::-ms-input-placeholder,
.swal2-popup .swal2-input::-ms-input-placeholder,
.swal2-popup .swal2-textarea::-ms-input-placeholder {
    color: #ccc
}

.swal2-popup .swal2-file::placeholder,
.swal2-popup .swal2-input::placeholder,
.swal2-popup .swal2-textarea::placeholder {
    color: #ccc
}

.swal2-popup .swal2-range input {
    width: 80%
}

.swal2-popup .swal2-range output {
    width: 20%;
    font-weight: 600;
    text-align: center
}

.swal2-popup .swal2-range input,
.swal2-popup .swal2-range output {
    height: 2.625em;
    margin: 1em auto;
    padding: 0;
    font-size: 1.125em;
    line-height: 2.625em
}

.swal2-popup .swal2-input {
    height: 2.625em;
    padding: 0 .75em
}

.swal2-popup .swal2-input[type=number] {
    max-width: 10em
}

.swal2-popup .swal2-file {
    font-size: 1.125em
}

.swal2-popup .swal2-textarea {
    height: 6.75em;
    padding: .75em
}

.swal2-popup .swal2-select {
    min-width: 50%;
    max-width: 100%;
    padding: .375em .625em;
    color: #545454;
    font-size: 1.125em
}

.swal2-popup .swal2-checkbox,
.swal2-popup .swal2-radio {
    align-items: center;
    justify-content: center
}

.swal2-popup .swal2-checkbox label,
.swal2-popup .swal2-radio label {
    margin: 0 .6em;
    font-size: 1.125em
}

.swal2-popup .swal2-checkbox input,
.swal2-popup .swal2-radio input {
    margin: 0 .4em
}

.swal2-popup .swal2-validation-message {
    display: none;
    align-items: center;
    justify-content: center;
    padding: .625em;
    background: #f0f0f0;
    color: #666;
    font-size: 1em;
    font-weight: 300;
    overflow: hidden
}

.swal2-popup .swal2-validation-message::before {
    display: inline-block;
    width: 1.5em;
    min-width: 1.5em;
    height: 1.5em;
    margin: 0 .625em;
    border-radius: 50%;
    background-color: #f27474;
    color: #fff;
    font-weight: 600;
    line-height: 1.5em;
    text-align: center;
    content: '!';
    zoom: normal
}

@supports (-ms-accelerator:true) {
    .swal2-range input {
        width: 100% !important
    }

    .swal2-range output {
        display: none
    }
}

@media all and (-ms-high-contrast:none),
(-ms-high-contrast:active) {
    .swal2-range input {
        width: 100% !important
    }

    .swal2-range output {
        display: none
    }
}

@-moz-document url-prefix() {
    .swal2-close:focus {
        outline: 2px solid rgba(50, 100, 150, .4)
    }
}

.swal2-icon {
    position: relative;
    justify-content: center;
    width: 5em;
    height: 5em;
    margin: 1.25em auto 1.875em;
    border: .25em solid transparent;
    border-radius: 50%;
    line-height: 5em;
    cursor: default;
    box-sizing: content-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    zoom: normal
}

.swal2-icon-text {
    font-size: 3.75em
}

.swal2-icon.swal2-error {
    border-color: #f27474
}

.swal2-icon.swal2-error .swal2-x-mark {
    position: relative;
    flex-grow: 1
}

.swal2-icon.swal2-error [class^=swal2-x-mark-line] {
    display: block;
    position: absolute;
    top: 2.3125em;
    width: 2.9375em;
    height: .3125em;
    border-radius: .125em;
    background-color: #f27474
}

.swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
    left: 1.0625em;
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg)
}

.swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
    right: 1em;
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg)
}

.swal2-icon.swal2-warning {
    border-color: #facea8;
    color: #f8bb86
}

.swal2-icon.swal2-info {
    border-color: #9de0f6;
    color: #3fc3ee
}

.swal2-icon.swal2-question {
    border-color: #c9dae1;
    color: #87adbd
}

.swal2-icon.swal2-success {
    border-color: #a5dc86
}

.swal2-icon.swal2-success [class^=swal2-success-circular-line] {
    position: absolute;
    width: 3.75em;
    height: 7.5em;
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
    border-radius: 50%
}

.swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=left] {
    top: -.4375em;
    left: -2.0635em;
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg);
    -webkit-transform-origin: 3.75em 3.75em;
    transform-origin: 3.75em 3.75em;
    border-radius: 7.5em 0 0 7.5em
}

.swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=right] {
    top: -.6875em;
    left: 1.875em;
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg);
    -webkit-transform-origin: 0 3.75em;
    transform-origin: 0 3.75em;
    border-radius: 0 7.5em 7.5em 0
}

.swal2-icon.swal2-success .swal2-success-ring {
    position: absolute;
    top: -.25em;
    left: -.25em;
    width: 100%;
    height: 100%;
    border: .25em solid rgba(165, 220, 134, .3);
    border-radius: 50%;
    z-index: 2;
    box-sizing: content-box
}

.swal2-icon.swal2-success .swal2-success-fix {
    position: absolute;
    top: .5em;
    left: 1.625em;
    width: .4375em;
    height: 5.625em;
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg);
    z-index: 1
}

.swal2-icon.swal2-success [class^=swal2-success-line] {
    display: block;
    position: absolute;
    height: .3125em;
    border-radius: .125em;
    background-color: #a5dc86;
    z-index: 2
}

.swal2-icon.swal2-success [class^=swal2-success-line][class$=tip] {
    top: 2.875em;
    left: .875em;
    width: 1.5625em;
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg)
}

.swal2-icon.swal2-success [class^=swal2-success-line][class$=long] {
    top: 2.375em;
    right: .5em;
    width: 2.9375em;
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg)
}

.swal2-progresssteps {
    align-items: center;
    margin: 0 0 1.25em;
    padding: 0;
    font-weight: 600
}

.swal2-progresssteps li {
    display: inline-block;
    position: relative
}

.swal2-progresssteps .swal2-progresscircle {
    width: 2em;
    height: 2em;
    border-radius: 2em;
    background: #3085d6;
    color: #fff;
    line-height: 2em;
    text-align: center;
    z-index: 20
}

.swal2-progresssteps .swal2-progresscircle:first-child {
    margin-left: 0
}

.swal2-progresssteps .swal2-progresscircle:last-child {
    margin-right: 0
}

.swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep {
    background: #3085d6
}

.swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep~.swal2-progresscircle {
    background: #add8e6
}

.swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep~.swal2-progressline {
    background: #add8e6
}

.swal2-progresssteps .swal2-progressline {
    width: 2.5em;
    height: .4em;
    margin: 0 -1px;
    background: #3085d6;
    z-index: 10
}

[class^=swal2] {
    -webkit-tap-highlight-color: transparent
}

.swal2-show {
    -webkit-animation: swal2-show .3s;
    animation: swal2-show .3s
}

.swal2-show.swal2-noanimation {
    -webkit-animation: none;
    animation: none
}

.swal2-hide {
    -webkit-animation: swal2-hide .15s forwards;
    animation: swal2-hide .15s forwards
}

.swal2-hide.swal2-noanimation {
    -webkit-animation: none;
    animation: none
}

[dir=rtl] .swal2-close {
    right: auto;
    left: 0
}

.swal2-animate-success-icon .swal2-success-line-tip {
    -webkit-animation: swal2-animate-success-line-tip .75s;
    animation: swal2-animate-success-line-tip .75s
}

.swal2-animate-success-icon .swal2-success-line-long {
    -webkit-animation: swal2-animate-success-line-long .75s;
    animation: swal2-animate-success-line-long .75s
}

.swal2-animate-success-icon .swal2-success-circular-line-right {
    -webkit-animation: swal2-rotate-success-circular-line 4.25s ease-in;
    animation: swal2-rotate-success-circular-line 4.25s ease-in
}

.swal2-animate-error-icon {
    -webkit-animation: swal2-animate-error-icon .5s;
    animation: swal2-animate-error-icon .5s
}

.swal2-animate-error-icon .swal2-x-mark {
    -webkit-animation: swal2-animate-error-x-mark .5s;
    animation: swal2-animate-error-x-mark .5s
}

@-webkit-keyframes swal2-rotate-loading {
    0% {
        -webkit-transform: rotate(0);
        transform: rotate(0)
    }

    100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg)
    }
}

@keyframes swal2-rotate-loading {
    0% {
        -webkit-transform: rotate(0);
        transform: rotate(0)
    }

    100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg)
    }
}

@media print {
    body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
        overflow-y: scroll !important
    }

    body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden=true] {
        display: none
    }

    body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container {
        position: initial !important
    }
}
</style>
<script type="text/javascript" async=""
    src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/787846201/?random=1706506427234&amp;cv=11&amp;fst=1706506427234&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;gtm=45je41o0v9116443840&amp;gcd=11l1l1l1l1&amp;dma=0&amp;u_w=1280&amp;u_h=720&amp;url=https%3A%2F%2FEye Touch.com%2Fshop%3FrefinementList%255Bcats%255D%255B0%255D%3DMens%2520%253E%2520Half%2520Sleeve%2520T-shirt&amp;ref=https%3A%2F%2FEye Touch.com%2F&amp;hn=www.googleadservices.com&amp;frm=0&amp;tiba=Product%20Collection%20%7C%20Eye Touch&amp;pscdl=noapi&amp;auid=920056131.1703572675&amp;fledge=1&amp;uaa=x86&amp;uab=64&amp;uafvl=Not%2520A(Brand%3B99.0.0.0%7CGoogle%2520Chrome%3B121.0.6167.85%7CChromium%3B121.0.6167.85&amp;uamb=0&amp;uap=Windows&amp;uapv=10.0.0&amp;uaw=0&amp;data=event%3Dgtag.config&amp;rfmt=3&amp;fmt=4">
</script>
<script type="text/javascript" async=""
    src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/788032934/?random=1706506427248&amp;cv=11&amp;fst=1706506427248&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;gtm=45je41o0v9116443840&amp;gcd=11l1l1l1l1&amp;dma=0&amp;u_w=1280&amp;u_h=720&amp;url=https%3A%2F%2FEye Touch.com%2Fshop%3FrefinementList%255Bcats%255D%255B0%255D%3DMens%2520%253E%2520Half%2520Sleeve%2520T-shirt&amp;ref=https%3A%2F%2FEye Touch.com%2F&amp;hn=www.googleadservices.com&amp;frm=0&amp;tiba=Product%20Collection%20%7C%20Eye Touch&amp;pscdl=noapi&amp;auid=920056131.1703572675&amp;fledge=1&amp;uaa=x86&amp;uab=64&amp;uafvl=Not%2520A(Brand%3B99.0.0.0%7CGoogle%2520Chrome%3B121.0.6167.85%7CChromium%3B121.0.6167.85&amp;uamb=0&amp;uap=Windows&amp;uapv=10.0.0&amp;uaw=0&amp;data=event%3Dgtag.config&amp;rfmt=3&amp;fmt=4">
</script>
<style type="text/css" id="core-notify">
.notifyjs-corner {
    position: fixed;
    margin: 5px;
    z-index: 1050;
}

.notifyjs-corner .notifyjs-wrapper,
.notifyjs-corner .notifyjs-container {
    position: relative;
    display: block;
    height: inherit;
    width: inherit;
    margin: 3px;
}

.notifyjs-wrapper {
    z-index: 1;
    position: absolute;
    display: inline-block;
    height: 0;
    width: 0;
}

.notifyjs-container {
    display: none;
    z-index: 1;
    position: absolute;
}

.notifyjs-hidable {
    cursor: pointer;
}

[data-notify-text],
[data-notify-html] {
    position: relative;
}

.notifyjs-arrow {
    position: absolute;
    z-index: 2;
    width: 0;
    height: 0;
}
</style>
<style type="text/css"
    data-fbcssmodules="css:fb.css.base css:fb.css.dialog css:fb.css.iframewidget css:fb.css.customer_chat_plugin_iframe">
.fb_hidden {
    position: absolute;
    top: -10000px;
    z-index: 10001
}

.fb_reposition {
    overflow: hidden;
    position: relative
}

.fb_invisible {
    display: none
}

.fb_reset {
    background: none;
    border: 0;
    border-spacing: 0;
    color: #000;
    cursor: auto;
    direction: ltr;
    font-family: 'lucida grande', tahoma, verdana, arial, sans-serif;
    font-size: 11px;
    font-style: normal;
    font-variant: normal;
    font-weight: normal;
    letter-spacing: normal;
    line-height: 1;
    margin: 0;
    overflow: visible;
    padding: 0;
    text-align: left;
    text-decoration: none;
    text-indent: 0;
    text-shadow: none;
    text-transform: none;
    visibility: visible;
    white-space: normal;
    word-spacing: normal
}

.fb_reset>div {
    overflow: hidden
}

@keyframes fb_transform {
    from {
        opacity: 0;
        transform: scale(.95)
    }

    to {
        opacity: 1;
        transform: scale(1)
    }
}

.fb_animate {
    animation: fb_transform .3s forwards
}

.fb_dialog {
    background: rgba(82, 82, 82, .7);
    position: absolute;
    top: -10000px;
    z-index: 10001
}

.fb_dialog_advanced {
    border-radius: 8px;
    padding: 10px
}

.fb_dialog_content {
    background: #fff;
    color: #373737
}

.fb_dialog_close_icon {
    background: url(https://connect.facebook.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;
    cursor: pointer;
    display: block;
    height: 15px;
    position: absolute;
    right: 18px;
    top: 17px;
    width: 15px
}

.fb_dialog_mobile .fb_dialog_close_icon {
    left: 5px;
    right: auto;
    top: 5px
}

.fb_dialog_padding {
    background-color: transparent;
    position: absolute;
    width: 1px;
    z-index: -1
}

.fb_dialog_close_icon:hover {
    background: url(https://connect.facebook.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent
}

.fb_dialog_close_icon:active {
    background: url(https://connect.facebook.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent
}

.fb_dialog_iframe {
    line-height: 0
}

.fb_dialog_content .dialog_title {
    background: #6d84b4;
    border: 1px solid #365899;
    color: #fff;
    font-size: 14px;
    font-weight: bold;
    margin: 0
}

.fb_dialog_content .dialog_title>span {
    background: url(https://connect.facebook.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;
    float: left;
    padding: 5px 0 7px 26px
}

body.fb_hidden {
    height: 100%;
    left: 0;
    margin: 0;
    overflow: visible;
    position: absolute;
    top: -10000px;
    transform: none;
    width: 100%
}

.fb_dialog.fb_dialog_mobile.loading {
    background: url(https://connect.facebook.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;
    min-height: 100%;
    min-width: 100%;
    overflow: hidden;
    position: absolute;
    top: 0;
    z-index: 10001
}

.fb_dialog.fb_dialog_mobile.loading.centered {
    background: none;
    height: auto;
    min-height: initial;
    min-width: initial;
    width: auto
}

.fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner {
    width: 100%
}

.fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content {
    background: none
}

.loading.centered #fb_dialog_loader_close {
    clear: both;
    color: #fff;
    display: block;
    font-size: 18px;
    padding-top: 20px
}

#fb-root #fb_dialog_ipad_overlay {
    background: rgba(0, 0, 0, .4);
    bottom: 0;
    left: 0;
    min-height: 100%;
    position: absolute;
    right: 0;
    top: 0;
    width: 100%;
    z-index: 10000
}

#fb-root #fb_dialog_ipad_overlay.hidden {
    display: none
}

.fb_dialog.fb_dialog_mobile.loading iframe {
    visibility: hidden
}

.fb_dialog_mobile .fb_dialog_iframe {
    position: sticky;
    top: 0
}

.fb_dialog_content .dialog_header {
    background: linear-gradient(from(#738aba), to(#2c4987));
    border-bottom: 1px solid;
    border-color: #043b87;
    box-shadow: white 0 1px 1px -1px inset;
    color: #fff;
    font: bold 14px Helvetica, sans-serif;
    text-overflow: ellipsis;
    text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0;
    vertical-align: middle;
    white-space: nowrap
}

.fb_dialog_content .dialog_header table {
    height: 43px;
    width: 100%
}

.fb_dialog_content .dialog_header td.header_left {
    font-size: 12px;
    padding-left: 5px;
    vertical-align: middle;
    width: 60px
}

.fb_dialog_content .dialog_header td.header_right {
    font-size: 12px;
    padding-right: 5px;
    vertical-align: middle;
    width: 60px
}

.fb_dialog_content .touchable_button {
    background: linear-gradient(from(#4267B2), to(#2a4887));
    background-clip: padding-box;
    border: 1px solid #29487d;
    border-radius: 3px;
    display: inline-block;
    line-height: 18px;
    margin-top: 3px;
    max-width: 85px;
    padding: 4px 12px;
    position: relative
}

.fb_dialog_content .dialog_header .touchable_button input {
    background: none;
    border: none;
    color: #fff;
    font: bold 12px Helvetica, sans-serif;
    margin: 2px -12px;
    padding: 2px 6px 3px 6px;
    text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0
}

.fb_dialog_content .dialog_header .header_center {
    color: #fff;
    font-size: 16px;
    font-weight: bold;
    line-height: 18px;
    text-align: center;
    vertical-align: middle
}

.fb_dialog_content .dialog_content {
    background: url(https://connect.facebook.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;
    border: 1px solid #4a4a4a;
    border-bottom: 0;
    border-top: 0;
    height: 150px
}

.fb_dialog_content .dialog_footer {
    background: #f5f6f7;
    border: 1px solid #4a4a4a;
    border-top-color: #ccc;
    height: 40px
}

#fb_dialog_loader_close {
    float: left
}

.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon {
    visibility: hidden
}

#fb_dialog_loader_spinner {
    animation: rotateSpinner 1.2s linear infinite;
    background-color: transparent;
    background-image: url(https://connect.facebook.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);
    background-position: 50% 50%;
    background-repeat: no-repeat;
    height: 24px;
    width: 24px
}

@keyframes rotateSpinner {
    0% {
        transform: rotate(0deg)
    }

    100% {
        transform: rotate(360deg)
    }
}

.fb_iframe_widget {
    display: inline-block;
    position: relative
}

.fb_iframe_widget span {
    display: inline-block;
    position: relative;
    text-align: justify
}

.fb_iframe_widget iframe {
    position: absolute
}

.fb_iframe_widget_fluid_desktop,
.fb_iframe_widget_fluid_desktop span,
.fb_iframe_widget_fluid_desktop iframe {
    max-width: 100%
}

.fb_iframe_widget_fluid_desktop iframe {
    min-width: 220px;
    position: relative
}

.fb_iframe_widget_lift {
    z-index: 1
}

.fb_iframe_widget_fluid {
    display: inline
}

.fb_iframe_widget_fluid span {
    width: 100%
}

.fb_mpn_mobile_landing_page_slide_out {
    animation-duration: 200ms;
    animation-name: fb_mpn_landing_page_slide_out;
    transition-timing-function: ease-in
}

.fb_mpn_mobile_landing_page_slide_out_from_left {
    animation-duration: 200ms;
    animation-name: fb_mpn_landing_page_slide_out_from_left;
    transition-timing-function: ease-in
}

.fb_mpn_mobile_landing_page_slide_up {
    animation-duration: 500ms;
    animation-name: fb_mpn_landing_page_slide_up;
    transition-timing-function: ease-in
}

.fb_mpn_mobile_bounce_in {
    animation-duration: 300ms;
    animation-name: fb_mpn_bounce_in;
    transition-timing-function: ease-in
}

.fb_mpn_mobile_bounce_out {
    animation-duration: 300ms;
    animation-name: fb_mpn_bounce_out;
    transition-timing-function: ease-in
}

.fb_mpn_mobile_bounce_out_v2 {
    animation-duration: 300ms;
    animation-name: fb_mpn_fade_out;
    transition-timing-function: ease-in
}

.fb_customer_chat_bounce_in_v2 {
    animation-duration: 300ms;
    animation-name: fb_bounce_in_v2;
    transition-timing-function: ease-in
}

.fb_customer_chat_bounce_in_from_left {
    animation-duration: 300ms;
    animation-name: fb_bounce_in_from_left;
    transition-timing-function: ease-in
}

.fb_customer_chat_bounce_out_v2 {
    animation-duration: 300ms;
    animation-name: fb_bounce_out_v2;
    transition-timing-function: ease-in
}

.fb_customer_chat_bounce_out_from_left {
    animation-duration: 300ms;
    animation-name: fb_bounce_out_from_left;
    transition-timing-function: ease-in
}

.fb_invisible_flow {
    display: inherit;
    height: 0;
    overflow-x: hidden;
    width: 0
}

@keyframes fb_mpn_landing_page_slide_out {
    0% {
        margin: 0 12px;
        width: 100% - 24px
    }

    60% {
        border-radius: 18px
    }

    100% {
        border-radius: 50%;
        margin: 0 24px;
        width: 60px
    }
}

@keyframes fb_mpn_landing_page_slide_out_from_left {
    0% {
        left: 12px;
        width: 100% - 24px
    }

    60% {
        border-radius: 18px
    }

    100% {
        border-radius: 50%;
        left: 12px;
        width: 60px
    }
}

@keyframes fb_mpn_landing_page_slide_up {
    0% {
        bottom: 0;
        opacity: 0
    }

    100% {
        bottom: 24px;
        opacity: 1
    }
}

@keyframes fb_mpn_bounce_in {
    0% {
        opacity: .5;
        top: 100%
    }

    100% {
        opacity: 1;
        top: 0
    }
}

@keyframes fb_mpn_fade_out {
    0% {
        bottom: 30px;
        opacity: 1
    }

    100% {
        bottom: 0;
        opacity: 0
    }
}

@keyframes fb_mpn_bounce_out {
    0% {
        opacity: 1;
        top: 0
    }

    100% {
        opacity: .5;
        top: 100%
    }
}

@keyframes fb_bounce_in_v2 {
    0% {
        opacity: 0;
        transform: scale(0, 0);
        transform-origin: bottom right
    }

    50% {
        transform: scale(1.03, 1.03);
        transform-origin: bottom right
    }

    100% {
        opacity: 1;
        transform: scale(1, 1);
        transform-origin: bottom right
    }
}

@keyframes fb_bounce_in_from_left {
    0% {
        opacity: 0;
        transform: scale(0, 0);
        transform-origin: bottom left
    }

    50% {
        transform: scale(1.03, 1.03);
        transform-origin: bottom left
    }

    100% {
        opacity: 1;
        transform: scale(1, 1);
        transform-origin: bottom left
    }
}

@keyframes fb_bounce_out_v2 {
    0% {
        opacity: 1;
        transform: scale(1, 1);
        transform-origin: bottom right
    }

    100% {
        opacity: 0;
        transform: scale(0, 0);
        transform-origin: bottom right
    }
}

@keyframes fb_bounce_out_from_left {
    0% {
        opacity: 1;
        transform: scale(1, 1);
        transform-origin: bottom left
    }

    100% {
        opacity: 0;
        transform: scale(0, 0);
        transform-origin: bottom left
    }
}

@keyframes slideInFromBottom {
    0% {
        opacity: .1;
        transform: translateY(100%)
    }

    100% {
        opacity: 1;
        transform: translateY(0)
    }
}

@keyframes slideInFromBottomDelay {
    0% {
        opacity: 0;
        transform: translateY(100%)
    }

    97% {
        opacity: 0;
        transform: translateY(100%)
    }

    100% {
        opacity: 1;
        transform: translateY(0)
    }
}

@media (max-width: 996px) {
    aside.refineset {
        display: none;
    }

    .main-refinement.refinement-area {
        display: block !important;
    }
}

.footer-container {
    display: none;
}
</style>





<div class="wrapper-div">
    <div class="container">
    </div>
    <div class="container-fluid">


        <div class="teescontainer col-sm-12 col-md-11 col-lg-11" style="min-height: 90vh; margin-top: 40px !important;">
            <aside class="fake-container col-sm-12 col-md-4 col-lg-3" style="border: 0px">
            </aside>
            <aside class="scrollbar refineset col-sm-12 col-md-4 col-lg-3"
                style="padding-bottom: 50px;height: calc(-110px + 100vh);z-index: 10;">
                <section class="facet-wrapper">
                    <i class="fa fa-times algo-close-filter" onclick="closeFilterSidebar()"></i>
                    <div class="aside-refinement refinement-area">
                        <div class="aside-refinement-box">
                            <div id="aside-current-refinements"></div>
                            <div id="aside-clear-refinements">
                                <div class="ais-ClearRefinements"><button
                                        class="ais-ClearRefinements-button ais-ClearRefinements-button--disabled"
                                        disabled="">Clear refinements</button></div>
                            </div>
                        </div>
                    </div>
                    <div id="cats">
                        <div class="ais-Panel">
                            <div class="ais-Panel-body">
                                <div>
                                    <div class="ais-RefinementList">
                                        <ul class="ais-RefinementList-list">
                                            <?php $category = $this->db->query('select * from tbl_category where cat_status=1')->result();
                                            if ($category) {
                                               foreach ($category as $key => $value) {?>

                                            <li class="ais-RefinementList-item">
                                                <div>
                                                    <div onclick="scrollToTop()"
                                                        class="facet-item checkitem newarrival level1"><input
                                                            type="checkbox"
                                                            class="ais-RefinementList-checkbox usual-checkbox"
                                                            value="<?php echo $value->cat_name;?>"><?php echo $value->cat_name;?>

                                                    </div>
                                                </div>
                                            </li>
                                            <?php $sub_category = $this->db->query("select * from tbl_sub_category where status='a' and category_id ='$value->cat_id'")->result();
                                                    foreach ($sub_category as $key => $value) {?>
                                            <li class="ais-RefinementList-item">
                                                <div>
                                                    <div onclick="scrollToTop()" class="facet-item checkitem level2">
                                                        <input type="checkbox"
                                                            class="ais-RefinementList-checkbox usual-checkbox"
                                                            value="<?php echo $value->sub_category_name;?>"><?php echo $value->sub_category_name;?>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php }} } ?>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


            </aside>
            <div class="resultset col-sm-12 col-md-12 col-lg-9">
                <div id="searchbox" class="">
                </div>
                <div class="main-refinement refinement-area" style="display: block;">
                    <div class="refinement-box">
                        <div id="current-refinements">
                            <div class="ais-CurrentRefinements">
                                <ul class="ais-CurrentRefinements-list"></ul>
                            </div>
                        </div>
                        <div id="clear-refinements">
                            <div class="ais-ClearRefinements"><button
                                    class="ais-ClearRefinements-button ais-ClearRefinements-button--disabled"
                                    disabled="">Clear refinements</button></div>
                        </div>
                    </div>

                    <div class="results-wrapper">
                        <section id="results-topbar">
                            <div class="sort-by">
                                <div id="sort-by"></div>
                            </div>

                            <div id="stats" class="text-muted">
                                <div class="ais-Stats"><span class="ais-Stats-text">1,146 results found in
                                        1ms</span></div>
                            </div>
                        </section>
                        <main id="hits">
                            <div class="ais-InfiniteHits">
                                <ol class="ais-InfiniteHits-list">
                                    <?php
                                if (isset($searchResult)) {
                                    foreach ($searchResult as $product) {
                                    ?>
                                    <li class="ais-InfiniteHits-item">
                                        <div style="position:relative"
                                            class="product-grid-single col-sm-6 col-md-6 col-lg-3">
                                            <div class="card product-card"><a class="no-style-link"
                                                    href="<?php echo base_url('single/'). $product->pro_id;?>">
                                                    <div class="gallerythumbWrapper gallerythumbWrapperLoaded"
                                                        style="background: url('/img/product-loader.svg') no-repeat center, linear-gradient(135deg, #FFFFFF 0%, #e0e0e0 100%);">
                                                        <img class="gallerythumb gallerythumbLoaded"
                                                            style="background-color:#FFFFFF; min-height: 13vw;"
                                                            src="<?php echo base_url('uploads/product/') . $product->pro_image; ?>"
                                                            width="100%" alt="Card image">
                                                        <h6 style="text-align: center; color: #000; padding: 0px 15px;"
                                                            class="card-text truncate">
                                                            <?php echo substr($product->pro_title,0, 17).'..'; ?></h6>
                                                        <!-- <p class="non_mediacal hide">Non Medical</p> -->
                                                        <br>
                                                        <?php if ($product->pro_old_price) { ?>
                                                        <div style="display:block" class="discounted_amount"><span>Save
                                                                Tk.
                                                                <?php echo($product->pro_old_price - $product->pro_price);?></span>
                                                        </div>
                                                        <?php   } ?>

                                                        <p style="text-align: center; color: #000;font-size: 1.2rem;"
                                                            class="card-text"><span
                                                                style="font-size:.8em; color: gray;"></span><br>
                                                            <?php if ($product->pro_old_price) { ?>
                                                            <span
                                                                style="text-decoration: line-through;color: red;font-size: 1rem;">৳<?php echo $product->pro_old_price;?></span>
                                                            <?php   } ?>
                                                            ৳<?php echo $product->pro_price;?>
                                                        </p>

                                                        <div class="like-box-gallery" style="padding: 0px;"><span
                                                                style="display:none; background: #ff005a; padding: 1px 5px 1px 5px; font-size: .7rem; color: #FFF; border-top-left-radius: 5px; border-bottom-left-radius: 5px;"
                                                                class="like-count likes-for-72704"> 0</span></div>
                                                    </div>
                                                </a>
                                                <!-- <div class="products-like-button like-id-72704"
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; likeThisProduct('login', '72704')">
                                                <i class="fa fa-heart-o"></i><span> 0</span>
                                            </div>
                                            <div class="products-share-button"
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; shareThisProduct('https://Eye Touch.com/product/72704-mens-premium-bomber-jacket-light-ash')">
                                                <i class="fa fa-share"></i> Share
                                            </div> -->
                                                <div data-productkey="72704"
                                                    data-image="/products/65634d58b52c4-square.jpg"
                                                    data-title="Mens Premium Bomber Jacket - Light Ash"
                                                    data-color="#FFFFFF"
                                                    data-url="<?php echo base_url('single/'). $product->pro_id;?>"
                                                    class="products-cart-button "
                                                    onclick="openProductModal('<?php echo  $product->pro_id; ?>')">
                                                    <i class="fa fa-cart-plus"></i>
                                                    Buy Now <i
                                                        class="products-cart-button-loader fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i>
                                                </div>
                                            </div>
                                            <div class="outofstock" style="display:none"><span></span></div>
                                            <div style="display:none" class="discounted_amount"><span></span></div>
                                            <div style="display:none" class="campaign"><span></span></div>
                                            <div style="display:none" class="sale"><span></span></div>
                                            <div style="display:none" class="free_delivery"><img
                                                    src="https://img.icons8.com/external-those-icons-lineal-color-those-icons/24/000000/external-flash-photography-images-those-icons-lineal-color-those-icons.png"><span></span>
                                            </div>
                                        </div>
                                    </li>
                                    <?php } }?>


                                </ol><button class="ais-InfiniteHits-loadMore">Show more results</button>
                            </div>
                        </main>
                        <section id="pagination"></section>
                    </div>
                </div>
            </div>

            <script type="text/javascript">
            var isAdmin = 0;

            function openFilterSidebar() {
                document.querySelector('aside.refineset').style.transform = "translateX(0)";
            }

            function closeFilterSidebar() {
                document.querySelector('aside.refineset').style.transform = "translateX(-112%)";
            }
            var discount = 0

            function scrollToTop() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
            </script>