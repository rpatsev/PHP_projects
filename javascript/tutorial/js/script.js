'use strict'
var li = document.getElementById('second');
var ul = document.getElementById('ul');
var text = document.getElementById('text');


function f2(){
	console.log(1);
}

var f1 = function(event){
	if (event.target.nodeName === 'LI'){
	console.log(event.target);
	event.target.style.color = 'red';
	
};

};
var f3 = function(event){
	console.log(event.keyCode);
};


ul.addEventListener('click', f1);
li.addEventListener('mousemove', f2);
text.addEventListener('keypress', f3);

/*for (var i = 0; i < li.length; i++) {
	 
	li[i].addEventListener('click', function(){
		console.log(i);
	});
}*/