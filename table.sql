CREATE TABLE USER(
  UserEmail varchar(50) NOT NULL,
  Password varchar(16) NOT NULL,
  Fullname varchar(50),
  Address varchar(255),
  PRIMARY KEY (UserEmail)
);
CREATE TABLE ITEM(
  ItemID int NOT NULL AUTO_INCREMENT,
  ItemBand varchar(50),
  ItemName varchar(50),
  ItemChnName varchar(50),
  ItemBuyPrice double,
  ItemSalesPrice double,
  ItemSalesNum int,
  PRIMARY KEY (ItemID)
);
