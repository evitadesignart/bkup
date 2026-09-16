import urllib.request
try:
    req = urllib.request.urlopen("https://evitadesignart.com/tarotte.php")
    html = req.read().decode('utf-8')
    lines = html.split('\n')
    for i in range(25, min(35, len(lines))):
        print(f"{i}: {lines[i]}")
except Exception as e:
    print(e)