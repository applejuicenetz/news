# appleJuice GUI News Page

alle GUIs zeigen auf der Startseite immer den HTML Inhalt von folgender URL an:

- http://www.applejuicenet.de/inprog/news.php?version=CORE_VERSION
- http://www.applejuicenet.de/inprog/news.php?version=0.29.142.229
- http://www.applejuicenet.de/inprog/news.php?version=0.30.146.1203
- http://www.applejuicenet.de/inprog/news.php?version=0.31.149.110
- http://www.applejuicenet.de/inprog/news.php?version=0.31.149.111

Wird keine Core Version angegeben oder es existiert keine korrespondierende Datei, wird nur der `header` und `footer` ausgegeben.

## HTML Inhalt
- die JavaGUI kann nur ganz einfaches HTML und inline CSS auswerten, da `JTextPane` verwendet wird
- es kann z.B. kein `fieldset` oder keine `dl/dt` Listen verwendet werden
- das Encoding ist `ISO-8859-15`, Sonderzeichen müssen d.h. als `&uuml;` / `&szlig;` geschrieben werden
- Angaben wie `target="_blank"` u.ä. werden nicht benötigt

### Aufbau

- [header](./news/_header.html)
- `CORE_VERSION`, z.B [0.29.142.229](./news/0.29.142.229.html) oder [0.31.149.111](./news/0.31.149.111.html)
- [footer](./news/_footer.html)


Für jede Core Version kann eine eigene HTML Datei im [news](./news/) Ordner angelegt werden.
