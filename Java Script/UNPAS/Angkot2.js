var angkot = 1,
  angkotBeroperasi = 9;
jmlAngkot = 10;

while (angkot <= angkotBeroperasi) {
  console.log('Angkot No. ' + angkot + ' beroperasi dengan baik.');
  angkot++;
}

for (angkot; angkot <= jmlAngkot; angkot++) {
  console.log('Angkot No. ' + angkot + ' sedang tidak beroperasi.');
}
