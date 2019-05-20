#include<Stdio.h>
main()
{
int n,k,i,x=1;
scanf("%d %d",&n,&k);
for(i=0;i<k;++i)
{
x=x*n;
}
printf("%d",x);
}
