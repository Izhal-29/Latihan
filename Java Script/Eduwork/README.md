## Daftar Isi

1. Javascript Introduction
2. Javascript Conditional
3. Javascript Looping
4. Javascript Scope
5. Javascript Function
6. Javascript DOM
7. Javascript Array
8. Javascript Multidimensional Array
9. Javascript Recursive
10. Javascript Regex
11. Javascript Object
12. Javascript OOP 
13. Javascript Object Prototype
14. Javascript Modules
15. Javascript Asynchronous
16. Javascript Advanced ES6



## 1. Javascript Introduction

1. ### JS Output

  ```javascript
  console.log()
  innerHTML
  document.write()
  window.alert()
  ```



2. ### Comments

Comments adalah sintaks yang digunakan untuk memberi keterangan tentang suatu statement. Menggunakan bahasa inggris atau bahasa indonesia. Comments tidak akan dijalankan oleh program karena hanya untuk dibaca oleh sesama programmer ataupun diri sendiri untuk memahami maksud dan tujuan sebuah statement/syntax.

##### Single Line Comments

   ```javascript
   // Hello world
   ```

##### Multi-line Comments

   ```javascript
   /*
   hello world
   */
   ```



3. ### Tipe Data (Data Types)

Tipe data adalah klasifikasi yang kita berikan untuk berbagai macam data yang digunakan dalam programming. Ada 6 tipe data fundamental pada Javascript yaitu number, string, boolean, null, undefined, object.

##### Number

Tipe data number adalah tipe data yang mengandung semua angka termasuk angka desimal.

   ```javascript
   let number1 = 12;
   let number2 = 24;
   let number3 = 1000;
   let number4 = 24.12;
   ```
##### String

Tipe data string adalah grup karakter yang ada pada keyboard laptop/PC kita yaitu letters (huruf),  number (angka), spaces (spasi), symbol, dan lainnya.  Harus diawali dan diakhiri dengan single quotes ‘ … ‘ ataupun double quotes “ … “. 

   ```javascript
   let string = "Session 5: Belajar Javascript"
   ```

  ##### Boolean

Tipe data boolean adalah tipe data yang hanya mempunyai 2 buah nilai. 2 buah nilai tersebut adalah TRUE (benar) or FALSE (salah).
Analoginya adalah seperti tombol/button ON/OFF dan juga seperti sebuah jawaban antara YES/NO..

   ```javascript
   let benar = true;
   let salah = false;
   ```

##### Null

Tipe data null adalah tipe data yang diartikan bahwa sebuah variable/data tidak memiliki nilai. Null berbeda dengan string kosong. String kosong masih memiliki tipe data string.

   ```javascript
   let dataPertama = null;
   let dataKedua = null;
   let dataKetiga = "";
   ```

  ##### Undefined

Tipe data undefined adalah tipe data yang merepresentasikan varibel/data yang tidak memiliki nilai.
Undefined berbeda dengan null.
Undefined didapat dari hasil berikut:
Nilai dari pemanggilan variabel yang belum didefinisikan
Nilai dari pemanggilan element array yang tidak ada
Nilai dari pemanggilan property objek yang tidak ada
Nilai dari pemanggilan fungsi yang tidak mengembalikan nilai (return)
Nilai dari parameter fungsi yang tidak memiliki argumen

Tipe data null biasanya diperoleh dalam kondisi normal dan sudah kita rencanakan.
Tipe data undefined biasanya didapat dari hasil kesalahan program (error), kelalaian programmer, dan tidak direncanakan.

   ```javascript
   let a = "eduwork";
   let b = "javascript";
   let framework = ["react js", "vue js", "laravel"]
   console.log(c); // undefined
   console.log(a); // "edowork"
   console.log(framework.length); // 3
   conso.e.log(framework.panjangkarakter) // undefined
   ```

  ##### Object

Tipe data object adalah koleksi data yang saling berhubungan (related). Tipe data pbject dapat menyimpan data dengan tipe data apapun (number, string, boolean, dan lainnya). Tipe data object mempunyai key dan value..

   ```javascript
   var person = {
    firstName: "John",
    lastName: "Doe",
    age: 50,
    eyeColor: "Blue"
   }
   ```




4. ### Variabel

   Disemua bahasa pemograman, variable adalah container/tempat untuk menyimpan sebuah nilai.

   3 hal yang dapat dilakukan pada variabel

   1. Membuat variabel dengan nama yang jelas dan menggambarkan tentang data tersebut
   2. Menyimpan dan mengupdate informasi/data yang disimpan
   3. Mendapatkan/menampilan data yang tersimpan

   Aturan penamaan variabel

   1. Harus mendeskripsikan tentang data yang disimpan

   2. Tidak bisa menggunakan number pada awal nama variabel

   3. Gunakan camelcase untuk penamaan yang lebih dari 1 kata. 
      Contoh: myName, myAge
      

  ##### Var

   ```javascript
   var myName = "Aziz";
   console.log(myName) // Aziz
   ```
   ##### Let

let untuk variabel yang dinamis/dapat diubah.

   ```javascript
   let meal = "Enchiladas";
   console.log(meal) // Enchiladas
   meal = "Burrito";
   console.log(meal) // Burrito
   ```

   ##### Const

Gunakan const jika variabel tidak dapat diubah nilainya. Biasanya digunakan untuk menggambarkan konstanta sebuah nilai Seperti konstanta pi = 3.14.

   ```javascript
   const pi = 3.34;
   console.log(pi) // 3.14
   pi = 10;
   console.log(pi) // Uncaught TypeError: Assigment to constant variable.
   ```

Tapi, apa ya perbedaan antara var dan let???

Perbedannya adalah: let dikenalkan pada versi javascript terbaru ES6 Variabel let mendukung kaidah global variabel dan local variabel Jadi, dianjurkan untuk menggunak let untuk variabel yang dinamis/dapat diubah.



5. ### Arithmetic Operator

   Arithmetic operator adalah operator yang melibatkan operasi matematika.
   `Tambah (+)`
   `Kurang (-)`
   `Perkalian (*)`
   `Pembagian (/)`
   `Modulus (%)`

Modulus adalah hasil dari sisa bagi. Misalkan 5 modulus 2. Hasil perkalian dari 2 yang mendekati 5 adalah 4. Maka sisa dari operasi modulus tersebut adalah 1. Jadi 5 % 2 adalah 1..

   ```javascript
   let a = 10;
   let b = 20;
   
   console.log(a + b) // 30
   console.log(a - b) // -20
   console.log(a * b) // 200
   console.log(a / b) // 0,5
   console.log(11 % 3) // 2
   console.log(12 % 3) // 0
   ```



6. ### Assignment Operator

Assignment operator digunakan untuk menyimpan sebuah nilai pada variabel.

   ```javascript
   let myName
   myName = "Muhamad Aziz";
   
   console.log(myName) // "Muhamad Aziz"
   ```



7. ### Comparison Operator

Comparison operator adalah operator yang membandingkan satu nilai dengan nilai lainnya. Hasil operasi yang melibatkan comparison operator adalah antara true or false.   

   `Lebih kecil dari : <`
   `Lebih besar dari: >`
   `Lebih kecil atau sama dengan: <=`
   `Lebih besar atau sama dengan: >=`
   `Sama dengan: ===`
   `Tidak sama dengan: !==`

   ```javascript
   8 < 10 // menghasilkan "true"
   10 < 1 // menghasilkan "false"
   
   "apple" === "jeruk" // menghasilkan "false"
   "aku" === "aku" // menghasilkan "true"
   ```



8. ### Mathematical Assignment Operator

   ```javascript
   let w = 4;
   w = w + 1;
   console.log(w); // 5
   
   // atau menggunakan syntax dibawah ini
   let w = 4;
   w += 1;
   console.log(w); // 5
   ```



9. ### Increment dan Decrement


   ```javascript
   let a = 10;
   a++;
   
   console.log(a); // 11
   
   let b = 20;
   b--;
   console.log(b) // 19
   ```



### 10 . Logical Operator

Logical operator biasa digunakan untuk sebuah CONDITIONAL pada pemograman. Menghasilkan nilai BOOLEAN yaitu TRUE or FALSE.

##### AND (&&)

AND akan menghasilkan nilai true jika kedua atau semua premis bernilai TRUE

```javascript
console.log(true && true) // true
console.log(true && false) // false
console.log(false && false) // false
console.log(false && true && false) // false
console.log(true && true && true) // true
```

##### OR (||)

OR akan menghasilkan nilai true jika salah satu premis mengandung nilai TRUE

```javascript
console.log(true || true) // true
console.log(true || false) // true
console.log(true || false || false) // true
console.log(false && false) // false
```

##### NOT (!)

NOT akan membalikkan sebuah nilai BOOLEAN. TRUE menjadi FALSE dan sebaliknya.

```javascript
let excited = true;
console.log(!excited) // false

let sleepy = false;
console.log(!sleepy) // true
```



## 2. Javascript Conditional

Apa itu conditional ? Conditional merupakan statement percabangan yang menggambarkan suatu kondisi. Conditional statement akan mengecek kondisi spesifik dan menjalankan perintah berdasarkan kondisi tersebut. Yang dicek adalah apakah kondisi tersebut TRUE (benar). Jika TRUE maka code didalam kondisi tersebut dijalankan.

##### Conditional IF Statement

Jika cuaca cerah hari ini, maka kita akan pergi keluar
Jika alarm berbunyi, maka kita akan bangun dari tidur
Jika lelah, maka kita akan istirahat
Jika lapar, kita akan makan

```javascript
if (true) {
    console.log("This message will print");
}
// prints "This message will print"

if (false) {
    console.log("Kode ini tidak akan dijalankan");
}

let lapar = true;
if (lapar) {
    console.log("Yuk makan");
}

let nilai = 10;
if (nilai === 10) {
    console.log("Variabel nilai yang disimpan adalah benar 10");
}
```

##### Conditional IF ... ELSE Statement

Else akan mengeksekusi sebuah statement/code jika suatu kondisi bernilai FALSE

```javascript
let lapar = false;
if (lapar) {
    console.log("Yuk makan"); // program tidak akan menampilkan statement ini
} else {
    console.log("Tidak makan"); // program akan menampilkan statement ini
}
```

##### IF ... ELSE IF Statement

Else … If statement dapat kita gunakan jika kita mempunyai berbagai kondisi.

```javascript
let stopLight = 'yellow';

if(stopLight === 'red') {
    console.log('Stop!');
} else if (stopLight === 'yellow') {
    console.log('Slow Down!');
} else if (stopLight === 'green') {
    console.log('Go!');
} else {
    console.log("Caution, unknown!");
}
```

##### Truthy and Falsy

Truthy and falsy digunakan untuk mengecek apakah variabel telah terisi namun tidak mementingkan nilainya.

```javascript
let myVariable = 'Eduwork';

if(myVariable) {
    console.log(myVariable);
} else {
    console.log('Variabel tidak ada');
}

// prints Eduwork
```

##### Truthy and Falsy Assignment

Analoginya adalah jika kita memiliki sebuah website dan meminta inputan username lalu menampilkannya. Jika usernamenya kosong kita bisa isi nilai tersebut.

```javascript
let defaultName;

if (username) {
    defaultName = username;
} else {
    defaultName = 'Stranger'
}

let defaultName = username || 'Stranger';
```

##### Switch Case Conditional

Gunakan switch case jika kondisi dan percabangan terlalu banyak

```javascript
switch(expression) {
    case value_1;
        statement_1;
        break;
    case value_2;
        statement_2;
        break;
    case value_3;
        statement_3;
        break;
    default:
        default_statement;
}
```

##### Ternary Operator

Untuk lebih produktif, programmer harus belajar syntax singkat dari suatu fitur. Ternary operator merupakan short-syntax dari statement if … else.

```javascript
let isNowForSale = true;

isNowForSale ? console.log('Lets shopping now') : console.log('Shopping later');
```



## 3. Javascript Looping

Apa itu looping ? Looping adalah statement yang mengulang sebuah instruksi hingga kondisi terpenuhi atau jika kondisi stop/berhenti tercapai.

![ffff](/home/muhamad/Downloads/ffff.png)

##### Manual Looping

```javascript
// Akan menampilkan nilai 1 - 10
console.log(1);
console.log(2);
console.log(3);
console.log(4);
console.log(5);
console.log(6);
console.log(7);
console.log(8);
console.log(9);
console.log(10);
```

##### For Loop

FOR LOOP merupakan instruksi pengulangan yang dapat kita berikan pada program yang kita kembangkan. Gunakan FOR LOOP jika kita tahu seberapa banyak nilai pasti untuk pengulangannya.

CONTOH:
Jika kita ingin menampilkan angka 1 - 100 kita menggunakan FOR LOOP. Karena kita sudah tahu bahwa pengulangan akan dilakukan sebanyak 100kali.

parameter

*Inisialisasi*: Sebagai inisialisasi awal dari mana mulainya sebuah pengulangan. Kita memberikan nilai awal/default pada parameter ini
*Condition*: For loop akan terus berjalan selama kondisi ini terpenuhi. Selama kondisi bernilai TRUE.
*Post-expression (Increment/Decrement):* Iterasi statement yang digunakan untuk mengupdate variabel yang menjadi kontrol pada pengulangan

```javascript
let angka = 1;
for (angka; angka <= 10; angka++) {
    console.log(angka);
}

let angka = 10;
for (angka; angka > 0; angka--) {
    console.log(angka);
}

let jumlah = 0;
for (let deret = 5; deret > 0; deret--) {
    jumlah += deret;
    console.log('Jumlah saat ini: ' + jumlah);
}

console.log(jumlah);
```

![2](https://user-images.githubusercontent.com/37678093/180957469-0bb6a37d-7262-4d3c-bc4f-2a9ce3b71e89.png)


##### While Loop

WHILE LOOP akan menjalankan instruksi pengulangan kondisi bernilai TRUE. Gunakan WHILE LOOP jika kita tidak mengetahui jumlah pasti pengulangan.

```javascript
let angka = 1;
while (angka <= 10) {
    console.log(angka);
    angka++;
}

let count = 1;
while (count < 10) {
    console.log(count);
    count += 2;
}
```

CONTOH:
Jika kita ingin menampilkan list user yang sudah melakukan registrasi. Kita tidak mungkin tahu nilai pasti berapa banyak pengulangan data yang akan tampil. Maka gunakan WHILE.

```javascript
// Misalkan di database user sudah ada 2 yang terdaftar
let jumlahUser = 2;

let i = 1;
while(i <= jumlahUser) {
    console.log('Tampilkan user ke', i);
    i++;
}
```



##### Do While

Terkadang kita ingin setidaknya menjalankan pengulangan 1 kali sebelum dilakukan pengecekan kondisi.

```javascript
var bensin = 9;

// perulangan while-do
while(bensin > 0) {
    console.log("Masih ada bensin, nyalakan mesin !");
    bensin--;
}

// perulangan do-while
do {
    console.log('Nyalakan mesin !');
    bensin--;
} while (bensin > 0)
```

![1](https://user-images.githubusercontent.com/37678093/180957566-2c74d093-9877-4bbc-b2d3-b693aeb26424.png)




##### Nested Loop

Jika kita membuat looping didalam looping. Maka ini dinamakan Nested Loop. Looping pertama dianalogikan sebagai baris. Looping kedua dianalogikan sebagai kolom

```javascript
for (let = i; i <= 10; i++) {
    for (let j = 1; j <= i; j++) {
        document.write('<br/>')
        document.write('Baris', +i)
        document.write('<br/>')
        document.write('Kolom', +j)
    }
}
```

![4](https://user-images.githubusercontent.com/37678093/180957619-ca6ae197-4c81-433b-97e9-136f27b9d193.png)




## 4. Javascript Scope

Scope adalah konsep dalam flow data variabel. Menentukan suatu variabel bisa diakses pada scope tertentu atau tidak.

Analoginya seperti ini:

Kita semua bisa melihat bintang-bintang dilangit karena bumi bersifat global. Namun jika kamu tinggal di Bandung, kamu tidak akan bisa melihat monas yang berada di jakarta. Monas bersifat local yaitu hanya berada di Jakarta.

##### Blocks

Blocks adalah code yang berada didalam curly braces {}. Conditional, function, dan  looping menggunakan blocks.

##### Global Scope

Global scope berarti variabel yang kita buat dapat diakses dimanapun dalam suatu file. Agar menjadi Global Scope, suatu variabel harus dideklarasikan diluar Blocks.

```javascript
let myName = 'Aziz';

function greeting() {
    return myName; // Raisha
}

console.log(myName); // Aziz
```

##### Local Scope

Local scope berarti kita mendeklarasikan variabel didalam blocks seperti function, conditional, dan looping. Maka variabel hanya bisa diakses didalam blocks saja. Tidak bisa diakses diluar blocks.

```javascript
// Variable declare in function blocks
function greetings() {
    let myName = 'Aziz';
    return myName; // Aziz
}

console.log(greetings()) // Aziz
console.log(myName) // Uncaught ReferenceError: myName is not defined because local scope
```



## 5. Javascript Function

Apa itu javascript function ? Function adalah sebuah blok kode dalam sebuah grup untuk menyelesaikan 1 task/1 fitur. Saat kita membutuhkan fitur tersebut nantinya, kita bisa kembali menggunakannya.

##### Membuat Function

```javascript
function greeting() {
	return 'Hello world';
};
```

![5](https://user-images.githubusercontent.com/37678093/180957670-5bb9b2ab-707c-4a6f-a866-16a5dc0dc3f5.png)


##### Memanggil Function

```javascript
greeting() // Call the function name
console.log(greeting()) // 'Hello world'
```

![6](https://user-images.githubusercontent.com/37678093/180957735-9d0acd4b-ea03-4879-8d7e-fc418bbb32b4.png)


##### Parameter Function

Dengan parameter, function dapat menerima sebuah inputan data dan menggunakannya untuk melakukan task/tugas.
Saat membuat function/fitur, kita harus tahu data-data yang dibutuhkan. Misalnya saat membuat function penambahan 2 buah nilai. Data yang dibutuhkan adalah 2 buah nilai tersebut.

```javascript
function penambahan(a, b) {
    return a + b;
}
```

![7](https://user-images.githubusercontent.com/37678093/180957758-040ea8c0-753b-415b-b8fc-2dfa94185a26.png)


##### Argument Function

Argumen adalah nilai yang digunakan saat memanggil function. Jumlah argumen harus sama dengan jumlah parameternya. Jadi jika di function penambahan ada 2 parameter nilai saat membuat function. Saat memanggil function kita gunakan 2 buah nilai argumen.

```javascript
function penambahn(a, b) {
    return a + b;
}

console.log(penambahan(5, 5)) // 10
```

![8](https://user-images.githubusercontent.com/37678093/180957805-6781b07f-d57b-4fdd-b3d0-d2f36aad7ff6.png)


Nantinya saat kita mengembangkan aplikasi dengan skala besar, function sangat sangat dibutuhkan agar kita dapat dengan mudah memanage code dan tracing code jika ada error.

##### Default parameters

Default paramaters digunakan untuk memberikan nilai awal/default pada parameter function. Default parameters bisa digunakan jika kita ingin menjaga function agar tidak error saat dipanggil tanpa argumen

```javascript
function greetOnWebsite(name = 'Stranger') {
    return 'Hello ' + name;
}

console.log(greetOnWebsite('Aziz')); // 'Hello Aziz'
console.log(greetOnWebsite()); // 'Hello Stranger'
```

##### Function Helper

Kita bisa menggunakan function yang sudah dibuat pada function lain.

```javascript
function multiplyByNineFifths(number) {
    return number * (9/5);
};

function getFahrenheit(celcius) {
    return multiplyByNineFifths(celcius) + 32;
}

getFahrentheit(15); // 15
```

##### Arrow Function

Arrow function adalah cara lain menuliskan function. Ini adalah fitur terbaru yang ada pada ES6 (Javascript Version).

```javascript
const greeting = () => {
    return 'Hello world';
};

const penambahan = (a, b) => {
    return a + b;
};
```

##### Short Syntax Function

![9](https://user-images.githubusercontent.com/37678093/180957870-0f02d4e7-7afe-4b35-8a40-1f93fdb34392.png)

![10](https://user-images.githubusercontent.com/37678093/180957943-396295c7-3858-465f-ae29-3e3f5c586678.png)



## 6. Javascript DOM

##### Apa itu DOM

![11](https://user-images.githubusercontent.com/37678093/180957991-31ea201b-0f2b-4eb4-a3bc-d35372a15cdb.png)

##### Struktur DOM

![12](https://user-images.githubusercontent.com/37678093/180958020-d8b3788b-823d-45fb-b9e8-06bd6758aee8.gif)

##### Penggunaan DOM

Membuat HTML
Modifikasi CSS dalam HTML
Modifikasi Atribut dalam HTML
Menambahkan event listener (keypress, mouseover, mouseout, dll)

![13](https://user-images.githubusercontent.com/37678093/180958087-624c1657-1e65-47aa-bc9a-7a9bd7328d2a.gif)

##### Cara Akses DOM

![14](https://user-images.githubusercontent.com/37678093/180958124-27782a3b-c421-4e54-a2a8-67b772288de2.png)

##### Akses HTML via DOM

![15](https://user-images.githubusercontent.com/37678093/180958171-93cf4b4c-e806-47b5-9688-f8e3381dd9ae.png)

##### Modifikasi CSS dalam HTML

![16](https://user-images.githubusercontent.com/37678093/180958197-6fc1616d-efb9-4248-909c-721a2de6260f.png)

##### Explore DOM

![17](https://user-images.githubusercontent.com/37678093/180958228-0fdb7fe6-8cb4-4959-870e-adf7041712ea.png)

##### Event Listener

![18](https://user-images.githubusercontent.com/37678093/180958270-0550e77b-2534-49fd-97b7-dd1fdb9b7a59.png)

##### Event List

onclick
mouseover
mouseout
onchange
onkeydown
onkeyup
scroll
focus

##### Contoh Penggunaan Event Listener
![19](https://user-images.githubusercontent.com/37678093/180958306-73b82882-85eb-4828-8766-6c0c192d0259.png)



## 7. Javascript Array

Apa itu Array? Array adalah tipe data list order yang dapat menyimpan tipe data apapun di dalamnya. Array dapat menyimpan tipe data String, Number, Boolean, dan lainnya.

##### Contoh Array

```javascript
// Product Team
// 1. Product Manager
// 2. Front End Developer
// 3. Back End Developer

let productTeam = ['Product Manager', 'Front End Developer', 'Back End Developer'];
console.log(productTeam);

// To do List
// 1. Belajar Javascript
// 2. Mencuci Baju
// 3. Latihan membuat aplikasi Javascript

let todoList = [
    'Belajar Javascript',
    'Mencuci Baju',
    'Latihan membuat aplikasi Javascript'
];
console.log(todoList);
console.log(todoList[0]) // 'Belajar Javascript'
console.log(todoList[1]) // 'Mencuci Baju'

// menyimpan banyak tipe data
/ string, number, dan boolean
let randomData = ['Ini string', 20, true];
console.log(randomData);
```

![21](https://user-images.githubusercontent.com/37678093/180958460-25268628-7f51-4b8f-8ba1-4233966c8b24.png)

![22](https://user-images.githubusercontent.com/37678093/180958497-6881759c-533b-4a61-9d4b-28b202cd3d5f.png)



##### Membuat Array

Array didefinisikan menggunakan square brackets `[ ]`

##### Mengakses / Memanggil Array

Array pada javascript dihitung dari index data ke-0. Data pertama adalah index ke-0.

![20](https://user-images.githubusercontent.com/37678093/180958543-ecabedf4-6d5d-4253-b6a0-a76b4ebdb395.png)



##### Update Array

Seperti tipe data dan variabel pada umumnya, kita dapat mengupdate data pada Array.

```javascript
let productTeam = ['Product Manager', 'Front End Developer', 'Back End Developer'];

productTeam[0] = 'Product Designer';
console.log(productTeam);
// 'Product Designer', 'Front End Developer', 'Back End Developer']
```

##### Const in Array

Jika menggunakan let, kita dapat mengubah array  dengan array baru dan konten nilai yang ada di dalam array dengan nilai lain.
Const tidak bisa melakukan update data, Namun pada Array kita dapat melakukan update konten nilai di dalam array (mutable).
Yang tidak bisa adalah mengubah array dengan array yang baru jika menggunakan const.

```javascript
const cars = ['tesla', 'honda', 'toyota'];
cars = ['nissan'];
console.log(cars);

// Output: Error. Tidak bisa update array baru
// Uncaught TypeError: Assigment to constant variable. 
```

```javascript
const cars = ['tesla', 'honda', 'toyota'];
cars[2] = ['nissan'];
console.log(cars);

// ['tesla', 'honda', 'nissan']
```

##### Array Properties

Array memiliki 5 properti yang sering digunakan yaitu constructor, length, index, input, dan prototype. Kita hanya membahas length. Untuk yang lainnya kamu bisa cek di link ini array properties and method.

Properties adalah fitur yang sudah disediakan oleh Javascript untuk memudahkan developer.

##### .length

length akan mengembalikan nilai dari jumlah panjang data suatu array.

```javascript
let productTeam = ['Product Manager', 'Front End Developer', 'Back End Developer'];
console.log(productTeam.length);
// 3
```

##### Array Method

Array memiliki method atau biasa disebut built-in methods. Artinya Javascript sudah memudahkan kita dengan menyediakan function/method umum yang bisa kita gunakan. Kita tidak perlu membuat function lagi jika method yang kita butuhkan sudah tersedia. Sama halnya dengan Array properti. Kita bisa cek dokumentasi untuk melihat method yang sudah tersedia pada link ini built-in methods atau MDN documentation.

##### Contoh Array Built-in Methods

##### .push()

.push() adalah method untuk menambahkan item  array pada urutan yang paling akhir.

```javascript
let todoList = [
    'Belajar Javascript',
    'Mencuci Baju',
    'Latihan membuat aplikasi Javascript'
];

todoList.push('Mengikuti kelas online Programming');
console.log(todoList);

/* 
['Belajar Javascript', 'Mencuci Baju','Latihan membuat aplikasi Javascript', 'Mengikuti kelas online Programming'];
*/
```

##### .pop()

.pop() adalah method yang menghapus item array index terakhir.

```javascript
let todoList = [
    'Belajar Javascript',
    'Mencuci Baju',
    'Latihan membuat aplikasi Javascript'
];

todoList.pop();
console.log(todoList);

// ['Belajar Javascript', 'Mencuci Baju'];
```

##### .shift()

.shift() adalah method untuk menghapus item Array pada index pertama

```javascript
let todoList = [
    'Belajar Javascript',
    'Mencuci Baju',
    'Latihan membuat aplikasi Javascript'
];

todoList.shift();
console.log(todoList);

// ['Mencuci Baju', 'Latihan membuat aplikasi Javascript']
```

##### .unshift()

.unshift() adalah method untuk menambahkan item Array pada index pertama

```javascript
let todoList = [
    'Belajar Javascript',
    'Mencuci Baju',
    'Latihan membuat aplikasi Javascript'
];

todoList.unshift('Mengikuti kelas online programming');
console.log(todoList);

/*
['Mengikuti kelas online programming', 'Belajar Javascript', 'Mencuci Baju', 'Latihan membuat aplikasi Javascript']
*/
```

##### .sort()

.sort() adalah method untuk mengurutkan secara Ascending atau Descending Alphanumeric

```javascript
const numbers = [1, 5, 6, 7, 4];
numbers.sort();
console.log(numbers);

// [1, 4, 5, 6, 7]
```

##### Looping Pada Array

Array memiliki built in methods untuk melakukan looping yaitu .map() dan .forEach(). Kita harus tahu kapan menggunakan .map() dan juga .forEach() Kenapa ini penting?

##### .forEach()

.forEach() adalah method untuk melakukan looping pada setiap elemen array.

```javascript
const cars ['tesla', 'honda', 'toyota'];
cars.forEach(element => {
    console.log(element);
});
// 'tesla', 'honda', 'toyota'


let arr = [1, 2, 3, 4, 5];
arr.forEach((num, index) => {
    return arr[index] = num * 2;
})
console.log(arr);
// [2, 4, 6, 8, 10]
```

##### .map()

.map() melakukan perulangan/looping dengan membuat array baru.

```javascript
let arr = [1, 2, 3, 4, 5];

let doubled = arr.map(num => {
    return num * 2;
});

console.log(doubled);
// [2, 4, 6, 8, 10]


let arr = [1, 2, 3, 4, 5];
let doubled = arr.map(num => {
    return num * 2;
})
console.log(doubled);
// [2, 4, 6, 8, 10]
```

![23](https://user-images.githubusercontent.com/37678093/180958713-7bbec4de-9819-4bd4-97f3-746f084dbd0f.png)


Kita bisa lihat bahwa .map() dan forEach() sama-sama melakukan looping dan mengembalikan nilai baru dari operasi yang dilakukan. Perbedaannya adalah. forEach tidak dapat membuat Array baru dari hasil operasi yang ada dalam looping. Lalu dari segi performance juga sangat jauh.

.forEach tidak dapat membuat Array Baru

```javascript
let arr = [1, 2, 3, 4, 5];
newArr = arr.forEach((num, index) => {
    return arr[index] = num * 2;
})
console.log(newArr);
// undefined
```

Jadi, gunakan .forEach() jika hanya memerlukan looping untuk menampilkan saja atau menyimpan ke database. Gunakan .map() jika akan melakukan operasi pada array seperti yang dapat mengubah nilai array sebelumnya.



## 8. Javascript Multidimensional Array

Multidimensional Array bisa dianalogikan dengan array of array. Ada array didalam array.

```javascript
let inventory = [
    ['Kaos Polos', 10],
    ['Jaket Hoodie', 12],
    ['Topi', 24],
    ['Celana Jeans', 8],
]

console.log(inventory);
```

![24](https://user-images.githubusercontent.com/37678093/180958751-208ca8f4-22c6-4864-9918-8eeddf2f78f5.png)

![25](https://user-images.githubusercontent.com/37678093/180958789-f4e89819-23a6-4c0e-9121-f40eb015255d.png)


Bayangkan multidimensional ini seperti Table. Baris pada table itu menunjukan jumlah array. Column pada table itu menunjukan isi dari tiap array.

![26](https://user-images.githubusercontent.com/37678093/180958811-18f875d2-b525-41f6-9353-25635046138b.png)


##### Akses index multidimensional array

```javascript
let inventory = [
    ['Kaos Polos', 10],
    ['Jaket Hoodie', 12],
    ['Topi', 24],
    ['Celana Jeans', 8],
]

console.log(inventory[1][0]);
// Jaket Hoodie
```

Sama seperti array satu dimensi, multidimensional array juga dapat menggunakan Property dan Method built-in Array.

```javascript
let inventory = [
    ['Kaos Polos', 10],
    ['Jaket Hoodie', 12],
    ['Topi', 24],
    ['Celana Jeans', 8],
]

inventory.push(['Jaket Sweater', 7])

console.log(inventory);
/* 
[
	['Kaos Polos', 10],
    ['Jaket Hoodie', 12],
    ['Topi', 24],
    ['Celana Jeans', 8],
    ['Jaket Sweater', 7],
]
*/
```

##### Operation using map in multidimensional array

```javascript
let inventory = [
    ['Kaos Polos', 10],
    ['Jaket Hoodie', 12],
    ['Topi', 24],
    ['Celana Jeans', 8],
]

// Menghitung produk yang terjual.
// Kita anggap jumlah stok awal 100 untuk seluruh produk.
inventory.map(dataInventory => {
    let terjual = 100 - dataInventory[1];
    dataInventory[2] = terjual;
});

console.table(inventory);
```

![27](https://user-images.githubusercontent.com/37678093/180958843-40037b95-f64d-47cb-8587-84a9c8c49393.png)


##### LOOPING FOR MULTIDIMENSIONAL ARRAY

```javascript
let inventory = [
    ['Kaos Polos', 10],
    ['Jaket Hoodie', 12],
    ['Topi', 24],
    ['Celana Jeans', 8],
]

inventory.forEach((baris) => {
    baris.forEach((column) => {
        console.log(column);
    });
});

/*
Kaos Polos
10
Jaket Hoodie
12
Topi
24
Celana Jeans
8
*/
```

##### Using For Loop

```javascript
let inventory = [
    ['Kaos Polos', 10],
    ['Jaket Hoodie', 12],
    ['Topi', 24],
    ['Celana Jeans', 8],
]

for (let i = 0, l1 = inventory.length; i < l1; i++) {
    for (let j = 0, l2 = inventory[i].length; j < 12; j++) {
        document.write('<p>' + inventory[i][j] + '</p>');
    }
} 
```

![28](https://user-images.githubusercontent.com/37678093/180958877-ea0e9fb5-3790-404f-b332-e9107ad4f6a9.png)






## 9. Javascript Recursive

Recursive adalah function yang memanggil dirinya sendiri sampai kondisi tertentu. Recursive kebanyakan digunakan untuk case matematika, fisika, kimia, dan yang berhubungan dengan calculation.

![29](https://user-images.githubusercontent.com/37678093/180958899-647c7630-e134-40ab-9194-8c98fd4a84b3.gif)


```javascript
function recursive() {
    recursive();
}
```

Rekursif fokus dalam memecehkan masalah menjadi permasalahan yang paling kecil. Masalah akan diperkecil sampai bagian terkecil kemudian diselesaikan sampai keseluruhan masalah dapat terselesaikan.

Recursive akan berhenti memanggil dirinya sendiri jika kondisi terpenuhi

```javascript
function recursive() {
    if(condition) {
        // stop calling itself
        // ...
    } else {
        recursive();
    }
}
```

##### Contoh kasus rekursif

```javascript
function countDown(fromNumber) {
    console.log(fromNumber);
    
    let nextNumber = fromNumber - 1;
    
    // Jika kondisi ini bernilai false maka recursive berhenti
    if (nextNumber > 0) {
        countDown(nextNumber);
    }
}
countDown(3);

// Output
// 3
// 2
// 1
```

Mencari hasil dari nilai pangkat dengan rekursif

```javascript
function pow(x, n) {
    if (n == 1) {
        return x;
    } else {
        return x * pow(x, n - 1);
    }
}

console.log(pow(2, 3)); // 8
```





## 10. Javascript Regex

Apa itu Regex? Regex adalah susunan karakter/deretan karakter spesial yang menggambarkan pattern/pola untuk pencarian text pada sebuah string atau document.

Regex = Text matching.

Contoh kasus Regex

Validasi input dari sebuah FORM
Mencari keyword tertentu pada email atau halaman web
Mencari IP address dalam kisaran tertentu
Dan masih banyak lagi

Tapi kan bisa menggunakan built-in method seperti substr(), indexOf(), slice()? Bisa jika case nya simple. Tapi bagaimana jika kita butuh pattern tertentu? Nah lebih mudah jika menggunakan Regex

##### Literals

Literals adalah konsep regex yang paling sederhana dimana kita membuat regex sesuai dengan text yang ingin kita cari/match atau mengandung text yang kita cari.

##### test()

Javascript regex punya beberapa built-in methods untuk Regex. Sala satunya adalah test(). test() mengembalikan nilai BOOLEAN (TRUE/FALSE) untuk kecocokan sebuat text yang dicari.

```javascript
let regex1 = new RegExp('monkeys');
console.log(regex1.test('monkeys')) // true

let regex2 = /monkeys/;
console.log(regex2.test('monkeys')); // true
```

```javascript
let regex1 = new RegExp('monkeys');
console.log(regex1.test('monkey')) // false

let regex2 = /monkeys/;
console.log(regex2.test('monkey')); // false
```

Nah sekarang bagaimana kalau kita ingin mendapatkan hasil searching setidaknya mengandung 1 karakter yang dicari???

##### karakter Set

Kita bisa menggunakan karakter set untuk mencari minimal 1 karakter yang sesuai.
Karakter set menggunakan bracket square `[]`

```javascript
let regex1 = new RegExp('[a-z]');
console.log(regex1.test('abc')) // true

let regex2 = /[a-z]/;
console.log(regex2.test('monkey')); // true

let regex3 = /1-5]/;
console.log(regex3.test(7)); // false
```

##### match()

match() sama seperti test() yaitu sebuah method bawaan dari javascript. Namun match() mengembalikan nilai array dari karakter yang match.

```javascript
let myRegex = /m/;
let myName = 'Muhamad Aziz';
console.log(myName.match(myRegex));
```




Ada 2 ‘Why’ yang harus dipertanyakan.<br />
Kok regex ada di index ke 4 untuk pencarian text ‘d’? Padahal di awal ada ‘d’ juga loh.<br />
Kok hanya 1 karakter yang terbaca? padahal ada 3 karakter ‘d’ pada nama ‘Muhamad Aziz’<br />

Tenang…

Kita bisa handle case ini menggunakan FLAGS.

##### Flags

Ada 6 flags dalam Javascript. Kita bahas 2 dahulu yang sering digunakan:<br />
i = Untuk menghandle case-sensitive. Tidak mempermasalahkan besar kecilnya sebuah karakter. Tidak membedakan antara A dan a.<br />
g = Untuk mencari kedalam seluruh string yang ingin dicari. Jika tidak menggunakan flags g, maka sistem akan mengembalikan nilai array pertama yang ditemukan saja atau tidak melanjutkan pencarian.<br />

```javascript
let myRegex = /m/i;
let myName = 'Muhamad Aziz';
console.log(myName.match(myRegex));
```

```javascript
let myRegex = /m/ig;
let myName = 'Muhamad Aziz';
console.log(myName.match(myRegex));
```

##### Karakter Set Short Syntax

Ada beberapa short syntax untuk kumpulan grup karakter.<br />
\d : Seluruh number/digit character. Contohnya [0-9]<br />
\w : Alphanumeric character (26 huruf abjad dan angka). Contohnya [A-Za-z0-9_]<br />
\s : Whitespace character (space, tab, newline, and similar). Contohnya [\t\r\n\f\v]<br />

Misalnya kita membuat format regex: /d/s/w/w/w/w/w/w/w

Ini berarti digit diikuti spasi lalu diikuti dengan 7 word character.

Regex diatas akan match dengan string berikut 3 monkeys

```javascript
let myRegex = /\d\s\w\w\w\w\w\w\w/;
let myName = '3 monkeys';
console.log(myRegex.test(myName)); // true
```

##### Negasi dari Karakter set short syntax

Kita juga bisa menggunakan negasi dari ketiga karakter set short syntax sebelumnya.<br />
\D : TIDAK mengandung seluruh number/digit character. Contohnya [^0-9]<br />
\W : TIDAK mengandung Alphanumeric character (26 huruf abjad dan angka). Contohnya [^A-Za-z0-9_]<br />
\S : TIDAK mengandung Whitespace character (space, tab, newline, and similar). Contohnya [^\t\r\n\f\v]<br />

Icon set caret (^) merupakan negasi dari pattern regex yang dibuat.

```javascript
let notBinary = /[^01]/
console.log(notBinary.test('01010101010110')) // false
console.log(notBinary.test('010101023')) // true
```

##### Quantifiers

Sebelumnya kita membuat contoh regex seperti ini: \d\s\w\w\w\w\w\w\w<br />
Quantifiers adalah membuat format diatas menjadi lebih baik dan rapih<br />
Quantifiers ditandai dengan format curly braces {}<br />
\w{3} : akan match dengan 3 kata/word karakter<br />
\w{4,7}: akan match minimum 4 kata/word character dan maksimal 7 kata/word character<br />

roa{3}r akan match jika kita melakukan pencarian string ‘roaaar’

Quantifiers bersifat greedy.

Jika ada regex roa{3,7}r lalu ada pola yang mendekati seperti ‘roaaar’, ‘roaaaar’, dan ‘roaaaaaaa’. Maka yang didapatkan adalah a yang paling besar atau maksimal.

Quantifiers - 0 or more, 1 or more

Quantifiers sebelumnya tidak bisa handle untuk kemiripan text yang dicari dengan regex yang dibuat.

Untuk mengatasi ini kita bisa menggunakan asterik (*) atau plus (+).

##### Quantifiers - 0 or more, 1 or more

(*) : Karakter yang diikuti dengan * dibolehkan tidak tampil sama sekali atau boleh tampil satu kali, dan seterusnya
(+): Karakter yang diikuti dengan + dibolehkan minimal tampil 1 kali dan seterusnya

```javascript
let myRegex = /muh*amad/;
console.log(myRegex.test('muamad')); // true

let myRegex = /muh+amad/;
console.log(myRegex.test('muamad')); // false

let myRegex = /az+iz/;
console.log(myRegex.test('azzziz')); // true
```

##### Anchors

Jika kita ingin mencari karakter yang persis detail sama, kita bisa menggunakan Anchor.

Diawali dengan (^) dan diakhiri dengan ($)

```javascript
let search = /^Belajar react js dan vue js terbaru$/
console.log(search.test('Belajar react js dan vue js terbaru')); // true

let search2 = /^Belajar react js dan vue js terbaru$/
console.log(search2.test('Belajar react js dan vue js')); // false
```

##### Alternation

Nah bagaiman kalau kita ingin membuat beberapa kalimat yang exactly sama persis dengan pencarian?

Anchors tadi hanya menyediakan 1 kalimat saja.

Selalu ada jalan.

Kita bisa menggunakan yang namanya Alternation.

Menggunakan (|)

```javascript
let search = /^Belajar react js dan vue js terbaru$|^React JS$/
console.log(search.test('React JS')); // true
```





## 11. Javascript Object

Dalam kehidupan nyata, kita sebenarnya sudah sering menjumpai object. Entah itu benda mati atau benda hidup. Semuanya adalah object. Object didunia nyata dapat kita modelkan didalam programming. Jadi pada programming, object adalah sebuah tipe data pada variabel yang menyimpan properti dan fungsi (method)

Tipe data yang sudah kita pelajari:

number
string
boolean
null
undefined
array
object

Properti adalah data lengkap dari sebuah object. Method adalah action dari sebuah object. Apa saja yang dapat dilakukan dari suatu object.

![30](https://user-images.githubusercontent.com/37678093/180959052-3f5a8b74-a650-4dfd-9499-4d32779b0856.png)


Contoh objek mobil dengan properti nilai dan method

![31](https://user-images.githubusercontent.com/37678093/180959332-aee7a954-d6e5-4e5b-ab01-29a8e4bcb83e.png)


##### Membuat sebuah object

Sama seperti tipe data sebelumnya. Object dapat diassign kedalam sebuah variabel.

Sama seperti array, didalam object kita dapat menyimpan properti dengan tipe data apapun.

```javascript
let person = {}; // person is an empty object

// Object person dengan properti
let person = {
    name: 'John Doe',
    age: 25,
    isVerified: true,
}
```

##### Mengakses Object dan Property Object

```javascript
let person = {
    name: 'John Doe',
    age: 25,
    isVerified: true,
}

// Call variable name to access object
console.log(person;
```

![32](https://user-images.githubusercontent.com/37678093/180959362-270de50c-0961-4ca1-9a1b-20473cb9e8bb.png)


Gunakan single quote pada key jika menggunakan spasi seperti ‘current address’

```javascript
let people = {
    name: 'John Doe',
    age: 25,
    'current address': 'Cambridge, UK',
}
```

Mengakses properti object

```javascript
let person = {
    name: 'John Doe',
    age: 25,
    isVerified: true,
}

// Call variable with the property
console.log(person.name); // 'John Doe'
```

![33](https://user-images.githubusercontent.com/37678093/180959385-4e5d0c07-3cc9-443b-80d9-37e3ddcba4c7.png)


##### Bracket Notation

Kita juga bisa menggunakan bracket notation saat memanggil properti dari sebuah object.

```javascript
let people = {
    name: 'John Doe',
    age: 25,
    'current address': 'Cambridge, UK',
}

console.log(people['name']); // 'John Doe'
console.log(people['current address']); // 'Cambridge, UK'
```

##### Update Object

Kita dapat melakukan update pada variabel dengan tipe data Object.

Do’s

Object dapat mengupdate value dari key yang sudah tersedia
Object dapat menambahkan key dan value baru

```javascript
let person = {
    name: 'John Doe',
    age: 25,
    isVerified: true,
}

// Update current key with the new value
people.age = 27;

// add new key with the new value
people.address = 'Cambridge, UK';

console.log(people);
/*
{
 	name: 'John Doe',
    age: 27,
    isVerified: true,
    address: 'Cambridge, UK',
}
*/
```

Dont’s

Jika menggunakan constant pada variable object. Kita tidak bisa mengganti seluruh data object dengan object yang baru.

```javascript
const person = {
    name: 'John Doe',
    age: 25,
    isVerified: true,
}

people = {
    fullname: 'John Doe'
}

console.log(people) // Uncaught TypeError: Assignment to constant variable.
```

Jadi jika membutuhkan untuk update seluruh data object gunakan ‘let’ pada saat deklarasi variabel. Update data object harus menggunakan let pada deklarasi variabel

```javascript
let person = {
    name: 'John Doe',
    age: 25,
    isVerified: true,
}

people = {
    fullname: 'John Doe'
}

console.log(people)
/*
{
	fullname: 'John Doe',
}
*/
```

##### Delete Object Property

Kita dapat menghapus properti dari object menggunakan delete operator. Delete property object age dari data people

```javascript
let person = {
    name: 'John Doe',
    age: 25,
    isVerified: true,
}

delete people.age;

console.log(people)
/*
{
	name: 'John Doe',
	isVerified: true,
}
*/
```

##### Method

Jika value yang kita masukkan pada property berupa function. Maka itu disebut method. Kamu pasti terbiasa menggunakan console.log() bukan? Atau menggunakan Math.floor() ? Nah console adalah global javascript object. log() adalah property yang berupa function dari object console. Sehingga kita memanggila dengan cara console.log(). Kita bisa membuat method custom untuk kita gunakan pada aplikasi kita loh. Kita akan membuat method untuk greeting pada aplikasi ecommerce misalnya. Ada 2 method pada object greeting

```javascript
const greeting = {
    welcome: function () {
        return 'Halo selamat datang';
    },
    afterTransaction: function () {
        return 'Terima kasih sudah membeli produk kami';
    },
};

console.log(greeting.welcome()); // 'Halo selamat datang'
```

##### Nested Object

Pada real application nanti kalian pasti menemukan data object yang kompleks. Object yang berasal dari turunan object lainnya. Data article pada sebuah aplikasi berita.

```javascript
const news = {
    title: 'Eduwork tempat pembelajaran terbaik menjadi Software Engineer',
    description: 'semua bisa menjadi software engineer asalkan sungguh-sungguh',
    author: {
        people: {
            name: 'John Doe',
            age: 25,
            city: 'Jakarta',
        }
    }
};

console.log('News:', news.title);
console.log('Article published by', news.author.people.name);

/*
'News: Eduwork tempat pembelajaran terbaik menjadi Software Engineer'
'Article published by John Doe'
*/
```

##### Pass by reference

Kita bisa mengubah data yang ada pada object melalui sebuah function dan memasukkan object sebagai parameter function. Ini biasa disebut passed by reference. Kita mengubah data object number dengan sebuah function changeData

```javascript
let number = {
    originA: 2,
    originB: 3,
};

function changeData (obj) {
    obj.originA = 4;
    obj.originB = 6;
};

changeData(number)
console.log(number.originA); // 4
console.log(number.originB); // 6
```

##### Looping Object

Jika kita ingin menampilkan seluruh object properti. Kita bisa menggunakan looping. Jadi tidak perlu mengakses secara manual memanggil setiap propertinya. Looping pada object

```javascript
for(let key in object) {
    // ...
};
```

```javascript
const news = {
    title: 'Eduwork tempat pembelajaran terbaik menjadi Software Engineer',
    description: 'semua bisa menjadi software engineer asalkan sungguh-sungguh',
    author: {
        people: {
            name: 'John Doe',
            age: 25,
            city: 'Jakarta',
        }
    }
};

for(let data in news) {
    console.log(news[data]);
};
// 'Eduwork tempat pembelajaran terbaik menjadi Software Engineer'
// 'semua bisa menjadi software engineer asalkan sungguh-sungguh'
// people { ... }

for(let author in news.author.people) {
    console.log(news.author.people[author]);
}

// John Doe
// 25
// Jakarta
```

##### Array of Object

Apakah object hanya menyimpan 1 data? Tidak.  Object sama seperti Array yang bisa menyimpan banyak data. Kita dapat menggunakan array of object untuk data yang lebih dari satu.

```javascript
let students = [
    {
        name: 'John Doe',
        age: 25,
        isVerified: true,
    },
    {
        name: 'Ironman',
        age: 30,
        isVerified: false,
    },
    {
        name: 'Black Panther',
        age: 28,
        isVerified: true,
    },
]

// Gunakan forEach jika object berada di dalam array
students.forEach((listStudent) => {
    console.log(listStudent);
})
```





## 12. Javascript OOP

Object Oriented Programming (OOP) adalah suatu paradigma dalam pemrograman. Kita telah mempelajari paradigma seperti procedural, conditional, hingga function.

Kita tahu bahwa tipe data dalam javascript terdiri dari 6 tipe data primitive (value type):
string
number
boolean
null
undefined
Symbol (ES6)

Ada juga yang disbut reference type:

Object
Function
Array

Object person yang terdiri dari property dan method

```javascript
let person1 = {
    name: 'Chris Yeo',
    age: 25;
    detail: function() {
        return `${this.name} berusia ${this.age}`
    },
};

let person2 = {
    name: 'Ridho Majid',
    age: 25,
    detail: function() {
        return `${this.name} berusia ${this.age}`
    },
};

console.log(person1.detail());
console.log(person2.detail());
```

![34](https://user-images.githubusercontent.com/37678093/180959485-eb627812-097f-4230-abba-59292e79b1a4.png)

Bayangkan kamu diminta membuat 100 objek yg memiliki property dan method yang sama. HMMM banyak ya.

Kita akan membuat hal diatas menjadi lebih efektif dan powerful dengan OOP

OOP adalah principle. Jadi dapat diterapkan pada bahasa programming selain Javascript seperti Ruby, Python, dan Java.

##### 4 pilar pada OOP

Ada 4 hal pilar dalam OOP:
Encapsulation
Abstraction
Inheritance
Polymorpishm

##### OOP pada Javascript

Saat ini OOP dapat dibuat menggunakan:
function
class (ES6)

Membuat Object person menggunakan function

```javascript
function Person(name, age) {
    this.name = name;
    this.age = age;
    this.detail = function(){
        return `${this.name} berusia ${this.age}`;
    };
}

let person1 = new Person('John', 25);
let person2 = new Person('Marvel', 27);

console.log(person1.name);
console.log(person1.name);
console.log(person1.detail());
console.log(person1.detail());
```

![35](https://user-images.githubusercontent.com/37678093/180959518-c662d2f6-8bd9-44bd-8a63-82aa8983e66d.png)

Object dengan menggunakan class

```javascript
class Person {
    constructor(name, age) {
        this.name = name;
        this.age = age;
    }
    detail() {
        return `${this.name} berusia ${this.age}`;
    };
};

let person1 = new Person('John', 25);
let person2 = new Person('Marvel', 27);

console.log(person1.name);
console.log(person1.name);
console.log(person1.detail());
console.log(person1.detail());
```

![36](https://user-images.githubusercontent.com/37678093/180959564-69b6e0c0-b807-4bc6-be9e-b6bb2f14576d.png)

##### this keyword

This adalah sebuah keyword khusus yang merujuk pada pada objek pemiliknya. Maksudnya adalah nilai dari this sangat bergantung pada di mana keyword this ini diletakkan atau di panggil. Jika this di gunakan dalam sebuah method maka ia merujuk pada objek pemiliknya. Jika this di dalam sebuah function maka ia merujuk pada global objek atau window. Dalam kasus function constructor dan class maka keyword this ini mengacu pada objek instannya.

##### Pilar 1 - Encapsulation

Encapsulation adalah cara untuk membatasi akses langsung ke properti atau method dari sebuah objek.

Property pricePerKm nilainya menjadi 10000

```javascript
function Gojek(jarak){
    this.pricePerKm = 4000;
    this.jarak = jarak;
    
    this.price = function() {
        return this.pricePerKm * this.jarak;
    }
}

let client1 = new Gojek(2);
client1.pricePerKm = 10000;

console.log(client1.price());
```

Property pricePerKm tergantikan dengan nilai 10000 sehingga console.log menjadi 20000 pada method price()

![37](https://user-images.githubusercontent.com/37678093/180959598-e61e2ada-caf4-4e98-af3e-e60f1774ed27.png)

Seharusnya kita tidak bisa mengganti nilai property pada Class saat membuat objek baru.

Nilai property dan method pada Class harus independen dan tidak boleh diganti dari luar Class.

Untuk itu kita gunakan konsep Encapsulation dengan menghilangkan this pada property dan method yang bernilai constant dan tidak boleh diubah.

Lakukan encapsulation pada property pricePerKm

```javascript
function Gojek(jarak){
    const pricePerKm = 4000; // Tidak menggunakan this
    this.jarak = jarak;
    
    this.price = function() {
        return pricePerKm * this.jarak;
    }
}

let client1 = new Gojek(2);
client1.pricePerKm = 10000;

console.log(client1.price()); // 8000
```

![38](https://user-images.githubusercontent.com/37678093/180959636-c68442b6-f1ec-4642-9343-2269a2f178ec.png)

##### Pilar 2 - Inheritance

Inheritance dalam OOP adalah sebuah proses dimana sebuah class mewariskan property dan methodnya ke class lain atau childnya.

Dari kode dibawah, berarti class People mewariskan property name dan age ke class Person

```javascript
class Person {
    constructor(name, age) {
        this.name = name;
        this.age = age;
    }
    detail() {
        return `${this.name} berusia ${this.age}`;
    };
};

class Person extends People {
    constructor(name, age, job) {
        super(name, age);
        this.job = job
    };
};

let client = new Person('John Doe', 26, 'Front end developer');

console.log(client.name);
console.log(client.job);
console.log(client.detail());
```

##### Pilar 3 - Polymorpishm

Secara bahasa, polymorphism berasal dari dua kata, yaitu poly yang berarti banyak dan morphism yang berarti bentuk. Polymorpish ini juga dikenal pada konsep OOP yang berarti kemampuan dari suatu objek untuk memiliki banyak bentuk. Pada pilar sebelumnya yaitu inheritance, child class dapat mewarisi properti dan method dari parent class.  Nah pada Polymorpishm, method yang diwariskan bisa kita ubah dengan behaviour yang berbeda menyesuaikan child class yang kita buat.

```javascript
class Animal {
    animalSound() {
        console.log("The animal makes a sound");
    }
}

class Cat extends Animal {
    animalSound() {
        console.log("Miaaaw");
    }
}

let persiaCat = new Cat();
persiaCat.animalSound(); // "Miaaaw"
```

##### Pilar 4 - Abstraction

Abstraction adalah sebuah teknik untuk menyembunyikan detail tertentu dari sebuah objek/method dan hanya menampilkan fungsionalitas atau fitur penting dari objek tersebut. Terkadang method yang tidak memiliki body pada parent class.

Kita analogikan seperti ini.

Setiap hari kamu berangkat ke kantor dengan mengendarai mobil pribadimu.

Kamu sebenarnya tidak perlu tahu bagaimana mesin mobil itu bekerja sampai membuat mobilnya bisa bergerak atau bagaimana sistem pembakaran dalam mesinnya dan apa yang terjadi di dalam mesin ketika kamu menginjak pedal gas.

Yang perlu kamu tahu adalah cara menyalakan mobil dan tau cara menyetir.

```javascript
class Hero {
    constructor(hp) {
        this.healthPoint = hp;
    }
    
    bertarung() {
        this.healthPoint -= 50;
        return this.healthPoint;
    }
    
    makan() {
        this.healthPoint += 100;
        return this.healthPoint;
    }
}

let alpha = new Hero(500);

console.log(alpha.bertarung());
console.log(alpha.makan());
```

```javascript
class Animal {
    animalSound() {}
}

class Cat extends Animal {
    animalSound() {
        console.log("Miaaaw");
    }
}

let persiaCat = new Cat();
persiaCat.animalSound(); // Miaaaw
```





## 13. Javascript Object Prototype

Apa itu Javascript Prototyping? Javascript adalah bahasa programming yang memiliki fitur prototype. Artinya setiap kita membuat object atau function, engine javascript akan menambahkan prototype properti pada keduanya.

##### Constructor

Jika kita ingin membuat banyak object dari pola data object yang memiliki properti yang sama. Kita bisa menggunakan konsep constructor.

Constructor Person

```javascript
// make constructor
function Person(first, last, age, eyecolor) {
    this.firstName = first;
    this.lastName = last;
    this.age = age;
    this.eyeColor = eyecolor;
}

// Create two instance
var myFather = new Person("John", "Doe", 50, "blue");
var myMother = new Person("Sally", "Rally", 48, "green");

// view data
console.log(myFather.firstName)// "John"
console.log(myMother.lastName) // "Sally"
```

Kita tidak bisa mengupdate data constructor secara langsung.

```javascript
function Person(first, last, age, eyecolor) {
    this.firstName = first;
    this.lastName = last;
    this.age = age;
    this.eyeColor = eyecolor;
}

// Tidak bisa menambahkan properti secara langsung
Person.nationality = "Indonesia"

var myFather = new Person("John", "Doe", 50, "blue");
var myMother = new Person("Sally", "Rally", 48, "green");

// view data
console.log(myFather.firstName)// "John"
console.log(myMother.nationality) // undefined
```

##### Object Prototyping

```javascript
console.log(Object);
console.log(Object.prototype);
```

![39](https://user-images.githubusercontent.com/37678093/180959706-cc55b2d1-6acf-4548-b184-c7abb6d73e1d.png)

Untuk mengatasi tidak bisa update properti dari object secara langsung, kita bisa menggunakan prototyping untuk object.

```javascript
function Person(first, last, age, eyecolor) {
    this.firstName = first;
    this.lastName = last;
    this.age = age;
    this.eyeColor = eyecolor;
}

// Menambahkan properti secara langsung menggunakan prototyping
Person.prototype.nationality = "Indonesia"

var myFather = new Person("John", "Doe", 50, "blue");
var myMother = new Person("Sally", "Rally", 48, "green");

console.log(myFather.firstName)// "John"
console.log(myMother.nationality) // "Indonesia"
```

##### Method/Function Prototyping

Kita juga bisa menambahkan method untuk constructor yang telah kita buat. Method akan bisa digunakan untuk semua instance object. Jadi buat 1 kali untuk digunakan semua instance object.

Menambahkan method untuk constructor person

```javascript
function Person(first, last, age, eyecolor) {
    this.firstName = first;
    this.lastName = last;
    this.age = age;
    this.eyeColor = eyecolor;
}

// Menambahkan properti secara langsung menggunakan prototyping
Person.prototype.nationality = "Indonesia"

// Menambahkan Method
Person.prototype.greeting = function() {
    return "Hello " + this.firstName;
}

var myFather = new Person("John", "Doe", 50, "blue");
var myMother = new Person("Sally", "Rally", 48, "green");

console.log(myFather.firstName)// "John"
console.log(myMother.nationality) // "Indonesia"
console.log(myFather.greeting) // "Hello John"
```

##### Protoyping from Data Type

Setiap tipe data memiliki prototyping. Setiap tipe data memiliki properti bawaan.

melihat properti apa saja yang dimiliki oleh string

```javascript
console.log(String.prototype)
```

List properti dari String

![40](https://user-images.githubusercontent.com/37678093/180959744-d3d972db-364a-40a0-afd2-e7b0f7f3d55f.png)

Jika dari list tersebut kamu tidak menemukan method built-in atau properti yang kamu butuhkan. Cool, Ini saatnya kita membuat properti tambahan/custom untuk string menggunakan prototyping.

kita membuat properti tambahan untuk String

Method untuk mengulang string selama yang kita butuhkan

```javascript
String.prototype.repeatString = function (n) {
    return this.repeat(n);
}
console.log('Eduwork'.repeatString(3));
```

Great! Properti yang kamu buat sudah ada pada tipe data String

![41](https://user-images.githubusercontent.com/37678093/180959776-c550e537-be30-4c03-b24f-7eb618e66cf4.png)





## 14. Javascript Modules

Apa itu Modules? Modules adalah reusable code yang dapat di export dari suatu file javascript dan di import ke file javascript yang lain. Reusable code disini adalah data yang dapat digunakan berulang kali. Kita dapat melakukan export pada data apapun seperti string, object, array, number, class, hingga function/method.

Kenapa harus membuat program menjadi modules?

Mudah menemukan dan mengatasi debug pada program
Membuat program menjadi component-component kecil sehingga code lebih mudah dibaca, dimengerti, dan mudah dimaintain
Reusable code. Kita cukup membuat logic method pada suatu file lalu gunakan method tersebut pada file lainnya

##### Membuat Modules

Ada beberapa cara untuk membuat modules javascript.  Bisa menggunakan Node JS, CommonJS, dan ES6 Features. Kita akan menggunakan ES6 karena Node JS dan Common JS biasa digunakan untuk server-side. ES6 adalah version terbaru dari Javascript.

##### Preparation

Sebelum menggunakan export import untuk membuat modules. Ada beberapa syarat yang harus disiapkan.Saat menjalankan modules, kita tidak bisa menggunakan url local komputer kita di browser. Harus menggunakan static-server. Gunakan extension Live Server pada Visual Studio Code.

Jalankan file index.html menggunakan Live Server

![42](https://user-images.githubusercontent.com/37678093/180959806-c76cfcee-b7a3-42ad-af8c-61a3a8788ffa.png)

Lalu pada file index.html kita harus menambahkan script attribute type untuk modules.

index.html dengan attribute script type=”modules”

![43](https://user-images.githubusercontent.com/37678093/180959895-07f06cb7-4aba-4147-96d5-250a456002cb.png)

##### export dan import

Kita akan membuat modules untuk greeting pada toko online.

Siapkan file index.html

![43](https://user-images.githubusercontent.com/37678093/180959930-ac28c680-5b4e-4db9-9a1a-9e4809234296.png)

file greetings.js

![44](https://user-images.githubusercontent.com/37678093/180959961-658084c1-7789-4cd6-8c16-5af77c063cf2.png)

file index.js

![45](https://user-images.githubusercontent.com/37678093/180959983-95c11601-df32-4dfd-98ae-c1af0c74e0a5.png)

Pada file greetings.js kita membuat 2 method/function yang reusable.

Kita bisa gunakan method tersebut di setiap program aplikasi kita jika dibutuhkan.

Agar method/function pada file greetings.js dapat digunakan, kita harus menambahkan keyword export pada setiap function.

Memanggil method sayHi

![46](https://user-images.githubusercontent.com/37678093/180960003-44b419c3-6e35-4086-b5bf-8f65615522c1.png)

Memanggil method sayThanks

![47](https://user-images.githubusercontent.com/37678093/180960018-d6d661a5-7381-4f5a-be47-fc42b0b53b6d.png)

Ada cara lain untuk melakukan export

```javascript
let shopName = 'Eduwork Clothes'

// Method mengucapkan selamat datang kepada user
function sayHi(user) {
    alert(`Hello, ${user}!`)
}

// Method mengucapkan terima kasih untuk pembelian pada aplikasi
function sayThanks(user, product) {
    alert(`Thank you ${user} for your purchase of ${product}`)
}

// Export function dan variabel seperti dibawah ini
export {
	shopName,
    sayHi, 
    sayThanks,
}
```

##### Export as

Saat melakukan export, kita bisa mengganti nama dari function, variabel, dan data lainnya menggunakan keyword “as”

file greetings.js

```javascript
import { shop, hai, thanks } from "./greeting.js";

alert(shop);
hai('John') 
thanks('John', 'Sweater') 
```

##### import as

Kita juga bisa mengubah langsung nama data yang kita import menggunakan keyword ‘as’.

```javascript
import {shopName as shop, sayHi as hai, sayThanks as thanks} fropm "./greeting.js";

alert(shop);
hai('John') 
thanks('John', 'Sweater') 
```

##### Export default

Export default digunakan jika hanya 1 data yang ingin kita export. Biasanya digunakan jika hanya ada 1 data atau export single class component.

file greetings.js

```javascript
export default function sayHi(user) {
    alert(`Hello, ${user}!`);
}
```

file index.js

```javascript
// Import dari export default tidak menggunakan curly braces
import sayHi from './greetings.js';

sayHi('John');
```





## 15. Javascript Asynchronous

Javascript adalah bahasa pemrograman single-thread yang artinya hanya dapat mengeksekusi satu task pada satu waktu atau biasa disebut synchronous. Pada konsep pemrograman (web development pada case kita) dikenal istilah Asynchronous. Asynchronous mengizinkan komputer memproses task yang lain sambil menunggu proses yang masih berlangsung. Analoginya seperti ini: Saat kita mencuci baju di mesin cuci. Agar lebih produktif, sambil menunggu pencucian selesai kita bisa melanjutkan pekerjaan rumah lainnya seperti mencuci piring. Ok, kalau javascript single-thread lalu bagaimana cara membuatnya menjadi asynchronous?

Kita bisa membuat asynchronous secara simulasi artinya tidak murni asynchronous dengan beberapa cara:

Callback
Promises
Async/Await

##### Callback

Callback sebenarnya adalah function bedanya dengan function pada umumnya adalah di cara eksekusinya.  Jika function pada umumnya di eksekusi berurutan dari atas ke bawah maka callback di eksekusi pada point tertentu, itu sebabnya di sebut callback. Proses asynchronous identik dengan delay, dimana hasil dari proses tersebut membutuhkan selang waktu tertentu untuk menghasilkan output. Kita akan menemukan proses asynchronous pada proses Ajax, komunikasi HTTP, Operasi file, timer, dsb

Ini adalah synchronous yaitu program dijalankan sesuai urutan code

```javascript
function p1() {
    console.log('p1 selesai dijalankan')
};

function p2() {
    console.log('p2 selesai dijalankan')
}

function p3() {
    console.log('p3 selesai dijalankan')
}

p1();
p2();
p3();

/*
p1 selesai dijalankan
p2 selesai dijalankan
p3 selesai dijalankan
*/
```

Pada asynchronous kita menggunakan setTimeOut untuk simulasinya. Proses function pada p2 kita lewati sambil menunggu selesai, program lanjut ke function p3

```javascript
function p1() {
    console.log('p1 selesai dijalankan')
};

function p2() {
    setTimeout(
        function(){
            console.log('p2 selesai dijalankan')
        }, 100
    )
};

function p3() {
    console.log('p3 selesai dijalankan')
};

p1();
p2();
p3();

/*
p1 selesai dijalankan
p2 selesai dijalankan
p3 selesai dijalankan
*/
```

setTimeout digunakan untuk simulasi asynchronous. Karena sebenarnya kita tidak bisa membuat proses asynchronous murni.

##### Promises

##### Async-Await

##### HTTP Request fetch()





## 16. Javascript Advanced ES6

Kebutuhan pengembangan web saat ini tidak seperti dulu lagi, banyak aplikasi berbasis web yang semakin kompleks. Dan hal itu tidak mungkin atau minimal sulit jika hanya mengandalkan versi Javascript lama. Oleh karena itu dikeluarkan standar standar baru untuk mensupport kebutuhan tersebut.

Var, let, and const

Secara fungsionalitas var, let dan const bisa dibilang SAMA, karena untuk mendeklarasikan sebuah variabel menggunakan Javascript. Perbedaannya adalah di SCOPE dan mengubah nilai pada variabel tersebut setelah di deklarasi. Untuk variabel ‘const’, kita tidak bisa mengubah / mengganti nilai tersebut, karena bersifat KONSTAN.

Contoh mengubah nilai dari variabel const, mengembalikan error.

```javascript
const name = "Muhamad Aziz"

name = "Ironaman" // Uncaught TypeError: Assigment to constant variable.
```

Penggunaan var, dan let biasa dibedakan dengan SCOPE-nya,
Global Scope : sebuah variabel yang dapat diakses oleh keseluruhan bagian dalam sebuah file Javascript.

Global Scope : sebuah variabel yang dapat diakses oleh keseluruhan bagian dalam sebuah file Javascript.

Local Scope : adalah sebuah variabel yang dapat diakses di dalam BLOCK SCOPE-nya, di mana sebuah variabel tersebut di deklarasikan .

Global vs Local Variable

```javascript
var num = 10
function test(){
    var num = 10
    console.log("value of num in test()" + num)
}

console.log("value of num outside test()" + num)

test()

// value of num outside function test() 10
// value of num inside function test() 100
```

Strict Mode adalah cara atau jalan untuk memilih mode javascript yang “terbatas / ketat”.

```javascript
"use strict"

function test(){
    var num = 100
    console.log("value of num in test()" + num)
    }
        console.log("Inner Block begins")
        let num = 200
        console.log("value of num: " + num)
    }
}

test()

// value of num in test() 100
// Inner Block begins
// value of num : 200
```

##### Template Literal

Penggunaan template literal, menggabungkan string dengan variabel, dimulai dengan tanda backtick, dollar sign beserta nama variabel yang ingin ditampilkan.

```javascript
let firstName = "Muhamad"
let lastName = "Aziz"

const fullName = `${firstName} ${lastName}`
```

Kita juga bisa melakukan operasi matematika variabel di dalam template literal.

```javascript
let number1 = 20
let number2 = 30

const add = `${number1 + number2}`
```

##### Arrow Functions

Arrow functions adalah salah satu fitur dari ES6 untuk memudahkan javascript developer untuk menulis kode yang lebih singkat.

contoh penulisan function biasa

```javascript
function greeting(nama){
    return "Halo, selamat datang" + nama
}

console.log(greeting("Aziz"))
```

Penulisan dengan syntax ES6, menggunakan kata kunci const, untuk menampung variabel function, dengan parameter nama, lalu mengembalikan nilai string yang digabungkan dengan variabel. Menggunakan template literal.

```javascript
const greeting = (nama) => {
    return `Halo, selamat datang ${nama}`
}

console.log(greeting("Aziz"))
```

Jika parameter hanya membutuhkan 1 nilai input, maka kita juga tidak harus menggunakan tanda ( ), dan juga bisa langsung menuliskan hasil jika hanya 1 baris kode.

```javascript
const greeting = nama => `Halo, selamat datang ${nama}`
console.log(greeting("Aziz"))
```

##### Object Destructuring

Dengan object destructuring kita bisa membuat variabel baru dengan merujuk kepada objek untuk mempermudah pemanggilan variabel dalam objek.

```javascript
const siswa = {
    firstName: "John",
    lastName: "John Doe",
    age: 26,
    city: "Depok",
    country: "Indonesia"
}

const (firstName, lastName) = siswa;

console.log(` Halo, ${firstName} ${lastName}`)
```

##### Array Destructuring

Dengan Array destructure, kita bisa memberikan nama variabel pada setiap indexnya. Dan kita juga bisa mengganti nilai array dengan memanggil variabel.

```javascript
let [siswa1, siswa2, siswa3, siswa4] = ["Ironman", "Black Panther", "Hulk", "Spiderman"]

siswa1 = "Superman"
console.log(siswa1)
```

##### Object Literal

Contoh dalam pembuatan function, dengan menggunakan object literal kita dapat mengambil nilai parameter sebagai properti dari objek baru.

```javascript
const tambahSiswa = (nama, kota) => {
    const newSiswa = {newNama: nama, newKota, kota};
    
    console.log(newSiswa);
}

tambahSiswa("Spiderman", "Depok");
```

Contoh lainnya.

```javascript
const addressMaker = address => {
    const {city, state} = address;
    
    const newAddress = {
        city,
        state,
        country: "Indonesia"
    };
    console.log(`${newAddress.city}, ${newAddress.state}, ${newAddress.country}`)
}

addressMaker({city: "Jakarta Selatan", state: "DKI Jakarta"});
```

##### Spread Operator

Dengan Spread Operator kita bisa melakukan duplikasi nilai pada array, object dll. Pada contoh diatas, kita melakukan duplikasi array1, kedalam array2.

```javascript
let array1 = [1, 2, 3, 4, 5, 6, 7, 8, 9]
```

```javascript
let array2 = ['Pertama', 'Kedua', ...array1]

console.log(array1);
console.log(array2);
```

Kita juga bisa menduplikasi isi dari sebuah objek, bahkan dengan menambahkan key dan value pada objek yang baru.

```javascript
let siswa1 = {
    name: 'Ironman',
    age: 27
}

let alamatSiswa1 = {
    ...siswa1,
    alamat: 'Depok'
}
```

##### Rest Operator

Sebagai contoh diatas, kita menggunakan rest parameter sebagai parameter function. Dan melakukan operasi matematika dengan method reduce. Kita bebas mengisikan berapapun nilai pada argumen.

```javascript
const add = (...args) => {
    return args.reduce((a, b) => a + b)
}

console.log(add(20, 12, 20));
```

##### Default Parameter

Default parameter digunakan untuk mengantisipasi nilai dari function, jika user tidak menginput argumen yang dibutuhkan dari function tersebut.

```javascript
const greeting = (name = "Anonymous") => {
    return `Halo, selamat datang ${name}`
}

console.log(greeting('John'));
console.log(greeting());
```

##### Export & Import

Dengan export & import, kita bisa dengan mudah memisahkan file, data, dan module. Dan menggunakannya di tempat terpisah.

Pada contoh di atas, kita menuliskan data berupa array pada file terpisah.

```javascript
// variable.js

export const data = [1, 2, 4, 5, 6, 5, 7, 6]
```

Pada file index.js sebagai contoh, kita akan mengimport file data, dan akan menggunakannya di file terpisah.

```javascript
// index.js

import { data } from './variable.js'

console.log(data);
```

Note: tidak hanya variabel, kita juga bisa mengimport dan mengeksport function.

##### Async Await

Asynchronous function biasa digunakan untuk proses fetch data dari API, atau juga digunakan untuk memberikan delay / jeda pada function.

Pada contoh dibawah ini, kita melakukan fetch data dari pokeAPI, menggunakan function, kata kunci .then() disini menjelaskan jika tahap fetch selesai, maka dilanjutkan ke tahap berikutnya, sampai selesai / jika terjadi error. (Promise)

```javascript
const uri = "https://pokeapi.co/api/v2/pokemon/"

const getData = () => {
    fetch(uri)
    .then((response) => response.json())
    .then(json => console.log(json.results))
    .catch(error => console.log('failed'))
}

getData();
```

Pada contoh dibawah ini kita melakukan fetch data, menggunakan Async Await, dengan kata kunci async pada bagian function, dan await, pada setiap langkah pengambilan dan penyimpanan data.

```javascript
const uri = "https://pokeapi.co/api/v2/pokemon/"

const getData = async () => {
    const response = await fetch(uri);
    const json = await response.json()
    console.log(json)
}

getData()
```

