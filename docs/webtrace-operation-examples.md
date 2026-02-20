# Webtrace_Service operations (auto-generated)

Source: https://e-station-testenv.cargonet.software/trace-service/Webtrace_Service.asmx

Total operations: 10

> Generated from `?op=<OperationName>` pages (SOAP examples).

## 1. GetLastTrace

- URL: https://e-station-testenv.cargonet.software/trace-service/Webtrace_Service.asmx?op=GetLastTrace

### SOAP 1.1 Request
```xml
POST /trace-service/Webtrace_Service.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/GetLastTrace"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software/">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <GetLastTrace xmlns="http://www.cargonet.software/">
      <request>
        <Parcels>
          <Parcel>
            <countrycode>int</countrycode>
            <centernumber>int</centernumber>
            <parcelnumber>long</parcelnumber>
          </Parcel>
          <Parcel>
            <countrycode>int</countrycode>
            <centernumber>int</centernumber>
            <parcelnumber>long</parcelnumber>
          </Parcel>
        </Parcels>
      </request>
    </GetLastTrace>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.1 Response
```xml
HTTP/1.1 200 OK
Content-Type: text/xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Body>
    <GetLastTraceResponse xmlns="http://www.cargonet.software/">
      <GetLastTraceResult>
        <GetLastTraceResponse>
          <Parcel>
            <countrycode>int</countrycode>
            <centernumber>int</centernumber>
            <parcelnumber>long</parcelnumber>
          </Parcel>
        </GetLastTraceResponse>
        <GetLastTraceResponse>
          <Parcel>
            <countrycode>int</countrycode>
            <centernumber>int</centernumber>
            <parcelnumber>long</parcelnumber>
          </Parcel>
        </GetLastTraceResponse>
      </GetLastTraceResult>
    </GetLastTraceResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /trace-service/Webtrace_Service.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software/">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <GetLastTrace xmlns="http://www.cargonet.software/">
      <request>
        <Parcels>
          <Parcel>
            <countrycode>int</countrycode>
            <centernumber>int</centernumber>
            <parcelnumber>long</parcelnumber>
          </Parcel>
          <Parcel>
            <countrycode>int</countrycode>
            <centernumber>int</centernumber>
            <parcelnumber>long</parcelnumber>
          </Parcel>
        </Parcels>
      </request>
    </GetLastTrace>
  </soap12:Body>
</soap12:Envelope>
```

### SOAP 1.2 Response
```xml
HTTP/1.1 200 OK
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Body>
    <GetLastTraceResponse xmlns="http://www.cargonet.software/">
      <GetLastTraceResult>
        <GetLastTraceResponse>
          <Parcel>
            <countrycode>int</countrycode>
            <centernumber>int</centernumber>
            <parcelnumber>long</parcelnumber>
          </Parcel>
        </GetLastTraceResponse>
        <GetLastTraceResponse>
          <Parcel>
            <countrycode>int</countrycode>
            <centernumber>int</centernumber>
            <parcelnumber>long</parcelnumber>
          </Parcel>
        </GetLastTraceResponse>
      </GetLastTraceResult>
    </GetLastTraceResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 2. GetLastTraceBc

- URL: https://e-station-testenv.cargonet.software/trace-service/Webtrace_Service.asmx?op=GetLastTraceBc

### SOAP 1.1 Request
```xml
POST /trace-service/Webtrace_Service.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/GetLastTraceBc"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software/">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <GetLastTraceBc xmlns="http://www.cargonet.software/">
      <request>
        <Parcels>
          <string>string</string>
          <string>string</string>
        </Parcels>
      </request>
    </GetLastTraceBc>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.1 Response
```xml
HTTP/1.1 200 OK
Content-Type: text/xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Body>
    <GetLastTraceBcResponse xmlns="http://www.cargonet.software/">
      <GetLastTraceBcResult>
        <GetLastTraceBcResponse>
          <ShipmentNumber>string</ShipmentNumber>
        </GetLastTraceBcResponse>
        <GetLastTraceBcResponse>
          <ShipmentNumber>string</ShipmentNumber>
        </GetLastTraceBcResponse>
      </GetLastTraceBcResult>
    </GetLastTraceBcResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /trace-service/Webtrace_Service.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software/">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <GetLastTraceBc xmlns="http://www.cargonet.software/">
      <request>
        <Parcels>
          <string>string</string>
          <string>string</string>
        </Parcels>
      </request>
    </GetLastTraceBc>
  </soap12:Body>
</soap12:Envelope>
```

### SOAP 1.2 Response
```xml
HTTP/1.1 200 OK
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Body>
    <GetLastTraceBcResponse xmlns="http://www.cargonet.software/">
      <GetLastTraceBcResult>
        <GetLastTraceBcResponse>
          <ShipmentNumber>string</ShipmentNumber>
        </GetLastTraceBcResponse>
        <GetLastTraceBcResponse>
          <ShipmentNumber>string</ShipmentNumber>
        </GetLastTraceBcResponse>
      </GetLastTraceBcResult>
    </GetLastTraceBcResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 3. GetShipmentTrace

- URL: https://e-station-testenv.cargonet.software/trace-service/Webtrace_Service.asmx?op=GetShipmentTrace

### SOAP 1.1 Request
```xml
POST /trace-service/Webtrace_Service.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/GetShipmentTrace"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software/">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <GetShipmentTrace xmlns="http://www.cargonet.software/">
      <request>
        <ExpandContainerMode>MasterOnly or MasterAndSlave</ExpandContainerMode>
        <GetImages>boolean</GetImages>
        <GetPhotos>boolean</GetPhotos>
        <GetParsedInfo>boolean</GetParsedInfo>
        <GetServices>boolean</GetServices>
        <Options>
          <Type>string</Type>
          <CenterType>string</CenterType>
        </Options>
      </request>
    </GetShipmentTrace>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.1 Response
```xml
HTTP/1.1 200 OK
Content-Type: text/xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Body>
    <GetShipmentTraceResponse xmlns="http://www.cargonet.software/">
      <GetShipmentTraceResult>
        <ShipmentTrace>
          <images>
            <Image xsi:nil="true" />
            <Image xsi:nil="true" />
          </images>
        </ShipmentTrace>
        <ShipmentTrace>
          <images>
            <Image xsi:nil="true" />
            <Image xsi:nil="true" />
          </images>
        </ShipmentTrace>
      </GetShipmentTraceResult>
    </GetShipmentTraceResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /trace-service/Webtrace_Service.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software/">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <GetShipmentTrace xmlns="http://www.cargonet.software/">
      <request>
        <ExpandContainerMode>MasterOnly or MasterAndSlave</ExpandContainerMode>
        <GetImages>boolean</GetImages>
        <GetPhotos>boolean</GetPhotos>
        <GetParsedInfo>boolean</GetParsedInfo>
        <GetServices>boolean</GetServices>
        <Options>
          <Type>string</Type>
          <CenterType>string</CenterType>
        </Options>
      </request>
    </GetShipmentTrace>
  </soap12:Body>
</soap12:Envelope>
```

### SOAP 1.2 Response
```xml
HTTP/1.1 200 OK
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Body>
    <GetShipmentTraceResponse xmlns="http://www.cargonet.software/">
      <GetShipmentTraceResult>
        <ShipmentTrace>
          <images>
            <Image xsi:nil="true" />
            <Image xsi:nil="true" />
          </images>
        </ShipmentTrace>
        <ShipmentTrace>
          <images>
            <Image xsi:nil="true" />
            <Image xsi:nil="true" />
          </images>
        </ShipmentTrace>
      </GetShipmentTraceResult>
    </GetShipmentTraceResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 4. GetShipmentTraceByReference

- URL: https://e-station-testenv.cargonet.software/trace-service/Webtrace_Service.asmx?op=GetShipmentTraceByReference

### SOAP 1.1 Request
```xml
POST /trace-service/Webtrace_Service.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/GetShipmentTraceByReference"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software/">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <GetShipmentTraceByReference xmlns="http://www.cargonet.software/">
      <request>
        <Searchmode>Equals or Like</Searchmode>
        <GetImages>boolean</GetImages>
        <GetPhotos>boolean</GetPhotos>
        <GetParsedInfo>boolean</GetParsedInfo>
        <GetServices>boolean</GetServices>
        <GetLastTrace>boolean</GetLastTrace>
        <Options>
          <Type>string</Type>
          <CenterType>string</CenterType>
        </Options>
      </request>
    </GetShipmentTraceByReference>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.1 Response
```xml
HTTP/1.1 200 OK
Content-Type: text/xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Body>
    <GetShipmentTraceByReferenceResponse xmlns="http://www.cargonet.software/">
      <GetShipmentTraceByReferenceResult>
        <ShipmentTrace>
          <images>
            <Image xsi:nil="true" />
            <Image xsi:nil="true" />
          </images>
        </ShipmentTrace>
        <ShipmentTrace>
          <images>
            <Image xsi:nil="true" />
            <Image xsi:nil="true" />
          </images>
        </ShipmentTrace>
      </GetShipmentTraceByReferenceResult>
    </GetShipmentTraceByReferenceResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /trace-service/Webtrace_Service.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software/">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <GetShipmentTraceByReference xmlns="http://www.cargonet.software/">
      <request>
        <Searchmode>Equals or Like</Searchmode>
        <GetImages>boolean</GetImages>
        <GetPhotos>boolean</GetPhotos>
        <GetParsedInfo>boolean</GetParsedInfo>
        <GetServices>boolean</GetServices>
        <GetLastTrace>boolean</GetLastTrace>
        <Options>
          <Type>string</Type>
          <CenterType>string</CenterType>
        </Options>
      </request>
    </GetShipmentTraceByReference>
  </soap12:Body>
</soap12:Envelope>
```

### SOAP 1.2 Response
```xml
HTTP/1.1 200 OK
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Body>
    <GetShipmentTraceByReferenceResponse xmlns="http://www.cargonet.software/">
      <GetShipmentTraceByReferenceResult>
        <ShipmentTrace>
          <images>
            <Image xsi:nil="true" />
            <Image xsi:nil="true" />
          </images>
        </ShipmentTrace>
        <ShipmentTrace>
          <images>
            <Image xsi:nil="true" />
            <Image xsi:nil="true" />
          </images>
        </ShipmentTrace>
      </GetShipmentTraceByReferenceResult>
    </GetShipmentTraceByReferenceResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 5. GetShipmentTraceSingle

- URL: https://e-station-testenv.cargonet.software/trace-service/Webtrace_Service.asmx?op=GetShipmentTraceSingle

### SOAP 1.1 Request
```xml
POST /trace-service/Webtrace_Service.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/GetShipmentTraceSingle"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software/">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <GetShipmentTraceSingle xmlns="http://www.cargonet.software/">
      <request>
        <ExpandContainerMode>MasterOnly or MasterAndSlave</ExpandContainerMode>
        <GetImages>boolean</GetImages>
        <GetPhotos>boolean</GetPhotos>
        <GetParsedInfo>boolean</GetParsedInfo>
        <GetServices>boolean</GetServices>
        <Options>
          <Type>string</Type>
          <CenterType>string</CenterType>
        </Options>
      </request>
    </GetShipmentTraceSingle>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.1 Response
```xml
HTTP/1.1 200 OK
Content-Type: text/xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Body>
    <GetShipmentTraceSingleResponse xmlns="http://www.cargonet.software/">
      <GetShipmentTraceSingleResult>
        <images>
          <Image>
            <type>POD or POA or DeliverySignature or DeliveryShop or PickupSignature</type>
            <image>base64Binary</image>
            <date>string</date>
            <time>string</time>
          </Image>
          <Image>
            <type>POD or POA or DeliverySignature or DeliveryShop or PickupSignature</type>
            <image>base64Binary</image>
            <date>string</date>
            <time>string</time>
          </Image>
        </images>
      </GetShipmentTraceSingleResult>
    </GetShipmentTraceSingleResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /trace-service/Webtrace_Service.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software/">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <GetShipmentTraceSingle xmlns="http://www.cargonet.software/">
      <request>
        <ExpandContainerMode>MasterOnly or MasterAndSlave</ExpandContainerMode>
        <GetImages>boolean</GetImages>
        <GetPhotos>boolean</GetPhotos>
        <GetParsedInfo>boolean</GetParsedInfo>
        <GetServices>boolean</GetServices>
        <Options>
          <Type>string</Type>
          <CenterType>string</CenterType>
        </Options>
      </request>
    </GetShipmentTraceSingle>
  </soap12:Body>
</soap12:Envelope>
```

### SOAP 1.2 Response
```xml
HTTP/1.1 200 OK
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Body>
    <GetShipmentTraceSingleResponse xmlns="http://www.cargonet.software/">
      <GetShipmentTraceSingleResult>
        <images>
          <Image>
            <type>POD or POA or DeliverySignature or DeliveryShop or PickupSignature</type>
            <image>base64Binary</image>
            <date>string</date>
            <time>string</time>
          </Image>
          <Image>
            <type>POD or POA or DeliverySignature or DeliveryShop or PickupSignature</type>
            <image>base64Binary</image>
            <date>string</date>
            <time>string</time>
          </Image>
        </images>
      </GetShipmentTraceSingleResult>
    </GetShipmentTraceSingleResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 6. VerifyConfiguration

- URL: https://e-station-testenv.cargonet.software/trace-service/Webtrace_Service.asmx?op=VerifyConfiguration

### SOAP 1.1 Request
```xml
POST /trace-service/Webtrace_Service.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/VerifyConfiguration"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <VerifyUserCredentials xmlns="http://www.cargonet.software/">
      <Verify_userid>string</Verify_userid>
      <Verify_password>string</Verify_password>
    </VerifyUserCredentials>
  </soap:Header>
  <soap:Body>
    <VerifyConfiguration xmlns="http://www.cargonet.software/">
      <request>
        <customer>
          <countrycode>int</countrycode>
        </customer>
        <ip>string</ip>
      </request>
    </VerifyConfiguration>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.1 Response
```xml
HTTP/1.1 200 OK
Content-Type: text/xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Body>
    <VerifyConfigurationResponse xmlns="http://www.cargonet.software/">
      <VerifyConfigurationResult>
        <Allowed>boolean</Allowed>
      </VerifyConfigurationResult>
    </VerifyConfigurationResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /trace-service/Webtrace_Service.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <VerifyUserCredentials xmlns="http://www.cargonet.software/">
      <Verify_userid>string</Verify_userid>
      <Verify_password>string</Verify_password>
    </VerifyUserCredentials>
  </soap12:Header>
  <soap12:Body>
    <VerifyConfiguration xmlns="http://www.cargonet.software/">
      <request>
        <customer>
          <countrycode>int</countrycode>
        </customer>
        <ip>string</ip>
      </request>
    </VerifyConfiguration>
  </soap12:Body>
</soap12:Envelope>
```

### SOAP 1.2 Response
```xml
HTTP/1.1 200 OK
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Body>
    <VerifyConfigurationResponse xmlns="http://www.cargonet.software/">
      <VerifyConfigurationResult>
        <Allowed>boolean</Allowed>
      </VerifyConfigurationResult>
    </VerifyConfigurationResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 7. getInfo

- URL: https://e-station-testenv.cargonet.software/trace-service/Webtrace_Service.asmx?op=getInfo

### SOAP 1.1 Request
```xml
POST /trace-service/Webtrace_Service.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/getInfo"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software/">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <getInfo xmlns="http://www.cargonet.software/" />
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.1 Response
```xml
HTTP/1.1 200 OK
Content-Type: text/xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Body>
    <getInfoResponse xmlns="http://www.cargonet.software/">
      <getInfoResult>string</getInfoResult>
    </getInfoResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /trace-service/Webtrace_Service.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software/">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <getInfo xmlns="http://www.cargonet.software/" />
  </soap12:Body>
</soap12:Envelope>
```

### SOAP 1.2 Response
```xml
HTTP/1.1 200 OK
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Body>
    <getInfoResponse xmlns="http://www.cargonet.software/">
      <getInfoResult>string</getInfoResult>
    </getInfoResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 8. isAlive

- URL: https://e-station-testenv.cargonet.software/trace-service/Webtrace_Service.asmx?op=isAlive

### SOAP 1.1 Request
```xml
POST /trace-service/Webtrace_Service.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/isAlive"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Body>
    <isAlive xmlns="http://www.cargonet.software/" />
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.1 Response
```xml
HTTP/1.1 200 OK
Content-Type: text/xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Body>
    <isAliveResponse xmlns="http://www.cargonet.software/">
      <isAliveResult>boolean</isAliveResult>
    </isAliveResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /trace-service/Webtrace_Service.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Body>
    <isAlive xmlns="http://www.cargonet.software/" />
  </soap12:Body>
</soap12:Envelope>
```

### SOAP 1.2 Response
```xml
HTTP/1.1 200 OK
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Body>
    <isAliveResponse xmlns="http://www.cargonet.software/">
      <isAliveResult>boolean</isAliveResult>
    </isAliveResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 9. runAction

- URL: https://e-station-testenv.cargonet.software/trace-service/Webtrace_Service.asmx?op=runAction

### SOAP 1.1 Request
```xml
POST /trace-service/Webtrace_Service.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/runAction"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software/">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <runAction xmlns="http://www.cargonet.software/">
      <request>
        <Action>string</Action>
        <Parameter>string</Parameter>
      </request>
    </runAction>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.1 Response
```xml
HTTP/1.1 200 OK
Content-Type: text/xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Body>
    <runActionResponse xmlns="http://www.cargonet.software/">
      <runActionResult>
        <Response>string</Response>
      </runActionResult>
    </runActionResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /trace-service/Webtrace_Service.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software/">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <runAction xmlns="http://www.cargonet.software/">
      <request>
        <Action>string</Action>
        <Parameter>string</Parameter>
      </request>
    </runAction>
  </soap12:Body>
</soap12:Envelope>
```

### SOAP 1.2 Response
```xml
HTTP/1.1 200 OK
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Body>
    <runActionResponse xmlns="http://www.cargonet.software/">
      <runActionResult>
        <Response>string</Response>
      </runActionResult>
    </runActionResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 10. setAlive

- URL: https://e-station-testenv.cargonet.software/trace-service/Webtrace_Service.asmx?op=setAlive

### SOAP 1.1 Request
```xml
POST /trace-service/Webtrace_Service.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/setAlive"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software/">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <setAlive xmlns="http://www.cargonet.software/">
      <value>boolean</value>
    </setAlive>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.1 Response
```xml
HTTP/1.1 200 OK
Content-Type: text/xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Body>
    <setAliveResponse xmlns="http://www.cargonet.software/" />
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /trace-service/Webtrace_Service.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software/">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <setAlive xmlns="http://www.cargonet.software/">
      <value>boolean</value>
    </setAlive>
  </soap12:Body>
</soap12:Envelope>
```

### SOAP 1.2 Response
```xml
HTTP/1.1 200 OK
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Body>
    <setAliveResponse xmlns="http://www.cargonet.software/" />
  </soap12:Body>
</soap12:Envelope>
```
