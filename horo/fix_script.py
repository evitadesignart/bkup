import re
patch = '''      // [Added] Log tarot results
      let cName = card.name.replace(/（.*$/, "");
      let cPos = isReversed ? "逆位置" : "正位置";
      fetch('log_tarot.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify({ card_name: cName, position: cPos })
      }).catch(e => console.error(e));'''

pattern = r'      // \[Added\] Log tarot results\n      if \(selected && selected\.length > 0\) \{.*?      \}'

for f in ['tarotte2.php', 'tarotte11.php', 'tarotte12.php']:
    try:
        content = open(f, encoding='utf-8').read()
        new_content = re.sub(pattern, patch, content, flags=re.DOTALL)
        if new_content != content:
            open(f, 'w', encoding='utf-8').write(new_content)
            print('Updated ' + f)
        else:
            print('No match in ' + f)
    except Exception as e:
        print('Error in ' + f + ': ' + str(e))
