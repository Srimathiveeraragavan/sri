#include<stdio.h>
main()
{
int i,n,nn,rem,rev=0;
scanf("%d",&n);
nn=n;
for(i=0;n>0;i++)
{
rem=n%10;
rev=rev*10+rem;
n=n/10;
}
if(nn==rev){
printf("yes");}
else{
printf("no");}
}
