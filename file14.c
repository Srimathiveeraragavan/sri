#include<stdio.h>
main()
{
int x,y,i;
scanf("%d %d",&x,&y);
for(i=x+1;i<=y-1;++i){
if(i%2!=0){
printf("%d",i);
if(i<y-2){
printf(" ");}
}}
}
