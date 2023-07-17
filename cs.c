#include <stdio.h>
#include <string.h>
#include <stdlib.h>
char n[10], feverDetails[10], coughDetails[10],
BodyDetails[10], diaDetails[10], breathingDetails[10],
tasteDetails[10], disease[10] ;
int detectCovid()
{
 if(strcmp(disease,"yes") == 0){
 printf("Please do stay at home with more precautions\n");
 }
 else if(strcmp(feverDetails,"yes") == 0 ||
strcmp(coughDetails,"yes") == 0 || strcmp(BodyDetails,"yes")
== 0 || strcmp(diaDetails,"yes") == 0 ||
strcmp(breathingDetails,"yes") == 0 ||
strcmp(tasteDetails,"yes") == 0){
 printf("You are not safe, get yourself tested and take proper precautions\n");
 }
 else{
 printf("You are safe\n");
 }
}
int main()
{
 char a[20];
 printf("Welcome to covid-19 tracker");
 printf("\nDo you have any symptoms like?\n1) Cough\n2 Cold\n3) Body Ache\n4) fever\n5) Diarrhoea\n6) Breathing Issues\n7) Sore throat]\n8) Loss of taste and smell\n9) Any disease like Diabetes, Blood Pressure, Hypertension, etc");
 printf("\nPress yes if you have any of these: ");

 scanf("%s",n);

 if(strcmp(n,"yes") == 0){
 printf("Do you have fever? Enter yes or no\n");
 scanf("%s",feverDetails);
 strcpy(a, "fever");
 }
 if(strcmp(a,"fever") == 0){
 printf("Do you have cough and cold? Enter yes or no\n");
 scanf("%s",coughDetails);
 strcpy(a, "cough");

 }
 if(strcmp(a,"cough") == 0){
 printf("Do you have Body Ache? Enter yes or no\n");
 scanf("%s",BodyDetails);

 strcpy(a, "body");
 }
 if(strcmp(a,"body") == 0){
printf("Are you suffering from diarrhoea? Enter yes or no\n");
 scanf("%s",diaDetails);

 strcpy(a, "Diarhea");

 }

 if(strcmp(a,"Diarhea") == 0){
 printf("Do you have Breathing Issues? Enter yes or no\n");
 scanf("%s",breathingDetails);

 strcpy(a, "Breathing");
 }
 if(strcmp(a,"Breathing") == 0){
 printf("Are you getting taste and smell? Enter yes or no\n");
 scanf("%s",tasteDetails);

 strcpy(a, "taste");
 }
 if(strcmp(a,"taste") == 0){
 printf("Are you suffering from any disease already? Enter yes or no\n");
 scanf("%s",disease);
 strcpy(a, "disease");
 }
 if(strcmp(a,"disease") == 0){
 detectCovid();
 }
 else{
 printf("Thanks for using !!\n");
 }
 return 0;
}
