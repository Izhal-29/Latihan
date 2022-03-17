#include<stdio.h>

int main (){
	
	// membuat variabel dan inisialisasi
	int angkaBulat = 10;
	float angkaKoma = 1.5f;
	char karakter = 'R';
	char string [100] = "Hello Rizhal Ridwan"; // string ditandai dengan pada nama variabel [] dan tanda petik dua (" ") valuenya
	
	
	
	scanf("%d",&angkaBulat); // memberi input ke user jadi di variabel tidak usah diinisialiasasi karena percuma
	// & --> untuk memberi tahu alamat variabel
	getchar(); // untuk mengambil satu karakter
	printf("%d\n", angkaBulat); 	
	
	scanf("%f",&angkaKoma);
	getchar();
	printf("%.2f\n",angkaKoma);	// %.2f menmapilkan 2 angka dibelakang koma
	
	scanf("%c",&karakter);
	getchar();
	printf("%c\n",karakter);	
	
	scanf("%[^\n]",string); // untuk string bisa tidak pakai &
	// ^ --> sampai \n --> enter
	printf("%s\n",string);
	// scanf --> untuk memberi input user
	// printf --> untuk menampilkan
	return 0;
}
