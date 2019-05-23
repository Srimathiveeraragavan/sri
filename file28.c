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
  
for(i=0;i<a;i++)
  {
 // printf("%d..",arr[i]);
 if(s==a-1){
printf("%d %d",arr[i],i);
//s++;
}
else{
printf("%d %d\n",arr[i],i);}
  }

}
