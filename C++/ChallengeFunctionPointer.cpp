#include <stdio.h>

int main (){
	int arr[10]; // buat array 10
	
	for(int i = 0; i < 10; i++){
		arr[i] = 0; // sekalian set jadi 0
		printf("%d = %d\n", i, &arr[i]); // print alamatnya
	}// looping 10x  dan 
	
	int *a;
	int b;
	
	scanf("%d %d", &a, &b);
	
	*a = b;
	
	for(int i = 0; i < 10; i++)
		printf("%d = %d\n", i, arr[i]);
		
	return 0;
}
