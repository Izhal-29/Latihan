#include <stdio.h>


void printhelloworld(){
	printf("Hello Wolrd");
} 


int main (){
	
	int a = 0;
	int *p; //pointer
	p = &a;
	int **p2;
	p = &a;
	p2 = &p;
	
	printf("%d\n", *p2);
	printf("%d\n", &a);
	
	printhelloworld();
	return 0;d
}

