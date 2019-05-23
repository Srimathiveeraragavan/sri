#include<stdio.h>
main()
{
int a,min,hr;
scanf("%d",&a);
min=a%60;
hr=a/60;
printf("%d %d",hr,min);
}
