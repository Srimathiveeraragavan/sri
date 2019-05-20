#include<stdio.h>
main()
{
  int i,j,x,y,c=0;
  scanf("%d %d",&x,&y);
  for(i=x+1;i<y;++i)
  { 
    for(j=2;j<i/2;++j)
    {
      if(i%j==0)
        {
        c=1;
        break;
        }
    }
    if(c==0)
    {
    printf("%d",j);
    if(i<y-1)
    {
    printf(" ");
    }
    }
  }

}
