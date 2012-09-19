-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Sep 19, 2012 at 09:20 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `coursera`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `course`
-- 

CREATE TABLE `course` (
  `course_ID` bigint(20) NOT NULL auto_increment,
  `image` varchar(255) NOT NULL,
  `name` varchar(256) NOT NULL,
  `instructor` varchar(256) NOT NULL,
  `school` varchar(256) NOT NULL,
  `start_date` date NOT NULL,
  `duration` tinyint(4) NOT NULL,
  `category` varchar(128) NOT NULL,
  `grade` varchar(128) NOT NULL,
  PRIMARY KEY  (`course_ID`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `course`
-- 

INSERT INTO `course` VALUES (1, 'saas.png', 'Software Engineering for SaaS', 'Armando Fox, David Patterson', 'University of California, Berkeley', '2012-07-13', 5, '', '');
INSERT INTO `course` VALUES (2, 'temp.png', 'Health for All Through Primary Care', 'Henry Perry', 'JOHNS HOPKINS UNIVERSITY', '2013-01-01', 4, '', '');

-- --------------------------------------------------------

-- 
-- Table structure for table `member`
-- 

CREATE TABLE `member` (
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `privacy` tinyint(1) NOT NULL default '2' COMMENT 'privacy',
  `photo` varchar(256) default NULL,
  `location` varchar(256) default NULL,
  `gender` tinyint(1) NOT NULL default '3' COMMENT 'gender',
  `about_me` varchar(512) default NULL,
  `website` varchar(256) default NULL,
  `linkedin` varchar(128) default NULL,
  `facebook` varchar(128) default NULL,
  `gplus` varchar(128) default NULL,
  `twitter` varchar(128) default NULL,
  `github` varchar(128) default NULL,
  `locale` varchar(512) NOT NULL default '1',
  `birth_month` tinyint(4) NOT NULL default '0',
  `birth_day` tinyint(4) NOT NULL default '0',
  `birth_year` int(4) NOT NULL default '0',
  PRIMARY KEY  (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `member`
-- 

INSERT INTO `member` VALUES ('Jerry Wu', 'q', '7694f4a66316e53c8cdd9d9954bd611d', 1, NULL, 'taipei', 3, 'lalala', '213213213', '123213213', '123', '213', '123', '123', '1', 12, 10, 1988);
INSERT INTO `member` VALUES ('andrew hsu', 'adhsu01@gmail.com', 'db3f78ae53d8c101d71ccdb620f7c74', 2, NULL, NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL, '', '1', 0, 0, 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `selection_table`
-- 

CREATE TABLE `selection_table` (
  `course_ID` bigint(20) NOT NULL,
  `email` varchar(256) NOT NULL,
  PRIMARY KEY  (`course_ID`,`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `selection_table`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `test`
-- 

CREATE TABLE `test` (
  `name` varchar(256) NOT NULL,
  `content` varchar(256) NOT NULL,
  `industry` varchar(256) NOT NULL,
  `solution` varchar(256) NOT NULL,
  `size` varchar(256) NOT NULL,
  `region` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `test`
-- 

INSERT INTO `test` VALUES ('Crown Partners', 'Crown Partners is a digital sales and marketing technology firm', 'Professional Services', 'Mobility', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Abraham Harrison', 'Abraham Harrison is an online marketing firm ', 'Professional Services', 'Mobility', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Ahold', 'Ahold is an international food retailing group that operates leading supermarket companies in Europe and the United States', 'Retail', 'Collaboration', 'Large Business', 'Europe');
INSERT INTO `test` VALUES ('Alta Planning + Design', ' Alta Planning + Design combines the skills of planning, design, landscape architecture and engineering', 'Professional Services', 'Collaboration', 'Medium Business', 'North America');
INSERT INTO `test` VALUES ('Altium Limited', 'Altium helps their clients take advantage of cutting-edge devices and technologies', 'Technology', 'Productivity', 'Medium Business', 'Asia Pacific');
INSERT INTO `test` VALUES ('American Red Cross', 'The American Red Cross is a non-profit emergency response organization', 'Non-profit', 'Productivity', 'Non-profit', 'North America');
INSERT INTO `test` VALUES ('BabyAge.com', 'BabyAge.com, Inc. manufactures and sells high quality, brand name infant and juvenile products', 'Retail', 'Growth', 'Medium Business', 'North America');
INSERT INTO `test` VALUES ('Belle and Rollo', 'Belle and Rollo is an online lifestyle store for children', 'Retail', 'Mobility', 'Small Business', 'Europe');
INSERT INTO `test` VALUES ('Bergelectric', 'Bergelectric Corporation provides electrical contracting on construction projects ', 'Building and Construction', 'Collaboration', 'Medium Business', 'North America');
INSERT INTO `test` VALUES ('BI-LO', 'BI-LO is a grocery retail chain with over 200 stores in the Southeast', 'Retail', 'Collaboration', 'Large Business', 'North America');
INSERT INTO `test` VALUES ('OptionOne', 'OptionOne is an independent specialty infusion services provider', 'Healthcare', 'Collaboration', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Boise State University', 'Boise State is Idaho''s metropolitan research university ', 'Education', 'Collaboration', 'Education', 'North America');
INSERT INTO `test` VALUES ('Boost News Media', 'Boost New Media produces websites, applications, and "anything to do with the web"', 'Professional Services', 'Productivity', 'Medium Business', 'Asia Pacific');
INSERT INTO `test` VALUES ('Bowery Lane Bicycles', 'Bowery Lane Bicycles makes affordable bikes for urban cyclists', 'Retail', 'Collaboration', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Box', 'Box helps businesses collaborate, share, and manage all their content online', 'Technology', 'Collaboration', 'Medium Business', 'North America');
INSERT INTO `test` VALUES ('Boxx Group', 'The Boxx Group provides residential and utility construction, renovation and civil contracting', 'Building and Construction', 'Collaboration', 'Medium Business', 'Europe');
INSERT INTO `test` VALUES ('Brady Corp.', 'Brady Corp. is a manufacturer of complete solutions that identify and protect premises', 'Manufacturing', 'Collaboration', 'Large Business', 'North America');
INSERT INTO `test` VALUES ('Broadway Malyan', 'Broadway Malyan is an international practice of architects, urbanists and designers', 'Professional Services', 'Savings', 'Medium Business', 'Europe');
INSERT INTO `test` VALUES ('Cadillac Fairview', 'Cadillac Fairview is one of the largest investors, owners and managers of commercial real estate in North America', 'Real Estate', 'Mobility', 'Large Business', 'North America');
INSERT INTO `test` VALUES ('Capgemini Customer Care & Intelligence', 'Capgemini is one of the world''s foremost providers of consulting, technology and outsourcing services', 'Professional Services', 'Savings', 'Large Business', 'North America');
INSERT INTO `test` VALUES ('4Creeks, Inc. ', '4Creeks provides city and county consulting services', 'Professional Services', 'Savings', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Coolhaus ', 'Coolhaus makes avante-garde ice cream sandwiches', 'Retail', 'Collaboration', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('notsoldseparately', 'NotSoldSeparately is a boutique digital marketing company, primarily servicing the healthcare and pharmaceutical industry', 'Professional Services', 'Collaboration', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Orientalfurniture.com ', 'Orientalfurniture.com is a source for authentic Asian furniture and decorative accessories', 'Retail', 'Mobility', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Hey Cupcake', 'Hey Cupcake brand specializes in providing whimsical cupcake products and experiences', 'Retail', 'Mobility', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Music Clout', 'Music Clout is an online platform offering opportunities, benefits, and resources for musicians', 'Entertainment', 'Collaboration', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('PMG Public Relations', 'PMG Public Relations provides traditional PR and social media campaigns', 'Professional Services', 'Collaboration', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('The Gillespie Law Group', 'The Gillespie Law Group is a boutique law firm ', 'Professional Services', 'Collaboration', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('SignedOn', 'SignedOn builds applications and websites for shops, restaurants, and small businesses', 'Professional Services', 'Collaboration', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Ascendant HR', 'Ascendant HR provides HR and payroll services for small- and medium-sized businesses', 'Professional Services', 'Collaboration', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('The Flood Fund', 'The Flood Fund is a not-for-profit charity providing relief to communities that have undergone severe flooding', 'Non-profit', 'Mobility', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Tie Society', 'Tie Society gives consumers a way to rent designer neckwear ', 'Retail', 'Mobility', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Projects by Peggy, Inc.', 'Projects by Peggy, Inc. is a web design firm ', 'Technology', 'Collaboration', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Mobile Attic', 'Mobile Attic is a portable self-storage company ', 'Professional Services', 'Productivity', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Book Riot', 'Book Riot is a new media publication covering the intersection of book and pop-culture', 'Publishing', 'Collaboration', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Tiger Lily', 'Tiger Lily is a flower shop', 'Retail', 'Savings', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('HitPlay ', 'HitPlay offers services that let users distribute and monetize their video content', 'Technology', 'Collaboration', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Cinram', 'Cinram specializes in optical disc manufacturing, packaging, and distribution ', 'Manufacturing', 'Savings', 'Large Business', 'North America');
INSERT INTO `test` VALUES ('City of Canton, GA', 'Canton, Georgia is home to more than 21,000 people ', 'Government', 'Savings', 'Government', 'North America');
INSERT INTO `test` VALUES ('City of Los Angeles, CA', 'Los Angeles is the second-largest city in the U.S.', 'Government', 'Collaboration', 'Government', 'North America');
INSERT INTO `test` VALUES ('City of Rochester Hills, MI', 'Rochester Hills, Michigan ', 'Government', 'Savings', 'Government', 'North America');
INSERT INTO `test` VALUES ('City of Westerville, OH', 'Westerville, Ohio', 'Government', 'Productivity', 'Government', 'North America');
INSERT INTO `test` VALUES ('City of Wooster, OH', 'Wooster, Ohio is a cozy community of about 26,000 people', 'Government', 'Productivity', 'Government', 'North America');
INSERT INTO `test` VALUES ('Clarkstown Central School District ', 'Clarkstown Central School District includes k-12 through high schools', 'Education', 'Collaboration', 'Education', 'North America');
INSERT INTO `test` VALUES ('Composites One', 'Composites One is a distributor of composites materials', 'Manufacturing', 'Productivity', 'Medium Business', 'North America');
INSERT INTO `test` VALUES ('Counterpoint Consulting', ' Counterpoint Consulting provides business process management (BPM) services ', 'Professional Services', 'Savings', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Crown Partners', 'Crown Partners helps businesses implement the newest ebusiness solutions to grow their revenue and get ahead of the competition', 'Professional Services', 'Productivity', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Cully & Sully', 'Cully and Sully is a restaurant chain in the UK and Ireland', 'Retail', 'Productivity', 'Small Business', 'Europe');
INSERT INTO `test` VALUES ('Delta Hotels and Resorts', 'Delta Hotels and Resorts is a Canadian hospitality chain ', 'Travel & Hospitality', 'Collaboration', 'Large Business', 'North America');
INSERT INTO `test` VALUES ('South Carolina DHEC', 'South Carolina Department of Health and Environmental Control promotes and protects the health of the public and environment', 'Government', 'Security', 'Large Business', 'North America');
INSERT INTO `test` VALUES ('DeyFischer Consulting', 'DeyFischer Consulting delivers SAP business solutions to US and international customers', 'Professional Services', 'Productivity', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('DiscountOfficeItems.com', 'DiscountOfficeItems.com offers office supplies, technology products and office furniture', 'Retail', 'Productivity', 'Medium Business', 'North America');
INSERT INTO `test` VALUES ('Diversey', 'Diversey, Inc. is a provider of commercial cleaning, sanitation and hygiene solutions', 'Manufacturing', 'Collaboration', 'Large Business', 'North America');
INSERT INTO `test` VALUES ('DOCOMO interTouch', 'DOCOMO interTouch is a provider of technology solutions to the hospitality industry', 'Technology', 'Savings', 'Large Business', 'Asia Pacific');
INSERT INTO `test` VALUES ('Dominion Enterprises', 'Dominion Enterprises is a marketing services company ', 'Professional Services', 'Productivity', 'Large Business', 'North America');
INSERT INTO `test` VALUES ('Duralee', 'Duralee is a decorative fabrics company that caters to interior designers', 'Manufacturing', 'Productivity', 'Medium Business', 'North America');
INSERT INTO `test` VALUES ('EAT.', 'EAT. is a restaurant chain throughout the U.K.', 'Retail', 'Growth', 'Large Business', 'Europe');
INSERT INTO `test` VALUES ('EPS Communications', 'EPS Communications is a marketing firm', 'Professional Services', 'Productivity', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Essence', 'Essence is a creative agency with offices around the globe', 'Professional Services', 'Productivity', 'Small Business', 'Europe');
INSERT INTO `test` VALUES ('Esquivel Shoes', 'Esquivel Shoes is a modern American-made footwear company', 'Retail', 'Collaboration', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Banshee Wines', 'Banshee wines produces their own wine and distributes European wines in the U.S.', 'Retail', 'Collaboration', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('New York Yoga', 'New York Yoga is a neighborhood yoga studio', 'Professional Services', 'Collaboration', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Square Spot', 'Square Spot is a family-oriented online marketplace', 'Retail', 'Collaboration', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Gold Medal Waters', 'Gold Medal Waters is a financial advisor and independent wealth management firm', 'Financial Services', 'Collaboration', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('P.L.A.Y. Project', 'The P.L.A.Y. Project is a therapy program for children with autism ', 'Healthcare', 'Productivity', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Innovent.tv', 'Innovent.tv is a trans-media production company', 'Professional Services', 'Collaboration', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Peak Environmental Concepts', 'Peak Environmental Concepts specializes in landscape and site development, erosion and sediment control, and snow and ice management', 'Building and Construction', 'Productivity', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Onassis Clothing', 'Onassis Clothing is a mens clothing brand ', 'Retail', 'Collaboration', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('NOAA', 'Federal agency responsible for daily weather forecasts, climate monitoring, fisheries management & coastal restoration', 'Government', 'Communication', 'Government', 'North America');
INSERT INTO `test` VALUES ('GSA', 'Federal agency responsible for managing government assets, preserving historic property and implementing technology solutions', 'Government', 'Collaboration', 'Government', 'North America');
INSERT INTO `test` VALUES ('Berkeley Lab', 'Berkeley Lab is managed by the University of California (UC) and conducts research across a wide range of scientific disciplines', 'Government', 'Collaboration', 'Government', 'North America');
INSERT INTO `test` VALUES ('State of Wyoming', 'The nation''s 44th state and the 10th largest by area', 'Government', 'Cost Savings', 'Government', 'North America');
INSERT INTO `test` VALUES ('Kansas Department of Wildlife & Parks', 'Responsible for 26 state parks and a variety of wildlife areas, nature centers, and fishing lakes', 'Government', 'Communication', 'Government', 'North America');
INSERT INTO `test` VALUES ('City of Pittsburgh, PA', 'This western Pennsylvania city is often voted among the most liveable cities in the US', 'Government', 'Communication', 'Government', 'North America');
INSERT INTO `test` VALUES ('City of Orlando, FL', 'The home of Disney World and one of the world''s fastest-growing cities', 'Government', 'Cost Savings', 'Government', 'North America');
INSERT INTO `test` VALUES ('Lake Havasu City Police', 'Home of the historic London Bridge, this city is located in western Arizona near the California border', 'Government', 'Communication', 'Government', 'North America');
INSERT INTO `test` VALUES ('Multnomah County', 'Oregon''s most populous county has its county seat in Portland', 'Government', 'Cost Savings', 'Government', 'North America');
INSERT INTO `test` VALUES ('Larimer County', 'Home to nearly 300,000 residents in north-central Colorado, the state''s seventh most populous county', 'Government', 'Collaboration', 'Government', 'North America');
INSERT INTO `test` VALUES ('City of Lewisville, TX', 'A city of nearly 100,000 people located in the Dallas Forth Worth metropolitan area', 'Government', 'Communication', 'Government', 'North America');
INSERT INTO `test` VALUES ('U.S. Coast Guard Academy', 'Responsible for training leaders to become commissioned officers in the Coast Guard', 'Government', 'Collaboration', 'Government', 'North America');
INSERT INTO `test` VALUES ('Macomb County Circuit Court & Clerk', 'The "keeper of records" for Michigan''s third-most populous county', 'Government', 'Cost Savings', 'Government', 'North America');
INSERT INTO `test` VALUES ('U.S. Holocaust Memorial Museum', 'Living memorial to the Holocaust in Washington, DC, created by the U.S. Congress', 'Government', 'Collaboration', 'Government', 'North America');
INSERT INTO `test` VALUES ('Hamilton Beach', 'Hamilton Beach is a leading distributor of small kitchen appliances ', 'Manufacturing', 'Productivity', 'Medium Business', 'North America');
INSERT INTO `test` VALUES ('Mortgage Choice Ltd.', 'Mortgage Choice is Australia''s largest independently-owned mortgage broker', 'Financial Services', 'Productivity', 'Large Business', 'Asia Pacific');
INSERT INTO `test` VALUES ('MWV', 'MWV is a global packaging manufacturer', 'Manufacturing', 'Productivity', 'Large Business', 'North America');
INSERT INTO `test` VALUES ('Roberto Cavalli', 'Roberto Cavalli is a globally renowned Italian fashion house', 'Retail', 'Productivity', 'Large Business', 'Europe');
INSERT INTO `test` VALUES ('Virgin America', 'Virgin America is an airline', 'Travel & Hospitality', 'Cost Savings', 'Large Business', 'North America');
INSERT INTO `test` VALUES ('Goble & Associates', 'Goble & Associates is a global marketing agency', 'Professional Services', 'Collaboration', 'Small Business', 'North America');
INSERT INTO `test` VALUES (' BBVA', 'BBVA is one of the world''s largest financial institutions', 'Financial Services', 'Collaboration', 'Large Business', 'Europe');
INSERT INTO `test` VALUES ('Z Gallerie', 'Z Gallerie is a home furnishing and accessories retailer ', 'Retail', 'Productivity', 'Large Business', 'North America');
INSERT INTO `test` VALUES ('Specsavers', 'Specsavers is a privately-owned chain of opticians', 'Healthcare', 'Growth', 'Large Business', 'Asia Pacific');
INSERT INTO `test` VALUES ('Gibson Sotheby''s International Realty', 'Gibson Sotheby''s International Realty is a luxury real estate firm', 'Real Estate', 'Mobility', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Pure Energy Services, LCC', 'Pure Energy Services is a publicly traded oilfield services company', 'Professional Services', 'Productivity', 'Large Business', 'North America');
INSERT INTO `test` VALUES ('Golf Town', 'Golf Town is a retail destination for everything golf', 'Retail', 'Productivity', 'Large Business', 'North America');
INSERT INTO `test` VALUES ('The Roche Group', 'The Roche Group is a global leader in research-focused healthcare', 'Healthcare', 'Mobility', 'Large Business', 'North America');
INSERT INTO `test` VALUES ('Admiral Pest Control', 'Admiral Pest Control is a family-owned pest control business', 'Professional Services', 'Productivity', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Fairchild Semiconductor', 'Fairchild Semiconductor is a global provider of semiconductor solutions', 'Manufacturing', 'Savings', 'Large Business', 'North America');
INSERT INTO `test` VALUES ('Motorola Mobile Devices', 'Motorola Mobile Devices produces mobile devices and provides end-to-end video and data services', 'Technology', 'Productivity', 'Large Business', 'North America');
INSERT INTO `test` VALUES ('Sanmina-SCI', 'Sanmina-SCI is an Electronics Manufacturing Services (EMS) provider ', 'Manufacturing', 'Productivity', 'Large Business', 'North America');
INSERT INTO `test` VALUES ('LXR ', 'LXR is a collection of hotels and resorts across the United States and the Caribbean', 'Travel & Hospitality', 'Productivity', 'Large Business', 'North America');
INSERT INTO `test` VALUES ('Quality Distribution', 'Quality Distribution is a tank truck operator and transporter of hazardous materials', 'Manufacturing', 'Productivity', 'Large Business', 'North America');
INSERT INTO `test` VALUES ('Ray White Group', 'The Ray White Group manages real estate sales, home loans, mortgages and insurance', 'Real Estate', 'Productivity', 'Large Business', 'Asia Pacific');
INSERT INTO `test` VALUES ('Salesforce.com', 'Salesforce.com is an enterprise cloud computing company', 'Technology', 'Productivity', 'Large Business', 'North America');
INSERT INTO `test` VALUES ('Hiatus Spa + Retreat', 'Hiatus Spa + Retreat is a socially-conscious, full-service day spa', 'Travel & Hospitality', 'Productivity', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Aperam', 'Aperam is a stainless, electrical and specialty steel producer', 'Manufacturing', 'Productivity', 'Large Business', 'Europe');
INSERT INTO `test` VALUES ('Pratt Industries', 'Pratt Industries Inc. is a leader in the recycled paper packaging industry', 'Manufacturing', 'Productivity', 'Large Business', 'North America');
INSERT INTO `test` VALUES ('Avago Technologies', 'Avago Technologies is a privately-owned semiconductor company', 'Technology', 'Productivity', 'Large Business', 'North America');
INSERT INTO `test` VALUES ('The Richmond Group', 'The Richmond Group is an accounting and finance company', 'Financial Services', 'Productivity', 'Medium Business', 'Europe');
INSERT INTO `test` VALUES ('Limbach Facility Services', 'Limbach Facility Services is a mechanical contractor', 'Building and Construction', 'Collaboration', 'Medium Business', 'North America');
INSERT INTO `test` VALUES ('XAOP', 'XAOP is a small software development company specializing in content integration', 'Technology', 'Productivity', 'Small Business', 'Europe');
INSERT INTO `test` VALUES ('Baird & Warner', 'Baird & Warner is the oldest residential Real Estate Brokerage in US', 'Real Estate', 'Mobility', 'Large Business', 'North America');
INSERT INTO `test` VALUES ('McClatchy Company', 'The McClatchy Company manages 30 daily newspapers throughout the U.S.', 'Publishing', 'Collaboration', 'Large Business', 'North America');
INSERT INTO `test` VALUES ('Genentech', 'Genentech is a biotech company that develops innovative solutions for unmet medical needs', 'Healthcare', 'Savings', 'Large Business', 'North America');
INSERT INTO `test` VALUES ('Porter Airlines', 'Porter Airlines flies across 18 airports in Canada and the U.S.', 'Travel & Hospitality', 'Collaboration', 'Large Business', 'North America');
INSERT INTO `test` VALUES ('Bergelectric', 'Bergelectric provides electrical contracting on construction projects', 'Building and Construction', 'Communication', 'Large Business', 'North America');
INSERT INTO `test` VALUES ('O''Neill Hotels & Resorts Ltd.', 'O''Neill Hotels & Resorts is a hotel management company', 'Travel & Hospitality', 'Productivity', 'Large Business', 'North America');
INSERT INTO `test` VALUES ('Bradford & Barthel', 'Bradford & Barthel is a mid-size law firm in Southern California', 'Professional Services', 'Collaboration', 'Medium Business', 'North America');
INSERT INTO `test` VALUES ('Brown University', 'Brown University, founded in 1764, is an Ivy League university located in Providence, Rhode Island', 'Education', 'Collaboration', 'Education', 'North America');
INSERT INTO `test` VALUES ('KLM Royal Dutch Airlines', 'KLM is a Dutch airline serving the Netherlands', 'Travel & Hospitality', 'Mobility', 'Large Business', 'Europe');
INSERT INTO `test` VALUES ('Hunter Douglas', 'Hunter Douglas is the leading manufacturer of custom-made window fashions in North America', 'Retail', 'Productivity', 'Large Business', 'North America');
INSERT INTO `test` VALUES ('Lincoln Property Company', 'Lincoln Property Company is a residential property management and development company', 'Real Estate', 'Cost Savings', 'Large Business', 'North America');
INSERT INTO `test` VALUES ('Melrose Resources', 'Melrose Resources is an oil and gas exploration, development and production company', 'Utilities', 'Productivity', 'Medium Business', 'Europe');
INSERT INTO `test` VALUES ('Prudential Preferred Properties', 'Prudential Preferred Properties is the only Prudential-affiliate in the Chicagoland area ', 'Real Estate', 'Productivity', 'Medium Business', 'North America');
INSERT INTO `test` VALUES ('Imagination Group', 'Imagination Group is a global communications agency', 'Professional Services', 'Collaboration', 'Large Business', 'Europe');
INSERT INTO `test` VALUES ('Nimble Books', 'Nimble Books is a boutique publisher of timely, relevant books on topics of current interest', 'Publishing', 'Productivity', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('South Carolina REALTORS® ', 'South Carolina REALTORS® (SCR) is the largest non-profit trade association in the region', 'Real Estate', 'Savings', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('The Administrative Conference of the United States (ACUS)', 'ACUS is an independent federal agency for creating public-private partnerships to improve the government', 'Government', 'Collaboration', 'Government', 'North America');
INSERT INTO `test` VALUES ('Saaspoint', 'Saaspoint is a global consultancy focused on the implementation and integration of Salesforce.com based projects', 'Professional Services', 'Productivity', 'Small Business', 'Europe');
INSERT INTO `test` VALUES ('TechCFO.com', 'TechCFO is a team of seasoned Chief Financial Officers, controllers, and accountants', 'Professional Services', 'Savings', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('National Oceanic and Atmospheric Administration (NOAA)', 'NOAA is a federal agency that provides services ranging from weather forecasts to coastal restoration', 'Government', 'Productivity', 'Government', 'North America');
INSERT INTO `test` VALUES ('Premier Guitar', 'Premier Guitar is a magazine focused on guitar gear and musicians', 'Publishing', 'Productivity', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Pharmacy Development Services (PDS)', 'Pharmacy Development Services (PDS) is a business coaching company for independent pharmacies', 'Professional Services', 'Productivity', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Priceminister.com', 'PriceMinister.com is an online shopping destination that connects over 13 million buyers and sellers ', 'Retail', 'Collaboration', 'Small Business', 'Europe');
INSERT INTO `test` VALUES ('IPSEN', 'IPSEN is a global specialty-driven pharmaceutical company', 'Healthcare', 'Collaboration', 'Large Business', 'Europe');
INSERT INTO `test` VALUES ('ITV', 'ITV is one of the largest commercial television networks in the UK', 'Entertainment', 'Collaboration', 'Large Business', 'Europe');
INSERT INTO `test` VALUES ('JobFlo', 'JobFlo helps small to medium-sized businesses recruit top talent through its free social-media recruiting platform', 'Professional Services', 'Communication', 'Medium Business', 'North America');
INSERT INTO `test` VALUES ('Nexteer Automotive', 'Nexteer Automotive is a global leader in advanced automotive steering and driveline systems', 'Manufacturing', 'Cost Savings', 'Large Business', 'North America');
INSERT INTO `test` VALUES ('straighterline.com', 'StraighterLine provides online college courses at affordable price through direct partnerships with colleges', 'Education', 'Productivity', 'Education', 'North America');
INSERT INTO `test` VALUES ('Pithy Little Wine Co.', 'Pithy Little Wine Co. is a family-owned winery offering wine, soda and gourmet food', 'Retail', 'Productivity', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Sun Windows', 'Sun Windows manufactures high quality windows and doors', 'Manufacturing', 'Productivity', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Mad Genius', 'Mad Genius is a soup-to-nuts branding and creative agency', 'Professional Services', 'Productivity', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Lamar Advertising', 'Lamar Advertising operates over 150 outdoor advertising companies and 63 transit companies, reaching driving audiences', 'Professional Services', 'Productivity', 'Large Business', 'North America');
INSERT INTO `test` VALUES ('U.S. Navy''s Maritime Domain Awareness Program', 'The United States Navy''s Maritime Domain Awareness program focuses on improving maritime security around the world', 'Government', 'Collaboration', 'Government', 'North America');
INSERT INTO `test` VALUES ('Oxygen Design Agency', 'Oxygen Design Agency helps companies discover their voices and reach their audiences effectively', 'Professional Services', 'Productivity', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Great Books Foundation', 'Great Books Foundation is a non-profit educational organization whose mission is to promote reading, thinking, and the sharing of ideas for people of all ages', 'Non-profit', 'Communication', 'Non-profit', 'North America');
INSERT INTO `test` VALUES ('Just Salad', 'Just Salad is a restaurant chain that caters to health conscious customers looking for a fresh and fast meal', 'Retail', 'Collaboration', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Mid-Atlantic Door Group, Inc. ', 'Mid-Atlantic Door Group, Inc. is a 38-year-old specialty contracting company', 'Building and Construction', 'Cost Savings', 'Medium Business', 'North America');
INSERT INTO `test` VALUES ('The Standard Agency', 'The Standard Agency is a talent management and creative agency', 'Entertainment', '', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Macomb County Circuit Court', 'The Macomb County Circuit Court and Clerk serves Michigan''s third most populated county', 'Government', 'Productivity', 'Government', 'North America');
INSERT INTO `test` VALUES ('The Phoenix of New Orleans', 'The Phoenix of New Orleans (PNOLA) is dedicated to supporting the recovery of Lower Mid-City New Orleans ', 'Non-profit', 'Productivity', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Rockingham County, NC', 'Rockingham County is home to nearly 100,000 residents', 'Government', 'Collaboration', 'Government', 'North America');
INSERT INTO `test` VALUES ('Village of Westmont, Illinois', 'The Village of Westmont is a community of six square miles', 'Government', 'Productivity', 'Government', 'North America');
INSERT INTO `test` VALUES ('Washington County, New York', 'Washington County is home to over 60,000 residents', 'Government', 'Productivity', 'Government', 'North America');
INSERT INTO `test` VALUES ('Amador County, California ', 'Located in the Sierra Nevada Mountains, Amador County is home to nearly 40,000 people', 'Government', 'Cost Savings', 'Government', 'North America');
INSERT INTO `test` VALUES ('City of Des Moines, Iowa', 'The City of Des Moines is the capital of Iowa and home to over 200,000 residents', 'Government', 'Productivity', 'Government', 'North America');
INSERT INTO `test` VALUES ('Anhanguera Educational', 'Anhanguera is the largest private educational network in Latin America', 'Education', 'Productivity', 'Education', 'Latin America');
INSERT INTO `test` VALUES ('Brandeis University', 'Brandeis University is a private research university with a liberal arts focus ', 'Education', 'Collaboration', 'Education', 'North America');
INSERT INTO `test` VALUES ('Cox Schepp Construction', 'Cox Schepp Construction provides services in the southeastern region of the U.S.', 'Building and Construction', 'Productivity', 'Medium Business', 'North America');
INSERT INTO `test` VALUES ('Trinity Mirror Group', 'Trinity Mirror Group publishes many UK titles such as Daily Mirror and People, as well as 240 regional newspapers', 'Publishing', 'Productivity', 'Large Business', 'Europe');
INSERT INTO `test` VALUES ('Viocorp', 'Viocorp is a provider of digital broadcast video solutions', 'Professional Services', 'Productivity', 'Medium Business', 'North America');
INSERT INTO `test` VALUES ('UserTesting ', 'UserTesting provides fast and inexpensive website usability testing ', 'Professional Services', 'Communication', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Traffic Konzept + Film GmbH', 'Traffic Konzept + Film GmbH is a multimedia studio that supported a record-setting expedition to the Arctic', 'Entertainment', 'Mobility', 'Small Business', 'Europe');
INSERT INTO `test` VALUES ('SF Bay Pediatrics', 'SF Bay Pediatrics are dedicated to the care and well being of children', 'Healthcare', 'Collaboration', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Brazos Bookstore', 'Brazos Bookstore sells a diverse collection of books and connects the Houston community with authors', 'Retail', 'Productivity', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Takami', 'Takami conceives, develops, and runs successful eateries specializing in international cuisine', 'Travel & Hospitality', 'Productivity', 'Small Business', 'Latin America');
INSERT INTO `test` VALUES ('WBP Systems', 'WBP Systems provides hardware and software platforms for customer relationship management', 'Technology', 'Productivity', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('San Francisco Consulting Group', 'San Francisco Consulting Group (SFCG) helps clients around the globe confront sales and marketing issues', 'Professional Services', 'Productivity', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Premier Salons', 'The Premier Salons brand has over 300 high-end spas and salons and almost 500 beauty supply retail stores ', 'Retail', 'Cost Savings', 'Large Business', 'North America');
INSERT INTO `test` VALUES ('Roland', 'Roland manufactures and distributes electronic musical instruments and equipment', 'Electronics', 'Cost Savings', 'Medium Business', 'North America');
INSERT INTO `test` VALUES ('Jason''s Deli', 'Jason''s Deli has 225 corporate and franchise stores specializing in soup, salad and sandwiches', 'Retail', 'Collaboration', 'Large Business', 'North America');
INSERT INTO `test` VALUES ('Dreyfus Properties', 'Dreyfus Properties is a boutique real estate brokerage serving high-end residential markets', 'Real Estate', 'Mobility', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('SoCal Lacrosse', 'SoCal Lacrosse is a non-profit organization serving young people who yearn to participate in the sport', 'Non-profit', 'Productivity', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Rock Kitchen Harris (RKH)', 'Rock Kitchen Harris (RKH) is a marketing agency offering advertising, design, public relations and web services', 'Professional Services', 'Productivity', 'Small Business', 'Europe');
INSERT INTO `test` VALUES ('The Erith Group', 'The Erith Group specializes in demolition, asbestos removal, remediation, waste recycling and haulage', 'Building and Construction', 'Savings', 'Small Business', 'Europe');
INSERT INTO `test` VALUES ('USA Water Polo', 'USA Water Polo supports membership programs and national teams', 'Non-profit', 'Growth', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Hub City Media', 'Hub City Media develops mission-critical web applications and software for companies', 'Technology', 'Productivity', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('GrapeCity', 'GrapeCity provides enterprises with software tools, solutions and services', 'Technology', 'Productivity', 'Medium Business', 'Japan');
INSERT INTO `test` VALUES ('Stone Belt Arc', 'Stone Belt Arc is a nonprofit organization that provides education and support for individuals with disabilities', 'Non-profit', 'Cost Savings', 'Non-profit', 'North America');
INSERT INTO `test` VALUES ('Gofer Ice Cream', 'Gofer Ice Cream offers high quality ice cream and unique treats', 'Retail', 'Growth', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('MSaven.com', 'MSaven.com provides advertisers with text message marketing, print advertising, and the ability to offer online coupons', 'Professional Services', 'Productivity', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('SlideRocket', 'SlideRocket offers a dynamic presentation platform that improves sales and marketing communications', 'Technology', 'Security', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('New York University (NYU)', 'NYU is one of America''s largest private higher education institutions', 'Education', 'Cost Savings', 'Education', 'North America');
INSERT INTO `test` VALUES ('Konica Minolta', 'Konica Minolta Business Solutions offers advanced imaging and networking technologies for the desktop to the print shop', 'Manufacturing', 'Communication', 'Large Business', 'North America');
INSERT INTO `test` VALUES ('allnurses.com', 'Allnurses.com is one of the largest online nursing communities with 430,000+ members', 'Healthcare', 'Productivity', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Indus Valley', 'Indus Valley is a niche consultancy focused on Capital Markets', 'Professional Services', 'Collaboration', 'Medium Business', 'Asia Pacific');
INSERT INTO `test` VALUES ('Leftclick', 'Leftclick is a user experience design consultancy that provides analysis and web site optimization for e-businesses', 'Professional Services', 'Productivity', 'Small Business', 'Asia Pacific');
INSERT INTO `test` VALUES ('Playplanit.com', 'Playplanit.com is run by two moms and helps parents find family-friendly local events', 'Professional Services', 'Productivity', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Social Signal', 'Social Signal is a social media strategy firm', 'Professional Services', 'Cost Savings', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Trump Hotels Group', 'Trump Hotels Group owns hotels around the globe', 'Travel & Hospitality', 'Productivity', 'Large Business', 'North America');
INSERT INTO `test` VALUES ('Indoff', 'Indoff distributes office interiors, products and promotions ', 'Retail', 'Productivity', 'Medium Business', 'North America');
INSERT INTO `test` VALUES ('Medialocate', 'Medialocate is a translation services company helping Fortune 500 companies bring their products and content to global audiences', 'Professional Services', 'Productivity', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Providence Restaurant Group', 'Providence Restaurant Group owns a chain of quick-service restaurants', 'Retail', 'Productivity', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Sea Change Investment Fund', 'Sea Change Management is a private equity firm ', 'Professional Services', 'Productivity', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('WildBlue', 'WildBlue is a satellite Internet Service Provider delivering two-way broadband Internet access', 'Technology', 'Savings', 'Large Business', 'North America');
INSERT INTO `test` VALUES ('Flight Centre', 'Flight Centre is Australia''s largest travel agency group', 'Travel & Hospitality', 'Productivity', 'Large Business', 'Asia Pacific');
INSERT INTO `test` VALUES ('Schumacher Group', 'The Schumacher Group is an emergency medicine practice management company', 'Healthcare', 'Productivity', 'Large Business', 'North America');
INSERT INTO `test` VALUES ('Reily Chartered Accountants', 'Reily Chartered Accountants offers accounting, tax and business development services ', 'Financial Services', 'Productivity', 'Small Business', 'Europe');
INSERT INTO `test` VALUES ('Rypple', 'Rypple is a social service that provides managers and their teams with a simpler way to give useful feedback', 'Technology', 'Productivity', 'Small Business', 'North America');
INSERT INTO `test` VALUES ('Tomcar', 'Multi purpose vehicle manufacturer', 'Automotive', 'Collaboration', 'Small Business', 'Asia Pacific');
INSERT INTO `test` VALUES ('Viki', 'Online video portal', 'Media', 'Collaboration', 'Small Business', 'Asia Pacific');
INSERT INTO `test` VALUES ('Voltas', 'Cooling systems manufacturer', 'Manufacturing', 'Savings', 'Large Business', 'Asia Pacific');
INSERT INTO `test` VALUES ('Darcl', 'Freight and Logistics Management company', 'Building & construction', 'Productivity', 'Large Business', 'Asia Pacific');
INSERT INTO `test` VALUES ('Sterlite', 'Global transmission solutions company', 'Manufacturing', 'Collaboration', 'Large Business', 'Asia Pacific');
