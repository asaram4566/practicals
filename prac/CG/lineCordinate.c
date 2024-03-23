#include <stdio.h>
#include <graphics.h>

int main()
{
    int gd = DETECT, gm;
    initgraph(&gd, &gm, "");

    line(100, 100, 400, 100);

    line(200, 200, 500, 300);

    line(300, 150, 600, 250);

    delay(5000);

    closegraph();

    return 0;
}
