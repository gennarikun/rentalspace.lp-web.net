<footer class="section siteFooter">
<div class="footerMenu">
<div class="container">
<nav class="menu-%e3%81%ad%e3%82%b3%e3%83%af%e3%83%bc%e3%82%ad%e3%83%b3%e3%82%b0%e3%82%b9%e3%83%9a%e3%83%bc%e3%82%b9%e5%a7%8b%e3%82%81%e3%81%be%e3%81%99-container">
<ul class="menu nav" id="menu-%e3%81%ad%e3%82%b3%e3%83%af%e3%83%bc%e3%82%ad%e3%83%b3%e3%82%b0%e3%82%b9%e3%83%9a%e3%83%bc%e3%82%b9%e5%a7%8b%e3%82%81%e3%81%be%e3%81%99-1">
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5995" id="menu-item-5995"><a href="/weekend-staff">猫と遊ぶとご飯無料！</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5942" id="menu-item-5942"><a href="/contact">お問い合わせ</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5915" id="menu-item-5915"><a href="/gallery">ギャラリー</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5976" id="menu-item-5976"><a href="/reviews">お客様の声</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5899" id="menu-item-5899"><a href="/aboutus">経営理念</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-5938" id="menu-item-5938"><a href="/">トップ</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6001" id="menu-item-6001"><a href="https://houtoutaiken.lp-web.net/recruit/">求人募集</a></li>
</ul>
</nav>
</div>
</div>
<div class="container sectionBox copySection text-center">
<p>Copyright © 河口湖の無料の保護猫カフェ・コミュニティスペース【アトリエ高菜先生】 All Rights Reserved.</p>
</div>
</footer>
<div class="vk-mobile-nav-menu-btn" id="vk-mobile-nav-menu-btn">MENU</div>
<div class="vk-mobile-nav vk-mobile-nav-drop-in" id="vk-mobile-nav">
<nav class="vk-mobile-nav-menu-outer" role="navigation">
<ul class="vk-menu-acc menu" id="menu-%e3%81%ad%e3%82%b3%e3%83%af%e3%83%bc%e3%82%ad%e3%83%b3%e3%82%b0%e3%82%b9%e3%83%9a%e3%83%bc%e3%82%b9%e5%a7%8b%e3%82%81%e3%81%be%e3%81%99-2">
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5995"><a href="/weekend-staff"><i class="fa-solid fa-utensils"></i> ご飯無料ボランティア</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5942"><a href="/contact"><i class="fa-solid fa-envelope"></i> お問い合わせ</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5915"><a href="/gallery"><i class="fa-solid fa-images"></i> ギャラリー</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5976"><a href="/reviews"><i class="fa-solid fa-comment-dots"></i> お客様の声</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5899"><a href="/aboutus"><i class="fa-solid fa-lightbulb"></i> 経営理念</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-5938"><a href="/"><i class="fa-solid fa-house"></i> トップ</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6001"><a href="https://houtoutaiken.lp-web.net/recruit/"><i class="fa-solid fa-briefcase"></i> 求人募集</a></li>
</ul>
</nav>
</div>
<script type="text/javascript">
var lightningOpt = {"header_scrool":"1"};

// Hamburger menu reliable toggle logic
document.addEventListener("DOMContentLoaded", function() {
    var toggleBtn = document.getElementById("vk-mobile-nav-menu-btn");
    var mobNav = document.getElementById("vk-mobile-nav");
    if (toggleBtn && mobNav) {
        toggleBtn.addEventListener("click", function(e) {
            e.preventDefault();
            e.stopPropagation();
            if (toggleBtn.classList.contains("menu-open")) {
                toggleBtn.classList.remove("menu-open");
                mobNav.classList.remove("vk-mobile-nav-open");
            } else {
                toggleBtn.classList.add("menu-open");
                mobNav.classList.add("vk-mobile-nav-open");
            }
        });
        
        // Close menu when clicking on a link
        var navLinks = mobNav.querySelectorAll("li > a");
        navLinks.forEach(function(link) {
            link.addEventListener("click", function() {
                toggleBtn.classList.remove("menu-open");
                mobNav.classList.remove("vk-mobile-nav-open");
            });
        });
    }
});
</script>
</body>
</html>
