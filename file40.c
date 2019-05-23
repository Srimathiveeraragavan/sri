#include<stdio.h>
main()
{
int i,n,t1=0,t2=1,next,s=0;
scanf("%d",&n);
for(i=1;i<=n;++i)
{
if(s==0){
s=2;
printf("%d",t1);}
else{
printf(" %d",t1);}
next=t1+t1;
t1=t1;
t2=next;
}
