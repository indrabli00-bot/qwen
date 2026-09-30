import re

path = '/workspace/copy/index.php'
c = open(path).read()

# 1) Buang blok head duplikat: dari marker Geo/Local SEO sampai </head> pertama setelahnya.
start_marker = '<!-- ===== Geo / Local SEO ===== -->'
end_marker   = '</head>'
if start_marker in c:
    s = c.index(start_marker)
    e = c.index(end_marker, s) + len(end_marker)
    c = c[:s] + c[e:]
    print('removed duplicate head block:', e - s, 'chars')

# 2) Buang blok critical CSS inline (sama dengan yang di header.php),
#    hanya jika masih ada (marker komentar unik).
m1 = c.find('<!-- ===== Critical CSS Inline (Above-the-Fold) ===== -->')
if m1 != -1:
    m2 = c.find('</style>', m1) + len('</style>')
    c = c[:m1] + c[m2:]
    print('removed inline critical css')

open(path, 'w').write(c)
print('done, new size', len(c))
