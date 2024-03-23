#include <stdio.h>
#include <graphics.h>
#include <conio.h>
int main()
{
    int gd = DETECT, gm;
    initgraph(&gd, &gm, "C:\\TC\\BGI");
    rectangle(150, 200, 350, 400);
    bar(450, 200, 370, 330);
    getch();
    closegraph();
    return 0;
}
