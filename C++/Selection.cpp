#include <stdio.h>

int main () {
	// fungsi IF,IF ELSE & ELSE IF 
	int angka = 0;

	if (angka == 0){
		printf("Nol");
	} else if (angka %2 == 1){
		printf("Ganjil");
	} else{
		printf("Genap");
	}
	
	
	//fungsi Switch Case
	int angka1 = 1;
	
	switch (angka1){
		case 0 :
			printf ("nol");
		break;
		case 1 : // angka == 1
			printf ("Satu");
		break;
		case 5 : 
			printf ("Lima");
		break;
		default :
			printf ("Angka anda tidak ada");
	}
	
	// ternary (kondisi ? benar : salah)
	int angka2 = 2;
	
	printf ("%s", (angka2 %2 == 0 ? "Genap" : "Ganjil"));
	
	printf ("%s", (angka2 < 2 ? "Lebih Kecil dari 2" : angka2 > 2 ? "Lebih Besar dari 2" : "2"));
	
	printf("\n");
	
	int angka3, angka4, angka5;
	
	scanf("%d", &angka3);
	
	scanf("%d %d", &angka4, &angka5);
	
	if (angka3 >= angka4 && angka3 <= angka5){
		printf("%d diantara %d dan %d", angka3, angka4, angka5);
	}else {
		
		printf("%d bukan diantara %d dan %d", angka3, angka4, angka5);
	}
	
	return 0;
}
