#include<stdio.h>

struct rectangle{
	int length;
	int width;
};

struct person {
	char name[200];
	int age;
};

struct info{
	person pemilik;
	rectangle luasBangunan;
};

int main(){
		
	struct rectangle kotak1 = {10,5};
	
	printf("%d\n", kotak1.length * kotak1.width);

	person orang1 = {"player 1", 20};
	
	printf("%s\n", orang1.name);
	
	info infoBangunan = {{"Adi", 25}, {20,10}};
	printf("%s berumur %d memiliki luas bangunan = %d\n", infoBangunan.pemilik.name, 
					infoBangunan.pemilik.age, infoBangunan.luasBangunan.length*infoBangunan.luasBangunan.width);
	
	return 0;
}

