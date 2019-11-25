
let jatekos_pont= 0;
let computer_pont= 0;
const jatekos_pont_span = document.getElementById("jatekos-score");
const computer_pont_span = document.getElementById("computer-score");
const eredmenyek_div = document.querySelector(".eredmenyek");
const eredmeny_div = document.querySelector(".eredmeny");
const ko_div = document.getElementById("ko");
const papir_div = document.getElementById("papir");
const ollo_div = document.getElementById("ollo");

function szamitogep_valasztas() {
	const valasztasok = ['k', 'p', 'o'];
	const random_szam = Math.floor(Math.random() * 3);
	return valasztasok[random_szam];
}
function nyer(jatekos_valaszt, computer_valasztas){
	jatekos_pont++;
	jatekos_pont_span.innerHTML = jatekos_pont;
	computer_pont_span.innerHTML = computer_pont;

}
function veszít(jatekos_valaszt, computer_valasztas){
	computer_pont++;
	jatekos_pont_span.innerHTML = jatekos_pont;
	computer_pont_span.innerHTML = computer_pont;
}
function döntetetlen(jatekos_valaszt, computer_valasztas){
	jatekos_pont_span.innerHTML = jatekos_pont;
	computer_pont_span.innerHTML = computer_pont;
}

function jatek(jatekos_valaszt){
	const computer_valasztas = szamitogep_valasztas();
	switch (jatekos_valaszt + computer_valasztas) {
		case "ko":
		case "pk":
		case "op":
		nyer(jatekos_valaszt, computer_valasztas);
		break;
		case "kp":
		case "po":
		case "ok":
		veszít(jatekos_valaszt, computer_valasztas);
		break;
		case "kk":
		case "pp":
		case "oo":
		döntetetlen(jatekos_valaszt, computer_valasztas);
		break;
	}
}

function main(){
ko_div.addEventListener('click', function(){jatek("k");
})
papir_div.addEventListener('click', function(){jatek("p");
})
ollo_div.addEventListener('click', function(){jatek("o");
})
}

main();
