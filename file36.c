#include<stdio.h>
main()
{

char s[200];
int c=0,i;
scanf("%[^\n]s",s);
for(i=0;s[i]!='\0';i++)
{
if((s[i]>='0'&&s[i]<='9')||(s[i]>='a'&&s[i]<='z')||(s[i]>='A'&&s[i]<='Z')||(s[i]<=' '))
{
c=c;
}
else{
c++;}
}
printf("%d",c);
}
