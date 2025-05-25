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
          '<button class="btn btn-secondary algo-filter" onClick="openFilterSidebar()" >Filter</button>' +
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
        filters:
          "status:1 AND (type:men OR type:kids OR type:women OR type:'full sleeve' OR type:sweatshirt)",
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
        '<div style="position:relative" class="product-grid-single col-sm-6 col-md-6 col-lg-3"><div class="card  product-card"><a class="no-style-link" href="/product/{{id}}-{{slug}}"><div class="gallerythumbWrapper " style="background: url(\'/img/product-loader.svg\') no-repeat center, linear-gradient(135deg, {{color}} 0%, #e0e0e0 100%);"><img class="gallerythumb " style="background-color:{{color}}; min-height: 17vw;" src="/products/{{image}}?v=20" width="100%" alt="Card image" onload="gallerythumbLoaded(event)"><h6 style="text-align: center; color: #000; padding: 0px 15px;" class="card-text truncate">{{title}}</h6><p class=\'non_mediacal {{non_medical}}\'>Non Medical</p><p style="text-align: center; color: #000;font-size: 1.2rem;" class="card-text"><span style="font-size:.8em; color: gray;">{{starts_from}}</span><br><span style="text-decoration: line-through;color: red;font-size: 1rem;">{{regular_price}}</span> \u09F3{{price}}</span> ( {{units_in_order}}/{{units_sold}} )</span></p><div class="like-box-gallery" style="padding: 0px;"><span style="display:none; background: #ff005a; padding: 1px 5px 1px 5px; font-size: .7rem; color: #FFF; border-top-left-radius: 5px; border-bottom-left-radius: 5px;" class="like-count likes-for-{{id}}"> {{likes}}</span></div></div></a><div class="products-like-button like-id-{{id}}" onclick="if (!window.__cfRLUnblockHandlers) return false; likeThisProduct(\'login\', \'{{id}}\')"><i class="fa fa-heart-o"></i><span> {{likes}}</span></div><div class="products-share-button" onclick="if (!window.__cfRLUnblockHandlers) return false; shareThisProduct(\'https://Eye Touch.com/product/{{id}}-{{slug}}\')"><i class="fa fa-share"></i> Share</div><div data-productkey="{{id}}" data-image="/products/{{image}}" data-title="{{title}}" data-url="/product/{{id}}-{{slug}}" data-color="{{color}}" class="products-cart-button"><i class="fa fa-cart-plus"></i> Buy Now <i class="products-cart-button-loader fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i></div></div><div style="display:{{special_display}}" class="discounted_amount"><span>{{discounted_amount}}</span></div><div class="sale" style="display:{{special_display}}"><span>{{sale}}</span></div></div>';
    } else {
      var hitTemplate =
        '<div style="position:relative" class="product-grid-single col-sm-6 col-md-6 col-lg-3"><div class="card  product-card"><a class="no-style-link" href="/product/{{id}}-{{slug}}"><div class="gallerythumbWrapper " style="background: url(\'/img/product-loader.svg\') no-repeat center, linear-gradient(135deg, {{color}} 0%, #e0e0e0 100%);"><img class="gallerythumb " style="background-color:{{color}}; min-height: 17vw;" src="/products/{{image}}?v=20" width="100%" alt="Card image" onload="gallerythumbLoaded(event)"><h6 style="text-align: center; color: #000; padding: 0px 15px;" class="card-text truncate">{{title}}</h6><p class=\'non_mediacal {{non_medical}}\'>Non Medical</p><p style="text-align: center; color: #000;font-size: 1.2rem;" class="card-text"><span style="font-size:.8em; color: gray;">{{starts_from}}</span><br><span style="text-decoration: line-through;color: red;font-size: 1rem;">{{regular_price}}</span> \u09F3{{price}}</p><div class="like-box-gallery" style="padding: 0px;"><span style="display:none; background: #ff005a; padding: 1px 5px 1px 5px; font-size: .7rem; color: #FFF; border-top-left-radius: 5px; border-bottom-left-radius: 5px;" class="like-count likes-for-{{id}}"> {{likes}}</span></div></div></a><div class="products-like-button like-id-{{id}}" onclick="if (!window.__cfRLUnblockHandlers) return false; likeThisProduct(\'login\', \'{{id}}\')"><i class="fa fa-heart-o"></i><span> {{likes}}</span></div><div class="products-share-button" onclick="if (!window.__cfRLUnblockHandlers) return false; shareThisProduct(\'https://Eye Touch.com/product/{{id}}-{{slug}}\')"><i class="fa fa-share"></i> Share</div><div data-productkey="{{id}}" data-image="/products/{{image}}" data-title="{{title}}" data-color="{{color}}" data-url="/product/{{id}}-{{slug}}" class="products-cart-button"><i class="fa fa-cart-plus"></i> Buy Now <i class="products-cart-button-loader fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i></div></div><div style="display:{{special_display}}" class="discounted_amount"><span>{{discounted_amount}}</span></div><div style="display:{{special_display}}" class="sale"><span>{{sale}}</span></div></div>';
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

    function is_custom(cat_id) {
      cat_id = parseInt(cat_id);
      var not_custom_cats = new Array(
        29,
        32,
        33,
        34,
        35,
        36,
        37,
        38,
        39,
        40,
        41,
        42,
        43,
        44,
        45,
        46,
        47,
        48,
        49,
        50,
        51,
        52,
        53,
        54,
        55,
        56,
        57,
        58,
        59,
        60
      );
      if (not_custom_cats.includes(cat_id)) return false;
      return true;
    }

    search.addWidget(
      instantsearch.widgets.infiniteHits({
        container: "#hits",
        hitsPerPage: 16,
        filters: "status:1",
        searchParameters: { facetsExcludes: { tags: ["gpmerchandise"] } },
        templates: {
          empty: noResultsTemplate,
          item: hitTemplate,
        },
        transformItems: function (items) {
          tag_data = [];
          return items.map(
            function (item) {
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
                    var calculatedPrice =
                      parseInt(item.price) *
                        parseInt(priceVars.type_multiplier) *
                        parseInt(sizeVar.size_multiplier) +
                      parseInt(sizeVar.price) +
                      parseInt(priceVars.design_multiplier) +
                      (parseInt(item.seller_payable) +
                        Math.ceil(parseInt(item.seller_payable) / 3));
                    calculatedPrice = Math.floor(calculatedPrice / 5) * 5;
                    /*console.log('item price:' + item.price);
								console.log('priceVars.type_multiplier:' + priceVars.type_multiplier);
								console.log('sizeVar.size_multiplier:' + sizeVar.size_multiplier);
								console.log('sizeVar.price:' + sizeVar.price);
								console.log('priceVars.design_multiplier:' + priceVars.design_multiplier);
								console.log('item.seller_payable:' + item.seller_payable);
								*/ //console.log(calculatedPrice);
                    //console.log('ID - '+item.id+', Color - '+ priceVars.variant + ', Size - '+sizeVar.size +', Price - '+calculatedPrice)
                    pricingArrays.push(calculatedPrice);
                  });
                }
              });
              //	console.log(pricingArrays);
              if (is_custom(item.cat_id)) {
                item.starts_from = "Starts from";
                console.log("starts from is true for cat_id" + item.cat_id);
              } else {
                console.log("starts from is false for cat_id" + item.cat_id);
                item.starts_from = "";
              }

              if (
                item.hasOwnProperty("regular_price") &&
                item.regular_price !== "" &&
                item.regular_price > item.price
              ) {
                item.discounted_amount = item.regular_price - item.price;
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
                    document
                      .querySelector("#q")
                      .dispatchEvent(new Event("input", { bubbles: true }));
                  });

                  tagItem2 = tagItem.cloneNode(true);
                  tagItem2.addEventListener("click", () => {
                    document.querySelector("#q").value =
                      document.querySelector("#q").value + " +" + item;
                    document
                      .querySelector("#q")
                      .dispatchEvent(new Event("input", { bubbles: true }));
                  });

                  if (tags_added++ < 20) {
                    document.querySelector("#tagbox").appendChild(tagItem);
                    document
                      .querySelector("#aside-tagbox")
                      .appendChild(tagItem2);
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

              //
              //
              //
              //	        public function getPriceRange($id)
              //	        {
              //	            $productid = Product::find($id);
              //
              //	            $pricingVariables = ProductType::with(['ProductVariant' => function ($q) {$q->where('quantity', '>', 0)->select(['id', 'type_id', 'size', 'size_multiplier', 'price']);}])->where('type', $productid->type)->select(['profit_margin AS design_multiplier', 'product_types.*'])->get()->map(function ($item) {return $item->only('type', 'variant', 'type_multiplier', 'design_multiplier', 'ProductVariant');});
              //	            $pricingArrays = [];
              //
              //	            foreach ($pricingVariables as $priceVars) {
              //	                foreach ($priceVars['ProductVariant'] as $sizeVar) {
              //	                    $calculatedPrice = (($productid->price * $priceVars['type_multiplier']) * $sizeVar['size_multiplier']) + $sizeVar['price'] + $priceVars['design_multiplier'] + ($productid->seller_payable + Ceil($productid->seller_payable / 3));
              //	                    $calculatedPrice = floor($calculatedPrice / 5) * 5;
              //	                    array_push($pricingArrays, $calculatedPrice);
              //	                }
              //	            }
              //	            return array(min($pricingArrays), max($pricingArrays));
              //	        }
              //
              //
              //

              return item;
            }
            //return items;
          );
        },
      })
    );

    // 	search.addWidget(
    // 	  instantsearch.widgets.pagination({
    // 	    container: '#pagination',
    // 	  })
    // 	);

    search.addWidget(
      instantsearch.widgets.hierarchicalMenu({
        container: "#categories",
        attributes: [
          "hierarchicalCategories.lvl0",
          "hierarchicalCategories.lvl1",
          "hierarchicalCategories.lvl2",
        ],
        sortBy: ["name:asc"],
        templates: {
          item: menuTemplate,
        },
      })
    );

    var typeSorting = [];
    var typeSorting_cnt = 1;
    typeSorting["flash sale"] = typeSorting_cnt++;
    typeSorting["flash sale (full sleeve)"] = typeSorting_cnt++;
    typeSorting["flash sale (sweatshirt)"] = typeSorting_cnt++;
    typeSorting["flash sale (hoodie)"] = typeSorting_cnt++;
    typeSorting["men"] = typeSorting_cnt++;
    typeSorting["women"] = typeSorting_cnt++;
    typeSorting["full sleeve"] = typeSorting_cnt++;
    typeSorting["sweatshirt"] = typeSorting_cnt++;
    typeSorting["kids"] = typeSorting_cnt++;
    typeSorting["kids premium maggie"] = typeSorting_cnt++;
    typeSorting["kids full sleeve"] = typeSorting_cnt++;
    typeSorting["men's premium t-shirt combo"] = typeSorting_cnt++;
    typeSorting["kids t-shirt combo"] = typeSorting_cnt++;
    typeSorting["kids summer t-shirt combo"] = typeSorting_cnt++;
    typeSorting["kids pant combo"] = typeSorting_cnt++;
    typeSorting["kids t-shirt with shorts combo"] = typeSorting_cnt++;
    typeSorting["premium cotton face mask"] = typeSorting_cnt++;
    typeSorting["kids premium cotton face mask"] = typeSorting_cnt++;
    typeSorting["designer edition premium cotton face mask"] =
      typeSorting_cnt++;
    typeSorting["designer edition premium cotton face mask"] =
      typeSorting_cnt++;
    typeSorting["premium cotton face mask - blank"] = typeSorting_cnt++;
    typeSorting["premium cotton face mask - branded"] = typeSorting_cnt++;
    typeSorting["premium cotton face mask - bulk"] = typeSorting_cnt++;
    typeSorting["trouser"] = typeSorting_cnt++;
    typeSorting["mens sports trouser"] = typeSorting_cnt++;
    typeSorting["womens trouser"] = typeSorting_cnt++;
    typeSorting["kids trouser"] = typeSorting_cnt++;

    var typeGrouping = [];
    typeGrouping["flash sale"] = "graphic_tee";
    typeGrouping["flash sale (full sleeve)"] = "graphic_tee";
    typeGrouping["flash sale (sweatshirt)"] = "graphic_tee";
    typeGrouping["flash sale (hoodie)"] = "graphic_tee";
    typeGrouping["men"] = "graphic_tee";
    typeGrouping["women"] = "graphic_tee";
    typeGrouping["full sleeve"] = "graphic_tee";
    typeGrouping["sweatshirt"] = "graphic_tee";
    typeGrouping["kids"] = "graphic_tee";
    typeGrouping["kids premium maggie"] = "graphic_tee";
    typeGrouping["kids full sleeve"] = "graphic_tee";
    typeGrouping["men's premium t-shirt combo"] = "combo";
    typeGrouping["kids t-shirt combo"] = "combo";
    typeGrouping["kids summer t-shirt combo"] = "combo";
    typeGrouping["kids pant combo"] = "combo";
    typeGrouping["kids t-shirt with shorts combo"] = "combo";
    typeGrouping["premium cotton face mask"] = "mask";
    typeGrouping["kids premium cotton face mask"] = "mask";
    typeGrouping["designer edition premium cotton face mask"] = "mask";
    typeGrouping["premium cotton face mask - blank"] = "wholesale";
    typeGrouping["premium cotton face mask - branded"] = "wholesale";
    typeGrouping["premium cotton face mask - bulk"] = "wholesale";
    typeGrouping["trouser"] = "trouser";
    typeGrouping["mens sports trouser"] = "trouser";
    typeGrouping["womens trouser"] = "trouser";
    typeGrouping["kids trouser"] = "trouser";

    var typeList = instantsearch.widgets.panel({
      templates: {
        header: "<h5>Type</h5>",
      },
    })(instantsearch.widgets.refinementList);

    search.addWidget(
      typeList({
        container: "#types",
        attribute: "type",
        operator: "or",
        limit: 30,
        templates: {
          item: facetTemplateCheckbox,
        },
        sortBy(a, b) {
          //return a.name < b.name ? 1 : -1;
          if (typeSorting[a.name] && typeSorting[b.name])
            return typeSorting[a.name] < typeSorting[b.name] ? -1 : 1;
          else if (typeSorting[a.name] && !typeSorting[b.name]) return -1;
          else if (!typeSorting[a.name] && typeSorting[b.name]) return 1;
          else return a.name < b.name ? -1 : 1;
        },
        transformItems: function (items) {
          items.sort(function (a, b) {
            if (typeSorting[a.name] && typeSorting[b.name])
              return typeSorting[a.name] < typeSorting[b.name] ? -1 : 1;
            else if (typeSorting[a.name] && !typeSorting[b.name]) return -1;
            else if (!typeSorting[a.name] && typeSorting[b.name]) return 1;
            else return a.name < b.name ? -1 : 1;
          });
          typeGroupingExists = [];
          return items.map(function (item) {
            //console.log(item.label);
            if (typeGrouping[item.label]) {
              if (!typeGroupingExists[typeGrouping[item.label]]) {
                typeGroupingExists[typeGrouping[item.label]] = 1;
                item.classname = typeGrouping[item.label];
              }
            } else {
              if (!typeGroupingExists["new"]) {
                typeGroupingExists["new"] = 1;
                item.classname = "NEW";
              }
            }
            var catIdToName = {
              men: "Unisex Tees",
              women: "Women's Tees",
              kids: "Kid's Tees",
              "full sleeve": "Full Sleeve Tees",
              "kids summer t-shirt combo": "Kids Tees (5Yrs-11Yrs)",
              "kids t-shirt combo": "Kids Tees (6m-4Yrs)",
              "kids pant combo": "Kids Shorts (6M-6Yrs)",
              "kids t-shirt with shorts combo":
                "Kids Tee with Shorts (6M-6Yrs)",
              "kids premium maggie": "Kids Maggie Tees (2Y-10Y)",
              "men's premium t-shirt combo": "Unisex Tees",
              sweatshirt: "Sweatshirt",
              trouser: "Men's Trouser (Comfy)",
              "mens sports trouser": "Men's Trouser (Track)",
              "womens trouser": "Women's Trouser",
              "premium cotton face mask - branded": "Face mask (Custom)",
              "premium cotton face mask - bulk": "Face mask (Bulk)",
              "premium cotton face mask": "Face Mask",
              "kids premium cotton face mask": "Face Mask (Kids)",
              "designer edition premium cotton face mask": "Designer Edition",
              "flash sale": "Flash Sale (Half Sleeve)",
              20: "Music",
              30: "Occasion",
              28: "Passion",
              17: "Profession",
              18: "Quote",
              23: "Relationship",
              27: "Sports",
              26: "TV Series",
              31: "Miscellaneous",
              32: "Combo",
              33: "Premium Cotton Face Mask (Non Medical)",
              34: "Trouser",
              37: "Flash Sale",
              38: "Womens Designer Edition Mask (Non Medical)",
              39: "Kids Designer Edition Mask (Non Medical)",
              39: "Kids Designer Edition Mask (Non Medical)",
              41: "Womens Embroidery Edition Mask (Non Medical)",
              42: "Kids Premium Full Sleeve",
              43: "Kids Premium Trouser",
              45: "Euro-Copa America Edition Face Mask (Non Medical)",
            };
            if (catIdToName[item.label]) item.label = catIdToName[item.label];
            //console.log(item);
            return item;
          });
        },
      })
    );

    //Categories moved to Tags for DTG
    var brandList = instantsearch.widgets.panel({
      templates: {
        header: "<h5>Category</h5>",
      },
    })(instantsearch.widgets.refinementList);

    search.addWidget(
      brandList({
        container: "#brands",
        attribute: "cat_id",
        operator: "or",
        limit: 100,
        //searchable: true,
        templates: {
          item: facetTemplateCheckbox,
        },
        transformItems: function (items) {
          return items.map(function (item) {
            var catIdToName = {
              25: "Academic",
              11: "Artistic",
              10: "Bangladesh",
              29: "Blank T-shirt",
              22: "Cartooning",
              16: "Hobby",
              19: "Humor",
              24: "Institution",
              21: "Movie",
              20: "Music",
              30: "Occasion",
              28: "Passion",
              17: "Profession",
              18: "Quote",
              23: "Relationship",
              27: "Sports",
              26: "TV Series",
              31: "Miscellaneous",
              32: "Combo",
              33: "Premium Cotton Face Mask (Non Medical)",
              34: "Trouser",
              35: "Wholesale",
              36: "Designer Edition Cotton Mask (Non Medical)",
              37: "Flash Sale",
              38: "Womens Designer Edition Mask (Non Medical)",
              39: "Kids Designer Edition Mask (Non Medical)",
              41: "Womens Embroidery Edition Mask (Non Medical)",
              42: "Kids Premium Full Sleeve",
              43: "Kids Premium Trouser",
              45: "Euro-Copa America Edition Face Mask (Non Medical)",
            };
            item.label = catIdToName[item.label];
            return item;
          });
        },
      })
    );

    var colorList = instantsearch.widgets.panel({
      templates: {
        header: "<h5>Colors</h5>",
      },
    })(instantsearch.widgets.refinementList);

    search.addWidget(
      colorList({
        container: "#color",
        attribute: "color",
        operator: "or",
        limit: 14,
        templates: {
          item: facetTemplateColors,
        },
        transformItems: function (items) {
          var colorNames = {
            "#000000": "Black",
            "#ffffff": "White",
            "#2b2e43": "Navy Blue",
            "#00539c": "Royal Blue",
            "#c5c5c5": "Grey Melange",
            "#64242e": "Red Wine",
            "#d32e5e": "Pink",
            "#f7cac9": "Rose Pink",
            "#111111": "Black",
            "#757b4b": "Army",
            "#525257": "Ash",
            "#bc2e3e": "Red",
            "#29685f": "Green",
            "#684463": "Purple",
          };
          return items.map(function (item) {
            item.color = colorNames[item.value];
            return item;
          });
        },
      })
    );

    var colorList = instantsearch.widgets.panel({
      templates: {
        header: "<h5>Colors</h5>",
      },
    })(instantsearch.widgets.refinementList);

    // search.addWidget(
    // 	tagList({
    //     container: '#tags',
    //     attribute: 'tags',
    //     operator: 'or',
    //     limit: 20,
    //     templates: {
    //       item: facetTemplateTags,
    //     },
    //     transformItems: function(items) {
    //       return items.map(function(item) {
    //     	  item.color = item.color
    //     	  return item;
    //       });
    //     }
    //   })
    // );

    //	var ratingList = instantsearch.widgets.panel({
    //	  templates: {
    //	    header: '<h5>Likes</h5>',
    //	  },
    //	})(instantsearch.widgets.ratingMenu);
    //
    //	search.addWidget(
    //	  ratingList({
    //	    container: '#rating',
    //	    attribute: 'likes',
    //	  })
    //	);

    //	var priceInput = instantsearch.widgets.panel({
    //	  templates: {
    //	    header: '<h5>Price</h5>',
    //	  },
    //	})(instantsearch.widgets.rangeSlider);
    //
    //	search.addWidget(
    //	  priceInput({
    //	    container: '#price',
    //	    attribute: 'price',
    //	  })
    //	);
    search.addWidget(
      instantsearch.widgets.currentRefinements({
        container: "#current-refinements",
        transformItems: function (items) {
          return items.map(function (item) {
            //console.log(item);
            if (item.attribute == "cat_id") {
              item.label = "Category";
              var catIdToName = {
                25: "Academic",
                11: "Artistic",
                10: "Bangladesh",
                29: "Blank T-shirt",
                22: "Cartooning",
                16: "Hobby",
                19: "Humor",
                24: "Institution",
                21: "Movie",
                20: "Music",
                30: "Occasion",
                28: "Passion",
                17: "Profession",
                18: "Quote",
                23: "Relationship",
                27: "Sports",
                26: "TV Series",
                31: "Miscellaneous",
                32: "Combo",
                33: "Premium Cotton Face Mask (Non Medical)",
                34: "Trouser",
                35: "Wholesale",
                36: "Designer Edition Cotton Mask (Non Medical)",
                37: "Flash Sale",
                38: "Womens Designer Edition Mask (Non Medical)",
                39: "Kids Designer Edition Mask (Non Medical)",
                41: "Womens Embroidery Edition Mask (Non Medical)",
                42: "Kids Premium Full Sleeve",
                43: "Kids Premium Trouser",
                45: "Euro-Copa America Edition Face Mask (Non Medical)",
              };
              item.refinements.forEach((refinement) => {
                refinement.label = catIdToName[refinement.label];
              });
            } else if (item.attribute == "type") {
              item.label = "T-shirt For";
            } else if (item.attribute == "color") {
              item.label = "Color";
              var colorNames = {
                "#000000": "Black",
                "#ffffff": "White",
                "#2b2e43": "Navy Blue",
                "#00539c": "Royal Blue",
                "#c5c5c5": "Grey Melange",
                "#64242e": "Red Wine",
                "#d32e5e": "Pink",
                "#f7cac9": "Rose Pink",
                "#111111": "Black",
                "#757b4b": "Army",
                "#525257": "Ash",
                "#bc2e3e": "Red",
                "#29685f": "Green",
                "#684463": "Purple",
              };

              item.refinements.forEach((refinement) => {
                refinement.label = colorNames[refinement.label];
              });
            }

            return item;
          });
        },
      })
    );

    search.addWidget(
      instantsearch.widgets.currentRefinements({
        container: "#aside-current-refinements",
        transformItems: function (items) {
          return items.map(function (item) {
            if (item.attribute == "cat_id") {
              item.label = "Category";
              var catIdToName = {
                25: "Academic",
                11: "Artistic",
                10: "Bangladesh",
                29: "Blank T-shirt",
                22: "Cartooning",
                16: "Hobby",
                19: "Humor",
                24: "Institution",
                21: "Movie",
                20: "Music",
                30: "Occasion",
                28: "Passion",
                17: "Profession",
                18: "Quote",
                23: "Relationship",
                27: "Sports",
                26: "TV Series",
                31: "Miscellaneous",
                32: "Combo",
                33: "Premium Cotton Face Mask (Non Medical)",
                34: "Trouser",
                35: "Wholesale",
                36: "Designer Edition Cotton Mask (Non Medical)",
                37: "Flash Sale",
                38: "Womens Designer Edition Mask (Non Medical)",
                39: "Kids Designer Edition Mask (Non Medical)",
                41: "Womens Embroidery Edition Mask (Non Medical)",
                42: "Kids Premium Full Sleeve",
                43: "Kids Premium Trouser",
                45: "Euro-Copa America Edition Face Mask (Non Medical)",
              };
              item.refinements.forEach((refinement) => {
                refinement.label = catIdToName[refinement.label];
              });
            } else if (item.attribute == "type") {
              item.label = "T-shirt For";
            } else if (item.attribute == "color") {
              item.label = "Color";
              var colorNames = {
                "#000000": "Black",
                "#ffffff": "White",
                "#2b2e43": "Navy Blue",
                "#00539c": "Royal Blue",
                "#c5c5c5": "Grey Melange",
                "#64242e": "Red Wine",
                "#d32e5e": "Pink",
                "#f7cac9": "Rose Pink",
                "#111111": "Black",
                "#757b4b": "Army",
                "#525257": "Ash",
                "#bc2e3e": "Red",
                "#29685f": "Green",
                "#684463": "Purple",
              };

              item.refinements.forEach((refinement) => {
                refinement.label = colorNames[refinement.label];
              });
            }

            return item;
          });
        },
      })
    );

    //	search.addWidget(
    //			  instantsearch.widgets.rangeSlider({
    //			    container: '#price',
    //			    attribute: 'price',
    //			    templates: {
    //			         header: 'Price'
    //			    },
    //			    tooltips: {
    //			        format: function(rawValue) {
    //			    		return '৳'; // + Math.round(rawValue).toLocaleString();
    //			    	}
    //			    }
    //			  })
    //			);

    //price tooltips
    //    tooltips: false,
    //    {
    //    format: function(rawValue) {
    //      return '৳'; // + Math.round(rawValue).toLocaleString();
    //    }

    //	search.addWidget(
    //	  instantsearch.widgets.sortBy({
    //	    container: '#sort-by',
    //	    items: [
    //	      { value: 'instant_search', label: 'Featured' },
    //	      { value: 'instant_search_price_asc', label: 'Price asc.' },
    //	      { value: 'instant_search_price_desc', label: 'Price desc.' },
    //	    ],
    //	    label: 'sort by',
    //	  })
    //	);

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

    $.get("products/rocketscience").done(function (data) {
      //console.log(pricing_data);
      pricing_data = JSON.parse(data);
      search.start();
    });
  } else {
    console.log("jquery is not loaded");
  }
};
