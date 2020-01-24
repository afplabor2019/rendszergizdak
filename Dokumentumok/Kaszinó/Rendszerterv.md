# Rendszerterv
## 1. A rendszer célja:
- A rendszer célja, egy olyan weboldal megvalósítása, ami egy kaszinó hangulatát és funkcionalitását reprezentálja. Ahhoz, hogy a weblapot használják a különböző személyek, először regisztrálniuk kell magukat az oldal regisztrációs felületén. A weboldalon számos játék lesz található, amelyekkel - folyamatos karbantartás alatt - szeretnénk minden egyes regisztrált felhasználó számára biztosítani a kellems időtöltést. Pénz feltöltés segítségével tudnak fogadni a lehetséges kimenetelekre, majd egy bizonyos összeg után át tudják a fentlévő összegüket utalni egy az általuk megadott bankszámlára.

## 2. Projektterv:
- A projektet weblapra fejlesztük front- és backend segítségével. 
- Az elkülönített feladatokon más-más emberek dolgoznak.
- Frontend fejlesztése HTML/CSS segítségével, valamint bejelentkezéshez php használata adatbázis kezeléséhez.

### Projektmunkások és felelőségek:

#### Backend munkálatok: Horváth Dániel, Jakab Ádám, Zajácz Ákos, Juhász Zsombor 
- Feladat: Adatbázis kapcsolat létrehozása, lekérdezések megírása, login, regisztrációs és beállítások felület funkcionalitása.
#### Frontend munkálatok: Jakab Ádám, Zajácz Ákos, Juhász Zsombor, Horváth Dániel
- Feladat: Egy letisztult, könnyen kezelhető felhasználói felület létrehozása.

### Ütemterv:

## 3. Üzleti folyamat modellje:
- A modellhez tartozó grafikont csatoljuk a rendszertervet tároló mappához.

## 4. Követelmények:
- Le írja nagyvonalakban mit csinál a program.
- A rendszer fejlesztése HTML/CSS valamint JavaScript és php segítségével történik.
- A weblap felépítése, valamint dizájnolása a HTML/CSS nyelv implementálásával valósítandó meg. 
- Az adatbázishoz csatlakozás, bejelentkezés, adminisztrátori jogosultság felismertetése, stb. pedig a php/JavaScript-el.

## 5. Funkcionális terv: 
### Rendszerszereplők: 
- Admin
- User

### Rendszerhasználati esetek:
#### Felhasználó:
- A beállításokban tul feltölteni összeget az egyenlegére.
- Továbbá felhasznlónevet, jelszót tud módosítani.

## 6. Fizikai környezet:
- A rendszer fejlesztése HTML/CSS valamint JavaScript és php segítségével történik.
- A weblap felépítése, valamint dizájnolása a HTML/CSS nyelv implementálásával valósítandó meg. 
- Az adatbázishoz csatlakozás, bejelentkezés, adminisztrátori jogosultság felismertetése, stb. pedig a php/JavaScript-el.
- Az alkalmazás webes platformra készül, tehát elérhető okos eszközökről illetve számítógépekől.
- A rendszert bármilyen operációs rendszeren és böngészőben haszálható lesz, valamint telefonról is.

### Fejlesztői eszközök:
- MySQL Workbench
- Visual Studio Code

## 7. Architektuális terv:
- A rendszerhez szükség van egy adatbázis szerverre, ebben az esetben MySql-t használunk. 
- A kliens oldali programokat egy php alapú REST api szolgálja ki, ez csatlakozik az adatbázis szerverhez. 
- A kliensekkel JSON objektumokkal kommunikál.

## 8. Adatbázis terv: 
- Az adatbázis tervhez tartozó grafikont csatoljuk a rendszertervet tároló mappához.
- Az adatbázisban tároljuk az egyes felhasználókat, adataikat, illetve a feltöltött összegük mennyiségét.

## 9. Implementációs terv:
- Web: 
A Webes felület főként HTML, CSS, és Javascript nyelven fog készülni.
Ezeket a technológiákat amennyire csak lehet külön fájlokba írva készítjük, és
úgy fogjuk egymáshoz csatolni a jobb átláthatóság, könnyebb változtathatóság,
és könnyebb bővítés érdekében

## 10. Tesztterv:
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
- Ehhez az alkalmazáshoz nem kell külön szoftvert letölteni illetve telepíteni különböző platformokon ahhoz, hogy használni tudjuk a későbbiekben.
- Az alkalmazásunk futtatásához csupán egy ajánlott böngészőre lesz szükségünk például: (Firefox, Google Chrome, Opera stb.), ezek után az internetről automatikusan rákapcsolódhatunk a webszerverre és el is érhető a játék.

## 12. Karbantartási terv:
- Az alkalmazást folyamatosan üzemeltetjük és karbantartjuk, esetleges programhibákat elhárítjuk, illetve megoldjuk, ezen túl az alkalmazás  bővítését, azaz további kérdések hozzáadását biztosítjuk.
