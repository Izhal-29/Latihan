
function hitungVolumeKubus (a,b)	{
	var volumeA, volumeB;
			volumeA = a * a * a;
			volumeB = b * b * b;
			total = volumeA + volumeB;
return total;
}

alert('volume kubus pertama ' + hitungVolumeKubus(8,3));
alert('volume kubus kedua ' + hitungVolumeKubus(10,5));
