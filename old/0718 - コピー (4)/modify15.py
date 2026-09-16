import os
import re

directory = r"c:\Users\ab_de\Desktop\0718"
files = ["zodiac.php", "zodiac2.php", "zodiac3.php"]

for file in files:
    filepath = os.path.join(directory, file)
    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()

    # 1. 前回追加した body::before を削除
    pattern = re.compile(r'\s*body::before\s*\{.*?\z-index:\s*-1;\s*\}\s*', re.DOTALL)
    content = pattern.sub('\n', content)

    # 2. background: rgba(11, 26, 61, 0.7); を rgba(11, 26, 61, 0.85) などの見やすい半透明に変更（透かすため）
    # tarotte.php では #1a1a2ee3 が使われているので、それにならう。
    content = content.replace("background: rgba(11, 26, 61, 0.7);", "background: #1a1a2ee3;")
    # 万が一、元の状態のままだったら
    content = content.replace("background: linear-gradient(135deg, #0b1a3d 0%, #000814 100%);", "background: #1a1a2ee3;")

    # 3. html に背景画像を設定する
    html_style = """
    html {
      background-image: url("img/flower_pattern043.jpg");
      background-repeat: repeat;
      background-size: 25%;
    }
    body {"""
    
    # もしすでに html { が追加されていなければ追加する
    if 'url("img/flower_pattern043.jpg")' not in content:
        content = content.replace("body {", html_style, 1)

    with open(filepath, 'w', encoding='utf-8') as f:
        f.write(content)

print("Modification complete.")
