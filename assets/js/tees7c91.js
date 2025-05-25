function gallerythumbLoaded(event) {
  var target = event.target || event.srcElement;
  target.classList.add("gallerythumbLoaded");
  if (target.parentNode)
    target.parentNode.classList.add("gallerythumbWrapperLoaded");
}

function scrollToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

window.onload = function () {
  if (window.jQuery) {
    var pricing_data = null;
    tag_data = [];

    var search = instantsearch({
      indexName: "products",
      searchClient: algoliasearch(
        "2UIXGXYA5O",
        "bfcfa7b10e2c9220df5d1d639d485218"
      ),
      routing: true,
    });

    var mode = "view";
    if (window.location.href.includes("edit=1")) mode = "edit";

    var customSearchbox = instantsearch.connectors.connectSearchBox(function (
      renderOptions,
      isFirstRender
    ) {
      var widgetParams = renderOptions.widgetParams;
      const urlParams = new URLSearchParams(window.location.search);
      const searchString = urlParams.get("query") ? urlParams.get("query") : "";
      //console.log(searchString);

      if (isFirstRender) {
        document.querySelector(widgetParams.container).innerHTML =
          // '<button class="btn btn-secondary algo-filter" onClick="openFilterSidebar()" >Filter</button>' +
          '<div class="input-group algo-search">' +
          '<input type="search" value="' +
          searchString +
          '" autocomplete="off" class="form-control" id="q" placeholder="' +
          widgetParams.placeholder +
          '" />' +
          '<span class="input-group-btn">' +
          '<button class="btn btn-default"><i class="fa fa-search"></button>' +
          "</span>" +
          "</div>";

        document
          .querySelector("#q")
          .addEventListener("input", function (event) {
            renderOptions.refine(event.target.value);
          });
      }
    });

    search.addWidget(
      instantsearch.widgets.configure({
        filters: "status:1 AND isSearchable:1",
      })
    );

    search.addWidget(
      customSearchbox({
        container: "#searchbox",
        placeholder: "Search a product",
      })
    );

    search.addWidget(
      instantsearch.widgets.stats({
        container: "#stats",
      })
    );

    search.on("render", function () {
      $(".product-picture img").addClass("transparent");
      $(".product-picture img")
        .one("load", function () {
          $(this).removeClass("transparent");
        })
        .each(function () {
          if (this.complete) $(this).load();
        });
    });

    //products template
    if (0 && isAdmin) {
      var hitTemplate =
        '<div style="position:relative" class="product-grid-single col-sm-6 col-md-6 col-lg-3"><div class="card  product-card"><a class="no-style-link" href="/product/{{id}}-{{slug}}"><div class="gallerythumbWrapper " style="background: url(\'/img/product-loader.svg\') no-repeat center, linear-gradient(135deg, {{color}} 0%, #e0e0e0 100%);"><img class="gallerythumb " style="background-color:{{color}}; min-height: 13vw;" src="/products/{{image}}?v=20" width="100%" alt="Card image" onload="gallerythumbLoaded(event)"><h6 style="text-align: center; color: #000; padding: 0px 15px;" class="card-text truncate">{{title}}</h6><p class=\'non_mediacal {{non_medical}}\'>Non Medical</p><p style="text-align: center; color: #000;font-size: 1.2rem;" class="card-text"><span style="font-size:.8em; color: gray;">{{starts_from}}</span><br><span style="text-decoration: line-through;color: red;font-size: 1rem;">{{regular_price}}</span> \u09F3{{price}}</span> ( {{units_in_order}}/{{units_sold}} )</span></p><div class="like-box-gallery" style="padding: 0px;"><span style="display:none; background: #ff005a; padding: 1px 5px 1px 5px; font-size: .7rem; color: #FFF; border-top-left-radius: 5px; border-bottom-left-radius: 5px;" class="like-count likes-for-{{id}}"> {{likes}}</span></div></div></a><div class="products-like-button like-id-{{id}}" onclick="if (!window.__cfRLUnblockHandlers) return false; likeThisProduct(\'login\', \'{{id}}\')"><i class="fa fa-heart-o"></i><span> {{likes}}</span></div><div class="products-share-button" onclick="if (!window.__cfRLUnblockHandlers) return false; shareThisProduct(\'https://Eye Touch.com/product/{{id}}-{{slug}}\')"><i class="fa fa-share"></i> Share</div><div data-productkey="{{id}}" data-image="/products/{{image}}" data-title="{{title}}" data-url="/product/{{id}}-{{slug}}" data-color="{{color}}" class="products-cart-button {{outofstockcartbtn}}"><i class="fa fa-cart-plus"></i> Buy Now <i class="products-cart-button-loader fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i></div></div><div class="outofstock" style="display:{{outofstock_display}}"><span>{{outofstock}}</span></div><div style="display:{{special_display}}" class="discounted_amount"><span>{{discounted_amount}}</span></div><div class="sale" style="display:{{special_display}}"><span>{{sale}}</span></div><div style="display:{{free_delivery_display}}" class="free_delivery"><img src="https://img.icons8.com/external-those-icons-lineal-color-those-icons/24/000000/external-flash-photography-images-those-icons-lineal-color-those-icons.png"><span>{{free_delivery}}</span></div></div>';
    } else if (mode == "edit") {
      var hitTemplate =
        '<div style="position:relative" class="product-grid-single col-sm-6 col-md-6 col-lg-3"><div class="card  product-card"><a class="no-style-link" href="/admin/product-edit/{{id}}"><div class="gallerythumbWrapper " style="background: url(\'/img/product-loader.svg\') no-repeat center, linear-gradient(135deg, {{color}} 0%, #e0e0e0 100%);"><img class="gallerythumb " style="background-color:{{color}}; min-height: 13vw;" src="/products/{{image}}?v=20" width="100%" alt="Card image" onload="gallerythumbLoaded(event)"><h6 style="text-align: center; color: #000; padding: 0px 15px;" class="card-text truncate">{{title}}</h6><p class=\'non_mediacal {{non_medical}}\'>Non Medical</p><p style="text-align: center; color: #000;font-size: 1.2rem;" class="card-text"><span style="font-size:.8em; color: gray;">{{starts_from}}</span><br><span style="text-decoration: line-through;color: red;font-size: 1rem;">{{regular_price}}</span> \u09F3{{price}}</p><div class="like-box-gallery" style="padding: 0px;"><span style="display:none; background: #ff005a; padding: 1px 5px 1px 5px; font-size: .7rem; color: #FFF; border-top-left-radius: 5px; border-bottom-left-radius: 5px;" class="like-count likes-for-{{id}}"> {{likes}}</span></div></div></a><div class="products-like-button like-id-{{id}}" onclick="if (!window.__cfRLUnblockHandlers) return false; likeThisProduct(\'login\', \'{{id}}\')"><i class="fa fa-heart-o"></i><span> {{likes}}</span></div><div class="products-share-button" onclick="if (!window.__cfRLUnblockHandlers) return false; shareThisProduct(\'https://Eye Touch.com/product/{{id}}-{{slug}}\')"><i class="fa fa-share"></i> Share</div><div data-productkey="{{id}}" data-image="/products/{{image}}" data-title="{{title}}" data-color="{{color}}" data-url="/product/{{id}}-{{slug}}" class="products-cart-button {{outofstockcartbtn}}"><i class="fa fa-cart-plus"></i> Buy Now <i class="products-cart-button-loader fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i></div></div><div class="outofstock" style="display:{{outofstock_display}}"><span>{{outofstock}}</span></div><div style="display:{{special_display}}" class="discounted_amount"><span>{{discounted_amount}}</span></div><div style="display:{{special_display}}" class="sale"><span>{{sale}}</span></div><div style="display:{{free_delivery_display}}" class="free_delivery"><img src="https://img.icons8.com/external-those-icons-lineal-color-those-icons/24/000000/external-flash-photography-images-those-icons-lineal-color-those-icons.png"><span>{{free_delivery}}</span></div></div>';
    } else {
      var hitTemplate =
        '<div style="position:relative" class="product-grid-single col-sm-6 col-md-6 col-lg-3"><div class="card  product-card"><a class="no-style-link" href="/product/{{id}}-{{slug}}"><div class="gallerythumbWrapper " style="background: url(\'/img/product-loader.svg\') no-repeat center, linear-gradient(135deg, {{color}} 0%, #e0e0e0 100%);"><img class="gallerythumb " style="background-color:{{color}}; min-height: 13vw;" src="/products/{{image}}?v=20" width="100%" alt="Card image" onload="gallerythumbLoaded(event)"><h6 style="text-align: center; color: #000; padding: 0px 15px;" class="card-text truncate">{{title}}</h6><p class=\'non_mediacal {{non_medical}}\'>Non Medical</p><p style="text-align: center; color: #000;font-size: 1.2rem;" class="card-text"><span style="font-size:.8em; color: gray;">{{starts_from}}</span><br><span style="text-decoration: line-through;color: red;font-size: 1rem;">{{regular_price}}</span> \u09F3{{price}}</p><div class="like-box-gallery" style="padding: 0px;"><span style="display:none; background: #ff005a; padding: 1px 5px 1px 5px; font-size: .7rem; color: #FFF; border-top-left-radius: 5px; border-bottom-left-radius: 5px;" class="like-count likes-for-{{id}}"> {{likes}}</span></div></div></a><div class="products-like-button like-id-{{id}}" onclick="if (!window.__cfRLUnblockHandlers) return false; likeThisProduct(\'login\', \'{{id}}\')"><i class="fa fa-heart-o"></i><span> {{likes}}</span></div><div class="products-share-button" onclick="if (!window.__cfRLUnblockHandlers) return false; shareThisProduct(\'https://Eye Touch.com/product/{{id}}-{{slug}}\')"><i class="fa fa-share"></i> Share</div><div data-productkey="{{id}}" data-image="/products/{{image}}" data-title="{{title}}" data-color="{{color}}" data-url="/product/{{id}}-{{slug}}" class="products-cart-button {{outofstockcartbtn}}"><i class="fa fa-cart-plus"></i> Buy Now <i class="products-cart-button-loader fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i></div></div><div class="outofstock" style="display:{{outofstock_display}}"><span>{{outofstock}}</span></div><div style="display:{{special_display}}" class="discounted_amount"><span>{{discounted_amount}}</span></div><div style="display:{{campaign_display}}" class="campaign"><span>{{campaign}}</span></div><div style="display:{{special_display}}" class="sale"><span>{{sale}}</span></div><div style="display:{{free_delivery_display}}" class="free_delivery"><img src="https://img.icons8.com/external-those-icons-lineal-color-those-icons/24/000000/external-flash-photography-images-those-icons-lineal-color-those-icons.png"><span>{{free_delivery}}</span></div></div>';
    }

    var noResultsTemplate =
      '<div class="text-center">No results found matching <strong>{{query}}</strong>.</div>';

    var menuTemplate =
      '<a href="javascript:void(0);" class="facet-item {{#isRefined}}active{{/isRefined}}"><span class="facet-name"><i class="fa fa-angle-right"></i> {{label}}</span class="facet-name"></a>';

    var facetTemplateCheckbox =
      '<div onclick="scrollToTop()" class="facet-item checkitem {{classname}}">' +
      '<input type="checkbox" class="{{cssClasses.checkbox}} usual-checkbox" value="{{label}}" {{#isRefined}}checked{{/isRefined}} />{{label}}' +
      '<span class="facet-count">{{count}}</span>' +
      "</div>";

    var facetTemplateColors =
      '<div onclick="scrollToTop()" class="facet-item">' +
      '<input type="checkbox" class="{{cssClasses.checkbox}} usual-checkbox" value="{{label}}" {{#isRefined}}checked{{/isRefined}} />' +
      "<span>{{color}}</span>" +
      '<div class="colorbox" style="background-color:{{label}}" data-filterby="{{label}}"></div>' +
      "</div>";

    search.addWidget(
      instantsearch.widgets.infiniteHits({
        container: "#hits",
        hitsPerPage: 16,
        filters: "status:1",
        //searchParameters: { facetsExcludes: { "tags": ['gpmerchandise']}},
        templates: {
          empty: noResultsTemplate,
          item: hitTemplate,
        },
        transformItems: function (items) {
          tag_data = [];
          return items.map(function (item) {
            item.stars = [];

            /*for (var i = 1; i <= 5; ++i) {
                            item.stars.push(i <= item.rating);
                        }
                        console.log(item.stars);*/

            if (item.title.toLowerCase().includes(" mask")) {
              item.non_medical = "show";
              //console.log('found');
            } else {
              item.non_medical = "hide";
              //console.log('not found');
            }

            if (item.image == "null") item.image = item.image_back;

            if (item.color == "#000000") item.color = "#222222";
            pricingArrays = [];
            //console.log(pricing_data);
            pricing_data.forEach(function (priceVars) {
              if (priceVars.type.toLowerCase() === item.type.toLowerCase()) {
                priceVars.ProductVariant.forEach(function (sizeVar) {
                  pricingArrays.push(item.price);
                });
              }
            });

            item.starts_from = "";

            if (
              item.hasOwnProperty("regular_price") &&
              item.regular_price !== "" &&
              parseInt(item.regular_price) > parseInt(item.price)
            ) {
              item.discounted_amount =
                parseInt(item.regular_price) - parseInt(item.price);
              item.discounted_amount = "Save Tk. " + item.discounted_amount;
              item.regular_price = "\u09F3" + item.regular_price;
              item.sale = "SALE";
              item.special_display = "block";
            } else {
              item.regular_price = "";
              item.discounted_amount = "";
              item.sale = "";
              item.special_display = "none";
            }

            if (
              item.hasOwnProperty("free_delivery") &&
              item.free_delivery == 1
            ) {
              item.free_delivery = "FREE DELIVERY";
              item.free_delivery_display = "block";
            } else {
              item.free_delivery = "";
              item.free_delivery_display = "none";
            }

            if (
              item.hasOwnProperty("campaign") &&
              item.campaign &&
              item.campaign.length > 0
            ) {
              item.campaign_display = "block";
            } else {
              item.campaign_display = "none";
            }

            if (item.hasOwnProperty("stock_status") && item.stock_status == 0) {
              item.outofstock = "OUT OF STOCK";
              item.outofstock_display = "block";
              item.outofstockcartbtn = "outofstockcartbtn";
            } else {
              item.outofstock = "";
              item.outofstock_display = "none";
              item.outofstockcartbtn = "";
            }

            item.price = Math.min(...pricingArrays);
            tag_data = [...new Set([...tag_data, ...item.tags.split(",")])];
            document.querySelector("#tagbox").innerHTML =
              "<span class='ais-tag-item header'>Tags</tags>";
            document.querySelector("#aside-tagbox").innerHTML =
              "<span class='ais-tag-item header'>Tags</tags>";
            tags_added = 0;
            tag_data.forEach((item) => {
              if (item != "") {
                var tagItem = document.createElement("span");
                tagItem.className = "ais-tag-item";
                tagItem.innerHTML = item;
                tagItem.setAttribute("onclick", "scrollToTop()");
                tagItem.addEventListener("click", () => {
                  document.querySelector("#q").value =
                    document.querySelector("#q").value + " +" + item;
                  document.querySelector("#q").dispatchEvent(
                    new Event("input", {
                      bubbles: true,
                    })
                  );
                });

                tagItem2 = tagItem.cloneNode(true);
                tagItem2.addEventListener("click", () => {
                  document.querySelector("#q").value =
                    document.querySelector("#q").value + " +" + item;
                  document.querySelector("#q").dispatchEvent(
                    new Event("input", {
                      bubbles: true,
                    })
                  );
                });

                if (tags_added++ < 20) {
                  document.querySelector("#tagbox").appendChild(tagItem);
                  document.querySelector("#aside-tagbox").appendChild(tagItem2);
                }
              }
            });
            tagItem = document.createElement("span");
            tagItem.className = "ais-tag-item clear";
            tagItem.innerHTML = "Clear Tags";
            tagItem.setAttribute("onclick", "scrollToTop()");
            tagItem.addEventListener("click", () => {
              document.querySelector("#q").value = document.querySelector(
                "#q"
              ).value = document
                .querySelector("#q")
                .value.replace(/\s*\+.*/gi, "");
              document
                .querySelector("#q")
                .dispatchEvent(new Event("input", { bubbles: true }));
            });

            tagItem2 = tagItem.cloneNode(true);
            tagItem2.setAttribute("onclick", "scrollToTop()");
            tagItem2.addEventListener("click", () => {
              document.querySelector("#q").value = document.querySelector(
                "#q"
              ).value = document
                .querySelector("#q")
                .value.replace(/\s*\+.*/gi, "");
              document
                .querySelector("#q")
                .dispatchEvent(new Event("input", { bubbles: true }));
            });
            document.querySelector("#tagbox").appendChild(tagItem);
            document.querySelector("#aside-tagbox").appendChild(tagItem2);
            return item;
          });
        },
      })
    );

    var catList = instantsearch.widgets.panel({
      templates: {
        //header: '<h5>Categories</h5>',
      },
    })(instantsearch.widgets.refinementList);

    search.addWidget(
      catList({
        container: "#cats",
        attribute: "cats",
        operator: "or",
        limit: 100,
        sortBy(a, b) {
          if (a.name == "Free Delivery") return -3;
          if (a.name == "New Arrival") return -2;
          if (a.name == "Top Selling") return -1;
          if (b.name == "Free Delivery") return 3;
          if (b.name == "New Arrival") return 2;
          if (b.name == "Top Selling") return 1;
          return cat_tree[a.name] < cat_tree[b.name] ? -1 : 1;
        },
        templates: {
          item: facetTemplateCheckbox,
        },
        transformItems: function (items) {
          items.sort(function (a, b) {
            if (cat_tree[a.name] && cat_tree[b.name])
              return cat_tree[a.name] < cat_tree[b.name] ? -1 : 1;
            else if (cat_tree[a.name] && !cat_tree[b.name]) return -1;
            else if (!cat_tree[a.name] && cat_tree[b.name]) return 1;
            else return a.name < b.name ? -1 : 1;
          });
          return items.map(function (item) {
            let name = item.label.split(" > ");
            if (name.length == 1) {
              item.classname = "level1";
            }
            if (name.length == 2) {
              item.classname = "level2";
            }
            if (name.length == 3) {
              item.classname = "level3";
            }
            if (name.length == 4) {
              item.classname = "level4";
            }
            if (
              name == "New Arrival" ||
              name == "Top Selling" ||
              name == "Free Delivery"
            ) {
              item.classname = "newarrival " + item.classname;
            }
            item.label = name[name.length - 1];
            return item;
          });
        },
      })
    );

    //////////layout draw cat listing
    if ($("#cats-layout").length > 0) {
      var catListlayout = instantsearch.widgets.panel({
        templates: {
          //header: '<h5>Categories</h5>',
        },
      })(instantsearch.widgets.refinementList);

      console.log("Adding cats layout...");
      search.addWidget(
        catListlayout({
          container: "#cats-layout",
          attribute: "cats",
          operator: "or",
          limit: 100,
          sortBy(a, b) {
            if (a.name == "Free Delivery") return -3;
            if (a.name == "New Arrival") return -2;
            if (a.name == "Top Selling") return -1;
            if (b.name == "Free Delivery") return 3;
            if (b.name == "New Arrival") return 2;
            if (b.name == "Top Selling") return 1;
            return cat_tree[a.name] < cat_tree[b.name] ? -1 : 1;
          },
          templates: {
            item: facetTemplateCheckbox,
          },
          transformItems: function (items) {
            items.sort(function (a, b) {
              if (cat_tree[a.name] && cat_tree[b.name])
                return cat_tree[a.name] < cat_tree[b.name] ? -1 : 1;
              else if (cat_tree[a.name] && !cat_tree[b.name]) return -1;
              else if (!cat_tree[a.name] && cat_tree[b.name]) return 1;
              else return a.name < b.name ? -1 : 1;
            });
            return items.map(function (item) {
              let name = item.label.split(" > ");
              if (name.length == 1) {
                item.classname = "level1";
              }
              if (name.length == 2) {
                item.classname = "level2";
              }
              if (name.length == 3) {
                item.classname = "level3";
              }
              if (name.length == 4) {
                item.classname = "level4";
              }
              if (
                name == "New Arrival" ||
                name == "Top Selling" ||
                name == "Free Delivery"
              ) {
                item.classname = "newarrival " + item.classname;
              }
              item.label = name[name.length - 1];
              return item;
            });
          },
        })
      );
    }
    ///////////

    search.addWidget(
      instantsearch.widgets.currentRefinements({
        container: "#current-refinements",
      })
    );

    function sanitizestr(str) {
      return str.replace(/[^a-z0-9]/gi, "");
    }

    search.addWidget(
      instantsearch.widgets.clearRefinements({
        container: "#clear-refinements",
      })
    );

    search.addWidget(
      instantsearch.widgets.clearRefinements({
        container: "#aside-clear-refinements",
      })
    );

    if ($("#aside-clear-refinements-layout").length > 0) {
      search.addWidget(
        instantsearch.widgets.clearRefinements({
          container: "#aside-clear-refinements-layout",
        })
      );
    }

    $.get("products/rocketscience").done(function (data) {
      pricing_data = JSON.parse(data);
      search.start();
    });
  } else {
    console.log("jquery is not loaded");
  }
};
