#include<stdio.h>
main()
{
int h1,m1,h2,m2,h3,m3,t1,t2,t3;
scanf("%d %d %d %d",&h1,&m1,&h2,&m2);
t1=(h1*60)+m1;
t2=(h2*60)+m2;
t3=t1-t2;
if(t3<0)
{
t3=-t3;
}
h3=t3/60;
m3=t3%60;
printf("%d %d",h3,m3);
}
