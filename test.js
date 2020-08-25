// alert('外部ファイル');
// var a = 1;
// // alert(a);
// var b = 2;
// var c = a + b;
// alert(c);

// var A = 'rinngo';
// var B = 'banana';
// var C = A + B;
// alert(C);

// var fruits = [
//   {'name': 'ringo', 'price': 100},
//   {'name': 'banan', 'price': 150},
//   {'name': 'itigo', 'price': 200} 
// ];
// alert(fruits[1].price);

// var answer = prompt('1 + 1 は？');
// if (answer == 2) {
//   alert('正解');
// } else {
//   alert('不正解');
// }
// alert(answer);

// var  fruits = ['a', 'b', 'c', 'u', 'd', 'e'];
// for (var i = 0; i < fruits.length; i++) {
//   alert(fruits[i]);
// }

// function clac(x) {
//   return x * 2;
// }
// alert(clac(3));

var answer = prompt('正の値か負の値か調べよう！');
if (answer >= 0) {
  alert('正の値');
} else if (answer < 0) {
  alert('負の値');
} else{
  alert('数値を入力してください');
}

var  animal = ['パンダ', 'ライオン', 'キリン'];
var answer = prompt('好きな動物を入力してください');
var i = 0;
while (true) {
if (i >=animal.length) {
  break;
}
if (answer == 'ライオン') {
  alert('ライオン');
  break;
}
alert(animal[i]);
i++;
}

var animal_weight = [{'name': 'パンダ', 'weghit': 80},
                     {'name': 'ライオン', 'weghit': 200},
                     {'name': 'キリン', 'weghit': 300}];
var answer_weight = prompt('パンダ、ライオン、キリンの体重を出してみよう');
switch (answer_weight) {
  case 'パンダ':
    alert(animal_weight[0].weghit);
    break;
  case 'ライオン':
    alert(animal_weight[1].weghit);
    break;
  case 'キリン':
   alert(animal_weight[2],weghit);
   break;
  default:
    alert('動物の名前を入れてください');
    break;
}

function radius(r) {
  return r * r * 3.14;
}
var area = prompt('半径を入力して面積を調べよう');
alert(radius(area));
