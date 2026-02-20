# EPrintWebservice operations (auto-generated)

Source: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx

Total operations: 73

> Generated from `?op=<OperationName>` pages (SOAP examples).

## 1. AddStatisticData

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=AddStatisticData

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/AddStatisticData"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <AddStatisticData xmlns="http://www.cargonet.software">
      <request>
        <ClientId>string</ClientId>
        <Customer>
          <countrycode>int</countrycode>
        </Customer>
        <Data>
          <StatisticData>
            <ValueName>string</ValueName>
            <Date>string</Date>
            <Value>long</Value>
          </StatisticData>
          <StatisticData>
            <ValueName>string</ValueName>
            <Date>string</Date>
            <Value>long</Value>
          </StatisticData>
        </Data>
      </request>
    </AddStatisticData>
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
    <AddStatisticDataResponse xmlns="http://www.cargonet.software">
      <AddStatisticDataResult>
        <Done>
          <boolean>boolean</boolean>
          <boolean>boolean</boolean>
        </Done>
      </AddStatisticDataResult>
    </AddStatisticDataResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <AddStatisticData xmlns="http://www.cargonet.software">
      <request>
        <ClientId>string</ClientId>
        <Customer>
          <countrycode>int</countrycode>
        </Customer>
        <Data>
          <StatisticData>
            <ValueName>string</ValueName>
            <Date>string</Date>
            <Value>long</Value>
          </StatisticData>
          <StatisticData>
            <ValueName>string</ValueName>
            <Date>string</Date>
            <Value>long</Value>
          </StatisticData>
        </Data>
      </request>
    </AddStatisticData>
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
    <AddStatisticDataResponse xmlns="http://www.cargonet.software">
      <AddStatisticDataResult>
        <Done>
          <boolean>boolean</boolean>
          <boolean>boolean</boolean>
        </Done>
      </AddStatisticDataResult>
    </AddStatisticDataResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 2. CancelServiceNotice

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=CancelServiceNotice

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/CancelServiceNotice"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <CancelServiceNotice xmlns="http://www.cargonet.software">
      <request />
    </CancelServiceNotice>
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
    <CancelServiceNoticeResponse xmlns="http://www.cargonet.software" />
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <CancelServiceNotice xmlns="http://www.cargonet.software">
      <request />
    </CancelServiceNotice>
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
    <CancelServiceNoticeResponse xmlns="http://www.cargonet.software" />
  </soap12:Body>
</soap12:Envelope>
```

## 3. CheckIfReverseInverseShipmentExists

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=CheckIfReverseInverseShipmentExists

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/CheckIfReverseInverseShipmentExists"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <CheckIfReverseInverseShipmentExists xmlns="http://www.cargonet.software">
      <request />
    </CheckIfReverseInverseShipmentExists>
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
    <CheckIfReverseInverseShipmentExistsResponse xmlns="http://www.cargonet.software">
      <CheckIfReverseInverseShipmentExistsResult>WellDone or OriginalShipmentNotFound or OriginalShipmentAlreadyLinked</CheckIfReverseInverseShipmentExistsResult>
    </CheckIfReverseInverseShipmentExistsResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <CheckIfReverseInverseShipmentExists xmlns="http://www.cargonet.software">
      <request />
    </CheckIfReverseInverseShipmentExists>
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
    <CheckIfReverseInverseShipmentExistsResponse xmlns="http://www.cargonet.software">
      <CheckIfReverseInverseShipmentExistsResult>WellDone or OriginalShipmentNotFound or OriginalShipmentAlreadyLinked</CheckIfReverseInverseShipmentExistsResult>
    </CheckIfReverseInverseShipmentExistsResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 4. CheckIfReverseInverseShipmentExistsBcId

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=CheckIfReverseInverseShipmentExistsBcId

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/CheckIfReverseInverseShipmentExistsBcId"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <CheckIfReverseInverseShipmentExistsBcId xmlns="http://www.cargonet.software">
      <request />
    </CheckIfReverseInverseShipmentExistsBcId>
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
    <CheckIfReverseInverseShipmentExistsBcIdResponse xmlns="http://www.cargonet.software">
      <CheckIfReverseInverseShipmentExistsBcIdResult>WellDone or OriginalShipmentNotFound or OriginalShipmentAlreadyLinked</CheckIfReverseInverseShipmentExistsBcIdResult>
    </CheckIfReverseInverseShipmentExistsBcIdResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <CheckIfReverseInverseShipmentExistsBcId xmlns="http://www.cargonet.software">
      <request />
    </CheckIfReverseInverseShipmentExistsBcId>
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
    <CheckIfReverseInverseShipmentExistsBcIdResponse xmlns="http://www.cargonet.software">
      <CheckIfReverseInverseShipmentExistsBcIdResult>WellDone or OriginalShipmentNotFound or OriginalShipmentAlreadyLinked</CheckIfReverseInverseShipmentExistsBcIdResult>
    </CheckIfReverseInverseShipmentExistsBcIdResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 5. CreateCollectionRequest

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=CreateCollectionRequest

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/CreateCollectionRequest"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <CreateCollectionRequest xmlns="http://www.cargonet.software">
      <request>
        <shipperinfo>
          <contact>string</contact>
          <name2>string</name2>
          <name3>string</name3>
          <name4>string</name4>
          <digicode1>string</digicode1>
          <digicode2>string</digicode2>
          <intercomid>string</intercomid>
          <vinfo1>string</vinfo1>
          <vinfo2>string</vinfo2>
        </shipperinfo>
        <receiverinfo>
          <contact>string</contact>
          <name2>string</name2>
          <name3>string</name3>
          <name4>string</name4>
          <digicode1>string</digicode1>
          <digicode2>string</digicode2>
          <intercomid>string</intercomid>
          <vinfo1>string</vinfo1>
          <vinfo2>string</vinfo2>
        </receiverinfo>
        <pick_date>string</pick_date>
        <time_from>string</time_from>
        <time_to>string</time_to>
        <pick_remark>string</pick_remark>
        <delivery_remark>string</delivery_remark>
        <dayCheckDone>boolean</dayCheckDone>
      </request>
    </CreateCollectionRequest>
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
    <CreateCollectionRequestResponse xmlns="http://www.cargonet.software">
      <CreateCollectionRequestResult>
        <Shipment>
          <countrycode>int</countrycode>
          <centernumber>int</centernumber>
          <parcelnumber>long</parcelnumber>
          <barcode>long</barcode>
          <type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</type>
        </Shipment>
        <Shipment>
          <countrycode>int</countrycode>
          <centernumber>int</centernumber>
          <parcelnumber>long</parcelnumber>
          <barcode>long</barcode>
          <type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</type>
        </Shipment>
      </CreateCollectionRequestResult>
    </CreateCollectionRequestResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <CreateCollectionRequest xmlns="http://www.cargonet.software">
      <request>
        <shipperinfo>
          <contact>string</contact>
          <name2>string</name2>
          <name3>string</name3>
          <name4>string</name4>
          <digicode1>string</digicode1>
          <digicode2>string</digicode2>
          <intercomid>string</intercomid>
          <vinfo1>string</vinfo1>
          <vinfo2>string</vinfo2>
        </shipperinfo>
        <receiverinfo>
          <contact>string</contact>
          <name2>string</name2>
          <name3>string</name3>
          <name4>string</name4>
          <digicode1>string</digicode1>
          <digicode2>string</digicode2>
          <intercomid>string</intercomid>
          <vinfo1>string</vinfo1>
          <vinfo2>string</vinfo2>
        </receiverinfo>
        <pick_date>string</pick_date>
        <time_from>string</time_from>
        <time_to>string</time_to>
        <pick_remark>string</pick_remark>
        <delivery_remark>string</delivery_remark>
        <dayCheckDone>boolean</dayCheckDone>
      </request>
    </CreateCollectionRequest>
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
    <CreateCollectionRequestResponse xmlns="http://www.cargonet.software">
      <CreateCollectionRequestResult>
        <Shipment>
          <countrycode>int</countrycode>
          <centernumber>int</centernumber>
          <parcelnumber>long</parcelnumber>
          <barcode>long</barcode>
          <type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</type>
        </Shipment>
        <Shipment>
          <countrycode>int</countrycode>
          <centernumber>int</centernumber>
          <parcelnumber>long</parcelnumber>
          <barcode>long</barcode>
          <type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</type>
        </Shipment>
      </CreateCollectionRequestResult>
    </CreateCollectionRequestResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 6. CreateCollectionRequestBc

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=CreateCollectionRequestBc

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/CreateCollectionRequestBc"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <CreateCollectionRequestBc xmlns="http://www.cargonet.software">
      <request>
        <shipperinfo>
          <contact>string</contact>
          <name2>string</name2>
          <name3>string</name3>
          <name4>string</name4>
          <digicode1>string</digicode1>
          <digicode2>string</digicode2>
          <intercomid>string</intercomid>
          <vinfo1>string</vinfo1>
          <vinfo2>string</vinfo2>
        </shipperinfo>
        <receiverinfo>
          <contact>string</contact>
          <name2>string</name2>
          <name3>string</name3>
          <name4>string</name4>
          <digicode1>string</digicode1>
          <digicode2>string</digicode2>
          <intercomid>string</intercomid>
          <vinfo1>string</vinfo1>
          <vinfo2>string</vinfo2>
        </receiverinfo>
        <pick_date>string</pick_date>
        <time_from>string</time_from>
        <time_to>string</time_to>
        <pick_remark>string</pick_remark>
        <delivery_remark>string</delivery_remark>
        <dayCheckDone>boolean</dayCheckDone>
      </request>
    </CreateCollectionRequestBc>
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
    <CreateCollectionRequestBcResponse xmlns="http://www.cargonet.software">
      <CreateCollectionRequestBcResult>
        <ShipmentBc>
          <Shipment>
            <BarCode>string</BarCode>
          </Shipment>
          <Type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</Type>
        </ShipmentBc>
        <ShipmentBc>
          <Shipment>
            <BarCode>string</BarCode>
          </Shipment>
          <Type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</Type>
        </ShipmentBc>
      </CreateCollectionRequestBcResult>
    </CreateCollectionRequestBcResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <CreateCollectionRequestBc xmlns="http://www.cargonet.software">
      <request>
        <shipperinfo>
          <contact>string</contact>
          <name2>string</name2>
          <name3>string</name3>
          <name4>string</name4>
          <digicode1>string</digicode1>
          <digicode2>string</digicode2>
          <intercomid>string</intercomid>
          <vinfo1>string</vinfo1>
          <vinfo2>string</vinfo2>
        </shipperinfo>
        <receiverinfo>
          <contact>string</contact>
          <name2>string</name2>
          <name3>string</name3>
          <name4>string</name4>
          <digicode1>string</digicode1>
          <digicode2>string</digicode2>
          <intercomid>string</intercomid>
          <vinfo1>string</vinfo1>
          <vinfo2>string</vinfo2>
        </receiverinfo>
        <pick_date>string</pick_date>
        <time_from>string</time_from>
        <time_to>string</time_to>
        <pick_remark>string</pick_remark>
        <delivery_remark>string</delivery_remark>
        <dayCheckDone>boolean</dayCheckDone>
      </request>
    </CreateCollectionRequestBc>
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
    <CreateCollectionRequestBcResponse xmlns="http://www.cargonet.software">
      <CreateCollectionRequestBcResult>
        <ShipmentBc>
          <Shipment>
            <BarCode>string</BarCode>
          </Shipment>
          <Type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</Type>
        </ShipmentBc>
        <ShipmentBc>
          <Shipment>
            <BarCode>string</BarCode>
          </Shipment>
          <Type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</Type>
        </ShipmentBc>
      </CreateCollectionRequestBcResult>
    </CreateCollectionRequestBcResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 7. CreateMultiShipment

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=CreateMultiShipment

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/CreateMultiShipment"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <CreateMultiShipment xmlns="http://www.cargonet.software">
      <request>
        <services>
          <consolidation>
            <type>CombinedDelivery or CombinedInvoicing or CombinedDeliveryAndInvoicing</type>
          </consolidation>
          <pickupAtCustomer>
            <time_from>string</time_from>
            <time_to>string</time_to>
            <remark>string</remark>
            <pick_remark>string</pick_remark>
            <dayCheckDone>boolean</dayCheckDone>
          </pickupAtCustomer>
          <tyre />
        </services>
        <slaves>
          <SlaveRequest>
            <weight>string</weight>
            <referencenumber>string</referencenumber>
            <reference2>string</reference2>
            <reference3>string</reference3>
            <reference4>string</reference4>
            <services xsi:nil="true" />
          </SlaveRequest>
          <SlaveRequest>
            <weight>string</weight>
            <referencenumber>string</referencenumber>
            <reference2>string</reference2>
            <reference3>string</reference3>
            <reference4>string</reference4>
            <services xsi:nil="true" />
          </SlaveRequest>
        </slaves>
      </request>
    </CreateMultiShipment>
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
    <CreateMultiShipmentResponse xmlns="http://www.cargonet.software">
      <CreateMultiShipmentResult>
        <mastershipment>
          <countrycode>int</countrycode>
          <centernumber>int</centernumber>
          <parcelnumber>long</parcelnumber>
          <barcode>long</barcode>
          <type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</type>
        </mastershipment>
        <shipments>
          <Shipment>
            <countrycode>int</countrycode>
            <centernumber>int</centernumber>
            <parcelnumber>long</parcelnumber>
            <barcode>long</barcode>
            <type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</type>
          </Shipment>
          <Shipment>
            <countrycode>int</countrycode>
            <centernumber>int</centernumber>
            <parcelnumber>long</parcelnumber>
            <barcode>long</barcode>
            <type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</type>
          </Shipment>
        </shipments>
      </CreateMultiShipmentResult>
    </CreateMultiShipmentResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <CreateMultiShipment xmlns="http://www.cargonet.software">
      <request>
        <services>
          <consolidation>
            <type>CombinedDelivery or CombinedInvoicing or CombinedDeliveryAndInvoicing</type>
          </consolidation>
          <pickupAtCustomer>
            <time_from>string</time_from>
            <time_to>string</time_to>
            <remark>string</remark>
            <pick_remark>string</pick_remark>
            <dayCheckDone>boolean</dayCheckDone>
          </pickupAtCustomer>
          <tyre />
        </services>
        <slaves>
          <SlaveRequest>
            <weight>string</weight>
            <referencenumber>string</referencenumber>
            <reference2>string</reference2>
            <reference3>string</reference3>
            <reference4>string</reference4>
            <services xsi:nil="true" />
          </SlaveRequest>
          <SlaveRequest>
            <weight>string</weight>
            <referencenumber>string</referencenumber>
            <reference2>string</reference2>
            <reference3>string</reference3>
            <reference4>string</reference4>
            <services xsi:nil="true" />
          </SlaveRequest>
        </slaves>
      </request>
    </CreateMultiShipment>
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
    <CreateMultiShipmentResponse xmlns="http://www.cargonet.software">
      <CreateMultiShipmentResult>
        <mastershipment>
          <countrycode>int</countrycode>
          <centernumber>int</centernumber>
          <parcelnumber>long</parcelnumber>
          <barcode>long</barcode>
          <type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</type>
        </mastershipment>
        <shipments>
          <Shipment>
            <countrycode>int</countrycode>
            <centernumber>int</centernumber>
            <parcelnumber>long</parcelnumber>
            <barcode>long</barcode>
            <type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</type>
          </Shipment>
          <Shipment>
            <countrycode>int</countrycode>
            <centernumber>int</centernumber>
            <parcelnumber>long</parcelnumber>
            <barcode>long</barcode>
            <type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</type>
          </Shipment>
        </shipments>
      </CreateMultiShipmentResult>
    </CreateMultiShipmentResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 8. CreateMultiShipmentBc

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=CreateMultiShipmentBc

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/CreateMultiShipmentBc"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <CreateMultiShipmentBc xmlns="http://www.cargonet.software">
      <request>
        <services>
          <consolidation>
            <type>CombinedDelivery or CombinedInvoicing or CombinedDeliveryAndInvoicing</type>
          </consolidation>
          <pickupAtCustomer>
            <time_from>string</time_from>
            <time_to>string</time_to>
            <remark>string</remark>
            <pick_remark>string</pick_remark>
            <dayCheckDone>boolean</dayCheckDone>
          </pickupAtCustomer>
          <tyre />
        </services>
        <slaves>
          <SlaveRequest>
            <weight>string</weight>
            <referencenumber>string</referencenumber>
            <reference2>string</reference2>
            <reference3>string</reference3>
            <reference4>string</reference4>
            <services xsi:nil="true" />
          </SlaveRequest>
          <SlaveRequest>
            <weight>string</weight>
            <referencenumber>string</referencenumber>
            <reference2>string</reference2>
            <reference3>string</reference3>
            <reference4>string</reference4>
            <services xsi:nil="true" />
          </SlaveRequest>
        </slaves>
      </request>
    </CreateMultiShipmentBc>
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
    <CreateMultiShipmentBcResponse xmlns="http://www.cargonet.software">
      <CreateMultiShipmentBcResult>
        <mastershipment>
          <Shipment>
            <BarCode>string</BarCode>
          </Shipment>
          <Type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</Type>
        </mastershipment>
        <shipments>
          <ShipmentBc>
            <Shipment xsi:nil="true" />
            <Type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</Type>
          </ShipmentBc>
          <ShipmentBc>
            <Shipment xsi:nil="true" />
            <Type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</Type>
          </ShipmentBc>
        </shipments>
      </CreateMultiShipmentBcResult>
    </CreateMultiShipmentBcResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <CreateMultiShipmentBc xmlns="http://www.cargonet.software">
      <request>
        <services>
          <consolidation>
            <type>CombinedDelivery or CombinedInvoicing or CombinedDeliveryAndInvoicing</type>
          </consolidation>
          <pickupAtCustomer>
            <time_from>string</time_from>
            <time_to>string</time_to>
            <remark>string</remark>
            <pick_remark>string</pick_remark>
            <dayCheckDone>boolean</dayCheckDone>
          </pickupAtCustomer>
          <tyre />
        </services>
        <slaves>
          <SlaveRequest>
            <weight>string</weight>
            <referencenumber>string</referencenumber>
            <reference2>string</reference2>
            <reference3>string</reference3>
            <reference4>string</reference4>
            <services xsi:nil="true" />
          </SlaveRequest>
          <SlaveRequest>
            <weight>string</weight>
            <referencenumber>string</referencenumber>
            <reference2>string</reference2>
            <reference3>string</reference3>
            <reference4>string</reference4>
            <services xsi:nil="true" />
          </SlaveRequest>
        </slaves>
      </request>
    </CreateMultiShipmentBc>
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
    <CreateMultiShipmentBcResponse xmlns="http://www.cargonet.software">
      <CreateMultiShipmentBcResult>
        <mastershipment>
          <Shipment>
            <BarCode>string</BarCode>
          </Shipment>
          <Type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</Type>
        </mastershipment>
        <shipments>
          <ShipmentBc>
            <Shipment xsi:nil="true" />
            <Type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</Type>
          </ShipmentBc>
          <ShipmentBc>
            <Shipment xsi:nil="true" />
            <Type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</Type>
          </ShipmentBc>
        </shipments>
      </CreateMultiShipmentBcResult>
    </CreateMultiShipmentBcResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 9. CreatePickupAtCustomer

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=CreatePickupAtCustomer

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/CreatePickupAtCustomer"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <CreatePickupAtCustomer xmlns="http://www.cargonet.software">
      <request>
        <shipments>
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
        </shipments>
      </request>
    </CreatePickupAtCustomer>
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
    <CreatePickupAtCustomerResponse xmlns="http://www.cargonet.software">
      <CreatePickupAtCustomerResult>
        <countrycode>int</countrycode>
        <centernumber>int</centernumber>
        <parcelnumber>long</parcelnumber>
      </CreatePickupAtCustomerResult>
    </CreatePickupAtCustomerResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <CreatePickupAtCustomer xmlns="http://www.cargonet.software">
      <request>
        <shipments>
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
        </shipments>
      </request>
    </CreatePickupAtCustomer>
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
    <CreatePickupAtCustomerResponse xmlns="http://www.cargonet.software">
      <CreatePickupAtCustomerResult>
        <countrycode>int</countrycode>
        <centernumber>int</centernumber>
        <parcelnumber>long</parcelnumber>
      </CreatePickupAtCustomerResult>
    </CreatePickupAtCustomerResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 10. CreatePickupAtCustomerBc

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=CreatePickupAtCustomerBc

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/CreatePickupAtCustomerBc"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <CreatePickupAtCustomerBc xmlns="http://www.cargonet.software">
      <request>
        <shipments>
          <string>string</string>
          <string>string</string>
        </shipments>
      </request>
    </CreatePickupAtCustomerBc>
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
    <CreatePickupAtCustomerBcResponse xmlns="http://www.cargonet.software">
      <CreatePickupAtCustomerBcResult>
        <Sin>long</Sin>
      </CreatePickupAtCustomerBcResult>
    </CreatePickupAtCustomerBcResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <CreatePickupAtCustomerBc xmlns="http://www.cargonet.software">
      <request>
        <shipments>
          <string>string</string>
          <string>string</string>
        </shipments>
      </request>
    </CreatePickupAtCustomerBc>
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
    <CreatePickupAtCustomerBcResponse xmlns="http://www.cargonet.software">
      <CreatePickupAtCustomerBcResult>
        <Sin>long</Sin>
      </CreatePickupAtCustomerBcResult>
    </CreatePickupAtCustomerBcResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 11. CreateReverseInverseShipment

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=CreateReverseInverseShipment

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/CreateReverseInverseShipment"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <CreateReverseInverseShipment xmlns="http://www.cargonet.software">
      <request>
        <weight>string</weight>
        <expire_offset>int</expire_offset>
        <referencenumber>string</referencenumber>
        <services>
          <extraInsurance>
            <value>string</value>
            <type>byShipments or byWeight</type>
          </extraInsurance>
          <contact>
            <sms>string</sms>
            <email>string</email>
            <type>No or Predict or AutomaticSMS or AutomaticMail</type>
            <autoText>string</autoText>
            <secureService xsi:nil="true" />
          </contact>
        </services>
      </request>
    </CreateReverseInverseShipment>
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
    <CreateReverseInverseShipmentResponse xmlns="http://www.cargonet.software">
      <CreateReverseInverseShipmentResult>
        <countrycode>int</countrycode>
        <centernumber>int</centernumber>
        <parcelnumber>long</parcelnumber>
        <barcode>long</barcode>
        <type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</type>
      </CreateReverseInverseShipmentResult>
    </CreateReverseInverseShipmentResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <CreateReverseInverseShipment xmlns="http://www.cargonet.software">
      <request>
        <weight>string</weight>
        <expire_offset>int</expire_offset>
        <referencenumber>string</referencenumber>
        <services>
          <extraInsurance>
            <value>string</value>
            <type>byShipments or byWeight</type>
          </extraInsurance>
          <contact>
            <sms>string</sms>
            <email>string</email>
            <type>No or Predict or AutomaticSMS or AutomaticMail</type>
            <autoText>string</autoText>
            <secureService xsi:nil="true" />
          </contact>
        </services>
      </request>
    </CreateReverseInverseShipment>
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
    <CreateReverseInverseShipmentResponse xmlns="http://www.cargonet.software">
      <CreateReverseInverseShipmentResult>
        <countrycode>int</countrycode>
        <centernumber>int</centernumber>
        <parcelnumber>long</parcelnumber>
        <barcode>long</barcode>
        <type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</type>
      </CreateReverseInverseShipmentResult>
    </CreateReverseInverseShipmentResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 12. CreateReverseInverseShipmentBc

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=CreateReverseInverseShipmentBc

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/CreateReverseInverseShipmentBc"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <CreateReverseInverseShipmentBc xmlns="http://www.cargonet.software">
      <request>
        <weight>string</weight>
        <expire_offset>int</expire_offset>
        <referencenumber>string</referencenumber>
        <services>
          <extraInsurance>
            <value>string</value>
            <type>byShipments or byWeight</type>
          </extraInsurance>
          <contact>
            <sms>string</sms>
            <email>string</email>
            <type>No or Predict or AutomaticSMS or AutomaticMail</type>
            <autoText>string</autoText>
            <secureService xsi:nil="true" />
          </contact>
        </services>
      </request>
    </CreateReverseInverseShipmentBc>
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
    <CreateReverseInverseShipmentBcResponse xmlns="http://www.cargonet.software">
      <CreateReverseInverseShipmentBcResult>
        <Shipment>
          <BarCode>string</BarCode>
        </Shipment>
        <Type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</Type>
      </CreateReverseInverseShipmentBcResult>
    </CreateReverseInverseShipmentBcResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <CreateReverseInverseShipmentBc xmlns="http://www.cargonet.software">
      <request>
        <weight>string</weight>
        <expire_offset>int</expire_offset>
        <referencenumber>string</referencenumber>
        <services>
          <extraInsurance>
            <value>string</value>
            <type>byShipments or byWeight</type>
          </extraInsurance>
          <contact>
            <sms>string</sms>
            <email>string</email>
            <type>No or Predict or AutomaticSMS or AutomaticMail</type>
            <autoText>string</autoText>
            <secureService xsi:nil="true" />
          </contact>
        </services>
      </request>
    </CreateReverseInverseShipmentBc>
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
    <CreateReverseInverseShipmentBcResponse xmlns="http://www.cargonet.software">
      <CreateReverseInverseShipmentBcResult>
        <Shipment>
          <BarCode>string</BarCode>
        </Shipment>
        <Type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</Type>
      </CreateReverseInverseShipmentBcResult>
    </CreateReverseInverseShipmentBcResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 13. CreateReverseInverseShipmentWithLabels

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=CreateReverseInverseShipmentWithLabels

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/CreateReverseInverseShipmentWithLabels"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <CreateReverseInverseShipmentWithLabels xmlns="http://www.cargonet.software">
      <request>
        <receiver_contact_name>string</receiver_contact_name>
        <customLabelText>string</customLabelText>
        <labelType>
          <type>Default or PDF or PDF_A6 or ZPL or ZPL300 or ZPL_A6 or ZPL300_A6 or EPL</type>
        </labelType>
        <refasbarcode>boolean</refasbarcode>
      </request>
    </CreateReverseInverseShipmentWithLabels>
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
    <CreateReverseInverseShipmentWithLabelsResponse xmlns="http://www.cargonet.software">
      <CreateReverseInverseShipmentWithLabelsResult>
        <shipment>
          <countrycode>int</countrycode>
          <centernumber>int</centernumber>
          <parcelnumber>long</parcelnumber>
          <barcode>long</barcode>
          <type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</type>
        </shipment>
        <labels>
          <Label>
            <type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</type>
            <label>base64Binary</label>
          </Label>
          <Label>
            <type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</type>
            <label>base64Binary</label>
          </Label>
        </labels>
      </CreateReverseInverseShipmentWithLabelsResult>
    </CreateReverseInverseShipmentWithLabelsResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <CreateReverseInverseShipmentWithLabels xmlns="http://www.cargonet.software">
      <request>
        <receiver_contact_name>string</receiver_contact_name>
        <customLabelText>string</customLabelText>
        <labelType>
          <type>Default or PDF or PDF_A6 or ZPL or ZPL300 or ZPL_A6 or ZPL300_A6 or EPL</type>
        </labelType>
        <refasbarcode>boolean</refasbarcode>
      </request>
    </CreateReverseInverseShipmentWithLabels>
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
    <CreateReverseInverseShipmentWithLabelsResponse xmlns="http://www.cargonet.software">
      <CreateReverseInverseShipmentWithLabelsResult>
        <shipment>
          <countrycode>int</countrycode>
          <centernumber>int</centernumber>
          <parcelnumber>long</parcelnumber>
          <barcode>long</barcode>
          <type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</type>
        </shipment>
        <labels>
          <Label>
            <type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</type>
            <label>base64Binary</label>
          </Label>
          <Label>
            <type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</type>
            <label>base64Binary</label>
          </Label>
        </labels>
      </CreateReverseInverseShipmentWithLabelsResult>
    </CreateReverseInverseShipmentWithLabelsResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 14. CreateReverseInverseShipmentWithLabelsBc

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=CreateReverseInverseShipmentWithLabelsBc

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/CreateReverseInverseShipmentWithLabelsBc"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <CreateReverseInverseShipmentWithLabelsBc xmlns="http://www.cargonet.software">
      <request>
        <receiver_contact_name>string</receiver_contact_name>
        <customLabelText>string</customLabelText>
        <labelType>
          <type>Default or PDF or PDF_A6 or ZPL or ZPL300 or ZPL_A6 or ZPL300_A6 or EPL</type>
        </labelType>
        <refasbarcode>boolean</refasbarcode>
      </request>
    </CreateReverseInverseShipmentWithLabelsBc>
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
    <CreateReverseInverseShipmentWithLabelsBcResponse xmlns="http://www.cargonet.software">
      <CreateReverseInverseShipmentWithLabelsBcResult>
        <Shipment>
          <Shipment>
            <BarCode>string</BarCode>
          </Shipment>
          <Type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</Type>
        </Shipment>
        <Labels>
          <Label>
            <type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</type>
            <label>base64Binary</label>
          </Label>
          <Label>
            <type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</type>
            <label>base64Binary</label>
          </Label>
        </Labels>
      </CreateReverseInverseShipmentWithLabelsBcResult>
    </CreateReverseInverseShipmentWithLabelsBcResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <CreateReverseInverseShipmentWithLabelsBc xmlns="http://www.cargonet.software">
      <request>
        <receiver_contact_name>string</receiver_contact_name>
        <customLabelText>string</customLabelText>
        <labelType>
          <type>Default or PDF or PDF_A6 or ZPL or ZPL300 or ZPL_A6 or ZPL300_A6 or EPL</type>
        </labelType>
        <refasbarcode>boolean</refasbarcode>
      </request>
    </CreateReverseInverseShipmentWithLabelsBc>
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
    <CreateReverseInverseShipmentWithLabelsBcResponse xmlns="http://www.cargonet.software">
      <CreateReverseInverseShipmentWithLabelsBcResult>
        <Shipment>
          <Shipment>
            <BarCode>string</BarCode>
          </Shipment>
          <Type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</Type>
        </Shipment>
        <Labels>
          <Label>
            <type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</type>
            <label>base64Binary</label>
          </Label>
          <Label>
            <type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</type>
            <label>base64Binary</label>
          </Label>
        </Labels>
      </CreateReverseInverseShipmentWithLabelsBcResult>
    </CreateReverseInverseShipmentWithLabelsBcResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 15. CreateShipment

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=CreateShipment

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/CreateShipment"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <CreateShipment xmlns="http://www.cargonet.software">
      <request />
    </CreateShipment>
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
    <CreateShipmentResponse xmlns="http://www.cargonet.software">
      <CreateShipmentResult>
        <Shipment>
          <countrycode>int</countrycode>
          <centernumber>int</centernumber>
          <parcelnumber>long</parcelnumber>
          <barcode>long</barcode>
          <type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</type>
        </Shipment>
        <Shipment>
          <countrycode>int</countrycode>
          <centernumber>int</centernumber>
          <parcelnumber>long</parcelnumber>
          <barcode>long</barcode>
          <type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</type>
        </Shipment>
      </CreateShipmentResult>
    </CreateShipmentResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <CreateShipment xmlns="http://www.cargonet.software">
      <request />
    </CreateShipment>
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
    <CreateShipmentResponse xmlns="http://www.cargonet.software">
      <CreateShipmentResult>
        <Shipment>
          <countrycode>int</countrycode>
          <centernumber>int</centernumber>
          <parcelnumber>long</parcelnumber>
          <barcode>long</barcode>
          <type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</type>
        </Shipment>
        <Shipment>
          <countrycode>int</countrycode>
          <centernumber>int</centernumber>
          <parcelnumber>long</parcelnumber>
          <barcode>long</barcode>
          <type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</type>
        </Shipment>
      </CreateShipmentResult>
    </CreateShipmentResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 16. CreateShipmentBc

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=CreateShipmentBc

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/CreateShipmentBc"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <CreateShipmentBc xmlns="http://www.cargonet.software">
      <request />
    </CreateShipmentBc>
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
    <CreateShipmentBcResponse xmlns="http://www.cargonet.software">
      <CreateShipmentBcResult>
        <ShipmentBc>
          <Shipment>
            <BarCode>string</BarCode>
          </Shipment>
          <Type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</Type>
        </ShipmentBc>
        <ShipmentBc>
          <Shipment>
            <BarCode>string</BarCode>
          </Shipment>
          <Type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</Type>
        </ShipmentBc>
      </CreateShipmentBcResult>
    </CreateShipmentBcResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <CreateShipmentBc xmlns="http://www.cargonet.software">
      <request />
    </CreateShipmentBc>
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
    <CreateShipmentBcResponse xmlns="http://www.cargonet.software">
      <CreateShipmentBcResult>
        <ShipmentBc>
          <Shipment>
            <BarCode>string</BarCode>
          </Shipment>
          <Type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</Type>
        </ShipmentBc>
        <ShipmentBc>
          <Shipment>
            <BarCode>string</BarCode>
          </Shipment>
          <Type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</Type>
        </ShipmentBc>
      </CreateShipmentBcResult>
    </CreateShipmentBcResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 17. CreateShipmentWithLabels

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=CreateShipmentWithLabels

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/CreateShipmentWithLabels"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <CreateShipmentWithLabels xmlns="http://www.cargonet.software">
      <request>
        <bic3data>
          <mode>OnlyStdLabels or OnlyBic3 or All</mode>
        </bic3data>
        <overrideShipperLabelAddress>
          <name>string</name>
          <phoneNumber>string</phoneNumber>
          <faxNumber>string</faxNumber>
          <geoX>string</geoX>
          <geoY>string</geoY>
        </overrideShipperLabelAddress>
        <injectionHub>string</injectionHub>
        <refnrasbarcode>boolean</refnrasbarcode>
        <referenceInBarcode>
          <type>Referencenumber or Reference2 or Reference3 or Reference4 or BcId</type>
        </referenceInBarcode>
      </request>
    </CreateShipmentWithLabels>
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
    <CreateShipmentWithLabelsResponse xmlns="http://www.cargonet.software">
      <CreateShipmentWithLabelsResult>
        <shipments>
          <Shipment>
            <countrycode>int</countrycode>
            <centernumber>int</centernumber>
            <parcelnumber>long</parcelnumber>
            <barcode>long</barcode>
            <type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</type>
          </Shipment>
          <Shipment>
            <countrycode>int</countrycode>
            <centernumber>int</centernumber>
            <parcelnumber>long</parcelnumber>
            <barcode>long</barcode>
            <type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</type>
          </Shipment>
        </shipments>
        <labels>
          <Label>
            <type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</type>
            <label>base64Binary</label>
          </Label>
          <Label>
            <type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</type>
            <label>base64Binary</label>
          </Label>
        </labels>
      </CreateShipmentWithLabelsResult>
    </CreateShipmentWithLabelsResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <CreateShipmentWithLabels xmlns="http://www.cargonet.software">
      <request>
        <bic3data>
          <mode>OnlyStdLabels or OnlyBic3 or All</mode>
        </bic3data>
        <overrideShipperLabelAddress>
          <name>string</name>
          <phoneNumber>string</phoneNumber>
          <faxNumber>string</faxNumber>
          <geoX>string</geoX>
          <geoY>string</geoY>
        </overrideShipperLabelAddress>
        <injectionHub>string</injectionHub>
        <refnrasbarcode>boolean</refnrasbarcode>
        <referenceInBarcode>
          <type>Referencenumber or Reference2 or Reference3 or Reference4 or BcId</type>
        </referenceInBarcode>
      </request>
    </CreateShipmentWithLabels>
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
    <CreateShipmentWithLabelsResponse xmlns="http://www.cargonet.software">
      <CreateShipmentWithLabelsResult>
        <shipments>
          <Shipment>
            <countrycode>int</countrycode>
            <centernumber>int</centernumber>
            <parcelnumber>long</parcelnumber>
            <barcode>long</barcode>
            <type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</type>
          </Shipment>
          <Shipment>
            <countrycode>int</countrycode>
            <centernumber>int</centernumber>
            <parcelnumber>long</parcelnumber>
            <barcode>long</barcode>
            <type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</type>
          </Shipment>
        </shipments>
        <labels>
          <Label>
            <type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</type>
            <label>base64Binary</label>
          </Label>
          <Label>
            <type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</type>
            <label>base64Binary</label>
          </Label>
        </labels>
      </CreateShipmentWithLabelsResult>
    </CreateShipmentWithLabelsResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 18. CreateShipmentWithLabelsBc

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=CreateShipmentWithLabelsBc

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/CreateShipmentWithLabelsBc"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <CreateShipmentWithLabelsBc xmlns="http://www.cargonet.software">
      <request>
        <bic3data>
          <mode>OnlyStdLabels or OnlyBic3 or All</mode>
        </bic3data>
        <overrideShipperLabelAddress>
          <name>string</name>
          <phoneNumber>string</phoneNumber>
          <faxNumber>string</faxNumber>
          <geoX>string</geoX>
          <geoY>string</geoY>
        </overrideShipperLabelAddress>
        <injectionHub>string</injectionHub>
        <refnrasbarcode>boolean</refnrasbarcode>
        <referenceInBarcode>
          <type>Referencenumber or Reference2 or Reference3 or Reference4 or BcId</type>
        </referenceInBarcode>
      </request>
    </CreateShipmentWithLabelsBc>
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
    <CreateShipmentWithLabelsBcResponse xmlns="http://www.cargonet.software">
      <CreateShipmentWithLabelsBcResult>
        <shipments>
          <ShipmentBc>
            <Shipment xsi:nil="true" />
            <Type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</Type>
          </ShipmentBc>
          <ShipmentBc>
            <Shipment xsi:nil="true" />
            <Type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</Type>
          </ShipmentBc>
        </shipments>
        <labels>
          <Label>
            <type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</type>
            <label>base64Binary</label>
          </Label>
          <Label>
            <type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</type>
            <label>base64Binary</label>
          </Label>
        </labels>
      </CreateShipmentWithLabelsBcResult>
    </CreateShipmentWithLabelsBcResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <CreateShipmentWithLabelsBc xmlns="http://www.cargonet.software">
      <request>
        <bic3data>
          <mode>OnlyStdLabels or OnlyBic3 or All</mode>
        </bic3data>
        <overrideShipperLabelAddress>
          <name>string</name>
          <phoneNumber>string</phoneNumber>
          <faxNumber>string</faxNumber>
          <geoX>string</geoX>
          <geoY>string</geoY>
        </overrideShipperLabelAddress>
        <injectionHub>string</injectionHub>
        <refnrasbarcode>boolean</refnrasbarcode>
        <referenceInBarcode>
          <type>Referencenumber or Reference2 or Reference3 or Reference4 or BcId</type>
        </referenceInBarcode>
      </request>
    </CreateShipmentWithLabelsBc>
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
    <CreateShipmentWithLabelsBcResponse xmlns="http://www.cargonet.software">
      <CreateShipmentWithLabelsBcResult>
        <shipments>
          <ShipmentBc>
            <Shipment xsi:nil="true" />
            <Type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</Type>
          </ShipmentBc>
          <ShipmentBc>
            <Shipment xsi:nil="true" />
            <Type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</Type>
          </ShipmentBc>
        </shipments>
        <labels>
          <Label>
            <type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</type>
            <label>base64Binary</label>
          </Label>
          <Label>
            <type>REVERSE or PROOF or EPRINT or EPRINTATTACHMENT or MASTER or COLLECTIONREQUEST or BIC3 or REVERSEBIC3 or PROOFBIC3</type>
            <label>base64Binary</label>
          </Label>
        </labels>
      </CreateShipmentWithLabelsBcResult>
    </CreateShipmentWithLabelsBcResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 19. GetAllServiceNotices

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=GetAllServiceNotices

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/GetAllServiceNotices"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <GetAllServiceNotices xmlns="http://www.cargonet.software">
      <request>
        <Customer>
          <countrycode>int</countrycode>
        </Customer>
        <Languages>
          <string>string</string>
          <string>string</string>
        </Languages>
        <LastKey>string</LastKey>
      </request>
    </GetAllServiceNotices>
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
    <GetAllServiceNoticesResponse xmlns="http://www.cargonet.software">
      <GetAllServiceNoticesResult>
        <ServiceNotices>
          <ServiceNoticeEntry>
            <BarcodeId>string</BarcodeId>
            <BarcodeSource>string</BarcodeSource>
            <Customer xsi:nil="true" />
            <Reason xsi:nil="true" />
            <Date>string</Date>
            <Status>string</Status>
            <Weight>string</Weight>
            <Info>string</Info>
            <Counterquestion>string</Counterquestion>
            <Type>pick or dely</Type>
          </ServiceNoticeEntry>
          <ServiceNoticeEntry>
            <BarcodeId>string</BarcodeId>
            <BarcodeSource>string</BarcodeSource>
            <Customer xsi:nil="true" />
            <Reason xsi:nil="true" />
            <Date>string</Date>
            <Status>string</Status>
            <Weight>string</Weight>
            <Info>string</Info>
            <Counterquestion>string</Counterquestion>
            <Type>pick or dely</Type>
          </ServiceNoticeEntry>
        </ServiceNotices>
        <LastKey>string</LastKey>
        <DataComplete>boolean</DataComplete>
      </GetAllServiceNoticesResult>
    </GetAllServiceNoticesResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <GetAllServiceNotices xmlns="http://www.cargonet.software">
      <request>
        <Customer>
          <countrycode>int</countrycode>
        </Customer>
        <Languages>
          <string>string</string>
          <string>string</string>
        </Languages>
        <LastKey>string</LastKey>
      </request>
    </GetAllServiceNotices>
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
    <GetAllServiceNoticesResponse xmlns="http://www.cargonet.software">
      <GetAllServiceNoticesResult>
        <ServiceNotices>
          <ServiceNoticeEntry>
            <BarcodeId>string</BarcodeId>
            <BarcodeSource>string</BarcodeSource>
            <Customer xsi:nil="true" />
            <Reason xsi:nil="true" />
            <Date>string</Date>
            <Status>string</Status>
            <Weight>string</Weight>
            <Info>string</Info>
            <Counterquestion>string</Counterquestion>
            <Type>pick or dely</Type>
          </ServiceNoticeEntry>
          <ServiceNoticeEntry>
            <BarcodeId>string</BarcodeId>
            <BarcodeSource>string</BarcodeSource>
            <Customer xsi:nil="true" />
            <Reason xsi:nil="true" />
            <Date>string</Date>
            <Status>string</Status>
            <Weight>string</Weight>
            <Info>string</Info>
            <Counterquestion>string</Counterquestion>
            <Type>pick or dely</Type>
          </ServiceNoticeEntry>
        </ServiceNotices>
        <LastKey>string</LastKey>
        <DataComplete>boolean</DataComplete>
      </GetAllServiceNoticesResult>
    </GetAllServiceNoticesResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 20. GetBic3

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=GetBic3

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/GetBic3"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <GetBic3 xmlns="http://www.cargonet.software">
      <request>
        <centernumber>int</centernumber>
        <customer>
          <countrycode>int</countrycode>
        </customer>
      </request>
    </GetBic3>
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
    <GetBic3Response xmlns="http://www.cargonet.software">
      <GetBic3Result>long</GetBic3Result>
    </GetBic3Response>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <GetBic3 xmlns="http://www.cargonet.software">
      <request>
        <centernumber>int</centernumber>
        <customer>
          <countrycode>int</countrycode>
        </customer>
      </request>
    </GetBic3>
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
    <GetBic3Response xmlns="http://www.cargonet.software">
      <GetBic3Result>long</GetBic3Result>
    </GetBic3Response>
  </soap12:Body>
</soap12:Envelope>
```

## 21. GetBic3Routing

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=GetBic3Routing

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/GetBic3Routing"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <GetBic3Routing xmlns="http://www.cargonet.software">
      <request>
        <customer>
          <countrycode>int</countrycode>
        </customer>
      </request>
    </GetBic3Routing>
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
    <GetBic3RoutingResponse xmlns="http://www.cargonet.software">
      <GetBic3RoutingResult>
        <bic3>long</bic3>
        <route>
          <barcodeId>string</barcodeId>
          <barcodePostcode>string</barcodePostcode>
          <buAlphaStr>string</buAlphaStr>
          <buCode>string</buCode>
          <cSort>string</cSort>
          <dCountry>string</dCountry>
          <dDepot>string</dDepot>
          <dDepotCountry>string</dDepotCountry>
          <dDepotStr>string</dDepotStr>
          <dSort>string</dSort>
          <networkCode>string</networkCode>
          <oSort>string</oSort>
          <partnerCode>string</partnerCode>
          <routingText>string</routingText>
          <sSort>string</sSort>
          <serviceMark>string</serviceMark>
          <serviceText>string</serviceText>
          <version>string</version>
          <soCode>string</soCode>
        </route>
      </GetBic3RoutingResult>
    </GetBic3RoutingResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <GetBic3Routing xmlns="http://www.cargonet.software">
      <request>
        <customer>
          <countrycode>int</countrycode>
        </customer>
      </request>
    </GetBic3Routing>
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
    <GetBic3RoutingResponse xmlns="http://www.cargonet.software">
      <GetBic3RoutingResult>
        <bic3>long</bic3>
        <route>
          <barcodeId>string</barcodeId>
          <barcodePostcode>string</barcodePostcode>
          <buAlphaStr>string</buAlphaStr>
          <buCode>string</buCode>
          <cSort>string</cSort>
          <dCountry>string</dCountry>
          <dDepot>string</dDepot>
          <dDepotCountry>string</dDepotCountry>
          <dDepotStr>string</dDepotStr>
          <dSort>string</dSort>
          <networkCode>string</networkCode>
          <oSort>string</oSort>
          <partnerCode>string</partnerCode>
          <routingText>string</routingText>
          <sSort>string</sSort>
          <serviceMark>string</serviceMark>
          <serviceText>string</serviceText>
          <version>string</version>
          <soCode>string</soCode>
        </route>
      </GetBic3RoutingResult>
    </GetBic3RoutingResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 22. GetCustomerAddress

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=GetCustomerAddress

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/GetCustomerAddress"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <GetCustomerAddress xmlns="http://www.cargonet.software">
      <customer>
        <countrycode>int</countrycode>
      </customer>
    </GetCustomerAddress>
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
    <GetCustomerAddressResponse xmlns="http://www.cargonet.software">
      <GetCustomerAddressResult>
        <CountryCode>int</CountryCode>
        <CustomerCenterNumber>int</CustomerCenterNumber>
        <CustomerNumber>int</CustomerNumber>
        <Title>string</Title>
        <Name0>string</Name0>
        <Name1>string</Name1>
        <Name2>string</Name2>
        <Name3>string</Name3>
        <CountryPrefix>string</CountryPrefix>
        <ZipCode>string</ZipCode>
        <City>string</City>
        <Street>string</Street>
        <HouseNumber>string</HouseNumber>
        <HouseNumberExtension>string</HouseNumberExtension>
        <Floor>string</Floor>
        <PostOfficeBox>string</PostOfficeBox>
        <PhoneNumber>string</PhoneNumber>
        <FaxNumber>string</FaxNumber>
        <MobileNumber>string</MobileNumber>
        <Email>string</Email>
      </GetCustomerAddressResult>
    </GetCustomerAddressResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <GetCustomerAddress xmlns="http://www.cargonet.software">
      <customer>
        <countrycode>int</countrycode>
      </customer>
    </GetCustomerAddress>
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
    <GetCustomerAddressResponse xmlns="http://www.cargonet.software">
      <GetCustomerAddressResult>
        <CountryCode>int</CountryCode>
        <CustomerCenterNumber>int</CustomerCenterNumber>
        <CustomerNumber>int</CustomerNumber>
        <Title>string</Title>
        <Name0>string</Name0>
        <Name1>string</Name1>
        <Name2>string</Name2>
        <Name3>string</Name3>
        <CountryPrefix>string</CountryPrefix>
        <ZipCode>string</ZipCode>
        <City>string</City>
        <Street>string</Street>
        <HouseNumber>string</HouseNumber>
        <HouseNumberExtension>string</HouseNumberExtension>
        <Floor>string</Floor>
        <PostOfficeBox>string</PostOfficeBox>
        <PhoneNumber>string</PhoneNumber>
        <FaxNumber>string</FaxNumber>
        <MobileNumber>string</MobileNumber>
        <Email>string</Email>
      </GetCustomerAddressResult>
    </GetCustomerAddressResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 23. GetCustomerProfile

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=GetCustomerProfile

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/GetCustomerProfile"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <GetCustomerProfile xmlns="http://www.cargonet.software">
      <request>
        <Customers>
          <Customer>
            <countrycode>int</countrycode>
          </Customer>
          <Customer>
            <countrycode>int</countrycode>
          </Customer>
        </Customers>
        <Language>string</Language>
      </request>
    </GetCustomerProfile>
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
    <GetCustomerProfileResponse xmlns="http://www.cargonet.software">
      <GetCustomerProfileResult>
        <CustomerProfiles>
          <CustomerProfile>
            <Customer xsi:nil="true" />
            <Locked>boolean</Locked>
            <Addresses xsi:nil="true" />
            <Services xsi:nil="true" />
          </CustomerProfile>
          <CustomerProfile>
            <Customer xsi:nil="true" />
            <Locked>boolean</Locked>
            <Addresses xsi:nil="true" />
            <Services xsi:nil="true" />
          </CustomerProfile>
        </CustomerProfiles>
      </GetCustomerProfileResult>
    </GetCustomerProfileResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <GetCustomerProfile xmlns="http://www.cargonet.software">
      <request>
        <Customers>
          <Customer>
            <countrycode>int</countrycode>
          </Customer>
          <Customer>
            <countrycode>int</countrycode>
          </Customer>
        </Customers>
        <Language>string</Language>
      </request>
    </GetCustomerProfile>
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
    <GetCustomerProfileResponse xmlns="http://www.cargonet.software">
      <GetCustomerProfileResult>
        <CustomerProfiles>
          <CustomerProfile>
            <Customer xsi:nil="true" />
            <Locked>boolean</Locked>
            <Addresses xsi:nil="true" />
            <Services xsi:nil="true" />
          </CustomerProfile>
          <CustomerProfile>
            <Customer xsi:nil="true" />
            <Locked>boolean</Locked>
            <Addresses xsi:nil="true" />
            <Services xsi:nil="true" />
          </CustomerProfile>
        </CustomerProfiles>
      </GetCustomerProfileResult>
    </GetCustomerProfileResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 24. GetGeoRouting

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=GetGeoRouting

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/GetGeoRouting"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <GetGeoRouting xmlns="http://www.cargonet.software">
      <request>
        <serviceCode>string</serviceCode>
      </request>
    </GetGeoRouting>
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
    <GetGeoRoutingResponse xmlns="http://www.cargonet.software">
      <GetGeoRoutingResult>
        <barcodeId>string</barcodeId>
        <barcodePostcode>string</barcodePostcode>
        <buAlphaStr>string</buAlphaStr>
        <buCode>string</buCode>
        <cSort>string</cSort>
        <dCountry>string</dCountry>
        <dDepot>string</dDepot>
        <dDepotCountry>string</dDepotCountry>
        <dDepotStr>string</dDepotStr>
        <dSort>string</dSort>
        <networkCode>string</networkCode>
        <oSort>string</oSort>
        <partnerCode>string</partnerCode>
        <routingText>string</routingText>
        <sSort>string</sSort>
        <serviceMark>string</serviceMark>
        <serviceText>string</serviceText>
        <version>string</version>
        <soCode>string</soCode>
      </GetGeoRoutingResult>
    </GetGeoRoutingResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <GetGeoRouting xmlns="http://www.cargonet.software">
      <request>
        <serviceCode>string</serviceCode>
      </request>
    </GetGeoRouting>
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
    <GetGeoRoutingResponse xmlns="http://www.cargonet.software">
      <GetGeoRoutingResult>
        <barcodeId>string</barcodeId>
        <barcodePostcode>string</barcodePostcode>
        <buAlphaStr>string</buAlphaStr>
        <buCode>string</buCode>
        <cSort>string</cSort>
        <dCountry>string</dCountry>
        <dDepot>string</dDepot>
        <dDepotCountry>string</dDepotCountry>
        <dDepotStr>string</dDepotStr>
        <dSort>string</dSort>
        <networkCode>string</networkCode>
        <oSort>string</oSort>
        <partnerCode>string</partnerCode>
        <routingText>string</routingText>
        <sSort>string</sSort>
        <serviceMark>string</serviceMark>
        <serviceText>string</serviceText>
        <version>string</version>
        <soCode>string</soCode>
      </GetGeoRoutingResult>
    </GetGeoRoutingResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 25. GetGeoRoutingReverse

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=GetGeoRoutingReverse

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/GetGeoRoutingReverse"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <GetGeoRoutingReverse xmlns="http://www.cargonet.software">
      <request>
        <originIso2Country>string</originIso2Country>
        <originZipCode>string</originZipCode>
        <originDepot>string</originDepot>
        <destinationIso2Country>string</destinationIso2Country>
        <destinationZipCode>string</destinationZipCode>
        <soCodeReverse>string</soCodeReverse>
        <retourShipperIso2Country>string</retourShipperIso2Country>
        <retourShipperZipCode>string</retourShipperZipCode>
        <retourIso2Country>string</retourIso2Country>
        <retourZipCode>string</retourZipCode>
        <soCodeRetour>string</soCodeRetour>
        <date>string</date>
      </request>
    </GetGeoRoutingReverse>
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
    <GetGeoRoutingReverseResponse xmlns="http://www.cargonet.software">
      <GetGeoRoutingReverseResult>
        <Reverse>
          <barcodeId>string</barcodeId>
          <barcodePostcode>string</barcodePostcode>
          <buAlphaStr>string</buAlphaStr>
          <buCode>string</buCode>
          <cSort>string</cSort>
          <dCountry>string</dCountry>
          <dDepot>string</dDepot>
          <dDepotCountry>string</dDepotCountry>
          <dDepotStr>string</dDepotStr>
          <dSort>string</dSort>
          <networkCode>string</networkCode>
          <oSort>string</oSort>
          <partnerCode>string</partnerCode>
          <routingText>string</routingText>
          <sSort>string</sSort>
          <serviceMark>string</serviceMark>
          <serviceText>string</serviceText>
          <version>string</version>
          <soCode>string</soCode>
        </Reverse>
        <ReverseRetour>
          <barcodeId>string</barcodeId>
          <barcodePostcode>string</barcodePostcode>
          <buAlphaStr>string</buAlphaStr>
          <buCode>string</buCode>
          <cSort>string</cSort>
          <dCountry>string</dCountry>
          <dDepot>string</dDepot>
          <dDepotCountry>string</dDepotCountry>
          <dDepotStr>string</dDepotStr>
          <dSort>string</dSort>
          <networkCode>string</networkCode>
          <oSort>string</oSort>
          <partnerCode>string</partnerCode>
          <routingText>string</routingText>
          <sSort>string</sSort>
          <serviceMark>string</serviceMark>
          <serviceText>string</serviceText>
          <version>string</version>
          <soCode>string</soCode>
        </ReverseRetour>
      </GetGeoRoutingReverseResult>
    </GetGeoRoutingReverseResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <GetGeoRoutingReverse xmlns="http://www.cargonet.software">
      <request>
        <originIso2Country>string</originIso2Country>
        <originZipCode>string</originZipCode>
        <originDepot>string</originDepot>
        <destinationIso2Country>string</destinationIso2Country>
        <destinationZipCode>string</destinationZipCode>
        <soCodeReverse>string</soCodeReverse>
        <retourShipperIso2Country>string</retourShipperIso2Country>
        <retourShipperZipCode>string</retourShipperZipCode>
        <retourIso2Country>string</retourIso2Country>
        <retourZipCode>string</retourZipCode>
        <soCodeRetour>string</soCodeRetour>
        <date>string</date>
      </request>
    </GetGeoRoutingReverse>
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
    <GetGeoRoutingReverseResponse xmlns="http://www.cargonet.software">
      <GetGeoRoutingReverseResult>
        <Reverse>
          <barcodeId>string</barcodeId>
          <barcodePostcode>string</barcodePostcode>
          <buAlphaStr>string</buAlphaStr>
          <buCode>string</buCode>
          <cSort>string</cSort>
          <dCountry>string</dCountry>
          <dDepot>string</dDepot>
          <dDepotCountry>string</dDepotCountry>
          <dDepotStr>string</dDepotStr>
          <dSort>string</dSort>
          <networkCode>string</networkCode>
          <oSort>string</oSort>
          <partnerCode>string</partnerCode>
          <routingText>string</routingText>
          <sSort>string</sSort>
          <serviceMark>string</serviceMark>
          <serviceText>string</serviceText>
          <version>string</version>
          <soCode>string</soCode>
        </Reverse>
        <ReverseRetour>
          <barcodeId>string</barcodeId>
          <barcodePostcode>string</barcodePostcode>
          <buAlphaStr>string</buAlphaStr>
          <buCode>string</buCode>
          <cSort>string</cSort>
          <dCountry>string</dCountry>
          <dDepot>string</dDepot>
          <dDepotCountry>string</dDepotCountry>
          <dDepotStr>string</dDepotStr>
          <dSort>string</dSort>
          <networkCode>string</networkCode>
          <oSort>string</oSort>
          <partnerCode>string</partnerCode>
          <routingText>string</routingText>
          <sSort>string</sSort>
          <serviceMark>string</serviceMark>
          <serviceText>string</serviceText>
          <version>string</version>
          <soCode>string</soCode>
        </ReverseRetour>
      </GetGeoRoutingReverseResult>
    </GetGeoRoutingReverseResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 26. GetLabel

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=GetLabel

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/GetLabel"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <GetLabel xmlns="http://www.cargonet.software">
      <request>
        <countrycode>string</countrycode>
        <centernumber>string</centernumber>
        <parcelnumber>string</parcelnumber>
      </request>
    </GetLabel>
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
    <GetLabelResponse xmlns="http://www.cargonet.software">
      <GetLabelResult>
        <countrycode>string</countrycode>
        <centernumber>string</centernumber>
        <parcelnumber>string</parcelnumber>
      </GetLabelResult>
    </GetLabelResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <GetLabel xmlns="http://www.cargonet.software">
      <request>
        <countrycode>string</countrycode>
        <centernumber>string</centernumber>
        <parcelnumber>string</parcelnumber>
      </request>
    </GetLabel>
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
    <GetLabelResponse xmlns="http://www.cargonet.software">
      <GetLabelResult>
        <countrycode>string</countrycode>
        <centernumber>string</centernumber>
        <parcelnumber>string</parcelnumber>
      </GetLabelResult>
    </GetLabelResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 27. GetLabelBc

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=GetLabelBc

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/GetLabelBc"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <GetLabelBc xmlns="http://www.cargonet.software">
      <request>
        <shipmentNumber>string</shipmentNumber>
        <customer>
          <countrycode>int</countrycode>
        </customer>
      </request>
    </GetLabelBc>
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
    <GetLabelBcResponse xmlns="http://www.cargonet.software">
      <GetLabelBcResult>
        <shipment>
          <BarCode>string</BarCode>
        </shipment>
      </GetLabelBcResult>
    </GetLabelBcResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <GetLabelBc xmlns="http://www.cargonet.software">
      <request>
        <shipmentNumber>string</shipmentNumber>
        <customer>
          <countrycode>int</countrycode>
        </customer>
      </request>
    </GetLabelBc>
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
    <GetLabelBcResponse xmlns="http://www.cargonet.software">
      <GetLabelBcResult>
        <shipment>
          <BarCode>string</BarCode>
        </shipment>
      </GetLabelBcResult>
    </GetLabelBcResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 28. GetLabelData

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=GetLabelData

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/GetLabelData"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <GetLabelData xmlns="http://www.cargonet.software">
      <request>
        <Options>Default or Images</Options>
      </request>
    </GetLabelData>
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
    <GetLabelDataResponse xmlns="http://www.cargonet.software">
      <GetLabelDataResult>
        <Data>
          <Bic3Depot>string</Bic3Depot>
          <Bic3Number>string</Bic3Number>
          <Bic3Checkdigit>string</Bic3Checkdigit>
        </Data>
        <BarcodeData>
          <BarcodeData>
            <Identifier>Aztec or Bic3</Identifier>
            <BarcodeValue>string</BarcodeValue>
            <BarcodeText>string</BarcodeText>
            <bcImage>base64Binary</bcImage>
          </BarcodeData>
          <BarcodeData>
            <Identifier>Aztec or Bic3</Identifier>
            <BarcodeValue>string</BarcodeValue>
            <BarcodeText>string</BarcodeText>
            <bcImage>base64Binary</bcImage>
          </BarcodeData>
        </BarcodeData>
      </GetLabelDataResult>
    </GetLabelDataResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <GetLabelData xmlns="http://www.cargonet.software">
      <request>
        <Options>Default or Images</Options>
      </request>
    </GetLabelData>
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
    <GetLabelDataResponse xmlns="http://www.cargonet.software">
      <GetLabelDataResult>
        <Data>
          <Bic3Depot>string</Bic3Depot>
          <Bic3Number>string</Bic3Number>
          <Bic3Checkdigit>string</Bic3Checkdigit>
        </Data>
        <BarcodeData>
          <BarcodeData>
            <Identifier>Aztec or Bic3</Identifier>
            <BarcodeValue>string</BarcodeValue>
            <BarcodeText>string</BarcodeText>
            <bcImage>base64Binary</bcImage>
          </BarcodeData>
          <BarcodeData>
            <Identifier>Aztec or Bic3</Identifier>
            <BarcodeValue>string</BarcodeValue>
            <BarcodeText>string</BarcodeText>
            <bcImage>base64Binary</bcImage>
          </BarcodeData>
        </BarcodeData>
      </GetLabelDataResult>
    </GetLabelDataResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 29. GetLastNumber

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=GetLastNumber

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/GetLastNumber"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <GetLastNumber xmlns="http://www.cargonet.software">
      <request>
        <Customer>
          <countrycode>int</countrycode>
        </Customer>
        <Entries>
          <Entry>
            <BarcodeSource>int</BarcodeSource>
            <Domain>string</Domain>
            <NumberFrom>long</NumberFrom>
            <NumberTo>long</NumberTo>
          </Entry>
          <Entry>
            <BarcodeSource>int</BarcodeSource>
            <Domain>string</Domain>
            <NumberFrom>long</NumberFrom>
            <NumberTo>long</NumberTo>
          </Entry>
        </Entries>
      </request>
    </GetLastNumber>
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
    <GetLastNumberResponse xmlns="http://www.cargonet.software">
      <GetLastNumberResult>
        <entries>
          <long>long</long>
          <long>long</long>
        </entries>
      </GetLastNumberResult>
    </GetLastNumberResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <GetLastNumber xmlns="http://www.cargonet.software">
      <request>
        <Customer>
          <countrycode>int</countrycode>
        </Customer>
        <Entries>
          <Entry>
            <BarcodeSource>int</BarcodeSource>
            <Domain>string</Domain>
            <NumberFrom>long</NumberFrom>
            <NumberTo>long</NumberTo>
          </Entry>
          <Entry>
            <BarcodeSource>int</BarcodeSource>
            <Domain>string</Domain>
            <NumberFrom>long</NumberFrom>
            <NumberTo>long</NumberTo>
          </Entry>
        </Entries>
      </request>
    </GetLastNumber>
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
    <GetLastNumberResponse xmlns="http://www.cargonet.software">
      <GetLastNumberResult>
        <entries>
          <long>long</long>
          <long>long</long>
        </entries>
      </GetLastNumberResult>
    </GetLastNumberResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 30. GetNationalTransitTime

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=GetNationalTransitTime

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/GetNationalTransitTime"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <GetNationalTransitTime xmlns="http://www.cargonet.software">
      <request>
        <SC_CountryCode>int</SC_CountryCode>
        <SC_CenterNumber>int</SC_CenterNumber>
        <RC_CountryCode>int</RC_CountryCode>
        <RC_CenterNumber>int</RC_CenterNumber>
        <TransitTime_Type>TransitTime_Default or TransitTime_Predict</TransitTime_Type>
      </request>
    </GetNationalTransitTime>
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
    <GetNationalTransitTimeResponse xmlns="http://www.cargonet.software">
      <GetNationalTransitTimeResult>
        <TransitTime>int</TransitTime>
      </GetNationalTransitTimeResult>
    </GetNationalTransitTimeResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <GetNationalTransitTime xmlns="http://www.cargonet.software">
      <request>
        <SC_CountryCode>int</SC_CountryCode>
        <SC_CenterNumber>int</SC_CenterNumber>
        <RC_CountryCode>int</RC_CountryCode>
        <RC_CenterNumber>int</RC_CenterNumber>
        <TransitTime_Type>TransitTime_Default or TransitTime_Predict</TransitTime_Type>
      </request>
    </GetNationalTransitTime>
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
    <GetNationalTransitTimeResponse xmlns="http://www.cargonet.software">
      <GetNationalTransitTimeResult>
        <TransitTime>int</TransitTime>
      </GetNationalTransitTimeResult>
    </GetNationalTransitTimeResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 31. GetNumberRange

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=GetNumberRange

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/GetNumberRange"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <GetNumberRange xmlns="http://www.cargonet.software">
      <request>
        <CountryCode>int</CountryCode>
        <ShippingCenterNumber>string</ShippingCenterNumber>
        <NumberRangeFrom>string</NumberRangeFrom>
        <NumberRangeTo>string</NumberRangeTo>
        <NumberRangeFree>string</NumberRangeFree>
        <NumberType>string</NumberType>
      </request>
    </GetNumberRange>
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
    <GetNumberRangeResponse xmlns="http://www.cargonet.software">
      <GetNumberRangeResult>
        <CountryCode>int</CountryCode>
        <CenterNumber>int</CenterNumber>
      </GetNumberRangeResult>
    </GetNumberRangeResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <GetNumberRange xmlns="http://www.cargonet.software">
      <request>
        <CountryCode>int</CountryCode>
        <ShippingCenterNumber>string</ShippingCenterNumber>
        <NumberRangeFrom>string</NumberRangeFrom>
        <NumberRangeTo>string</NumberRangeTo>
        <NumberRangeFree>string</NumberRangeFree>
        <NumberType>string</NumberType>
      </request>
    </GetNumberRange>
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
    <GetNumberRangeResponse xmlns="http://www.cargonet.software">
      <GetNumberRangeResult>
        <CountryCode>int</CountryCode>
        <CenterNumber>int</CenterNumber>
      </GetNumberRangeResult>
    </GetNumberRangeResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 32. GetNumberRangeBc

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=GetNumberRangeBc

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/GetNumberRangeBc"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <GetNumberRangeBc xmlns="http://www.cargonet.software">
      <request>
        <NumberType>string</NumberType>
      </request>
    </GetNumberRangeBc>
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
    <GetNumberRangeBcResponse xmlns="http://www.cargonet.software">
      <GetNumberRangeBcResult>
        <BarcodeSource>int</BarcodeSource>
        <Domain>string</Domain>
      </GetNumberRangeBcResult>
    </GetNumberRangeBcResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <GetNumberRangeBc xmlns="http://www.cargonet.software">
      <request>
        <NumberType>string</NumberType>
      </request>
    </GetNumberRangeBc>
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
    <GetNumberRangeBcResponse xmlns="http://www.cargonet.software">
      <GetNumberRangeBcResult>
        <BarcodeSource>int</BarcodeSource>
        <Domain>string</Domain>
      </GetNumberRangeBcResult>
    </GetNumberRangeBcResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 33. GetOptionValue

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=GetOptionValue

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/GetOptionValue"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <GetOptionValue xmlns="http://www.cargonet.software">
      <request>
        <Customer>
          <countrycode>int</countrycode>
        </Customer>
        <ProductType>string</ProductType>
        <HardwareId>string</HardwareId>
        <Option>string</Option>
        <Group>string</Group>
      </request>
    </GetOptionValue>
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
    <GetOptionValueResponse xmlns="http://www.cargonet.software">
      <GetOptionValueResult>
        <Value>string</Value>
        <Parameter>string</Parameter>
      </GetOptionValueResult>
    </GetOptionValueResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <GetOptionValue xmlns="http://www.cargonet.software">
      <request>
        <Customer>
          <countrycode>int</countrycode>
        </Customer>
        <ProductType>string</ProductType>
        <HardwareId>string</HardwareId>
        <Option>string</Option>
        <Group>string</Group>
      </request>
    </GetOptionValue>
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
    <GetOptionValueResponse xmlns="http://www.cargonet.software">
      <GetOptionValueResult>
        <Value>string</Value>
        <Parameter>string</Parameter>
      </GetOptionValueResult>
    </GetOptionValueResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 34. GetOptionValues

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=GetOptionValues

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/GetOptionValues"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <GetOptionValues xmlns="http://www.cargonet.software">
      <request>
        <Customer>
          <countrycode>int</countrycode>
        </Customer>
        <ProductType>string</ProductType>
        <HardwareId>string</HardwareId>
        <Group>string</Group>
        <Options>
          <string>string</string>
          <string>string</string>
        </Options>
      </request>
    </GetOptionValues>
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
    <GetOptionValuesResponse xmlns="http://www.cargonet.software">
      <GetOptionValuesResult>
        <Options>
          <GetOptionResponse>
            <Value>string</Value>
            <Parameter>string</Parameter>
          </GetOptionResponse>
          <GetOptionResponse>
            <Value>string</Value>
            <Parameter>string</Parameter>
          </GetOptionResponse>
        </Options>
      </GetOptionValuesResult>
    </GetOptionValuesResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <GetOptionValues xmlns="http://www.cargonet.software">
      <request>
        <Customer>
          <countrycode>int</countrycode>
        </Customer>
        <ProductType>string</ProductType>
        <HardwareId>string</HardwareId>
        <Group>string</Group>
        <Options>
          <string>string</string>
          <string>string</string>
        </Options>
      </request>
    </GetOptionValues>
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
    <GetOptionValuesResponse xmlns="http://www.cargonet.software">
      <GetOptionValuesResult>
        <Options>
          <GetOptionResponse>
            <Value>string</Value>
            <Parameter>string</Parameter>
          </GetOptionResponse>
          <GetOptionResponse>
            <Value>string</Value>
            <Parameter>string</Parameter>
          </GetOptionResponse>
        </Options>
      </GetOptionValuesResult>
    </GetOptionValuesResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 35. GetProperties

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=GetProperties

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/GetProperties"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <GetProperties xmlns="http://www.cargonet.software">
      <request>
        <HardwareId>string</HardwareId>
        <Customer>
          <countrycode>int</countrycode>
        </Customer>
        <Product>string</Product>
      </request>
    </GetProperties>
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
    <GetPropertiesResponse xmlns="http://www.cargonet.software">
      <GetPropertiesResult>
        <Properties>
          <PropertyDefinition>
            <Id>int</Id>
            <PropertyType>string</PropertyType>
            <DataType>string</DataType>
            <Property>string</Property>
            <Query>string</Query>
            <Options>string</Options>
          </PropertyDefinition>
          <PropertyDefinition>
            <Id>int</Id>
            <PropertyType>string</PropertyType>
            <DataType>string</DataType>
            <Property>string</Property>
            <Query>string</Query>
            <Options>string</Options>
          </PropertyDefinition>
        </Properties>
      </GetPropertiesResult>
    </GetPropertiesResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <GetProperties xmlns="http://www.cargonet.software">
      <request>
        <HardwareId>string</HardwareId>
        <Customer>
          <countrycode>int</countrycode>
        </Customer>
        <Product>string</Product>
      </request>
    </GetProperties>
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
    <GetPropertiesResponse xmlns="http://www.cargonet.software">
      <GetPropertiesResult>
        <Properties>
          <PropertyDefinition>
            <Id>int</Id>
            <PropertyType>string</PropertyType>
            <DataType>string</DataType>
            <Property>string</Property>
            <Query>string</Query>
            <Options>string</Options>
          </PropertyDefinition>
          <PropertyDefinition>
            <Id>int</Id>
            <PropertyType>string</PropertyType>
            <DataType>string</DataType>
            <Property>string</Property>
            <Query>string</Query>
            <Options>string</Options>
          </PropertyDefinition>
        </Properties>
      </GetPropertiesResult>
    </GetPropertiesResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 36. GetRdvShipmentData

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=GetRdvShipmentData

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/GetRdvShipmentData"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <GetRdvShipmentData xmlns="http://www.cargonet.software">
      <request>
        <SearchMode>SearchByParcelNumber or SearchByAvisDePassage or SearchByToken or SearchByBIC3</SearchMode>
        <SearchString>string</SearchString>
      </request>
    </GetRdvShipmentData>
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
    <GetRdvShipmentDataResponse xmlns="http://www.cargonet.software">
      <GetRdvShipmentDataResult>
        <RdvShipmentData>
          <Parcel>
            <Sin>string</Sin>
          </Parcel>
          <ShipmentSin>string</ShipmentSin>
          <AvisDePassageSin>string</AvisDePassageSin>
        </RdvShipmentData>
        <RdvShipmentData>
          <Parcel>
            <Sin>string</Sin>
          </Parcel>
          <ShipmentSin>string</ShipmentSin>
          <AvisDePassageSin>string</AvisDePassageSin>
        </RdvShipmentData>
      </GetRdvShipmentDataResult>
    </GetRdvShipmentDataResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <GetRdvShipmentData xmlns="http://www.cargonet.software">
      <request>
        <SearchMode>SearchByParcelNumber or SearchByAvisDePassage or SearchByToken or SearchByBIC3</SearchMode>
        <SearchString>string</SearchString>
      </request>
    </GetRdvShipmentData>
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
    <GetRdvShipmentDataResponse xmlns="http://www.cargonet.software">
      <GetRdvShipmentDataResult>
        <RdvShipmentData>
          <Parcel>
            <Sin>string</Sin>
          </Parcel>
          <ShipmentSin>string</ShipmentSin>
          <AvisDePassageSin>string</AvisDePassageSin>
        </RdvShipmentData>
        <RdvShipmentData>
          <Parcel>
            <Sin>string</Sin>
          </Parcel>
          <ShipmentSin>string</ShipmentSin>
          <AvisDePassageSin>string</AvisDePassageSin>
        </RdvShipmentData>
      </GetRdvShipmentDataResult>
    </GetRdvShipmentDataResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 37. GetRetourLabel

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=GetRetourLabel

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/GetRetourLabel"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <GetRetourLabel xmlns="http://www.cargonet.software">
      <request>
        <countrycode>string</countrycode>
        <centernumber>string</centernumber>
        <parcelnumber>string</parcelnumber>
      </request>
    </GetRetourLabel>
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
    <GetRetourLabelResponse xmlns="http://www.cargonet.software">
      <GetRetourLabelResult>
        <countrycode>string</countrycode>
        <centernumber>string</centernumber>
        <parcelnumber>string</parcelnumber>
      </GetRetourLabelResult>
    </GetRetourLabelResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <GetRetourLabel xmlns="http://www.cargonet.software">
      <request>
        <countrycode>string</countrycode>
        <centernumber>string</centernumber>
        <parcelnumber>string</parcelnumber>
      </request>
    </GetRetourLabel>
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
    <GetRetourLabelResponse xmlns="http://www.cargonet.software">
      <GetRetourLabelResult>
        <countrycode>string</countrycode>
        <centernumber>string</centernumber>
        <parcelnumber>string</parcelnumber>
      </GetRetourLabelResult>
    </GetRetourLabelResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 38. GetRetourLabelBc

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=GetRetourLabelBc

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/GetRetourLabelBc"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <GetRetourLabelBc xmlns="http://www.cargonet.software">
      <request>
        <shipmentNumber>string</shipmentNumber>
        <customer>
          <countrycode>int</countrycode>
        </customer>
      </request>
    </GetRetourLabelBc>
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
    <GetRetourLabelBcResponse xmlns="http://www.cargonet.software">
      <GetRetourLabelBcResult>
        <countrycode>string</countrycode>
        <centernumber>string</centernumber>
        <parcelnumber>string</parcelnumber>
      </GetRetourLabelBcResult>
    </GetRetourLabelBcResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <GetRetourLabelBc xmlns="http://www.cargonet.software">
      <request>
        <shipmentNumber>string</shipmentNumber>
        <customer>
          <countrycode>int</countrycode>
        </customer>
      </request>
    </GetRetourLabelBc>
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
    <GetRetourLabelBcResponse xmlns="http://www.cargonet.software">
      <GetRetourLabelBcResult>
        <countrycode>string</countrycode>
        <centernumber>string</centernumber>
        <parcelnumber>string</parcelnumber>
      </GetRetourLabelBcResult>
    </GetRetourLabelBcResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 39. GetRetourShipmentData

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=GetRetourShipmentData

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/GetRetourShipmentData"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <GetRetourShipmentData xmlns="http://www.cargonet.software">
      <request>
        <countrycode>string</countrycode>
        <centernumber>string</centernumber>
        <original_parcelnumber>string</original_parcelnumber>
      </request>
    </GetRetourShipmentData>
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
    <GetRetourShipmentDataResponse xmlns="http://www.cargonet.software">
      <GetRetourShipmentDataResult>
        <services>
          <expireOffset>int</expireOffset>
        </services>
      </GetRetourShipmentDataResult>
    </GetRetourShipmentDataResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <GetRetourShipmentData xmlns="http://www.cargonet.software">
      <request>
        <countrycode>string</countrycode>
        <centernumber>string</centernumber>
        <original_parcelnumber>string</original_parcelnumber>
      </request>
    </GetRetourShipmentData>
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
    <GetRetourShipmentDataResponse xmlns="http://www.cargonet.software">
      <GetRetourShipmentDataResult>
        <services>
          <expireOffset>int</expireOffset>
        </services>
      </GetRetourShipmentDataResult>
    </GetRetourShipmentDataResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 40. GetRetourShipmentDataBc

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=GetRetourShipmentDataBc

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/GetRetourShipmentDataBc"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <GetRetourShipmentDataBc xmlns="http://www.cargonet.software">
      <request>
        <customer>
          <countrycode>int</countrycode>
        </customer>
        <originalBarcode>string</originalBarcode>
        <originalBarcodeSource>int</originalBarcodeSource>
        <originalBarcodeId>string</originalBarcodeId>
      </request>
    </GetRetourShipmentDataBc>
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
    <GetRetourShipmentDataBcResponse xmlns="http://www.cargonet.software">
      <GetRetourShipmentDataBcResult>
        <services>
          <expireOffset>int</expireOffset>
        </services>
      </GetRetourShipmentDataBcResult>
    </GetRetourShipmentDataBcResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <GetRetourShipmentDataBc xmlns="http://www.cargonet.software">
      <request>
        <customer>
          <countrycode>int</countrycode>
        </customer>
        <originalBarcode>string</originalBarcode>
        <originalBarcodeSource>int</originalBarcodeSource>
        <originalBarcodeId>string</originalBarcodeId>
      </request>
    </GetRetourShipmentDataBc>
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
    <GetRetourShipmentDataBcResponse xmlns="http://www.cargonet.software">
      <GetRetourShipmentDataBcResult>
        <services>
          <expireOffset>int</expireOffset>
        </services>
      </GetRetourShipmentDataBcResult>
    </GetRetourShipmentDataBcResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 41. GetReverseOnDemandMode

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=GetReverseOnDemandMode

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/GetReverseOnDemandMode"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <GetReverseOnDemandMode xmlns="http://www.cargonet.software">
      <customer>
        <countrycode>int</countrycode>
      </customer>
    </GetReverseOnDemandMode>
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
    <GetReverseOnDemandModeResponse xmlns="http://www.cargonet.software">
      <GetReverseOnDemandModeResult>int</GetReverseOnDemandModeResult>
    </GetReverseOnDemandModeResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <GetReverseOnDemandMode xmlns="http://www.cargonet.software">
      <customer>
        <countrycode>int</countrycode>
      </customer>
    </GetReverseOnDemandMode>
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
    <GetReverseOnDemandModeResponse xmlns="http://www.cargonet.software">
      <GetReverseOnDemandModeResult>int</GetReverseOnDemandModeResult>
    </GetReverseOnDemandModeResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 42. GetSafePlaceData

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=GetSafePlaceData

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/GetSafePlaceData"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <GetSafePlaceData xmlns="http://www.cargonet.software">
      <request>
        <BarcodeSource>int</BarcodeSource>
        <BarcodeId>string</BarcodeId>
        <Customer>
          <countrycode>int</countrycode>
        </Customer>
      </request>
    </GetSafePlaceData>
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
    <GetSafePlaceDataResponse xmlns="http://www.cargonet.software">
      <GetSafePlaceDataResult>
        <Images>
          <base64Binary>base64Binary</base64Binary>
          <base64Binary>base64Binary</base64Binary>
        </Images>
      </GetSafePlaceDataResult>
    </GetSafePlaceDataResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <GetSafePlaceData xmlns="http://www.cargonet.software">
      <request>
        <BarcodeSource>int</BarcodeSource>
        <BarcodeId>string</BarcodeId>
        <Customer>
          <countrycode>int</countrycode>
        </Customer>
      </request>
    </GetSafePlaceData>
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
    <GetSafePlaceDataResponse xmlns="http://www.cargonet.software">
      <GetSafePlaceDataResult>
        <Images>
          <base64Binary>base64Binary</base64Binary>
          <base64Binary>base64Binary</base64Binary>
        </Images>
      </GetSafePlaceDataResult>
    </GetSafePlaceDataResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 43. GetSecureData

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=GetSecureData

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/GetSecureData"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <GetSecureData xmlns="http://www.cargonet.software">
      <request>
        <Token>
          <string>string</string>
          <string>string</string>
        </Token>
      </request>
    </GetSecureData>
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
    <GetSecureDataResponse xmlns="http://www.cargonet.software">
      <GetSecureDataResult>
        <Data>string</Data>
        <SecureCodes>
          <string>string</string>
          <string>string</string>
        </SecureCodes>
        <BarcodeImage>base64Binary</BarcodeImage>
      </GetSecureDataResult>
    </GetSecureDataResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <GetSecureData xmlns="http://www.cargonet.software">
      <request>
        <Token>
          <string>string</string>
          <string>string</string>
        </Token>
      </request>
    </GetSecureData>
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
    <GetSecureDataResponse xmlns="http://www.cargonet.software">
      <GetSecureDataResult>
        <Data>string</Data>
        <SecureCodes>
          <string>string</string>
          <string>string</string>
        </SecureCodes>
        <BarcodeImage>base64Binary</BarcodeImage>
      </GetSecureDataResult>
    </GetSecureDataResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 44. GetServiceNoticeAnswers

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=GetServiceNoticeAnswers

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/GetServiceNoticeAnswers"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <GetServiceNoticeAnswers xmlns="http://www.cargonet.software">
      <request>
        <type>pick or dely</type>
        <language>string</language>
      </request>
    </GetServiceNoticeAnswers>
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
    <GetServiceNoticeAnswersResponse xmlns="http://www.cargonet.software">
      <GetServiceNoticeAnswersResult>
        <answers>
          <Text>
            <id>int</id>
            <text>string</text>
          </Text>
          <Text>
            <id>int</id>
            <text>string</text>
          </Text>
        </answers>
      </GetServiceNoticeAnswersResult>
    </GetServiceNoticeAnswersResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <GetServiceNoticeAnswers xmlns="http://www.cargonet.software">
      <request>
        <type>pick or dely</type>
        <language>string</language>
      </request>
    </GetServiceNoticeAnswers>
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
    <GetServiceNoticeAnswersResponse xmlns="http://www.cargonet.software">
      <GetServiceNoticeAnswersResult>
        <answers>
          <Text>
            <id>int</id>
            <text>string</text>
          </Text>
          <Text>
            <id>int</id>
            <text>string</text>
          </Text>
        </answers>
      </GetServiceNoticeAnswersResult>
    </GetServiceNoticeAnswersResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 45. GetServiceNotices

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=GetServiceNotices

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/GetServiceNotices"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <GetServiceNotices xmlns="http://www.cargonet.software">
      <request>
        <customer>
          <countrycode>int</countrycode>
        </customer>
        <language>string</language>
      </request>
    </GetServiceNotices>
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
    <GetServiceNoticesResponse xmlns="http://www.cargonet.software">
      <GetServiceNoticesResult>
        <servicenotices>
          <ServiceNotice>
            <BarcodeId>string</BarcodeId>
            <BarcodeSource>string</BarcodeSource>
            <customer xsi:nil="true" />
            <reason>string</reason>
            <date>string</date>
            <status>string</status>
            <weight>string</weight>
            <info>string</info>
            <counterquestion>string</counterquestion>
            <type>pick or dely</type>
          </ServiceNotice>
          <ServiceNotice>
            <BarcodeId>string</BarcodeId>
            <BarcodeSource>string</BarcodeSource>
            <customer xsi:nil="true" />
            <reason>string</reason>
            <date>string</date>
            <status>string</status>
            <weight>string</weight>
            <info>string</info>
            <counterquestion>string</counterquestion>
            <type>pick or dely</type>
          </ServiceNotice>
        </servicenotices>
      </GetServiceNoticesResult>
    </GetServiceNoticesResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <GetServiceNotices xmlns="http://www.cargonet.software">
      <request>
        <customer>
          <countrycode>int</countrycode>
        </customer>
        <language>string</language>
      </request>
    </GetServiceNotices>
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
    <GetServiceNoticesResponse xmlns="http://www.cargonet.software">
      <GetServiceNoticesResult>
        <servicenotices>
          <ServiceNotice>
            <BarcodeId>string</BarcodeId>
            <BarcodeSource>string</BarcodeSource>
            <customer xsi:nil="true" />
            <reason>string</reason>
            <date>string</date>
            <status>string</status>
            <weight>string</weight>
            <info>string</info>
            <counterquestion>string</counterquestion>
            <type>pick or dely</type>
          </ServiceNotice>
          <ServiceNotice>
            <BarcodeId>string</BarcodeId>
            <BarcodeSource>string</BarcodeSource>
            <customer xsi:nil="true" />
            <reason>string</reason>
            <date>string</date>
            <status>string</status>
            <weight>string</weight>
            <info>string</info>
            <counterquestion>string</counterquestion>
            <type>pick or dely</type>
          </ServiceNotice>
        </servicenotices>
      </GetServiceNoticesResult>
    </GetServiceNoticesResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 46. GetShipment

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=GetShipment

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/GetShipment"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <GetShipment xmlns="http://www.cargonet.software">
      <request>
        <parcel>
          <countrycode>int</countrycode>
          <centernumber>int</centernumber>
          <parcelnumber>long</parcelnumber>
        </parcel>
      </request>
    </GetShipment>
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
    <GetShipmentResponse xmlns="http://www.cargonet.software">
      <GetShipmentResult>
        <countrycode>string</countrycode>
        <centernumber>string</centernumber>
        <parcelnumber>string</parcelnumber>
      </GetShipmentResult>
    </GetShipmentResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <GetShipment xmlns="http://www.cargonet.software">
      <request>
        <parcel>
          <countrycode>int</countrycode>
          <centernumber>int</centernumber>
          <parcelnumber>long</parcelnumber>
        </parcel>
      </request>
    </GetShipment>
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
    <GetShipmentResponse xmlns="http://www.cargonet.software">
      <GetShipmentResult>
        <countrycode>string</countrycode>
        <centernumber>string</centernumber>
        <parcelnumber>string</parcelnumber>
      </GetShipmentResult>
    </GetShipmentResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 47. GetShipmentBc

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=GetShipmentBc

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/GetShipmentBc"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <GetShipmentBc xmlns="http://www.cargonet.software">
      <request>
        <Language>string</Language>
        <GetServices>boolean</GetServices>
      </request>
    </GetShipmentBc>
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
    <GetShipmentBcResponse xmlns="http://www.cargonet.software">
      <GetShipmentBcResult>
        <IsPostman>boolean</IsPostman>
      </GetShipmentBcResult>
    </GetShipmentBcResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <GetShipmentBc xmlns="http://www.cargonet.software">
      <request>
        <Language>string</Language>
        <GetServices>boolean</GetServices>
      </request>
    </GetShipmentBc>
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
    <GetShipmentBcResponse xmlns="http://www.cargonet.software">
      <GetShipmentBcResult>
        <IsPostman>boolean</IsPostman>
      </GetShipmentBcResult>
    </GetShipmentBcResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 48. GetShipmentBcMulti

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=GetShipmentBcMulti

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/GetShipmentBcMulti"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <GetShipmentBcMulti xmlns="http://www.cargonet.software">
      <request>
        <LinkedType>None or Consolidation</LinkedType>
      </request>
    </GetShipmentBcMulti>
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
    <GetShipmentBcMultiResponse xmlns="http://www.cargonet.software">
      <GetShipmentBcMultiResult>
        <Shipments>
          <GetShipmentEntry>
            <LinkedShipmentType>Slave</LinkedShipmentType>
          </GetShipmentEntry>
          <GetShipmentEntry>
            <LinkedShipmentType>Slave</LinkedShipmentType>
          </GetShipmentEntry>
        </Shipments>
      </GetShipmentBcMultiResult>
    </GetShipmentBcMultiResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <GetShipmentBcMulti xmlns="http://www.cargonet.software">
      <request>
        <LinkedType>None or Consolidation</LinkedType>
      </request>
    </GetShipmentBcMulti>
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
    <GetShipmentBcMultiResponse xmlns="http://www.cargonet.software">
      <GetShipmentBcMultiResult>
        <Shipments>
          <GetShipmentEntry>
            <LinkedShipmentType>Slave</LinkedShipmentType>
          </GetShipmentEntry>
          <GetShipmentEntry>
            <LinkedShipmentType>Slave</LinkedShipmentType>
          </GetShipmentEntry>
        </Shipments>
      </GetShipmentBcMultiResult>
    </GetShipmentBcMultiResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 49. GetShipmentWcs

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=GetShipmentWcs

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/GetShipmentWcs"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <GetShipmentWcs xmlns="http://www.cargonet.software">
      <request>
        <Language>string</Language>
        <GetServices>boolean</GetServices>
      </request>
    </GetShipmentWcs>
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
    <GetShipmentWcsResponse xmlns="http://www.cargonet.software">
      <GetShipmentWcsResult>
        <Barcode>string</Barcode>
        <BarcodeSource>string</BarcodeSource>
        <BarcodeId>string</BarcodeId>
        <Sin>long</Sin>
        <Services>
          <ServiceEntry>
            <Name>string</Name>
            <Type>string</Type>
            <Attribute>string</Attribute>
            <Value>string</Value>
            <Detail>string</Detail>
            <Status>string</Status>
          </ServiceEntry>
          <ServiceEntry>
            <Name>string</Name>
            <Type>string</Type>
            <Attribute>string</Attribute>
            <Value>string</Value>
            <Detail>string</Detail>
            <Status>string</Status>
          </ServiceEntry>
        </Services>
      </GetShipmentWcsResult>
    </GetShipmentWcsResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <GetShipmentWcs xmlns="http://www.cargonet.software">
      <request>
        <Language>string</Language>
        <GetServices>boolean</GetServices>
      </request>
    </GetShipmentWcs>
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
    <GetShipmentWcsResponse xmlns="http://www.cargonet.software">
      <GetShipmentWcsResult>
        <Barcode>string</Barcode>
        <BarcodeSource>string</BarcodeSource>
        <BarcodeId>string</BarcodeId>
        <Sin>long</Sin>
        <Services>
          <ServiceEntry>
            <Name>string</Name>
            <Type>string</Type>
            <Attribute>string</Attribute>
            <Value>string</Value>
            <Detail>string</Detail>
            <Status>string</Status>
          </ServiceEntry>
          <ServiceEntry>
            <Name>string</Name>
            <Type>string</Type>
            <Attribute>string</Attribute>
            <Value>string</Value>
            <Detail>string</Detail>
            <Status>string</Status>
          </ServiceEntry>
        </Services>
      </GetShipmentWcsResult>
    </GetShipmentWcsResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 50. GetShipping

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=GetShipping

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/GetShipping"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <GetShipping xmlns="http://www.cargonet.software">
      <request>
        <date>string</date>
        <customer>
          <countrycode>int</countrycode>
        </customer>
      </request>
    </GetShipping>
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
    <GetShippingResponse xmlns="http://www.cargonet.software">
      <GetShippingResult>
        <shippings>
          <Shipping>
            <shipment>string</shipment>
            <barcodeSource>int</barcodeSource>
            <barcodeId>string</barcodeId>
            <weight>double</weight>
            <receiverAddress xsi:nil="true" />
            <reference>string</reference>
          </Shipping>
          <Shipping>
            <shipment>string</shipment>
            <barcodeSource>int</barcodeSource>
            <barcodeId>string</barcodeId>
            <weight>double</weight>
            <receiverAddress xsi:nil="true" />
            <reference>string</reference>
          </Shipping>
        </shippings>
      </GetShippingResult>
    </GetShippingResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <GetShipping xmlns="http://www.cargonet.software">
      <request>
        <date>string</date>
        <customer>
          <countrycode>int</countrycode>
        </customer>
      </request>
    </GetShipping>
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
    <GetShippingResponse xmlns="http://www.cargonet.software">
      <GetShippingResult>
        <shippings>
          <Shipping>
            <shipment>string</shipment>
            <barcodeSource>int</barcodeSource>
            <barcodeId>string</barcodeId>
            <weight>double</weight>
            <receiverAddress xsi:nil="true" />
            <reference>string</reference>
          </Shipping>
          <Shipping>
            <shipment>string</shipment>
            <barcodeSource>int</barcodeSource>
            <barcodeId>string</barcodeId>
            <weight>double</weight>
            <receiverAddress xsi:nil="true" />
            <reference>string</reference>
          </Shipping>
        </shippings>
      </GetShippingResult>
    </GetShippingResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 51. IsCustomerBlocked

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=IsCustomerBlocked

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/IsCustomerBlocked"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <IsCustomerBlocked xmlns="http://www.cargonet.software">
      <customer>
        <countrycode>int</countrycode>
      </customer>
    </IsCustomerBlocked>
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
    <IsCustomerBlockedResponse xmlns="http://www.cargonet.software">
      <IsCustomerBlockedResult>boolean</IsCustomerBlockedResult>
    </IsCustomerBlockedResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <IsCustomerBlocked xmlns="http://www.cargonet.software">
      <customer>
        <countrycode>int</countrycode>
      </customer>
    </IsCustomerBlocked>
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
    <IsCustomerBlockedResponse xmlns="http://www.cargonet.software">
      <IsCustomerBlockedResult>boolean</IsCustomerBlockedResult>
    </IsCustomerBlockedResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 52. IsDeliverableOnDate

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=IsDeliverableOnDate

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/IsDeliverableOnDate"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <IsDeliverableOnDate xmlns="http://www.cargonet.software">
      <request />
    </IsDeliverableOnDate>
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
    <IsDeliverableOnDateResponse xmlns="http://www.cargonet.software">
      <IsDeliverableOnDateResult>boolean</IsDeliverableOnDateResult>
    </IsDeliverableOnDateResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <IsDeliverableOnDate xmlns="http://www.cargonet.software">
      <request />
    </IsDeliverableOnDate>
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
    <IsDeliverableOnDateResponse xmlns="http://www.cargonet.software">
      <IsDeliverableOnDateResult>boolean</IsDeliverableOnDateResult>
    </IsDeliverableOnDateResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 53. IsPickableOnDate

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=IsPickableOnDate

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/IsPickableOnDate"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <IsPickableOnDate xmlns="http://www.cargonet.software">
      <request />
    </IsPickableOnDate>
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
    <IsPickableOnDateResponse xmlns="http://www.cargonet.software">
      <IsPickableOnDateResult>boolean</IsPickableOnDateResult>
    </IsPickableOnDateResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <IsPickableOnDate xmlns="http://www.cargonet.software">
      <request />
    </IsPickableOnDate>
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
    <IsPickableOnDateResponse xmlns="http://www.cargonet.software">
      <IsPickableOnDateResult>boolean</IsPickableOnDateResult>
    </IsPickableOnDateResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 54. PutProperties

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=PutProperties

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/PutProperties"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <PutProperties xmlns="http://www.cargonet.software">
      <request>
        <Customer>
          <countrycode>int</countrycode>
        </Customer>
        <ShipperNumber>int</ShipperNumber>
        <HardwareId>string</HardwareId>
        <Options>string</Options>
        <Properties>
          <PropertyEntry>
            <PropertyId>int</PropertyId>
            <Value>string</Value>
          </PropertyEntry>
          <PropertyEntry>
            <PropertyId>int</PropertyId>
            <Value>string</Value>
          </PropertyEntry>
        </Properties>
        <Sum>string</Sum>
      </request>
    </PutProperties>
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
    <PutPropertiesResponse xmlns="http://www.cargonet.software" />
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <PutProperties xmlns="http://www.cargonet.software">
      <request>
        <Customer>
          <countrycode>int</countrycode>
        </Customer>
        <ShipperNumber>int</ShipperNumber>
        <HardwareId>string</HardwareId>
        <Options>string</Options>
        <Properties>
          <PropertyEntry>
            <PropertyId>int</PropertyId>
            <Value>string</Value>
          </PropertyEntry>
          <PropertyEntry>
            <PropertyId>int</PropertyId>
            <Value>string</Value>
          </PropertyEntry>
        </Properties>
        <Sum>string</Sum>
      </request>
    </PutProperties>
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
    <PutPropertiesResponse xmlns="http://www.cargonet.software" />
  </soap12:Body>
</soap12:Envelope>
```

## 55. SendCNOTData

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=SendCNOTData

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/SendCNOTData"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <SendCNOTData xmlns="http://www.cargonet.software">
      <request>
        <HardwareId>string</HardwareId>
        <Depot>int</Depot>
        <TourNumber>string</TourNumber>
        <TimeStamp>dateTime</TimeStamp>
        <Status>string</Status>
        <Tasks>
          <Task>
            <Type>string</Type>
            <Parcels xsi:nil="true" />
            <ContactName>string</ContactName>
            <Location xsi:nil="true" />
            <NotProcessed>boolean</NotProcessed>
            <Finished>boolean</Finished>
            <CreatedAt>dateTime</CreatedAt>
            <OnPositionAt>dateTime</OnPositionAt>
            <FinishedAt>dateTime</FinishedAt>
            <VisitCounter>int</VisitCounter>
            <TaskId>int</TaskId>
            <IsB2C>boolean</IsB2C>
            <Rendezvous xsi:nil="true" />
            <PhoneCalls xsi:nil="true" />
          </Task>
          <Task>
            <Type>string</Type>
            <Parcels xsi:nil="true" />
            <ContactName>string</ContactName>
            <Location xsi:nil="true" />
            <NotProcessed>boolean</NotProcessed>
            <Finished>boolean</Finished>
            <CreatedAt>dateTime</CreatedAt>
            <OnPositionAt>dateTime</OnPositionAt>
            <FinishedAt>dateTime</FinishedAt>
            <VisitCounter>int</VisitCounter>
            <TaskId>int</TaskId>
            <IsB2C>boolean</IsB2C>
            <Rendezvous xsi:nil="true" />
            <PhoneCalls xsi:nil="true" />
          </Task>
        </Tasks>
        <Locations>
          <Location>
            <TimeStamp>dateTime</TimeStamp>
            <Latitude>double</Latitude>
            <Longitude>double</Longitude>
          </Location>
          <Location>
            <TimeStamp>dateTime</TimeStamp>
            <Latitude>double</Latitude>
            <Longitude>double</Longitude>
          </Location>
        </Locations>
        <PhoneCalls>
          <PhoneCall>
            <Number>string</Number>
            <Type>string</Type>
            <DurationSec>int</DurationSec>
            <Date>dateTime</Date>
          </PhoneCall>
          <PhoneCall>
            <Number>string</Number>
            <Type>string</Type>
            <DurationSec>int</DurationSec>
            <Date>dateTime</Date>
          </PhoneCall>
        </PhoneCalls>
      </request>
    </SendCNOTData>
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
    <SendCNOTDataResponse xmlns="http://www.cargonet.software" />
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <SendCNOTData xmlns="http://www.cargonet.software">
      <request>
        <HardwareId>string</HardwareId>
        <Depot>int</Depot>
        <TourNumber>string</TourNumber>
        <TimeStamp>dateTime</TimeStamp>
        <Status>string</Status>
        <Tasks>
          <Task>
            <Type>string</Type>
            <Parcels xsi:nil="true" />
            <ContactName>string</ContactName>
            <Location xsi:nil="true" />
            <NotProcessed>boolean</NotProcessed>
            <Finished>boolean</Finished>
            <CreatedAt>dateTime</CreatedAt>
            <OnPositionAt>dateTime</OnPositionAt>
            <FinishedAt>dateTime</FinishedAt>
            <VisitCounter>int</VisitCounter>
            <TaskId>int</TaskId>
            <IsB2C>boolean</IsB2C>
            <Rendezvous xsi:nil="true" />
            <PhoneCalls xsi:nil="true" />
          </Task>
          <Task>
            <Type>string</Type>
            <Parcels xsi:nil="true" />
            <ContactName>string</ContactName>
            <Location xsi:nil="true" />
            <NotProcessed>boolean</NotProcessed>
            <Finished>boolean</Finished>
            <CreatedAt>dateTime</CreatedAt>
            <OnPositionAt>dateTime</OnPositionAt>
            <FinishedAt>dateTime</FinishedAt>
            <VisitCounter>int</VisitCounter>
            <TaskId>int</TaskId>
            <IsB2C>boolean</IsB2C>
            <Rendezvous xsi:nil="true" />
            <PhoneCalls xsi:nil="true" />
          </Task>
        </Tasks>
        <Locations>
          <Location>
            <TimeStamp>dateTime</TimeStamp>
            <Latitude>double</Latitude>
            <Longitude>double</Longitude>
          </Location>
          <Location>
            <TimeStamp>dateTime</TimeStamp>
            <Latitude>double</Latitude>
            <Longitude>double</Longitude>
          </Location>
        </Locations>
        <PhoneCalls>
          <PhoneCall>
            <Number>string</Number>
            <Type>string</Type>
            <DurationSec>int</DurationSec>
            <Date>dateTime</Date>
          </PhoneCall>
          <PhoneCall>
            <Number>string</Number>
            <Type>string</Type>
            <DurationSec>int</DurationSec>
            <Date>dateTime</Date>
          </PhoneCall>
        </PhoneCalls>
      </request>
    </SendCNOTData>
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
    <SendCNOTDataResponse xmlns="http://www.cargonet.software" />
  </soap12:Body>
</soap12:Envelope>
```

## 56. TerminateCollectionRequest

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=TerminateCollectionRequest

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/TerminateCollectionRequest"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <TerminateCollectionRequest xmlns="http://www.cargonet.software">
      <request />
    </TerminateCollectionRequest>
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
    <TerminateCollectionRequestResponse xmlns="http://www.cargonet.software" />
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <TerminateCollectionRequest xmlns="http://www.cargonet.software">
      <request />
    </TerminateCollectionRequest>
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
    <TerminateCollectionRequestResponse xmlns="http://www.cargonet.software" />
  </soap12:Body>
</soap12:Envelope>
```

## 57. TerminateCollectionRequestBc

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=TerminateCollectionRequestBc

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/TerminateCollectionRequestBc"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <TerminateCollectionRequestBc xmlns="http://www.cargonet.software">
      <request>
        <barcode>string</barcode>
      </request>
    </TerminateCollectionRequestBc>
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
    <TerminateCollectionRequestBcResponse xmlns="http://www.cargonet.software" />
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <TerminateCollectionRequestBc xmlns="http://www.cargonet.software">
      <request>
        <barcode>string</barcode>
      </request>
    </TerminateCollectionRequestBc>
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
    <TerminateCollectionRequestBcResponse xmlns="http://www.cargonet.software" />
  </soap12:Body>
</soap12:Envelope>
```

## 58. TerminateNumberRange

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=TerminateNumberRange

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/TerminateNumberRange"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <TerminateNumberRange xmlns="http://www.cargonet.software">
      <request>
        <CountryCode>int</CountryCode>
        <ShippingCenterNumber>int</ShippingCenterNumber>
      </request>
    </TerminateNumberRange>
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
    <TerminateNumberRangeResponse xmlns="http://www.cargonet.software" />
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <TerminateNumberRange xmlns="http://www.cargonet.software">
      <request>
        <CountryCode>int</CountryCode>
        <ShippingCenterNumber>int</ShippingCenterNumber>
      </request>
    </TerminateNumberRange>
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
    <TerminateNumberRangeResponse xmlns="http://www.cargonet.software" />
  </soap12:Body>
</soap12:Envelope>
```

## 59. TerminateNumberRangeBc

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=TerminateNumberRangeBc

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/TerminateNumberRangeBc"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <TerminateNumberRangeBc xmlns="http://www.cargonet.software">
      <request>
        <BarcodecSource>int</BarcodecSource>
        <Domain>string</Domain>
      </request>
    </TerminateNumberRangeBc>
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
    <TerminateNumberRangeBcResponse xmlns="http://www.cargonet.software" />
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <TerminateNumberRangeBc xmlns="http://www.cargonet.software">
      <request>
        <BarcodecSource>int</BarcodecSource>
        <Domain>string</Domain>
      </request>
    </TerminateNumberRangeBc>
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
    <TerminateNumberRangeBcResponse xmlns="http://www.cargonet.software" />
  </soap12:Body>
</soap12:Envelope>
```

## 60. TerminateShipment

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=TerminateShipment

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/TerminateShipment"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <TerminateShipment xmlns="http://www.cargonet.software">
      <request>
        <Reason>string</Reason>
      </request>
    </TerminateShipment>
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
    <TerminateShipmentResponse xmlns="http://www.cargonet.software" />
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <TerminateShipment xmlns="http://www.cargonet.software">
      <request>
        <Reason>string</Reason>
      </request>
    </TerminateShipment>
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
    <TerminateShipmentResponse xmlns="http://www.cargonet.software" />
  </soap12:Body>
</soap12:Envelope>
```

## 61. UpdateRdvShipmentData

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=UpdateRdvShipmentData

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/UpdateRdvShipmentData"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <UpdateRdvShipmentData xmlns="http://www.cargonet.software">
      <request>
        <Address>
          <Name>string</Name>
          <CountryPrefix>string</CountryPrefix>
          <ZipCode>string</ZipCode>
          <City>string</City>
          <Street>string</Street>
          <PhoneNumber>string</PhoneNumber>
          <GeoCoord_Y>string</GeoCoord_Y>
          <GeoCoord_X>string</GeoCoord_X>
        </Address>
        <DeliveryInfo>
          <Date>string</Date>
          <TimeFrom>string</TimeFrom>
          <TimeTo>string</TimeTo>
        </DeliveryInfo>
        <EsnInfo>
          <CreateEsn>boolean</CreateEsn>
          <EsnDirective>string</EsnDirective>
        </EsnInfo>
        <AdditionalData>
          <DayCheckDone>boolean</DayCheckDone>
        </AdditionalData>
      </request>
    </UpdateRdvShipmentData>
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
    <UpdateRdvShipmentDataResponse xmlns="http://www.cargonet.software" />
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <UpdateRdvShipmentData xmlns="http://www.cargonet.software">
      <request>
        <Address>
          <Name>string</Name>
          <CountryPrefix>string</CountryPrefix>
          <ZipCode>string</ZipCode>
          <City>string</City>
          <Street>string</Street>
          <PhoneNumber>string</PhoneNumber>
          <GeoCoord_Y>string</GeoCoord_Y>
          <GeoCoord_X>string</GeoCoord_X>
        </Address>
        <DeliveryInfo>
          <Date>string</Date>
          <TimeFrom>string</TimeFrom>
          <TimeTo>string</TimeTo>
        </DeliveryInfo>
        <EsnInfo>
          <CreateEsn>boolean</CreateEsn>
          <EsnDirective>string</EsnDirective>
        </EsnInfo>
        <AdditionalData>
          <DayCheckDone>boolean</DayCheckDone>
        </AdditionalData>
      </request>
    </UpdateRdvShipmentData>
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
    <UpdateRdvShipmentDataResponse xmlns="http://www.cargonet.software" />
  </soap12:Body>
</soap12:Envelope>
```

## 62. UpdateRdvShipmentDataForAgencyPickup

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=UpdateRdvShipmentDataForAgencyPickup

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/UpdateRdvShipmentDataForAgencyPickup"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <UpdateRdvShipmentDataForAgencyPickup xmlns="http://www.cargonet.software">
      <request>
        <DeliveryDate>string</DeliveryDate>
        <EsnInfo>
          <CreateEsn>boolean</CreateEsn>
          <EsnDirective>string</EsnDirective>
        </EsnInfo>
      </request>
    </UpdateRdvShipmentDataForAgencyPickup>
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
    <UpdateRdvShipmentDataForAgencyPickupResponse xmlns="http://www.cargonet.software" />
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <UpdateRdvShipmentDataForAgencyPickup xmlns="http://www.cargonet.software">
      <request>
        <DeliveryDate>string</DeliveryDate>
        <EsnInfo>
          <CreateEsn>boolean</CreateEsn>
          <EsnDirective>string</EsnDirective>
        </EsnInfo>
      </request>
    </UpdateRdvShipmentDataForAgencyPickup>
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
    <UpdateRdvShipmentDataForAgencyPickupResponse xmlns="http://www.cargonet.software" />
  </soap12:Body>
</soap12:Envelope>
```

## 63. UpdateRdvShipmentDataForPredict

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=UpdateRdvShipmentDataForPredict

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/UpdateRdvShipmentDataForPredict"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <UpdateRdvShipmentDataForPredict xmlns="http://www.cargonet.software">
      <request>
        <DeliveryInfo>
          <Date>string</Date>
          <TimeFrom>string</TimeFrom>
          <TimeTo>string</TimeTo>
        </DeliveryInfo>
        <EsnInfo>
          <CreateEsn>boolean</CreateEsn>
          <EsnDirective>string</EsnDirective>
        </EsnInfo>
        <AdditionalData>
          <DayCheckDone>boolean</DayCheckDone>
        </AdditionalData>
      </request>
    </UpdateRdvShipmentDataForPredict>
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
    <UpdateRdvShipmentDataForPredictResponse xmlns="http://www.cargonet.software" />
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <UpdateRdvShipmentDataForPredict xmlns="http://www.cargonet.software">
      <request>
        <DeliveryInfo>
          <Date>string</Date>
          <TimeFrom>string</TimeFrom>
          <TimeTo>string</TimeTo>
        </DeliveryInfo>
        <EsnInfo>
          <CreateEsn>boolean</CreateEsn>
          <EsnDirective>string</EsnDirective>
        </EsnInfo>
        <AdditionalData>
          <DayCheckDone>boolean</DayCheckDone>
        </AdditionalData>
      </request>
    </UpdateRdvShipmentDataForPredict>
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
    <UpdateRdvShipmentDataForPredictResponse xmlns="http://www.cargonet.software" />
  </soap12:Body>
</soap12:Envelope>
```

## 64. UpdateRdvShipmentDataForSafePlace

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=UpdateRdvShipmentDataForSafePlace

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/UpdateRdvShipmentDataForSafePlace"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <UpdateRdvShipmentDataForSafePlace xmlns="http://www.cargonet.software">
      <request>
        <DeliveryInfo>
          <ContactName>string</ContactName>
          <Digicode1>string</Digicode1>
          <Digicode2>string</Digicode2>
          <IntercomID>string</IntercomID>
          <Remark>string</Remark>
        </DeliveryInfo>
        <EsnInfo>
          <CreateEsn>boolean</CreateEsn>
          <EsnDirective>string</EsnDirective>
        </EsnInfo>
        <Image>base64Binary</Image>
      </request>
    </UpdateRdvShipmentDataForSafePlace>
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
    <UpdateRdvShipmentDataForSafePlaceResponse xmlns="http://www.cargonet.software">
      <UpdateRdvShipmentDataForSafePlaceResult>
        <Code>string</Code>
        <Barcode>base64Binary</Barcode>
      </UpdateRdvShipmentDataForSafePlaceResult>
    </UpdateRdvShipmentDataForSafePlaceResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <UpdateRdvShipmentDataForSafePlace xmlns="http://www.cargonet.software">
      <request>
        <DeliveryInfo>
          <ContactName>string</ContactName>
          <Digicode1>string</Digicode1>
          <Digicode2>string</Digicode2>
          <IntercomID>string</IntercomID>
          <Remark>string</Remark>
        </DeliveryInfo>
        <EsnInfo>
          <CreateEsn>boolean</CreateEsn>
          <EsnDirective>string</EsnDirective>
        </EsnInfo>
        <Image>base64Binary</Image>
      </request>
    </UpdateRdvShipmentDataForSafePlace>
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
    <UpdateRdvShipmentDataForSafePlaceResponse xmlns="http://www.cargonet.software">
      <UpdateRdvShipmentDataForSafePlaceResult>
        <Code>string</Code>
        <Barcode>base64Binary</Barcode>
      </UpdateRdvShipmentDataForSafePlaceResult>
    </UpdateRdvShipmentDataForSafePlaceResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 65. UpdateRdvShipmentDataForShop

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=UpdateRdvShipmentDataForShop

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/UpdateRdvShipmentDataForShop"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <UpdateRdvShipmentDataForShop xmlns="http://www.cargonet.software">
      <request>
        <ShopID>string</ShopID>
        <Receiver_ContactName>string</Receiver_ContactName>
        <DeliveryDate>string</DeliveryDate>
        <EsnInfo>
          <CreateEsn>boolean</CreateEsn>
          <EsnDirective>string</EsnDirective>
        </EsnInfo>
      </request>
    </UpdateRdvShipmentDataForShop>
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
    <UpdateRdvShipmentDataForShopResponse xmlns="http://www.cargonet.software" />
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <UpdateRdvShipmentDataForShop xmlns="http://www.cargonet.software">
      <request>
        <ShopID>string</ShopID>
        <Receiver_ContactName>string</Receiver_ContactName>
        <DeliveryDate>string</DeliveryDate>
        <EsnInfo>
          <CreateEsn>boolean</CreateEsn>
          <EsnDirective>string</EsnDirective>
        </EsnInfo>
      </request>
    </UpdateRdvShipmentDataForShop>
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
    <UpdateRdvShipmentDataForShopResponse xmlns="http://www.cargonet.software" />
  </soap12:Body>
</soap12:Envelope>
```

## 66. UpdateServiceNotice

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=UpdateServiceNotice

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/UpdateServiceNotice"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <UpdateServiceNotice xmlns="http://www.cargonet.software">
      <request>
        <answerID>int</answerID>
        <text>string</text>
        <address>
          <name>string</name>
          <phoneNumber>string</phoneNumber>
          <faxNumber>string</faxNumber>
          <geoX>string</geoX>
          <geoY>string</geoY>
        </address>
      </request>
    </UpdateServiceNotice>
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
    <UpdateServiceNoticeResponse xmlns="http://www.cargonet.software" />
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <UpdateServiceNotice xmlns="http://www.cargonet.software">
      <request>
        <answerID>int</answerID>
        <text>string</text>
        <address>
          <name>string</name>
          <phoneNumber>string</phoneNumber>
          <faxNumber>string</faxNumber>
          <geoX>string</geoX>
          <geoY>string</geoY>
        </address>
      </request>
    </UpdateServiceNotice>
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
    <UpdateServiceNoticeResponse xmlns="http://www.cargonet.software" />
  </soap12:Body>
</soap12:Envelope>
```

## 67. VerifyClient

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=VerifyClient

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/VerifyClient"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <VerifyClient xmlns="http://www.cargonet.software">
      <request>
        <Customer>
          <countrycode>int</countrycode>
        </Customer>
        <TimeStamp>long</TimeStamp>
      </request>
    </VerifyClient>
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
    <VerifyClientResponse xmlns="http://www.cargonet.software">
      <VerifyClientResult>
        <Data>string</Data>
      </VerifyClientResult>
    </VerifyClientResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <VerifyClient xmlns="http://www.cargonet.software">
      <request>
        <Customer>
          <countrycode>int</countrycode>
        </Customer>
        <TimeStamp>long</TimeStamp>
      </request>
    </VerifyClient>
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
    <VerifyClientResponse xmlns="http://www.cargonet.software">
      <VerifyClientResult>
        <Data>string</Data>
      </VerifyClientResult>
    </VerifyClientResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 68. VerifyConfiguration

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=VerifyConfiguration

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/VerifyConfiguration"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <VerifyUserCredentials xmlns="http://www.cargonet.software">
      <Verify_userid>string</Verify_userid>
      <Verify_password>string</Verify_password>
    </VerifyUserCredentials>
  </soap:Header>
  <soap:Body>
    <VerifyConfiguration xmlns="http://www.cargonet.software">
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
    <VerifyConfigurationResponse xmlns="http://www.cargonet.software">
      <VerifyConfigurationResult>
        <Allowed>boolean</Allowed>
      </VerifyConfigurationResult>
    </VerifyConfigurationResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <VerifyUserCredentials xmlns="http://www.cargonet.software">
      <Verify_userid>string</Verify_userid>
      <Verify_password>string</Verify_password>
    </VerifyUserCredentials>
  </soap12:Header>
  <soap12:Body>
    <VerifyConfiguration xmlns="http://www.cargonet.software">
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
    <VerifyConfigurationResponse xmlns="http://www.cargonet.software">
      <VerifyConfigurationResult>
        <Allowed>boolean</Allowed>
      </VerifyConfigurationResult>
    </VerifyConfigurationResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 69. getInfo

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=getInfo

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/getInfo"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <getInfo xmlns="http://www.cargonet.software" />
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
    <getInfoResponse xmlns="http://www.cargonet.software">
      <getInfoResult>string</getInfoResult>
    </getInfoResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <getInfo xmlns="http://www.cargonet.software" />
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
    <getInfoResponse xmlns="http://www.cargonet.software">
      <getInfoResult>string</getInfoResult>
    </getInfoResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 70. isAlive

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=isAlive

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/isAlive"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Body>
    <isAlive xmlns="http://www.cargonet.software" />
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
    <isAliveResponse xmlns="http://www.cargonet.software">
      <isAliveResult>boolean</isAliveResult>
    </isAliveResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Body>
    <isAlive xmlns="http://www.cargonet.software" />
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
    <isAliveResponse xmlns="http://www.cargonet.software">
      <isAliveResult>boolean</isAliveResult>
    </isAliveResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 71. runAction

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=runAction

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/runAction"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <runAction xmlns="http://www.cargonet.software">
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
    <runActionResponse xmlns="http://www.cargonet.software">
      <runActionResult>
        <Response>string</Response>
      </runActionResult>
    </runActionResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <runAction xmlns="http://www.cargonet.software">
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
    <runActionResponse xmlns="http://www.cargonet.software">
      <runActionResult>
        <Response>string</Response>
      </runActionResult>
    </runActionResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 72. runTransaction

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=runTransaction

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/runTransaction"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <runTransaction xmlns="http://www.cargonet.software">
      <request>
        <TransactionId>string</TransactionId>
        <Data>string</Data>
        <AlternativeCenter>int</AlternativeCenter>
        <Language>string</Language>
      </request>
    </runTransaction>
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
    <runTransactionResponse xmlns="http://www.cargonet.software">
      <runTransactionResult>string</runTransactionResult>
    </runTransactionResponse>
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <runTransaction xmlns="http://www.cargonet.software">
      <request>
        <TransactionId>string</TransactionId>
        <Data>string</Data>
        <AlternativeCenter>int</AlternativeCenter>
        <Language>string</Language>
      </request>
    </runTransaction>
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
    <runTransactionResponse xmlns="http://www.cargonet.software">
      <runTransactionResult>string</runTransactionResult>
    </runTransactionResponse>
  </soap12:Body>
</soap12:Envelope>
```

## 73. setAlive

- URL: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx?op=setAlive

### SOAP 1.1 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: text/xml; charset=utf-8
Content-Length: length
SOAPAction: "http://www.cargonet.software/setAlive"

<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap:Header>
  <soap:Body>
    <setAlive xmlns="http://www.cargonet.software">
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
    <setAliveResponse xmlns="http://www.cargonet.software" />
  </soap:Body>
</soap:Envelope>
```

### SOAP 1.2 Request
```xml
POST /eprintwebservice/eprintwebservice.asmx HTTP/1.1
Host: e-station-testenv.cargonet.software
Content-Type: application/soap+xml; charset=utf-8
Content-Length: length

<?xml version="1.0" encoding="utf-8"?>
<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
  <soap12:Header>
    <UserCredentials xmlns="http://www.cargonet.software">
      <userid>string</userid>
      <password>string</password>
    </UserCredentials>
  </soap12:Header>
  <soap12:Body>
    <setAlive xmlns="http://www.cargonet.software">
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
    <setAliveResponse xmlns="http://www.cargonet.software" />
  </soap12:Body>
</soap12:Envelope>
```
