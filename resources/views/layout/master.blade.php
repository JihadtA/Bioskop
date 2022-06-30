<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Beranda | Bioskop</title>
		<meta name="description" content="Some ideas for CSS-only button hover styles and animations" />
		<meta name="keywords" content="button, hover, css, css-only, animation, style, web design" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" > 
		<link rel="stylesheet" href="https://use.typekit.net/rnz2bks.css">
		<link rel="stylesheet" type="text/css" href="css/base.css" />
		<script>
      document.documentElement.className="js";
      var supportsCssVars=function(){
        var e,t=document.createElement("style");
        return t.innerHTML="root: { --tmp-var: bold; }",
        document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),
        t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");
    </script>
		<script src="//tympanus.net/codrops/adpacks/analytics.js"></script>
		<style>
			body #cdawrap {
				border: 1px solid #000;
				--cda-bottom: auto;
				--cda-right: 3.5rem;
				--cda-left: auto;
				--cda-text-align: right;
				--cda-width: 370px;
				border-radius: 6px;
				padding: 0.75rem 1rem 1rem;
				--footer-align: end;
				--cda-text-size: 0.875rem;
				--cda-footer-fontsize: 0.785rem;
				--cda-text-color: #000;
				position: absolute;
				transform: translateY(-150%);
			}
			@media screen and (max-width: 800px){
				body #cdawrap {
					transform: none;
					border-radius: 0px;
				}
			}
		</style>
	</head>
	<body class="demo-1" style="background-color: #f3f2f2">
		<div class="container">
        <div class="mt-4">
          <h1 class="text-center">BIOSKOP</h1>
          <img src="img/bg.svg" class="img-fluid mx-auto d-block" width="60%">
        </div>
        <div class="text-center">
          <div class="row">
            <div class="col">
              <form action="{{ route('bioskop.index') }}">
                <small><button class="button button--hyperion rounded mr-3 mt-2"><span><span>Bioskop</span></span></button></small>
              </form>
            </div>
            <div class="col">
              <form action="{{ route('tiket.index') }}">
                <button class="button button--pan"><span>Tiket</span></button>
              </form>
            </div>
            <div class="col mb-5">
              <form action="{{ route('film.index') }}">
                <small>
                  <button class="button button--hyperion rounded ml-3 mt-2"><span><span>Film</span></span></button>
                </small>
              </form>
            </div>
          </div>
        </div>
    <div class="container">
	</body>
  <script src="https://tympanus.net/codrops/adpacks/cda.js"></script>
</html>
