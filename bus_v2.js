/* MENU BURGER */

var i = document.getElementsByTagName('i');
i[0].onclick = function() {
	var o = document.getElementsByClassName('opacity');
	o[0].style.display = 'initial';
	var a = document.getElementsByTagName('aside');
	a[0].style.left = '0';
	a[0].style.transition = 'ease 0.2s';
};

var o = document.getElementsByClassName('opacity');
o[0].onclick = function() {
	this.style.display = 'none';
	var a = document.getElementsByTagName('aside');
	a[0].style.left = '-200px';
}

/* FIN MENU BURGER */

/* ACCORDEONS ARTICLES */

function initialisation(ensemble){

	var headerArticles = document.getElementsByClassName('article_header');
	var contenuArticles = document.getElementsByClassName('article_content');
	console.log(contenuArticles);

	function afficher(j){ 
		var hasClass = contenuArticles[j].classList.contains('hidden');

		if(hasClass === true){
			contenuArticles[j].classList.remove('hidden');
		} else{
			contenuArticles[j].classList.add('hidden');
		}
		/*
		if(contenuArticles[j].style.display == "none"){
			//exp[j].classList.add('l12');
			contenuArticles[j].style.display = "flex";
		} else{
			//exp[j].classList.remove('l12');
			contenuArticles[j].style.display = "none";
		}*/
	};

	function afficherArticle(j){
		return function(){
		afficher(j);
		};
	};

	//Initialise l'action des boutons
	for(var j=0; j < tousMesArticles.length; j++){
		if(j % 2 === 0){
			headerArticles[j].classList.add('blue');
		} else{
			headerArticles[j].classList.add('green');
		}
		//Après initialisation, les boutons lanceront la fonction afficherArticle au clic. Le paramètre j sert à afficher l'article correspondant
		tousMesArticles[j].onclick = afficherArticle(j);
		console.log(tousMesArticles[j]);
	}
}

var tousMesArticles = document.getElementsByClassName('article_header');

//Initialisation
for(var i=0; i < tousMesArticles.length; i++){
	//Transmet les éléments de chaque section à la fonction initialisation
	initialisation(tousMesArticles[i]);
	//console.log(tousMesArticles[i]);
}

/* FIN ACCORDEONS ARTICLES */