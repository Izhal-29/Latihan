#include <stdio.h>
#include <string.h>

int main (){
	
//	
//	int listAngka[20];
//	char str [20][100];
//	
//	scanf("%s",str);
//	strcpy(str[0], "Halo");
//	printf("%s\n",str[0]);
//	
//	listAngka[0] = 1;
//	printf("%d\n", listAngka[0]);
//	listAngka[0] = 2;
//	printf("%d\n", listAngka[0]);

	// ASCII
	// 97 = a, 122 = z, 65 = A, 90 = Z	
	printf("%d\n", 'a');
	printf("%d\n", 'z');
	printf("%d\n", 'A');
	printf("%d\n", 'Z');
	
	char str[30];
	
	scanf("%[^\n]",str); // menangkap apapun yang diinput user
	getchar(); // untuk ilangin input string enternya
	
	int panjang = strlen(str); // strln library dari <string.h> untuk string integer panjang
	
	for(int i = 0; i < panjang; i++){
		if(str[i] >= 97 && str [i] <= 122){ // menangkap huruf kecil
			str[i] -= 32; // untuk merubah huruf menjadi kapital
		}
	}	
	
	printf("%s\n",str);
	printf("%s\n", strupr(str)); // untuk merubah huruf menjadi kapital
	printf("%s\n", strlwr(str)); // untuk merubah huruf menjadi keciil
	
	return 0;
}
