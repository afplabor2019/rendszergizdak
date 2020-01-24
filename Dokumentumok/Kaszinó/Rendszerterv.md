# Rendszerterv
## 1. A rendszer célja:
- A rendszer célja, egy olyan weboldal megvalósítása, ami egy kaszinó hangulatát és funkcionalitását reprezentálja. Ahhoz, hogy a weblapot használják a felhasználók, először regisztrálniuk kell magukat az oldal regisztrációs felületén. A sikeres regisztráció és az ezt követő bejelentkezés után a weboldalon a "games" fül alatt számos játék lesz található, amelyekkel - folyamatos karbantartás alatt - szeretnénk minden egyes regisztrált felhasználó számára biztosítani a kellems időtöltést. Pénz feltöltés segítségével tudnak fogadni a lehetséges kimenetelekre, majd egy bizonyos összeg után át tudják a fentlévő összegüket utalni egy az általuk megadott bankszámlára. A felhasználói beállítások és tranzakciók a "setting" menüpontban érhetők el.  

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
### Üzleti szereplő és munkatárs elemzése
- Üzleti szereplő: Tilki Csaba
- Üzleti munkatárs: Horváth Dániel, Jakab Ádám, Zajácz Ákos, Juhász Zsombor

- Megrendelő: Tilki Csaba
- Fejlesztő: Horváth Dániel, Jakab Ádám, Zajácz Ákos, Juhász Zsombor

### Üzleti folyamat elemzése
#### Üzleti folyamatok:
- Megrendelés,
- Weblapkészítés,
- Szolgáltatás,
- Üzemeltetés

### Üzleti entitás elemzése
#### Üzleti entitások:
- Pénz,
- Weboldal,

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
- Közelező számára a regisztráció, csak így tud hozzáférni a játékokhoz.
- Regisztráció után bármikor beléphet a megadott nevével és jelszavával.
- Bejelentkezés után a menu sávjában megjelnik a felhsaználó neve és egyenlege.
- A "Settings" -ben tud feltölteni összeget az egyenlegére, továbbá felhasznlónevet, jelszót tud módosítani.
- A "Games" menüpont alatt kiválaszthat egy játékok amivel játszani szeretne.
- A játékokat csak tét megrakásával lehet játszani, ezért fontos hogy a felhasználó rendelkezzen összeggel az egyenlegén.
- A nyert összeg aotomatikusan hozzáadódik a felhasználó egyenlegéhez.
- Kijelentkezésre a menüben elhelyezkedő Logout-ra való kattintással van lehetőség.

##### Menühierarchia:
- bejelentkezés előtt:
  - Home: főoldal
  - Register: regisztrácio
  - menüsávban található login
  
- bejelentkezés után:
  - Home: főoldal
  - Games: Dice, Head or Tail, Rock Paper Scissors, Roulett, Slotgame
  - Settings: egyenleg feltöltése, szamlara utalása, felhasználó név/jelszó változtatása
  - Logout: kijelentkezés
  - Jelenlegi felhasználó neve és egyenlege

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
- Az adatbázisban tároljuk az egyes felhasználókat, adataikat, illetve a feltöltött összegük mennyiségét.
- Users tábla: id, name, password, balance
- tárolt eljárások: register, balanceChange 

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
- Kivételek tesztelése:
  - használt felhasználó névvel nem lehet regisztrálni

### Settings felület tesztelése:
- Current Name tesztelése.
- Current Password tesztelése.
- New Name tesztelése.
- New Password tesztelése.
- Loadup Balance tesztelése.
- Update gomb tesztelése.
- Upload gomb tesztelése.
- Kivételek tesztelése:
  - new name ne lehessen ugyan az mint más felhasználóé

### Login felület - sáv - tesztelése.
- Username tesztelése.
- Password tesztelése.
- Login gomb tesztelése.

###Balance
- Változás tesztelése

## 11. Telepítési terv: 
- Ehhez az alkalmazáshoz nem kell külön szoftvert letölteni illetve telepíteni különböző platformokon ahhoz, hogy használni tudjuk a későbbiekben.
- Az alkalmazásunk futtatásához csupán egy ajánlott böngészőre lesz szükségünk például: (Firefox, Google Chrome, Opera stb.), ezek után az internetről automatikusan rákapcsolódhatunk a webszerverre és el is érhető a játék.

## 12. Karbantartási terv:
- Az alkalmazást folyamatosan üzemeltetjük és karbantartjuk, esetleges programhibákat elhárítjuk, illetve megoldjuk, ezen túl az alkalmazás  bővítését, azaz további kérdések hozzáadását biztosítjuk.
