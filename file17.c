#include<stdio.h>
main()
{
int i,n,rem,nn,result;
scanf("%d",&n);
nn=n;
for(i=0;nn!=0;++i){
rem=nn%10;
result +=rem*rem*rem;
nn=nn/10;
}
if(result==n){
printf("yes");}
else{
printf("no");}
}
