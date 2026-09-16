import os
import re

filepath = r"c:\Users\ab_de\Desktop\0718\nav.php"

with open(filepath, 'r', encoding='utf-8') as f:
    content = f.read()

# 前回追加したスクリプトを削除する
# <script> の開始から </script> の終了までで、'parallaxSections.forEach' を含むものを削除
pattern = re.compile(r'<script>\s*document\.addEventListener\("DOMContentLoaded", function\(\) \{\s*const parallaxSections.*?\}\);\s*</script>', re.DOTALL)
content = pattern.sub('', content)

# 新しいスクロールベースのパララックススクリプト
new_script = """
<script>
document.addEventListener("DOMContentLoaded", function() {
  const parallaxSections = document.querySelectorAll('.parallax-bg-section, .nav-parallax-bg');
  
  // スマホ実機でのバグを回避するため、background-attachment: scrollに統一し、JSでパララックスを実装
  parallaxSections.forEach(section => {
    if (section.style.backgroundImage && section.style.backgroundImage !== 'none') {
      section.style.backgroundAttachment = 'scroll';
      // 初期位置を設定
      section.style.backgroundPosition = 'center 0px';
    }
  });

  let ticking = false;
  function updateParallax() {
    parallaxSections.forEach(section => {
      if (section.style.backgroundImage && section.style.backgroundImage !== 'none') {
        const rect = section.getBoundingClientRect();
        // 要素が画面内にあるか判定
        if (rect.top < window.innerHeight && rect.bottom > 0) {
          // 画面位置に合わせて背景画像を上下に少しだけずらす
          // -rect.top * 0.5 くらいで、自然な奥行き（固定に近い動き）を演出
          const yPos = -(rect.top * 0.4);
          section.style.backgroundPosition = `center ${yPos}px`;
        }
      }
    });
  }

  // スクロール時に更新
  window.addEventListener('scroll', function() {
    if (!ticking) {
      window.requestAnimationFrame(function() {
        updateParallax();
        ticking = false;
      });
      ticking = true;
    }
  }, { passive: true });
  
  // メニュー開閉時など、他の要因で位置が変わった場合のため初期表示も実行
  updateParallax();
});
</script>
"""

content = content.strip() + "\n" + new_script

with open(filepath, 'w', encoding='utf-8') as f:
    f.write(content)

print("Modification complete.")
