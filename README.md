# Scraper Sample
Sample program for a scraping website built on Laravel.

## Features:

1. URL input bar
2. Page preview
3. Page content

## Some notes:
- Tried using Browsershot to take website screenshots, but cannot work out how to connect the node and npm binaries (I'm using a Windows machine and setting up Linux subsystem will take some time).
- Website screenshot uses [Google PageSpeed Insights API](https://developers.google.com/speed/docs/insights/v5/get-started), so loading pages will take some time. Also, it is also restricted to Google's API usage quota.
- Current model does not save previously scraped data. Further improvements can include introduction of databases to store previously scraped data, as well as navigation system on the database.
- Page content is based on the paragraph tags in the body section of a page.
- I used TIME articles as sample input URL to test out the scraper. Example URL: https://time.com/6096754/silicon-valley-optimization-mindset/

## To Do:
- Exception handling and unit testing
- Database integration
- React integration
- Database navigation
    - Pagination
    - Page filtering