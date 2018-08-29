#### Author: ampourgh | Version: 1.0.0 | Last Modified: 7/29/2017

# USA AUTO SEAT COVER INVENTORY

## Demo: usaautoseatcover.com

![](img/logo.png)

## Getting Started

### Prerequisites
Project functions with the following:
* Heroku PHP configuration: github.com/ampourgh/Heroku-Config
* MySQL workbench for setting up the database
* The following seatCover table within the MySQL db:

```SQL
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
```

### Files included
* Website segmented with PHP into individual sections, including import sections, connection to MySQL, footer and navigation.  
* js/index.js for hamburger menu functionality
* Bootstrap, jQuery and Handlebar.js lib

### Acknowledgments
Used Wikipedia's Commons in order to photoshop the cars and logos into interlaced PNG files. Hamburger menu, footer and banner carousal are based modifications of tutorials from YouTube Codepen and W3Schools.
