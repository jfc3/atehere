# John F Croston III Ate Here - Release Notes

* John F Croston III Ate Here
* Release Number:  v.0.4.0
* Release Date: 04-02-2017

## Overview
This project of [John F Croston III's](http://jfciii.com) - ([@jfc3](https://twitter.com/jfc3)) allows people to select a city, state, or nearby location to see what restaurants I have eaten at and ones I want too (look for asterisks). These are the places I recommend you eat at when in those locations and find restaurants I recommend.

When I started this project, I had been thinking about a more involved version of this application that a person could keep track of all the places they wanted to eat when they travel. More of a personal recommendation or list of places to eat. So this was a way to try a few ideas out and make it quick and easy to display restaurant information, along with being a place online for me to keep them for now.

This project uses hand-coded JSON files of cities, states, and nearby locations, which currently are the following with their JSON file name after the name:

* Annapolis, MD - ann
* Austin, TX - aus
* Baltimore, MD - bal
* Buffalo, NY - buf
* Boston, MA - bos
* Cleveland, PA - cle
* Columbus, OH - col
* Delaware - de
* Las Vegas, NV - las
* Los Angeles, CA - lax
* Maryland - md
* Memphis, TN -  mem
* Mississippi - ms
* New Orleans, LA - msy
* New York, NY - nyc
* Northern Virginia - nva
* Ocean City, NJ - ocnj
* Philadelphia, PA - phl
* Portland, OR - pdx
* Rochester, NY - roc
* San Deigo, CA - san
* Syracuse, NY - syr
* Washington, DC - dca

If you look in the CTY folder, you will find the full version of the city or location. There is a city.josn file that you can use as a tempalte to create other city files.

All the extra CLASSes for each restaurant when the page renders are there so they have microformats added to them, which is hepful to computers. Look for the 'vcard' CLASS at the beginnin gof each restaurant.

I created this more detailed version that has my recommendations or ones my friends whose food recommendations I trust, TV shows, blog posts, articles, etc. than the ones I created for my 10K Apart entry.

So in the near future, I plan on creating an application that people can keep track of the places they want to eat when they travel.

## New Features and Enhancements
Features:

* Travel more to be able to add more cities and more restaurants.
* Break the larger files of ten restaurants or more into multiple files so people don't have to scroll as much to see places to eat for one city or location. Maybe make it 25 restaurants so people don't have to load a second page.
* Add an accessible SVG map of the Unites States that will allow people to see places to eat in the nearby location.
* Add a way to check that people are not attempting to change the URL to find places not listed. Most likely to use an ARRAY so we can loop through the list to look for matches.
* Look into adding social media for at least Twitter and Facebook so people can point their friends to the website or share there information with others.
* Have the ability to add photo and ALT text.

Enhancements:

* Added Boston, MA, to drop down list and created necessary JSON.
* Added Google Analytics to see if the website is getting any traffic besides myself.
* Added code to check INPUT field for special characters.
* Added error message for when people submit the FORM without selecting a location.
* Added link to project on GitHub in the footer.
* Added e-mail link for questions in the footer.
* Removed the "Address" and Phone" text from screen.
* Made address a link to Goolge Maps.
* Added note with an ID tied to the aria-described by so screen reader users know the address link goes to Google Maps.
* Added "extended-address" SPAN to address for additional address alogn with moving <BR /> after the SPAN instead of inside.
* Added a few more restaurants to the DCA and NVA JSON files, along with notes to the a few palces that were missing them.
* Created in page anchor by using the restaurant's name and removing the blank spaces along with special characters, making it all lowercase, and adding a tab index of negative one ( tabindex="-1" ). I did this so people can link directly to a given restaurant on a particular page.
* Added Los Angles, CA, to drop down lsit and created a JSON file too.
* Removed asterisk from name and added field that denotes I have eaten there or not. Wrote code to make this work.
* Added two firleds to allow people to have a photo (url) and ALT text. Haven't written code to make this work yet.

## Installation
Please have the following installed before running:
* You will need a server with at least PHP 5.6

## Versioning notation
John F Croston III Ate Here public release notation follows the semantic versioning as outlined on http://semver.org
To summarize,
Given a version number MAJOR.MINOR.PATCH, increment the:

* MAJOR version for incompatible API changes,
* MINOR version for backwards-compatible manner alterations and
* PATCH version for backwards-compatible bug fixes.

Additional labels for pre-release, and build metadata are available as extensions to the MAJOR.MINOR.PATCH format.

## Future Notes

* n/a