#include<stdio.h>
#include<graphics.h>

int main() {
	int gd = DETECT,gm;
	initgraph(&gd,&gm,"C:\\TURBOC3\\BGI");
	line(50,100,50,500);
	getch();
	closegraph();
	return 0;

	}