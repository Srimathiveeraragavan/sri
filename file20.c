#include<stdio.h>
main()
{
int i,f,s=0,r;
scanf("%d",&i);
for(f=1;f<=5;++f){
r=i*f;
 if(s==0){
printf("%d",r);
   s++;}
  else{
    printf(" %d",r);}
  
}

}
