#include<stdio.h>
#include<string.h> 
#include<stdlib.h>

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

info infoBangunan[100];
int banyakBangunan = 0;
bv
info tambahBangunan(){
	char name[200];
	int age, length, width;
	
	printf("Input nama pemilik : ");
	scanf("%s", name); getchar();
	
	printf("input umur pemilik : ");
	scanf("%d", &age); getchar();
	
	printf("Input lebar bangunan : ");
	scanf("%d", &width); getchar();
	
	info infoBaru = {{"", age},{length, width}};
	strcpy(infoBaru.pemilik.name, name);
	 
	return infoBaru;
}

void lihatBangunan(){
	for(int i = 0; i < banyakBangunan; i++){
		info bangunan = infoBangunan[i];
		printf("%s berumur %d memiliki luas bangunan %d\n",
			bangunan.pemilik.name, bangunan.pemilik.age,
			bangunan.luasBangunan.length*bangunan.luasBangunan.width);	
	}
}

int main(){
	
	int input = 0;
	
	do{
			system("cls");
			
			printf("1. Tambah Bangunan\n");
			printf("2. Lihat Bnagunan\n");
			printf("3. Exit\n");
			scanf("%d", &input);getchar();
			switch(input){
				case 1:
					infoBangunan[banyakBangunan++] = tambahBangunan();
				break;
				case 2:
					lihatBangunan();
					getchar();
				break;
			}
	}while(input != 3); 
}

 
