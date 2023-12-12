#include <SPI.h>
#include <MFRC522.h>
#include <ESP8266WebServer.h>
#include <ESP8266HTTPClient.h>
#include <ESP8266WiFi.h>

#define SS_PIN D4
#define RST_PIN D3
MFRC522 mfrc522(SS_PIN, RST_PIN);

#define ON_Board_LED 2

const char* ssid = "ATO"; //WIFI NAME OR HOTSPOT
const char* password = "wazzupbitch"; //WIFI PASSWORD POR MOBILE HOTSPOT PASSWORD



int readsuccess;
byte readcard[4];
char str[32] = "";
String StrUID;

void setup() {
    Serial.begin(9600);
    SPI.begin();
    mfrc522.PCD_Init();

    delay(500);

    WiFi.begin(ssid, password);
    Serial.println("");

    pinMode(ON_Board_LED, OUTPUT);
    Serial.println("");

    pinMode(ON_Board_LED, OUTPUT);
    digitalWrite(ON_Board_LED, HIGH);

    Serial.print("Connecting");
    while (WiFi.status() != WL_CONNECTED) {
        Serial.println(".");
        digitalWrite(ON_Board_LED, LOW);
        delay(250);
    }
    digitalWrite(ON_Board_LED, HIGH);
    Serial.println("");
    Serial.println("Successfully connected to: ");
    Serial.println(ssid);
    digitalWrite(ON_Board_LED, HIGH);

    Serial.println("");
    Serial.println("Successfully connected to: ");
    Serial.println("IP address: ");
    Serial.println(WiFi.localIP());

    Serial.println("Please tag card to see UID");
    Serial.println("");
}

void loop() {
    readsuccess = getid();

    if (readsuccess) {
        digitalWrite(ON_Board_LED, LOW);
        HTTPClient http;

        String UIDresultSend, postData;
        UIDresultSend = StrUID;

        postData = "UIDresult=" + UIDresultSend; // Corrected syntax for POST data
        int httpResponseCode = http.POST(postData);

        WiFiClient client;
        http.begin(client, "http://192.168.254.116/appsDev-main/arduino/getUID.php");
        http.addHeader("Content-Type", "application/x-www-form-urlencoded");

        int httpCode = http.POST(postData);
        String payload = http.getString();
        Serial.println("HTTP Code: " + String(httpCode));


        Serial.println(UIDresultSend);
        Serial.println(httpCode);
        Serial.println(payload);

        http.end();
        delay(1000);
        digitalWrite(ON_Board_LED, HIGH);
    }
}

int getid() {
    if (!mfrc522.PICC_IsNewCardPresent()) {
        return 0;
    }
    if (!mfrc522.PICC_ReadCardSerial()) {
        return 0;
    }

    Serial.println("THE UID OF THE SCANNED CARD: ");

    for (int i = 0; i < 4; i++) {
        readcard[i] = mfrc522.uid.uidByte[i];
        array_to_string(readcard, 4, str); // Corrected the length to 8
        StrUID = str;
    }
    mfrc522.PICC_HaltA();
    return 1;
}

void array_to_string(byte array[], unsigned int len, char buffer[]) {
    for (unsigned int i = 0; i < len; i++) {
        byte nib1 = (array[i] >> 4) & 0x0F;
        buffer[i * 2 + 0] = nib1 < 0xA ? '0' + nib1 : 'A' + nib1 - 0xA;
        byte nib2 = (array[i] >> 0) & 0x0F;
        buffer[i * 2 + 1] = nib2 < 0xA ? '0' + nib2 : 'A' + nib2 - 0xA;
    }
    buffer[len * 2] = '\0';
}
