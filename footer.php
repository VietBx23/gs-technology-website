<?php
/**
 * The template for displaying the footer.
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.16.0
 */

global $flatsome_opt;
?>

</main>

<footer id="footer" class="footer-wrapper">

	<?php do_action('flatsome_footer'); ?>

</footer>

</div>
<script>
	document.addEventListener("DOMContentLoaded", function () {

  const counters = document.querySelectorAll('.counter');

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {

      if(entry.isIntersecting){

        const el = entry.target;
        const target = parseInt(el.dataset.target);
        const suffix = el.dataset.suffix;

        let count = 0;
        const duration = 1200;
        const step = target / (duration / 16);

        function update(){
          count += step;

          if(count < target){
            el.innerText = Math.floor(count) + suffix;
            requestAnimationFrame(update);
          } else {
            el.innerText = target + suffix;
          }
        }

        update();
        observer.unobserve(el);

      }

    });
  }, { threshold: 0.5 });

  counters.forEach(counter => observer.observe(counter));

});
	</script>
  <script>
(function () {

function moveDashboardRight() {

    const dashboards = document.querySelectorAll(".jj-dashboard-wrapper");

    dashboards.forEach(function(wrapper){

        wrapper.style.display = "flex";
        wrapper.style.justifyContent = "flex-end";
        wrapper.style.alignItems = "center";
        wrapper.style.width = "100%";
        wrapper.style.paddingRight = "80px";

    });

}


/* chạy sau khi toàn bộ trang load */
window.addEventListener("load", function () {
    setTimeout(moveDashboardRight, 800);
});

/* nếu slider thay đổi thì chạy lại */
document.addEventListener("DOMContentLoaded", function () {

    const slider = document.querySelector(".slider");

    if(slider){
        slider.addEventListener("settle.flickity", moveDashboardRight);
    }

});

})();
</script>
<?php wp_footer(); ?>

</body>
</html>
