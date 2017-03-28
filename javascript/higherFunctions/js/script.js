'use strict'


var response = [
	{
		"index":0,
		"isActive": true,
		"age" : 20,
		"name" : "Langley Morton",
		"gender" : "male",
		"email":"lang@medifax.com"
	},
	{
		"index": 1,
		"isActive": true,
		"age" : 20,
		"name" : "Terry Cook",
		"gender" : "female",
		"email":"ter@medifax.com"
	},
	{
		"index": 2,
		"isActive": false,
		"age" : 36,
		"name" : "Fether Morris",
		"gender" : "male",
		"email":"fm@medifax.com"
	},
]

var friends = [
	{"name": "Anna",  "books" : ["Bible" , "Harry Potter"]},
	{"name": "Bob",   "books" : ["War and Peace" , "Romeo & Juliet"]},
	{"name": "Alice", "books" : ["Law" , "Maths"]},
];



var array = [];
for (var i = 1; i <= 10; i++) {
	array.push(i);
}

console.log(array);

var Newfilterarray, Newmaparray, Newforeacharray;

//filter

Newfilterarray = response.filter(function(elem){
	return elem.isActive;
});

console.log(Newfilterarray);

//map

Newmaparray = response.map(function(elem) {
	return {
		name: elem.name,
		email: elem.email
	};
});

console.log(Newmaparray);

//every() some()

var negativearray = []
for (var i = -2; i < 15; i++) {
	negativearray.push(i);
}

var NewEverynegativearray = negativearray.every(function(elem){
	return elem > 0;
});

console.log(NewEverynegativearray);

var NewSomenegativearray = negativearray.some(function(elem){
	return elem > 0;
});

console.log(NewSomenegativearray);

var books_array_red = friends.reduce(function(sum,elem){
	return sum.concat(elem.books);
},["1984"]);

var books_array_redright = friends.reduceRight(function(sum,elem){
	return sum.concat(elem.books);
},["1984"]);

console.log(books_array_red);
console.log(books_array_redright);


//arguments

function setAlphabet(separator){
	var arr = [...arguments];

	console.log(arguments);
	console.log(arguments.length);
	
	return arr.join(separator);


}

console.log(setAlphabet(',','a','b','c','d','e'));



//scope

function makeCounter(){
	var currentCount = 1;
	return function(){
		return currentCount++;
	} 
}

var Counter = makeCounter();
console.log('__________________________');

console.log(Counter());
console.log(Counter());
console.log(Counter());

var Counter1 = makeCounter();

console.log(Counter1());
console.log(Counter1());
console.log(Counter1());

var buttons = document.querySelectorAll('button');
for (var i = 0; i < buttons.length; i++) {
	buttons[i].innerHTML = i+1;
	buttons[i].onclick = function(x){
		return function(){
			console.log(x+1);
		}
	}(i);
}