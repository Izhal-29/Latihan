let jmlAngkot = 10,
  angkotBeroperasi = 6;
for (let angkot = 1; angkot <= jmlAngkot; angkot++) {
  if (angkot <= angkotBeroperasi && angkot !== 5) {
    console.log('Angkot No. ' + angkot + ' beroperasi dengan baik.')
  } else if (angkot === 5 || angkot === 8 || angkot === 10) {
    console.log('Angkot No. ' + angkot + ' sedang lembur.')
  } else {
    console.log('Angkot No. ' + angkot + ' sedang tidak beroperasi.')
  }
}
// Cara lain :
// for (var noAngkot = 1; noAngkot <= jmlAngkot; noAngkot++){
//   if (noAngkot === 5 || noAngkot === 8 || noAngkot === 10){
//     console.log('Angkot No. ' + noAngkot + ' sedang lembur');
//   } else if (noAngkot <= angkotBeroperasi){
//     console.log('Angkot No. ' + noAngkot + ' beroperasi dengan baik');
//   } else {
//     console.log('Angkot No. ' + noAngkot + ' sedang tidak beroperasi');
//   }
// }
