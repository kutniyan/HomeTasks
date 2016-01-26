#include <time.h>
#include <stdio.h>
#include <stdlib.h>

void main (void) {
Int Num; Time_t t; srand(time(&t));
Num = rand()%10;
printf("Content-type: text/html\n");
printf("Pragma: no-cache\n");
printf("\n");
printf("<html><body>");
printf("<h1>Hello!</h1>");
printf("Случайное число от 0 до 10: %d, Num");
printf("<body><html>");
}

