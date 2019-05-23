#include<stdio.h>
main()
{
int i,max=0;
//scanf("%d",&a);
int ar[10];
for(i=0;i<10;i++){
  scanf("%d",&ar[i]);
  if(i==0){
    max=ar[i];}
  
  if(ar[i]>max)
  {
    max=ar[i];
  }
  }
  printf("%d",max);
}
