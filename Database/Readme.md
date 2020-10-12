Database inzicht
=
####**TABLE "gebruikers" heeft als volgt:**

+ *id*: INT NOT NULL PRIMARY KEY AUTO_INCREMENT
+ *gebruikersnaam*: VARCHAR(50) NOT NULL UNIQUE
+ *wachtwoord*: VARCHAR(255) NOT NULL
+ *created_at*: DATETIME DEFAULT CURRENT_TIMESTAMP
+ *updated_at*: DATETIME DEFAULT CURRENT_TIMESTAMP
___
####**TABLE "Flevosapproducts_Products"**

+ *id*: INT NOT NULL PRIMARY KEY AUTO_INCREMENT
+ *title*: VARCHAR(50) NOT NULL UNIQUE
+ *productCode*: INT NOT NULL
+ *prijs*: DECIMAL NOT NULL
+ *hoeveelheid*: INT NOT NULL
+ *createdAt*: DATETIME DEFAULT CURRENT_TIMESTAMP
+ *updatedAt*: DATETIME DEFAULT CURRENT_TIMESTAMP
+ *picture*: BLOB NOT NULL
+ *ProductOmschrijving*: TEXT