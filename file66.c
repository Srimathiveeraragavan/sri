#include<stdio.h>
maain()
{
int i;
scanf("%d",&i);
if((i%4==0)&&(i%100==0)&&(i%400==0)){
printf("yes");}
else{
printf("no");
}
