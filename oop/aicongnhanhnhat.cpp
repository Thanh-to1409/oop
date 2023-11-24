#include <iostream>

using namespace std;
class Tinhtoanhaisonguyen{
	private:
		int a;
		int b;
	public:
	 Tinhtoanhaisonguyen(int a1,int b2):
	 a(a1),b(b2){
	 }
	 int Cong(){
	 	return a+b;
	 }	
};
int main(){
	int a,b;
	cin >> a >> b;
	Tinhtoanhaisonguyen tinhtoan(a,b);
	cout << tinhtoan.Cong();
	return 0;
}

