#include<stdio.h>
main()
{
int a,i,max;
scanf("%d",&a);
int ar[a];
for(i=0;i<a;i++){
  scanf("%d %d",&ar[i],&ar[i+1]);
  if(a[i]>a[i+1]){
  max=a[i];}
  else{
  max=a[i+1];}
  i++;
  }
  printf("%d",max);
}
