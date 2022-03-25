#include<stdio.h>

int arr[] = {40,60,75,130,202,242,284,348,372,381,389,464,
							469,499,544,593,646,649,667,681,694,705,729,
							733,737,764,785,840,911,931,934,989};
int length = 32;

// function Linear Search (Datanya tidak Harus Berurut)
// datanya agak lama ditemukan karena akan melooping sampai mendapatkan datanya
int linearSearch(int search){
	for(int i = 0; i < length; i++){
		if(arr[i] == search){
			return i;
		}
	}
	return -1;
}

// function Binary Search (Datanya Harus Berurut)
// tetapi datanya lebih cepat ditemukan
int binarySearch(int search){
	
	int low = 0;
	int high = length-1;
	
	while(low <= high){
		int mid = (low+high)/2;
		if(arr[mid] == search) return mid;
		else if (search < arr[mid]) high = mid-1;
		else if(search > arr[mid]) low = mid+1;
	}
	return -1;
}

int main(){
	
	//	linear, Binary
	//	int resultIndex = linearSearch(50);
	int resultIndex =  binarySearch(284);
	if(resultIndex == -1) printf("Tidak Ketemu");
	else printf("Index = %d", resultIndex);
	
	return 0;
}
