#include<stdio.h>
//#include<conio.h>
main()
{
int a,i,x,y,temp,s=0;
scanf("%d",&a);
int arr[a];
for(i=0;i<a;i++)
  {
  scanf("%d",&arr[i]);
  }
  
//sorting
for(x=0;x<a;x++)
  {
  for(y=0;y<a-1;y++)
    {
    if(arr[y]>arr[y+1])
      {
      temp=arr[y];
      arr[y]=arr[y+1];
      arr[y+1]=temp;
      }
    }
  }
for(i=0;i<a;i++)
  {
 // printf("%d..",arr[i]);
 if(s==0){
printf("%d",arr[i]);
s++;
}
else{
printf(" %d",arr[i]);}
  }

}
