#include<stdio.h>

int main(){
	
	//	filebase
	//	read, write, append(nambah data)
	//	r -> Read (melihat saja)
	//	w -> Write
	//	a -> Append
	//	r+ -> read, write (menganti data dengan menimpa yag sebelumnya)
	//	w+ -> read, write (menganti dari awal)
	//	a+ -> Append, read
	
	//open, process, close
	char txt[200];
	FILE *fp;
	
	fp = fopen("data.txt","r+"); // open
	
	//fprintf(fp, "hello worlds!"); // process
	rewind(fp); // mengembalikan pointernya diawal
	fscanf(fp, "%[^\n]", txt); // mengambil data dari fp
	printf("%s", txt); // mencetak
	
	
	fclose(fp); // close
	getchar();
	
	return 0;
}


