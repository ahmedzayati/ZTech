#include <Timer.h>
#define trigPin 0
#define echoPin 1

const int irPins[5] = {A0, A1, A2, A3, A4};
int irSensorAnalog[5] = {0,0,0,0,0};
int irSensorDigital[5] = {0,0,0,0,0};
int treashold = 300; 
int irSensors = B00000; 
Timer t;
long distance22=100;
const int M1F=4;
const int M1B=2;
const int M2F=7;
const int M2B=5;
const int En1=3;
const int En2=6;

bool e[5]={0,0,0,0,0};
const int Speedmoy=130;
const int Speedmax=130;
const int Speedmin=130;

void setup() {
  // put your setup code here, to run once:
  pinMode(trigPin, OUTPUT);
  pinMode(echoPin, INPUT);
for (int i = 0; i < 5; i++) {
pinMode(irPins[i],INPUT);}

pinMode(M1F,OUTPUT);
pinMode(M1B,OUTPUT);
pinMode(M2F,OUTPUT);
pinMode(M2B,OUTPUT);
pinMode(En1,OUTPUT);
pinMode(En2,OUTPUT);
t.every(50, ultrason22);
}
long ultrason22()
{  long duration, distance1;
  digitalWrite(trigPin, LOW);  // Added this line
  delayMicroseconds(2); // Added this line
  digitalWrite(trigPin, HIGH);
//  delayMicroseconds(1000); - Removed this line
  delayMicroseconds(10); // Added this line
  digitalWrite(trigPin, LOW);
  duration = pulseIn(echoPin, HIGH);
  distance1 = (duration/2) / 29.1;
  distance22=distance1;
  return(distance22);}

void loop() {
  t.update();
  ultrason22();
 if (distance22 <= 4)
 {
    Stop();}
    
    else if (distance22>4)
    { function();
switch (irSensors) {
      case B11111:
      forword();
       break;
     case B00000:
      forword1();
       break;
     case B01111: // leftmost sensor on the line
       right();
       break;
     case 10111:
       right();
       break;
     case B11011: 
       forword();
       break;
     case B11101:  
       left();
       break;
     case B11110: 
       left();
       break;          
  /* 2 Sensors on the line */         
     case B00111:
       right();
       break; 
     case B01011:
       forword();
       break; 
     case B10011:
       right();
       break;
     case B11001: 
       left();
       break;           
     case B11100:
       left();
       break;
     case B11010: 
       left();
       break; 
 /* 3 Sensors on the line */    
     case B00011:
       right();
       break;
     case B11000:
       left();
       break;
     case B10001:
       forword();
       break;
     case B01010:
       forword();
       break;
     case B00110:
       right();
       break;
     case B01100:
       left();
       break;                     
   /* 4 Sensors on the line */       
     case B00001:
       right();
       break;
     case B00010:
       right();
       break;
     case B10000:
       left();
       break;
     case B01000:
       left();
       break;

  /* 5 Sensors on the line */      
}
}}
void function()
{
  irSensors = B00000; 
  for (int i = 0; i < 5; i++) {
    irSensorAnalog[i] = analogRead(irPins[i]);

    if (irSensorAnalog[i] >= treashold) {
        irSensorDigital[i] = 1;
    }
    else {irSensorDigital[i] = 0;}
    Serial.print(irSensorAnalog[i]);
    Serial.print("|");
    int b = 4-i;
    irSensors = irSensors + (irSensorDigital[i]<<b);
    }    
}
void forword()
{ digitalWrite(M1F,HIGH);
  digitalWrite(M1B,LOW);
  digitalWrite(M2B,LOW);
  digitalWrite(M2F,HIGH);
  analogWrite(En1,Speedmoy);
  analogWrite(En2,Speedmoy);
}
void backword()
{ digitalWrite(M1F,LOW);
  digitalWrite(M1B,HIGH);
  digitalWrite(M2B,HIGH);
  digitalWrite(M2F,LOW);
  analogWrite(En1,Speedmax);
  analogWrite(En2,Speedmax);
}
void left()
{ digitalWrite(M1F,LOW);
  digitalWrite(M1B,LOW);
  digitalWrite(M2B,LOW);
  digitalWrite(M2F,HIGH);
  analogWrite(En1,0);
  analogWrite(En2,Speedmax);
}
void left1()
{ digitalWrite(M1F,LOW);
  digitalWrite(M1B,HIGH);
  digitalWrite(M2B,LOW);
  digitalWrite(M2F,HIGH);
  analogWrite(En1,Speedmoy);
  analogWrite(En2,Speedmoy);
}
void right1()
{ digitalWrite(M1B,LOW);
  digitalWrite(M1F,HIGH);
  digitalWrite(M2F,LOW);
  digitalWrite(M2B,HIGH);
  analogWrite(En1,Speedmoy);
  analogWrite(En2,Speedmoy);
}
void right()
{ digitalWrite(M1B,LOW);
  digitalWrite(M1F,HIGH);
  digitalWrite(M2F,LOW);
  digitalWrite(M2B,LOW);
  analogWrite(En1,Speedmax);
  analogWrite(En2,0);
}
void Stop()
{ digitalWrite(M1F,LOW);
  digitalWrite(M1B,LOW);
  digitalWrite(M2B,LOW);
  digitalWrite(M2F,LOW); 
  analogWrite(En1,0);
  analogWrite(En2,0);   
}
void forword1()
{
  digitalWrite(M1F,HIGH);
  digitalWrite(M1B,LOW);
  digitalWrite(M2B,LOW);
  digitalWrite(M2F,HIGH);
  analogWrite(En1,Speedmin);
  analogWrite(En2,Speedmin);
}
