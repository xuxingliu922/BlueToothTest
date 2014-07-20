void setup() {
  // put your setup code here, to run once:
   Serial.begin(9600); 
}

void loop() {
  // put your main code here, to run repeatedly:
     Serial.println("Hello BlueTooth");      //串口向外发送字符串 ，并带回车
    delay(2000);       
}
