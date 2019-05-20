#include<stdio.h>
main()
{
  int i,n;
  scanf("%d",&i);
  for(n=0;n<i;n++)
  {
    printf("Hello");
    if(n<(i-1)){
      printf("\n");}
  }
}
