var jmlAngkot = 10,
  angkotBeroperasi = 6;
for (var angkot = 1; angkot <= jmlAngkot; angkot++) {
  if (angkot <= angkotBeroperasi && angkot !== 5) {
    console.log('Angkot No. ' + angkot + ' beroperasi dengan baik.')
  } else if (angkot === 5 || angkot === 8 || angkot === 10) {
    console.log('Angkot No. ' + angkot + ' sedang lembur.')
  } else {
    console.log('Angkot No. ' + angkot + ' sedang tidak beroperasi.')
  }
}
