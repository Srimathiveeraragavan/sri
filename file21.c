#include<stdio.h>
main()
{
  int n,a,d,i,r=0;
  scanf("%d %d %d",&n,&a,&d);
  for(i=0;i<n;++i){
  
  r +=d;
  d=d+a;
  }
  printf("%d",r);
}
