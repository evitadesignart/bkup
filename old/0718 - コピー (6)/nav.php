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

<nav id="menu" aria-label="グローバルメニュー">
  <div class="nav-parallax-bg" style="position: sticky; top: 0; z-index: 100; text-align: center; margin: 0; width: 100%; background-image: url('https://images.unsplash.com/photo-1462331940025-496dfbfc7564?q=80&w=2048&auto=format&fit=crop'); background-size: cover; background-position: center; padding: 4rem 1rem 5.5rem 1rem; box-sizing: border-box;">
    <a href="https://evitadesignart.com/tarotte_list.php" style="font-family: 'Noto Serif JP', 'Yu Mincho', 'YuMincho', serif; font-size: 1.5rem; text-decoration: none; color: #fff; border: none; padding: 0; display: inline-block; line-height: 1.4; text-shadow: 0 2px 4px rgba(0,0,0,0.8);">占いアルカノヴァ<br><span style="font-size: 0.8rem; font-style: italic; font-weight: normal; letter-spacing: 0.05em; display: inline-block; margin-bottom: 1rem;">運命をデザインする</span></a>
  </div>
  <a href="https://evitadesignart.com/tarotte_list.php" title="占い一覧ページ">TOP</a>
  <a href="https://evitadesignart.com/tarotte7.php" title="タロットと星座で今週の運勢">今週の運勢(タロット&星座)</a>
  <a href="https://evitadesignart.com/tarotte5.php" title="タロットと星座で今月の運勢">今月の運勢(タロット&星座)</a>
  <a href="https://evitadesignart.com/tarotte6.php" title="タロットと星座で今年の運勢">今年の運勢(タロット&星座)</a>
  <a href="https://evitadesignart.com/tarotte2.php" title="大アルカナ1枚占い">タロット大アルカナ1枚占い</a>
  <a href="https://evitadesignart.com/tarotte4.php" title="大アルカナ2枚占い">タロット大アルカナ2枚占い</a>
  <a href="https://evitadesignart.com/tarotte.php" title="大アルカナ3枚占い">タロット大アルカナ3枚占い</a>
  <a href="https://evitadesignart.com/tarotte9.php" title="相手と自分の2枚占い">タロット2枚相手と自分占い</a>
  <a href="https://evitadesignart.com/tarotte8.php" title="恋愛に特化した3枚占い">タロット3枚恋愛占い</a>
  <a href="https://evitadesignart.com/tarotte3.php" title="小アルカナ占い">タロット小アルカナ占い</a>
  <a href="https://evitadesignart.com/tarotte10.php" title="アルカナ診断">あなたのアルカナ診断</a>
  <a href="https://evitadesignart.com/tarotte11.php" title="ターニングポイント占い">ターニングポイント占い</a>
  <a href="https://evitadesignart.com/tarotte12.php" title="YESNOワンカード占い">YES・NOワンカード占い</a>
  <a href="https://evitadesignart.com/zodiac.php" title="太陽星座の占い">星座占い(太陽星座)</a>
  <a href="https://evitadesignart.com/zodiac2.php" title="月星座の占い">星座占い(月星座)</a>
  <a href="https://evitadesignart.com/zodiac3.php" title="アセンダントの星座占い">星座占い(アセンダント)</a>
  <a href="https://evitadesignart.com/color24.php" title="24色から占う性格診断">24の色占い</a>
  <a href="https://evitadesignart.com/engel.php" title="エンジェルナンバーガイド">エンジェルナンバーガイド</a>
  <div class="nav-parallax-bg" style="text-align: center; margin: 0 0 1rem 0; width: 100%; background-image: url('https://images.unsplash.com/photo-1462331940025-496dfbfc7564?q=80&w=2048&auto=format&fit=crop'); background-size: cover; background-position: center; padding: 3rem 1rem 6rem 1rem; box-sizing: border-box;">
    <a href="https://evitadesignart.com" style="font-size: 0.9rem; text-decoration: none; color: #ccc; border: none; padding: 0; display: inline; text-shadow: 0 1px 3px rgba(0,0,0,0.8);">運営 EvitaDesignart</a>
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
// SP実機対応：完全固定背景（スクロール相殺アルゴリズム） - 全ページ共通
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
