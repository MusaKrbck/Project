#include <stdio.h>
#include <stdlib.h>
#include <math.h>
int main() 
{
	float sayi1,sayi2,sonuc;
	int secim;
	system("COLOR 2");
	printf("*****  HESAP MAKINESI  *****\n");
	printf(">> YAPMAK ISTEDIGINIZ ISLEM NEDIR ? << \n\n");
	printf("1-TOPLAMA\n");
	printf("2-CIKARMA\n");
	printf("3-CARPMA\n");
	printf("4-BOLME\n");
	printf("5-LOG ALMA\n");
	printf("6-UST ALMA\n");
	printf("7-MUTLAK DEGER\n");
	printf("8-KARE ALMA\n");
	printf("9-KUP ALMA\n");
	printf("10-KOK ALMA\n");
	scanf("%d",&secim);
	switch(secim)
	{
		case 1:
			printf("Sayi 1: ");
			scanf("%f",&sayi1);
			printf("Sayi 2: ");
			scanf("%f",&sayi2);
			sonuc=sayi1+sayi2;
			printf("TOPLAM: %5.2f",sonuc);
		break;
		case 2:
			printf("Sayi 1: ");
			scanf("%f",&sayi1);
			printf("Sayi 2: ");
			scanf("%f",&sayi2);
			sonuc=sayi1-sayi2;
			printf("FARK: %5.2f",sonuc);
		break;
		case 3:
			printf("Sayi 1: ");
			scanf("%f",&sayi1);
			printf("Sayi 2: ");
			scanf("%f",&sayi2);
			sonuc=sayi1*sayi2;
			printf("CARPIM: %5.2f",sonuc);
		break;
		case 4:
			printf("Sayi 1: ");
			scanf("%f",&sayi1);
			printf("Sayi 2: ");
			scanf("%f",&sayi2);
			sonuc=sayi1/sayi2;
			printf("BOLUM: %5.2f",sonuc);
		break;
		case 5:
			printf("Log Alinacak Sayi: ");
			scanf("%f",&sayi1);
			sonuc=log10(sayi1);
			printf("Log: %5.2f",sonuc);
		break;			
		case 6:
			printf("Taban sayisi: ");
			scanf("%f",&sayi1);
			printf("Ust sayisi: ");
			scanf("%f",&sayi2);
			sonuc=pow(sayi1,sayi2);
			printf("Ussel sayiniz: %5.2f",sonuc);
		break;
		case 7:
			printf("Sayiyi girin: ");
			scanf("%f",&sayi1);
			if(sayi1 < 0)
			{
				sonuc=sayi1*(-1);
				printf("MUTLAK: %5.2f",sonuc);
			}
			else
			{
				printf("MUTLAK: %5.2f",sayi1);
			}
		break;
		case 8:
			printf("Sayi: ");
			scanf("%f",&sayi1);
			sonuc=(sayi1)*(sayi1);
			printf("SAYININ KARESI: %5.2f",sonuc);
		break;
		case 9:
			printf("Sayi: ");
			scanf("%f",&sayi1);
			sonuc=(sayi1)*(sayi1)*(sayi1);
			printf("SAYININ KUPU: %5.2f",sonuc);
		break;
		case 10:
			printf("Sayi: ");
			scanf("%f",&sayi1);
			sonuc=sqrt(sayi1);
			printf("SAYININ KOKU: %5.2f",sonuc);
		break;				
	}	
}





