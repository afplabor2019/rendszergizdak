# Funkcionális specifikáció

## Áttekintés:
- A projekt célja egy olyan web-oldal megalkotása, aminek segítségével a felhasználók átélhetik az igazi kaszinó élményt. Különféle szerencse-játékokkal tehetik próbára a szerencséjüket, és nagyszerű nyereményekkel gazdagodhatnak a szerencsések. A felhasználó a weboldalon keresztül egyszerűen, biztonságosan feltöltheti az egyenlegét, melyet akár meg is többszörözhet a játékok segítségével és ezután a nyert összeget kikérheti a számlájára.

- Az oldalon található egy beléptető oldal ahol a felhasználó ki-/be tud lépni az accountjába
- Miután belépett akkor fogja látni a számláját hogy mennyi pénz van rajta és a játékokat is akkor fogja látni
- 4 féle játék lesz elérhető az oldalon: 

                       - Félkarúrabló
                       
                       - Fej vagy írás
                       
                       - Dobókockás játék
                       
                       - Kő-Papír-Olló
- Az oldalon továbbá lesz lehetőség pénz fel- és levételére is!
- Ellenőrzi hogy mennyi pénzed van az oldalon és ha kevesebb mint amit te fel szeretnél rakni egy adott játékra akkor az nem lesz lehetséges!

## Jelenlegi helyzet:
- Ne statikus weboldalakat adjunk át az ügyfélnek, amit nem tud majd módosítani a jövőben és állandóan szól majd az üzemeltetőjének, hogy még ez a kép kell, a szöveg nem stimmel vagy a linkek változtak. Ezeket mind meg tudja változtani majd az admin menüben.

## Jelenlegi üzleti folyamatok modellje:
-A mai világban elég nagy szerepet tölt be az online szerencsejáték.
-Igyekszünk megteremteni egy valódi kaszinó légkörét az oldalon, hogy élvezehetőbbé tegye a játékokat a felhasználók számára. Az adatok és a tranzakciók kezelését a legbiztonságosabb módon végezzük.
-Sűrűn kell frissíteni, új tartalmakkal feltölteni, hogy a lehető legtöbb személyhez elérjen és sikere legyen az üzletnek.

## Igényelt üzleti folyamatok modellje:
-Azért, hogy egyszerűbbé tegyük az egyéni személyek igényeinek beteljesülését egy online kaszinót hozunk létre, ahol átélhetik
egy valódi kaszinó légkörét.

## Használati esetek:
- ADMIN: Az ADMIN beléphet mindegyik más szerepkörbe, hogy az hibamentes működését ellenőrizhesse. Az Admin(ok) feladata a rendszer problémamentes működése. Ez egyben jár azzal, hogy az egész rendszerhez van hozzáférésük. Tudniuk kell a felhasználók jogosultságait, szerepkörét.
- USER: A USER azaz a felhasználó az ADMIN által rá ruházott jogosultságokkal rendelkezik:
  - játékok használata 
  - saját adatainak módosítása
  - egyenleg feltöltése
  - egyenleg lekérése

## Képernyő terv:
- Mintának vett design linkje: http://www.gamblingtemplates.net/template1/

## Fogalomtár:
- Dinamikus weboldal: Az adatbáziból kiolvasott adatok jelennek meg. ezeket bármikor lehet módosítani és a kinézet ehhez alkalmazkodik.
- Reszponzív felület: Optimális megjelenést biztosít, könnyen olvasható, egyszerű navigáció a lehető legkevesebb átméretezéssel és görgetéssel, a legkülönfélébb eszközök. (Az asztali számítógép monitorjától egészen a mobiltelefonokig)
- Slideshow: Diavetítés (Az oldal látogatója bal/jobb oldalra való kattintással léphet az előző/következő oldalra)
