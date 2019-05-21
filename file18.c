#include<stdio.h>
main()
{
int i,n,rem,s=0,nn,result,x,y,j;
scanf("%d %d",&x,&y);
for(j=x+1;j<y;++j){
result=0;
n=j;
nn=n;
for(i=0;nn!=0;++i){
rem=nn%10;
result +=rem*rem*rem;
nn=nn/10;
}
if(result==j){
if(s==0){
printf("%d",j);
s++;
}
else{
printf(" %d",j);}
}
}
}
