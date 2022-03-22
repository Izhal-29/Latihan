#include <stdio.h>


//function :
void printhelloworld(){ //void itu ngga me-return
	printf("Hello Wolrd");
} 

int getNumber(){
	return 5;
}

// function menggunakan parameter

// passing by value
int sum(int first, int second){
	int total =  first + second;
	return total;
}

// passing by reference
int sum2(int *first, int *second){
	printf("Alamat first: %d\n", first);
	printf("Alamat second: %d\n", second);
	printf("Value first: %d\n", *first);
	printf("Value second: %d\n", *second);	
	int total =  *first + *second;
	return total;
}


int main(){
	
	int a = 0; // variabel biasa
	int *p; //pointer ditandain dengan bintang (*)
	p = &a; // p menyimpan alamat a
	// untuk melihat/mencetak alamat a tambahkan &
	 
	printf("%d\n", a); // menampilkan value a
	printf("%d\n", p); // menampilkan alamat a
	printf("%d\n", &a); // menampilkan alamat a
	printf("%d\n", *p); // menampilkan value a 
	printf("%d\n", &p); // menampilkan alamat p
	
	
	int **p2; // membuat pointer dalam pointer **
	p2 = &p;
	printf("%d\n", p2); // menampilkan alamat p
	printf("%d\n", *p2); // menampilkan alamat a
	printf("%d\n", **p2); // menampilkan value a
	
	
	printhelloworld(); //memanggil function
	
	int i = getNumber();// memasukkan function ke dala variabel
	
	printf("%d\n",i);
	
	
	//passing by value
	int hasilSum = sum (3,5); // mengambil dari function sum dengan menggunakna parameter
	printf("%d\n",hasilSum);
	

	int first = 3;
	int second = 5;
	int hasilSum2 = sum (getNumber(),second);;
	printf("%d\n",hasilSum2);
	
	
	// passing by reference
	int first1 = 3;
	int second2 = 5;
	int hasilSum3 = sum2(&first, &second);;
	printf("%d\n",hasilSum3);
	return 0;
}

