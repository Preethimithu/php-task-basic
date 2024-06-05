CREATE DATABASE website;
USE website;

CREATE TABLE content (
    id INT AUTO_INCREMENT PRIMARY KEY,
    heading VARCHAR(255),
    paragraph TEXT
);

CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    phone_number VARCHAR(255),
    email VARCHAR(255)
);

INSERT INTO content (heading, paragraph) VALUES 
('Gartner names ServiceNow a Leader in Enterprise Low-Code Application Platforms',
 'Read the complimentary 2023 Gartner® Magic QuadrantTM for Enterprise Low-Code Application Platforms for an unbiased, third-party evaluation of low code platform vendors, as organizations move to scale low code toward hyperautomation across the enterprise. From our perspective, ServiceNow is uniquely positioned to help customers build business-critical workflows with speed and grow and govern low-code app development at scale. Gain insight into what makes ServiceNow different. Gartner does not endorse any vendor, product or service depicted in its research publications, and does not advise technology users to select only those vendors with the highest ratings or other designation. Gartner research publications consist of the opinions of Gartner\'s research organization and should not be construed as statements of fact. Gartner disclaims all warranties, express or implied, with respect to this research, including any warranties of merchantability or fitness for a particular purpose. Gartner.');

SELECT * FROM content;
