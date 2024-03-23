#include <stdio.h>
#include <graphics.h>

int main()
{
    int gd = DETECT, gm;
    initgraph(&gd, &gm, "C:\\TURBOC3\\BGI");
    settextstyle(SMALL_FONT, HORIZ_DIR, 4);
    outtextxy(100, 200, "LINE BAR");
    outtextxy(200, 200, "SOLID FILL");
    outtextxy(300, 200, "WIDE DOT FILL");
    outtextxy(400, 200, "SLASH FILL");
    settextstyle(BOLD_FONT, HORIZ_DIR, 4);
    outtextxy(170, 250, "BAR GRAPH");
    setfillstyle(LINE_FILL, YELLOW);
    bar(100, 0, 200, 200);
    setfillstyle(SOLID_FILL, YELLOW);
    bar(200, 0, 300, 200);

    setfillstyle(WIDE_DOT_FILL, YELLOW);
    bar(300, 0, 400, 200);
    setfillstyle(SLASH_FILL, YELLOW);
    bar(400, 0, 500, 200);
    getch();
    closegraph();
    return 0;
}