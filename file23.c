#include<stdio.h>
main()
{
int a,i,max=0;
scanf("%d",&a);
int ar[a];
for(i=0;i<a;i++){
  scanf("%d",&ar[i]);
  if(i==0){
    max=ar[i];}
  
  if(ar[i]<max)
  {
    max=ar[i];
  }
  }
  printf("%d",max);
}
