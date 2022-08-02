"use strict";


const en = () => {

  		const mvbox = document.querySelector('.mv-box');
		console.log(mvbox);
		const mvtxt = mvbox.children;

		mvtxt[0].classList.add('mv-txt-from');

		mvtxt[0].addEventListener('animationend', (event) => {
		  	mvtxt[0].classList.remove('mv-txt-from');
		  	mvtxt[1].classList.add('mv-txt-from');
	  	});
		mvtxt[1].addEventListener('animationend', (event) => {
		  	mvtxt[1].classList.remove('mv-txt-from');
		  	mvtxt[2].classList.add('mv-txt-from');
	  	});
		mvtxt[2].addEventListener('animationend', (event) => {
		  	mvtxt[2].classList.remove('mv-txt-from');
		  	mvtxt[3].classList.add('mv-txt-from');
	  	});
		mvtxt[3].addEventListener('animationend', (event) => {
		  	mvtxt[3].classList.remove('mv-txt-from');
		  	mvtxt[4].classList.add('mv-txt-from');
	  	});
		mvtxt[4].addEventListener('animationend', (event) => {
			mvtxt[4].classList.remove('mv-txt-from');
		  	mvtxt[0].classList.add('mv-txt-from');
	  	});


	const keyframes =  [
		{ opacity:'0',top:'35px' ,offset: 0},
		{ opacity:'1',top:'-18px' ,offset: 0.2},
		{ opacity:'1',top:'-18px' ,offset: 0.8},
		{ opacity:'0',top:'-50px' ,offset: 1}
	];
	let timing = {
	  duration: 2500,
	  iterations:1,
	  easing: 'cubic-bezier(0, 0.62, 1, 0.32)',
	};




	const timing1 = {
	  duration: 2500,
	  delay:2500,
	  iterations:1,
	  easing: 'cubic-bezier(0, 0.62, 1, 0.32)',
	};
	const timing2 = {
	  duration: 2500,
	  delay:5000,
	  iterations:1,
	  easing: 'cubic-bezier(0, 0.62, 1, 0.32)',
	};
	const timing3 = {
	  duration: 2500,
	  delay:7500,
	  iterations:1,
	  easing: 'cubic-bezier(0, 0.62, 1, 0.32)',
	};
	const timing4 = {
	  duration: 2500,
	  delay:10000,
	  iterations:1,
	  easing: 'cubic-bezier(0, 0.62, 1, 0.32)',
	};		
	const timing5 = {
	  duration: 2500,
	  delay:12500,
	  iterations:1,
	  easing: 'cubic-bezier(0, 0.62, 1, 0.32)',
	};				



 








  
};
en();