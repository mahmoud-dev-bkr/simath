#include <iostream>
using namespace std;
#include <cmath>

	int main ()

{
		
int y=0;
int n1,n2,sum;
char op;



while(true)
{




    cout <<"enter the n 1";
    cin >> op;

    cout <<"enter the op ";
    cin >>n2;

    cout << "enter the n 2	";
    cin >> n2;
    if (op == '+')
    {
    cout <<n1 + n2;
    }
    else if(op =='-')	
    {
    cout <<n1-n2;		
    }	
        
    else if(op =='*')	
    {
    cout <<n1*n2;		
    }		
        
    else if(op =='/')	
    {
    cout <<n1/n2;		
    }		

    cout <<"if you need the turn again(1/0) ";
    cin >>y;
    if (y==0)
        
    {
        break;
            
    }
        
    elseif (y==1)	   
    {
        continue;	
    }		

}	
	
	
	
	
	
	
	return 0;	
	
	
}