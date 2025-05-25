document.querySelector(".commonmodal").style.overflow = "scroll";
var pageid;
function getPageID(){
	if(!pageid) {
		pageid = document.getElementById("pageid").textContent.trim();
	}
	return pageid;
}
$("#addProductToCart").fadeIn(1000);
$("#addProductToCart").fadeOut(15000);
var preloader = document.createElement('div');
preloader.id = "preloader-div";
var preloadSpinner = document.createElement('img');
preloadSpinner.className = "preload-spinner";
preloadSpinner.src = "/img/loader.svg";
preloader.appendChild(preloadSpinner);
document.body.appendChild(preloader);
document.body.style.opacity = 1;
window.setTimeout(function () {
    document.body.removeChild(document.getElementById('preloader-div'));
}, 5000);

teeChooser = document.querySelectorAll('.teeChooser');
for (var i = 0; i < teeChooser.length; i++) {
    teeChooser[i].addEventListener('click', function (event) {

        var selectedType = this.dataset.type;
        var frontImage = this.dataset.front;
        var backImage = this.dataset.back;

        localStorage.setItem(getPageID()+'defaultType', selectedType.toLowerCase());
        
        flipperEl.style.transform = "rotateY(0deg)";
        teeChooser.forEach(element => {
            element.className = "media teeChooser"
        });

        this.className = "media teeChooserSelected teeChooser";

        teeShirt1.style.backgroundColor = colorsArr[selectedType][0];
        teeShirt2.style.backgroundColor = colorsArr[selectedType][0];
        localStorage.setItem(getPageID()+'defaultColor', colorsArr[selectedType][0]);
        localStorage.setItem(getPageID()+'customcolor', localStorage.getItem(getPageID()+'defaultColor'));
        document.querySelector('.teeColor').innerHTML = '';

        colorsArr[selectedType].forEach(color => {
            var divEl = document.createElement('div');

            divEl.className = "color-selector";
            divEl.style.backgroundColor = color;
            divEl.style.float = "left";
            divEl.style.margin = "2px";
            divEl.dataset.color = color;
            divEl.dataset.colortype = selectedType;

            divEl.addEventListener('mouseover', function () {
                teeShirt1.style.backgroundColor = this.dataset.color;
                teeShirt2.style.backgroundColor = this.dataset.color;

                if (this.dataset.color == "#c5c5c5") {
                    teeShirt1.style.backgroundImage = 'url(' + frontImage + '), url("img/grey_texture.png")';
                    teeShirt2.style.backgroundImage = 'url(' + backImage + '), url("img/grey_texture.png")';
                    teeShirt1.style.backgroundRepeat = 'repeat';
                    teeShirt2.style.backgroundRepeat = 'repeat';
                } else {
                    teeShirt1.style.backgroundImage = 'url(' + frontImage + ')';
                    teeShirt2.style.backgroundImage = 'url(' + backImage + ')';
                    teeShirt1.style.backgroundRepeat = 'no-repeat';
                    teeShirt2.style.backgroundRepeat = 'no-repeat';
                }

            });

            divEl.addEventListener('mouseout', function () {
                teeShirt1.style.backgroundColor = localStorage.getItem(getPageID()+'defaultColor');
                teeShirt2.style.backgroundColor = localStorage.getItem(getPageID()+'defaultColor');
                if (localStorage.getItem(getPageID()+'defaultColor') != "#c5c5c5") {
                    teeShirt1.style.backgroundImage = 'url(' + frontImage + ')';
                    teeShirt2.style.backgroundImage = 'url(' + backImage + ')';
                    teeShirt1.style.backgroundRepeat = 'no-repeat';
                    teeShirt2.style.backgroundRepeat = 'no-repeat';
                } else {
                    teeShirt1.style.backgroundImage = 'url(' + frontImage + '), url("img/grey_texture.png")';
                    teeShirt2.style.backgroundImage = 'url(' + backImage + '), url("img/grey_texture.png")';
                    teeShirt1.style.backgroundRepeat = 'repeat';
                    teeShirt2.style.backgroundRepeat = 'repeat';
                }
            });

            divEl.addEventListener('click', function () {
                teeShirt1.style.backgroundColor = localStorage.setItem(getPageID()+'defaultColor', this.dataset.color);
                teeShirt2.style.backgroundColor = localStorage.setItem(getPageID()+'defaultColor', this.dataset.color);
                localStorage.setItem(getPageID()+'customcolor', localStorage.getItem(getPageID()+'defaultColor'));
                console.log(this.dataset.color);
                if (this.dataset.color == "#c5c5c5") {
                    teeShirt1.style.backgroundImage = 'url(' + frontImage + '), url("img/grey_texture.png")';
                    teeShirt2.style.backgroundImage = 'url(' + backImage + '), url("img/grey_texture.png")';
                    teeShirt1.style.backgroundRepeat = 'repeat';
                    teeShirt2.style.backgroundRepeat = 'repeat';
                } else {
                    teeShirt1.style.backgroundImage = 'url(' + frontImage + ')';
                    teeShirt2.style.backgroundImage = 'url(' + backImage + ')';
                    teeShirt1.style.backgroundRepeat = 'no-repeat';
                    teeShirt2.style.backgroundRepeat = 'no-repeat';
                }
                if (document.querySelector('.color-selector-selected')) {
                	document.querySelector('.color-selector-selected').querySelector('i').className = "fa fa-check hidden";
                    document.querySelector('.color-selector-selected').className = "color-selector list-inline-item";
                }
                this.className = "color-selector color-selector-selected list-inline-item";
                this.querySelector('i').className = "fa fa-check fa-check-selected";
            });

            document.querySelector('.teeColor').appendChild(divEl);
            var facheck = document.createElement('i');
            facheck.className = "fa fa-check hidden";
            divEl.appendChild(facheck);
        });


        if (this.dataset.type == "Men") {
            document.querySelectorAll('.canvas-size')[0].textContent = 'Printable Area: 14" X 16"';
            document.querySelectorAll('.canvas-size')[1].textContent = 'Printable Area: 14" X 16"';

            document.querySelectorAll('.tee')[0].style.cssText = "left:128px !important";
            document.querySelectorAll('.tee')[1].style.cssText = "left:128px !important";
            canvas.setWidth(235);
            canvas.renderAll();
            document.querySelectorAll('.teeback')[0].style.cssText = "left:128px !important";
            document.querySelectorAll('.teeback')[1].style.cssText = "left:128px !important";
            canvasBack.setWidth(235);
            canvasBack.renderAll();

        }

        if (this.dataset.type == "Full Sleeve") {
            document.querySelectorAll('.canvas-size')[0].textContent = 'Printable Area: 14" X 16"';
            document.querySelectorAll('.canvas-size')[1].textContent = 'Printable Area: 14" X 16"';

            document.querySelectorAll('.tee')[0].style.cssText = "left:133px !important";
            document.querySelectorAll('.tee')[1].style.cssText = "left:133px !important";
            canvas.setWidth(235);
            canvas.renderAll();
            document.querySelectorAll('.teeback')[0].style.cssText = "left:135px !important";
            document.querySelectorAll('.teeback')[1].style.cssText = "left:125px !important";
            canvasBack.setWidth(235);
            canvasBack.renderAll();

        }

        if (this.dataset.type == "Women") {
            document.querySelectorAll('.canvas-size')[0].textContent = 'Printable Area: 14" X 16"';
            document.querySelectorAll('.canvas-size')[1].textContent = 'Printable Area: 14" X 16"';

            document.querySelectorAll('.tee')[0].style.cssText = "left:140px !important";
            document.querySelectorAll('.tee')[1].style.cssText = "left:140px !important";
            canvas.setWidth(223);
            canvas.renderAll();
            document.querySelectorAll('.teeback')[0].style.cssText = "left:138px !important";
            document.querySelectorAll('.teeback')[1].style.cssText = "left:138px !important";
            canvasBack.setWidth(225);
            canvasBack.renderAll();
        }

        if (this.dataset.type == "Kids") {
            document.querySelectorAll('.canvas-size')[0].textContent = 'Printable Area: 10" X 12"';
            document.querySelectorAll('.canvas-size')[1].textContent = 'Printable Area: 10" X 12"';

            document.querySelectorAll('.tee')[0].style.cssText = "left:138px !important;";
            document.querySelectorAll('.tee')[1].style.cssText = "left:138px !important;";
            canvas.setWidth(235);
            canvas.renderAll();
            document.querySelectorAll('.teeback')[0].style.cssText = "left:136px !important; top: 60px !important";
            document.querySelectorAll('.teeback')[1].style.cssText = "left:136px !important; top: 60px !important";
            canvasBack.setWidth(235);
            canvasBack.renderAll();
        }
		if (this.dataset.type == "Sweatshirt") {
			document.querySelectorAll('.canvas-size')[0].textContent = 'Printable Area: 14" X 16"';
            document.querySelectorAll('.canvas-size')[1].textContent = 'Printable Area: 14" X 16"';

            document.querySelectorAll('.tee')[0].style.cssText = "left:133px !important";
            document.querySelectorAll('.tee')[1].style.cssText = "left:133px !important";
            canvas.setWidth(235);
            canvas.renderAll();
            document.querySelectorAll('.teeback')[0].style.cssText = "left:135px !important";
            document.querySelectorAll('.teeback')[1].style.cssText = "left:125px !important";
            canvasBack.setWidth(235);
            canvasBack.renderAll();
        }

        teeShirt1.style.backgroundImage = "url(" + frontImage + ")";
        teeShirt2.style.backgroundImage = "url(" + backImage + ")";
    });
}
document.querySelectorAll('.teeChooser')[0].click();

document.querySelector('.scroll-lock').addEventListener('click', function () {
    if (!document.body.style.overflowY) {
        document.body.style.overflowY = 'scroll';
    }
    document.body.style.overflowY == 'scroll' ? document.body.style.overflowY = 'hidden' : document.body.style.overflowY = 'scroll';
    document.querySelector(".lock-icon").className == 'fa fa-lock lock-icon' ? document.querySelector(".lock-icon").className = 'fa fa-unlock lock-icon' : document.querySelector(".lock-icon").className = 'fa fa-lock lock-icon'
});