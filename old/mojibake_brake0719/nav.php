<style>

html, body {
  overflow-x: hidden !important;
}




nav {
  display: none;
  flex-direction: column;
  background-color: #2e2e3a;
  width: 100%;
  position: fixed; 
  top: 0;           
  left: 0;          
  height: 100vh;    
  height: 100dvh;
  z-index: 9999;   
  overflow-y: auto; 
}

nav a {
    padding: 1rem 5rem;
  text-decoration: none;
  color: #ffe4b5;
  border-top: 1px solid #3f3f52;
}

.menu-toggle {
  font-size: 1.8rem;
  cursor: pointer;
  position: absolute;
  top: 1rem;
  right: 3rem;
  color: #fff;
  z-index: 10000; 
}

.show {
  display: flex;  align-items: center; 
}

@media screen and (max-width: 1000px) {
.menu-toggle {
/*  position:relative;
        right: calc(-100% + 2rem);*/
  }

  h1{
    font-size: 1rem!important;
    text-align: center!important;
  }
}
}
</style>

<div class="menu-toggle" id="menuIcon" onclick="toggleMenu()">&#x2630;</div>

<nav id="menu" aria-label="繧ｰ繝ｭ繝ｼ繝舌Ν繝｡繝九Η繝ｼ">
  <div class="nav-parallax-bg" style="position: sticky; top: 0; z-index: 100; text-align: center; margin: 0; width: 100%; background-image: url('https://images.unsplash.com/photo-1462331940025-496dfbfc7564?q=80&w=2048&auto=format&fit=crop'); background-size: cover; background-position: center; padding: 4rem 1rem 5.5rem 1rem; box-sizing: border-box;">
    <a href="https://evitadesignart.com/tarotte_list.php" style="font-family: 'Noto Serif JP', 'Yu Mincho', 'YuMincho', serif; font-size: 1.5rem; text-decoration: none; color: #fff; border: none; padding: 0; display: inline-block; line-height: 1.4; text-shadow: 0 2px 4px rgba(0,0,0,0.8);">蜊縺・い繝ｫ繧ｫ繝弱Χ繧｡<br><span style="font-size: 0.8rem; font-style: italic; font-weight: normal; letter-spacing: 0.05em; display: inline-block; margin-bottom: 1rem;">驕句多繧偵ョ繧ｶ繧､繝ｳ縺吶ｋ</span></a>
  </div>
  <a href="https://evitadesignart.com/tarotte_list.php" title="蜊縺・ｸ隕ｧ繝壹・繧ｸ">TOP</a>
  <a href="https://evitadesignart.com/tarotte7.php" title="繧ｿ繝ｭ繝・ヨ縺ｨ譏溷ｺｧ縺ｧ莉企ｱ縺ｮ驕句兇">莉企ｱ縺ｮ驕句兇(繧ｿ繝ｭ繝・ヨ&譏溷ｺｧ)</a>
  <a href="https://evitadesignart.com/tarotte5.php" title="繧ｿ繝ｭ繝・ヨ縺ｨ譏溷ｺｧ縺ｧ莉頑怦縺ｮ驕句兇">莉頑怦縺ｮ驕句兇(繧ｿ繝ｭ繝・ヨ&譏溷ｺｧ)</a>
  <a href="https://evitadesignart.com/tarotte6.php" title="繧ｿ繝ｭ繝・ヨ縺ｨ譏溷ｺｧ縺ｧ莉雁ｹｴ縺ｮ驕句兇">莉雁ｹｴ縺ｮ驕句兇(繧ｿ繝ｭ繝・ヨ&譏溷ｺｧ)</a>
  <a href="https://evitadesignart.com/tarotte2.php" title="螟ｧ繧｢繝ｫ繧ｫ繝・譫壼頃縺・>繧ｿ繝ｭ繝・ヨ螟ｧ繧｢繝ｫ繧ｫ繝・譫壼頃縺・/a>
  <a href="https://evitadesignart.com/tarotte4.php" title="螟ｧ繧｢繝ｫ繧ｫ繝・譫壼頃縺・>繧ｿ繝ｭ繝・ヨ螟ｧ繧｢繝ｫ繧ｫ繝・譫壼頃縺・/a>
  <a href="https://evitadesignart.com/tarotte.php" title="螟ｧ繧｢繝ｫ繧ｫ繝・譫壼頃縺・>繧ｿ繝ｭ繝・ヨ螟ｧ繧｢繝ｫ繧ｫ繝・譫壼頃縺・/a>
  <a href="https://evitadesignart.com/tarotte9.php" title="逶ｸ謇九→閾ｪ蛻・・2譫壼頃縺・>繧ｿ繝ｭ繝・ヨ2譫夂嶌謇九→閾ｪ蛻・頃縺・/a>
  <a href="https://evitadesignart.com/tarotte8.php" title="諱区・縺ｫ迚ｹ蛹悶＠縺・譫壼頃縺・>繧ｿ繝ｭ繝・ヨ3譫壽°諢帛頃縺・/a>
  <a href="https://evitadesignart.com/tarotte3.php" title="蟆上い繝ｫ繧ｫ繝雁頃縺・>繧ｿ繝ｭ繝・ヨ蟆上い繝ｫ繧ｫ繝雁頃縺・/a>
  <a href="https://evitadesignart.com/tarotte10.php" title="繧｢繝ｫ繧ｫ繝願ｨｺ譁ｭ">縺ゅ↑縺溘・繧｢繝ｫ繧ｫ繝願ｨｺ譁ｭ</a>
  <a href="https://evitadesignart.com/tarotte11.php" title="繧ｿ繝ｼ繝九Φ繧ｰ繝昴う繝ｳ繝亥頃縺・>繧ｿ繝ｼ繝九Φ繧ｰ繝昴う繝ｳ繝亥頃縺・/a>
  <a href="https://evitadesignart.com/tarotte12.php" title="YESNO繝ｯ繝ｳ繧ｫ繝ｼ繝牙頃縺・>YES繝ｻNO繝ｯ繝ｳ繧ｫ繝ｼ繝牙頃縺・/a>
  <a href="https://evitadesignart.com/zodiac.php" title="螟ｪ髯ｽ譏溷ｺｧ縺ｮ蜊縺・>譏溷ｺｧ蜊縺・螟ｪ髯ｽ譏溷ｺｧ)</a>
  <a href="https://evitadesignart.com/zodiac2.php" title="譛域弌蠎ｧ縺ｮ蜊縺・>譏溷ｺｧ蜊縺・譛域弌蠎ｧ)</a>
  <a href="https://evitadesignart.com/zodiac3.php" title="繧｢繧ｻ繝ｳ繝繝ｳ繝医・譏溷ｺｧ蜊縺・>譏溷ｺｧ蜊縺・繧｢繧ｻ繝ｳ繝繝ｳ繝・</a>
  <a href="https://evitadesignart.com/color24.php" title="24濶ｲ縺九ｉ蜊縺・ｧ譬ｼ險ｺ譁ｭ">24縺ｮ濶ｲ蜊縺・/a>
  <a href="https://evitadesignart.com/engel.php" title="繧ｨ繝ｳ繧ｸ繧ｧ繝ｫ繝翫Φ繝舌・繧ｬ繧､繝・>繧ｨ繝ｳ繧ｸ繧ｧ繝ｫ繝翫Φ繝舌・繧ｬ繧､繝・/a>
  <div class="nav-parallax-bg" style="text-align: center; margin: 0 0 1rem 0; width: 100%; background-image: url('https://images.unsplash.com/photo-1462331940025-496dfbfc7564?q=80&w=2048&auto=format&fit=crop'); background-size: cover; background-position: center; padding: 3rem 1rem 6rem 1rem; box-sizing: border-box;">
    <a href="https://evitadesignart.com" style="font-size: 0.9rem; text-decoration: none; color: #ccc; border: none; padding: 0; display: inline; text-shadow: 0 1px 3px rgba(0,0,0,0.8);">驕句霧 EvitaDesignart</a>
  </div>
</nav>

<script>
function toggleMenu() {
  const menu = document.getElementById('menu');
  const icon = document.getElementById('menuIcon');
  menu.classList.toggle('show');
  icon.innerHTML = menu.classList.contains('show') ? '&#x2715;' : '&#x2630;';
}
</script>

<script>
// SP螳滓ｩ溷ｯｾ蠢懶ｼ壼ｮ悟・蝗ｺ螳夊レ譎ｯ・医せ繧ｯ繝ｭ繝ｼ繝ｫ逶ｸ谿ｺ繧｢繝ｫ繧ｴ繝ｪ繧ｺ繝・・- 蜈ｨ繝壹・繧ｸ蜈ｱ騾・
document.addEventListener("DOMContentLoaded", function() {
  const parallaxSections = document.querySelectorAll('.parallax-bg-section, .nav-parallax-bg');
  
  parallaxSections.forEach(section => {
    const bgImage = section.style.backgroundImage;
    if (bgImage && bgImage !== 'none') {
      section.style.backgroundImage = 'none';
      section.style.backgroundAttachment = 'scroll';
      
      const currentPos = window.getComputedStyle(section).position;
      if(currentPos === 'static') section.style.position = 'relative';
      section.style.overflow = 'hidden';
      section.style.isolation = 'isolate'; 
      
      const bgLayer = document.createElement('div');
      bgLayer.style.position = 'absolute';
      bgLayer.style.top = '0';
      bgLayer.style.left = '0';
      bgLayer.style.width = '100%';
      bgLayer.style.height = '100vh';
      bgLayer.style.backgroundImage = bgImage;
      bgLayer.style.backgroundSize = 'cover';
      bgLayer.style.backgroundPosition = 'center';
      bgLayer.style.zIndex = '-1';
      bgLayer.style.pointerEvents = 'none';
      bgLayer.style.willChange = 'transform';
      
      section.insertBefore(bgLayer, section.firstChild);
      section._parallaxBg = bgLayer;
    }
  });

  let ticking = false;
  function updateParallax() {
    parallaxSections.forEach(section => {
      const bgLayer = section._parallaxBg;
      if (bgLayer) {
        const rect = section.getBoundingClientRect();
        if (rect.height === 0) return;
        bgLayer.style.transform = `translate3d(${-rect.left}px, ${-rect.top}px, 0)`;
      }
    });
  }

  window.addEventListener('scroll', function() {
    if (!ticking) {
      window.requestAnimationFrame(function() {
        updateParallax();
        ticking = false;
      });
      ticking = true;
    }
  }, { passive: true });
  
  const navMenu = document.getElementById('menu');
  if (navMenu) {
    navMenu.addEventListener('scroll', function() {
      if (!ticking) {
        window.requestAnimationFrame(function() {
          updateParallax();
          ticking = false;
        });
        ticking = true;
      }
    }, { passive: true });
    
    const observer = new MutationObserver((mutations) => {
      mutations.forEach((mutation) => {
        if (mutation.attributeName === 'class') {
          updateParallax();
        }
      });
    });
    observer.observe(navMenu, { attributes: true });
  }
  
  updateParallax();
  setTimeout(updateParallax, 500);
});
</script>

<script src="ga4_events.js"></script>