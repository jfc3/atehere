# John F Croston III Ate Here - Release Notes

* John F Croston III Ate Here
* Release Number:  v.0.5.17
* Release Date: 02-04-2018

## Overview
This project of [John F Croston III's](http://jfciii.com) - ([@jfc3](https://twitter.com/jfc3)) allows people to select a city, state, or nearby location to see what restaurants I have eaten at and ones I want too (look for asterisks). These are the places I recommend you eat at when in those locations and find restaurants I recommend.

When I started this project, I had been thinking about a more involved version of this application that a person could keep track of all the places they wanted to eat when they travel. More of a personal recommendation or list of places to eat. So this was a way to try a few ideas out and make it quick and easy to display restaurant information, along with being a place online for me to keep them for now.

To see this application in action go to [John F Croston III Ate Here](http://jfciii.com/atehere/).

This project uses hand-coded JSON files of cities, states, and nearby locations, which currently are the following with their JSON file name after the name:

* Alabama - al
* Annapolis, MD - ann
* Austin, TX - aus
* Baltimore, MD - bal
* Buffalo, NY - buf
* Boston, MA - bos
* Califorani - ca
* Charleston, SC - chs
* Chicago, IL - chi
* Cleveland, PA - cle
* Columbus, OH - col
* Delaware - de
* Denver, CO - den
* Las Vegas, NV - las
* Los Angeles, CA - lax
* Louisville, KY - lou
* Maryland - md
* Memphis, TN -  mem
* Michigan - mi
* Mississippi - ms
* New Jersey - nj
* New Orleans, LA - msy
* New York, NY - nyc
* North Carolina - nc
* Northern California - nocal
* Northern Virginia - nva
* Oakland, CA - oak
* Ocean City, NJ - ocnj
* Pennsylvania - pa
* Philadelphia, PA - phl
* Phoenix, AZ - phx
* Portland, OR - pdx
* Rochester, NY - roc
* San Deigo, CA - san
* San Francisco, CA - sfo
* Seattle, WA - sea
* Southern California - socal
* South Carolina - sc
* St. Louis, MO - stl
* Syracuse, NY - syr
* Tennessee - tn
* Washington, DC - dca
* Washington - wa
* Wisconsin - wi

If you look in the CTY folder, you will find the full version of the city or location. There is a city.josn file that you can use as a tempalte to create other city files.

All the extra CLASSes for each restaurant when the page renders are there so they have microformats added to them, which is hepful to computers. Look for the 'vcard' CLASS at the beginnin gof each restaurant.

I created this more detailed version that has my recommendations or ones my friends whose food recommendations I trust, TV shows, blog posts, articles, etc. than the ones I created for my 10K Apart entry.

So in the near future, I plan on creating an application that people can keep track of the places they want to eat when they travel.

## New Features and Enhancements
Features:

* Travel more to be able to add more cities and more restaurants.
* Break the larger files of ten restaurants or more into multiple files, so people don't have to scroll as much to see places to eat for one city or location. Maybe make it 25 restaurants, so people don't have to load the second page.
* Add an accessible SVG map of the United States that will allow people to see places to eat in the nearby location.
* Look into adding social media for at least Twitter and Facebook so people can point their friends to the website or share their information with others.
* Add the ability to review a city, state, or location when offline for those times when you have no internet.
* List restaurants by city and by a state in case you're driving through a state on a road trip you can see what might be along your way. Not sure if that makes sense and will require making double updates when using JSON file to control page information.
* Improve way to update the list of cities and the array that keeps track of valid locations. Currently. Done in one file which needs to be updated and then deployed to the server and GitHub instead of multiple files.
* Create ability see places near you. Most likely use Google maps and geolocation.
* Add restaurant and food types/categories.
* Have the ability to narrow down choices by food type or category of food.

Enhancements with most recent on top:

* Added Southern California to the drop down list and created necessary SOCAL JSON file.
* Updated INDEX.php page not to allow default values for ADD2, CITY, URL, and EATEN.
* Added Charleston, SC to the drop down list and created necessary CHS JSON file.
* Added South Carolina to the drop down list and created necessary SC JSON file.
* Added Michigan to the drop down list and created necessary MI JSON file.
* Added Denver, CO to the drop down list and created necessary DEN JSON file.
* Added Phoenix, AZ to the drop down list and created necessary PHX JSON file.
* Added Wisconsin to the drop down list and created necessary WI JSON file.
* Added Alabama to the drop down list and created necessary AL JSON file.
* Added Tennessee to the drop down list and created necessary TN JSON file.
* Added three Annapolis, MD (ANN) to the MD JSON file.
* Frederick, MD to the drop down list and created necessary FDK JSON file.
* Made the SLCT (city/state) from the URL lowercase so it can be checked correctly against the array and not throw an error if they match besides the case.
* Updated Twitter and GitHub links, along with the e-mail subject line in the footer.
* St. Louis, MO to the drop down list and created necessary STL JSON file.
* Louisville, KY to the drop down list and created necessary LOU JSON file.
* Updated code with Microformats for the phone number and notes/description.
* Washington to the drop down list and created necessary WA JSON file.
* Seattle, WA to the drop down list and created necessary SEA JSON file.
* Oakland, CA to the drop down list and created necessary OAK JSON file.
* Northern California to the drop down list and created necessary NOCAL JSON file.
* Added San Francisco, CA to the drop down list and created necessary SFO JSON file.
* Added California to the drop down list and created necessary CA JSON file.
* Added North Carolina to the drop down list and created necessary NC JSON file.
* Added New Jersey to the drop down list and created necessary NJ JSON file.
* Added Florida to the drop down list and created necessary FL JSON file.
* Added Chicago, IL, to the drop down list and created necessary CHI JSON file.
* Added Pennsylvania to the drop down list and created necessary PA JSON file.
* Added ability to add photos and ALT text to restaurants. Now need to do some more testing before rolling it out to everyone.
* Added two fields to allow people to have a photo (url) and ALT text. Haven't written code to make this work yet.
* Removed asterisk from name and added field that denotes I have eaten there or not. Wrote code to make this work.
* Added Los Angles, CA, to the drop down lsit and created a JSON file too.
* Added a way to check that people are not attempting to change the URL to find places not listed. Used an ARRAY that loops through the list of valid cities to look for matches. If it finds onethen it creates the page if JSON file exsts.
* Created in page anchor by using the restaurant's name and removing the blank spaces along with special characters, making it all lowercase, and adding a tab index of negative one ( tabindex="-1" ). I did this so people can link directly to a given restaurant on a particular page.
* Added a few more restaurants to the DCA and NVA JSON files, along with notes to the a few palces that were missing them.
* Added "extended-address" SPAN to address for additional address alogn with moving <BR /> after the SPAN instead of inside.
* Added note with an ID tied to the aria-described by so screen reader users know the address link goes to Google Maps.
* Made address a link to Goolge Maps.
* Removed the "Address" and Phone" text from screen.
* Added e-mail link for questions in the footer.
* Added link to project on GitHub in the footer.
* Added error message for when people submit the FORM without selecting a location.
* Added code to check INPUT field for special characters.
* Added Google Analytics to see if the website is getting any traffic besides myself.
* Added Boston, MA, to the drop down list and created necessary JSON.

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