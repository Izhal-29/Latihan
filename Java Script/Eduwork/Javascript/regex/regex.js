// text
let regex1 = new RegExp('anjas');
console.log(regex1.test('anja'));
console.log(regex1.test('anjas'));

let regex2 = /rama dhea/;
console.log(regex2.test('rama dhea'));
console.log(regex2.test('ram dhea'));

// karakter set
let regex3 = new RegExp('[a-z]');
console.log(regex3.test('aku dan kamu'))
console.log(regex3.test('12'))

let regex4 = /[a-z]/
console.log(regex4.test('ahaha'));

let regex5 = /[1-5]/
console.log(regex5.test('6'));

// Match() mencari kata kunci
let myRegex = /a/;
let myRegex1 = /a/i;
let myRegex2 = /a/ig;
let namaSaya = 'Anjas';
console.log(namaSaya.match(myRegex))
console.log(namaSaya.match(myRegex1))
console.log(namaSaya.match(myRegex2))


//  karakter Set Short Syntax
let namaSaya1 = '1234';
let namaSaya2 = 'rizhal1234';
let namaSaya3 = 'rizhal 1234';
let namaSaya4 = 'rizhal 11233';
console.log(namaSaya1.match(/\d/g));
console.log(namaSaya2.match(/\w/g));
console.log(namaSaya3.match(/\s/g));
console.log(namaSaya4.match(/\d\w\w\w\w/));


