#include <stdio.h>
#include <stdlib.h>
#include <stdbool.h>
int main() 
{
	int secim,corbasecim,kebapsecim,tatlisecim,iceceksecim;
	system("COLOR 9");
	while (true)
	{
	printf("************************************\n");
	printf("******  KEBAPCIYA HOSGELDINIZ  *****\n\n");
	system("COLOR 2");
	printf(">>> MENUMUZ <<<\n\n");
	printf(">> 1-CORBALAR\n");
	printf(">> 2-KEBAPLAR\n");
	printf(">> 3-TATLILAR\n");
	printf(">> 4-ICECEKLER\n");
	printf(">> 5  CIKIS !!!\n");
	printf("** NE ARZU EDERSINIZ ? **\n: ");
	scanf("%d",&secim);
	switch(secim)
	{
		case 1:
			printf("1-MERCIMEK CORBASI\n2-LAHANA CORBASI\n");
			scanf("%d",&corbasecim);
			if(corbasecim==1)
			{
				printf("12 TL\n\nBASKA BIR ISTEGINIZ VAR MI ?\n");
				break;
			}
			if(corbasecim==2)
			{
				printf("15 TL\n\nBASKA BIR ISTEGINIZ VAR MI ?\n");
				break;
			}
		case 2:
			printf("1-URFA KEBAP\n2-ADANA KEBAP\n3-TAVUK SIS\n");
			scanf("%d",&kebapsecim);
			if(kebapsecim==1)
			{
				printf("45 TL \n\nBASKA BIR ISTEGINIZ VAR MI ?\n");
				break;
			}
			if(kebapsecim==2)
			{
				printf("42 TL \n\nBASKA BIR ISTEGINIZ VAR MI ?\n");
				break;
			}
			if(kebapsecim==3)
			{
				printf("38 TL \n\nBASKA BIR ISTEGINIZ VAR MI ?\n");
				break;
			}
		case 3:
			printf("1-SUTLAC\n2-TRILECE\n");
			scanf("%d",&tatlisecim);
			if(tatlisecim==1)
			{
				printf("18 TL \n\nBASKA BIR ISTEGINIZ VAR MI ?\n");
				break;
			}
			if(tatlisecim==2)
			{
				printf("22 TL \n\nBASKA BIR ISTEGINIZ VAR MI ?\n");
				break;
			}
		case 4:
			printf("1-KOLA\n2-ACILI SALGAM\n3-ACIK AYRAN\n");
			scanf("%d",&iceceksecim);
			if(iceceksecim==1)
			{
				printf("10 TL \n\nBASKA BIR ISTEGINIZ VAR MI ?\n");
				break;
			}
			if(iceceksecim==2)
			{
				printf("15 TL \n\nBASKA BIR ISTEGINIZ VAR MI ?\n");
				break;
			}
			if(iceceksecim==3)
			{
				printf("13 TL \n\nBASKA BIR ISTEGINIZ VAR MI ?\n");
				break;
			}	
		case 5:
			exit(5);
		}
	}	
}
