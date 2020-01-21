# Követelmény Specifikáció

## Áttekintés:
A projekt célja egy olyan web-oldal megalkotása, aminek segítségével a felhasználók átélhetik az igazi kaszinó élményt. Különféle szerencse-játékokkal tehetik próbára a szerencséjüket, és nagyszerű nyereményekkel gazdagodhatnak a szerencsések. A felhasználó a weboldalon keresztül egyszerűen, biztonságosan feltöltheti az egyenlegét, melyet akár meg is többszörözhet a játékok segítségével és ezután a nyert összeget kikérheti a számlájára.

## Funkcionális követelmények:
 - A nyitó oldal egyszerű letisztult megjelenése, átlátható képeket és olvasható szövegeket tartalmaz
- Minden oldal tetején menüsáv jelenik meg, ami a navigáációt segíti
- Minden oldal alján a footer jelenik meg ahol a kapcsolat tartáshoz kellő socialmedia linkeket és oldalakat tartalmazza
- A kapcsolat oldalon az elérhetőségek jelennek meg és üzenet küldési lehetőség egy form segítségével, google térkép is látható
- A kategóriák füllel a képgaléria nyitható meg és a kategóriának megfelelő képek jelennek meg
- Admin felület, itt lehet módosítani az oldalon megjelenő tartalmakat

## Regisztráció: 
- felhasználónév
- email
- jelszó
- számlaszám

## Adatbázis:
- felhasználó adatai
- Felhasználói: 
- felhasználói adatok módosítása
- egyenleg feltöltés

## Játékok működése:
- kőpapír olló
- fej vagy írás
- félkarú rabló
- dobókocka

## Rendszerre vonatkozó törvények:
1991. évi XXXIV.törvény a szerencsejáték szervezéséről : https://net.jogtar.hu/jogszabaly?docid=99100034.tv

## Jelenlegi üzleti folyamatok modellje:
Igyekszünk megteremteni egy valódi kaszinó légkörét az oldalon, hogy élvezehetőbbé tegye a játékokat a felhasználók számára. Az adatok és a tranzakciók kezelését a legbiztonságosabb módon végezzük.
## követelménylista:
| Modul                 | Név                           | Kifejtés                                                               |
|-----------------------|-------------------------------|------------------------------------------------------------------------|
| Felület               | Főoldal – index.html          | A weboldal megnyitásakor megjelenő oldal                               |
| Felület               | Header – header.html          | A fejléc és menüsáv minden oldalon ugyan az, kivéve a be/kijelentkezés |
| Felület               | Footer – footer.html          | Minden oldal alsó sávja                                                |
| Felület               | kőpapír olló játék            |                                                                        |
| Felület               | fej vagy írás játék           |                                                                        |
| Felület               | félkarú rabló                 |                                                                        |
| Felület               | dobókocka                     | A játékos fogad a dobókocka kimenetelére, ha eltalája azt nyer.        |
| Felület               | Design                        | letisztult                                                             |
| Modifikáció           | Felhasználó kezelés           | regisztráció, bejelentkezés, egyenleg                                  |
| Jogosultság           | Bejelentkezés / Kijelentkezés | Admin vagy sima felhasználó kezelése                                   |
| Jogosultság / Felület | Regisztráció                  | Regisztrációs felület, adatok bekérése                                 |
| Jogosultság           | Megerősítő e-mail             | Megerősítő email küld a felhasználónak                                 |
| Felület               | Felhasználói beállítások      | egyenleg feltöltése/lekérése                                           |
