import os
import re

filepath = r"c:\Users\ab_de\Desktop\0718\nav.php"

with open(filepath, 'r', encoding='utf-8') as f:
    content = f.read()

# nav.php に追加したすべてのパララックスJSを削除
# <script> document.addEventListener("DOMContentLoaded", function() { const parallaxSections... </script> のブロックを消す
pattern = re.compile(r'<script>\s*document\.addEventListener\("DOMContentLoaded", function\(\) \{\s*const parallaxSections.*?\}\);\s*</script>', re.DOTALL)
content = pattern.sub('', content)

# 念のため、改行の連続をきれいにする
content = re.sub(r'\n{3,}', '\n\n', content)

with open(filepath, 'w', encoding='utf-8') as f:
    f.write(content.strip() + '\n')

print("Modification complete.")
