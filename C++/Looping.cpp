#include <stdio.h>

int main (){
	//reeption / looping
	
	// for, while, do while
	//break, continue
	
	//	for --> for (inisialisasi; kondisi terminasi, increment/decrement);
	printf("----- for ----- \n");
	for (int angka = 0; angka <= 5; angka++){
		printf("%d\n",angka);
	}
	
	// while 
	printf("----- while -----\n");
	int angka1 = 0; // inisialisasi
	while (angka1 <=5){ // kondisi terminasi
		printf("%d\n",angka1);
	angka1++; // increment / decrement
	}
	
	//do while 
	printf("----- do while ----- \n");
	int angka2 = 0; // inisialisasi
	do { 
		printf("%d\n",angka2);
	angka2++; // increment / decrement
	} while (angka2 <= 5); // kondisi terminasi

	//nested loop
	printf("----- nested loop ----- \n");
	int size = 10;
	for (int a = 0; a < size; a++ ){
		for (int b = 0; b < size; b++){
			printf("*");
		}
		printf("\n");	
	}

	// penggunaan break;
	printf("----- break ----- \n");
	for (int i = 0; i <= 5; i++){
		if(i == 3) break; // memberhentikan ketika dapat angka 3
		printf("%d\n",i);
	}
	
	// penggunaan continue;
	printf("----- continue ----- \n");
	for (int j = 0; j <= 5; j++){
		if(j == 3) continue; // melanjutkan tanpa melakukan perintah dibawahnya ketika mendapat nila 3
		printf("%d\n",j);
	}
	
	// Challenge
	printf("----- challenge ----- \n");
	int sizes;
	scanf("%d", &sizes);
	for (int a = 0; a < sizes; a++ ){
		for (int b = 0; b < sizes; b++){
			if (a == 0 || a == sizes-1 || b == 0 || b == sizes-1){
					printf("*");
			}else {
				printf(" ");
			}
		}
		printf("\n");	
	}
	
	return 0;
}
