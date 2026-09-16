import sys

target_block = """      // [Added] Log tarot results
      if (selected && selected.length > 0) {
        selected.forEach(c => {
          let cName = c.name.replace(/（.*$/, "");
          let cPos = c.isReversed ? "逆位置" : "正位置";
          fetch('log_tarot.php', {
              method: 'POST',
              headers: { 'Content-Type': 'application/json' },
              body: JSON.stringify({ card_name: cName, position: cPos })
          }).catch(e => console.error(e));
        });
      }"""

replacement = """      // [Added] Log tarot results
      let cName = card.name.replace(/（.*$/, "");
      let cPos = isReversed ? "逆位置" : "正位置";
      fetch('log_tarot.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify({ card_name: cName, position: cPos })
      }).catch(e => console.error(e));"""

for f in ['tarotte2.php', 'tarotte11.php', 'tarotte12.php']:
    content = open(f, encoding='utf-8').read()
    if target_block in content:
        new_content = content.replace(target_block, replacement)
        open(f, 'w', encoding='utf-8').write(new_content)
        print('Updated ' + f)
    else:
        print('Target block not found in ' + f)
