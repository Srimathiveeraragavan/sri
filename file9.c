#include<stdio.h>
int main (void){
int n,k,arr[5],a,x,y=0;
scanf("%d %d",&n,&k);
for(a=0;a<5;a++){
scanf("%d",&arr[a]);}
for(x=0;x<k;++x){
y=y+arr[x];}
printf("%d",y);
return 0;
}
