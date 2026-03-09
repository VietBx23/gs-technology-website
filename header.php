<?php
/**
 * Header template.
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.16.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="<?php flatsome_html_classes(); ?>">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
<script>
 window.addEventListener('scroll', () => {
    const topLink = document.getElementById('top-link');
    if (!topLink) return;

    // Tính % cuộn: (Vị trí hiện tại / (Tổng chiều cao - Chiều cao màn hình)) * 100
    const winScroll = window.scrollY;
    const height = document.documentElement.scrollHeight - window.innerHeight;
    const scrolled = (winScroll / height) * 100;

    // Truyền giá trị vào CSS Variable
    topLink.style.setProperty('--scroll-percent', scrolled + '%');

    // Logic hiện/ẩn nút
    if (winScroll > 300) {
        topLink.classList.add('active');
        topLink.style.display = "flex";
    } else {
        topLink.classList.remove('active');
        topLink.style.display = "none";
    }
});

// Click mượt mà
document.getElementById('top-link').onclick = () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
};



  </script>		

<style>
/* container */
.title-run-slide{
  overflow:hidden;
  white-space:nowrap;
  width:100%;
  position:relative;
}

/* track chạy */
.title-run-slide .title-run-track{
  display:flex;
  width:max-content;
  animation:titleMarquee 90s linear infinite;
}

/* text chạy */
.title-run-slide .title-run-track span{
  font-size:70px;
  font-weight:700;
  text-transform:uppercase;
  color:#ffffff;
  margin-right:120px;
  letter-spacing:3px;
  white-space:nowrap;
}

/* animation */
@keyframes titleMarquee{
  from{
    transform:translateX(0);
  }
  to{
    transform:translateX(-50%);
  }
}
</style>


<script>
document.addEventListener("DOMContentLoaded", function(){

  const container = document.querySelector(".title-run-slide");
  if(!container) return;

  const text = "GLOBAL SUCCESS – DIGITAL MARKETING AGENCY";

  const track = document.createElement("div");
  track.className = "title-run-track";

  let html = "";

  for(let i = 0; i < 12; i++){
    html += "<span>" + text + "</span>";
  }

  track.innerHTML = html;

  container.innerHTML = "";
  container.appendChild(track);

});
</script>

<script>
(function() {
    let observer;

    var checkJQuery = setInterval(function() {
        if (window.jQuery) {
            clearInterval(checkJQuery);
            initAll();
        }
    }, 100);

    function initAll() {
        const $ = window.jQuery;
        startSliderLogic($);

        // BẮT SỰ KIỆN KHI THAY ĐỔI GIAO DIỆN (Tablet/Mobile/PC)
        let resizeTimer;
        $(window).on('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                console.log("🔄 [Slider]: Giao diện thay đổi, cập nhật lại bộ đếm...");
                startSliderLogic($);
            }, 250);
        });
    }

    function startSliderLogic($) {
        // Xóa observer cũ nếu có để tránh lặp bộ nhớ
        if (observer) observer.disconnect();

        let retry = 0;
        let searchInterval = setInterval(function() {
            const $sliderCon = $('.news-slide-blog');
            const $dotsWrap = $sliderCon.find('.flickity-page-dots');
            
            if ($sliderCon.length > 0 && $dotsWrap.find('.dot').length > 0) {
                clearInterval(searchInterval);
                setupCustomNav($sliderCon, $dotsWrap, $);
            } else if (retry > 10) {
                clearInterval(searchInterval);
            }
            retry++;
        }, 300);
    }

    function setupCustomNav($el, $dotsWrap, $) {
        // Nếu đã có nav rồi thì chỉ cập nhật lại số, không tạo mới
        let $nav = $el.parent().find('.custom-flickity-nav');
        if ($nav.length === 0) {
            const arrowLeft = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2"><polyline points="15 18 9 12 15 6"></polyline></svg>';
            const arrowRight = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2"><polyline points="9 18 15 12 9 6"></polyline></svg>';

            const navHTML = `
                <div class="custom-flickity-nav">
                    <button class="nav-btn prev-btn" type="button" aria-label="Previous">${arrowLeft}</button>
                    <div class="custom-slide-counter"></div>
                    <button class="nav-btn next-btn" type="button" aria-label="Next">${arrowRight}</button>
                </div>`;
            $el.after(navHTML);
            $nav = $el.parent().find('.custom-flickity-nav');

            $nav.find('.prev-btn').on('click', function(e) {
                e.preventDefault();
                $el.find('.flickity-prev-next-button.previous').click();
            });

            $nav.find('.next-btn').on('click', function(e) {
                e.preventDefault();
                $el.find('.flickity-prev-next-button.next').click();
            });
        }

        const updateCounter = function() {
            const allDots = $el.find('.flickity-page-dots .dot');
            const total = allDots.length;
            const selectedIndex = allDots.filter('.is-selected').index() + 1;
            
            if (selectedIndex > 0) {
                $nav.find('.custom-slide-counter').html(
                    `<span>${selectedIndex}</span><span class="of-text"> of </span><span>${total}</span>`
                );
            }
        };

        // Kết nối lại Observer với vùng chứa dots mới
        observer = new MutationObserver(updateCounter);
        observer.observe($dotsWrap[0], { attributes: true, subtree: true, attributeFilter: ['class'] });

        // Cập nhật ngay lập tức
        updateCounter();
    }
})();
</script>
<script> 
document.querySelectorAll('.counter-reviews').forEach(counter => {

let target = parseInt(counter.dataset.target.replace(/,/g, ''));
let suffix = counter.dataset.suffix || '';
let count = 0;

function updateCounter(){

count += Math.ceil(target / 80);

if(count > target){
count = target;
}

counter.innerText = count.toLocaleString() + suffix;

if(count < target){
requestAnimationFrame(updateCounter);
}

}

updateCounter();

});
</script>
<style>
/* Ẩn mặc định */
.slide-blog-home .flickity-page-dots,
.slide-blog-home .flickity-prev-next-button {
    display: none !important;
}

.slide-blog-home {
    position: relative;
    /* Giữ padding để slider không bị mất chân, nhưng có thể giảm xuống nếu muốn cụm nút sát slide hơn */
    padding-bottom: 60px !important; 
}

/* Container điều hướng */
.custom-flickity-nav {
    position: absolute;
    /* Đẩy lên bằng cách tăng số px này (ví dụ 40px, 50px...) */
    bottom: 70px; 
    left: 0;
    display: flex;
    align-items: center;
    gap: 15px;
    z-index: 10;
    /* Nếu muốn dùng số âm để đè hẳn lên trên, bạn có thể dùng: margin-bottom: -10px; */
}
/* --- TABLET (Màn hình trung bình) --- */
@media (min-width: 550px) and (max-width: 849px) {
    .custom-flickity-nav {
        position: relative;
        bottom: 0; /* Trả về vị trí tự nhiên bên dưới slider */
        margin-top: -130px;
        justify-content: center; /* Căn giữa cho cân đối */
    }
    .slide-blog-home {
        padding-bottom: 40px !important;
    }
}

/* --- MOBILE (Màn hình nhỏ) --- */
@media (max-width: 549px) {
    .custom-flickity-nav {
        position: relative;
        bottom: 0;
        margin-top: -45px;
        justify-content: center;
        gap: 10px; /* Thu hẹp khoảng cách nút một chút */
    }
    .custom-slide-counter {
        font-size: 18px; /* Giảm nhẹ font size cho mobile */
    }
    .nav-btn {
        width: 36px; /* Nút nhỏ hơn một chút trên phone */
        height: 36px;
    }
    .slide-blog-home {
        padding-bottom: 30px !important;
    }
}

/* Nút bấm tròn thanh mảnh - Giống ảnh mẫu 100% */
.nav-btn {
    background: transparent;
    border: 1px solid #ccc; /* Màu viền xám trung tính */
    border-radius: 50%;
    width: 40px;
    height: 40px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0;
    margin: 0;
    transition: all 0.2s ease;
    outline: none;
}

.nav-btn:hover {
    background: #f5f5f5;
    border-color: #000;
}

/* Icon mũi tên mảnh dạng Stroke */
.nav-btn svg {
    width: 18px;
    height: 18px;
    fill: none;
    stroke: #333;
    stroke-width: 1.5; /* Độ mảnh của mũi tên */
    stroke-linecap: round;
    stroke-linejoin: round;
}

/* Bộ đếm số 1 of 4 */
.custom-slide-counter {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
    font-size: 20px;
    color: #333;
    display: flex;
    align-items: center;
    user-select: none;
    line-height: 1;
}

.custom-slide-counter .of-text {
    font-weight: 300;
    margin: 0 8px;
    font-size: 16px;
    color: #888;
}

.custom-slide-counter span:not(.of-text) {
    font-weight: 400;
}
</style>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'flatsome_after_body_open' ); ?>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'flatsome' ); ?></a>

<div id="wrapper">

	<?php do_action( 'flatsome_before_header' ); ?>

	<header id="header" class="header <?php flatsome_header_classes(); ?>">
		<div class="header-wrapper">
			<?php get_template_part( 'template-parts/header/header', 'wrapper' ); ?>
		</div>
	</header>

	<?php do_action( 'flatsome_after_header' ); ?>

	<main id="main" class="<?php flatsome_main_classes(); ?>">
