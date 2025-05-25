var teeTextEl = document.querySelector(".teeText");
var fontSelect = document.querySelector(".fontSelector");
var colorSelect = document.querySelector(".colorSelector");
var imageSelect = document.querySelector(".imageUpload");
var teeShirt1 = document.querySelector(".teeShirt1");
var teeShirt2 = document.querySelector(".teeShirt2");
var flipperEl = document.querySelector(".flipper");
var frontSwitch = document.querySelector(".frontSwitch");
var backSwitch = document.querySelector(".backSwitch");
var back = document.querySelector(".back");
var copy = document.querySelector(".copy");
var center = document.querySelector(".center");
var objControls = document.querySelector(".controls");
var flipx = document.querySelector(".flipx");
var flipy = document.querySelector(".flipy");
var erase = document.querySelector(".erase");
var italic = document.querySelector(".italic");
var bold = document.querySelector(".bold");
var underline = document.querySelector(".underline");
var linethrough = document.querySelector(".linethrough");
var outlineStroke = document.querySelector(".outlineStroke");
var outlineColor = document.querySelector(".outlineColor");
var drawingModeEl = document.getElementById("drawing-mode");
var drawingOptionsEl = document.getElementById("drawing-mode-options");
var drawingColorEl = document.getElementById("drawing-color");
var drawingLineWidthEl = document.getElementById("drawing-line-width");
var drawingShadowWidth = document.getElementById("drawing-shadow-width");

var fonts = [
  "Aclonica",
  "Allan",
  "Annie Use Your Telescope",
  "Anonymous Pro",
  "Allerta Stencil",
  "Allerta",
  "Amaranth",
  "Anton",
  "Architects Daughter",
  "Arimo",
  "Artifika",
  "Arvo",
  "Asset",
  "Astloch",
  "Bangers",
  "Bentham",
  "Bevan",
  "Bigshot One",
  "Bowlby One",
  "Bowlby One SC",
  "Brawler",
  "Buda",
  "Cabin",
  "Calligraffitti",
  "Candal",
  "Cantarell",
  "Cardo",
  "Carter One",
  "Caudex",
  "Cedarville Cursive",
  "Cherry Cream Soda",
  "Chewy",
  "Coda",
  "Coming Soon",
  "Copse",
  "Corben",
  "Cousine",
  "Covered By Your Grace",
  "Crafty Girls",
  "Crimson Text",
  "Crushed",
  "Cuprum",
  "Damion",
  "Dancing Script",
  "Dawning of a New Day",
  "Didact Gothic",
  "Droid Sans",
  "Droid Sans Mono",
  "Droid Serif",
  "EB Garamond",
  "Expletus Sans",
  "Fontdiner Swanky",
  "Forum",
  "Francois One",
  "Geo",
  "Give You Glory",
  "Goblin One",
  "Goudy Bookletter 1911",
  "Gravitas One",
  "Gruppo",
  "Hammersmith One",
  "Holtwood One SC",
  "Homemade Apple",
  "Inconsolata",
  "Indie Flower",
  "IM Fell DW Pica",
  "IM Fell DW Pica SC",
  "IM Fell Double Pica",
  "IM Fell Double Pica SC",
  "IM Fell English",
  "IM Fell English SC",
  "IM Fell French Canon",
  "IM Fell French Canon SC",
  "IM Fell Great Primer",
  "IM Fell Great Primer SC",
  "Irish Grover",
  "Irish Growler",
  "Istok Web",
  "Josefin Sans",
  "Josefin Slab",
  "Judson",
  "Jura",
  "Just Another Hand",
  "Just Me Again Down Here",
  "Kameron",
  "Kenia",
  "Kranky",
  "Kreon",
  "Kristi",
  "La Belle Aurore",
  "Lato",
  "League Script",
  "Lekton",
  "Limelight",
  "Lobster",
  "Lobster Two",
  "Lora",
  "Love Ya Like A Sister",
  "Loved by the King",
  "Luckiest Guy",
  "Maiden Orange",
  "Mako",
  "Maven Pro",
  "Meddon",
  "MedievalSharp",
  "Megrim",
  "Merriweather",
  "Metrophobic",
  "Michroma",
  "Miltonian Tattoo",
  "Miltonian",
  "Modern Antiqua",
  "Monofett",
  "Molengo",
  "Mountains of Christmas",
  "Muli",
  "Neucha",
  "Neuton",
  "News Cycle",
  "Nixie One",
  "Nobile",
  "Nova Cut",
  "Nova Flat",
  "Nova Mono",
  "Nova Oval",
  "Nova Round",
  "Nova Script",
  "Nova Slim",
  "Nova Square",
  "Nunito",
  "OFL Sorts Mill Goudy TT",
  "Old Standard TT",
  "Open Sans",
  "Orbitron",
  "Oswald",
  "Over the Rainbow",
  "Reenie Beanie",
  "Pacifico",
  "Patrick Hand",
  "Paytone One",
  "Permanent Marker",
  "Philosopher",
  "Play",
  "Playfair Display",
  "Podkova",
  "PT Sans",
  "PT Sans Narrow",
  "PT Serif",
  "PT Serif Caption",
  "Puritan",
  "Quattrocento",
  "Quattrocento Sans",
  "Radley",
  "Redressed",
  "Rock Salt",
  "Rokkitt",
  "Roboto",
  "Ruslan Display",
  "Schoolbell",
  "Shadows Into Light",
  "Shanti",
  "Sigmar One",
  "Six Caps",
  "Slackey",
  "Smythe",
  "Special Elite",
  "Stardos Stencil",
  "Sue Ellen Francisco",
  "Sunshiney",
  "Swanky and Moo Moo",
  "Syncopate",
  "Tangerine",
  "Tenor Sans",
  "Terminal Dosis Light",
  "The Girl Next Door",
  "Tinos",
  "Ubuntu",
  "Ultra",
  "Unkempt",
  "UnifrakturCook:bold",
  "UnifrakturMaguntia",
  "Varela",
  "Varela Round",
  "Vibur",
  "Vollkorn",
  "VT323",
  "Waiting for the Sunrise",
  "Wallpoet",
  "Walter Turncoat",
  "Wire One",
  "Yanone Kaffeesatz",
  "Yeseva One",
  "Zeyada",
];

for (var i = 0, l = fonts.length; i < l; i++) {
  fontSelect.options.add(new Option(fonts[i], fonts[i]));
}
if (localStorage.getItem("fontFamily")) {
  for (var i = 0; i < fontSelect.options.length; i++) {
    if (fontSelect.options[i].value === localStorage.getItem("fontFamily")) {
      fontSelect.options[i].selected = true;
      break;
    }
  }
}
if (localStorage.getItem("textColor")) {
  document.querySelector(".colorSelector").value =
    localStorage.getItem("textColor");
}
if (localStorage.getItem("borderColor")) {
  document.querySelector(".outlineColor").value =
    localStorage.getItem("borderColor");
}
// reference canvas element (with id="c")
var canvasEl = document.querySelector("#c");
var canvasBackEl = document.querySelector("#cback");
// get 2d context to draw on (the "bitmap" mentioned earlier)
var ctx = canvasEl.getContext("2d");
//canvasBackEl.getContext('2d');
ctx.fillStyle = "red";
var canvas = new fabric.Canvas("c");
var canvasBack = new fabric.Canvas("cback");

canvas.setHeight(350);
canvas.setWidth(235);
canvasBack.setHeight(350);
canvasBack.setWidth(230);

teeTextEl.addEventListener("input", function (event) {
  var name = [fontSelect.value, "Droid Serif"];
  WebFont.load({
    google: {
      families: name,
    },
    active: function () {
      canvas.renderAll();
      canvasBack.renderAll();
    },
  });
  if (flipperEl.style.transform == "rotateY(180deg)") {
    if (canvasBack.getActiveObject() != null) {
      if (this.value == "") {
        canvasBack.getActiveObject().remove();
      } else {
        canvasBack.getActiveObject().set("text", teeTextEl.value);
        canvasBack.renderAll();
      }
    } else {
      var text = new fabric.Text(teeTextEl.value, {
        fontSize: 40,
        fontFamily: fontSelect.value,
        left: 10,
        top: 10,
        itemtype: "text",
        fill: "#" + colorSelect.value,
        stroke: "#000",
        strokeWidth: 0,
      });
      canvasBack.add(text);
      canvasBack.setActiveObject(
        canvasBack.item(canvasBack.getObjects().length - 1)
      );
    }
  } else {
    if (canvas.getActiveObject() != null) {
      if (this.value == "") {
        canvas.getActiveObject().remove();
      } else {
        canvas.getActiveObject().set("text", teeTextEl.value);
        canvas.renderAll();
      }
    } else {
      var text = new fabric.Text(teeTextEl.value, {
        fontSize: 40,
        fontFamily: fontSelect.value,
        left: 10,
        top: 10,
        itemtype: "text",
        fill: "#" + colorSelect.value,
        stroke: "#000",
        strokeWidth: 0,
      });
      canvas.add(text);
      canvas.setActiveObject(canvas.item(canvas.getObjects().length - 1));
    }
  }
});

fontSelect.addEventListener("change", function (event) {
  localStorage.setItem("fontFamily", fontSelect.value);
  var name = [fontSelect.value, "Droid Serif"];
  WebFont.load({
    google: {
      families: name,
    },
    active: function () {
      if (flipperEl.style.transform == "rotateY(180deg)") {
        canvasBack.renderAll();
        canvasBack.getActiveObject().fontSize =
          canvasBack.getActiveObject().fontSize + 1;
        canvasBack.renderAll();
        canvasBack.getActiveObject().fontSize =
          canvasBack.getActiveObject().fontSize - 1;
        canvasBack.renderAll();
      } else {
        canvas.renderAll();
        canvas.getActiveObject().fontSize =
          canvas.getActiveObject().fontSize + 1;
        canvas.renderAll();
        canvas.getActiveObject().fontSize =
          canvas.getActiveObject().fontSize - 1;
        canvas.renderAll();
      }
    },
  });
  if (flipperEl.style.transform == "rotateY(180deg)") {
    if (canvasBack.getActiveObject() != null) {
      canvasBack.getActiveObject().set("fontFamily", fontSelect.value);
      canvasBack.renderAll();
    }
  } else {
    if (canvas.getActiveObject() != null) {
      canvas.getActiveObject().set("fontFamily", fontSelect.value);
      canvas.renderAll();
    }
  }
});
outlineStroke.addEventListener("change", function (event) {
  if (flipperEl.style.transform == "rotateY(180deg)") {
    if (canvasBack.getActiveObject() != null) {
      canvasBack.getActiveObject().strokeWidth = parseFloat(
        outlineStroke.value
      );
      canvasBack.renderAll();
    }
  } else {
    if (canvas.getActiveObject() != null) {
      canvas.getActiveObject().strokeWidth = parseFloat(outlineStroke.value);
      canvas.renderAll();
    }
  }
});

function update(jscolor) {
  localStorage.setItem("textColor", colorSelect.value);

  if (flipperEl.style.transform == "rotateY(180deg)") {
    if (canvasBack.getActiveObject() != null) {
      canvasBack.getActiveObject().set("fill", "#" + colorSelect.value);
      canvasBack.renderAll();
    }
  } else {
    if (canvas.getActiveObject() != null) {
      canvas.getActiveObject().set("fill", "#" + colorSelect.value);
      canvas.renderAll();
    }
  }
}

function colorUpdate(jscolor) {
  localStorage.setItem("borderColor", outlineColor.value);
  if (flipperEl.style.transform == "rotateY(180deg)") {
    if (canvasBack.getActiveObject() != null) {
      canvasBack.getActiveObject().set("stroke", "#" + outlineColor.value);
      canvasBack.renderAll();
    }
  } else {
    if (canvas.getActiveObject() != null) {
      canvas.getActiveObject().set("stroke", "#" + outlineColor.value);
      canvas.renderAll();
    }
  }
}

imageSelect.addEventListener("change", function (event) {
  var fileTypes = ["jpg", "jpeg", "png", "svg"];
  var fileReader = new FileReader();
  fileReader.readAsDataURL(imageSelect.files[0]);
  fileReader.onloadend = function () {
    if (imageSelect.files && imageSelect.files[0]) {
      var extension = imageSelect.files[0].name.split(".").pop().toLowerCase();
      isSuccess = fileTypes.indexOf(extension) > -1;
      if (isSuccess) {
        var newImage = document.createElement("img");
        newImage.addEventListener("load", function () {
          if (
            newImage.height >= 300 &&
            newImage.width >= 300 &&
            newImage.height <= 4000 &&
            newImage.width <= 4000
          ) {
            fabric.Image.fromURL(fileReader.result, function (fabImg) {
              if (flipperEl.style.transform == "rotateY(180deg)") {
                canvasBack.add(fabImg);
                fabImg.set({
                  height: setImgSize(newImage.width, newImage.height)[1],
                  width: setImgSize(newImage.width, newImage.height)[0],
                  top: 50,
                  minScaleLimit: setImgSize(newImage.width, newImage.height)[2],
                  left:
                    canvasBack.width / 2 -
                    setImgSize(newImage.width, newImage.height)[0] / 2,
                  text: "",
                  itemtype: "image",
                });
                canvasBack.renderAll();
                imageSelect.value = "";
              } else {
                canvas.add(fabImg);
                fabImg.set({
                  height: setImgSize(newImage.width, newImage.height)[1],
                  width: setImgSize(newImage.width, newImage.height)[0],
                  top: 50,
                  minScaleLimit: setImgSize(newImage.width, newImage.height)[2],
                  left:
                    canvas.width / 2 -
                    setImgSize(newImage.width, newImage.height)[0] / 2,
                  text: "",
                  itemtype: "image",
                });
                canvas.renderAll();
                imageSelect.value = "";
              }
            });
          } else {
            document.querySelector(".commonmodal-header").innerHTML =
              "File resolution is incorrect";
            document.querySelector(".commonmodal-body").innerHTML =
              "<div style='background: #ffd5d2; padding: 5px; border: 1px solid #ffd5d2; border-radius: 4px;'>Error: Uploaded Image resolution: (" +
              newImage.height +
              " x " +
              newImage.width +
              ")px</div><div style='padding: 5px;'>Uploaded image must be at least (300 x 300)px and not more than (4000 x 4000)px in width x height</div>";
            $(".commonmodal").modal("toggle");
          }
        });
        newImage.src = fileReader.result;
      } else {
        document.querySelector(".commonmodal-header").innerHTML =
          "File extension is not allowed";
        document.querySelector(".commonmodal-body").innerHTML =
          "<div style='background: #ffd5d2; padding: 5px; border: 1px solid #ffd5d2; border-radius: 4px;'>Error: Uploaded Image format <b>" +
          extension +
          "</b> is not supported by design module.</div><div style='padding: 5px;'>Supported file formats: png, jpg/jpeg and svg</div>";
        $(".commonmodal").modal("toggle");
      }
    }
  };
});

canvas.on("selection:cleared", function (options) {
  teeTextEl.value = "";
  objControls.style.display = "none";
  document.querySelector(".tee").style.border = "2px solid grey";
});
canvas.on("object:removed", function (options) {
  canvas.deactivateAllWithDispatch();
  document.querySelector(".tee").style.border = "2px solid grey";

  //canvasBack.deactivateAllWithDispatch();
});

canvas.on("object:selected", function (options) {
  if (
    canvas.getActiveObject() != null &&
    (canvas.getActiveObject().itemtype == "text" ||
      canvas.getActiveObject().type == "text")
  ) {
    teeTextEl.value = canvas.getActiveObject().text;
  } else {
    teeTextEl.value = "";
  }
  objControls.style.display = "block";
});

canvas.observe("object:scaling", function (e) {
  var obj = e.target;
  if (obj.itemtype == "text" || obj.type == "text") {
    obj.minScaleLimit = 0.01;
  } else if (
    (obj.itemtype == "image" || obj.type == "image") &&
    obj.minScaleLimit != 0.01
  ) {
    if (obj.scaleX > obj.minScaleLimit * 10) {
      document.querySelector(".tee").style.border = "5px solid red";
      obj.setScaleX(obj.minScaleLimit * 10);
      document.querySelector("#resizealert").style.display = "block";
    }
    if (obj.scaleY > obj.minScaleLimit * 10) {
      document.querySelector(".tee").style.border = "5px solid red";
      obj.setScaleY(obj.minScaleLimit * 10);
      document.querySelector("#resizealert").style.display = "block";
    }
  }
});

canvasBack.observe("object:scaling", function (e) {
  var obj = e.target;
  if (obj.itemtype == "text" || obj.type == "text") {
    obj.minScaleLimit = 0.01;
  } else if (
    (obj.itemtype == "image" || obj.type == "image") &&
    obj.minScaleLimit != 0.01
  ) {
    if (obj.scaleX > obj.minScaleLimit * 10) {
      document.querySelector(".teeback").style.border = "5px solid red";
      obj.setScaleX(obj.minScaleLimit * 10);
      document.querySelector("#resizealert").style.display = "block";
    }
    if (obj.scaleY > obj.minScaleLimit * 10) {
      document.querySelector(".teeback").style.border = "5px solid red";
      obj.setScaleY(obj.minScaleLimit * 10);
      document.querySelector("#resizealert").style.display = "block";
    }
  }
});
canvas.observe("mouse:up", function (e) {
  document.querySelector("#resizealert").style.display = "none";
  document.querySelector(".tee").style.border = "2px solid grey";
});
canvasBack.observe("mouse:up", function (e) {
  document.querySelector("#resizealert").style.display = "none";
  document.querySelector(".teeback").style.border = "2px solid grey";
});

canvas.observe("mouse:up", function (e) {
  if (canvas.getActiveObject()) {
    if (canvas.getActiveObject().angle == 0) {
      if (
        canvas.getActiveObject().left +
          canvas.getActiveObject().width * canvas.getActiveObject().scaleX <
        10
      ) {
        canvas.getActiveObject().viewportCenter();
        canvas.getActiveObject().setCoords({
          top: canvas.getActiveObject().top,
          left: canvas.getActiveObject().left,
        });
      }
      if (canvas.getActiveObject().left > canvas.width - 10) {
        canvas.getActiveObject().viewportCenter();
        canvas.getActiveObject().setCoords({
          top: canvas.getActiveObject().top,
          left: canvas.getActiveObject().left,
        });
      }
      if (
        canvas.getActiveObject().top +
          canvas.getActiveObject().height * canvas.getActiveObject().scaleY <
        10
      ) {
        canvas.getActiveObject().viewportCenter();
        canvas.getActiveObject().setCoords({
          top: canvas.getActiveObject().top,
          left: canvas.getActiveObject().left,
        });
      }
      if (canvas.getActiveObject().top > canvas.height - 10) {
        canvas.getActiveObject().viewportCenter();
        canvas.getActiveObject().setCoords({
          top: canvas.getActiveObject().top,
          left: canvas.getActiveObject().left,
        });
      }
    }
    if (canvas.getActiveObject().angle > 0) {
      if (
        canvas.getActiveObject().left +
          Math.min(
            canvas.getActiveObject().width * canvas.getActiveObject().scaleX,
            canvas.getActiveObject().height * canvas.getActiveObject().scaleY
          ) /
            2 <
        0
      ) {
        canvas.getActiveObject().viewportCenter();
        canvas.getActiveObject().setCoords({
          top: canvas.getActiveObject().top,
          left: canvas.getActiveObject().left,
        });
      }
      if (
        canvas.width +
          Math.min(
            canvas.getActiveObject().width * canvas.getActiveObject().scaleX,
            canvas.getActiveObject().height * canvas.getActiveObject().scaleY
          ) /
            2 <
        canvas.getActiveObject().left
      ) {
        canvas.getActiveObject().viewportCenter();
        canvas.getActiveObject().setCoords({
          top: canvas.getActiveObject().top,
          left: canvas.getActiveObject().left,
        });
      }
      if (
        canvas.getActiveObject().top +
          Math.min(
            canvas.getActiveObject().width * canvas.getActiveObject().scaleX,
            canvas.getActiveObject().height * canvas.getActiveObject().scaleY
          ) /
            2 <
        0
      ) {
        canvas.getActiveObject().viewportCenter();
        canvas.getActiveObject().setCoords({
          top: canvas.getActiveObject().top,
          left: canvas.getActiveObject().left,
        });
      }
      if (
        canvas.height +
          Math.min(
            canvas.getActiveObject().width * canvas.getActiveObject().scaleX,
            canvas.getActiveObject().height * canvas.getActiveObject().scaleY
          ) /
            2 <
        canvas.getActiveObject().top
      ) {
        canvas.getActiveObject().viewportCenter();
        canvas.getActiveObject().setCoords({
          top: canvas.getActiveObject().top,
          left: canvas.getActiveObject().left,
        });
      }
    }
  }
});

canvasBack.observe("mouse:up", function (e) {
  if (canvasBack.getActiveObject()) {
    if (canvasBack.getActiveObject().angle == 0) {
      if (
        canvasBack.getActiveObject().left +
          canvasBack.getActiveObject().width *
            canvasBack.getActiveObject().scaleX <
        10
      ) {
        canvasBack.getActiveObject().viewportCenter();
        canvasBack.getActiveObject().setCoords({
          top: canvasBack.getActiveObject().top,
          left: canvasBack.getActiveObject().left,
        });
      }
      if (canvasBack.getActiveObject().left > canvasBack.width - 10) {
        canvasBack.getActiveObject().viewportCenter();
        canvasBack.getActiveObject().setCoords({
          top: canvasBack.getActiveObject().top,
          left: canvasBack.getActiveObject().left,
        });
      }
      if (
        canvasBack.getActiveObject().top +
          canvasBack.getActiveObject().height *
            canvasBack.getActiveObject().scaleY <
        10
      ) {
        canvasBack.getActiveObject().viewportCenter();
        canvasBack.getActiveObject().setCoords({
          top: canvasBack.getActiveObject().top,
          left: canvasBack.getActiveObject().left,
        });
      }
      if (canvasBack.getActiveObject().top > canvasBack.height - 10) {
        canvasBack.getActiveObject().viewportCenter();
        canvasBack.getActiveObject().setCoords({
          top: canvasBack.getActiveObject().top,
          left: canvasBack.getActiveObject().left,
        });
      }
    }
    if (canvasBack.getActiveObject().angle > 0) {
      if (
        canvasBack.getActiveObject().left +
          Math.min(
            canvasBack.getActiveObject().width *
              canvasBack.getActiveObject().scaleX,
            canvasBack.getActiveObject().height *
              canvasBack.getActiveObject().scaleY
          ) /
            2 <
        0
      ) {
        canvasBack.getActiveObject().viewportCenter();
        canvasBack.getActiveObject().setCoords({
          top: canvasBack.getActiveObject().top,
          left: canvasBack.getActiveObject().left,
        });
      }
      if (
        canvasBack.width +
          Math.min(
            canvasBack.getActiveObject().width *
              canvasBack.getActiveObject().scaleX,
            canvasBack.getActiveObject().height *
              canvasBack.getActiveObject().scaleY
          ) /
            2 <
        canvasBack.getActiveObject().left
      ) {
        canvasBack.getActiveObject().viewportCenter();
        canvasBack.getActiveObject().setCoords({
          top: canvasBack.getActiveObject().top,
          left: canvasBack.getActiveObject().left,
        });
      }
      if (
        canvasBack.getActiveObject().top +
          Math.min(
            canvasBack.getActiveObject().width *
              canvasBack.getActiveObject().scaleX,
            canvasBack.getActiveObject().height *
              canvasBack.getActiveObject().scaleY
          ) /
            2 <
        0
      ) {
        canvasBack.getActiveObject().viewportCenter();
        canvasBack.getActiveObject().setCoords({
          top: canvasBack.getActiveObject().top,
          left: canvasBack.getActiveObject().left,
        });
      }
      if (
        canvasBack.height +
          Math.min(
            canvasBack.getActiveObject().width *
              canvasBack.getActiveObject().scaleX,
            canvasBack.getActiveObject().height *
              canvasBack.getActiveObject().scaleY
          ) /
            2 <
        canvasBack.getActiveObject().top
      ) {
        canvasBack.getActiveObject().viewportCenter();
        canvasBack.getActiveObject().setCoords({
          top: canvasBack.getActiveObject().top,
          left: canvasBack.getActiveObject().left,
        });
      }
    }
  }
});

canvasBack.on("selection:cleared", function (options) {
  teeTextEl.value = "";
  objControls.style.display = "none";
  document.querySelector(".teeback").style.border = "2px solid grey";
});
canvasBack.on("object:removed", function (options) {
  canvasBack.deactivateAllWithDispatch();
  document.querySelector(".teeback").style.border = "2px solid grey";
});

canvasBack.on("object:selected", function (options) {
  if (
    canvasBack.getActiveObject() != null &&
    (canvasBack.getActiveObject().itemtype == "text" ||
      canvasBack.getActiveObject().type == "text")
  ) {
    teeTextEl.value = canvasBack.getActiveObject().text;
  } else {
    teeTextEl.value = "";
  }
  objControls.style.display = "block";
});
fabric.Canvas.prototype.customiseControls({
  tl: {
    action: "rotate",
    cursor: "/img/tl.png",
    icon: "/img/tl.png",
  },
  tr: {
    action: "remove",
    cursor: "/img/tr.png",
  },
  bl: {
    action: "moveUp",
    cursor: "/img/bl.png",
  },
  br: {
    action: "scale",
    cursor: "/img/br.png",
  },
  mb: {
    action: "scaleY",
    cursor: "pointer",
  },
  mt: {
    action: "scaleY",
    cursor: "pointer",
  },
  mr: {
    action: "scaleX",
    cursor: "pointer",
  },
  ml: {
    action: "scaleX",
    cursor: "pointer",
  },
});

fabric.Object.prototype.customizeCornerIcons({
  settings: {
    borderColor: "grey",
    cornerSize: 16,
    cornerPadding: 1,
  },
  tl: {
    icon: "/img/tl.png",
  },
  tr: {
    icon: "/img/tr.png",
  },
  bl: {
    icon: "/img/bl.png",
  },
  br: {
    icon: "/img/br.png",
  },
  mb: {
    icon: "/img/grid.png",
  },
  mt: {
    icon: "/img/grid.png",
  },
  ml: {
    icon: "/img/grid.png",
  },
  mr: {
    icon: "/img/grid.png",
  },
});

document.addEventListener("keydown", function (event) {
  if (event.which == 46) {
    if (event.target.type != "textarea") {
      if (flipperEl.style.transform == "rotateY(180deg)") {
        canvasBack.getActiveObject().remove();
        canvasBack.renderAll();
      } else {
        canvas.getActiveObject().remove();
        canvas.renderAll();
      }
    }
  }
});
frontSwitch.addEventListener("click", function frontswitch(event) {
  if (drawingModeEl.innerHTML == "Cancel drawing mode") {
    drawingModeEl.click();
  }
  flipperEl.style.transform = "rotateY(0deg)";
  canvas.deactivateAllWithDispatch();
  canvasBack.deactivateAllWithDispatch();
  canvas.renderAll();
  canvasBack.renderAll();
});
backSwitch.addEventListener("click", function backswitch(event) {
  if (drawingModeEl.innerHTML == "Cancel drawing mode") {
    drawingModeEl.click();
  }
  flipperEl.style.transform = "rotateY(180deg)";
  canvas.deactivateAllWithDispatch();
  canvasBack.deactivateAllWithDispatch();
  canvas.renderAll();
  canvasBack.renderAll();
});

back.addEventListener("click", function (event) {
  if (flipperEl.style.transform == "rotateY(180deg)") {
    canvasBack.sendToBack(canvasBack.getActiveObject());
    canvasBack.setActiveObject(
      canvasBack.item(canvasBack.getObjects().length - 1)
    );
    canvasBack.renderAll();
  } else {
    canvas.sendToBack(canvas.getActiveObject());
    canvas.setActiveObject(canvas.item(canvas.getObjects().length - 1));
    canvas.renderAll();
  }
});

copy.addEventListener("click", function (event) {
  if (flipperEl.style.transform == "rotateY(180deg)") {
    var object = fabric.util.object.clone(canvasBack.getActiveObject());
    object.set(
      "top",
      canvasBack.getObjects()[canvasBack.getObjects().length - 1].top + 10
    );
    object.set(
      "left",
      canvasBack.getObjects()[canvasBack.getObjects().length - 1].left + 10
    );
    canvasBack.add(object);
    canvasBack.renderAll();
  } else {
    var object = fabric.util.object.clone(canvas.getActiveObject());
    object.set(
      "top",
      canvas.getObjects()[canvas.getObjects().length - 1].top + 10
    );
    object.set(
      "left",
      canvas.getObjects()[canvas.getObjects().length - 1].left + 10
    );
    canvas.add(object);
    canvas.renderAll();
  }
});

center.addEventListener("click", function (event) {
  if (flipperEl.style.transform == "rotateY(180deg)") {
    if (canvasBack.getActiveObject().originX == "center") {
      canvasBack.getActiveObject().set("left", canvasBack.width / 2);
      canvasBack.getActiveObject().setCoords("left", canvasBack.width / 2);
    } else {
      canvasBack
        .getActiveObject()
        .set(
          "left",
          canvasBack.width / 2 -
            (canvasBack.getActiveObject().width *
              canvasBack.getActiveObject().scaleX) /
              2
        );
      canvasBack
        .getActiveObject()
        .setCoords(
          "left",
          canvasBack.width / 2 -
            (canvasBack.getActiveObject().width *
              canvasBack.getActiveObject().scaleX) /
              2
        );
    }
    canvasBack.renderAll();
  } else {
    if (canvas.getActiveObject().originX == "center") {
      canvas.getActiveObject().set("left", canvas.width / 2);
      canvas.getActiveObject().setCoords("left", canvas.width / 2);
    } else {
      canvas
        .getActiveObject()
        .set(
          "left",
          canvas.width / 2 -
            (canvas.getActiveObject().width * canvas.getActiveObject().scaleX) /
              2
        );
      canvas
        .getActiveObject()
        .setCoords(
          "left",
          canvas.width / 2 -
            (canvas.getActiveObject().width * canvas.getActiveObject().scaleX) /
              2
        );
    }
    canvas.renderAll();
  }
});
flipx.addEventListener("click", function (event) {
  if (flipperEl.style.transform == "rotateY(180deg)") {
    canvasBack.getActiveObject().flipX = !canvasBack.getActiveObject().flipX;
    canvasBack.renderAll();
  } else {
    canvas.getActiveObject().flipX = !canvas.getActiveObject().flipX;
    canvas.renderAll();
  }
});

flipy.addEventListener("click", function (event) {
  if (flipperEl.style.transform == "rotateY(180deg)") {
    canvasBack.getActiveObject().flipY = !canvasBack.getActiveObject().flipY;
    canvasBack.renderAll();
  } else {
    canvas.getActiveObject().flipY = !canvas.getActiveObject().flipY;
    canvas.renderAll();
  }
});

erase.addEventListener("click", function (event) {
  if (flipperEl.style.transform == "rotateY(180deg)") {
    canvasBack.clear();
    canvasBack.renderAll();
    localStorage.removeItem(getPageID() + "canvasBackJSON");
    localforage.removeItem(getPageID() + "canvasBackJSON");
    document.querySelector(".teeback").style.border = "2px solid grey";
  } else {
    canvas.clear();
    canvas.renderAll();
    localStorage.removeItem(getPageID() + "canvasJSON");
    localforage.removeItem(getPageID() + "canvasJSON");
    document.querySelector(".tee").style.border = "2px solid grey";
  }
});
bold.addEventListener("click", function (event) {
  if (flipperEl.style.transform == "rotateY(180deg)") {
    if (canvasBack.getActiveObject().fontStyle == "Bold") {
      canvasBack.getActiveObject().fontStyle = "";
    } else {
      canvasBack.getActiveObject().fontStyle = "Bold";
    }
    canvasBack.renderAll();
  } else {
    if (canvas.getActiveObject().fontStyle == "Bold") {
      canvas.getActiveObject().fontStyle = "";
    } else {
      canvas.getActiveObject().fontStyle = "Bold";
    }
    canvas.renderAll();
  }
});
italic.addEventListener("click", function (event) {
  if (flipperEl.style.transform == "rotateY(180deg)") {
    if (canvasBack.getActiveObject().fontStyle == "italic") {
      canvasBack.getActiveObject().fontStyle = "";
    } else {
      canvasBack.getActiveObject().fontStyle = "italic";
    }
    canvasBack.renderAll();
  } else {
    if (canvas.getActiveObject().fontStyle == "italic") {
      canvas.getActiveObject().fontStyle = "";
    } else {
      canvas.getActiveObject().fontStyle = "italic";
    }
    canvas.renderAll();
  }
});
underline.addEventListener("click", function (event) {
  if (flipperEl.style.transform == "rotateY(180deg)") {
    if (canvasBack.getActiveObject().textDecoration == "underline") {
      canvasBack.getActiveObject().textDecoration = "";
    } else {
      canvasBack.getActiveObject().textDecoration = "underline";
    }
    canvasBack.renderAll();
  } else {
    if (canvas.getActiveObject().textDecoration == "underline") {
      canvas.getActiveObject().textDecoration = "";
    } else {
      canvas.getActiveObject().textDecoration = "underline";
    }
    canvas.renderAll();
  }
});
linethrough.addEventListener("click", function (event) {
  if (flipperEl.style.transform == "rotateY(180deg)") {
    if (canvasBack.getActiveObject().textDecoration == "line-through") {
      canvasBack.getActiveObject().textDecoration = "";
    } else {
      canvasBack.getActiveObject().textDecoration = "line-through";
    }
    canvasBack.renderAll();
  } else {
    if (canvas.getActiveObject().textDecoration == "line-through") {
      canvas.getActiveObject().textDecoration = "";
    } else {
      canvas.getActiveObject().textDecoration = "line-through";
    }
    canvas.renderAll();
  }
});
$(function () {
  $(".imageUploader").click(function (e) {
    e.preventDefault();
    $(".imageUpload").click();
  });
});
$(document).ready(function () {
  $('[data-toggle="tooltip"]').tooltip();
});

$(document).ready(function () {
  $('[data-toggle="popover"]').popover();
  if ($(".popover").hasClass("in")) {
    $(this).popover("hide");
    $(this).attr("data-content", "Click to select your object");
    $(this).popover("show");
  }
});

drawingModeEl.onclick = function () {
  if (flipperEl.style.transform == "rotateY(180deg)") {
    canvasBack.isDrawingMode = !canvasBack.isDrawingMode;
    if (canvasBack.isDrawingMode) {
      drawingModeEl.innerHTML = "Cancel drawing mode";
      drawingOptionsEl.style.display = "";
    } else {
      drawingModeEl.innerHTML = "Enter drawing mode";
      drawingOptionsEl.style.display = "none";
    }
  } else {
    canvas.isDrawingMode = !canvas.isDrawingMode;
    if (canvas.isDrawingMode) {
      drawingModeEl.innerHTML = "Cancel drawing mode";
      drawingOptionsEl.style.display = "";
    } else {
      drawingModeEl.innerHTML = "Enter drawing mode";
      drawingOptionsEl.style.display = "none";
    }
  }
};

if (fabric.PatternBrush) {
  var vLinePatternBrush = new fabric.PatternBrush(canvas);
  vLinePatternBrush.getPatternSrc = function () {
    var patternCanvas = fabric.document.createElement("canvas");
    patternCanvas.width = patternCanvas.height = 10;
    var ctx = patternCanvas.getContext("2d");

    ctx.strokeStyle = this.color;
    ctx.lineWidth = 5;
    ctx.beginPath();
    ctx.moveTo(0, 5);
    ctx.lineTo(10, 5);
    ctx.closePath();
    ctx.stroke();
    return patternCanvas;
  };

  var vLinePatternBrush2 = new fabric.PatternBrush(canvasBack);
  vLinePatternBrush2.getPatternSrc = function () {
    var patternCanvas = fabric.document.createElement("canvas");
    patternCanvas.width = patternCanvas.height = 10;
    var ctx = patternCanvas.getContext("2d");

    ctx.strokeStyle = this.color;
    ctx.lineWidth = 5;
    ctx.beginPath();
    ctx.moveTo(0, 5);
    ctx.lineTo(10, 5);
    ctx.closePath();
    ctx.stroke();

    return patternCanvas;
  };

  var hLinePatternBrush = new fabric.PatternBrush(canvas);
  hLinePatternBrush.getPatternSrc = function () {
    var patternCanvas = fabric.document.createElement("canvas");
    patternCanvas.width = patternCanvas.height = 10;
    var ctx = patternCanvas.getContext("2d");

    ctx.strokeStyle = this.color;
    ctx.lineWidth = 5;
    ctx.beginPath();
    ctx.moveTo(5, 0);
    ctx.lineTo(5, 10);
    ctx.closePath();
    ctx.stroke();

    return patternCanvas;
  };

  var hLinePatternBrush2 = new fabric.PatternBrush(canvasBack);
  hLinePatternBrush2.getPatternSrc = function () {
    var patternCanvas = fabric.document.createElement("canvas");
    patternCanvas.width = patternCanvas.height = 10;
    var ctx = patternCanvas.getContext("2d");

    ctx.strokeStyle = this.color;
    ctx.lineWidth = 5;
    ctx.beginPath();
    ctx.moveTo(5, 0);
    ctx.lineTo(5, 10);
    ctx.closePath();
    ctx.stroke();

    return patternCanvas;
  };

  var squarePatternBrush = new fabric.PatternBrush(canvas);
  squarePatternBrush.getPatternSrc = function () {
    var squareWidth = 10,
      squareDistance = 2;

    var patternCanvas = fabric.document.createElement("canvas");
    patternCanvas.width = patternCanvas.height = squareWidth + squareDistance;
    var ctx = patternCanvas.getContext("2d");

    ctx.fillStyle = this.color;
    ctx.fillRect(0, 0, squareWidth, squareWidth);

    return patternCanvas;
  };

  var squarePatternBrush2 = new fabric.PatternBrush(canvasBack);
  squarePatternBrush2.getPatternSrc = function () {
    var squareWidth = 10,
      squareDistance = 2;

    var patternCanvas = fabric.document.createElement("canvas");
    patternCanvas.width = patternCanvas.height = squareWidth + squareDistance;
    var ctx = patternCanvas.getContext("2d");

    ctx.fillStyle = this.color;
    ctx.fillRect(0, 0, squareWidth, squareWidth);

    return patternCanvas;
  };

  var diamondPatternBrush = new fabric.PatternBrush(canvas);
  diamondPatternBrush.getPatternSrc = function () {
    var squareWidth = 10,
      squareDistance = 5;
    var patternCanvas = fabric.document.createElement("canvas");
    var rect = new fabric.Rect({
      width: squareWidth,
      height: squareWidth,
      angle: 45,
      fill: this.color,
    });

    var canvasWidth = rect.getBoundingRectWidth();

    patternCanvas.width = patternCanvas.height = canvasWidth + squareDistance;
    rect.set({
      left: canvasWidth / 2,
      top: canvasWidth / 2,
    });

    var ctx = patternCanvas.getContext("2d");
    rect.render(ctx);

    return patternCanvas;
  };

  var diamondPatternBrush2 = new fabric.PatternBrush(canvasBack);
  diamondPatternBrush2.getPatternSrc = function () {
    var squareWidth = 10,
      squareDistance = 5;
    var patternCanvas = fabric.document.createElement("canvas");
    var rect = new fabric.Rect({
      width: squareWidth,
      height: squareWidth,
      angle: 45,
      fill: this.color,
    });

    var canvasWidth = rect.getBoundingRectWidth();

    patternCanvas.width = patternCanvas.height = canvasWidth + squareDistance;
    rect.set({
      left: canvasWidth / 2,
      top: canvasWidth / 2,
    });

    var ctx = patternCanvas.getContext("2d");
    rect.render(ctx);

    return patternCanvas;
  };

  var img = new Image();
  img.src = "/img/seigaiha.png";

  var texturePatternBrush = new fabric.PatternBrush(canvas);
  texturePatternBrush.source = img;

  var texturePatternBrush2 = new fabric.PatternBrush(canvasBack);
  texturePatternBrush2.source = img;
}

document
  .getElementById("drawing-mode-selector")
  .addEventListener("change", function () {
    if (flipperEl.style.transform == "rotateY(180deg)") {
      if (this.value === "hline") {
        canvasBack.freeDrawingBrush = hLinePatternBrush2;
      } else if (this.value === "vline") {
        canvasBack.freeDrawingBrush = vLinePatternBrush2;
      } else if (this.value === "square") {
        canvasBack.freeDrawingBrush = squarePatternBrush2;
      } else if (this.value === "diamond") {
        canvasBack.freeDrawingBrush = diamondPatternBrush2;
      } else if (this.value === "texture") {
        canvasBack.freeDrawingBrush = texturePatternBrush2;
      } else {
        canvasBack.freeDrawingBrush = new fabric[this.value + "Brush"](
          canvasBack
        );
      }

      if (canvasBack.freeDrawingBrush) {
        canvasBack.freeDrawingBrush.color = "#" + drawingColorEl.value;
        canvasBack.freeDrawingBrush.width =
          parseInt(drawingLineWidthEl.value, 10) || 1;
      }
    } else {
      if (this.value === "hline") {
        canvas.freeDrawingBrush = hLinePatternBrush;
      } else if (this.value === "vline") {
        canvas.freeDrawingBrush = vLinePatternBrush;
      } else if (this.value === "square") {
        canvas.freeDrawingBrush = squarePatternBrush;
      } else if (this.value === "diamond") {
        canvas.freeDrawingBrush = diamondPatternBrush;
      } else if (this.value === "texture") {
        canvas.freeDrawingBrush = texturePatternBrush;
      } else {
        canvas.freeDrawingBrush = new fabric[this.value + "Brush"](canvas);
      }

      if (canvas.freeDrawingBrush) {
        canvas.freeDrawingBrush.color = "#" + drawingColorEl.value;
        canvas.freeDrawingBrush.width =
          parseInt(drawingLineWidthEl.value, 10) || 1;
      }
    }
  });

drawingColorEl.onchange = function () {
  canvas.freeDrawingBrush.color = "#" + drawingColorEl.value;
  canvasBack.freeDrawingBrush.color = "#" + drawingColorEl.value;
};
drawingLineWidthEl.onchange = function () {
  canvas.freeDrawingBrush.width = parseInt(drawingLineWidthEl.value, 10) || 1;
  canvasBack.freeDrawingBrush.width =
    parseInt(drawingLineWidthEl.value, 10) || 1;
};

if (canvas.freeDrawingBrush) {
  canvas.freeDrawingBrush.color = "#" + drawingColorEl.value;
  canvas.freeDrawingBrush.width = parseInt(drawingLineWidthEl.value, 10) || 1;
  canvas.freeDrawingBrush.shadowBlur = 0;
}
if (canvasBack.freeDrawingBrush) {
  canvasBack.freeDrawingBrush.color = "#" + drawingColorEl.value;
  canvasBack.freeDrawingBrush.width =
    parseInt(drawingLineWidthEl.value, 10) || 1;
  canvasBack.freeDrawingBrush.shadowBlur = 0;
}

document.getElementById("c").addEventListener("change", function () {
  canvas.backgroundColor = this.value;
  canvas.renderAll();
});

document.getElementById("cback").addEventListener("change", function () {
  canvasBack.backgroundColor = this.value;
  canvasBack.renderAll();
});

document
  .querySelector(".artworkUploader")
  .addEventListener("click", function () {
    $(".first-emoji-container").click();
    $(".notcommonmodal").modal("toggle");
  });
document.querySelector(".artworkFinder").addEventListener("click", function () {
  $(".notcommonmodal2").modal("toggle");
});
NodeList.prototype.forEach = Array.prototype.forEach;
document.querySelectorAll(".emoji-select").forEach(function (item) {
  item.addEventListener("click", function () {
    datasetName = this.dataset.key;
    $.ajax({
      url: "/listimg/" + this.dataset.key,
      success: function (data) {
        document.querySelector(".emoji-container").innerHTML = "";
        data.forEach(function (image) {
          var emojiElem = document.createElement("img");
          emojiElem.className = "emoji-elem";
          emojiElem.src = "/img/emoji/" + datasetName + "/" + image;
          document.querySelector(".emoji-container").appendChild(emojiElem);
          emojiElem.addEventListener("click", function () {
            fabric.Image.fromURL(this.src, function (fabEmoji) {
              if (flipperEl.style.transform == "rotateY(180deg)") {
                canvasBack.add(fabEmoji);
                fabEmoji.set({
                  height: 100,
                  width: 100,
                  top: 50,
                  left: 67.5,
                  text: "",
                  itemtype: "image",
                });
                fabEmoji.setCoords({
                  left: 67.5,
                  top: 50,
                });
                canvasBack.renderAll();
              } else {
                canvas.add(fabEmoji);
                fabEmoji.set({
                  height: 100,
                  width: 100,
                  top: 50,
                  left: 67.5,
                  text: "",
                  itemtype: "image",
                });
                fabEmoji.setCoords({
                  left: 67.5,
                  top: 50,
                });
                canvas.renderAll();
              }
            });
            $(".notcommonmodal").modal("toggle");
          });
        });
      },
    });
  });
});

document.querySelector(".buybtn").addEventListener("click", function () {
  localStorage.removeItem(getPageID() + "customsize");
  if (canvas.isEmpty() == true && canvasBack.isEmpty() == true) {
    document.querySelector(".commonmodal-header").textContent = "Oops !!";
    document.querySelector(".commonmodal-body").innerHTML =
      "<div style='background: #ffd5d2; padding: 5px; border: 1px solid #ffd5d2; border-radius: 4px;'>Error: We didn't find any design</div><div style='padding: 5px;'>Please make some design on the product</div>";
    $(".commonmodal").modal("toggle");
  } else {
    imageObj = new Object();
    if (!canvas.isEmpty()) {
      hiddenCanvas.clear();
      hiddenCanvas.setWidth(canvas.width);
      hiddenCanvas.setHeight(canvas.height);
      hiddenCanvas.loadFromJSON(canvas.toJSON());
      hiddenCanvas.renderAll();
      window.setTimeout(function () {
        zoomIt(6);
        imageObj.front = hiddenCanvas.toDataURL();
      }, 2000);
    } else {
      imageObj.front = "null";
    }
    if (!canvasBack.isEmpty()) {
      hiddenCanvasBack.clear();

      hiddenCanvasBack.setWidth(canvasBack.width);
      hiddenCanvasBack.setHeight(canvasBack.height);
      hiddenCanvasBack.loadFromJSON(canvasBack.toJSON());
      hiddenCanvasBack.renderAll();
      window.setTimeout(function () {
        zoomItBack(6);
        imageObj.back = hiddenCanvasBack.toDataURL();
      }, 2000);
    } else {
      imageObj.back = "null";
    }
    progressBarInitiate();
    window.setTimeout(function () {
      var form = new FormData();
      form.append("_token", $("meta[name=csrf-token]").attr("content"));
      form.append("color", localStorage.getItem(getPageID() + "defaultColor"));
      form.append("type", localStorage.getItem(getPageID() + "defaultType"));
      form.append("pageid", getPageID());
      if (imageObj.front != "null") {
        var frontBlob = dataURLtoBlob(imageObj.front);
        form.append("imageFront", frontBlob);
      }
      if (imageObj.back != "null") {
        var backBlob = dataURLtoBlob(imageObj.back);
        form.append("imageBack", backBlob);
      }
      $.ajax({
        url: "/design/design-cart",
        type: "POST",
        processData: false,
        contentType: false,
        mimeType: "multipart/form-data",
        data: form,
        success: function (data) {
          var data = JSON.parse(data);
          //The modal will toggle after the file is uploaded to the system and calcualates the data for the buyer
          localStorage.setItem(getPageID() + "inkCost", data[5]);
          pricingVariables = data[1];
          coupon = data[7];
          document.querySelector(".commonmodal-header").innerHTML =
            "<p style='text-align:center;font-size: 27px;'>Price Details</p>";
          populateTypeBoxes(data[2], data[3]);
          populateColorCircles(data[0], data[4]);
          populateSizeBoxes(data[4], 1);

          populatePriceBox();
          if (data[6]) {
            document.querySelector(".commonmodal-footer").innerHTML =
              '<button class="modal-btn btn btn-outline-danger pull-left" onclick="saveProductForLaterUsage()">Save Design</button></a>' +
              '<button class="discard-button modal-btn btn btn-outline-success pull-right" onclick="makeProductandAddItToCart()">Add to Cart</button></a>';
          } else {
            document.querySelector(".commonmodal-footer").innerHTML =
              '<button class="modal-btn btn btn-outline-danger pull-left" data-dismiss="modal">Edit Design</button></a>' +
              '<button class="discard-button modal-btn btn btn-outline-success pull-right" onclick="makeProductandAddItToCart()">Add to Cart</button></a>';
          }
          $(".commonmodal").modal("toggle");
          if (
            document.querySelector(".size-selector-selected") &&
            document.querySelector(".color-selector-selected")
          ) {
            document.querySelector(".priceBox").style.display = "block";
            //document.querySelector('.modal-price-text').innerText = "‎৳ " + calculateDynamicPrice(localStorage.getItem(getPageID()+'customcolor'), localStorage.getItem(getPageID()+'customsize'));
            if (discount == 0) {
              document.querySelector(".modal-discount-text").style.display =
                "none";
              document.querySelector(".modal-price-text").innerText =
                "‎৳" +
                calculateDynamicPrice(
                  localStorage.getItem(getPageID() + "customcolor"),
                  localStorage.getItem(getPageID() + "customsize")
                );
            } else {
              document.querySelector(".modal-discount-text").style.display =
                "block";
              (document.querySelector(".modal-discount-text").innerHTML =
                "‎৳<del>" +
                calculateDynamicPrice(
                  localStorage.getItem(getPageID() + "customcolor"),
                  localStorage.getItem(getPageID() + "customsize")
                ) +
                "</del>"),
                (document.querySelector(".modal-price-text").innerText =
                  "‎৳" +
                  calculateDynamicPriceOffer(
                    localStorage.getItem(getPageID() + "customcolor"),
                    localStorage.getItem(getPageID() + "customsize")
                  ));
            }
          }
          progressBarClear();
        },
      });
    }, 3000);
  }
});
document.querySelector(".sellbtn").addEventListener("click", function () {
  if (canvas.isEmpty() == true && canvasBack.isEmpty() == true) {
    document.querySelector(".commonmodal-header").textContent = "Oops !!";
    document.querySelector(".commonmodal-body").innerHTML =
      "<div style='background: #ffd5d2; padding: 5px; border: 1px solid #ffd5d2; border-radius: 4px;'>Error: We didn't find any design</div><div style='padding: 5px;'>Please make some design on the product</div>";
    $(".commonmodal").modal("toggle");
  } else {
    //swal("Maintenance ongoing", "Please come back later!", "warning")

    imageObj = new Object();
    if (!canvas.isEmpty()) {
      hiddenCanvas.clear();
      hiddenCanvas.setWidth(canvas.width);
      hiddenCanvas.setHeight(canvas.height);
      hiddenCanvas.loadFromJSON(canvas.toJSON());
      hiddenCanvas.renderAll();
      window.setTimeout(function () {
        zoomIt(6);
        imageObj.front = hiddenCanvas.toDataURL();
      }, 2000);
    } else {
      imageObj.front = "null";
    }
    if (!canvasBack.isEmpty()) {
      hiddenCanvasBack.clear();

      hiddenCanvasBack.setWidth(canvasBack.width);
      hiddenCanvasBack.setHeight(canvasBack.height);
      hiddenCanvasBack.loadFromJSON(canvasBack.toJSON());
      hiddenCanvasBack.renderAll();
      window.setTimeout(function () {
        zoomItBack(6);
        imageObj.back = hiddenCanvasBack.toDataURL();
      }, 2000);
    } else {
      imageObj.back = "null";
    }
    progressBarInitiate();
    window.setTimeout(function () {
      var form = new FormData();
      form.append("_token", $("meta[name=csrf-token]").attr("content"));
      form.append("color", localStorage.getItem(getPageID() + "defaultColor"));
      form.append("type", localStorage.getItem(getPageID() + "defaultType"));
      form.append("pageid", getPageID());
      if (imageObj.front != "null") {
        var frontBlob = dataURLtoBlob(imageObj.front);
        form.append("imageFront", frontBlob);
      }
      if (imageObj.back != "null") {
        var backBlob = dataURLtoBlob(imageObj.back);
        form.append("imageBack", backBlob);
      }
      $.ajax({
        url: "/design/campaign-estimations" + "/" + getPageID(),
        type: "POST",
        processData: false,
        contentType: false,
        mimeType: "multipart/form-data",
        data: form,
        success: function (data) {
          var data = JSON.parse(data);
          //The modal will toggle after the file is uploaded to the system and calcualates the data for the buyer
          localStorage.setItem(getPageID() + "inkCost", data[5]);
          pricingVariables = data[1];
          document.querySelector(".commonmodal-header").innerHTML =
            "<p style='text-align:center;font-size: 27px;'>Price Details</p>";

          document.querySelector(".commonmodal-body").innerHTML = "";

          var textEL = document.createElement("p");
          textEL.className = "text-center";
          textEL.innerHTML =
            "Please check the <b>Base Price</b> of the tshirt before setting your profit margin by selecting difference size and color boxes";
          document.querySelector(".commonmodal-body").appendChild(textEL);

          populateColorCircles(data[0], data[4]);
          populateSizeBoxes(data[4], 0);
          populatePriceBox();
          document.querySelector(".commonmodal-footer").innerHTML =
            '<button class="modal-btn btn btn-outline-danger pull-left" data-dismiss="modal">Edit Design</button> <button class="modal-btn btn btn-outline-success pull-right" onclick="goToCampaingEstimations()">Proceed Now</button></a>';
          $(".commonmodal").modal("toggle");
          if (
            document.querySelector(".size-selector-selected") &&
            document.querySelector(".color-selector-selected")
          ) {
            document.querySelector(".priceBox").style.display = "block";
            //document.querySelector('.modal-price-text').innerText = "‎৳ " + calculateDynamicPrice(localStorage.getItem(getPageID()+'customcolor'), localStorage.getItem(getPageID()+'customsize'));
            if (discount == 0) {
              document.querySelector(".modal-discount-text").style.display =
                "none";
              document.querySelector(".modal-price-text").innerText =
                "‎৳" +
                calculateDynamicPrice(
                  localStorage.getItem(getPageID() + "customcolor"),
                  localStorage.getItem(getPageID() + "customsize")
                );
            } else {
              document.querySelector(".modal-discount-text").style.display =
                "block";
              (document.querySelector(".modal-discount-text").innerHTML =
                "‎৳<del>" +
                calculateDynamicPrice(
                  localStorage.getItem(getPageID() + "customcolor"),
                  localStorage.getItem(getPageID() + "customsize")
                ) +
                "</del>"),
                (document.querySelector(".modal-price-text").innerText =
                  "‎৳" +
                  calculateDynamicPriceOffer(
                    localStorage.getItem(getPageID() + "customcolor"),
                    localStorage.getItem(getPageID() + "customsize")
                  ));
            }
          }
          progressBarClear();
        },
      });
    }, 3000);
  }
});
if (document.querySelector(".savebtn")) {
  document.querySelector(".savebtn").addEventListener("click", function () {
    if (canvas.isEmpty() == true && canvasBack.isEmpty() == true) {
      document.querySelector(".commonmodal-header").textContent = "Oops !!";
      document.querySelector(".commonmodal-body").innerHTML =
        "<div style='background: #ffd5d2; padding: 5px; border: 1px solid #ffd5d2; border-radius: 4px;'>Error: We didn't find any design</div><div style='padding: 5px;'>Please make some design on the product</div>";
      $(".commonmodal").modal("toggle");
    } else {
      //swal("Maintenance ongoing", "Please come back later!", "warning")

      imageObj = new Object();
      if (!canvas.isEmpty()) {
        hiddenCanvas.clear();
        hiddenCanvas.setWidth(canvas.width);
        hiddenCanvas.setHeight(canvas.height);
        hiddenCanvas.loadFromJSON(canvas.toJSON());
        hiddenCanvas.renderAll();
        window.setTimeout(function () {
          zoomIt(6);
          imageObj.front = hiddenCanvas.toDataURL();
        }, 2000);
      } else {
        imageObj.front = "null";
      }
      if (!canvasBack.isEmpty()) {
        hiddenCanvasBack.clear();

        hiddenCanvasBack.setWidth(canvasBack.width);
        hiddenCanvasBack.setHeight(canvasBack.height);
        hiddenCanvasBack.loadFromJSON(canvasBack.toJSON());
        hiddenCanvasBack.renderAll();
        window.setTimeout(function () {
          zoomItBack(6);
          imageObj.back = hiddenCanvasBack.toDataURL();
        }, 2000);
      } else {
        imageObj.back = "null";
      }
      progressBarInitiate();
      window.setTimeout(function () {
        var form = new FormData();
        form.append("_token", $("meta[name=csrf-token]").attr("content"));
        form.append(
          "color",
          localStorage.getItem(getPageID() + "defaultColor")
        );
        form.append("type", localStorage.getItem(getPageID() + "defaultType"));
        form.append("pageid", getPageID());
        if (imageObj.front != "null") {
          var frontBlob = dataURLtoBlob(imageObj.front);
          form.append("imageFront", frontBlob);
        }
        if (imageObj.back != "null") {
          var backBlob = dataURLtoBlob(imageObj.back);
          form.append("imageBack", backBlob);
        }
        $.ajax({
          url: "/design/design-cart",
          type: "POST",
          processData: false,
          contentType: false,
          mimeType: "multipart/form-data",
          data: form,
          success: function (data) {
            var data = JSON.parse(data);
            //The modal will toggle after the file is uploaded to the system and calcualates the data for the buyer
            localStorage.setItem(getPageID() + "inkCost", data[5]);
            pricingVariables = data[1];
            coupon = data[7];
            document.querySelector(".commonmodal-header").innerHTML =
              "<p style='text-align:center;font-size: 27px;'>Price Details</p>";

            document.querySelector(".commonmodal-body").innerHTML = "";

            var textEL = document.createElement("p");
            textEL.className = "text-center";
            textEL.innerHTML =
              "Please check the prices in different colors, sizes and qualities of the product before saving";
            document.querySelector(".commonmodal-body").appendChild(textEL);

            populateColorCircles(data[0], data[4]);
            populateSizeBoxes(data[4], 0);
            populatePriceBox();
            document.querySelector(".commonmodal-footer").innerHTML =
              '<button class="modal-btn btn btn-outline-danger pull-left" data-dismiss="modal">Edit Design</button> <button class="modal-btn btn btn-outline-success pull-right" onclick="saveProductForLaterUsage()">Save Design</button></a>';
            $(".commonmodal").modal("toggle");
            if (
              document.querySelector(".size-selector-selected") &&
              document.querySelector(".color-selector-selected")
            ) {
              document.querySelector(".priceBox").style.display = "block";
              //document.querySelector('.modal-price-text').innerText = "‎৳ " + calculateDynamicPrice(localStorage.getItem(getPageID()+'customcolor'), localStorage.getItem(getPageID()+'customsize'));
              if (discount == 0) {
                document.querySelector(".modal-discount-text").style.display =
                  "none";
                document.querySelector(".modal-price-text").innerText =
                  "‎৳" +
                  calculateDynamicPrice(
                    localStorage.getItem(getPageID() + "customcolor"),
                    localStorage.getItem(getPageID() + "customsize")
                  );
              } else {
                document.querySelector(".modal-discount-text").style.display =
                  "block";
                (document.querySelector(".modal-discount-text").innerHTML =
                  "‎৳<del>" +
                  calculateDynamicPrice(
                    localStorage.getItem(getPageID() + "customcolor"),
                    localStorage.getItem(getPageID() + "customsize")
                  ) +
                  "</del>"),
                  (document.querySelector(".modal-price-text").innerText =
                    "‎৳" +
                    calculateDynamicPriceOffer(
                      localStorage.getItem(getPageID() + "customcolor"),
                      localStorage.getItem(getPageID() + "customsize")
                    ));
              }
            }
            progressBarClear();
          },
        });
      }, 3000);
    }
  });
}
function goToCampaingEstimations() {
  window.location.href = "/design/campaign-estimations/" + getPageID();
}
var hiddenCanvas = new fabric.Canvas("hiddenCanvas");
var hiddenCanvasBack = new fabric.Canvas("hiddenCanvasBack");

function zoomIt(factor) {
  hiddenCanvas.setHeight(hiddenCanvas.getHeight() * factor);
  hiddenCanvas.setWidth(hiddenCanvas.getWidth() * factor);
  if (hiddenCanvas.backgroundImage) {
    // Need to scale background images as well
    var bi = hiddenCanvas.backgroundImage;
    bi.width = bi.width * factor;
    bi.height = bi.height * factor;
  }
  var objects = hiddenCanvas.getObjects();
  for (var i in objects) {
    var scaleX = objects[i].scaleX;
    var scaleY = objects[i].scaleY;
    var left = objects[i].left;
    var top = objects[i].top;

    var tempScaleX = scaleX * factor;
    var tempScaleY = scaleY * factor;
    var tempLeft = left * factor;
    var tempTop = top * factor;

    objects[i].scaleX = tempScaleX;
    objects[i].scaleY = tempScaleY;
    objects[i].left = tempLeft;
    objects[i].top = tempTop;

    objects[i].setCoords();
  }
  hiddenCanvas.renderAll();
  hiddenCanvas.calcOffset();
}

function zoomItBack(factor) {
  hiddenCanvasBack.setHeight(hiddenCanvasBack.getHeight() * factor);
  hiddenCanvasBack.setWidth(hiddenCanvasBack.getWidth() * factor);
  if (hiddenCanvasBack.backgroundImage) {
    // Need to scale background images as well
    var bi = hiddenCanvasBack.backgroundImage;
    bi.width = bi.width * factor;
    bi.height = bi.height * factor;
  }
  var objects = hiddenCanvasBack.getObjects();
  for (var i in objects) {
    var scaleX = objects[i].scaleX;
    var scaleY = objects[i].scaleY;
    var left = objects[i].left;
    var top = objects[i].top;

    var tempScaleX = scaleX * factor;
    var tempScaleY = scaleY * factor;
    var tempLeft = left * factor;
    var tempTop = top * factor;

    objects[i].scaleX = tempScaleX;
    objects[i].scaleY = tempScaleY;
    objects[i].left = tempLeft;
    objects[i].top = tempTop;

    objects[i].setCoords();
  }
  hiddenCanvasBack.renderAll();
  hiddenCanvasBack.calcOffset();
}

function spinner() {
  var div = document.createElement("div");
  div.className = "preloader";
  document.body.appendChild(div);
  var imageElem = document.createElement("img");
  imageElem.className = "preloader-img";
  imageElem.src = "/img/balls.gif";
  div.appendChild(imageElem);
}

var progresstextEl = document.querySelector(".progress-text");
var progressBarEl = document.querySelector(".upload-bar");
progresstextEl.textContent == "Initiating File Upload.";
var prevProgress = 0;
var progressTimer;

function progressBarInitiate() {
  $(".progress-modal").modal("toggle");

  progressTimer = setInterval(function () {
    var settings = {
      async: false,
      crossDomain: true,
      url: "/get-progress-status",
      method: "GET",
      headers: {
        "cache-control": "no-cache",
      },
      data: {
        pageid: getPageID(),
      },
    };

    $.ajax(settings).done(function (response) {
      if (prevProgress == response.val) {
        progressBarEl.value = progressBarEl.value + 1.5;
      } else {
        prevProgress = response.val;
        progressBarEl.value = response.val;
      }
      progresstextEl.textContent = response.msg;
    });
  }, 2000);
}

function progressBarClear() {
  $(".progress-modal").modal("hide");
  progresstextEl.textContent == "Initiating File Upload.";
  progressBarEl.value = 0;
  clearInterval(progressTimer);
}

function spinnerStop() {
  loaderElem = document.querySelector(".preloader");
  loaderElem.parentNode.removeChild(loaderElem);
}

function showalert(message) {
  $("#alert_placeholder").append(
    '<div id="alertdiv" class="alert alert-warning"><a class="close" data-dismiss="alert">x</a><span style="text-align:center;font-weight:bolder;">' +
      message +
      "</span></div>"
  );

  setTimeout(function () {
    $("#alertdiv").remove();
  }, 5000);
}
document.body.addEventListener("click", function (click) {
  if (
    $("#drawing-mode").text() == "Cancel drawing mode" &&
    click.target.parentNode.id != "collapseThree" &&
    click.target.parentNode.id != "drawing-mode-options" &&
    click.target.parentNode.id != "drawing-mode-card-block" &&
    click.target.parentNode.id != "drawing-mode-selector" &&
    click.target.tagName != "CANVAS" &&
    click.target.style.cursor != "crosshair" &&
    click.target.id != "slock1" &&
    click.target.id != "slock2"
  ) {
    $("#drawing-mode").click();
  }
});

var pageid;
function getPageID() {
  if (!pageid) {
    pageid = document.getElementById("pageid").textContent.trim();
  }
  return pageid;
}

function setImgSize(width, height) {
  var smallHeight = height / 10;
  var smallWidth = width / 10;

  if (smallHeight <= 50 && smallWidth <= 50) {
    return [smallWidth * 2, smallHeight * 2, 0.1];
  } else if (smallWidth >= 235 && smallHeight >= 350) {
    return [smallWidth / 2.5, smallHeight / 2.5, 0.25];
  } else {
    if (smallWidth >= 235) {
      return [smallWidth / 2.5, smallHeight / 2.5, 0.25];
    } else if (smallHeight >= 350) {
      return [smallWidth / 2.5, smallHeight / 2.5, 0.25];
    } else {
      return [smallWidth, smallHeight, 0.2];
    }
  }
}
document.addEventListener("readystatechange", function () {
  if (this.readyState == "complete") {
    if (
      localStorage.getItem(getPageID() + "canvasJSON") &&
      localStorage.getItem(getPageID() + "canvasBackJSON")
    ) {
      localforage.getItem(getPageID() + "canvasJSON", function (err, data) {
        canvas.loadFromDatalessJSON(data);
      });
      localforage.getItem(getPageID() + "canvasBackJSON", function (err, data) {
        canvasBack.loadFromDatalessJSON(data);
      });
      window.setTimeout(function () {
        canvas.getObjects().forEach(function (obj) {
          if (obj.fontFamily) {
            WebFont.load({
              google: {
                families: [obj.fontFamily, "Droid Serif"],
              },
              active: function () {
                canvas.renderAll();
              },
            });
          }
        });
        canvas.renderAll();

        canvasBack.getObjects().forEach(function (obj) {
          if (obj.fontFamily) {
            WebFont.load({
              google: {
                families: [obj.fontFamily, "Droid Serif"],
              },
              active: function () {
                canvasBack.renderAll();
              },
            });
          }
        });
        canvasBack.renderAll();
      }, 3000);
    } else if (localStorage.getItem(getPageID() + "canvasJSON")) {
      localforage.getItem(getPageID() + "canvasJSON", function (err, data) {
        canvas.loadFromDatalessJSON(data);
      });
      window.setTimeout(function () {
        canvas.getObjects().forEach(function (obj) {
          if (obj.fontFamily) {
            WebFont.load({
              google: {
                families: [obj.fontFamily, "Droid Serif"],
              },
              active: function () {
                canvas.renderAll();
              },
            });
          }
        });
        canvas.renderAll();
      }, 3000);
    } else if (localStorage.getItem(getPageID() + "canvasBackJSON")) {
      localforage.getItem(getPageID() + "canvasBackJSON", function (err, data) {
        canvasBack.loadFromDatalessJSON(data);
      });
      window.setTimeout(function () {
        canvasBack.getObjects().forEach(function (obj) {
          if (obj.fontFamily) {
            WebFont.load({
              google: {
                families: [obj.fontFamily, "Droid Serif"],
              },
              active: function () {
                canvasBack.renderAll();
              },
            });
          }
        });
        canvasBack.renderAll();
      }, 3000);
    } else {
      //do nothing
    }
    window.setInterval(function () {
      canvas.renderAll();
      canvasBack.renderAll();
    }, 2000);
    currentCanvasLength = canvas.getObjects().length;
    currentCanvasBackLength = canvasBack.getObjects().length;
    window.setInterval(function () {
      if (canvas.getObjects().length == 0) {
        localStorage.removeItem(getPageID() + "canvasJSON");
        localforage.removeItem(getPageID() + "canvasJSON");
      } else {
        localStorage.setItem(getPageID() + "canvasJSON", "true");
        localforage.setItem(
          getPageID() + "canvasJSON",
          canvas.toDatalessJSON(["minScaleLimit"])
        );
      }
      if (canvasBack.getObjects().length == 0) {
        localStorage.removeItem(getPageID() + "canvasBackJSON");
        localforage.removeItem(getPageID() + "canvasBackJSON");
      } else {
        localStorage.setItem(getPageID() + "canvasBackJSON", "true");
        localforage.setItem(
          getPageID() + "canvasBackJSON",
          canvasBack.toDatalessJSON(["minScaleLimit"])
        );
      }
    }, 20000);
  }
});
document.querySelector(".awc-selector").addEventListener("change", function () {
  if (this.value) {
    searchArtWork(this.value);
    document.querySelector(".label-container").textContent =
      "Showing results for " + this.value;
  }
});

document.querySelector(".artwork-find").addEventListener("click", function () {
  if (document.querySelector(".artwork-write").value) {
    searchArtWork(document.querySelector(".artwork-write").value);
  }
  document.querySelector(".label-container").textContent =
    "Showing results for " + document.querySelector(".artwork-write").value;
  document.querySelector(".artwork-write").value = "";
});

function searchArtWork(text) {
  $.ajax({
    url: "/design/request-artwork",
    data: {
      q: text,
    },
    tryCount: 0,
    retryLimit: 5,
    retryTimeout: 2000,
    created: Date.now(),
    success: function (data) {
      if (data.hits.length == 0) {
        alert("No image found with the searched keyword.");
      } else {
        appendArtIntoView(data.hits);
      }
    },
    error: function (data, xhr) {
      this.tryCount++;
      if (this.tryCount <= this.retryLimit) {
        setTimeout(function () {
          $.ajax(this);
          return;
        }, 1000);
      }
    },
  });
}

function appendArtIntoView(objects) {
  document.querySelector(".art-container").innerHTML = "";
  document.querySelector(".art-container").scrollTop = 0;
  objects.forEach(function (img) {
    var imgEl = document.createElement("img");
    imgEl.className = "art-elem";
    imgEl.src = img.previewURL;
    imgEl.dataset.largeImage = img.fullHDURL;
    imgEl.dataset.imageHeight = img.imageHeight;
    imgEl.dataset.imageWidth = img.imageWidth;
    imgEl.addEventListener("click", function () {
      artSpinner();
      artToCanvas(this.dataset);
    });
    document.querySelector(".art-container").appendChild(imgEl);
  });
}

function artToCanvas(dataset) {
  var xmlHTTP = new XMLHttpRequest();
  xmlHTTP.open("GET", dataset.largeImage, true);
  xmlHTTP.responseType = "arraybuffer";
  xmlHTTP.onload = function (e) {
    var imgDATA = this.response;
    var imgBlob = new Blob([imgDATA], {
      type: "image/png",
    });
    var a = new FileReader();
    a.onload = function (e) {
      fabric.Image.fromURL(
        e.target.result,
        function (fabEmoji) {
          if (flipperEl.style.transform == "rotateY(180deg)") {
            currentCanvasBack = canvasBack.getObjects().length;
            canvasBack.add(fabEmoji);
            fabEmoji.set({
              height: setImgSize(dataset.imageWidth, dataset.imageHeight)[1],
              width: setImgSize(dataset.imageWidth, dataset.imageHeight)[0],
              top: 50,
              minScaleLimit: setImgSize(
                dataset.imageWidth,
                dataset.imageHeight
              )[2],
              left:
                canvasBack.width / 2 -
                setImgSize(dataset.imageWidth, dataset.imageHeight)[0] / 2,
              text: "",
              itemtype: "image",
            });
            fabEmoji.setCoords({
              left: 67.5,
              top: 50,
            });
            canvasBack.renderAll();
            var canvasBackLoader = function () {
              if (canvasBack.getObjects().length != currentCanvasBack) {
                clearInterval(intervalId);
                $(".notcommonmodal2").modal("toggle");
                artSpinnerStop();
              }
            };
            $(document).ready(function () {
              intervalId = setInterval(canvasBackLoader, 500);
            });
          } else {
            currentCanvas = canvas.getObjects().length;
            canvas.add(fabEmoji);
            fabEmoji.set({
              height: setImgSize(dataset.imageWidth, dataset.imageHeight)[1],
              width: setImgSize(dataset.imageWidth, dataset.imageHeight)[0],
              top: 50,
              minScaleLimit: setImgSize(
                dataset.imageWidth,
                dataset.imageHeight
              )[2],
              left:
                canvas.width / 2 -
                setImgSize(dataset.imageWidth, dataset.imageHeight)[0] / 2,
              text: "",
              itemtype: "image",
            });
            fabEmoji.setCoords({
              left: 67.5,
              top: 50,
            });
            canvas.renderAll();
            var canvasLoader = function () {
              if (canvas.getObjects().length != currentCanvas) {
                clearInterval(intervalId);
                $(".notcommonmodal2").modal("toggle");
                artSpinnerStop();
              }
            };
            $(document).ready(function () {
              intervalId = setInterval(canvasLoader, 500);
            });
          }
        },
        {
          crossOrigin: "Anonymous",
        }
      );
    };
    a.readAsDataURL(imgBlob);
  };
  xmlHTTP.send();
}

function artSpinner() {
  var div = document.createElement("div");
  div.className = "preloader";
  document.getElementById("artContainer").appendChild(div);
  var imageElem = document.createElement("img");
  imageElem.className = "preloader-img";
  imageElem.src = "/img/balls.gif";
  div.appendChild(imageElem);
}

function artSpinnerStop() {
  var elem = document.querySelector(".preloader");
  elem.parentNode.removeChild(elem);
}

function blobToDataURL(blob, callback) {
  var a = new FileReader();
  a.onload = function (e) {
    callback(e.target.result);
  };
  a.readAsDataURL(blob);
}

function goToCampaignDetails() {
  window.location.href = "/design/campaign-estimations";
}

function toggleModal() {
  spinnerStop();
  $(".commonmodal").modal("toggle");
}

function populateSizeBoxes(color, flag) {
  var variantInfo = pricingVariables.filter((each) => each.variant == color)[0];

  if (!variantInfo) {
    //variantInfo = pricingVariables.filter(each => each.variant == "others")[0];
    variantInfo = pricingVariables[0];
  }
  variantInfo.ProductVariant = variantInfo.ProductVariant.sort(
    (a, b) => a.id - b.id
  );

  var containerDom = document.querySelector(".commonmodal-body");

  var sizeButtonDivElm = document.createElement("div");
  sizeButtonDivElm.className = "input-group";
  sizeButtonDivElm.style.textAlign = "center";
  containerDom.appendChild(sizeButtonDivElm);

  var btnDiv = document.createElement("div");
  btnDiv.className = "type-selector-selected list-inline-item";
  btnDiv.addEventListener("click", chartHandler, false);
  btnDiv.textContent = "Check Size Chart";
  sizeButtonDivElm.appendChild(btnDiv);

  var ulElem1 = document.createElement("ul");
  ulElem1.className = "list-inline tiny-margin";
  ulElem1.style.textAlign = "center";
  containerDom.appendChild(ulElem1);

  var listElem = document.createElement("li");
  listElem.className = "list-inline-item";
  listElem.style.textAlign = "center";
  listElem.innerHTML = "<b>Choose Tshirt Size:</b>";
  ulElem1.appendChild(listElem);

  var ulElem2 = document.createElement("ul");
  ulElem2.className = "size-selectors-container";
  containerDom.appendChild(ulElem2);
  var product_type = "";

  variantInfo.ProductVariant.forEach(function (size) {
    if (!size.size.includes(" ")) {
      product_type = "Premium";
      if (document.querySelector(".Premium_div")) {
        var containerDIV = document.querySelector(".Premium_div");
      } else {
        var containerDIV = document.createElement("div");
        containerDIV.className =
          "size-selectors-container list-inline Premium_div";

        var pTag = document.createElement("span");
        pTag.className = "Premium_pTag pull-left";
        pTag.style.lineHeight = "15px";
        pTag.style.width = "135px";
        pTag.style.fontSize = ".9rem";
        pTag.style.padding = "5px 0px 5px 0px";
        pTag.innerText = "Select Premium: ";

        /*var szcTag = document.createElement('button');
                szcTag.className = "Premium_pTag pull-left btn btn-outline-link";
                szcTag.style.lineHeight = "0px";
                szcTag.style.fontSize= ".8rem";
                szcTag.innerText = "Size Chart";
                szcTag.addEventListener('click', function(){
                loadSizeChart(variantInfo.type, 'Premium');
            });
            pTag.appendChild(szcTag);
            */
        containerDIV.appendChild(pTag);

        var type_details_span = document.createElement("span");
        type_details_span.style.fontSize = "0.7rem";
        type_details_span.style.width = "100%";
        type_details_span.style.display = "block";
        type_details_span.style.fontStyle = "italic";
        if (
          document.querySelector(".type-selector-selected").textContent ===
          "Sweatshirt"
        )
          type_details_span.innerText = "320-360 GSM, Compact Cotton";
        else type_details_span.innerText = "175 GSM, Combed Compact Cotton";
        containerDIV.appendChild(type_details_span);
      }

      var sizeDiv = document.createElement("div");
      if (localStorage.getItem(getPageID() + "customsize") == size.size) {
        sizeDiv.className = "size-selector-selected list-inline-item";
      } else {
        sizeDiv.className = "size-selector list-inline-item";
      }
      sizeDiv.addEventListener("click", sizeHandler, false);
      sizeDiv.textContent = size.size;
      sizeDiv.dataset.size = size.size;
      containerDIV.appendChild(sizeDiv);

      ulElem2.appendChild(containerDIV);
    } else {
      thisType = size.size.split(" ")[0];
      thisContainerDiv = thisType + "_div";
      thisTag = thisType + "_pTag";
      product_type = thisType;
      if (document.querySelector("." + thisContainerDiv)) {
        containerDIV = document.querySelector("." + thisContainerDiv);
      } else {
        var containerDIV = document.createElement("div");
        containerDIV.className =
          "size-selectors-container list-inline " + thisContainerDiv;

        var pTag = document.createElement("span");
        pTag.className = thisTag + " pull-left";
        pTag.style.lineHeight = "15px";
        pTag.style.width = "135px";
        pTag.style.fontSize = ".9rem";
        pTag.style.padding = "5px 0px 5px 0px";
        pTag.innerText = "Select " + thisType + " :";

        /*var szcTag = document.createElement('button');
            szcTag.className = "Premium_pTag pull-left btn btn-outline-link";
            szcTag.style.lineHeight = "0px";
            szcTag.style.fontSize= ".8rem";
            szcTag.innerText = "Size Chart";
            szcTag.addEventListener('click', function(){
            loadSizeChart(variantInfo.type, thisType);
        });
        pTag.appendChild(szcTag);
        */
        containerDIV.appendChild(pTag);

        var type_details_span = document.createElement("span");
        type_details_span.style.fontSize = "0.7rem";
        type_details_span.style.width = "100%";
        type_details_span.style.display = "block";
        type_details_span.style.fontStyle = "italic";
        if (thisType == "Premium") {
          if (
            document.querySelector(".type-selector-selected").textContent ===
            "Sweatshirt"
          )
            type_details_span.innerText = "320-360 GSM,  Compact Cotton";
          type_details_span.innerText = "175 GSM, Combed Compact Cotton";
        } else if (thisType == "Standard") {
          type_details_span.innerText = "160 GSM, Super Carded Cotton";
        } else if (thisType == "Budget") {
          type_details_span.innerText = "150 GSM, Carded Cotton";
        }
        containerDIV.appendChild(type_details_span);
      }

      var sizeDiv = document.createElement("div");
      if (localStorage.getItem(getPageID() + "customsize") == size.size) {
        sizeDiv.className = "size-selector-selected list-inline-item";
      } else {
        sizeDiv.className = "size-selector list-inline-item";
      }
      sizeDiv.addEventListener("click", sizeHandler, false);
      sizeDiv.textContent = size.size.split(" ")[1];
      sizeDiv.dataset.size = size.size;
      containerDIV.appendChild(sizeDiv);

      ulElem2.appendChild(containerDIV);
    }
  });
}

function sizeHandler() {
  if (document.querySelector(".size-selector-selected")) {
    document.querySelector(".size-selector-selected").className =
      "size-selector list-inline-item";
  }
  this.className = "size-selector-selected list-inline-item";
  localStorage.setItem(getPageID() + "customsize", this.dataset.size);
  //console.log(coupon);
  //if(coupon == 0){
  if (document.querySelector(".color-selector-selected")) {
    document.querySelector(".priceBox").style.display = "block";
    //document.querySelector('.modal-price-text').innerText = "‎৳ " + calculateDynamicPrice(localStorage.getItem(getPageID()+'customcolor'), localStorage.getItem(getPageID()+'customsize'));
    if (discount == 0) {
      document.querySelector(".modal-discount-text").style.display = "none";
      document.querySelector(".modal-price-text").innerText =
        "‎৳" +
        calculateDynamicPrice(
          localStorage.getItem(getPageID() + "customcolor"),
          localStorage.getItem(getPageID() + "customsize")
        );
    } else {
      document.querySelector(".modal-discount-text").style.display = "block";
      (document.querySelector(".modal-discount-text").innerHTML =
        "‎৳<del>" +
        calculateDynamicPrice(
          localStorage.getItem(getPageID() + "customcolor"),
          localStorage.getItem(getPageID() + "customsize")
        ) +
        "</del>"),
        (document.querySelector(".modal-price-text").innerText =
          "‎৳" +
          calculateDynamicPriceOffer(
            localStorage.getItem(getPageID() + "customcolor"),
            localStorage.getItem(getPageID() + "customsize")
          ));
    }
  } else {
    document.querySelector(".priceBox").style.display = "none";
  }
}

function chartHandler() {
  type = localStorage
    .getItem(getPageID() + "defaultType")
    .toLowerCase()
    .replace(/\b[a-z]/g, function (letter) {
      return letter.toUpperCase();
    });
  var settings = {
    async: true,
    crossDomain: true,
    url: "/request-size-chart",
    method: "GET",
    headers: {
      "cache-control": "no-cache",
    },
    data: {
      type: type,
    },
  };

  $.ajax(settings).done(function (response) {
    document.querySelector(".szc-tbody").innerHTML = "";

    response.forEach(function (size) {
      var tr = document.createElement("tr");

      var szName = document.createElement("td");
      szName.className = "text-center";
      szName.textContent = size.size;
      tr.appendChild(szName);

      var szLength = document.createElement("td");
      szLength.className = "text-center";
      if (size.length == "NA") {
        szLength.textContent = "NA";
      } else {
        szLength.textContent =
          size.length +
          " cm (" +
          parseFloat(size.length * 0.393701).toFixed(2) +
          " inch)";
      }

      tr.appendChild(szLength);
      var szWidth = document.createElement("td");
      szWidth.className = "text-center";
      if (size.width == "NA") {
        szWidth.textContent = "NA";
      } else {
        szWidth.textContent =
          size.width +
          " cm (" +
          parseFloat(size.width * 0.393701).toFixed(2) +
          " inch)";
      }
      tr.appendChild(szWidth);

      var szSleeve = document.createElement("td");
      szSleeve.className = "text-center";
      if (size.sleeve == "NA") {
        szSleeve.textContent = "NA";
      } else {
        szSleeve.textContent =
          size.sleeve +
          " cm (" +
          parseFloat(size.sleeve * 0.393701).toFixed(2) +
          " inch)";
      }
      tr.appendChild(szSleeve);

      document.querySelector(".szc-tbody").appendChild(tr);
    });

    $(".szc").modal("toggle");
  });
}

function populateColorCircles(color, selectedColor) {
  //console.log(pricingVariables);
  var containerDom = document.querySelector(".commonmodal-body");

  var ulElem1 = document.createElement("ul");
  ulElem1.className = "list-inline tiny-margin";
  ulElem1.style.textAlign = "center";
  containerDom.appendChild(ulElem1);

  var listElem = document.createElement("li");
  listElem.className = "list-inline-item";
  listElem.style.textAlign = "center";
  listElem.innerHTML = "<b>Change Tshirt Color:</b>";
  ulElem1.appendChild(listElem);

  var ulElem2 = document.createElement("ul");
  ulElem2.className = "list-inline color-seletcor-container";
  ulElem2.style.textAlign = "center";
  containerDom.appendChild(ulElem2);

  color.forEach(function (elem) {
    var divElem = document.createElement("div");
    if (elem == selectedColor) {
      divElem.className =
        "color-selector color-selector-selected list-inline-item";
    } else {
      divElem.className = "color-selector list-inline-item";
    }
    divElem.addEventListener("click", colorHandler, false);
    divElem.style.backgroundColor = elem;
    divElem.style.cursor = "pointer";
    divElem.dataset.color = elem;
    ulElem2.appendChild(divElem);
    var facheck = document.createElement("i");
    if (elem == selectedColor) {
      facheck.className = "fa fa-check fa-check-selected";
    } else {
      facheck.className = "fa fa-check hidden";
    }
    divElem.appendChild(facheck);
  });
}

function colorHandler() {
  if (this.parentNode.querySelector(".color-selector-selected")) {
    this.parentNode
      .querySelector(".color-selector-selected")
      .querySelector("i").className = "fa fa-check hidden";
    this.parentNode.querySelector(".color-selector-selected").className =
      "color-selector list-inline-item";
  }
  this.className = "color-selector color-selector-selected list-inline-item";
  this.querySelector("i").className = "fa fa-check fa-check-selected";

  localStorage.setItem(getPageID() + "customcolor", this.dataset.color);
  rePopulateSizeBoxes(this.dataset.color);
  if (document.querySelector(".size-selector-selected")) {
    document.querySelector(".priceBox").style.display = "block";
    //document.querySelector('.modal-price-text').innerText = "‎৳ " + calculateDynamicPrice(localStorage.getItem(getPageID()+'customcolor'), localStorage.getItem(getPageID()+'customsize'));
    if (discount == 0) {
      document.querySelector(".modal-discount-text").style.display = "none";
      document.querySelector(".modal-price-text").innerText =
        "‎৳" +
        calculateDynamicPrice(
          localStorage.getItem(getPageID() + "customcolor"),
          localStorage.getItem(getPageID() + "customsize")
        );
    } else {
      document.querySelector(".modal-discount-text").style.display = "block";
      (document.querySelector(".modal-discount-text").innerHTML =
        "‎৳<del>" +
        calculateDynamicPrice(
          localStorage.getItem(getPageID() + "customcolor"),
          localStorage.getItem(getPageID() + "customsize")
        ) +
        "</del>"),
        (document.querySelector(".modal-price-text").innerText =
          "‎৳" +
          calculateDynamicPriceOffer(
            localStorage.getItem(getPageID() + "customcolor"),
            localStorage.getItem(getPageID() + "customsize")
          ));
    }
  } else {
    document.querySelector(".priceBox").style.display = "none";
  }
}

function populateTypeBoxes(types, selectedType) {
  var selectedType = selectedType
    .split(" ")
    .map((a) => a.charAt(0).toUpperCase() + a.substr(1))
    .join(" ");
  var containerDom = document.querySelector(".commonmodal-body");
  containerDom.innerHTML = "";

  var ulElem1 = document.createElement("ul");
  ulElem1.className = "list-inline typeBoxElem tiny-margin";
  ulElem1.style.textAlign = "center";
  containerDom.appendChild(ulElem1);

  var listElem = document.createElement("li");
  listElem.className = "list-inline-item tiny-margin";
  listElem.style.textAlign = "center";
  listElem.innerHTML = "<b>Choose Tshirt Type:</b>";
  ulElem1.appendChild(listElem);

  var ulElem2 = document.createElement("ul");
  ulElem2.className = "type-selectors-container list-inline";
  ulElem2.style.textAlign = "center";
  containerDom.appendChild(ulElem2);

  types.forEach(function (type) {
    var typeDiv = document.createElement("div");
    if (type == selectedType) {
      typeDiv.className = "type-selector-selected list-inline-item";
    } else {
      typeDiv.className = "type-selector list-inline-item";
    }
    typeDiv.addEventListener("click", typeHandler, false);
    typeDiv.textContent = type;
    ulElem2.appendChild(typeDiv);
  });
}

function typeHandler() {
  if (document.querySelector(".type-selector-selected")) {
    document.querySelector(".type-selector-selected").className =
      "type-selector list-inline-item";
  }
  this.className = "type-selector-selected list-inline-item";
  type = document.querySelector(".type-selector-selected").textContent;
  localStorage.setItem(getPageID() + "defaultType", type);
  $.ajax({
    url: "/search-variant-info",
    type: "GET",
    data: {
      type: type,
    },
    success: function (data) {
      //var data = JSON.parse(data);
      pricingVariables = data[1];

      populateTypeBoxes(data[2], type);
      populateColorCircles(
        data[0],
        localStorage.getItem(getPageID() + "customcolor")
      );
      populateSizeBoxes(localStorage.getItem(getPageID() + "customcolor"), 1);

      populatePriceBox();
      if (
        document.querySelector(".size-selector-selected") &&
        document.querySelector(".color-selector-selected")
      ) {
        document.querySelector(".priceBox").style.display = "block";
        //document.querySelector('.modal-price-text').innerText = "‎৳ " + calculateDynamicPrice(localStorage.getItem(getPageID()+'customcolor'), localStorage.getItem(getPageID()+'customsize'));
        if (discount == 0) {
          document.querySelector(".modal-discount-text").style.display = "none";
          document.querySelector(".modal-price-text").innerText =
            "‎৳" +
            calculateDynamicPrice(
              localStorage.getItem(getPageID() + "customcolor"),
              localStorage.getItem(getPageID() + "customsize")
            );
        } else {
          document.querySelector(".modal-discount-text").style.display =
            "block";
          (document.querySelector(".modal-discount-text").innerHTML =
            "‎৳<del>" +
            calculateDynamicPrice(
              localStorage.getItem(getPageID() + "customcolor"),
              localStorage.getItem(getPageID() + "customsize")
            ) +
            "</del>"),
            (document.querySelector(".modal-price-text").innerText =
              "‎৳" +
              calculateDynamicPriceOffer(
                localStorage.getItem(getPageID() + "customcolor"),
                localStorage.getItem(getPageID() + "customsize")
              ));
        }
      }
    },
  });
}

function populatePriceBox() {
  var containerDom = document.querySelector(".commonmodal-body");

  var ulElem = document.createElement("ul");
  ulElem.className = "list-inline priceBox";
  ulElem.style.textAlign = "center";
  ulElem.style.display = "none";
  containerDom.appendChild(ulElem);

  var listElem = document.createElement("li");
  listElem.className = "list-inline-item";
  listElem.style.textAlign = "center";
  listElem.innerHTML = "<b>Unit Price:</b>";
  ulElem.appendChild(listElem);

  var pHidElem = document.createElement("p");
  pHidElem.className = "modal-discount-text";
  ulElem.appendChild(pHidElem);

  var spElem = document.createElement("span");
  spElem.className = "modal-price-text";
  ulElem.appendChild(spElem);
}

function calculateDynamicPrice(color, size) {
  if (pricingVariables.findIndex((p) => p.variant == color) == -1) {
    color = "others";
  }
  pricingVariables.forEach(function (type) {
    if (type.variant == color) {
      type.ProductVariant.forEach(function (e) {
        if (e.size == size) {
          calculatedPrice = parseInt(
            parseInt(localStorage.getItem(getPageID() + "inkCost")) *
              parseFloat(type.type_multiplier) *
              parseFloat(e.size_multiplier) +
              (parseInt(e.price) + parseInt(type.design_multiplier))
          );
        }
      });
    }
  });
  return Math.floor(calculatedPrice / 1) * 1;
}

function calculateDynamicPriceOffer(color, size) {
  pricingVariables.forEach(function (type) {
    if (type.variant == color) {
      type.ProductVariant.forEach(function (e) {
        if (e.size == size) {
          calculatedPrice = parseInt(
            parseInt(localStorage.getItem(getPageID() + "inkCost")) *
              parseFloat(type.type_multiplier) *
              parseFloat(e.size_multiplier) +
              (parseInt(e.price) + parseInt(type.design_multiplier))
          );
          calculatedPrice = Math.floor(calculatedPrice / 1) * 1;
          calculatedPrice =
            calculatedPrice - Math.floor((calculatedPrice * discount) / 100);
        }
      });
    }
  });
  return calculatedPrice;
}

function makeProductandAddItToCart() {
  if (
    document.querySelector(".color-selector-selected") &&
    document.querySelector(".size-selector-selected")
  ) {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr("content");
    $.ajax({
      url: "/custom-add-to-cart",
      type: "POST",
      data: {
        _token: CSRF_TOKEN,
        color: localStorage.getItem(getPageID() + "customcolor"),
        size: localStorage.getItem(getPageID() + "customsize"),
        type: localStorage.getItem(getPageID() + "defaultType"),
        pageid: getPageID(),
      },
      success: function (response) {
        if (response.result == "success") {
          updadeCartBadge();
          fbq("track", "AddToCart");
        }
        swal({
          title: "Cart Message",
          text: response.msg,
          type: response.result,
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#28a745",
          confirmButtonText: "View Cart",
          cancelButtonText: "Add One More",
        }).then((result) => {
          if (result.value) {
            window.location.href = "/cart";
          }
        });
      },
    });
  } else {
    swal({
      type: "error",
      title: "Oops...",
      text: "Please select both color and size to add this item to your cart.",
    });
  }
}

function saveProductForLaterUsage() {
  if (document.querySelector(".color-selector-selected")) {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr("content");
    $.ajax({
      url: "/custom-save-design",
      type: "POST",
      data: {
        _token: CSRF_TOKEN,
        color: localStorage.getItem(getPageID() + "customcolor"),
        type: localStorage.getItem(getPageID() + "defaultType"),
        pageid: getPageID(),
      },
      success: function (response) {
        swal({
          title: "Design Saved !",
          text: response.msg,
          type: response.result,
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#28a745",
          confirmButtonText: "Check Saved Items",
          cancelButtonText: "Add One More",
        }).then((result) => {
          if (result.value) {
            window.location.href = "/dashboard/saved-items";
          }
        });
      },
    });
  } else {
    swal({
      type: "error",
      title: "Oops...",
      text: "Please select both color to save this item.",
    });
  }
}
function updadeCartBadge() {
  document.querySelectorAll(".shopping-cart-badge").forEach(function (el) {
    var count = parseInt(el.textContent.replace("(", "").replace(")", "")) + 1;
    el.textContent = "(" + count + ")";
  });
}

function rePopulateSizeBoxes(color) {
  var variantInfo = pricingVariables.filter((each) => each.variant == color)[0];

  if (!variantInfo) {
    variantInfo = pricingVariables[0];
  }
  variantInfo.ProductVariant = variantInfo.ProductVariant.sort(
    (a, b) => a.id - b.id
  );

  sizeSelectorDOM = document.querySelector(".size-selectors-container");
  sizeSelectorDOM.innerHTML = "";

  variantInfo.ProductVariant.forEach(function (size) {
    if (!size.size.includes(" ")) {
      if (document.querySelector(".Premium_div")) {
        var containerDIV = document.querySelector(".Premium_div");
      } else {
        var containerDIV = document.createElement("div");
        containerDIV.className =
          "size-selectors-container list-inline Premium_div";

        var pTag = document.createElement("span");
        pTag.className = "Premium_pTag pull-left";
        pTag.style.lineHeight = "15px";
        pTag.style.width = "135px";
        pTag.style.fontSize = ".9rem";
        pTag.style.padding = "5px 0px 5px 0px";
        pTag.innerText = "Select Premium: ";

        /*var szcTag = document.createElement('button');
                szcTag.className = "Premium_pTag pull-left btn btn-outline-link";
                szcTag.style.lineHeight = "0px";
                szcTag.style.fontSize= ".8rem";
                szcTag.innerText = "Size Chart";
                szcTag.addEventListener('click', function(){
                loadSizeChart(variantInfo.type, 'Premium');
            });
            pTag.appendChild(szcTag);
            */
        containerDIV.appendChild(pTag);

        var type_details_span = document.createElement("span");
        type_details_span.style.fontSize = "0.7rem";
        type_details_span.style.width = "100%";
        type_details_span.style.display = "block";
        type_details_span.style.fontStyle = "italic";
        if (
          document.querySelector(".type-selector-selected").textContent ===
          "Sweatshirt"
        )
          type_details_span.innerText = "320-360 GSM, Compact Cotton";
        else type_details_span.innerText = "175 GSM, Combed Compact Cotton";
        containerDIV.appendChild(type_details_span);
      }

      var sizeDiv = document.createElement("div");
      if (localStorage.getItem(getPageID() + "customsize") == size.size) {
        sizeDiv.className = "size-selector-selected list-inline-item";
      } else {
        sizeDiv.className = "size-selector list-inline-item";
      }
      sizeDiv.addEventListener("click", sizeHandler, false);
      sizeDiv.textContent = size.size;
      sizeDiv.dataset.size = size.size;
      containerDIV.appendChild(sizeDiv);

      sizeSelectorDOM.appendChild(containerDIV);
    } else {
      thisType = size.size.split(" ")[0];
      thisContainerDiv = thisType + "_div";
      thisTag = thisType + "_pTag";

      if (document.querySelector("." + thisContainerDiv)) {
        containerDIV = document.querySelector("." + thisContainerDiv);
      } else {
        var containerDIV = document.createElement("div");
        containerDIV.className =
          "size-selectors-container list-inline " + thisContainerDiv;

        var pTag = document.createElement("span");
        pTag.className = thisTag + " pull-left";
        pTag.style.lineHeight = "15px";
        pTag.style.width = "135px";
        pTag.style.fontSize = ".9rem";
        pTag.style.padding = "5px 0px 5px 0px";
        pTag.innerText = "Select " + thisType + " :";

        /*var szcTag = document.createElement('button');
            szcTag.className = "Premium_pTag pull-left btn btn-outline-link";
            szcTag.style.lineHeight = "0px";
            szcTag.style.fontSize= ".8rem";
            szcTag.innerText = "Size Chart";
            szcTag.addEventListener('click', function(){
            loadSizeChart(variantInfo.type, thisType);
        });
        pTag.appendChild(szcTag);
        */
        containerDIV.appendChild(pTag);

        var type_details_span = document.createElement("span");
        type_details_span.style.fontSize = "0.7rem";
        type_details_span.style.width = "100%";
        type_details_span.style.display = "block";
        type_details_span.style.fontStyle = "italic";
        if (thisType == "Premium") {
          if (
            document.querySelector(".type-selector-selected").textContent ===
            "Sweatshirt"
          )
            type_details_span.innerText = "320-360 GSM, Compact Cotton";
          else type_details_span.innerText = "175 GSM, Combed Compact Cotton";
        } else if (thisType == "Standard") {
          type_details_span.innerText = "160 GSM, Super Carded Cotton";
        } else if (thisType == "Budget") {
          type_details_span.innerText = "150 GSM, Carded Cotton";
        }
        containerDIV.appendChild(type_details_span);
      }

      var sizeDiv = document.createElement("div");
      if (localStorage.getItem(getPageID() + "customsize") == size.size) {
        sizeDiv.className = "size-selector-selected list-inline-item";
      } else {
        sizeDiv.className = "size-selector list-inline-item";
      }
      sizeDiv.addEventListener("click", sizeHandler, false);
      sizeDiv.textContent = size.size.split(" ")[1];
      sizeDiv.dataset.size = size.size;
      containerDIV.appendChild(sizeDiv);

      sizeSelectorDOM.appendChild(containerDIV);
    }
  });
}

document
  .querySelector(".colorBrushPick")
  .addEventListener("click", function () {
    document.querySelector(".colorSelector").jscolor.show();
  });

document
  .querySelector(".outlineBrushPick")
  .addEventListener("click", function () {
    document.querySelector(".outlineColor").jscolor.show();
  });
