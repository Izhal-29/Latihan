var jmlAngkot = 10,
  angkotBeroperasi = 6;
for (var angkot = 1; angkot <= jmlAngkot; angkot++) {
  if (angkot <= angkotBeroperasi) {
    console.log('Angkot No. ' + angkot + ' beroperasi dengan baik.')
  } else {
    console.log('Angkot No. ' + angkot + ' sedang tidak beroperasi.')
  }
}
