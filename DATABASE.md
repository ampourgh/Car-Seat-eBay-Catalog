```SQL
-- Create Table for each seat cover
CREATE TABLE seatCover (
    ID int(6) AUTO_INCREMENT PRIMARY KEY,
		scName varchar(250) NOT NULL,
		car varchar(250) NOT NULL,
		manufacturer varchar(250) NOT NULL,
    clearance varchar(250),
    reducedPrice varchar(250),
    eBayURL varchar(2000),
    payPalURL varchar(2000),
    description varchar(2000),
    disclaimer varchar(2000),
    regDate TIMESTAMP
)

INSERT INTO seatcover (
    scName,
    car,
    manufacturer,
    clearance,
    reducedPrice,
    eBayURL,
    payPalURL,
    description,
    disclaimer
)
VALUES (
    "Car Seat Dark Grey",
    "Silverado",
    "Chevrolet",
    "$97.00 (58% off)",
    "$68.00",
    "https://www.ebay.com/itm/03-07-Chevy-Silverado-Tahoe-Suburban-Driver-Bottom-Vinyl-seat-cover-Dark-GRAY/122956833748?hash=item1ca0cc63d4:g:YugAAOSwFPRZwcmk",
    "https://www.paypal.com/signin?country.x=US&locale.x=en_US",
    "Car Seat Dark Grey's description.",
    "Disclaimer."
)
```
