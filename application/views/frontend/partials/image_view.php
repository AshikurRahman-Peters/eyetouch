<style>


.image-slider {
	position:relative;
	display: inline-block;
	line-height: 0;
}

/* Could use a pseudo-element, but they’re currently
   super buggy. See: http://dabblet.com/gist/ab432c3f6a8f672cd077 */
.image-slider > div {
	position: absolute;
	top: 0; bottom: 0; left: 0;
    width: 179px;
	max-width: 100%;
	overflow: hidden;
	resize: horizontal;
}

/* Cross-browser resizer styling */
.image-slider > div:before {
	content: '';
	position: absolute;
	right: 0; bottom: 0;
    width: 35px;
    height: 29px;
    padding: 0px;
	background: linear-gradient(-45deg, white 50%, transparent 0);
	background-clip: content-box;
	cursor: ew-resize;
	-webkit-filter: drop-shadow(0 0 2px black);
	filter: drop-shadow(0 0 2px black);
}

.image-slider img {
	user-select: none;
	max-width: 400px;
}


/* style for priching table */

@media (min-width: 992px) and (max-width: 1199px){
  .visible-md{
    display: block !important;
  }
  table.visible-md{
    display: table !important;
  }
  tr.visible-md{
    display: table-row !important;
  }
  th.visible-md,
  td.visible-md{
    display: table-cell !important;
  }
  .visible-md-block{
    display: block !important;
  }
  .visible-md-inline{
    display: inline !important;
  }
  .visible-md-inline-block{
    display: inline-block !important;
  }
  .hidden-md{
    display: none !important;
  }
}

@media (min-width: 1200px){
  .container{
    width: 1170px;
  }
  .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12{
    float: left;
  }
  .col-lg-1{
    width: 8.33333%;
  }
  .col-lg-2{
    width: 16.66667%;
  }
  .col-lg-3{
    width: 25%;
  }
  .col-lg-4{
    width: 33.33333%;
  }
  .col-lg-5{
    width: 41.66667%;
  }
  .col-lg-6{
    width: 50%;
  }
  .col-lg-7{
    width: 58.33333%;
  }
  .col-lg-8{
    width: 66.66667%;
  }
  .col-lg-9{
    width: 75%;
  }
  .col-lg-10{
    width: 83.33333%;
  }
  .col-lg-11{
    width: 91.66667%;
  }
  .col-lg-12{
    width: 100%;
  }
  .col-lg-pull-0{
    right: auto;
  }
  .col-lg-pull-1{
    right: 8.33333%;
  }
  .col-lg-pull-2{
    right: 16.66667%;
  }
  .col-lg-pull-3{
    right: 25%;
  }
  .col-lg-pull-4{
    right: 33.33333%;
  }
  .col-lg-pull-5{
    right: 41.66667%;
  }
  .col-lg-pull-6{
    right: 50%;
  }
  .col-lg-pull-7{
    right: 58.33333%;
  }
  .col-lg-pull-8{
    right: 66.66667%;
  }
  .col-lg-pull-9{
    right: 75%;
  }
  .col-lg-pull-10{
    right: 83.33333%;
  }
  .col-lg-pull-11{
    right: 91.66667%;
  }
  .col-lg-pull-12{
    right: 100%;
  }
  .col-lg-push-0{
    left: auto;
  }
  .col-lg-push-1{
    left: 8.33333%;
  }
  .col-lg-push-2{
    left: 16.66667%;
  }
  .col-lg-push-3{
    left: 25%;
  }
  .col-lg-push-4{
    left: 33.33333%;
  }
  .col-lg-push-5{
    left: 41.66667%;
  }
  .col-lg-push-6{
    left: 50%;
  }
  .col-lg-push-7{
    left: 58.33333%;
  }
  .col-lg-push-8{
    left: 66.66667%;
  }
  .col-lg-push-9{
    left: 75%;
  }
  .col-lg-push-10{
    left: 83.33333%;
  }
  .col-lg-push-11{
    left: 91.66667%;
  }
  .col-lg-push-12{
    left: 100%;
  }
  .col-lg-offset-0{
    margin-left: 0%;
  }
  .col-lg-offset-1{
    margin-left: 8.33333%;
  }
  .col-lg-offset-2{
    margin-left: 16.66667%;
  }
  .col-lg-offset-3{
    margin-left: 25%;
  }
  .col-lg-offset-4{
    margin-left: 33.33333%;
  }
  .col-lg-offset-5{
    margin-left: 41.66667%;
  }
  .col-lg-offset-6{
    margin-left: 50%;
  }
  .col-lg-offset-7{
    margin-left: 58.33333%;
  }
  .col-lg-offset-8{
    margin-left: 66.66667%;
  }
  .col-lg-offset-9{
    margin-left: 75%;
  }
  .col-lg-offset-10{
    margin-left: 83.33333%;
  }
  .col-lg-offset-11{
    margin-left: 91.66667%;
  }
  .col-lg-offset-12{
    margin-left: 100%;
  }
  .visible-lg{
    display: block !important;
  }
  table.visible-lg{
    display: table !important;
  }
  tr.visible-lg{
    display: table-row !important;
  }
  th.visible-lg,
  td.visible-lg{
    display: table-cell !important;
  }
  .visible-lg-block{
    display: block !important;
  }
  .visible-lg-inline{
    display: inline !important;
  }
  .visible-lg-inline-block{
    display: inline-block !important;
  }
  .hidden-lg{
    display: none !important;
  }
}

@media print{
  *,
  *:before,
  *:after{
    background: transparent !important;
    color: #000 !important;
    box-shadow: none !important;
    text-shadow: none !important;
  }
  a,
  a:visited{
    text-decoration: underline;
  }
  a[href]:after{
    content: " (" attr(href) ")";
  }
  abbr[title]:after{
    content: " (" attr(title) ")";
  }
  a[href^="#"]:after,
  a[href^="javascript:"]:after{
    content: "";
  }
  pre,
  blockquote{
    border: 1px solid #999;
    page-break-inside: avoid;
  }
  thead{
    display: table-header-group;
  }
  tr,
  img{
    page-break-inside: avoid;
  }
  img{
    max-width: 100% !important;
  }
  p,
  h2,
  h3{
    orphans: 3;
    widows: 3;
  }
  h2,
  h3{
    page-break-after: avoid;
  }
  .navbar{
    display: none;
  }
  .btn > .caret,
  .dropup > .btn > .caret{
    border-top-color: #000 !important;
  }
  .label{
    border: 1px solid #000;
  }
  .table{
    border-collapse: collapse !important;
  }
  .table td,
  .table th{
    background-color: #fff !important;
  }
  .table-bordered th,
  .table-bordered td{
    border: 1px solid #ddd !important;
  }
  .visible-print{
    display: block !important;
  }
  table.visible-print{
    display: table !important;
  }
  tr.visible-print{
    display: table-row !important;
  }
  th.visible-print,
  td.visible-print{
    display: table-cell !important;
  }
  .visible-print-block{
    display: block !important;
  }
  .visible-print-inline{
    display: inline !important;
  }
  .visible-print-inline-block{
    display: inline-block !important;
  }
  .hidden-print{
    display: none !important;
  }
}

@media all and (transform-3d), (-webkit-transform-3d){
  .carousel-inner > .item{
    -webkit-transition: -webkit-transform 0.6s ease-in-out;
    transition: transform 0.6s ease-in-out;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-perspective: 1000px;
    perspective: 1000px;
  }
  .carousel-inner > .item.next,
  .carousel-inner > .item.active.right{
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
    left: 0;
  }
  .carousel-inner > .item.prev,
  .carousel-inner > .item.active.left{
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
    left: 0;
  }
  .carousel-inner > .item.next.left,
  .carousel-inner > .item.prev.right,
  .carousel-inner > .item.active{
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    left: 0;
  }
}

@media (max-width: 767px){
  .visible-xs{
    display: block !important;
  }
  table.visible-xs{
    display: table !important;
  }
  tr.visible-xs{
    display: table-row !important;
  }
  th.visible-xs,
  td.visible-xs{
    display: table-cell !important;
  }
  .visible-xs-block{
    display: block !important;
  }
  .visible-xs-inline{
    display: inline !important;
  }
  .visible-xs-inline-block{
    display: inline-block !important;
  }
  .hidden-xs{
    display: none !important;
  }
}

@media only screen and (max-width: 768px){
  h1{
    font-size: 1.728rem;
    line-height: 2.57143rem;
  }
  h2{
    font-size: 1.44rem;
    line-height: 2.57143rem;
  }
  h3{
    font-size: 1.2rem;
    line-height: 1.71429rem;
  }
  h4{
    font-size: 1.12924rem;
    line-height: 1.71429rem;
  }
  h5{
    font-size: 1.06266rem;
    line-height: 1.71429rem;
  }
  h6{
    font-size: 1rem;
    line-height: 1.71429rem;
  }
}
/* =================== */
/*   Pricing Wrapper   */
/* =================== */
.pricing-wrapper {
  font-family: roboto;
}

.pricing-wrapper:hover .current {
  top: 0;
  padding-bottom: 20px;
  padding-top: 20px;
}

.pricing-wrapper:hover .current .pricing-card {
  -webkit-transition: all 0.2s linear 0s;
          transition: all 0.2s linear 0s;
  box-shadow: none;
}

.pricing-wrapper:hover .current .pricing-footer {
  height: 80px;
}

.pricing-wrapper:hover .current .pricing-footer a {
  bottom: 0;
  position: relative;
}

.pricing-wrapper:hover .current:hover {
  top: 0;
  padding-top: 0;
  padding-bottom: 0;
}

.pricing-wrapper:hover .current:hover .pricing-card {
  box-shadow: 0 0 20px -2px rgba(0, 0, 0, 0.25);
}

.pricing-wrapper:hover .current:hover .pricing-footer {
  height: 120px;
}

.pricing-wrapper:hover .current:hover .pricing-footer a {
  bottom: -20px;
  position: relative;
}

.stripped-table [class*=col-] {
  padding: 0;
  margin: -1px;
}

.stripped-table .pricing-col {
  padding: 20px 0;
}

.stripped-table.current {
  padding-left: 0;
  padding-right: 0;
}

.stripped-table .ribbon {
  left: calc(100% - 124px);
}

/* =================== */
/*   Pricing Cards     */
/* =================== */
.pricing-card {
  position: relative;
  border: 1px solid #ddd;
  width: 100%;
  top: 0;
  -webkit-transition: all 0.2s linear 0s;
          transition: all 0.2s linear 0s;
  z-index: 99;
}

/* =================== */
/*   Pricing Header    */
/* =================== */
.pricing-header {
  background: #fff;
  position: relative;
  height: 200px;
  border-bottom: 1px solid #1976d2;
  margin: -1px;
  margin-bottom: 0;
  text-align: center;
}

.pricing-header h5 {
  background: #2196f3;
  color: #fff;
  font-size: 16px;
  line-height: normal;
  margin: 0 auto;
  padding: 15px 20px;
  text-transform: uppercase;
}

.pricing-header p {
  margin: 0 auto;
  color: #fff;
  display: inline-block;
  font-style: italic;
}

/* =================== */
/*   Pricing Box       */
/* =================== */
.price-box {
  border-radius: 100px;
  display: block;
  margin: 25px auto;
  position: relative;
  line-height: 100px;
  height: 100px;
  width: 100px;
}

.price-box:before {
  border-radius: 50%;
  box-shadow: 0 0 0 5px white inset, 0 1px 2px transparent;
  content: "";
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
}

.price-box .price {
  color: #fff;
  display: inline-block;
  font-family: roboto;
  font-size: 34px;
  font-weight: 600;
  position: relative;
  letter-spacing: -2px;
}

.price-box .currency {
  font-size: 50%;
  font-weight: 600;
  left: -10px;
  line-height: inherit;
  position: absolute;
  top: -6px;
  letter-spacing: 0;
}

.price-box .plan {
  bottom: -26px;
  font-family: roboto;
  font-size: 36%;
  font-weight: 400;
  left: 0;
  letter-spacing: 0px !important;
  margin: 0 auto;
  position: absolute;
  right: 0;
  text-transform: capitalize;
}

/* ============================ */
/*   Pricing Feature(Content)   */
/* ============================ */
.pricing-feature {
  position: relative;
  text-align: left;
}

.pricing-feature li {
  list-style: none;
  padding: 13px 0;
  border-bottom: 1px solid #ddd;
  background: #eee;
}

.pricing-feature li:last-child {
  border-bottom: none;
}

.pricing-feature li span {
  text-transform: capitalize;
  font-weight: bold;
}

.pricing-feature li span, .pricing-feature li i {
  float: right;
}

.pricing-feature li p {
  margin: 0;
  font-size: 13.5px;
  text-transform: capitalize;
  padding: 0 20px;
  line-height: normal;
}

/* ============================ */
/*   Pricing Footer             */
/* ============================ */
.pricing-footer {
  border-top: 1px solid #ddd;
  padding: 0 20px;
  height: 80px;
  -webkit-transition: height 0.2s linear 0s;
          transition: height 0.2s linear 0s;
  text-align: center;
}

.pricing-footer a {
  bottom: 0;
  margin-top: 20px;
  position: relative;
}

/* =================== */
/*   Pricing Ribbons     */
/* =================== */
.ribbon {
  background: #222;
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.23), 0 1px 5px rgba(0, 0, 0, 0.16);
  height: 35px;
  line-height: 35px;
  margin: 0 auto;
  position: absolute;
  left: calc(100% - 110px);
  top: 70px;
  width: 35px;
  z-index: 10;
  -webkit-transition: all 0.2s linear;
          transition: all 0.2s linear;
  border-radius: 100px;
  float: right;
  cursor: pointer;
}

.ribbon:hover {
  width: 90px;
}

.ribbon:hover span {
  visibility: visible;
  -webkit-transition: all 0.2s linear 0.18s;
          transition: all 0.2s linear 0.18s;
}

.ribbon span {
  top: 0;
  color: #ffffff;
  font-size: 13px;
  font-weight: 500;
  float: left;
  visibility: hidden;
}

.ribbon i {
  color: #FFC61B;
  font-weight: 800;
  font-size: 14px;
  margin: 11px;
  z-index: 10;
  float: left;
}

/* ======================= */
/*   Pricing Comparison    */
/* ======================= */
.comparison-table [class*=col-] {
  padding: 0;
  margin: -1px;
}

.comparison-table .pricing-col {
  padding: 20px 0;
}

.comparison-table.current {
  padding-left: 0;
  padding-right: 0;
}

.comparison-table [class*=col-]:first-child {
  margin: 0;
}

.comparison-table [class*=col-]:first-child:hover {
  top: 0;
  padding-top: 20px;
  padding-bottom: 20px;
}

.comparison-table [class*=col-]:first-child:hover .pricing-card {
  margin: 0;
  box-shadow: none;
}

.comparison-table .pricing-feature li {
  background: #fff;
  text-align: center;
}

.comparison-table .pricing-feature li i {
  line-height: normal;
}

.comparison-table .pricing-feature li span, .comparison-table .pricing-feature li i {
  float: none;
}

.comparison-table .pricing-feature li:nth-child(2n+1) {
  background: #eee;
}

.comparison-table .ribbon {
  left: calc(100% - 124px);
}

.list-feature {
  z-index: 0;
}

.list-feature .pricing-header {
  background: #fff !important;
  padding: 30px 15px;
  border-bottom-color: #ddd !important;
  text-align: center;
  margin-top: -2px;
}

.list-feature .pricing-header h5 {
  background: #fff !important;
  color: #424242;
  font-weight: 500;
  font-size: 39px;
  padding: 0;
  margin-top: 30px;
}

.list-feature .pricing-header p {
  color: #444;
  margin-top: 5px;
}

.list-feature .pricing-feature {
  text-align: left;
}

.pricing-col {
  -webkit-transition: all 0.2s linear 0s;
          transition: all 0.2s linear 0s;
  padding-top: 20px;
  padding-bottom: 20px;
}

.pricing-col:hover {
  padding-bottom: 0;
  padding-top: 0;
}

.pricing-col:hover > .pricing-card {
  top: 0px;
  box-shadow: 0 0 20px -2px rgba(0, 0, 0, 0.25);
  -webkit-transition: all 0.2s linear 0s;
          transition: all 0.2s linear 0s;
  z-index: 101;
}

.pricing-col:hover > .pricing-card .pricing-footer {
  height: 120px;
}

.pricing-col:hover > .pricing-card .pricing-footer a {
  bottom: -20px;
  position: relative;
}

.pricing-col.current {
  padding-top: 0;
  padding-bottom: 0;
  margin-left: 0;
  margin-right: 0;
}

.current {
  top: 0;
}

.current .pricing-card {
  z-index: 100;
  -webkit-transition: all 0.2s linear 0s;
          transition: all 0.2s linear 0s;
  box-shadow: 0 0 20px -2px rgba(0, 0, 0, 0.25);
}

.current .pricing-footer {
  height: 120px;
}

.current .pricing-footer a {
  bottom: -20px;
  position: relative;
}

.current:hover {
  -webkit-transition: all 0.2s linear 0s;
          transition: all 0.2s linear 0s;
  top: -20px;
}

.current:hover .pricing-footer {
  height: 120px;
}

.current:hover .pricing-footer a {
  bottom: -20px;
  position: relative;
}

/* ======================== */
/*   Tooltips               */
/* ======================== */
.tooltip {
  outline: none;
  color: inherit;
  position: relative;
  -webkit-font-smoothing: antialiased;
  /* webkit text rendering fix */
  cursor: help;
  border-bottom: 1px dotted;
  font-weight: normal !important;
}

.tooltip .tooltip-content {
  border-radius: 4px;
  position: absolute;
  color: #111;
  border: 1px solid #ddd;
  background: #f9f9f9;
  line-height: 1.6;
  font-weight: normal;
  font-size: 12px;
  font-family: Roboto;
  padding: 15px;
  bottom: 36px;
  left: -10px;
  margin: 0 auto;
  z-index: 9999;
  width: 200px;
  -webkit-transform: translateY(10px);
      -ms-transform: translateY(10px);
          transform: translateY(10px);
  -webkit-transition: all 0.25s ease-in;
          transition: all 0.25s ease-in;
  box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
  visibility: hidden;
  opacity: 0;
  display: block;
}

.tooltip .tooltip-content:before {
  content: "";
  position: absolute;
  bottom: -10px;
  left: 10%;
  width: 20px;
  height: 20px;
  background: #f9f9f9;
  box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.2);
  -webkit-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
          transform: rotate(45deg);
  z-index: 0;
}

.tooltip:hover span {
  opacity: 1;
  visibility: visible;
  -webkit-transform: translateY(0px);
      -ms-transform: translateY(0px);
          transform: translateY(0px);
}

/* ======================== */
/*   Button Color       */
/* ======================== */
.btn-act {
  font-family: Roboto;
  line-height: normal;
  padding: 9px 26px;
  border: 2px solid;
  font-size: 14px;
  font-weight: 500;
  text-transform: capitalize;
  color: #666;
  vertical-align: middle;
  will-change: opacity, transform;
  -webkit-transition: all 0.2s linear 0s;
          transition: all 0.2s linear 0s;
}

.btn-act.rounded {
  border-radius: 50px;
}

.btn-act.boxed {
  border-radius: 0;
}

.btn-act.btn-uppercase {
  text-transform: uppercase;
  font-size: 13px;
}

.btn-act.btn-capitalize {
  text-transform: capitalize;
}

.btn-act span {
  position: relative;
  left: 0;
  -webkit-transition: left 0.2s linear;
          transition: left 0.2s linear;
}

.btn-act i {
  -webkit-transition: margin-left 0.2s linear;
          transition: margin-left 0.2s linear;
  opacity: 0;
  margin-left: 0;
  position: absolute;
  line-height: inherit;
}

.btn-act:hover {
  border-color: initial;
  background: initial;
}

.btn-act:hover span {
  left: -0.3em;
}

.btn-act:hover i {
  opacity: 1;
  margin-left: 0.25em;
}

.btn-act.btn-line {
  background: #fff;
  border-color: #616161;
  color: #616161;
}

.btn-act.btn-line:hover {
  border-color: #212121;
  background: #212121;
  color: #fff;
}

.btn-act.btn-bg {
  background: #616161;
  border-color: #616161;
  color: #fff;
}

.btn-act.btn-bg:hover {
  background: #212121;
  border-color: #212121;
}

.title-page{
  margin-bottom:60px; 
  color: #484848;
  font-size:30px;
}

.content{
  padding: 60px;
  padding-bottom: 200px;
}

/*=====================================================================
    MENU
======================================================================*/
  .matraz_menu { width:100%; padding: 15px 0; z-index:999; display:block; float:left; background: #eee; border-bottom:1px solid #dedede;margin-bottom: 120px;}
  .matraz_mainmenu { float:right; display:block; margin-top:10px; margin-bottom: 10px;}
  .matraz_mainmenu li {
    float: left;
    margin: 0 5px 0 auto;
    overflow: hidden;
    padding: 15px 0;
  }
  .matraz_mainmenu li a {
    border-radius: 2px 2px 2px 2px;
    color: #2c3e50;
    font-family: Helvetica;
    padding: 10px;
    font-weight:600;
  }
  .matraz_mainmenu li:hover a,
  .matraz_mainmenu li.active a{
    background: #1abc9c;
    color: #fff;
    text-decoration: none;
    border-radius: 2px;
    -webkit-transition: all 0.3s linear;
    -moz-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    -ms-transition: all 0.3s linear;
    transition: all 0.3s linear;
  }
  .matraz_mainmenu li.active:hover a{
    background: #424242;
    color: #fff;
    text-decoration: none;
    border-radius: 2px;
    -webkit-transition: all 0.3s linear;
    -moz-transition: all 0.3s linear;
    -o-transition: all 0.3s linear;
    -ms-transition: all 0.3s linear;
    transition: all 0.3s linear;
  }

/*=====================================================================
    MOBILE MENU
======================================================================*/
  .matraz_menu .logo {
    margin-left: auto;
    margin-top: 5px;
    width: 150px;
  }
  .trac_mobtrac_menu { text-align:center; display:none; }
  .trac_mobtrac_menu li { padding:10px 0; }
  .trac_mobilelink_button  { display:none; margin-right:10px; cursor:pointer; margin-top:10px; }

  .logo{
    float: left;
  }
  .logo h1{
    margin-bottom: 0;
    margin-top: 10px;
  }
.style-2 .pricing-card,
.style-2 .pricing-footer {
  border: none;
}

.style-2 .pricing-header {
  margin: 0;
  border: none;
  height: 160px;
}

.style-2 .pricing-feature li {
  background: none;
  border-color: #42a5f5;
}

.style-2 .pricing-feature li p {
  color: #e3f2fd;
}

.style-2 .pricing-feature li p span, .style-2 .pricing-feature li p i {
  float: right;
  color: #fff;
}

.style-2 .pricing-feature li p .tooltip-content {
  color: #444;
}

.style-2 .pricing-feature li:last-child {
  border-bottom: 1px solid transparent;
}

.style-2 .price-box {
  margin: 20px auto;
  border-radius: 0;
  width: auto;
  height: auto;
  line-height: normal;
}

.style-2 .price-box:before {
  display: none;
  position: relative;
}

.style-2 .plan {
  bottom: 12px;
  left: auto;
  margin: 0;
  left: calc(100% + 5px);
  font-weight: 400;
  font-size: 12px;
  width: 50px;
  text-align: left;
}

.style-2 .currency {
  top: auto;
  font-size: 30px;
  left: -20px;
  line-height: inherit;
  position: absolute;
  bottom: 10px;
  letter-spacing: 0;
  font-weight: 300;
}

.style-2 .price {
  font-size: 60px;
  font-weight: 400;
}

.style-2 .ribbon {
  top: 35%;
  right: -10px;
  left: auto;
  border-radius: 0;
}

.style-2 .ribbon:after {
  border-right: 10px solid transparent;
  border-top: 7px solid rgba(0, 0, 0, 0.5);
  bottom: -7px;
  content: "";
  position: absolute;
  right: 0;
}

.style-2 .pricing-footer a:before {
  background: inherit;
}

.style-2.comparison-table .pricing-feature li:nth-child(2n+1) {
  background: inherit;
}

.style-2.comparison-table .pricing-feature li p {
  color: #fff;
}

.style-2.comparison-table .pricing-feature li p span, .style-2.comparison-table .pricing-feature li p i {
  float: none;
}

.style-2.comparison-table .list-feature .pricing-header {
  margin: 0;
  margin-bottom: -1px;
}

.style-2.comparison-table .list-feature .pricing-header h5 {
  margin-top: 0;
  font-size: 38px;
}

.style-2 .btn-act.btn-line {
  background: none;
  border-color: #fff;
  color: #fff;
}

.style-2 .btn-act.btn-bg:hover {
  background: #212121;
  border-color: #212121;
}





.style-3 .pricing-card {
  border: 1px solid #ddd;
}

.style-3 .pricing-header {
  border-bottom: none;
  margin: 0;
  height: 160px;
}

.style-3 .pricing-header h5 {
  background: #fff;
  color: #424242;
  border-bottom: 1px solid #ddd;
}

.style-3 .price-box {
  border-radius: 0;
  width: 100%;
  height: auto;
  border-bottom: 1px solid #ddd;
}

.style-3 .price {
  color: #616161;
  font-size: 60px;
  font-weight: 400;
  line-height: normal;
}

.style-3 .currency {
  top: 12px;
  font-size: 22px;
  left: -16px;
  font-weight: 300;
}

.style-3 .plan {
  bottom: 12px;
  left: auto;
  margin: 0;
  left: calc(100% + 5px);
  font-weight: 400;
  font-size: 12px;
  width: 50px;
  text-align: left;
  line-height: normal;
}

.style-3 .pricing-feature li {
  background: #f5f5f5;
}

.style-3 .pricing-feature li:first-child {
  border-top: 1px solid #ddd;
}

.style-3 .pricing-feature li span, .style-3 .pricing-feature li i {
  float: right;
}

.style-3 .pricing-feature li:nth-child(2n+1) {
  background: #eee;
}

.style-3 .ribbon {
  top: 35%;
  right: -10px;
  left: auto;
  border-radius: 0;
}

.style-3 .ribbon:after {
  border-right: 10px solid transparent;
  border-top: 7px solid rgba(0, 0, 0, 0.5);
  bottom: -7px;
  content: "";
  position: absolute;
  right: 0;
}

.style-3 .person .price {
  color: #2196f3;
}

.style-3 .person .plan {
  color: #757575;
}

.style-3 .corp .price {
  color: #4caf50;
}

.style-3 .corp .plan {
  color: #757575;
}

.style-3 .unlim .price {
  color: #f44336;
}

.style-3 .unlim .plan {
  color: #757575;
}

.style-3 .business .price {
  color: #ffc107;
}

.style-3 .business .plan {
  color: #757575;
}

.style-3 .pricing-footer {
  background: #fff;
}

.style-3.comparison-table [class*=col-]:first-child {
  margin: -1px;
}

.style-3.comparison-table .list-feature .pricing-header h5 {
  margin-top: 0;
  border-bottom: none;
}

.style-3.comparison-table .pricing-feature li p, .style-3.comparison-table .pricing-feature li i, .style-3.comparison-table .pricing-feature li span {
  float: none;
}

.style-3 .pricing-footer .btn-act.btn-line {
  background: none;
  border-color: #2196f3;
  color: #2196f3;
}

.style-3 .pricing-footer .btn-act.btn-line:hover {
  background: #2196f3;
  border-color: #2196f3;
  color: #fff;
}

.style-3 .pricing-footer .btn-act.btn-bg {
  background-color: #2196f3;
  border-color: #2196f3;
}

.style-3 .pricing-footer .btn-act.btn-bg:hover {
  background: #212121;
  border-color: #212121;
}
section.footer {
    background: #F5F5F5;
    text-align: center;
    font-size: 20px;
}


/* custom for need style */
.title-h1{
font-size: 2.5em;
    font-weight: 700;
    /* text-align: center; */
    letter-spacing: 2px;
    color: #000;
    margin-bottom: 1em;
    text-transform: uppercase;

}
.title-h3{

    font-weight: 700;
    letter-spacing: 2px;
    color: #000;
    margin-bottom: 1em;
    text-transform: uppercase;

}
.btn-lear{
  margin: 24px 0px;

}
ul{
  margin-top: 20px;
  list-style: none;
  line-height: 24px;
}
</style>

<div class="">
    <div class="container">
			<div class="row-fluid ">
			  
            <div class="col-md-6">
                <div class="image-slider">
                        <div><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/photoshop-face-before.jpg" /></div>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/photoshop-face-after.jpg" />
                </div>
            </div>
                    
            <div class="col-md-6 ">
            <h1 class="title-h1">Clipping Path</h1>
                      <h3 class="title-h3">Increase sales with images that standout.</h3>
                      <p>
Clipping Path is a service that simply removes or cuts a background from an image.
 We deliver handmade Clipping path using Photoshop Pen Tool to have the best output.
 Depending on the degree or complexity of the image to be clipped we set the pricing.</p>

 <ul>
<li>
<i class="fa fa-check available">We have the best output</i>
</li>
<li>
<i class="fa fa-check available">We have the best output</i>
</li>
<li>
<i class="fa fa-check available">We have the best output</i>
</li>
<li>
<i class="fa fa-check available">We have the best output</i>
</li>
</ul>

 
 <button class="hvr-outline-out button2 btn-lear">Learn More</button>
                <div>
            </div>
    </div>
</div>
</div>
<div class="">
    <div class="container">
			<div class="row-fluid ">
			  
            <div class="col-md-6">
                
            <h1 class="title-h1">Clipping Path</h1>
                      <h3 class="title-h3">Increase sales with images that standout.</h3>
                      <p>
Clipping Path is a service that simply removes or cuts a background from an image.
 We deliver handmade Clipping path using Photoshop Pen Tool to have the best output.
 Depending on the degree or complexity of the image to be clipped we set the pricing.</p>

 <ul>
<li>
<i class="fa fa-check available">We have the best output</i>
</li>
<li>
<i class="fa fa-check available">We have the best output</i>
</li>
<li>
<i class="fa fa-check available">We have the best output</i>
</li>
<li>
<i class="fa fa-check available">We have the best output</i>
</li>
</ul>
 
 <button class="hvr-outline-out button2 btn-lear">Learn More</button>
                
            </div>
                    
            <div class="col-md-6 ">
            <div class="image-slider" style="float:right">
                        <div><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/photoshop-face-before.jpg" /></div>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/photoshop-face-after.jpg" />
                </div>
                <div>
            </div>
    </div>
</div>
</div>
<div class="">
    <div class="container">
			<div class="row-fluid ">
			  
            <div class="col-md-6">
                <div class="image-slider">
                        <div><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/photoshop-face-before.jpg" /></div>
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/photoshop-face-after.jpg" />
                </div>
            </div>
                    
            <div class="col-md-6 ">
            <h1 class="title-h1">Clipping Path</h1>
                      <h3 class="title-h3">Increase sales with images that standout.</h3>
                      <p>
Clipping Path is a service that simply removes or cuts a background from an image.
 We deliver handmade Clipping path using Photoshop Pen Tool to have the best output.
 Depending on the degree or complexity of the image to be clipped we set the pricing.</p>
 <div class="mt-4"></div>
<ul>
<li>
<i class="fa fa-check available">We have the best output</i>
</li>
<li>
<i class="fa fa-check available">We have the best output</i>
</li>
<li>
<i class="fa fa-check available">We have the best output</i>
</li>
<li>
<i class="fa fa-check available">We have the best output</i>
</li>
</ul>
 
 <button class="hvr-outline-out button2 btn-lear">Learn More</button>
                <div>
            </div>
    </div>
</div>
</div>


	    <!-- HTML Code start -->
		<section class='content'>
		  <div class="container">
			<div class="row-fluid clearfix">
			  
			  <div class="pricing-wrapper comparison-table clearfix style-3">
				
			
		
				<div class="col-md-3 pricing-col person">
				  <div class="pricing-card">
					<div class="pricing-header">
					  <h5>BASIC</h5>
					  <div class="price-box">
						<div class="price">29
						  <div class="currency">$</div>
						  <div class="plan">/ Mo</div>
						</div>
					  </div>
					</div>
					<div class="pricing-feature">
					  <li>
						<p>
						  <i class="fa fa-check available"></i>
						</p>
					  </li>
					  <li>
						<p>
						  <span>50 GB</span>
						</p>
					  </li>
					  <li>
						<p>
						  <span>50</span>
						</p>
					  </li>
					  <li>
						<p>
						  <span>5</span>
						</p>
					  </li>
					  <li>
						<p>
						  <span>10</span>
						</p>
					  </li>
					  <li>
						<p>
						  <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					  <li>
						<p>
						  <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					  <li>
						<p>
						  <span>25 GB</span>
						</p>
					  </li>
					</div>
					<div class="pricing-footer">
					  <a href="#" class="btn btn-act rounded btn-line">
						<span>Order Now</span>
						<i class="fa fa-arrow-right"></i>
					  </a>
					</div>
				  </div>
                </div>
                
				<div class="col-md-3 pricing-col current unlim">
				  <div class="pricing-card">
					<div class="pricing-header">
					  <h5>Standard</h5>
					  <a href="" class="ribbon">
						<i class="fa fa-star"></i>
						<span>Feature</span>
					  </a>
					  <div class="price-box">
						<div class="price">49
						  <div class="currency">$</div>
						  <div class="plan">/ Mo</div>
						</div>
					  </div>
					</div>
					<div class="pricing-feature">
					  <li>
						<p>
						  <i class="fa fa-check available"></i>
						</p>
					  </li>
					  <li>
						<p>
						  <span>150 GB</span>
						</p>
					  </li>
					  <li>
						<p>
						  <span>150</span>
						</p>
					  </li>
					  <li>
						<p>
						  <span>15</span>
						</p>
					  </li>
					  <li>
						<p>
						  <span>20</span>
						</p>
					  </li>
					  <li>
						<p>
						  <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					  <li>
						<p>
						  <i class="fa fa-check available"></i>
						</p>
					  </li>
					  <li>
						<p>
						  <span>50 GB</span>
						</p>
					  </li>
					</div>
					<div class="pricing-footer">
					  <a href="#" class="btn btn-act rounded btn-line">
						<span>Order Now</span>
						<i class="fa fa-arrow-right"></i>
					  </a>
					</div>
				  </div>
                </div>
                
                <div class="col-md-3 pricing-col current unlim">
				  <div class="pricing-card">
					<div class="pricing-header">
					  <h5>Standard</h5>
					  <a href="" class="ribbon">
						<i class="fa fa-star"></i>
						<span>Feature</span>
					  </a>
					  <div class="price-box">
						<div class="price">49
						  <div class="currency">$</div>
						  <div class="plan">/ Mo</div>
						</div>
					  </div>
					</div>
					<div class="pricing-feature">
					  <li>
						<p>
						  <i class="fa fa-check available"></i>
						</p>
					  </li>
					  <li>
						<p>
						  <span>150 GB</span>
						</p>
					  </li>
					  <li>
						<p>
						  <span>150</span>
						</p>
					  </li>
					  <li>
						<p>
						  <span>15</span>
						</p>
					  </li>
					  <li>
						<p>
						  <span>20</span>
						</p>
					  </li>
					  <li>
						<p>
						  <i class="fa fa-times unavailable"></i>
						</p>
					  </li>
					  <li>
						<p>
						  <i class="fa fa-check available"></i>
						</p>
					  </li>
					  <li>
						<p>
						  <span>50 GB</span>
						</p>
					  </li>
					</div>
					<div class="pricing-footer">
					  <a href="#" class="btn btn-act rounded btn-line">
						<span>Order Now</span>
						<i class="fa fa-arrow-right"></i>
					  </a>
					</div>
				  </div>
				</div>



				<div class="col-md-3 pricing-col business">
				  <div class="pricing-card">
					<div class="pricing-header">
					  <h5>Unlimited</h5>
					  <div class="price-box">
						<div class="price">99
						  <div class="currency">$</div>
						  <div class="plan">/ Mo</div>
						</div>
					  </div>
					</div>
					<div class="pricing-feature">
					  <li>
						<p>
						  <i class="fa fa-check available"></i>
						</p>
					  </li>
					  <li>
						<p>
						  <span>300 GB</span>
						</p>
					  </li>
					  <li>
						<p>
						  <span>300</span>
						</p>
					  </li>
					  <li>
						<p>
						  <span>30</span>
						</p>
					  </li>
					  <li>
						<p>
						  <span>50</span>
						</p>
					  </li>
					  <li>
						<p>
						  <i class="fa fa-check available"></i>
						</p>
					  </li>
					  <li>
						<p>
						  <i class="fa fa-check available"></i>
						</p>
					  </li>
					  <li>
						<p>
						  <span>Unlimitied</span>
						</p>
					  </li>
					</div>
					<div class="pricing-footer">
					  <a href="#" class="btn btn-act rounded btn-line">
						<span>Order Now</span>
						<i class="fa fa-arrow-right"></i>
					  </a>
					</div>
				  </div>
				</div>
			  </div>

			</div>
		  </div>
		</section>
