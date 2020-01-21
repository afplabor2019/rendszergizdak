# Rendszerterv
## 1. A rendszer célja:
- A rendszer célja, hogy vevő egy olyan dinamikus weboldalt kapjon, ahol egyedül, a fejlesztő bevonása nélkül képes a weboldalt szerkeszteni egy admin felületen keresztül, ahová egyedi azonosítóval tud bejelentkezni. Fel tud tölteni képeket, azokhoz leírást tud megadni, szerkeszteni tudja az elérhetőségeit és mindent ami számára fontos. A felhasználó megtekintheti mindazt amit az oldal adminja feltölt, és visszajelzés tud neki küldeni.

## 2. Projektterv:

### Projektmunkások és felelőségek:

#### Backend munkálatok: Horváth Dániel, Jakab Ádám, Zajácz Ákos, Juhász Zsombor 
 - Feladat: Adatbázis kapcsolat létrehozása, lekérdezések megírása, admin felület
#### Frontend munkálatok: Jakab Ádám, Zajácz Ákos, Juhász Zsombor, Horváth Dániel
- Feladat: Egy letisztult, könnyen kezelhető felhasználói felület létrehozása

### Ütemterv:

## 3. Üzleti folyamat modellje:
- A modellhez tartozó grafikont csatoljuk a rendszertervet tároló mappához.

## 4. Követelmények:
- Le írja nagyvonalakban mit csinál a program.

## 5. Funkcionális terv: 
### Rendszerszereplők: 
- Admin
- User
### Rendszerhasználati esetek:
#### Felhasználó:
- A beállításokban tul feltölteni összeget az egyenlegére.
- Továbbá felhasznlónevet, jelszót tud módosítani.

## 6. Fizikai környezet:
- Az alkalmazás webes platformra készül, tehát elérhető okos eszközökről illetve számítógépekől
### Fejlesztői eszközök:
- MySQL Workbench
- Visual Studio Code

## 7. Architektuális terv: 

## 8. Adatbázis terv: 
- Az adatbázis tervhez tartozó grafikont csatoljuk a rendszertervet tároló mappához.

## 9. Implementációs terv:
- Web: 
A Webes felület főként HTML, CSS, és Javascript nyelven fog készülni.
Ezeket a technológiákat amennyire csak lehet külön fájlokba írva készítjük, és
úgy fogjuk egymáshoz csatolni a jobb átláthatóság, könnyebb változtathatóság,
és könnyebb bővítés érdekében

## 10. Teszterv: 
### Fő oldal tesztelése:
- Home gomb tesztelése.
- Register gomb tesztelése.
- Login gomb tesztelése.

### Fő oldal tesztelése bejelentkezés után:
- Games - dice gomb tesztelése.
- Games - head or tail gomb tesztelése.
- Games - rock, paper, scissors gomb tesztelése.
- Games - roulett gomb tesztelése.
- Games - slot game gomb tesztelése.
- Settings gomb tesztelése.
- Logout gomb tesztelése.

### Register oldal tesztelése:
- User name tesztelése.
- Password tesztelése.
- Confirm password tesztelése.
- Register gomb tesztelése.

### Settings felület tesztelése:
- Current Name tesztelése.
- Current Password tesztelése.
- New Name tesztelése.
- New Password tesztelése.
- Loadup Balance tesztelése.
- Update gomb tesztelése.
- Upload gomb tesztelése.

### Login felület - sáv - tesztelése.
- Username tesztelése.
- Password tesztelése.
- Login gomb tesztelése.


## 11. Telepítési terv: 
- Webes alkalmazás, tehát a szoftver webes felületéhez csak egy ajánlott böngésző telepítése
szükséges (Google Chrome, Firefox, Opera, Safari), külön szoftver
nem kell hozzá.

## 12. Karbantartási terv:
