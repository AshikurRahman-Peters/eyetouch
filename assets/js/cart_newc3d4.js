var spinner = '<td class="spinner"><div class="rect1"></div><div class="rect2"></div><div class="rect3"></div><div class="rect4"></div><div class="rect5"></div></td>';

function calcSum() {
    var sum = 0;
    document.querySelectorAll('.cartinput-price').forEach(function (el) {
        sum += parseFloat(el.textContent.replace(/[^\d\.]*/g,''));
    });
    if(document.querySelector('.checkout-total')){
        document.querySelector('.checkout-total').textContent = sum;
    }
    if(document.querySelector('.gart-total-amount')){
        document.querySelector('.gart-total-amount').textContent = "৳ " + sum;
        if(sum === 0) {
            document.querySelector(".empty-cart").style.display = "flex";
            document.querySelector(".gcart-content").style.display = "none";
            document.querySelector(".gcart-control").style.display = "none";
        } else {
            document.querySelector(".empty-cart").style.display = "none";
            document.querySelector(".gcart-content").style.display = "block";
            document.querySelector(".gcart-control").style.display = "flex";
        }
    }
}

if(document.querySelector('.checkout-total')){
    calcSum();
}


function goToCheckout() {
    fbq('track', 'InitiateCheckout');
    window.location.href = "/checkout";
}

function updateCart(event) {
    var _button = $(event.target);
    _button.closest("tr").append(spinner);
    var currentItem = event.target.parentNode.parentNode;
    var sizeEl = currentItem.querySelector('.cartinput-size-select');
    var quantityEl = currentItem.querySelector('.cartinput-quantity');
    var queryString = "[data-productkey='" + currentItem.dataset.productkey + "'][data-color='" + currentItem.dataset.color + "'][data-prevsize='" + sizeEl.value + "']";
    if (event.target.className.includes("cartinput-size-select") && document.querySelector(queryString)) {
        swal({
            title: "Cart Message",
            text: "Your selected size of this product already exists in cart.",
            type: "warning",
        });
        sizeEl.value = currentItem.dataset.prevsize;
        _button.closest("tr").find('.spinner').remove();
    } else {
        var form = new FormData();
        form.append("_token", $('meta[name=csrf-token]').attr("content"));
        form.append("product", currentItem.dataset.productkey);
        form.append("color", currentItem.dataset.color);
        form.append("prevSize", currentItem.dataset.prevsize);
        form.append("newSize", sizeEl.value);
        form.append("quantity", quantityEl.value);

        var settings = {
            "async": true,
            "crossDomain": true,
            "url": "/update-cart",
            "method": "POST",
            "headers": {
                "Cache-Control": "no-cache",
            },
            "processData": false,
            "contentType": false,
            "mimeType": "multipart/form-data",
            "data": form
        }

        $.ajax(settings).done(function (response) {
            var json = JSON.parse(response);
            if(json.hasOwnProperty("error")) {
                toastr["error"](json.error);
                currentItem.querySelector(".cartinput-quantity").value = currentItem.dataset.prevqty;
                currentItem.querySelector(".cartinput-size-select").value = currentItem.dataset.prevsize;
            } else {
                currentItem.dataset.prevqty = json.quantity;
                localStorage.setItem('currentcartsize', sizeEl.value);
                currentItem.dataset.price = json.price;
                currentItem.dataset.prevsize = json.size;
                if(json.regular_price && json.regular_price !== '' && json.regular_price > json.price) {
                    currentItem.querySelector('.Price').innerHTML = "<span class='pull-right'>৳ " + (json.price - Math.floor(json.price * discount/100)) + "</span>" + '<div class="pull-right"><span style="color:#000">৳</span><span style="text-decoration: line-through;" class="cart_item_regular_price">'+ json.regular_price + ' </span>&nbsp;</div>';
                    currentItem.querySelector('.cart_regular_price_field').textContent = (json.regular_price * json.quantity) + " ";
                } else {
                    currentItem.querySelector('.Price').innerHTML = "<span class='pull-right'>৳ " + (json.price - Math.floor(json.price * discount/100)) + "</span>";
                }
                currentItem.querySelector('.cartinput-price').textContent ="৳ " +  (json.price - Math.floor(json.price * discount/100)) * json.quantity;
                calcSum();
            }
            _button.closest("tr").find('.spinner').remove();
        });
    }
}

function removeFromCart(event){
    var _button = $(event.target);
    var _tr = _button.closest("tr");
    _tr.append(spinner);

    var form = new FormData();
    form.append("_token", $('meta[name=csrf-token]').attr("content"));
    form.append("product", _tr.data('productkey'));
    form.append("color", _tr.data('color'));
    form.append("prevSize", _tr.data('prevsize'));

    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "/remove-from-cart",
        "method": "POST",
        "headers": {
            "Cache-Control": "no-cache",
        },
        "processData": false,
        "contentType": false,
        "mimeType": "multipart/form-data",
        "data": form
    }

    $.ajax(settings).done(function (response) {
        if(response == "removed from cart"){
            _button.closest("tr").find('.spinner').remove();
            _tr.remove();
            updateCartBadge();
            calcSum();
            toastr["warning"]("Removed from Cart");
        }
    });
}

function updateCartBadge(){
    document.querySelectorAll('.shopping-cart-badge').forEach(function(el) {
        el.textContent = document.querySelectorAll('.new-designed-element').length;
    });
    if(document.querySelectorAll('.new-designed-element').length == 0){
        if(window.location.href.includes("cart"))
        window.location.href = "/shop";
    }
}


window.addEventListener('click', function(e){
    var el = e.target;
    if(el.classList.contains("addmoreBtn")){
        color = el.dataset.color;
        $.ajax({
            url: '/add-item-to-cart',
            type: 'GET',
            data : {
                id : el.dataset.productkey,
            },success: function (data) {
                localStorage.removeItem('currentcartsize');
                localStorage.setItem('currentcartinkCost', data[3]['price']);
                localStorage.setItem('cartaddedPrice', data[4]);
                pricingVariables = data[1];
                populateSizeBoxes(color, data[9], data[3]);
                populateColorCircles(data[0], color);
                populatePriceBox();
                localStorage.setItem('currentcartcolor' , color);
                if (document.querySelector('.size-selector-selected') && localStorage.getItem('currentcartsize') != null) {
                    document.querySelector('.priceBox').style.display = "block";
                    if(discount == 0){
                        document.querySelector('.modal-discount-text').style.display = "none";
                        document.querySelector('.modal-price-text').innerText = "‎৳" + calculateDynamicPrice(localStorage.getItem('currentcartcolor'), localStorage.getItem('currentcartsize'));
                    }
                    else{
                        document.querySelector('.modal-discount-text').style.display = "block";
                        document.querySelector('.modal-discount-text').innerHTML = "‎৳<del>" + calculateDynamicPrice(localStorage.getItem('currentcartcolor'), localStorage.getItem('currentcartsize')) + "</del>",
                        document.querySelector('.modal-price-text').innerText = "‎৳" + calculateDynamicPriceOffer(localStorage.getItem('currentcartcolor'), localStorage.getItem('currentcartsize'));
                    }
                }
                document.querySelector('.pricemodal-header').innerHTML = '<p style= "text-align:center">Price Details</p>';
                document.querySelector('.pricemodal-footer').innerHTML = '<button class="modal-btn btn btn-danger pull-left" data-dismiss="modal">Cancel</button></a>' +'<button class="discard-button modal-btn btn btn-success pull-right" onclick="moreProductAddToCart(\'' + data[3]['id'] + '\')">Add to Cart</button></a>';
                $('.pricemodal').modal('toggle');
            }
        });
    }
});

function populateSizeBoxes(color, inventory, product = null) {
    //console.log("populating size boxes");
    //console.log(color);
    //console.log(inventory);
    product_inventory = null;
    if(product) {
        product_inventory = product.product_inventory;
        if(product_inventory && product_inventory.length > 3) {
            product_inventory = JSON.parse(product_inventory);
        }
    }
    var variantInfo = pricingVariables.filter(each => each.variant == color)[0];

    if (!variantInfo) {
        //variantInfo = pricingVariables.filter(each => each.variant == "others")[0];
        variantInfo = pricingVariables[0];
    }
    variantInfo.ProductVariant = variantInfo.ProductVariant.sort((a, b) => a.id - b.id);

    var containerDom = document.querySelector(".pricemodal-body");
    containerDom.innerHTML = "";

    var ulElem1 = document.createElement("ul");
    ulElem1.className = "list-inline";
    ulElem1.style.textAlign = "center";
    containerDom.appendChild(ulElem1);

    var listElem = document.createElement("li");
    listElem.className = "list-inline-item";
    listElem.style.textAlign = "center";
    listElem.innerHTML = "<b>Choose Size</b>";
    ulElem1.appendChild(listElem);

    var ulElem2 = document.createElement("ul");
    ulElem2.className = "size-selectors-container list-inline";
    ulElem2.style.textAlign = "center";
    containerDom.appendChild(ulElem2);


    variantInfo.ProductVariant.forEach(function (size) {
            if (document.querySelector('.Premium_div')) {
                var containerDIV = document.querySelector(".Premium_div");
            } else {
                var containerDIV = document.createElement("div");
                containerDIV.className = "size-selectors-container list-inline Premium_div";

                var pTag = document.createElement('span');
                pTag.className = "Premium_pTag pull-left";
                pTag.style.lineHeight = "15px";
                pTag.style.width= "auto";
                pTag.style.fontSize= ".9rem";
                pTag.style.textAlign = "left";
                pTag.style.padding =  "5px 0px 5px 0px";
                pTag.innerHTML = "Premium Sizes: <br/>";

                var szcTag = document.createElement('button');
                szcTag.className = "Premium_pTag pull-left btn btn-link";
                szcTag.style.lineHeight = "0px";
                szcTag.style.fontSize= ".8rem";
                szcTag.innerText = "Size Chart";
                szcTag.addEventListener('click', function(){
                    loadSizeChart(variantInfo.type, 'Premium');
                });
                pTag.appendChild(szcTag);

                containerDIV.appendChild(pTag);

            }
            if(!inventory.includes('"'+size.size+'"')){
                var sizeDiv = document.createElement("div");
                if (localStorage.getItem('currentcartsize') == size.size) {
                    sizeDiv.className = "size-selector-selected list-inline-item";
                } else {
                    sizeDiv.className = "size-selector list-inline-item";
                }
                sizeDiv.addEventListener('click', sizeHandler, false);
                sizeDiv.textContent = size.size;
                sizeDiv.dataset.size = size.size;
                if(product_inventory) {
                    if(product_inventory.hasOwnProperty(size.size) && product_inventory[size.size] > 0) { 
                        containerDIV.appendChild(sizeDiv);
                    }
                } else {
                    containerDIV.appendChild(sizeDiv);
                }
            }
            ulElem2.appendChild(containerDIV);
    });



}

function sizeHandler() {

    if (document.querySelector('.size-selector-selected')) {
        document.querySelector('.size-selector-selected').className = "size-selector list-inline-item";
    }
    this.className = "size-selector-selected list-inline-item";
    localStorage.setItem('currentcartsize', this.dataset.size);
    if (document.querySelector('.color-selector-selected')) {
        document.querySelector('.priceBox').style.display = "block";
        //document.querySelector('.modal-price-text').innerText = "‎৳ " + calculateDynamicPrice(localStorage.getItem('currentcartcolor'), localStorage.getItem('currentcartsize'));
        if(discount == 0){
            document.querySelector('.modal-discount-text').style.display = "none";
            document.querySelector('.modal-price-text').innerText = "‎৳" + calculateDynamicPrice(localStorage.getItem('currentcartcolor'), localStorage.getItem('currentcartsize'));
        }
        else{
            document.querySelector('.modal-discount-text').style.display = "block";
            document.querySelector('.modal-discount-text').innerHTML = "‎৳<del>" + calculateDynamicPrice(localStorage.getItem('currentcartcolor'), localStorage.getItem('currentcartsize')) + "</del>",
            document.querySelector('.modal-price-text').innerText = "‎৳" + calculateDynamicPriceOffer(localStorage.getItem('currentcartcolor'), localStorage.getItem('currentcartsize'));
        }
    }
    showUnselectError();
}

function populateColorCircles(color, selectedColor) {
    var containerDom = document.querySelector(".pricemodal-body");

    var color_visibility = 1;
    if(color.length == 1 && color[0] == selectedColor) color_visibility = 0;

    var ulElem1 = document.createElement("ul");
    ulElem1.className = "list-inline";
    ulElem1.style.textAlign = "center";
    containerDom.appendChild(ulElem1);

    var listElem = document.createElement("li");
    if(!color_visibility) {
        listElem.style.display = "none";
    }
    listElem.className = "list-inline-item";
    listElem.style.textAlign = "center";
    listElem.innerHTML = "<b>Change Color</b>";
    ulElem1.appendChild(listElem);

    var ulElem2 = document.createElement("ul");
    if(!color_visibility) {
        ulElem2.style.display = "none";
    }
    ulElem2.className = "list-inline color-seletcor-container";
    ulElem2.style.textAlign = "center";
    containerDom.appendChild(ulElem2);

    color.forEach(function (elem) {
        var divElem = document.createElement("div");
        if (elem == selectedColor) {
            divElem.className = "color-selector color-selector-selected list-inline-item";
        }
        else {
            divElem.className = "color-selector list-inline-item";
        }
        divElem.addEventListener('click', colorHandler, false);
        divElem.style.backgroundColor = elem;
        divElem.style.cursor = "pointer";
        divElem.dataset.color = elem;
        ulElem2.appendChild(divElem);
        var facheck = document.createElement('i');
        if (elem == selectedColor) {
            facheck.className = "fa fa-check";
        } else {
            facheck.className = "fa fa-check hidden";
        }
        divElem.appendChild(facheck);
    });

}


function colorHandler() {

    if (document.querySelector('.color-selector-selected')) {
        document.querySelector('.color-selector-selected').querySelector('i').className = "fa fa-check hidden";
        document.querySelector('.color-selector-selected').className = "color-selector list-inline-item";
    }
    this.className = "color-selector color-selector-selected list-inline-item";
    this.querySelector('i').className = "fa fa-check fa-check-selected";

    localStorage.setItem('currentcartcolor', this.dataset.color);
    rePopulateSizeBoxes(this.dataset.color);
    if (document.querySelector('.size-selector-selected')) {
        document.querySelector('.priceBox').style.display = "block";
        //document.querySelector('.modal-price-text').innerText = "‎৳ " + calculateDynamicPrice(localStorage.getItem('currentcartcolor'), localStorage.getItem('currentcartsize'));
        if(discount == 0){
            document.querySelector('.modal-discount-text').style.display = "none";
            document.querySelector('.modal-price-text').innerText = "‎৳" + calculateDynamicPrice(localStorage.getItem('currentcartcolor'), localStorage.getItem('currentcartsize'));
        }
        else{
            document.querySelector('.modal-discount-text').style.display = "block";
            document.querySelector('.modal-discount-text').innerHTML = "‎৳<del>" + calculateDynamicPrice(localStorage.getItem('currentcartcolor'), localStorage.getItem('currentcartsize')) + "</del>",
            document.querySelector('.modal-price-text').innerText = "‎৳" + calculateDynamicPriceOffer(localStorage.getItem('currentcartcolor'), localStorage.getItem('currentcartsize'));
        }
    }
    else{
        document.querySelector('.priceBox').style.display = "none";
    }
    document.querySelector('.card-photo').style.background = this.dataset.color;
    showUnselectError();
}


function populatePriceBox() {
    var containerDom = document.querySelector(".pricemodal-body");

    var ulElem = document.createElement("ul");
    ulElem.className = "list-inline priceBox";
    ulElem.style.textAlign = "center";
    ulElem.style.display = 'none';
    containerDom.appendChild(ulElem);


    var listElem = document.createElement("li");
    listElem.className = "list-inline-item";
    listElem.style.textAlign = "center";
    listElem.innerHTML = "<b>Unit Price:</b>";
    ulElem.appendChild(listElem);

    var pHidElem = document.createElement("p");
    pHidElem.className = "modal-discount-text";
    ulElem.appendChild(pHidElem);

    var pElem = document.createElement("p");
    pElem.className = "modal-price-text";
    ulElem.appendChild(pElem);
}

function calculateDynamicPrice (color, size) {
    pricingVariables.forEach(function (type) {
        if (type.variant == color) {
            type.ProductVariant.forEach(function (e) {
                if (e.size == size) {
                    calculatedPrice = parseInt(((parseInt(localStorage.getItem('currentcartinkCost')) * parseFloat(type.type_multiplier)) * parseFloat(e.size_multiplier)) + (parseInt(e.price) + parseInt(type.design_multiplier)));
                }
            });
        }
    });
    return Math.floor(calculatedPrice/1)*1 + parseInt(localStorage.getItem('cartaddedPrice'));
}
function calculateDynamicPriceOffer(color, size) {
    pricingVariables.forEach(function (type) {
        if (type.variant == color) {
            type.ProductVariant.forEach(function (e) {
                if (e.size == size) {
                    calculatedPrice = parseInt(((parseInt(localStorage.getItem('currentcartinkCost')) * parseFloat(type.type_multiplier)) * parseFloat(e.size_multiplier)) + (parseInt(e.price) + parseInt(type.design_multiplier)));
                    calculatedPrice = Math.floor(calculatedPrice/1)*1 + parseInt(localStorage.getItem('cartaddedPrice'));
                    calculatedPrice = calculatedPrice - Math.floor(calculatedPrice * discount/100);
                }
            });
        }
    });
    return calculatedPrice;
}
function rePopulateSizeBoxes(color) {
    var variantInfo = pricingVariables.filter(each => each.variant == color)[0];

    if (!variantInfo) {
        variantInfo = pricingVariables[0];
    }
    variantInfo.ProductVariant = variantInfo.ProductVariant.sort((a, b) => a.id - b.id);


    sizeSelectorDOM = document.querySelector('.size-selectors-container');
    sizeSelectorDOM.innerHTML = "";

    if(variantInfo.ProductVariant.length == 0) sizeSelectorDOM.innerHTML = "Sorry ! No sizes available at the moment.<br />";
    else{
        variantInfo.ProductVariant.forEach(function (size) {
            if (!size.size.includes(' ')) {
                if (document.querySelector('.Premium_div')) {
                    var containerDIV = document.querySelector(".Premium_div");
                } else {
                    var containerDIV = document.createElement("div");
                    containerDIV.className = "size-selectors-container list-inline Premium_div";

                    var pTag = document.createElement('span');
                    pTag.className = "Premium_pTag pull-left";
                    pTag.style.lineHeight = "15px";
                    pTag.style.width= "auto";
                    pTag.style.fontSize= ".9rem";
                    pTag.style.padding =  "5px 0px 5px 0px";
                    pTag.innerHTML =  "Premium Sizes: <br/>";

                    var szcTag = document.createElement('button');
                    szcTag.className = "Premium_pTag pull-left btn btn-link";
                    szcTag.style.lineHeight = "0px";
                    szcTag.style.fontSize= ".8rem";
                    szcTag.innerText = "Size Chart";
                    szcTag.addEventListener('click', function(){
                        loadSizeChart(variantInfo.type, 'Premium');
                    });
                    pTag.appendChild(szcTag);

                    containerDIV.appendChild(pTag);

                }

                var sizeDiv = document.createElement("div");
                if (localStorage.getItem('currentcartsize') == size.size) {
                    sizeDiv.className = "size-selector-selected list-inline-item";
                } else {
                    sizeDiv.className = "size-selector list-inline-item";
                }
                sizeDiv.addEventListener('click', sizeHandler, false);
                sizeDiv.textContent = size.size;
                sizeDiv.dataset.size = size.size;
                containerDIV.appendChild(sizeDiv);


                sizeSelectorDOM.appendChild(containerDIV);
            } else {

                thisType = size.size.split(' ')[0];
                thisContainerDiv = thisType + '_div';
                thisTag = thisType + '_pTag';

                if (document.querySelector('.' + thisContainerDiv)) {
                    containerDIV = document.querySelector('.' + thisContainerDiv);
                } else {
                    var containerDIV = document.createElement("div");
                    containerDIV.className = "size-selectors-container list-inline " + thisContainerDiv;

                    var pTag = document.createElement('span');
                    pTag.className = thisTag + " pull-left";
                    pTag.style.lineHeight = "15px";
                    pTag.style.width= "auto";
                    pTag.style.fontSize= ".9rem";
                    pTag.style.padding =  "5px 0px 5px 0px";
                    pTag.innerHTML = thisType + " Sizes: <br/>";

                    var szcTag = document.createElement('button');
                    szcTag.className = "Premium_pTag pull-left btn btn-link";
                    szcTag.style.lineHeight = "0px";
                    szcTag.style.fontSize= ".8rem";
                    szcTag.innerText = "Size Chart";
                    szcTag.addEventListener('click', function(){
                        loadSizeChart(variantInfo.type, thisType);
                    });
                    pTag.appendChild(szcTag);

                    containerDIV.appendChild(pTag);

                }

                var sizeDiv = document.createElement("div");
                if (localStorage.getItem('currentcartsize') == size.size) {
                    sizeDiv.className = "size-selector-selected list-inline-item";
                } else {
                    sizeDiv.className = "size-selector list-inline-item";
                }
                sizeDiv.addEventListener('click', sizeHandler, false);
                sizeDiv.textContent = size.size.split(' ')[1];
                sizeDiv.dataset.size = size.size;
                containerDIV.appendChild(sizeDiv);


                sizeSelectorDOM.appendChild(containerDIV);
            }
        });
    }
}
function moreProductAddToCart(id){
    if (document.querySelector('.color-selector-selected') && document.querySelector('.size-selector-selected')) {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: '/add-more-from-cart',
            type: 'POST',
            data: {
                _token: CSRF_TOKEN,
                color: localStorage.getItem('currentcartcolor').slice(1,7),
                size: localStorage.getItem('currentcartsize'),
                id : id
            },
            success: function (response) {
                if (response.result == "success") {
                    updadeCartBadge();
                    fbq('track', 'AddToCart');
                    window.location.href = "/cart";
                };
                swal({
                    title: 'Cart Message',
                    text: response.msg,
                    type: response.result,
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#28a745',
                    confirmButtonText: 'View Cart',
                    cancelButtonText: 'Add One More'
                });

            }
        });
    } else {
        showUnselectError();
    }
}

function addToCartGallery(id){
    if (document.querySelector('.color-selector-selected') && document.querySelector('.size-selector-selected')) {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        document.querySelector('.addToCartBtn > i').style.display = "inline-block";
        $.ajax({
            url: '/add-to-cart',
            type: 'GET',
            data: {
                _token: CSRF_TOKEN,
                color: localStorage.getItem('currentcartcolor').slice(1,7),
                size: localStorage.getItem('currentcartsize'),
                id : id
            },
            success: function (response) {
                if (response.result == "success") {
                    //fbq('track', 'AddToCart');

                    fbq('track', 'AddToCart', {
                        content_ids: [id],
                        content_type: 'product',
                        value: response.price,
                        currency: 'BDT',
                    });

                    toastr["success"]("Added To Cart");
                    var photo = $(".card-photo");
                    var shopping_cart = $(".shopping-cart");
                    if(shopping_cart.length > 0) flyToElement(photo, shopping_cart);
                    //updadeCartBadge(); added to flyToElement

                    //ga4
                    if(response.hasOwnProperty("g4a")) {
                        response.g4a.item_list_id = 'search_page';
                        product_value = response.g4a.price * response.g4a.quantity;
                        response.g4a.price = Number(response.g4a.price).toFixed(2);
                        gtag("event", "add_to_cart", {
                            currency: "BDT",
                            value: Number(product_value).toFixed(2),
                            items: [
                                response.g4a
                            ]
                        });
                    }

                    //marktag
                    if(response.hasOwnProperty("mark_product")) {
                        product_value = response.mark_product.price * response.mark_product.quantity;
                        response.mark_product.price = Number(response.mark_product.price).toFixed(2);
                        mtag('event', {
                            type: 'AddToCart',
                            value: Number(product_value).toFixed(2),
                            currency: "BDT",
                            products: [response.mark_product]
                        });
                    }
                }
                if (response.result == "error") {
                    toastr["error"](response.msg);
                }
                if($(".shopping-cart").length > 0) {
                    refreshGcart();
                } else {
                    if(window.location.href.includes("/cart")) {
                        setTimeout(function () {
                            window.location.reload(false);
                            document.querySelector('.addToCartBtn > i').style.display = "none";
                        }, 1000);
                    } else {
                        window.location.reload(false);
                        document.querySelector('.addToCartBtn > i').style.display = "none";
                    }
                }
            }
        });
    } else {
        showUnselectError();
    }
}

function flyToElement(flyer, flyingTo) {
    var $func = $(this);
    var divider = 3;
    var flyerClone = $(flyer).clone();
    $(flyerClone).css({position: 'absolute', top: $(flyer).offset().top + "px", maxWidth: "150px",  width: $(flyer).width(), height: $(flyer).width(), left: $(flyer).offset().left + "px", opacity: 1, 'z-index': 10001});
    $('body').append($(flyerClone));
    var gotoX = $(flyingTo).offset().left + ($(flyingTo).width() / 2) - ($(flyer).width()/divider)/2;
    var gotoY = $(flyingTo).offset().top + ($(flyingTo).height() / 2) - ($(flyer).height()/divider)/2;

    $(flyerClone).animate({
        opacity: 0.4,
        left: gotoX,
        top: gotoY,
        width: $(flyer).width()/divider,
        height: $(flyer).height()/divider
    }, 700,
    function () {
        $(flyingTo).fadeOut('fast', function () {
            $(flyingTo).fadeIn('fast', function () {
                updadeCartBadge();
                $(flyerClone).fadeOut('fast', function () {
                    $(flyerClone).remove();
                });
            });
        });
    });
}

function showUnselectError(){
    showAddToCartBtn = true;
    if (document.querySelector('.color-selector-selected')) {
        document.querySelector('ul.list-inline.color-seletcor-container').classList.remove("error");
    } else {
        document.querySelector('ul.list-inline.color-seletcor-container').classList.add("error");
        showAddToCartBtn = false;
    }

    if (document.querySelector('.size-selector-selected')){
        document.querySelector('ul.size-selectors-container.list-inline').classList.remove("error");
    } else {
        document.querySelector('ul.size-selectors-container.list-inline').classList.add("error");
        showAddToCartBtn = false;
    }

    if(showAddToCartBtn == false) {
        document.querySelector('button.discard-button.modal-btn.btn.btn-success.pull-right').disabled = true;
    } else {
        document.querySelector('button.discard-button.modal-btn.btn.btn-success.pull-right').disabled = false;
    }
}

function updadeCartBadge() {
    document.querySelectorAll('.shopping-cart-badge').forEach(function (el) {
        var count = parseInt(el.textContent.replace("(", "").replace(")", "")) + 1;
        el.textContent = count;
    });
}

function loadSizeChart(type, blend) {
    var form = new FormData();

    var settings = {
        "async": true,
        "crossDomain": true,
        "url": "/request-size-chart",
        "method": "GET",
        "headers": {
            "cache-control": "no-cache",
        },
        "data": {
            type: type,
            blend: blend
        }
    }

    $.ajax(settings).done(function (response) {

        document.querySelector(".szc-tbody").innerHTML = "";

        response.forEach(function(size){
            var tr = document.createElement('tr');

            var szName = document.createElement('td');
            szName.className = "text-center";
            szName.textContent = size.size;
            tr.appendChild(szName);

            var szLength = document.createElement('td');
            szLength.className = "text-center";
            if(size.length == "NA"){
                szLength.textContent = "NA";
            }
            else{
                szLength.textContent = size.length + " cm (" + parseFloat(size.length * 0.393701).toFixed(2)+ " inch)";
            }

            tr.appendChild(szLength);
            var szWidth = document.createElement('td');
            szWidth.className = "text-center";
            if(size.width == "NA"){
                szWidth.textContent = "NA";
            }
            else{
                szWidth.textContent = size.width + " cm (" + parseFloat(size.width * 0.393701).toFixed(2)+ " inch)";
            }
            tr.appendChild(szWidth);

            var szSleeve = document.createElement('td');
            szSleeve.className = "text-center";
            if(size.sleeve == "NA"){
                szSleeve.textContent = "NA";
            }
            else{
                szSleeve.textContent = size.sleeve + " cm (" + parseFloat(size.sleeve * 0.393701).toFixed(2)+ " inch)";
            }
            tr.appendChild(szSleeve);

            document.querySelector('.szc-tbody').appendChild(tr);
        });

        $('.szc').modal('toggle');

    });

}
