#include<stdio.h>
main()
{
int i,j,x,y,c,s=0;
scanf("%d %d",&x,&y);
for(i=x+1;i<y;i++)
{
c=0;
for(j=2;j<i;j++)
{
if(i%j==0)
{
c=1;
break;
}
}
if(c==0){
if(s==0){
printf("%d",i);
s++;
}
else{
printf(" %d",i);}
}
}
}
