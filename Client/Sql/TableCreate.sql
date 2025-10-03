
CREATE TABLE Shipment_Details (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Full_Name VARCHAR(100) NOT NULL,
    Company_Name VARCHAR(100),
    Email VARCHAR(100) NOT NULL,
    Phone VARCHAR(30) NOT NULL,
    Shipment_Type ENUM('import', 'export') NOT NULL,
    Transport_Mode ENUM('Sea Freight', 'Air Freight', 'Road Transport') NOT NULL,
    Origin_Country VARCHAR(100) NOT NULL,
    Origin_Port VARCHAR(100) NOT NULL,
    Dest_Country VARCHAR(100) NOT NULL,
    Dest_Port VARCHAR(100) NOT NULL,
    Product_Description VARCHAR(255) NOT NULL,
    HS_Code VARCHAR(20),
    Weight DECIMAL(10,2) NOT NULL,
    Quantity INT NOT NULL,
    Dimensions VARCHAR(50),
    Instructions TEXT,
    Submitted_At TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);