<?php
// adds images loaded js and a lazy loading function

function lazy_script() {
	wp_enqueue_script( 'images-loaded', 'https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js', array('jquery'), null, true );
}

add_action( 'wp_enqueue_scripts', 'lazy_script' );




function lazy_js(){
	?>
<style type="text/css">
.lazy-image{
}
.lazy-img{
    -webkit-transition: opacity 0.4s ease, -webkit-filter 0.4s ease, -webkit-transform 0.05s ease !important;
    transition: opacity 0.4s ease, -webkit-filter 0.4s ease, -webkit-transform 0.05s ease !important;
    transition: filter 0.4s ease, opacity 0.4s ease, transform 0.05s ease !important;
    transition: filter 0.4s ease, opacity 0.4s ease, transform 0.05s ease, -webkit-filter 0.4s ease, -webkit-transform 0.05s ease !important;
    -webkit-filter: blur(10px);
    opacity: 0.7;
}
.lazy-img.loaded{
    opacity: 1;
    filter:none;
    webkit-filter: none;
  }
</style>
<script type="text/javascript">
	//lazyload setup
var lazyImages;
var lazyActive;

function lazyInit(){
	// console.log('lazy init');
	lazyImages = [].slice.call(document.querySelectorAll(".lazy-image"));
	lazyActive = false;
	document.addEventListener("scroll", lazyLoad);
  	window.addEventListener("resize", lazyLoad);
  	window.addEventListener("orientationchange", lazyLoad);
};
 
 function lazyLoad() {
    if (lazyActive === false) {
      lazyActive = true;

      setTimeout(function() {
        lazyImages.forEach(function(lazyImage) {
          if ((lazyImage.getBoundingClientRect().top <= window.innerHeight && lazyImage.getBoundingClientRect().bottom >= 0) && getComputedStyle(lazyImage).display !== "none") {

            lazyImage.src = lazyImage.dataset.src;
           
			function onAlways( instance ) {
			  // console.log('image has loaded');
			  lazyImage.classList.add("loaded");
              lazyImage.classList.remove("lazy-image");
			}

			var imgLoad = imagesLoaded( lazyImage );
			imgLoad.on( 'always', onAlways );

            lazyImages = lazyImages.filter(function(image) {
              return image !== lazyImage;
            });

            if (lazyImages.length === 0) {
              document.removeEventListener("scroll", lazyLoad);
              window.removeEventListener("resize", lazyLoad);
              window.removeEventListener("orientationchange", lazyLoad);
            }
          }
        });

        lazyActive = false;
      }, 200);
    }
  };

  jQuery(document).ready(function(){
  	lazyInit();
  	lazyLoad();
  });




</script>
	<?php
}

add_action('wp_footer', 'lazy_js');

function the_lazy_image($image = '', $imgsmall = '', $alt = 'Image', $class = ''){

$string = "<img src='$imgsmall' data-src='$image' alt='$alt' class='lazy-image lazy-img $class'>";

echo $string;

}

