#include <stdio.h>

int main(){
	
	printf("Ini Tambah : %d\n", 2+3);
	printf("Ini Kurang : %d\n", 3-2);
	printf("Ini Kali : %d\n", 3*3);
	printf("Ini Bagi : %d\n", 5/2);
	printf("Ini Bagi (desimal) : %f\n", 5.0 /2.0);
	printf("Ini Modulus : %d\n", 10%3);
	printf("Arithmetic : (%d+%d)/%d = %d\n",5,2,3,(5+2)/3);
	
	printf("AND : %d\n", 6&5);
	printf("OR : %d\n", 6|5);
	printf("XOR : %d\n", 6^5);
	printf("Shift Right : %d\n", 6>>2);
	printf("Shift left : %d\n", 6<<2);
	
//	Pre-Increment sebelum - trus ditambah
	int angka = 0;
	printf("%d\n",++angka);
	printf("%d\n", angka);
//	Post-Increment sesudah - trus ditambah
	int angka = 0;
	printf("%d\n", angka++);
	printf("%d\n", angka);
//	Pre-Decrement Sebelum - trus dikurang
	int angka = 0;
	printf("%d\n", --angka);
	printf("%d\n", angka);
//	Post-Decrement sesudah - trus dikurang
	int angka = 0;
	printf("%d\n", angka--);
	printf("%d\n", angka);
	
	int angka1, angka2;
	
	scanf("%d %d", &angka1, &angka2);
	printf("%d\n", angka1+angka2);
	
	scanf("%d %d", &angka1, &angka2);
	printf("%d\n", angka1-angka2);
	
	scanf("%d %d", &angka1, &angka2);
	printf("%d\n", angka1/angka2);
	
	scanf("%d %d", &angka1, &angka2);
	printf("%d\n", angka1%angka2);
	
	
}
